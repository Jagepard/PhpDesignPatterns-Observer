<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\Observer;

/**
 * Interface SubjectInterface
 * @package Behavioral\Observer
 */
interface SubjectInterface
{

    /**
     * @param \Behavioral\Observer\ObserverInterface $observer
     */
    public function attachObserver(ObserverInterface $observer): void;

    /**
     * @param string $observerName
     */
    public function detachObserver(string $observerName): void;

    /**
     * @param \Behavioral\Observer\EventInterface $event
     */
    public function notify(EventInterface $event): void;
}
