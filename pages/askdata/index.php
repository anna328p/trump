<?php
$ignorelogin = 'yes';
require '../../resource/head.php'
?>

<head>
<title>Your data</title>
<link rel="stylesheet" href="style.css">
<script src = "script.js"></script>
</head>

<body>
<?php require '../../resource/html/header.php' ?>
  <div class = 'container'>
    <?php include 'comp/title.php' ?>
    <?php include 'comp/ask.php' ?>
    <?php include 'comp/what.php' ?>
    <?php include 'comp/do-not.php' ?>
    <?php include 'comp/signature.php' ?>
  </div>
<?php require '../../resource/html/footer.php' ?>
</body>
