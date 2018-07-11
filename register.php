<?php
session_start();
if(isset($_SESSION['username']))
{
    header('location: home.php');
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>CIRCADIAN | Todo List - Manage Your Daily Tasks Easily</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap File -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!-- font awesome stylesheet link -->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.min.css">
    <!-- animate css file link -->
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
	<!-- main css file -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- custom css-->
		<style type="text/css">
		.log-frm input:nth-child(6)
		{
			margin-top: 15px;
		}
		.cnt-sec
		{
			margin-top: 2%;
		}
		.fttr
		{
			margin-top: 2.2%;
		}
		@media(max-width: 768px)
		{
			.log-frm input:nth-child(6)
			{
				width: 50%;
			}
            .fttr
            {
                margin-top: 0%;
            }
		}
	</style>
</head>
<body>
<!-- navigation bar starts -->
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <div class="navbar-header">
	    	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
      		</button>
	      <a class="navbar-brand" href="index.php">CIRCADIAN | Todo List</a>
	    </div>
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		    <ul class="nav navbar-nav navbar-right">
		    	<li><a href="about.html">About Us</a></li>
		    </ul>
		</div>
	  </div>
	</nav>
<!-- nav bar ends -->
<!-- middle section starts -->
<div class="container cnt-mo-sec wow zoomIn">
	<div class="cnt-sec col-md-6 col-md-offset-3 col-xs-12">
		<div class="col-md-12">
			<h2>Register and Start Working</h2>
			<form class="log-frm">
				<input type="text" name="name" id="name" placeholder="Full Name" required>
				<input type="email" name="email" id="email" placeholder="Email" required>
				<div><span id="emailAlert"></span></div>
				<input type="password" id="passwrd" name="passwrd" placeholder="Password" required>
				<input type="password" id="repasswrd" name="re-passwrd" placeholder="Retype Password" required>
				<div><span id="passwordAlert"></span></div>
				<input type="submit" id="submit" name="submit" value="Submit" onclick="validate()">
			</form>
			<hr>
			<div class="nw-usr">
				<h3>Already Registered?</h3>
				<a href="index.php"><input type="button" value="Log In"></a>
			</div>
		</div>
	</div>
</div>
<!-- middle section ends -->
<!-- footer section starts -->
<footer class="fttr">
	<div class="container-fluid">
		<div class="col-md-6 col-xs-12 dvlp">
			<p>© 2018 | Made With <i class="fa fa-heart heart"></i> By Mohit Kumar & Paramdeep Singh</p>
		</div>
		<div class="col-md-6 col-xs-12">
			<ul class="social-icons soc-ic">
					<li><a href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
					<li><a href="#"><i class="fa fa-instagram fa-2x"></i></a></li>
					<li><a href="#"><i class="fa fa-linkedin fa-2x"></i></a></li>
					<li><a href="#"><i class="fa fa-google-plus fa-2x"></i></a></li>
					<li><a href="#"><i class="fa fa-youtube fa-2x"></i></a></li>
			</ul>
		</div>
	</div>
</footer>
<!-- footer section ends -->
</body>
<!--Javascript files-->
<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<!-- Password Match -->
<script type="text/javascript">
	$(document).ready(function () {
   		$("#repasswrd").keyup(checkPasswordMatch);
	});
	function checkPasswordMatch() {
	    var password = $("#passwrd").val();
	    var confirmPassword = $("#repasswrd").val();

	    if (password != confirmPassword)
	    {
	        $("#passwordAlert").html("Password do not match!");
	        $('#submit').prop('disabled', true);
	    	
	    }
	    else
	    {
	        $("#passwordAlert").html("Password match Successfully");
	        $('#submit').prop('disabled', false);
	    	
	    }
	}
</script>
<!-- Validate Email -->
<script type="text/javascript">
	$(document).ready(function () {
   		$("#email").keyup(ValidateEmail);
	});

	function ValidateEmail() {
    var x = document.getElementById('email').value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        $("#emailAlert").html("Not a Valid Email");
        $('#submit').prop('disabled', true);
    }
    else
    {
    	$("#emailAlert").html("Valid Email Address");
    	$('#submit').prop('disabled', false);
        
    }
	}
</script>
<!-- Register Form request handler -->
<script type="text/javascript" src="js/registerForm.js"></script>
<script src="js/wow.min.js"></script>
<script>
    new WOW().init();
</script>
</html>