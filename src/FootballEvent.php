<?php

declare(strict_types=1);

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

    const GOAL = 'Goal!!!';
    const MISS = 'missing a ball(((';
    const CARD = 'getting a yellow card';

    /**
     * @var string
     */
    protected $eventName;

    /**
     * FootballEvent constructor.
     * @param string $eventName
     */
    public function __construct(string $eventName)
    {
        $this->eventName = $eventName;
    }

    /**
     * @return string
     */
    public function getEventName(): string
    {
        return $this->eventName;
    }
}
