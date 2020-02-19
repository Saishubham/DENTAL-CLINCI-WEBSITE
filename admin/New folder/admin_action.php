<?php
session_start();
include("admin_config.php");
$obj=new Database();
if(isset($_POST['insert_ser'])){
	$id=$_POST['id'];
	$head=$_POST['head'];
	$content=$_POST['content'];
	$table="serinsert";
	$columns="id, head, content";
	$values="'$id', '$head','$content'";
	$res=$obj->insert($table,$columns,$values);
	if($res===true){
		$_SESSION['sucsess']="SUcessfully Inserted";
		}
		else{
			$_SESSION['error']=$res;
			}
			header("Location:index.php");
	
	
	}



?>