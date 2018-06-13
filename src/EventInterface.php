<?php

declare(strict_types=1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\Observer;

/**
 * Interface EventInterface
 * @package Behavioral\Observer
 */
interface EventInterface
{

    /**
     * @return string
     */
    public function getName(): string;
}
