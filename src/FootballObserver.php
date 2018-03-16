<?php

declare(strict_types = 1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2017, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Behavioral\Observer;

/**
 * Class FootballObserver
 *
 * @package Behavioral\Observer
 */
class FootballObserver implements ObserverInterface
{

    /**
     * @var string
     */
    protected $observerName;

    /**
     * FootballObserver constructor.
     *
     * @param $observerName
     */
    public function __construct(string $observerName)
    {
        $this->observerName = $observerName;
    }

    public function eventReaction(EventInterface $event, SubjectInterface $subject): void
    {
        switch ($event->getEventName()) {
            case FootballEvent::GOAL:
                printf(
                    "%s празнует ГОЛ!!! %s\n",
                    $this->getObserverName(), $subject->getSubjectName()
                );
                break;
            case FootballEvent::MISS:
                printf(
                    "%s поддерживает %s после пропущенного мяча\n",
                    $this->getObserverName(), $subject->getSubjectName()
                );
                break;
            case FootballEvent::FIRE:
                printf(
                    "%s поджигает файер\n", $this->getObserverName()
                );
                break;
            default:
                printf(
                    "%s отреагировал на событие %s\n",
                    $this->getObserverName(), $subject->getSubjectName()
                );
        }
    }

    /**
     * @return string
     */
    public function getObserverName(): string
    {
        return $this->observerName;
    }
}
