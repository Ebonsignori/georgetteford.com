<?php

if(isset($_REQUEST["name"])) {
    $sender=$_REQUEST["name"];
    $senderEmail=$_REQUEST["email"];
    $message=$_REQUEST["message"];
    $signup = (isset($_REQUEST["signup"])) ? "CONFIRM, Checked:
     I am interested in joining your business team and starting a new career" :
     "DENIED Unchecked: I am interested in joining your business team and starting a new career";
    $learnmore = (isset($_REQUEST["learnmore"])) ? "CONFIRM, Checked:
      I want to learn more about these wonderful oils" :
      "DENIED Unchecked: I want to learn more about these wonderful oils";

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n Message: \n$message\n\n$signup\n\n$learnmore";

    mail("georgettekford@yahoo.com","Message From Site Visitor",$mailBody);
    $title = "Thank You, <br /> ". $sender ."!";
    $body = "Your Message Was Sent";
} else {
   mail("evanabonsignori@gmail.com","Error With Site", "Unable to send message");
   $title = "Sorry, <br /> We were unable to send your message";
   $body = "Please try again later";
   $message = "Unable to send.";
}

?>

<!DOCTYPE HTML>
<!--
	Newsletter Success Page
-->

<html>
	<head>
		<title>Message Confirmation</title>
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
                <li><a href="#viewMsg">View Message</a></li>
								<!--<li><a href="#elements">Elements</a></li>-->
							</ul>
						</nav>
					</header>

				<!-- Main -->
					<div id="main">
<!-- Elements -->
<article id="viewMsg">
<h3> Your Message: </h3>
<pre class="message-view"><?php echo  $message ?></pre>
</article>


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
