<?php

require_once 'vendor/autoload.php';

$team = new \Behavioral\Observer\FootballTeam('Динамо');

$team->attachObserver(new \Behavioral\Observer\FootballFan('Петя'));
$team->attachObserver(new \Behavioral\Observer\FootballFan('Вася'));

$team->goalAction();
$team->missAction();
