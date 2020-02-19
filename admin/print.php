<?php
	include("config.php");
	$obj=new Database();
	if(isset($_GET['id'])){
		$id=$_GET['id'];
		$array=$obj->selectSingleData("task","`id`='$id'");
	}
	else{
		header("Location:index.php?page=viewtasks");
	}

	function getStatus($status){
		if($status==0){
			return "Pending";
		}else{
			return "Complete";
		}
	}
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
<style media="print">

	@page {
			margin:0 10px;
			/*size:8.27in 11.69in ;
			/*height:3508 px;
			width:2480 px;
			/*size: auto;   auto is the initial value */
			/*margin:0;   this affects the margin in the printer settings 
			-webkit-print-color-adjust:exact;*/
	}
	@media print{
		table {page-break-inside: avoid;}
		#button{ display:none;}
	}
		
</style>
</head>

<body>
	<table border="1" width="300">
    	<tr>
        	<th colspan="2">Task</th>
        </tr>
        <tr>
        	<td>Date</td>
            <td><?php echo $array['date']; ?></td>
        </tr>
         <tr>
        	<td>Department</td>
            <td><?php echo $array['department']; ?></td>
        </tr>
         <tr>
        	<td>Details</td>
            <td><?php echo $array['details']; ?></td>
        </tr>
         <tr>
        	<td>Status</td>
            <td><?php echo getStatus($array['status']); ?></td>
        </tr>
    </table>
    <div id="button">
    	<button type="button" onClick="window.print();">Print</button>
    </div>
</body>
</html>