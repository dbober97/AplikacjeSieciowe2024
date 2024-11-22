<?php namespace app\controllers;

use app\controllers\CalcKredytLoginCtrl;


class CalcKredytChronionaCtrl{

public function process(){
    
    $ctrl = new CalcKredytLoginCtrl();
    $ctrl->check();

    getSmarty()->display('calc_kredyt_chroniona_view.tpl');
}

}


