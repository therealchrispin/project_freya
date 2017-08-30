<?php

class DBInputHandler
{
	private $connection = "";

	function construct()
	{

	}

	public function insertNewRowIntoUserTable()
	{

		$this->insertData();

		$connection->close();

		return "DONE".$_POST["username"];
	}

	public function insertData(){
		$connection = $this->getDBConnection();


		$username = $_POST["username"];
		$firstname = $_POST["firstname"];
		$lastname= $_POST["lastname"];
		$age = $_POST["age"];
		$password = $_POST["password"];

		$password = password_hash($password, PASSWORD_DEFAULT);

		$insert = "INSERT INTO User (username, firstname, lastname, age, password)
							VALUES( '$username', '$firstname', '$lastname',	 '$age','$password')";

		if($connection->query($insert) === FALSE){
			die($connection->error);
		}

		return "DONE".$_POST["username"];
	}

	private function getDBConnection(){
		$connector = new DBConnector;
		$connection = $connector->getDBConnection();
		return $connection;
	}
}

?>
