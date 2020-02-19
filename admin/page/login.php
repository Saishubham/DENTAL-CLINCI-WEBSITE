<div class="row">
	<div class="col-md-12">
    	<form action="" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="text-center text-danger"><?php echo $msg; ?></div>
            <input type="submit" name="login" value="Login" class="btn btn-sm btn-success">
        </form>
  	</div>
</div>