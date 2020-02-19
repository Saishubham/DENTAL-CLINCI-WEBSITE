<?php
	class Database{
		private	$host="localhost";
		private $username="root";
		private $password="";
		private $dbname="db_tasks";
		private $link;
		
		function __construct(){
			$this->link=new MySQLi($this->host,$this->username,$this->password,$this->dbname);	
			if(!$this->link){echo $this->link->error;}
		}
		
		function insert($table,$columns,$values){
			$query="INSERT INTO $table ($columns) VALUES ($values)";
			//echo $query;
			$run=$this->link->query($query);
			if($run){
				return true;
			}
			else{
				return $this->link->error;
			}
		}
		
		function selectData($table,$columns="*",$where="1",$order="",$limit=""){
			$query="SELECT $columns from $table where $where";
			if($order!=""){
				$query.=" order by $order";
			}
			if($limit!=""){
				$query.=" limit $limit";
			}
			$run=$this->link->query($query);
			if($run){
				//return $run;
				$array=array();
				while($arr=$run->fetch_assoc()){
					$array[]=$arr;
				}
				return $array;
			}
			else{
				return $this->link->error;
			}
		}
		
		function selectSingleData($table,$where,$columns="*"){
			$query="SELECT $columns from $table where $where";
			$run=$this->link->query($query);
			if($run){
				$array=$run->fetch_assoc();
				return $array;
			}
			else{
				return $this->link->error;
			}
		}
		
			function login($username,$password){
					$query="Select * from users where username='$username' and password='$password'";
					//echo $query;
					$run=$this->link->query($query);
					if($run->num_rows>0){
						return $run->fetch_assoc();
					}
					else{
						return "Wrong Username or Password";	
					}
				}
			
			function update($table,$colvalues,$where){
				//$colvalues=taskname='$taskname'
					 $query="UPDATE $table set $colvalues where $where";
					 $run->$this->link->query($query);
					 if($run){
						$array=$run->fetch_assoc();
						return $array;
					}
						 else {
							 return $this->link->error;
							 }
					 
					 }
				
				function delete($table,$coloumns,$where)
					{
						$query="DELETE FROM `$table` WHERE $where";
							$run=$this->link->query($query);
								if($run)
								{
									return true;
									}
									else {
										return $this->link->error;
										}
						}
		function __destruct(){
			$this->link->close();
		}
	}
	
	/*$obj=new Database();
	
	$res=$obj->insert("users","username,password","'admin','12345'");
	if($res===true){
		echo "Inserted";
	}
	else{
		echo $res;
	}*/
?>