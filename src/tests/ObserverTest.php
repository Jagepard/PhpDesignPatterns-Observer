<?php

declare(strict_types = 1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2017, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;
use Behavioral\Observer\FootballSubject;
use Behavioral\Observer\FootballObserver;
use Behavioral\Observer\FootballEvent;

class ObserverTest extends PHPUnit_Framework_TestCase
{

    /**
     * @var FootballSubject
     */
    protected $team;

    protected function setUp(): void
    {
        $this->team = new FootballSubject('Manchester United');
    }

    public function testFootballSubject(): void
    {
        $this->assertInstanceOf(FootballSubject::class, $this->getTeam());
        $this->assertEquals('Manchester United', $this->getTeam()->getSubjectName());
    }

    public function testTeamAction(): void
    {
        $this->getTeam()->attachObserver(new FootballObserver('John'));
        $this->getTeam()->attachObserver(new FootballObserver('Bill'));

        ob_start();
        $this->getTeam()->notify(new FootballEvent(FootballEvent::GOAL));
        $goal = ob_get_clean();

        $this->assertEquals($goal, "John has get information about: Manchester United Goal!!! \nBill has get information about: Manchester United Goal!!! \n");

        ob_start();
        $this->getTeam()->notify(new FootballEvent(FootballEvent::MISS));
        $miss = ob_get_clean();

        $this->assertEquals($miss, "John has get information about: Manchester United missing a ball((( \nBill has get information about: Manchester United missing a ball((( \n");

        ob_start();
        $this->getTeam()->notify(new FootballEvent(FootballEvent::CARD));
        $card = ob_get_clean();

        $this->assertEquals($card, "John has get information about: Manchester United getting a yellow card \nBill has get information about: Manchester United getting a yellow card \n");

        ob_start();
        $this->getTeam()->notify(new FootballEvent('random'));
        $random = ob_get_clean();

        $this->assertEquals($random, "John has get information about: Manchester United random \nBill has get information about: Manchester United random \n");
    }

    public function testDetachObserver()
    {
        $observer = new FootballObserver('Петя');

        $this->assertEquals($observer->getObserverName(), 'Петя');

        $this->getTeam()->attachObserver($observer);

        $this->assertEquals('Петя', $this->getProperty('observers')->getValue($this->getTeam())['Петя']->getObserverName());

        $this->getTeam()->detachObserver('Петя');

        $this->assertCount(0, $this->getProperty('observers')->getValue($this->getTeam()));
    }

    /**
     * @param string $name
     *
     * @return ReflectionProperty
     */
    protected function getProperty(string $name): ReflectionProperty
    {
        $class = new ReflectionClass($this->getTeam());
        $property = $class->getProperty($name);
        $property->setAccessible(true);

        return $property;
    }

    /**
     * @return mixed
     */
    public function getTeam(): FootballSubject
    {
        return $this->team;
    }
}