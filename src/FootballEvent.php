<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Observer;

class FootballEvent implements EventInterface
{
    const GOAL = 'Goal!!!';
    const MISS = 'missing a ball(((';
    const VIOLATION = 'getting a yellow card';

    /**
     * @var string
     */
    private $eventName;

    /**
     * FootballEvent constructor.
     * @param  string  $eventName
     */
    public function __construct(string $eventName)
    {
        $this->eventName = $eventName;
    }

    /**
     * @return string
     */
    public function getEventName(): string
    {
        return $this->eventName;
    }
}
