<?php
require_once 'init.php';
// Skrypt kontrolera głównego jako jedyny "punkt wejścia" inicjuje aplikację.

// Inicjacja ładuje konfigurację, definiuje funkcje getConf(), getMessages() oraz getSmarty(),
// pozwalające odwołać się z każdego miejsca w systemie do obiektów konfiguracji, messages i smarty.

// Ponadto ładuje skrypt funkcji pomocniczych (functions.php) oraz wczytuje parametr 'action' do zmiennej $action.
// Wystarczy już tylko podjąć decyzję co zrobić na podstawie $action.

// Dodatkowo zmieniono organizację kontrolerów i widoków. Teraz wszystkie są w odpowiednio nazwanych folderach w app

switch ($action) {
	case 'calcCompute' :
		// załaduj definicję kontrolera
                include_once 'app/controllers/CalcKredytCtrl.class.php';
                // utwórz obiekt i uzyj
                $ctrl = new CalcKredytCtrl();
                $ctrl->process ();
        break;
	case 'security' :
                include_once 'app/controllers/CalcKredytLoginCtrl.class.php';
                $ctrl = new CalcLogin();
                $ctrl->check();

	case 'logout' :
                include_once 'app/controllers/logout.php';
                $ctrl = new LogoutCtrl();
                $ctrl->process();
        break;
    	case 'chroniona' :
                include_once 'app/controllers/CalcKredytChronionaCtrl.class.php';
                $ctrl2 = new Chroniona();
                $ctrl2->process();
        break;
    	default : // 'calcView'
                // załaduj bramkarza
                include_once 'app/controllers/CalcKredytCtrl.class.php';
                // utwórz obiekt i uzyj
                $ctrl = new CalcKredytCtrl();
                $ctrl->process ();

        break;
}
