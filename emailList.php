<?php

if(isset($_POST["email"])) {
    mail("georgettekford@yahoo.com","Newletter Registration","New Email: \n" . $_POST["email"]);
    $title =  "Success!";
    $body = "You are registered";
} else  {
    mail("evanabonsignori@gmail.com","Error With Site", "Unable to add email list");
    $title =  "Sorry, <br /> Something went wrong";
    $body = "Please try again later";
}

?>

<!DOCTYPE HTML>
<!--
	Newsletter Success Page
-->

<html>
	<head>
		<title>Register Confirmation</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript>
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<div class="logo">
							<span class="image main"> <img src="images/gg.png" style="border-radius:50%; position:absolute; top: -54px;"> </span>
						</div>
						<div class="content">
							<div class="inner">
								<h1><?php echo $title; ?></h1>
								<p><?php echo $body; ?></p>
							</div>
						</div>
						<nav>
							<ul>
								<li><a href="index.html">Back to Site</a></li>
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">
					</div>

				<!-- Footer -->
					<footer id="footer">
									<p class="copyright">&copy; Georgette K Ford 2017 </p>
					</footer>

			</div>

		<!-- BG -->
			<div id="bgS"></div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

			</body>
			</html>
