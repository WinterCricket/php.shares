<?php

abstract class Model{
	//properties
	protected $dbh;
	protected $stmt;
	//constructor
	public function __construct(){
		//assign properties
		$this->dbh = new PDO("mysql:host=".DB_HOST."dbname".DB_NAME, DB_USER)
	}
}

?>