<?php 
require_once dirname(__FILE__) .'/../config.php';
require_once $conf->root_path.'/app/CalcKredytChronionaCtrl.class.php';

$ctrl3 = new Chroniona();

$ctrl3->process();

