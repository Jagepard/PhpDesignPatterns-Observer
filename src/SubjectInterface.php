<?php

declare(strict_types = 1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2017, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Behavioral\Observer;

/**
 * Interface SubjectInterface
 *
 * @package Behavioral\Observer
 */
interface SubjectInterface
{

    /**
     * @param \Behavioral\Observer\ObserverInterface $observer
     */
    public function attachObserver(ObserverInterface $observer): void;

    /**
     * @param \Behavioral\Observer\ObserverInterface $observer
     */
    public function detachObserver(ObserverInterface $observer): void;

    /**
     * @param \Behavioral\Observer\EventInterface $event
     */
    public function notify(EventInterface $event): void;
}