<?php

function getLessThanAgeScore($age){

global $servername;
global $username;
global $password;
global $rNumber;
global $dbRate;

$ageScoreBefore;
$responses = 0;


$dbname = $dbRate;


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM ratings WHERE age <= '$age'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($ratings = mysqli_fetch_assoc($result)) {

      $ageScoreBefore = $ageScoreBefore + $ratings["score"];
      $responses++;


    }
}
mysqli_close($conn);

$ageScore = round($ageScoreBefore / $responses, $rNumber);

echo $ageScore;

}

 ?>
