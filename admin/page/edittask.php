<?php
	include_once("config.php");
	$obj=new Database();
	$id=$_GET['id'];
	$table="task";
	$where="id='$id'";
	$array=$obj->selectSingleData($table,$where);
?>
<h2>Update Task form</h2>
<form class="form-horizontal" action="action_page.php" method="post">
    <div class="form-group hidden">
        <label class="control-label col-sm-2" for="name">Name</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
        </div>
    </div>
    <div class="form-group hidden">
        <label class="control-label col-sm-2" for="email">Email</label>
        <div class="col-sm-10">          
        <input type="mail" class="form-control" id="email" placeholder="Enter email" name="email">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="date">Date</label>
        <div class="col-sm-10">          
        <input type="date" class="form-control" id="date" name="date" value="<?php echo $array['date']; ?>">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="taskname">Task-name</label>
        <div class="col-sm-10">          
        <input type="text" class="form-control" id="taskname" placeholder="Enter task" name="taskname" value="<?php echo $array['taskname']; ?>">
        </div>
    </div>
    
    <div class="form-group col-md-4">
        <label for="department">Department</label>
        <select id="department" name="department" class="form-control">
            <option value="">Choose...</option>
            <?php
				$depts=$obj->selectData("department");
				if(is_array($depts)){
					foreach($depts as $dept){
			?>
            <option value="<?php echo $dept['dname']; ?>" <?php if($array['department']==$dept['dname']){ echo "selected"; } ?>>
				<?php echo $dept['dname']; ?>
            </option>
            <?php
					}	
				}
			?>
        </select>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="details">Task Details</label>
        <div class="col-sm-10">       
        <textarea name="details" id="details" class="form-control"><?php echo $array['details']; ?></textarea>
        </div>
    </div>
    <div class="form-group">
    	<div class="col-md-12">
        	Status:
        	<label class="radio-inline"><input type="radio" name="status" value="0" required <?php if($array['status']=='pending'){ ?><?php } ?>> Pending</label>
			<label class="radio-inline"><input type="radio" name="status" value="1"<?php if($array['status']=='complete'){ ?><?php } ?>> Complete</label>
        </div>
    </div>
    <div class="form-group">     
        <div class="col-sm-10">
        	<button type="submit" class="btn btn-success" name="update">Update</button>
        </div>
    </div>
</form>