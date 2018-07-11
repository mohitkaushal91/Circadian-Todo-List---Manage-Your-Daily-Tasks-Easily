<?php

include 'config.php';

//validate input data
$t_id = $_GET['del_task'];

//sql query to delete data
$sql_query = "DELETE FROM todo_records WHERE todo_id =$t_id";

//validate sql query
if(!mysqli_query($connection,$sql_query))
{
    echo "Error: " . mysqli_error($connection);
}

header('location: home.php');

//close mysql connection
mysqli_close($connection);

?>