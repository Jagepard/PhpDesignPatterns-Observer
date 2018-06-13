<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\Observer;

/**
 * Class FootballObserver
 * @package Behavioral\Observer
 */
class FootballObserver implements ObserverInterface
{

    /**
     * @var string
     */
    protected $name;

    /**
     * FootballObserver constructor.
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
