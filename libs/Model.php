<?php 

class Model {

	protected $query;
	protected $array;
	private $conn;

	private $server = HOST;
	private $user = USER;
	private $pass = PASS;
	private $database = DB;

	private function connect(){
		$this->conn = new mysqli($this->server, $this->user, $this->pass, $this->database);
	}

	/**
	* exec() To do statement type INSERT, UPDATE, DELETE
	*/
	protected function exec(){
		$this->connect();
		if($this->query){
			if($this->conn->query($this->query)){
				$this->close();
				return true;
			} else {
				$this->close();
				return false;
			}
		}
	}

	/**
	* query()  Get result from database
	*/
	protected function query(){
		$this->connect();
		if($this->query){
			$this->array = $this->conn->query($this->query);
		}
		$this->close();
	}

	private function close(){
		$this->conn->close();
	}

}
?>