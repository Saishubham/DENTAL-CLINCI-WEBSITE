<?php
	session_start();
	include_once("config.php");
	$obj=new Database();
	$username="";
	$msg="";
	if(!isset($_SESSION['user_id'])){
		$include="page/login.php";
		$title="Login";
		if(isset($_POST['login'])){
			$username=$_POST['username'];
			$password=$_POST['password'];
			$res=$obj->login($username,$password);
			if(is_array($res)){
				$user_id=$_SESSION['user_id']=$res['id'];
				$include="page/home.php";
			}
			else{
				$msg= $res;
			}
		}
	}
	else{
		$user_id=$_SESSION['user_id'];
		$getusername=$obj->selectSingleData("users","id='$user_id'");
		$username=$getusername['username'];
		if(isset($_GET['page'])){
			$page=$_GET['page'];
		}
		else{
			$page="";
			}
		switch($page){
			case "home": $include="page/home.php"; $title="Home";
			break;
			case "department":$include="page/department.php"; $title="Add Task";
			break;
			case "addtask":$include="page/addtask.php"; $title="Add Task";
			break;
			case "viewtasks":$include="page/viewtasks.php"; $title="View Tasks";
			break;
			case "edittask":$include="page/edittask.php"; $title="Edit Task";
			break;
			default: $include="page/home.php"; $title="Home";
		}
		
	}
	
?>

<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/style.css">
        <title>Task Manager | <?php echo $title; ?></title>
    </head>
    <body>
    	<div class="container-fluid">
        	<?php include("header.php"); ?>
            <div class="container">
           		<div class="col-md-12 text-center"><br>
                	<?php
                    	if(isset($_SESSION['success'])){
							echo "<span class='text-success'>".$_SESSION['success']."</span>";
							unset($_SESSION['success']);
						}
                    	if(isset($_SESSION['error'])){
							echo "<span class='text-danger'>".$_SESSION['error']."</span>";
							unset($_SESSION['error']);
						}
					?>
                    <div class="lead"><?php echo $username; ?></div>
                </div>
        		<div class="col-md-12"><br>
					<?php include($include); ?>
        		</div>
            </div>
        </div>
    
    </body>
</html>