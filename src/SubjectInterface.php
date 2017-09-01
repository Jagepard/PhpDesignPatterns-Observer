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
     *
     * @return mixed
     */
    public function attachObserver(ObserverInterface $observer);

    /**
     * @param \Behavioral\Observer\ObserverInterface $observer
     *
     * @return mixed
     */
    public function detachObserver(ObserverInterface $observer);

    /**
     * @param \Behavioral\Observer\EventIterface $event
     *
     * @return mixed
     */
    public function notify(EventIterface $event);
}