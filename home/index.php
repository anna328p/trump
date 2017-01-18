<?php
  $ignorelogin='yes';
  require './../resource/head.php';
  require 'PHP/getData.php';
  ?>

<head>

<title>DonaldTracker</title>



<!--Mobile icon for iOS-->
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="../resource/images/logos/icons/whiteicon.png">

<!--To get these fancy charts in here -->
<link rel="stylesheet" href="../resource/css/chart/chart.css">
<link rel="stylesheet" href="../home/css/mychart.css">
<script src ="../resource/js/chart/chart.js"></script>
<?php include 'js/mychart.php' ?> <!--aka <script src = "mychart.js"> -->

<!--To get that slider in here!-->
<link rel="stylesheet" href="../resource/css/lightslider.css">
<script src = "../resource/js/lightslider.js"></script>

<!--To get that sweet typewriter effect -->
<script src = "../resource/js/appear.js"></script> <!-- This is to have the effect happen when it's on screen -->
<script src = "../resource/js/typewriter.js"></script>

<!--To add my own things -->
<link rel="stylesheet" href="../home/css/style.css">
<?php include 'js/script.php' ?>

</head>

<body>

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

<?php include '../resource/html/footer.php' ?>

</body>
