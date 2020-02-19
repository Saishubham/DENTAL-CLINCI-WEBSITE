<?php
class Database{
	private $host="localhost";
	private $username="root";
	private $password="";
	private $dbname="db_soham@denatal";
	private $link;
	
	function __construct(){
		$this->link=new MySQLi($this->host,$this->username,$this->password,$this->dbname);
		if(!$this->link){
			echo $this->link->error;
			}
		
		}
		function insert($table,$columns,$values){
			$query="INSERT INTO $table ($columns) VALUES ($values)";
			$run->$this->link->query($query);
			if($ru){
				return true;
				}
				else{
					return $this->link->error;
					}
			}
	
	
	}

?>