<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Observer;

class FootballObserver implements ObserverInterface
{
    protected string $observerName;

    public function __construct(string $observerName)
    {
        $this->observerName = $observerName;
    }

    public function getObserverName(): string
    {
        return $this->observerName;
    }
}
