<?php
 $ignorelogin = 'yes';
 require '../resource/head.php';
 require 'PHP/getData.php';
 require 'PHP/alreadyVoted.php';

 ?>

<head>
  <title>Article View</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/rating.css">
  <script src = "js/rating.js"></script>
  <script src = "../resource/js/typewriter.js"></script>
  <script src = "js/script.js"></script>
</head>

<body>
  <?php require '../resource/html/header.php' ?>
  <?php include 'comp/headline.php' ?>
  <?php include 'comp/datePublished.php' ?>
  <?php include 'comp/summary.php' ?>
  <?php include 'comp/readMore.php' ?>
  <?php include 'comp/pro.php' ?>
  <?php include 'comp/con.php' ?>
  <?php include 'comp/countdown.php' ?>
  <?php include 'comp/video.php' ?>
  <?php if (isset($_SESSION['username'])) {
    if($hasVoted === false){
      include 'comp/rate.php';
    }// if already voted
  }// if logged in ?>

  <?php require '../resource/html/footer.php' ?>
