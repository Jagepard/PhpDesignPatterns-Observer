<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\Observer;

class FootballSubject implements SubjectInterface
{
    private string $name;

    private array $observers = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function attachObserver(ObserverInterface $observer): void
    {
        if (array_key_exists($observer->getName(), $this->observers)) {
            throw new \InvalidArgumentException('Observer is already exist');
        }

        $this->observers[$observer->getName()] = $observer;
    }

    public function detachObserver(string $name): void
    {
        if (!array_key_exists($name, $this->observers)) {
            throw new \InvalidArgumentException('Observer is not exist');
        }

        unset($this->observers[$name]);
    }

    public function notify(EventInterface $event): void
    {
        foreach ($this->observers as $observer) {
            printf("%s has get information about: %s %s \n",
                $observer->getName(), $this->getName(), $event->getName());
        }
    }

    public function getName(): string
    {
        return $this->name;
    }
}
