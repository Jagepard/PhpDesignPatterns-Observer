<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Observer;

interface SubjectInterface
{
    /**
     * @param  ObserverInterface $observer
     * @return void
     */
    public function attachObserver(ObserverInterface $observer): void;

    /**
     * @param  string $observerName
     * @return void
     */
    public function detachObserver(string $observerName): void;

    /**
     * @param  EventInterface $event
     * @return void
     */
    public function notifyObservers(EventInterface $event): void;
}
