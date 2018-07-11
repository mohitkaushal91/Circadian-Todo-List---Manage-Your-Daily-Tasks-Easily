<?php
include('config.php');
session_start();
if(isset($_SESSION['id'])){
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
	<!-- custom css -->
	<style type="text/css">
		.log-frm input:nth-child(3)
		{
			margin-top: 15px;
		}
		@media(max-width: 768px)
		{
			.log-frm input:nth-child(3)
			{
				width: 50%;
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
			<h2>Log in and Go to your Work</h2>
			<form class="log-frm" action="user_login.php" method="POST">
				<input type="email" name="mail" id="mail" placeholder="Email" required>
				<input type="password" name="passwrd" id="passwrd" placeholder="Password" required>
				<input type="submit" name="submit" value="Submit">
			</form>
			<hr>
			<div class="nw-usr">
				<h3>New User?</h3>
				<a href="register.php"><input type="button" value="Sign Up"></a>
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
<script src="js/wow.min.js"></script>
<script>
    new WOW().init();
</script>
</html>