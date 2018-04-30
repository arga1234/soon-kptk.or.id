<?php


$text = "<span style='color:red; font-size: 35px; line-height: 40px; magin: 10px;'>Error! Please try again.</span>";

if(isset($_POST['submitcontact']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];
	$subject =$_POST['subject'];

	$to = "youremail@gmail.com";
	$subject = $subject."LPPPTK KPTK";
	$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;

	$from = "LPPPTK KPTK";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n";

	if(@mail($to,$subject,$message,$headers))
	{
	  $text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Your Message was sent successfully !</span>";
	}
}
?>
<html>
<head>
  <!-- META DATA -->
	<meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

	<title>OpenHouse - Houses for Rent</title>

	<!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css"  type="text/css">

	<!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">

	<link rel="stylesheet" href="css/lightbox.css">

	<!-- Custom Fonts -->
    <link rel="stylesheet" href="font-awesome-4.4.0/css/font-awesome.min.css"  type="text/css">
	<link href='http://fonts.googleapis.com/css?family=Asap:400,700' rel='stylesheet' type='text/css'>

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

 <body>
<header>

	<!-- /////////////////////////////////////////Navigation -->
	<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header page-scroll">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
							</button>


			<div  class="navbar-brand page-scroll" style="width: 230px;margin-left:10px;margin-top:-10px">
				<img src="images/logo.png">
			</div>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling  -->
					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right">
									<li class="hidden">
											<a href="#page-top"></a>
									</li>
									<li>
											<a class="page-scroll" href="beranda.html">Beranda</a>
									</li>
									<li>
											<a class="page-scroll" href="profillembaga.html">Profil Lembaga</a>
									</li>
									<li>
											<a class="page-scroll" href="strukturorganisasi.html">Struktur Organisasi</a>
									</li>

										<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Artikel<i class="fa fa-chevron-down"></i></a>
											<div class="dropdown-menu" style="margin-left: -300px;">
												<div class="dropdown-inner">
													<ul class="list-unstyled">
														<li><a href="kelautan&perikanan.html">Kelautan & Perikanan</a></li>
													</ul>
													<ul class="list-unstyled">
														<li><a href="teknologiinformasi&komunikasi.html">TIK</a></li>
													</ul>
													<ul class="list-unstyled">
														<li><a href="informasiumum.html">Informasi Umum</a></li>
													</ul>

							</ul>
					</div>
					<!-- /.navbar-collapse -->
			</div>
			<!-- /.container-fluid -->
	</nav>
	<!-- Navigation -->

	<div class="box-shadow">
		<!-- Carousel -->
			</ol>
		</div>
	</div>
</header>

	<!-- /////////////////////////////////////////Content -->
	<div id="page-content">

		<!-- ////////////Content Box -->
		<section class="box-content box-style-1">
			<div class="container">
				<div class="row">
					<div class="col-md-8 wow fadeInRight">
						<h3>Contact Form</h3>
						<form id="ff" name="form1" method="post" action="contact.php">
							<!--Warning-->
							<center><?php echo $text;?></center>
							<!---->
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
									<input type="text" class="form-control input-lg" name="name" id="name" placeholder="Enter name" required="required" />
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="email" class="form-control input-lg" name="email" id="email" placeholder="Enter email" required="required" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<input type="text" class="form-control input-lg" name="subject" id="subject" placeholder="Subject" required="required" />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12 text-center">
									<div class="form-group">
										<textarea name="message" id="message" class="form-control" rows="4" cols="25" required="required"
										placeholder="Message"></textarea>
									</div>
									<button type="submit" class="btn btn-skin btn-lg page-scroll wow fadeInUp" name="submitcontact" id="submitcontact">Submit</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>

	</div>

	<!-- FOOTER -->
	<footer>
		<div class="wrap-footer">
			<div class="container">
				<div class="row">
					<div class="col-footer col-md-5">
						<h2 class="footer-title">LPPPTK KPTK</h2>
						<div class="textwidget">Lembaga Pengembangan dan Pemberdayaan Pendidik dan Tenaga Kependidikan
bidang Kelautan, Perikanan, dan Teknologi Informasi dan Komunikasi</div>
					</div>
					<div class="col-footer col-md-3">
						<h2 class="footer-title">Social Media</h2>
						<div class="textwidget">
							<a href="#">Facebook</a>
						</div>
							<div class="textwidget">
						<a href="#">Twitter</a>
						</div>
						<div class="textwidget">
						<a href="#">Instagram</a>
					</div>
					</div>
	<div class="col-footer col-md-4">

						<h2 class="footer-title">Pintasan</h2>

						<div class="textwidget">
							<a href="beranda.html">Beranda</a>
						</div>
							<div class="textwidget">
						<a href="#">Whistle Blowing System</a>
						</div>
						<div class="textwidget">
						<a href="pengaduan.html">Pengaduan Masyarakat</a>
					</div>
					<div class="textwidget">
					<a href="informasiumum.html">Indeks Artikel </a>
				</div>
	</div>
				</div>
			</div>
			</div>
			<div class="bottom-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<p>Copyright LPPPTK PTK 2018</p>
						</div>
					</div>
				</div>
			</div>

	</footer>

	<!-- jQuery -->
	<script type="text/javascript" src="js/jquery-2.1.1.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>

	<!-- Custom Theme JavaScript -->
	<script src="js/agency.js"></script>

	<!-- Plugin JavaScript -->
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/classie.js"></script>
	<script src="js/cbpAnimatedHeader.js"></script>

	<script src="js/lightbox-plus-jquery.min.js"></script>

	<!-- Google Map -->
	<script>
		$('.maps').click(function () {
		$('.maps iframe').css("pointer-events", "auto");
	});

	$( ".maps" ).mouseleave(function() {
	  $('.maps iframe').css("pointer-events", "none");
	});
	</script>
</body>
</html>
