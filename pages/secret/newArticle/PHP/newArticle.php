<?php

require '../../../../resource/PHP/dbInfo.php';

$name = $_POST["name"];
$image = $_POST["image"];
$pDate = $_POST["pDate"];
$pDateFormat = $_POST["pDateFormat"];
$week = $_POST["week"];
$summary = $_POST["summary"];
$nS1 = $_POST["nS1"];
$nL1 = $_POST["nL1"];
$nS2 = $_POST["nS2"];
$nL2 = $_POST["nL2"];
$nS3 = $_POST["nS3"];
$nL3 = $_POST["nL3"];
$nS4 = $_POST["nS4"];
$nL4 = $_POST["nL4"];
$pro = $_POST["pro"];
$con = $_POST["con"];
$YT1 = $_POST["YT1"];
$YT2 = $_POST["YT2"];
$endD = $_POST["endD"];

$dbname = "posts";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO articles (name, image, pDate, pDateFormat, week, summary, nS1, nL1, nS2, nL2, nS3, nL3, nS4, nL4, pro, con, YT1, YT2, endD)
VALUES ('$name', '$image', '$pDate', '$pDateFormat', '$week', '$summary', '$nS1', '$nL1', '$nS2', '$nL2' , '$nS3', '$nL3', '$nS4', '$nL4', '$pro', '$con', '$YT1', '$YT2', '$endD')";

if (mysqli_query($conn, $sql)) {
    echo "New article created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>
