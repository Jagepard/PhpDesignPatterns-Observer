<?php

declare(strict_types = 1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2017, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Behavioral\Observer;

/**
 * Class FootballEvent
 *
 * @package Behavioral\Observer
 */
class FootballEvent implements EventInterface
{

    /**
     *
     */
    const GOAL = 'goal';
    /**
     *
     */
    const MISS = 'miss a ball';
    /**
     *
     */
    const FIRE = 'fire';

    /**
     * @var string
     */
    protected $eventName;

    /**
     * @var FootballSubject
     */
    protected $footballSubject;

    /**
     * FootballEvent constructor.
     *
     * @param string          $eventName
     * @param FootballSubject $footballSubject
     */
    public function __construct(string $eventName, FootballSubject $footballSubject)
    {
        $this->eventName       = $eventName;
        $this->footballSubject = $footballSubject;
    }

    /**
     * @return string
     */
    public function getEventName(): string
    {
        return $this->eventName;
    }

    /**
     * @return FootballSubject
     */
    public function getFootballSubject(): FootballSubject
    {
        return $this->footballSubject;
    }
}
