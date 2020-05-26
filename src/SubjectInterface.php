<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Observer;

interface SubjectInterface
{
    /**
     * @param  ObserverInterface  $observer
     */
    public function attachObserver(ObserverInterface $observer): void;

    /**
     * @param  string  $observerName
     */
    public function detachObserver(string $observerName): void;

    /**
     * @param  EventInterface  $event
     */
    public function notifyObservers(EventInterface $event): void;
}
