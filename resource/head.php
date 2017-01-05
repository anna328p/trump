<?php

if($ignorelogin!='yes'){
  session_start();
  if (!isset($_SESSION['username'])) {
      header("location:../../../../../../../../../../../../../../../../../../login/login/main_login.php");
  }
}

 ?>

<head>

<meta name="apple-mobile-web-app-capable" content="yes">  

<link rel="icon" href="/resource/images/logos/icons/blackicon.png" type="image/gif" sizes="16x16">

<!--jQuery-->
<script src='/resource/jquerymin311.js'></script>

<!--Materialize JS-->
<?php if($material!='block'){?>
<script src='/resource/materialize/js/materialize.min.js'></script>
<?php }?>

<!--Stickyheader.js-->
<script src ='/resource/js/header/stickheader.js'></script>

<!--Flip.js-->
<script src ='/resource/js/flip.js'></script>

<!--Default.js-->
<script src='/resource/default.js'></script>

<!--Materialize CSS-->
<?php if($material!='block'){?>
<link rel='stylesheet' type='text/css' href='/resource/materialize/css/materialize.min.css'>
<?php } ?>

<!--Animate.css-->
<link rel='stylesheet' type='text/css' href='/resource/css/animate.css'>


<!--Default.css-->
<link rel='stylesheet' type='text/css' href='/resource/default.css'>

</head>
