<?php
require '../../../resource/head.php';
$article = $_GET["article"];
$score = $_GET["score"];
?>

<head>
  <title>You Voted!</title>
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <?php require '../../../resource/html/header.php' ?>

  <div class = "container">
      <div class = "thanksVote">Thanks for voting!</div>
      <div class = "count">We are adding your vote to the score now.</div>
      <a href="https://twitter.com/share" class="twitter-share-button" data-text="I rated &#39;<?php echo $article ?>&#39; a <?php echo $score ?>/10 on @DonaldTracker " data-url="http://www.donaldtracker.com" data-show-count="false" data-size="large">Tweet</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
      <a href = "/"><img id = "trumpPic" src = "images/trump.gif" ></a>
      <div class = "goBack">Pro tip: Click Trump to go back to the homepage and see the updated score!</div>
  </div>


</body>
