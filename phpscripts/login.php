<?php

session_start();
spl_autoload_register(function() {
  include "DBConnector".".php";
});
$DbConnector = new DBConnector;
$DbConnector = $DbConnector->getDBConnection();

?>
