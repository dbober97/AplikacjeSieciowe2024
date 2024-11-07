<?php
require_once dirname(__FILE__).'/../config.php';

require_once _ROOT_PATH.'/lib/Smarty/libs/Smarty.class.php';

$smarty = new Smarty\Smarty();

$smarty->assign('app_url',_APP_URL);
$smarty->assign('root_path',_ROOT_PATH);
//$smarty->display(_ROOT_PATH.'/app/security/login_view.tpl');

// KONTROLER strony kalkulatora

// W kontrolerze niczego nie wysyła się do klienta.
// Wysłaniem odpowiedzi zajmie się odpowiedni widok.
// Parametry do widoku przekazujemy przez zmienne.

//ochrona kontrolera - poniższy skrypt przerwie przetwarzanie w tym punkcie gdy użytkownik jest niezalogowany
include _ROOT_PATH.'/app/security/check.php';

//pobranie parametrów
function getParams(&$kwota,&$lata,&$oprocentowanie){
	$kwota = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
	$lata = isset($_REQUEST['lata']) ? $_REQUEST['lata'] : null;
	$oprocentowanie = isset($_REQUEST['oprocentowanie']) ? $_REQUEST['oprocentowanie'] : null;	
}

//walidacja parametrów z przygotowaniem zmiennych dla widoku
function validate(&$kwota,&$lata,&$oprocentowanie,&$msgs, &$infos){
	// sprawdzenie, czy parametry zostały przekazane
	if ( ! (isset($kwota) && isset($lata) && isset($oprocentowanie))) {
		// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
		// teraz zakładamy, ze nie jest to błąd. Po prostu nie wykonamy obliczeń
		return false;
	}
        
        //$infos [] = 'Przekazano parametry.';

	// sprawdzenie, czy potrzebne wartości zostały przekazane
        if ( $kwota == "") {
                $msgs [] = 'Nie podano kwoty kredytu';
        }
        if ( $lata == "") {
                $msgs [] = 'Nie podano czasu spłacania kredytu';
        }
        if ( $oprocentowanie == "") {
                $msgs [] = 'Nie podano oprocentowania kredytu';
        }

	//nie ma sensu walidować dalej gdy brak parametrów
	if (count ( $msgs ) != 0) return false;
	
	// sprawdzenie, czy $kwota, $lata, $oprocentowanie są liczbami 
	if (! is_numeric( $kwota )) {
		$msgs [] = 'Pierwsza wartość nie jest liczbą';
	}
	
	if (! is_numeric( $lata )) {
		$msgs [] = 'Druga wartość nie jest liczbą';
	}	
	if (! is_numeric( $oprocentowanie )) {
		$msgs [] = 'Trzecia wartość nie jest liczbą';
	}
	

	if (count ( $msgs ) != 0) return false;
	else return true;
}

function process(&$kwota,&$lata,&$oprocentowanie,&$rata,&$msgs, &$infos){
        $infos [] = 'Parametry poprawne. Wykonuję obliczenia.';
	global $role;
	
	//konwersja parametrów na double/integer (zaokrąglone do dwóch miejsc po przecinku)
	$kwota = round(doubleval($kwota), 2);
	$lata = intval($lata);
	$oprocentowanie = round(doubleval($oprocentowanie), 2);
	
	//wykonanie operacji
        if($kwota>=10000)
        {
            if($role=='admin')
            {
                $rata = $kwota * $oprocentowanie / 100;//całowita kwota do nadpłaty na rok
                $rata = $kwota / $lata / 12 + $rata / 12;
                $rata = round($rata, 2); 
            }
            else
            {
                $msgs [] = "Tylko manager banku może udzielać kredytu takiej wysokości!";
            }

        }
        else
        {
                $rata = $kwota * $oprocentowanie / 100;//całowita kwota do nadpłaty na rok
                $rata = $kwota / $lata / 12 + $rata / 12;
                $rata = round($rata, 2); 
        }
        

}


//definicja zmiennych kontrolera
$lata = null;
$kwota = null;
$oprocentowanie = null;
$rata = null;
$hide_intro = null;
$messages = array();
$infos = array();


//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
getParams($kwota, $lata, $oprocentowanie);
if ( validate($kwota, $lata, $oprocentowanie,$messages,$infos) ) { // gdy brak błędów
	process($kwota, $lata, $oprocentowanie,$rata, $messages, $infos);
}

// Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$kwota, $lata, $oprocentowanie, $rata)
//   będą dostępne w dołączonym skrypcie

//include 'calc_kredyt_view.php';

// 4. Przygotowanie danych dla szablonu


$smarty->assign('hide_intro',$hide_intro);

//pozostałe zmienne niekoniecznie muszą istnieć, dlatego sprawdzamy aby nie otrzymać ostrzeżenia
$smarty->assign('lata',$lata);
$smarty->assign('kwota',$kwota);
$smarty->assign('oprocentowanie',$oprocentowanie);
$smarty->assign('rata',$rata);
$smarty->assign('messages',$messages);
$smarty->assign('infos',$infos);

// 5. Wywołanie szablonu
$smarty->display(_ROOT_PATH.'/app/calc_kredyt_view.tpl');