<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\Observer\Tests;

use Behavioral\Observer\{FootballEvent, FootballSubject, FootballObserver, SubjectInterface};
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

class ObserverTest extends PHPUnit_Framework_TestCase
{
    private SubjectInterface $team;

    protected function setUp(): void
    {
        $this->team = new FootballSubject('Manchester United');
    }

    public function testFootballSubject(): void
    {
        $this->assertInstanceOf(FootballSubject::class, $this->getTeam());
        $this->assertEquals('Manchester United', $this->getTeam()->getName());
    }

    public function testTeamAction(): void
    {
        $this->getTeam()->attachObserver(new FootballObserver('John'));
        $this->getTeam()->attachObserver(new FootballObserver('Bill'));

        ob_start();
        $this->getTeam()->notify(new FootballEvent(FootballEvent::GOAL));
        $goal = ob_get_clean();

        $this->assertEquals("John has get information about: Manchester United Goal!!! \nBill has get information about: Manchester United Goal!!! \n", $goal);

        ob_start();
        $this->getTeam()->notify(new FootballEvent(FootballEvent::MISS));
        $miss = ob_get_clean();

        $this->assertEquals("John has get information about: Manchester United missing a ball((( \nBill has get information about: Manchester United missing a ball((( \n", $miss);

        ob_start();
        $this->getTeam()->notify(new FootballEvent(FootballEvent::CARD));
        $card = ob_get_clean();

        $this->assertEquals("John has get information about: Manchester United getting a yellow card \nBill has get information about: Manchester United getting a yellow card \n", $card);

        ob_start();
        $this->getTeam()->notify(new FootballEvent('random'));
        $random = ob_get_clean();

        $this->assertEquals("John has get information about: Manchester United random \nBill has get information about: Manchester United random \n", $random);
    }

    public function testDetachObserver()
    {
        $observer = new FootballObserver('Петя');
        $this->assertEquals('Петя', $observer->getName());

        $this->getTeam()->attachObserver($observer);
        $this->assertEquals('Петя', $this->getProperty('observers')->getValue($this->getTeam())['Петя']->getName());

        $this->getTeam()->detachObserver('Петя');
        $this->assertCount(0, $this->getProperty('observers')->getValue($this->getTeam()));
    }

    protected function getProperty(string $name): \ReflectionProperty
    {
        $class    = new \ReflectionClass($this->getTeam());
        $property = $class->getProperty($name);
        $property->setAccessible(true);

        return $property;
    }

    public function getTeam(): SubjectInterface
    {
        return $this->team;
    }
}
