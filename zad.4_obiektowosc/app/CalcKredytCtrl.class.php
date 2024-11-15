<?php
// W skrypcie definicji kontrolera nie trzeba dołączać problematycznego skryptu config.php,
// ponieważ będzie on użyty w miejscach, gdzie config.php zostanie już wywołany.

require_once $conf->root_path.'/lib/Smarty/libs/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/CalcForm.class.php';
require_once $conf->root_path.'/app/CalcResult.class.php';

/** Kontroler kalkulatora
 * @author Przemysław Kudłacik
 *
 */
class CalcKredytCtrl{

	private $msgs;   //wiadomości dla widoku
	private $form;   //dane formularza (do obliczeń i dla widoku)
	private $result; //inne dane dla widoku
	//private $hide_intro; //zmienna informująca o tym czy schować intro

	/** 
	 * Konstruktor - inicjalizacja właściwości
	 */
	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->msgs = new Messages();
		$this->form = new CalcForm();
		$this->result = new CalcResult();
		//$this->hide_intro = false;
	}
	
	/** 
	 * Pobranie parametrów
	 */
	public function getParams(){
		$this->form->kwota = isset($_REQUEST ['kwota']) ? $_REQUEST ['kwota'] : null;
		$this->form->lata = isset($_REQUEST ['lata']) ? $_REQUEST ['lata'] : null;
		$this->form->oprocentowanie = isset($_REQUEST ['oprocentowanie']) ? $_REQUEST ['oprocentowanie'] : null;
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
		} else { 
			//$this->hide_intro = true; //przyszły pola formularza, więc - schowaj wstęp
		}
		
		// sprawdzenie, czy potrzebne wartości zostały przekazane
		if ($this->form->kwota == "") {
			$this->msgs->addError('Nie podano kwoty kredytu');
		}
		if ($this->form->lata == "") {
			$this->msgs->addError('Nie podano czasu spłacania kredytu');
		}
		if ($this->form->oprocentowanie == "") {
			$this->msgs->addError('Nie podano oprocentowania kredytu');
		}
		
		// nie ma sensu walidować dalej gdy brak parametrów
		if (! $this->msgs->isError()) {
			
			// sprawdzenie, czy $x i $y są liczbami
			if (! is_numeric ( $this->form->kwota )) {
				$this->msgs->addError('Pierwsza wartość nie jest liczbą');
			}
			
			if (! is_numeric ( $this->form->lata )) {
				$this->msgs->addError('Druga wartość nie jest liczbą');
			}
			if (! is_numeric ( $this->form->oprocentowanie )) {
				$this->msgs->addError('Druga wartość nie jest liczbą');
			}
                        }
		
		return ! $this->msgs->isError();
	}
	
	/** 
	 * Pobranie wartości, walidacja, obliczenie i wyświetlenie
	 */
	public function process(){
                global $role;
		$this->getparams();
		
		if ($this->validate()) {
				
			//konwersja parametrów
                        $this->form->kwota = round(doubleval($this->form->kwota), 2);
                        $this->form->lata = intval($this->form->lata);
                        $this->form->oprocentowanie = round(doubleval($this->form->oprocentowanie), 2);
			$this->msgs->addInfo('Parametry poprawne.');
				
			//wykonanie operacji
                        if($this->form->kwota>=10000)
                        {
                            if($role=='admin')
                            {
                                $this->result->rata = $this->form->kwota * $this->form->oprocentowanie / 100;//całowita kwota do nadpłaty na rok
                                $this->result->rata = $this->form->kwota / $this->form->lata / 12 + $this->result->rata / 12;
                                $this->result->rata = round($this->result->rata, 2); 
                                $this->msgs->addInfo('Wykonano obliczenia.');
                            }
                            else
                            {
                                $this->msgs->addError( "Tylko manager banku może udzielać kredytu takiej wysokości!");
                                $this->msgs->addInfo('Nie wykonano obliczeń.');
                            }

                        }
                        else
                        {
                                $this->result->rata = $this->form->kwota * $this->form->oprocentowanie / 100;//całowita kwota do nadpłaty na rok
                                $this->result->rata = $this->form->kwota / $this->form->lata / 12 + $this->result->rata / 12;
                                $this->result->rata = round($this->result->rata, 2); 
                                $this->msgs->addInfo('Wykonano obliczenia.');
                        }
			
			
		}
		
		$this->generateView();
	}
	
	
	/**
	 * Wygenerowanie widoku
	 */
	public function generateView(){
		global $conf;
		
		$smarty = new Smarty\Smarty();
		$smarty->assign('conf',$conf);

				
		//$smarty->assign('hide_intro',$this->hide_intro);
		
		$smarty->assign('msgs',$this->msgs);
		$smarty->assign('form',$this->form);
		$smarty->assign('res',$this->result);
		
		$smarty->display($conf->root_path.'/app/calc_kredyt_view.tpl');
	}
}
