<?php

use Hhansen06\Taktischezeichen\Icons\IconWrapper;
use Hhansen06\Taktischezeichen\Icons\Person;

require_once 'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);


$person = new IconWrapper('person', 600, 600);
$person->zustand(Person::PERSON_VERMISST);
$person->render();
