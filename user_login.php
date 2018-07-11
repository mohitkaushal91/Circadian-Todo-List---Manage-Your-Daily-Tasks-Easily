<?php

include 'config.php';

//validate input data
	$email = $_POST['mail'];
	$password = md5($_POST['passwrd']);

	//sql query to extract data
	$sql_query = "SELECT * FROM users WHERE mail='$email'";
	
	//execute sql query
	$exec_query = mysqli_query($connection,$sql_query);

	//extract data to a row
	$row = mysqli_fetch_assoc($exec_query);

	// get database data and save it in variable
	$db_email = $row['mail'];
    $db_password = $row['password'];

	// check if credentials match and start session
	if($email == $db_email && $password == $db_password)
	{
		session_start();
	  	$_SESSION['id'] = $row['u_id'];
	  	header('location: home.php');
	}
	else
	{
        header('location: checkCredentials.html');
	}

//close mysql connection
mysqli_close($connection);

?>