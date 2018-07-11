<?php

include 'config.php';

//validate input data
$name = $_POST['name1'];
$email = $_POST['email1'];
$password = md5($_POST['password1']);

//sql query to insert data
$sql_query = "INSERT INTO users (name,mail,password) VALUES ('$name','$email','$password')";

//validate sql query
if(!mysqli_query($connection,$sql_query))
{
	echo "Error: " . mysqli_error($connection); 
}

//close mysql connection
mysqli_close($connection);

?>