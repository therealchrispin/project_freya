<?php
/**
 *
 */
class DBConnector
{
  private $serverName = "localhost";
  private $DBuserName = "root";
  private $DBpassword = "kingkong";
  private $DBName = "Freya";

  private $DBconnection = "";

  function construct ()
  {

  }

  public function getDBConnection() {
    //$DBconnection = new mysqli ("$serverName", "$DBuserName", "$DBpassword", "$DBName");
    $DBconnection = new mysqli ("localhost", "root", "kingkong", "Freya");
    if($DBconnection->connect_error){
      die("Connectoin failed ". $DBconnection->connect_error);
    }else {
      return $DBconnection;
    }
  }


}


?>
