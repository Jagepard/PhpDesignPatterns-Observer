<?php

declare(strict_types = 1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2017, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Behavioral\Observer;

/**
 * Interface EventInterface
 *
 * @package Behavioral\Observer
 */
interface EventInterface
{

    /**
     * @return string
     */
    public function getEventName(): string ;
}
