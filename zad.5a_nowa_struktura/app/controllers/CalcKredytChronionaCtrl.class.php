<?php 

include_once 'CalcKredytLoginCtrl.class.php';


class Chroniona{

public function process(){
    
    $ctrl = new CalcLogin();
    $ctrl->check();

    getSmarty()->display('calc_kredyt_chroniona_view.tpl');
}

}


