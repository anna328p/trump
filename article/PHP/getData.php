<?php

$weekNumber = $_GET["w"];
$dbname = $dbPosts;


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM articles WHERE week = '$weekNumber'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($article = mysqli_fetch_assoc($result)) {

      $name = $article["name"];
      $image = $article["image"];
      $pDate = $article["pDate"];
      $pDateFormat = $article["pDateFormat"];
      $week = $article["week"];
      $summary = $article["summary"];
      $nS1 = $article["nS1"];
      $nL1 = $article["nL1"];
      $nS2 = $article["nS2"];
      $nL2 = $article["nL2"];
      $nS3 = $article["nS3"];
      $nL3 = $article["nL3"];
      $nS4 = $article["nS4"];
      $nL4 = $article["nL4"];
      $pro = $article["pro"];
      $con = $article["con"];
      $YT1 = $article["YT1"];
      $YT2 = $article["YT2"];
      $endD = $article["endD"];

    }
} else {
    echo "0 results";
}

mysqli_close($conn);


 ?>
