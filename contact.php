<!doctype html>
<html>
<head>
<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="my-css/style.css">
<meta charset="utf-8">
<title>Contact us</title>
</head>

<body>
<header>
<!--top strip-->
<?php include"top-strip.php" ?>
<!--top- strip-->
<!--navbar-->
<?php include"nav.php" ?>
<!-- navbar-->
</header>
<!--<section class="contact-bann">
	<span><img src="images/Contact Us.jpg" alt="contact banner" class="img-responsive"></span>
</section>-->
<div class="clearfix"></div>

<section class="con-cont">
    	<div class="container">
        <div class="row">
        <div class="col-md-12">
        <center><h2 style="color:#FBFBFB;">Feel Free To Contact Us<img src="images/look-here.gif" class="img-responsive"></h2></center><br>
        	<div class="col-md-6">
            <div class="content-con">Official-Address</div>
            <div class="add-block">
                <h3> &nbsp;   Soham Laxmi Dental Care &amp; Sojal Implant.</h3>
           <p> <p>Jheel Tower,Mazaar Road</p></p>            
           <p><p>Near Laxmi petrol Pump</p></p>
            <p><p>Indrapuri Chowk,</p></p>
          <p>  <p>Hazaribagh,Jharkhand</p></p>
          <p>  <p>Phone:+91-9905760849</p></p>
            </div>
            </div>
                <div class="col-md-6">
                 <div class="content-form">Enquiry-Form</div>
                 <div class="form-cont">
                	<form action="" method="post">
        				<div class="form_head">Name:-</div>
        				<div class="input">
                        <input type="text" name="name" id="name" placeholder="full name" required="" class="name_input">
                    	</div>
        				<div class="form_head">Email:-</div>
                    	<div class="input">
                        <input type="email" name="email" id="email" placeholder="with extension" required="required" class="name_input">
                		</div>
                    	<div class="form_head">Mob:-</div>
                    	<div class="input">
                        <input type="text" maxlength="10" name="mobile" id="mobile" placeholder="mobile/phone" required="required" class="name_input"></div>
                      <!--  <div class="form_head">Subject:-</div>
                    	<div iclass="input">
                        <input type="text" name="subject" id="subject" placeholder="Enter Subject for your Query" required="required" class="name_input"></div>-->
                        <div class="form_head">Query For:-</div>
                    	<div iclass="input">
                        <select name="queryfor" id="queryfor" class="name_input">
                        	<option>-- Select Any One Option --</option>
                            <option value="Office Relocation">Office-Relocation</option>
                            <option value="Home Relocation">Home-Relocation</option>
                            <option value="Packing Moving">Packing-Moving</option>
                            <option value="Loading Unloading">Loading-Unloading</option>
                            <option value="Car shifting">Car-shifting</option>
                            <option value="Transport">Transport</option>
                            <option value="other">other</option>
                        </select>
                        </div>
                    	<div class="form_head">Query:-</div>
                    	<div class="input">
                        <textarea cols="50" rows="10" name="query" placeholder="Type your Queries" required class="textarea_input"></textarea>
                		</div>
                    	<div class="input">
                            <button type="submit" class="btn btn-success" value="submit">Submit</button>
                            <button type="reset" class="btn btn-success" value="reset">Reset</button>
                        </div>
                	</form>
				<!-------------------End Of Contact-content------------------>
                    </div></div>
            </div>
            </div>    	
        	</div>
   		</section>
        <div class="clearfix"></div>
        <!---footer-->
        <?php include"footer.php"?>
        <!--footer-->
<!-- jQuery  --> 
<script src="bootstrap/js/jquery.min.js"></script> 
<!-- js --> 
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
