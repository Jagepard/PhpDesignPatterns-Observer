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
class FootballEvent implements EventIterface
{

    const GOAL = 'goal';
    const MISS = 'miss a ball';
    const FIRE = 'fire';

    /**
     * @var
     */
    protected $name;

    /**
     * @var
     */
    protected $sender;

    /**
     * FootballEvent constructor.
     *
     * @param $name
     * @param $sender
     */
    public function __construct($name, FootballTeam $sender)
    {
        $this->name   = $name;
        $this->sender = $sender;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getSender()
    {
        return $this->sender;
    }
}
