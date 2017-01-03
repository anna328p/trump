<?php
  $ignorelogin='yes';
  require './../resource/head.php'
  ?>

<?php

$mainScore = 5.3;
$republicanScore = 7.2;
$democratScore = 4.5;

 ?>
<head>

<title>Welcome</title>

<!--To get these fancy charts in here -->
<link rel="stylesheet" href="../resource/css/chart/chart.css">
<link rel="stylesheet" href="../home/css/mychart.css">
<script src ="../resource/js/chart/chart.js"></script>
<script src="../home/js/mychart.js"></script>

<!--To get that slider in here!-->
<link rel="stylesheet" href="../resource/css/lightslider.css">
<script src = "../resource/js/lightslider.js"></script>

<!--To get that sweet typewriter effect -->
<script src = "../resource/js/appear.js"></script> <!-- This is to have the effect happen when it's on screen -->
<script src = "../resource/js/typewriter.js"></script>

<!--To add my own things -->
<link rel="stylesheet" href="../home/css/style.css">
<script src="../home/js/script.js"></script>

</head>


<body>

<!--Hiddens to pass from PHP to JS-->
<p class ="hidden" id = "mainHiddenScore"><?php echo $mainScore ?></p>
<p class ="hidden" id = "republicanHiddenScore"><?php echo $republicanScore ?></p>
<p class ="hidden" id = "democratHiddenScore"><?php echo $democratScore ?></p>


<!--Main page-->
<?php require '../resource/html/header.php' ?>

<div class = "container">
<?php include '../home/comp/tableoutline.php' ?>
<?php include '../home/comp/mobile.php' ?>
<?php include '../home/comp/chart.php' ?>

<!--Show the recruit modual if the user is not logged in -->
<?php if (!isset($_SESSION['username'])) { ?>
<?php include '../home/comp/recruit.php' ?> <?php
}?>
<?php include '../home/comp/featuredstats.php' ?>
<?php include '../home/comp/recentarticle.php' ?>
<?php include '../home/comp/shortcuts.php' ?>



</div>


</body>
