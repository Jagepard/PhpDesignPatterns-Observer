<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Observer;

class FootballSubject implements SubjectInterface
{
    use NameTrait;

    private array $observers = [];

    /**
     * Adds an observer
     * ---------------------
     * Добавляет наблюдателя
     *
     * @param  ObserverInterface $observer
     * @return void
     */
    public function attachObserver(ObserverInterface $observer): void
    {
        if (array_key_exists($observer->getName(), $this->observers)) {
            throw new \InvalidArgumentException("Observer is already exist");
        }

        $this->observers[$observer->getName()] = $observer;
    }

    /**
     * Removes an observer
     * -------------------
     * Убирает наблюдателя
     *
     * @param  string $name
     * @return void
     */
    public function detachObserver(string $name): void
    {
        if (!array_key_exists($name, $this->observers)) {
            throw new \InvalidArgumentException("Observer is not exist");
        }

        unset($this->observers[$name]);
    }

    /**
     * Notifies all observers of an event
     * --------------------------------------
     * Уведомляет всех наблюдателей о событии
     *
     * @param  EventInterface $event
     * @return void
     */
    public function notifyObservers(EventInterface $event): void
    {
        foreach ($this->observers as $observer) {
            printf(
                "%s has get information about: %s %s \n",
                $observer->getName(),
                $this->name,
                $event->getName()
            );
        }

        print("\n");
    }
}
