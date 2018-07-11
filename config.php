<?php

//Create Connection
$connection = mysqli_connect("localhost", "mohit", "debugninja123", "mohit_todo");

//Check Connection
if(!$connection)
{
	die("Unable to Connect with Database". mysqli_connect_error());
}

?>