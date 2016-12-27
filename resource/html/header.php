<link rel="stylesheet" href="/resource/css/header.css">
<script src ='/resource/js/header/init.js'></script>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<header id="header" class="header-login-signup">

	<div class="header-limiter">

		<a href='/'><img id="logo" src="/resource/images/logos/whitelogo.png"></a>

		<!--<nav>
			<a href="#">Home</a>
			<a href="#" class="selected">Blog</a>
			<a href="#">Pricing</a>
		</nav>-->

<?php
	session_start();
	if (!isset($_SESSION['username'])) { ?>
		<ul>
			<li><a href="/login/login/main_login.php">Login</a></li>
			<li><a href="/login/login/signup.php">Sign up</a></li>
		</ul>

	<?php }

	else{ ?>
		<ul>
			<li><?php echo $_SESSION['username'] ?></li>
			<li><a href="/login/login/logout.php">Logout</a></li>
		</ul>
	<?php }


	?>

	</div>

</header>
