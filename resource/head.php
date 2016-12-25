<?php

session_start();
if (!isset($_SESSION['username'])) {
    header("location:../../../../../../../../../../../../../../../../../../login/login/main_login.php");
}

 ?>

<head>

<!--jQuery-->
<script src='/resource/jquerymin311.js'></script>

<!--Materialize JS-->
<script src='/resource/materialize/js/materialize.min.js'></script>

<!--Default.js-->
<script src='/resource/default.js'></script>

<!--Materialize CSS-->
<link rel='stylesheet' type='text/css' href='/resource/materialize/css/materialize.min.css'>

<!--Default.css-->
<link rel='stylesheet' type='text/css' href='/resource/default.css'>

</head>
