<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Observer;

class FootballEvent implements EventInterface
{
    use NameTrait;

    const GOAL      = "GOAL";
    const MISS      = "MISS";
    const VIOLATION = "VIOLATION";
}
