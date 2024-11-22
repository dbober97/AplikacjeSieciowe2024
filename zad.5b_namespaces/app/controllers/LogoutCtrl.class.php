<?php namespace app\controllers;
//require_once dirname(__FILE__).'/../../init.php';

class LogoutCtrl{
  // 1. zakończenie sesji


function process()
{
     session_start();
     session_destroy();

     // 2. przekieruj lub "forward" na stronę główną
     //redirect
     header("Location: ".getConf()->action_url.'security');
     //"forward"
     //include getConf()->root_path.'/index.php';   
}
    

}