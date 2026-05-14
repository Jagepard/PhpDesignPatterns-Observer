<?php

declare(strict_types=1);

/**
 * @author  : Jagepard <jagepard@yandex.ru>
 * @license https://mit-license.org/ MIT
 */

namespace Behavioral\Observer;

class FootballObserver implements ObserverInterface
{
    use NameTrait;

    public function update(SubjectInterface $subject, EventInterface $event): void
    {
        echo "The observer " . $this->getName() 
            . " received event about: " 
            . $subject->getName() . " " 
            . $event->getName() . "\n";
    }
}
