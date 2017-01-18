<?php

function getWeekScore($week){

$weekScoreBefore;
$responses = 0;

$dbname = $dbRate;

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM ratings WHERE week <= '$week'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($ratings = mysqli_fetch_assoc($result)) {

      $weekScoreBefore = $weekScoreBefore + $ratings["score"];
      $responses++;


    }
} else {
    echo "0 results";
}

mysqli_close($conn);

$weekScore = round($weekScoreBefore / $responses, $rNumber);

} //end of get week function

 ?>
