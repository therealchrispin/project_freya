<?php
session_start();

spl_autoload_register(function() {
  include "DBConnector".".php";
});

class UserLogger {

  function construct(){}

  public function createQuery(){
    $connection = $this->getDBConnection();
    $username = $_POST["username"];

    $select = "SELECT password from User Where username='$username'";
    $password = $connection->query($select);

    if(!empty($password)){
      if(password_verify($_POST["password"], $password)){
        $_SESSION["username"] = $username;
        $_SESSIOn["status"] = 1;

        echo "läuft bei dir amk";
      } else {
        echo "§";
      }
    }


  }

  private function getDBConnection(){
    $connector = new DBConnector;
    $connection = $connector->getDBConnection();
    return $connection;
  }
}

$log = new UserLogger;
$log->createQuery();

?>
