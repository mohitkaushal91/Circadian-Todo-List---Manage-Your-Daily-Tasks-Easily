<?php
include('config.php');
session_start();
$id = $_SESSION['id'];
if($id == null){
    header('location: index.php');
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
    <link rel="stylesheet" type="text/css" href="css/style-home.css">
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
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- nav bar ends -->

<!-- list of tasks section starts -->
<div class="container">
    <?php
    include 'config.php';
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM todo_records WHERE u_id='$id' AND task_completed='1' ORDER BY todo_creation_time DESC ";
    $res = mysqli_query($connection,$sql);
    if (mysqli_num_rows($res) > 0)
    {
        while($row = mysqli_fetch_assoc($res))
        {
            $t_desc = $row['todo_description'];
            $task_id = $row['todo_id'];
            echo "<div class='row task-row'>";
            echo "<div class='col-md-9 col-xs-9'>";
            echo "<p>";
            echo "$t_desc";
            echo "</p>";
            echo "</div>";
            echo "<div class='col-md-3 col-xs-3 del-btn'>";
            echo "<a href='deletecompleted.php?del_task=$task_id'>";
            echo "<i class='fa fa-trash-o fa-2x'>";
            echo "</i>";
            echo "</a>";
            echo "</div>";
            echo "</div>";
        }
    }
    ?>
</div>
<!-- footer section starts -->
<footer class="fttr">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-xs-12 dvlp"> <!-- class dvlp -->
                <p>© 2018 | Made With <i class="fa fa-heart heart"></i> By Mohit Kumar & Paramdeep Singh</p>
            </div>
            <div class="col-md-6 col-xs-12">
                <ul class="social-icons pull-right soc-ic"><!-- class soc-ic -->
                    <li><a href="#"><i class="fa fa-facebook fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-instagram fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus fa-2x"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube fa-2x"></i></a></li>
                </ul>
            </div>
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
<script>
    $(document).ready(function () {
        $(".del-btn").on('click', function () {
            $(this).parent().addClass('hinge');
        });
    });
</script>
</html>