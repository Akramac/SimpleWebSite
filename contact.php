<?php
if(isset($_POST['Submit'])){
    require("phpmailer/phpmailer/class.PHPMailer.php");
    $mail = new PHPMailer();
	include_once('_includes/dbh.php');
    $name=$_POST['name'];
    $email=$_POST['email'];
	$subject=$_POST['subject'];
	$message=$_POST['message'];
	$mailTo='akramkanber@yahoo.com';
	$headers='From:'.$email.' ';
	$txt="You have received an e-mail from :".$name.".\n\n".$message;

    $mail->Username = "akram.freelancer2012@gmail.com";
    $mail->Password = "kanber1992";
    $mail->AddAddress($email);
    $mail->FromName = "Akram";

    $mail->Subject = $subject;
    $mail->Body    = $message;
    //-----------------------------------------------------------------------

    $mail->Host = "ssl://smtp.gmail.com";
    $mail->Port = 465;
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->From = $mail->Username;
    if(!$mail->Send())
        echo "Mailer Error: " . $mail->ErrorInfo;
    else
        echo "Message has been sent";
}?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Website06</title>
	<meta name="description" content="Siteweb Front/Back end">
	<meta name="author" content="Akram Craftorm">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  	<link rel="stylesheet" href="css/nicegrid.css">
	<link rel="stylesheet" href="css/style.css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="css/menu.css">
	<script src="js/jquery1111.min.js" type="text/javascript"></script>
	<script src="js/script.js"></script>
    <link href="owl-carousel/owl.carousel.css" rel="stylesheet">


</head>

<body>
	<div class="wrap-body">

		<header class="main-header">
			<div class="nicegrid">
				<div class="t-center">
					<a class="site-branding" href="index.html">
						<img src="images/logo.png" width="250px"/>
					</a>
				</div>
				<div class="row">
					<div class="col-2-3">
						<div id='cssmenu'>
							<ul>
							   <li><a href='index.html'><span>Home</span></a></li>
							   <li><a href='aboutme.html'><span>About</span></a></li>
							   <li><a href='archive.html'><span>Blog</span></a></li>
							   <li class='active last'><a href='contact.html'><span>Contacts</span></a></li>
							</ul>
						</div>
					</div>
					<div class="col-1-3">
						<div class="top-search">
							<form id="form-container" action="">
								<!--<input type="submit" id="searchsubmit" value="" />-->
								<a class="search-submit-button" href="javascript:void(0)">
									<i class="fa fa-search"></i>
								</a>
								<div id="searchtext">
									<input type="text" id="s" name="s" placeholder="Search">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</header>


		<section id="container">
			<div class="wrap-container">

				<section class="content-box nicegrid">
					<div class="row wrap-box">


						<div id="map" style="height: 450px; margin-bottom: 30px"></div>

						<div class="contact-form">
							<h3 class="t-center">Contact Form</h3>
							<div id="contact_form">
								<form name="form1" id="ff" method="post" action="contact.php">
									<label class="row">
										<div class="col-1-3">
											<div class="wrap-col">
												<input type="text" name="name" id="name" placeholder="Enter name" required="required" />
											</div>
										</div>
										<div class="col-1-3">
											<div class="wrap-col">
												<input type="email" name="email" id="email" placeholder="Enter email" required="required" />
											</div>
										</div>
										<div class="col-1-3">
											<div class="wrap-col">
												<input type="text" name="subject" id="subject" placeholder="Subject" required="required" />
											</div>
										</div>
									</label>
									<label class="row">
										<div class="wrap-col">
											<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
											placeholder="Message"></textarea>
										</div>
									</label>
									<center><input class="button button-skin" type="submit" name="Submit" value="Submit"></center>
								</form>
							</div>
						</div>
					</div>
				</section>

			</div>
		</section>


		<footer>
			<div class="nicegrid">
				<div class="wrap-footer">
					<div class="row">
						<div class="col-1-3 col-footer-1">
							<div class="wrap-col">
								<h3 class="widget-title">About Us</h3>
								<p>Ut volutpat consectetur aliquam. Curabitur auctor in nis ulum ornare. Metus elit vehicula dui. Curabitur auctor in nis ulum ornare. Sed consequat, augue condimentum fermentum</p>
								<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque la udantium</p>
							</div>
						</div>
						<div class="col-1-3 col-footer-2">
							<div class="wrap-col">
								<h3 class="widget-title">Recent Post</h3>
								<ul>
									<li><a href="#">MOST VISITED COUNTRIES</a></li>
									<li><a href="#">5 PLACES THAT MAKE A GREAT HOLIDAY</a></li>
									<li><a href="#">PEBBLE TIME STEEL IS ON TRACK TO SHIP IN JULY</a></li>
									<li><a href="#">STARTUP COMPANY’S CO-FOUNDER TALKS ON HIS NEW PRODUCT</a></li>
								</ul>
							</div>
						</div>
						<div class="col-1-3 col-footer-3">
							<div class="wrap-col">
								<h3 class="widget-title">Where to Find Us</h3>
								<div class="row">
									<address>
										<strong>AUBERGE LONDON</strong>
										<br>
										Ut wisi enim
										<br>
										Minim veniam 12345
										<br>
										Exerci Tation
									</address><br>
									<p>
										<strong>Opening Hours:</strong>
										<br>
										Mon - Fri: 9:00 - 21:00
										<br>
										Sat - Sun: 9:00 - 2:00
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="bottom-footer">
					<div class="bottom-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-instagram"></i></a>
						<a href="#"><i class="fa fa-google-plus"></i></a>
						<a href="#"><i class="fa fa-pinterest"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-youtube"></i></a>
					</div>
					<div class="copyright">
						Copyright @ - Designed by <a>Craftorm Akram</a>
					</div>
				</div>
			</div>
		</footer>

		<!-- Google Map -->

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7V-mAjEzzmP6PCQda8To0ZW_o3UOCVCE&callback=initMap" async defer></script>

	</div>
</body>
</html>
