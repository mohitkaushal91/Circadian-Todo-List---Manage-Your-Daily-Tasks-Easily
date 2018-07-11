<?php

include 'config.php';

//validate input data
$t_id = $_POST['task_id'];
$share_mail = $_POST['mail'];

//sql query to delete data
$sql_query = "SELECT * FROM users WHERE mail='$share_mail'";

//execute sql query
$exec_query = mysqli_query($connection,$sql_query);

if($exec_query)
{
    //extract data to a row
    $row = mysqli_fetch_assoc($exec_query);

// get database data and save it in variable
    $share_id = $row['u_id'];

    $sql_query1 = "UPDATE todo_records SET share_id='$share_id' WHERE todo_id=$t_id";
//execute sql query
    $exec_query1 = mysqli_query($connection,$sql_query1);

    // email the person about shareable task
    $to      = $share_mail;
    $subject = 'CIRCADIAN | Task Shared';
    $message = 'Someone just shared a task with you on Circadian. It can be important to you. Please go and check it out.';
    $headers = 'From: hello@debugninja.com' . "\r\n" .
        'Reply-To: '.$share_mail. "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);

    header('location: successshare.html');
}
else
{
    header('location: mailnotfound.html');
}


//close mysql connection
mysqli_close($connection);

?>