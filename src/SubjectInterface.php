<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Observer;

interface SubjectInterface
{
    public function attachObserver(ObserverInterface $observer): void;
    public function detachObserver(string $observerName): void;
    public function notifyObservers(EventInterface $event): void;
}
