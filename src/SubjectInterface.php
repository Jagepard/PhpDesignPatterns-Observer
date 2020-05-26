<?php

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\Observer;

interface SubjectInterface
{
    public function attachObserver(ObserverInterface $observer): void;

    public function detachObserver(string $observerName): void;

    public function notify(EventInterface $event): void;
}
