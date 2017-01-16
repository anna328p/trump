<?php

$mainScoreBefore;
$responses = 0;

$dbname = $dbRate;

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM ratings";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($ratings = mysqli_fetch_assoc($result)) {

      $mainScoreBefore = $mainScoreBefore + $ratings["score"];
      $responses++;


    }
} else {
    echo "0 results";
}

mysqli_close($conn);

$mainScore = round($mainScoreBefore / $responses, $rNumber);

 ?>
