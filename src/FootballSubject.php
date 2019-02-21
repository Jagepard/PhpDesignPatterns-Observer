<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\Observer;

/**
 * Class FootballSubject
 * @package Behavioral\Observer
 */
class FootballSubject implements SubjectInterface
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var array
     */
    private $observers = [];

    /**
     * FootballSubject constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @param ObserverInterface $observer
     */
    public function attachObserver(ObserverInterface $observer): void
    {
        $this->observers[$observer->getName()] = $observer;
    }

    /**
     * @param string $name
     */
    public function detachObserver(string $name): void
    {
        if (!array_key_exists($name, $this->observers)) {
            throw new \InvalidArgumentException();
        }

        unset($this->observers[$name]);
    }

    /**
     * @param EventInterface $event
     */
    public function notify(EventInterface $event): void
    {
        foreach ($this->observers as $observer) {
            printf("%s has get information about: %s %s \n",
                $observer->getName(), $this->getName(), $event->getName());
        }
    }

    /**
     * @return mixed
     */
    public function getName(): string
    {
        return $this->name;
    }
}
