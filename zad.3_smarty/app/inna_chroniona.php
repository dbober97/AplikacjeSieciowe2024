<?php require_once dirname(__FILE__) .'/../config.php';
include _ROOT_PATH.'/app/security/check.php';

require_once _ROOT_PATH.'/lib/Smarty/libs/Smarty.class.php';

$smarty3 = new Smarty\Smarty();
$smarty3->assign('app_url',_APP_URL);
$smarty3->assign('root_path',_ROOT_PATH);

$smarty3->display(_ROOT_PATH.'/app/inna_chroniona.tpl');


