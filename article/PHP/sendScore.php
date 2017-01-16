<?php

require '../../resource/PHP/dbInfo.php';


$week = $_POST["week"];
$user = $_POST["user"];
$gender = $_POST["gender"];
$age = $_POST["age"];
$location = $_POST["location"];
$income = $_POST["income"];
$party = $_POST["party"];
$ethnicity = $_POST["ethnicity"];
$score = $_POST["score"];
$dbname = $dbRate;

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM ratings WHERE week = '$week' AND user = '$user'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  echo "You already voted!";
}

else{

  $sql = "INSERT INTO ratings (week, user, gender, age, location, income, party, ethnicity, score)
  VALUES ('$week', '$user', '$gender', '$age', '$location', '$income', '$party', '$ethnicity', '$score')";

  if (mysqli_query($conn, $sql)) {
      echo "Thanks for rating!";
  } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }

  mysqli_close($conn);

} //end of else checking if a user has already voted

 ?>
