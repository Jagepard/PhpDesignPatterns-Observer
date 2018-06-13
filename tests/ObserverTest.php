<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\Observer\Tests;

use Behavioral\Observer\FootballEvent;
use Behavioral\Observer\FootballSubject;
use Behavioral\Observer\FootballObserver;
use PHPUnit\Framework\TestCase as PHPUnit_Framework_TestCase;

/**
 * Class ObserverTest
 * @package Behavioral\Observer\Tests
 */
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
        $this->assertInstanceOf(FootballSubject::class, $this->team);
        $this->assertEquals('Manchester United', $this->team->getName());
    }

    public function testTeamAction(): void
    {
        $this->team->attachObserver(new FootballObserver('John'));
        $this->team->attachObserver(new FootballObserver('Bill'));

        ob_start();
        $this->team->notify(new FootballEvent(FootballEvent::GOAL));
        $goal = ob_get_clean();

        $this->assertEquals($goal, "John has get information about: Manchester United Goal!!! \nBill has get information about: Manchester United Goal!!! \n");

        ob_start();
        $this->team->notify(new FootballEvent(FootballEvent::MISS));
        $miss = ob_get_clean();

        $this->assertEquals($miss, "John has get information about: Manchester United missing a ball((( \nBill has get information about: Manchester United missing a ball((( \n");

        ob_start();
        $this->team->notify(new FootballEvent(FootballEvent::CARD));
        $card = ob_get_clean();

        $this->assertEquals($card, "John has get information about: Manchester United getting a yellow card \nBill has get information about: Manchester United getting a yellow card \n");

        ob_start();
        $this->team->notify(new FootballEvent('random'));
        $random = ob_get_clean();

        $this->assertEquals($random, "John has get information about: Manchester United random \nBill has get information about: Manchester United random \n");
    }

    public function testDetachObserver()
    {
        $observer = new FootballObserver('Петя');
        $this->assertEquals($observer->getName(), 'Петя');

        $this->team->attachObserver($observer);
        $this->assertEquals('Петя', $this->getProperty('observers')->getValue($this->team)['Петя']->getName());

        $this->team->detachObserver('Петя');
        $this->assertCount(0, $this->getProperty('observers')->getValue($this->team));
    }

    protected function getProperty(string $name): \ReflectionProperty
    {
        $class    = new \ReflectionClass($this->team);
        $property = $class->getProperty($name);
        $property->setAccessible(true);

        return $property;
    }
}
