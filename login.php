<?php
require("connection.inc.php");
$msg="";
if(isset($_POST["submit"])){
  $username=mysqli_real_escape_string($con,$_POST["username"]);
  $password=mysqli_real_escape_string($con,$_POST["password"]);
  $sql= "select * from admin where username='$username' and password='$password'";
  $result = $con->query($sql);
  if ($result->num_rows > 0) {
    $_SESSION['ADMIN_LOGIN']='yes';
    $_SESSION['ADMIN_USERNAME']=$username;
    header('location:admin.php');
    die();

  }else{
    $msg="Please enter correct details.";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Login</title>
    <?php require("cssAndFonts.php");?>
  </head>
  <body class="cnt-home">
    <?php  require("header.php");?>

<div class="breadcrumb">
	<div class="container">
		<div class="breadcrumb-inner">
			<ul class="list-inline list-unstyled">
				<li><a href="home.php">Home</a></li>
				<li class='active'>Login</li>
			</ul>
		</div><!-- /.breadcrumb-inner -->
	</div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="body-content">
	<div class="container">
		<div class="sign-in-page">
			<div class="row">
				<!-- Login -->			
<div class="col-md-6 col-sm-6 sign-in">
	<h4 class="">Login</h4>
	<p class="">Hello Admin, Welcome to your account.</p>

	<form class="register-form outer-top-xs" role="form" method="POST">
		<div class="form-group">
		    <label class="info-title">Username <span>*</span></label>
		    <input type="text" class="form-control unicase-form-control text-input" name="username" required>
		</div>
	  	<div class="form-group">
		    <label class="info-title">Password <span>*</span></label>
		    <input type="password" class="form-control unicase-form-control text-input" name="password" required>
		</div>
	  	<button type="submit" name="submit" class="btn-upper btn btn-primary checkout-page-button">Login</button>
	</form>			
  <div class="login_error"><?php echo $msg?></div>
</div>
		
	</div><!-- /.row -->
		</div><!-- /.sigin-in-->


    <?php require("footer.php");?>
</body>
</html>