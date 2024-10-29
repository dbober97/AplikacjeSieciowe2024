<?php
require_once dirname(__FILE__).'/../config.php';

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
function validate(&$kwota,&$lata,&$oprocentowanie,&$messages){
	// sprawdzenie, czy parametry zostały przekazane
	if ( ! (isset($kwota) && isset($lata) && isset($oprocentowanie))) {
		// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
		// teraz zakładamy, ze nie jest to błąd. Po prostu nie wykonamy obliczeń
		return false;
	}

	// sprawdzenie, czy potrzebne wartości zostały przekazane
        if ( $kwota == "") {
                $messages [] = 'Nie podano kwoty kredytu';
        }
        if ( $lata == "") {
                $messages [] = 'Nie podano czasu spłacania kredytu';
        }
        if ( $oprocentowanie == "") {
                $messages [] = 'Nie podano oprocentowania kredytu';
        }

	//nie ma sensu walidować dalej gdy brak parametrów
	if (count ( $messages ) != 0) return false;
	
	// sprawdzenie, czy $kwota, $lata, $oprocentowanie są liczbami 
	if (! is_numeric( $kwota )) {
		$messages [] = 'Pierwsza wartość nie jest liczbą';
	}
	
	if (! is_numeric( $lata )) {
		$messages [] = 'Druga wartość nie jest liczbą';
	}	
	if (! is_numeric( $oprocentowanie )) {
		$messages [] = 'Trzecia wartość nie jest liczbą';
	}
	

	if (count ( $messages ) != 0) return false;
	else return true;
}

function process(&$kwota,&$lata,&$oprocentowanie,&$messages,&$rata){
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
                $messages [] = "Tylko manager banku może udzielać kredytu takiej wysokości!";
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
$messages = array();

//pobierz parametry i wykonaj zadanie jeśli wszystko w porządku
getParams($kwota, $lata, $oprocentowanie);
if ( validate($kwota, $lata, $oprocentowanie,$messages) ) { // gdy brak błędów
	process($kwota, $lata, $oprocentowanie,$messages,$rata);
}

// Wywołanie widoku z przekazaniem zmiennych
// - zainicjowane zmienne ($messages,$kwota, $lata, $oprocentowanie, $rata)
//   będą dostępne w dołączonym skrypcie
include 'calc_kredyt_view.php';