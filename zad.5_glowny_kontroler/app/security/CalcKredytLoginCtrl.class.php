<?php
//require_once dirname(__FILE__).'/../../config.php';

require_once $conf->root_path.'/lib/Smarty/libs/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/calc/CalcForm.class.php';

//domyślnie pokazuj wstęp strony (tytuł i tło)

class  CalcLogin{
        private $msgs;   //wiadomości dla widoku
        private $form;   //dane formularza (do obliczeń i dla widoku)
        private $hide_intro;
    
    	public function __construct(){
		//stworzenie potrzebnych obiektów
		$this->msgs = new Messages();
                $this->form = new CalcForm();
		$this->hide_intro = false;
	}

        //pobranie parametrów

        private function getParamsLogin(){
                $this->form->login = isset($_REQUEST ['login']) ? $_REQUEST ['login'] : null;
		$this->form->pass = isset($_REQUEST ['pass']) ? $_REQUEST ['pass'] : null;
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
                        $this->msgs->addError('Nie podano loginu');
                }
                if ( $this->form->pass == "") {
                        $this->msgs->addError('Nie podano hasła');;
                }

                //nie ma sensu walidować dalej, gdy brak parametrów
		if (! $this->msgs->isError()) {
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

                        $this->msgs->addError('Niepoprawny login lub hasło');

                        $this->hide_intro = true;

                        return ! $this->msgs->isError();
                }
                $this->hide_intro = true;
        }


        // pobierz parametry i podejmij akcję
        public function generateView(){
            
        global $conf;
            
        $this->getParamsLogin();

        $smarty2 = new Smarty\Smarty();
        $smarty2->assign('conf',$conf);

        if (!$this->validateLogin()) {
                //jeśli błąd logowania to wyświetl formularz z tekstami z $messages
                //$form = array();
                $smarty2->assign('form',$this->form);
                $smarty2->assign('msgs',$this->msgs);
                $smarty2->assign('hide_intro',$this->hide_intro);
                $smarty2->display($conf->root_path.'/app/security/calc_kredyt_login_view.tpl');



        } else { 

                //ok przekieruj lub "forward" na stronę główną
                //redirect - przeglądarka dostanie ten adres do "przejścia" na niego (wysłania kolejnego żądania)
                header("Location: ".$conf->action_url.'calcCompute');

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



        