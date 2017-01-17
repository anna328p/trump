<?php

$latestArticleName;
$latestArticleDate;

$dbname = $dbPosts;

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM articles ORDER BY week DESC LIMIT 1";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($article = mysqli_fetch_assoc($result)) {

      $latestArticleName = $article['name'];
      $latestArticleDate = $article['pDate'];
      $latestArticleWeek = $article['week'];


    }
} else {
    echo "0 results";
}

mysqli_close($conn);


 ?>
