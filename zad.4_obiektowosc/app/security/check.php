<?php
require_once dirname(__FILE__).'/../../config.php';
require_once $conf->root_path.'/lib/Smarty/libs/Smarty.class.php';
//inicjacja mechanizmu sesji
session_start();

//pobranie roli
$role = isset($_SESSION['role']) ? $_SESSION['role'] : '';

//jeśli brak parametru (niezalogowanie) to idź na stronę logowania
if ( empty($role) ){
	include $conf->root_path.'/app/security/CalcKredytLoginCtrl.class.php';
        $ctrl2 = new CalcLogin();
        $ctrl2->generateView();
	//zatrzymaj dalsze przetwarzanie skryptów
	exit();
}
//jeśli ok to idź dalej