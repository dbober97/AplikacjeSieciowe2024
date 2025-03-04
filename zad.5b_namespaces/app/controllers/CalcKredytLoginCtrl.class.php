<?php namespace app\controllers;

use app\forms\CalcForm;

//domyślnie pokazuj wstęp strony (tytuł i tło)

class  CalcKredytLoginCtrl{
        //private $msgs;   //wiadomości dla widoku
        private $form;   //dane formularza (do obliczeń i dla widoku)
        private $hide_intro;
    
    	public function __construct(){
		//stworzenie potrzebnych obiektów
		//$this->msgs = new Messages();
                $this->form = new CalcForm();
		$this->hide_intro = false;
	}

        //pobranie parametrów

        private function getParamsLogin(){
                $this->form->login = getFromRequest('login');
		$this->form->pass = getFromRequest('pass');
        }

        //walidacja parametrów z przygotowaniem zmiennych dla widoku
        private function validateLogin(){
                // sprawdzenie, czy parametry zostały przekazane
                        if (! (isset ( $this->form->login ) && isset ( $this->form->pass ))) {
                        // sytuacja wystąpi kiedy np. kontroler zostanie wywołany bezpośrednio - nie z formularza
                        return false; //zakończ walidację z błędem
                }

                // sprawdzenie, czy potrzebne wartości zostały przekazane
                if ( $this->form->login == "") {
                        getMessages()->addError('Nie podano loginu');
                }
                if ( $this->form->pass == "") {
                        getMessages()->addError('Nie podano hasła');
                }

                //nie ma sensu walidować dalej, gdy brak parametrów
		if (! getMessages()->isError()) {
                        // sprawdzenie, czy dane logowania są poprawne
                        // - takie informacje najczęściej przechowuje się w bazie danych
                        //   jednak na potrzeby przykładu sprawdzamy bezpośrednio
                        if ($this->form->login == "admin" && $this->form->pass == "admin") {
                                session_start();
                                $_SESSION['role'] = 'admin';
                                return true;
                        }
                        if ($this->form->login == "user" && $this->form->pass == "user") {
                                session_start();
                                $_SESSION['role'] = 'user';
                                return true;
                        }

                        getMessages()->addError('Niepoprawny login lub hasło');

                        $this->hide_intro = true;

                        return ! getMessages()->isError();
                }
                $this->hide_intro = true;
        }


        // pobierz parametry i podejmij akcję
        public function generateView(){
            
            
        $this->getParamsLogin();


        if (!$this->validateLogin()) {
                //jeśli błąd logowania to wyświetl formularz z tekstami z $messages
                //$form = array();
                getSmarty()->assign('form',$this->form);
                //getSmarty()->assign('msgs',$this->msgs);
                getSmarty()->assign('hide_intro',$this->hide_intro);
                getSmarty()->display('calc_kredyt_login_view.tpl');



        } else { 

                //ok przekieruj lub "forward" na stronę główną
                //redirect - przeglądarka dostanie ten adres do "przejścia" na niego (wysłania kolejnego żądania)
                header("Location: ".getConf()->action_url.'calcCompute');

                //"forward"
                //include _ROOT_PATH.'/index.php';
}

}
        public function check(){
                
            session_start();
            global $role;

            //pobranie roli
            $role = isset($_SESSION['role']) ? $_SESSION['role'] : '';
             //jeśli brak parametru (niezalogowanie) to idź na stronę logowania
            if ( empty($role) ){
                    $this->generateView();
                    //zatrzymaj dalsze przetwarzanie skryptów
                    exit();
            }
             //$this->generateView();
            //jeśli ok to idź dalej
}
        }



        