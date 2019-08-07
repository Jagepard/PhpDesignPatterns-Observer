<?php

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @license   https://mit-license.org/ MIT
 */

namespace Behavioral\Observer;

interface EventInterface
{
    /**
     * @return string
     */
    public function getName(): string;
}
