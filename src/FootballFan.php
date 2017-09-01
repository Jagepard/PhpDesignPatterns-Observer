<?php

declare(strict_types = 1);

/**
 * @author    : Korotkov Danila <dankorot@gmail.com>
 * @copyright Copyright (c) 2017, Korotkov Danila
 * @license   http://www.gnu.org/licenses/gpl.html GNU GPLv3.0
 */

namespace Behavioral\Observer;

/**
 * Class FootballFan
 *
 * @package Behavioral\Observer
 */
class FootballFan implements ObserverInterface
{

    /**
     * @var
     */
    protected $name;

    /**
     * FootballFan constructor.
     *
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function update(EventIterface $event)
    {
        switch ($event->getName()) {
            case FootballEvent::GOAL:
                printf(
                    "%s празнует ГОЛ!!! %s\n",
                    $this->getName(), $event->getSender()->getName()
                );
                break;
            case FootballEvent::MISS:
                printf(
                    "%s поддерживает %s после пропущенного мяча\n",
                    $this->getName(), $event->getSender()->getName()
                );
                break;
            case FootballEvent::FIRE:
                printf(
                    "%s поджигает файер\n", $this->getName()
                );
                break;
            default:
                printf(
                    "%s отреагировал на событие %s\n",
                    $this->getName(), $event->getSender()->getName()
                );
        }
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
}
