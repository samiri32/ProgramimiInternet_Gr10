<?php

try{
  require_once 'helpers/session_helper.php';
  require_once 'libraries/Core.php';
  require_once 'libraries/Controller.php';
  require_once 'libraries/Database.php';
  require_once 'config/config.php';
  require_once 'helpers/additional_helper.php';
  $init=new Core();

} catch (Throwable $th) {
  echo $th;
 }