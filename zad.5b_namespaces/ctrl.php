<?php
require_once 'init.php';
//use app\controllers\
// Skrypt kontrolera głównego jako jedyny "punkt wejścia" inicjuje aplikację.

// Inicjacja ładuje konfigurację, definiuje funkcje getConf(), getMessages() oraz getSmarty(),
// pozwalające odwołać się z każdego miejsca w systemie do obiektów konfiguracji, messages i smarty.

// Nowością jest sama klasa ClassLoader oraz utworzenie obiektu tej klasy w skrypcie init z dostępem jak dla
// wcześniejszych obiekkót za pomocą funkcji getLoader(). Pozwala ona automatycznie załadować klasy umieszczone
// w głównym folderze aplikacji - w podfolderach zgodnie z ich przestrzeniami nazw (które są częścią pełnej nazwy klasy).

// Ponadto ładuje skrypt funkcji pomocniczych (functions.php) oraz wczytuje parametr 'action' do zmiennej $action.
// Wystarczy już tylko podjąć decyzję co zrobić na podstawie $action.

// Dodatkowo zmieniono organizację kontrolerów i widoków. Teraz wszystkie są w odpowiednio nazwanych folderach w app


switch ($action) {
	case 'calcCompute' :
                // utwórz obiekt i uzyj
                $ctrl = new app\controllers\CalcKredytCtrl();
                $ctrl->process ();
        break;
	case 'security' :
                $ctrl = new app\controllers\CalcKredytLoginCtrl();
                $ctrl->check();

	case 'logout' :
                 $ctrl = new app\controllers\LogoutCtrl();
                 $ctrl->process();
        break;
    	case 'chroniona' :
                $ctrl = new app\controllers\CalcKredytChronionaCtrl();
                $ctrl->process();
        break;
    	default : // 'calcView'
                // załaduj bramkarza
                $ctrl = new app\controllers\CalcKredytCtrl();
                $ctrl->process();

        break;
}
