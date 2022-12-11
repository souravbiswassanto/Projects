<?php
class database{
	public $host=DB_HOST;
	public $user=DB_USER;
	public $pass=DB_PASS;
	public $dbname=DB_NAME;

	public $error;
	public $link;

	public function __construct(){
		$this->connectDB();
	}

	private function connectDB(){
		$this->link= new mysqli($this->host,$this->user,$this->pass,$this->dbname);
	}

	public function select($query){
		$result=$this->link->query($query);
		return $result;
	}

	public function insert($query){
		$result=$this->link->query($query);

		return $result;
	}

	public function delete($query){
		$result=$this->link->query($query);	
		return $result;
	}

	public function update($query){
		$result=$this->link->query($query);
		return $result;
	}
}