<?php

declare(strict_types = 1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2017, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Behavioral\Observer;

/**
 * Class FootballSubject
 *
 * @package Behavioral\Observer
 */
class FootballSubject implements SubjectInterface
{

    /**
     * @var array
     */
    protected $observers = [];

    /**
     * @var string
     */
    protected $subjectName;

    /**
     * FootballSubject constructor.
     *
     * @param string $subjectName
     */
    public function __construct(string $subjectName)
    {
        $this->subjectName = $subjectName;
    }

    /**
     * @param ObserverInterface $observer
     */
    public function attachObserver(ObserverInterface $observer): void
    {
        $this->observers[] = $observer;
    }

    /**
     * @param \Behavioral\Observer\ObserverInterface $observer
     */
    public function detachObserver(ObserverInterface $observer): void
    {
        foreach ($this->observers as $key => $obs) {
            if ($obs === $observer) {
                unset($this->observers[$key]);
            }
        }
    }

    /**
     * @return mixed
     */
    public function getSubjectName(): string
    {
        return $this->subjectName;
    }

    /**
     * @param EventInterface $event
     */
    public function teamAction(EventInterface $event): void
    {
        $this->notify($event);
    }

    /**
     * @param EventInterface $event
     */
    public function notify(EventInterface $event): void
    {
        foreach ($this->observers as $observer) {
            $observer->eventReaction($event);
        }
    }
}
