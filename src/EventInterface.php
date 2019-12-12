<?php

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Observer;

interface EventInterface
{
    /**
     * @return string
     */
    public function getEventName(): string;
}
