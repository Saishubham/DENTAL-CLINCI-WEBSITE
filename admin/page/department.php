<h2>Department-form</h2>
<form class="form-horizontal" action="action_page.php" method="post">
    <div class="form-group">
        <label class="control-label col-sm-2" for="name">Dept-name</label>
        <div class="col-sm-10">
        <input type="text" class="form-control" id="dname" placeholder="Enter Department name" name="dname">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-2" for="email">Profile</label>
        <div class="col-sm-10">          
        <input type="text" class="form-control" id="email" placeholder="Enter profile" name="profile">
        </div>
    </div>
<div class="form-group">     
        <div class="col-sm-10">
        	<button type="submit" class="btn btn-success" name="department">Submit</button>
        </div>
    </div>
</form>