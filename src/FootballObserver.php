<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Observer;

class FootballObserver implements ObserverInterface
{
    /**
     * @var string
     */
    protected $observerName;

    /**
     * FootballObserver constructor.
     * @param  string  $observerName
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
