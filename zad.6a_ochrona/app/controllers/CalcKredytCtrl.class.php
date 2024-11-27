<?php

// W skrypcie definicji kontrolera nie trzeba dołączać już niczego.
// Kontroler wskazuje tylko za pomocą 'use' te klasy z których jawnie korzysta
// (gdy korzysta niejawnie to nie musi - np używa obiektu zwracanego przez funkcję)

// Zarejestrowany autoloader klas załaduje odpowiedni plik automatycznie w momencie, gdy skrypt będzie go chciał użyć.
// Jeśli nie wskaże się klasy za pomocą 'use', to PHP będzie zakładać, iż klasa znajduje się w bieżącej
// przestrzeni nazw - tutaj jest to przestrzeń 'app\controllers'.

// Przypominam, że tu również są dostępne globalne funkcje pomocnicze - o to nam właściwie chodziło

namespace app\controllers;

// W skrypcie definicji kontrolera nie trzeba dołączać żadnego skryptu inicjalizacji.
// Konfiguracja, Messages i Smarty są dostępne za pomocą odpowiednich funkcji.
// Kontroler ładuje tylko to z czego sam korzysta.
use app\forms\CalcForm;
use app\transfer\CalcResult;


class CalcKredytCtrl{

	//private $msgs;   //wiadomości dla widoku
	private $form;   //dane formularza (do obliczeń i dla widoku)
	private $result; //inne dane dla widoku

	/** 
	 * Konstruktor - inicjalizacja właściwości
	 */
	public function __construct(){
		$this->form = new CalcForm();
		$this->result = new CalcResult();
	}
	
	/** 
	 * Pobranie parametrów
	 */
	public function getParams(){
		$this->form->kwota = getFromRequest('kwota');
		$this->form->lata = getFromRequest('lata');
		$this->form->oprocentowanie = getFromRequest('oprocentowanie');
	}
	
	/** 
	 * Walidacja parametrów
	 * @return true jeśli brak błedów, false w przeciwnym wypadku 
	 */
	public function validate() {
		// sprawdzenie, czy parametry zostały przekazane
		if (! (isset ( $this->form->kwota ) && isset ( $this->form->lata ) && isset ( $this->form->oprocentowanie ))) {
			// sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
			return false; //zakończ walidację z błędem
		} 
		
		// sprawdzenie, czy potrzebne wartości zostały przekazane
		if ($this->form->kwota == "") {
			getMessages()->addError('Nie podano kwoty kredytu');
		}
		if ($this->form->lata == "") {
			getMessages()->addError('Nie podano czasu spłacania kredytu');
		}
		if ($this->form->oprocentowanie == "") {
			getMessages()->addError('Nie podano oprocentowania kredytu');
		}
		
		// nie ma sensu walidować dalej gdy brak parametrów
		if (! getMessages()->isError()) {
			
			// sprawdzenie, czy $x i $y są liczbami
			if (! is_numeric ( $this->form->kwota )) {
				getMessages()->addError('Pierwsza wartość nie jest liczbą');
			}
			
			if (! is_numeric ( $this->form->lata )) {
				getMessages()->addError('Druga wartość nie jest liczbą');
			}
			if (! is_numeric ( $this->form->oprocentowanie )) {
				getMessages()->addError('Trzecia wartość nie jest liczbą');
			}
                        }
		
		return ! getMessages()->isError();
	}
	
	/** 
	 * Pobranie wartości, walidacja, obliczenie i wyświetlenie
	 */
	public function process(){
            
            
                //$ctrl = new CalcKredytLoginCtrl();
                //$ctrl->check();
                
                //global $role;
		$this->getparams();
		
		if ($this->validate()) {
				
			//konwersja parametrów
                        $this->form->kwota = round(doubleval($this->form->kwota), 2);
                        $this->form->lata = intval($this->form->lata);
                        $this->form->oprocentowanie = round(doubleval($this->form->oprocentowanie), 2);
			getMessages()->addInfo('Parametry poprawne.');
				
			//wykonanie operacji
                        if($this->form->kwota>=10000)
                        {
                            if(inRole('admin'))
                            {
                                $this->result->rata = $this->form->kwota * $this->form->oprocentowanie / 100;//całowita kwota do nadpłaty na rok
                                $this->result->rata = $this->form->kwota / $this->form->lata / 12 + $this->result->rata / 12;
                                $this->result->rata = round($this->result->rata, 2); 
                                getMessages()->addInfo('Wykonano obliczenia.');
                            }
                            else
                            {
                                getMessages()->addError( "Tylko manager banku może udzielać kredytu takiej wysokości!");
                                getMessages()->addInfo('Nie wykonano obliczeń.');
                            }

                        }
                        else
                        {
                                $this->result->rata = $this->form->kwota * $this->form->oprocentowanie / 100;//całowita kwota do nadpłaty na rok
                                $this->result->rata = $this->form->kwota / $this->form->lata / 12 + $this->result->rata / 12;
                                $this->result->rata = round($this->result->rata, 2); 
                                getMessages()->addInfo('Wykonano obliczenia.');
                        }
			
			
		}
		
		$this->generateView();
	}
	
	
	/**
	 * Wygenerowanie widoku
	 */
	public function generateView(){

		getSmarty()->assign('user',unserialize($_SESSION['user']));
		getSmarty()->assign('form',$this->form);
		getSmarty()->assign('res',$this->result);
		
		getSmarty()->display('calc_kredyt_view.tpl');
	}
}
