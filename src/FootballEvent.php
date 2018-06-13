<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\Observer;

/**
 * Class FootballEvent
 * @package Behavioral\Observer
 */
class FootballEvent implements EventInterface
{

    const GOAL = 'Goal!!!';
    const MISS = 'missing a ball(((';
    const CARD = 'getting a yellow card';

    /**
     * @var string
     */
    protected $name;

    /**
     * FootballEvent constructor.
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
