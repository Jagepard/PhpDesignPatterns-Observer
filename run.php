<?php

require_once 'vendor/autoload.php';

$team = new \Behavioral\Observer\FootballSubject('Динамо');

$team->attachObserver(new \Behavioral\Observer\FootballObserver('Петя'));
$team->attachObserver(new \Behavioral\Observer\FootballObserver('Вася'));

$team->goalAction();
$team->missAction();
$team->fireAction();
