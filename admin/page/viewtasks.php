<?php
	include_once("config.php");
	$obj=new Database();
	$count=2;
	if(isset($_GET['pageno']) && $_GET['pageno']>0){
		$pageno=$_GET['pageno'];
	}
	else{
		$pageno=1;
	}
	$offset=($pageno-1)*$count;
	$table="task";
	$columns="*";
	$where="`user_id`='$user_id'";
	$order="id";
	$limit="$offset,$count";
	$taskname="";
	$pagefilters="";
	if(isset($_GET['taskname']) && $_GET['taskname']!=""){
		$taskname=$_GET['taskname'];
		$where.=" and `taskname` like '%$taskname%'";
		$pagefilters.="&taskname=$taskname";
	}
	$array=$obj->selectData($table,$columns,$where,$order,$limit);
	$getcount=$obj->selectSingleData($table,$where,"count(*) as count");
	$rowcount=$getcount['count'];
	$pages=ceil($rowcount/$count);
	//selectData($table,$columns="*",$where="1",$order="",$limit="")
	//print_r($array);
	
	function getStatus($status){
		if($status==0){
			return "Pending";
		}else{
			return "Complete";
		}
	}
?>

			<form class="row">
            	<div class="col-md-2">Enter Task Name</div>
                <div class="col-md-2"><input type="text" name="taskname" class="form-control" value="<?php echo $taskname; ?>"></div>
                <div class="col-md-2">
                	<input type="hidden" name="page" value="viewtasks">
                    <input type="submit" name="search" class="btn btn-success">
                </div>
            </form><br><br>
<?php
	if(is_array($array)){ $i=$offset;
		foreach($array as $row){
			$i++;
			//echo $row['taskname'];
?>
            <div class="col-md-12">
                <div class="heading lead" data-toggle="collapse" data-target="#details<?php echo $i; ?>">
                    <?php echo $i.". ".$row['taskname']; ?>
                </div>
                <div class="collapse details" id="details<?php echo $i; ?>">
                    <div>Date : <?php echo $row['date']; ?></div>
                    <div>Department : <?php echo $row['department']; ?></div>
                    <div>Details : <?php echo $row['details']; ?></div>
                    <div>Status : <?php echo getStatus($row['status']); ?></div>
                    <div>
                    	<a href="?page=edittask&id=<?php echo $row['id']; ?>">Edit Task</a>
                    	<a href="print.php?id=<?php echo $row['id']; ?>">Print</a>
                    	<a href="action_page.php?id=<?php echo $row['id']; ?>">Delete</a>
                    
                    </div>
                </div>
            </div><br>
<?php
		}
	}v
	else{
		echo $array;
	}
	if($pages>1){
		echo '<ul class="pagination">';
		//prev
		for($i=1;$i<=$pages;$i++){
?>
    	<li class="page-item">
        	<a class="page-link" href="?page=viewtasks&pageno=<?php echo $i; echo $pagefilters; ?>"><?php echo $i; ?></a>
        </li>
<?php
		}
		//next
		echo "</ul>";
	}
?>
