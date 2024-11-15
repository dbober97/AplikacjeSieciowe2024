<?php 
require_once dirname(__FILE__) .'/../config.php';
include $conf->root_path.'/app/security/check.php';
require_once $conf->root_path.'/lib/Smarty/libs/Smarty.class.php';


class Chroniona{

public function process(){
    
    global $conf;
    
    $smarty3 = new Smarty\Smarty();
    $smarty3->assign('conf',$conf);
    
    $smarty3->display($conf->root_path.'/app/calc_kredyt_chroniona_view.tpl');
}

}


