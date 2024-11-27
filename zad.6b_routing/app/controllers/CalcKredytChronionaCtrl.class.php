<?php namespace app\controllers;

//use app\controllers\CalcKredytLoginCtrl;


class CalcKredytChronionaCtrl{

public function action_chroniona(){
    
    //$ctrl = new CalcKredytLoginCtrl();
    //$ctrl->check();

    getSmarty()->display('calc_kredyt_chroniona_view.tpl');
}

}


