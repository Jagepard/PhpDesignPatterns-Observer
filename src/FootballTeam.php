<?php

declare(strict_types = 1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2017, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Behavioral\Observer;

/**
 * Class FootballTeam
 *
 * @package Behavioral\Observer
 */
class FootballTeam implements SubjectInterface
{

    /**
     * @var array
     */
    protected $observers = [];

    /**
     * @var
     */
    protected $name;

    /**
     * FootballTeam constructor.
     *
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }


    /**
     * @param \Behavioral\Observer\ObserverInterface $observer
     */
    public function attachObserver(ObserverInterface $observer)
    {
        $this->observers[] = $observer;
    }

    /**
     * @param \Behavioral\Observer\ObserverInterface $observer
     */
    public function detachObserver(ObserverInterface $observer)
    {
        foreach ($this->observers as $key => $obs) {
            if ($obs === $observer) {
                unset($this->observers[$key]);
            }
        }
    }

    public function notify(EventIterface $event)
    {
        foreach ($this->observers as $observer) {
            $observer->update($event);
        }
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    public function goalAction()
    {
        $event = new FootballEvent(FootballEvent::GOAL, $this);
        $this->notify($event);
    }

    public function missAction()
    {
        $event = new FootballEvent(FootballEvent::MISS, $this);
        $this->notify($event);
    }

    public function fireAction()
    {
        $event = new FootballEvent(FootballEvent::FIRE, $this);
        $this->notify($event);
    }
}