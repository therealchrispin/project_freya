<?php

spl_autoload_register(function() {
  include "DBInputHandler".".php";
  include "DBConnector".".php";
});

class newUser
{

  function construct()
  {

  }

  public function createNewUser(){

    $inputHandler = new DBInputHandler;
    $var = $inputHandler->insertNewRowIntoUserTable();

    echo $var;


  }
}

$newUser = new newUser;
$newUser->createNewUser();

?>
