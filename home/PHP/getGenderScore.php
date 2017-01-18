<?php

function getGenderScore($gender){

global $servername;
global $username;
global $password;
global $rNumber;
global $dbRate;

$genderScoreBefore;
$responses = 0;


$dbname = $dbRate;


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM ratings WHERE gender = '$gender'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($ratings = mysqli_fetch_assoc($result)) {

      $genderScoreBefore = $genderScoreBefore + $ratings["score"];
      $responses++;


    }
}   
mysqli_close($conn);

$genderScore = round($genderScoreBefore / $responses, $rNumber);

echo $genderScore;

}

 ?>
