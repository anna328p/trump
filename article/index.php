<?php
$ignorelogin = 'yes';
require '../resource/head.php'
?>
<head>
  <title>Article View</title>
  <link rel="stylesheet" href="../article/css/style.css">
</head>
<body>

<?php include '../resource/html/header.php' ?>

<div class='container'>
  <?php include '../article/comp/title.php' ?>
  <?php include '../article/comp/tableoutline.php' ?>
  <?php include '../article/comp/ratingsubmission.php' ?>

</div>

<?php require '../resource/html/footer.php' ?>

</body>
