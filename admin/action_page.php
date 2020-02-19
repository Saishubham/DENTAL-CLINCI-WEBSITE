<?php
session_start();
include("config.php");
$obj=new Database();
if(isset($_POST['addtask'])){
	$date=$_POST['date'];	
	$taskname=$_POST['taskname'];	
	$details=$_POST['details'];	
	$department=$_POST['department'];	
	$user_id=$_POST['user_id'];	
	$table="task";
	$columns="date, taskname, department, details, user_id";
	$values="'$date','$taskname','$department','$details','$user_id'";
	$res=$obj->insert($table,$columns,$values);
	if($res===true){
		$_SESSION['success']="Successfully Inserted";
	}
	else{
		$_SESSION['error']=$res;
	}
	header("Location:index.php?page=addtask");
}

 elseif(isset($_POST['department'])){
	$dname=$_POST['dname'];	
	$profile=$_POST['profile'];	
	$table="department";
	$columns="dname, profile";
	$values="'$dname','$profile'";
	$res=$obj->insert($table,$columns,$values);
	if($res===true){
		$_SESSION['success']="Successfully Inserted";
	}
	else{
		$_SESSION['error']=$res;
	}
	header("Location:index.php?page=department");
}
elseif(isset($_POST['update'])){
	$dname=$_POST['dname'];	
	$profile=$_POST['profile'];	
	$table="department";
	$columns="dname, profile";
	$values="'$dname','$profile'";
	$res=$obj->update($table,$columns,$values);
	if($res===true){
		$_SESSION['success']="Successfully Inserted";
	}
	else{
		$_SESSION['error']=$res;
	}
	header("Location:index.php?page=department");
}
?>