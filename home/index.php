<?php
  $ignorelogin='yes';
  require './../resource/head.php'
  ?>

<?php

$mainScore = 5.72;
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





</div>


</body>
