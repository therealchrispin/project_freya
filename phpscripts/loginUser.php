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
    $password = $password->fetch_assoc();
    $password = $password["password"];

    if($connection->query($select)){
      if(password_verify($_POST["password"], $password)){
        $_SESSION["username"] = $username;
        $_SESSIOn["status"] = 1;

        echo "läuft bei dir amk";
      } else {
        echo $password;
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
