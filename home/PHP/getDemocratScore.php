<?php

$democratScoreBefore;
$responses = 0;

$dbname = $dbRate;

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM ratings WHERE party = 'democrat'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($ratings = mysqli_fetch_assoc($result)) {

      $democratScoreBefore = $democratScoreBefore + $ratings["score"];
      $responses++;


    }
} else {
    echo "0 results";
}

mysqli_close($conn);

$democratScore = round($democratScoreBefore / $responses, $rNumber);

 ?>
