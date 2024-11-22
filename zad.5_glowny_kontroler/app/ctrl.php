<?php
// Skrypt kontrolera głównego uruchamiający określoną
// akcję użytkownika na podstawie przekazanego parametru

//każdy punkt wejścia aplikacji (skrypt uruchamiany bezpośrednio przez klienta) musi dołączać konfigurację
require_once dirname (__FILE__).'/../config.php';

//1. pobierz nazwę akcji

$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';//$_REQUEST['action'];

//2. wykonanie akcji
switch ($action) {
	case 'calcCompute' :
		// załaduj definicję kontrolera
                include_once $conf->root_path.'/app/calc/CalcKredytCtrl.class.php';
                // utwórz obiekt i uzyj
                $ctrl = new CalcKredytCtrl();
                $ctrl->process ();
        break;
	case 'security' :
                include_once $conf->root_path.'/app/security/CalcKredytLoginCtrl.class.php';
                $ctrl = new CalcLogin();
                $ctrl->check();

	case 'logout' :
                include_once $conf->root_path.'/app/security/logout.php';
        break;
    	case 'chroniona' :

                include_once $conf->root_path.'/app/calc/CalcKredytChronionaCtrl.class.php';
                $ctrl2 = new Chroniona();
                $ctrl2->process();
        break;
    	default : // 'calcView'
                // załaduj bramkarza
                include_once $conf->root_path.'/app/security/CalcKredytLoginCtrl.class.php';
                $ctrl = new CalcLogin();
                $ctrl->generateView();

        break;
}
