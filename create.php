<?php

include 'config.php';

session_start();
//validate input data
$t_desc = $_POST['task'];
$id = $_SESSION['id'];

//sql query to insert data
$sql_query = "INSERT INTO todo_records (u_id,todo_description) VALUES ('$id','$t_desc')";

//validate sql query
if(!mysqli_query($connection,$sql_query))
{
    echo "Error: " . mysqli_error($connection);
}

header('location: home.php');

//close mysql connection
mysqli_close($connection);

?>