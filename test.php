<?php

use hhansen06\Taktischezeichen\Fahrzeugarten;
use const hhansen06\Taktischezeichen\Gruppe;
use const hhansen06\Taktischezeichen\kfz_abrollbehhaelter;
use const hhansen06\Taktischezeichen\kfz_anhaenger;
use const hhansen06\Taktischezeichen\kfz_gelaendefaehig;
use const hhansen06\Taktischezeichen\kfz_landgebunden;
use const hhansen06\Taktischezeichen\kfz_wechsellader;
use const hhansen06\Taktischezeichen\Staffel;
use const hhansen06\Taktischezeichen\Zug;
use const hhansen06\Taktischezeichen\ZugTrupp;

require_once 'vendor/autoload.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);

// $class = new \hhansen06\Taktischezeichen\Fahrzeug("feuerwehr");
// $class->Groesse(Gruppe);
// $class->SetRuestwagen("RW 1");
// $class->Fahrgestell(\hhansen06\Taktischezeichen\kfz_gelaendefaehig);
// $class->render();

// $class = new \hhansen06\Taktischezeichen\Einheit("feuerwehr");
// $class->Groesse(ZugTrupp);
// $class->render();


$class = new \hhansen06\Taktischezeichen\Person();
$class->zustand(3);
$class->render();
