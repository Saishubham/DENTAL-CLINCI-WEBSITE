<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="my-css/style.css">
</head>

<body>
<header>
<!--start of top-strip-->
<?php include"top-strip.php" ?>
  <!--end of top strip-->
  <!--- start of navigation-->
 <?php include"nav.php"?>
  <!-- /.my-nav --> 
  <!-- end of navigation-->
</header>
<!-- end of header-->
<br><br>
<section>
<div class="col-md-3"></div>
<div class="col-md-6">
<form action="">
<div class="form-group">
    <label for="heading">Id_tag</label>
    <input type="text" class="form-control" name="id">
  </div>
<div class="form-group">
    <label for="heading">Heading</label>
    <input type="text" class="form-control" name="head">
  </div>
  <div class="form-group">
    <label for="content">Text-Content</label>
    <textarea type="text" class="form-control" name="content" cols="30" rows="10"></textarea>
  </div>
 <!-- <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>-->
  <button type="submit" name="insert" class="btn btn-default">Insert</button>

</form>
</div>
</section>


</body>
</html>