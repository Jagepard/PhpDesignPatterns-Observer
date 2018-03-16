<?php

declare(strict_types = 1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2017, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Behavioral\Observer;

/**
 * Class FootballObserver
 *
 * @package Behavioral\Observer
 */
class FootballObserver implements ObserverInterface
{

    /**
     * @var string
     */
    protected $observerName;

    /**
     * FootballObserver constructor.
     *
     * @param $observerName
     */
    public function __construct(string $observerName)
    {
        $this->observerName = $observerName;
    }

    /**
     * @return string
     */
    public function getObserverName(): string
    {
        return $this->observerName;
    }
}
