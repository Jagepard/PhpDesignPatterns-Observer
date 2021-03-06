<?php

namespace Behavioral\Observer;

require_once "vendor/autoload.php";

$team = new FootballSubject("West ham United");

try {
    $team->attachObserver(new FootballObserver("John"));
    $team->attachObserver(new FootballObserver("Bill"));

    $team->notifyObservers(new FootballEvent(FootballEvent::GOAL));
    $team->notifyObservers(new FootballEvent(FootballEvent::MISS));
    $team->notifyObservers(new FootballEvent(FootballEvent::VIOLATION));

    $team->detachObserver("Bill");
    $team->attachObserver(new FootballObserver("Steve"));

    $team->notifyObservers(new FootballEvent(FootballEvent::GOAL));
    $team->notifyObservers(new FootballEvent("Offside"));
} catch (\Exception $e) {
    echo "Caught exception: {$e->getMessage()} \n";
}
