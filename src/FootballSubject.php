<?php

declare(strict_types=1);

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
        $this->observers[$observer->getObserverName()] = $observer;
    }

    /**
     * @param string $observerName
     */
    public function detachObserver(string $observerName): void
    {
        if (array_key_exists($observerName, $this->observers)) {
            unset($this->observers[$observerName]);
        }
    }

    /**
     * @param EventInterface $event
     */
    public function notify(EventInterface $event): void
    {
        foreach ($this->observers as $observer) {
            printf("%s has get information about: %s %s \n",
                $observer->getObserverName(), $this->getSubjectName(), $event->getEventName());
        }
    }

    /**
     * @return mixed
     */
    public function getSubjectName(): string
    {
        return $this->subjectName;
    }
}
