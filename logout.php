<?php
include('config.php');
    session_start();
    $_SESSION['id'] = null;
    header('Location: index.php');

?>