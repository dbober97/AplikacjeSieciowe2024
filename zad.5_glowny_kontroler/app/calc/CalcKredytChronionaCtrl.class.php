<?php 

include $conf->root_path.'/app/security/CalcKredytLoginCtrl.class.php';


class Chroniona{

public function process(){
    
    $ctrl = new CalcLogin();
    $ctrl->check();

    
    global $conf;
    
    $smarty3 = new Smarty\Smarty();
    $smarty3->assign('conf',$conf);
    
    $smarty3->display($conf->root_path.'/app/calc/calc_kredyt_chroniona_view.tpl');
}

}


