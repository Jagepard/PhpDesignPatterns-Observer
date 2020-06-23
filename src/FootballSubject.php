<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Observer;

class FootballSubject implements SubjectInterface
{
    private string $subjectName;

    private array $observers = [];

    public function __construct(string $subjectName)
    {
        $this->subjectName = $subjectName;
    }

    public function attachObserver(ObserverInterface $observer): void
    {
        if (array_key_exists($observer->getObserverName(), $this->observers)) {
            throw new \InvalidArgumentException("Observer is already exist");
        }

        $this->observers[$observer->getObserverName()] = $observer;
    }

    public function detachObserver(string $subjectName): void
    {
        if (!array_key_exists($subjectName, $this->observers)) {
            throw new \InvalidArgumentException("Observer is not exist");
        }

        unset($this->observers[$subjectName]);
    }

    public function notifyObservers(EventInterface $event): void
    {
        foreach ($this->observers as $observer) {
            printf(
                "%s has get information about: %s %s \n",
                $observer->getObserverName(),
                $this->subjectName,
                $event->getEventName()
            );
        }
    }

    public function getSubjectName(): string
    {
        return $this->subjectName;
    }
}
