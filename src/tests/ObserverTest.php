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
        $this->team = new FootballSubject('Динамо');
    }

    public function testFootballSubject(): void
    {
        $this->assertInstanceOf(FootballSubject::class, $this->getTeam());
        $this->assertEquals('Динамо', $this->getTeam()->getSubjectName());
    }

    public function testTeamAction(): void
    {
        $this->getTeam()->attachObserver(new FootballObserver('Петя'));
        $this->getTeam()->attachObserver(new FootballObserver('Вася'));

        ob_start();
        $this->getTeam()->notify(new FootballEvent(FootballEvent::GOAL, $this->getTeam()));
        $goal = ob_get_clean();

        $this->assertEquals($goal, "Петя празнует ГОЛ!!! Динамо\nВася празнует ГОЛ!!! Динамо\n");

        ob_start();
        $this->getTeam()->notify(new FootballEvent(FootballEvent::MISS, $this->getTeam()));
        $miss = ob_get_clean();

        $this->assertEquals($miss, "Петя поддерживает Динамо после пропущенного мяча\nВася поддерживает Динамо после пропущенного мяча\n");

        ob_start();
        $this->getTeam()->notify(new FootballEvent(FootballEvent::FIRE, $this->getTeam()));
        $fire = ob_get_clean();

        $this->assertEquals($fire, "Петя поджигает файер\nВася поджигает файер\n");

        ob_start();
        $this->getTeam()->notify(new FootballEvent('random', $this->getTeam()));
        $random = ob_get_clean();

        $this->assertEquals($random, "Петя отреагировал на событие Динамо\nВася отреагировал на событие Динамо\n");
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