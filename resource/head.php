<?php

session_start();
if (!isset($_SESSION['username'])) {
    header("location:../../../../../../../../../../../../../../../../../../login/login/main_login.php");
}

$mat=$_GET["mat"]

 ?>

<head>

<!--jQuery-->
<script src='/resource/jquerymin311.js'></script>

<!--Materialize JS-->
<?php if($mat!=0){?>
<script src='/resource/materialize/js/materialize.min.js'></script>
<?php } ?>

<!--Stickyheader.js-->
<script src ='/resource/js/header/stickheader.js'></script>

<!--Default.js-->
<script src='/resource/default.js'></script>

<!--Materialize CSS-->
<?php if($mat!=0){?>
<link rel='stylesheet' type='text/css' href='/resource/materialize/css/materialize.min.css'>
<?php } ?>

<!--Default.css-->
<link rel='stylesheet' type='text/css' href='/resource/default.css'>

</head>
