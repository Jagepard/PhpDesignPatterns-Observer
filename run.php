<?php

require_once 'vendor/autoload.php';

use Behavioral\Observer\FootballSubject;
use Behavioral\Observer\FootballObserver;
use Behavioral\Observer\FootballEvent;

$team = new FootballSubject('Динамо');

$team->attachObserver(new FootballObserver('Петя'));
$team->attachObserver(new FootballObserver('Вася'));

$team->teamAction(new FootballEvent(FootballEvent::GOAL, $team));
$team->teamAction(new FootballEvent(FootballEvent::MISS, $team));
$team->teamAction(new FootballEvent(FootballEvent::FIRE, $team));
