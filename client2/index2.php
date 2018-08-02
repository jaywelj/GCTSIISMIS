<?php
include("session.php");
include("connectionString.php");
$id= $_SESSION['sessionStudentAccountNumber'];
$query = "SELECT * FROM tbl_personalinfo WHERE studentNumber = '$id'";
$queryArray = mysqli_query($connect,$query);
while ($res = mysqli_fetch_array($queryArray)) {
	$name = $res['firstName'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mentor Education Bootstrap Theme</title>
	<meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
	<meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

	
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

	<!--Navigation bar-->
	<?php
	include("navbar.php");
	?>
	<!--/ Navigation bar-->
	
	
	<!-- Carousel -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item active">
				<img src="img/bg1.jpg" alt="" width="100%" style="height:650px; filter: brightness(40%);">
				<div class="carousel-caption">
					<div class="row">
						<div class="banner-text text-center">
							<div class="text-border" style="border-color: white">
								<h2 class="text-dec">Welcome <?php echo $name ?>!</h2>
							</div>
							<div class="intro-para text-center quote">
								<p class="big-text">Our Vision</p>
								<p class="small-text">This dynamic Office with a staff of professionally trained and competent counselors boasts <br> of a program designed to maximize the students’ potentials to become self-directive and productive citizens of society.</p>
								<a href="#footer" class="btn get-quote">GET A QUOTE</a>
							</div><br><br><br><br><br>
							<a href="#feature" class="mouse-hover">
								<div class="mouse"></div>
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="item">
				<img src="img/bg2.jpg" alt="" width="100%" style="height:650px; filter: brightness(40%);">
				<div class="carousel-caption">
					<div class="row">
						<div class="banner-text text-center">
							<div class="text-border" style="border-color: white">
								<h2 class="text-dec">IIR</h2>
							</div>
							<div class="intro-para text-center quote">
								<p class="big-text">Fill-up your individual inventory record now!</p>
								<!-- <p class="small-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium enim repellat sapiente quos architecto<br>Laudantium enim repellat sapiente quos architecto</p> -->
								<a href="#footer" class="btn get-quote">GET A QUOTE</a>
							</div><br><br><br><br><br>
							<a href="#feature" class="mouse-hover">
								<div class="mouse"></div>
							</a>
						</div>
					</div>
				</div>
			</div>

			<div class="item">
				<img src="img/bg3.jpg" alt="" width="100%" style="height:650px; filter: brightness(40%);">
				<div class="carousel-caption">
					<div class="row">
						<div class="banner-text text-center">
							<div class="text-border" style="border-color: white"> 
								<h2 class="text-dec">Need Help and Guidance?</h2>
							</div>
							<div class="intro-para text-center quote">
								<p class="big-text">Learning Today . . . Leading Tomorrow.</p>
								<p class="small-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium enim repellat sapiente quos architecto<br>Laudantium enim repellat sapiente quos architecto</p>
								<a href="#footer" class="btn get-quote">GET A QUOTE</a>
							</div><br><br><br><br><br>
							<a href="#feature" class="mouse-hover">
								<div class="mouse"></div>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!-- / Carousel -->
	<!--Feature-->
	<section id="feature" class="section-padding">
		<div class="container">
			<div class="row">
				<div class="header-section text-center">
					<h2>Our Services</h2>
					<p>Here are some of the service we provide</p>
					<hr class="bottom-line">
				</div>
				<div class="feature-info">
					<div class="fea">
						<div class="col-md-4">
							<div class="heading pull-right">
								<h4>Counselling</h4>
								<p>This is the heart of Guidance. It aims to assist the student to make a realistic appraisal of his interest, abilities and aptitudes as gathered from preliminary interviews and to arrive at an educational adjustment or solution to his problems.</p>
							</div>
							<div class="fea-img pull-left">
								<i class="fa fa-comment"> </i>
							</div>
						</div>
					</div>
					<div class="fea">
						<div class="col-md-4">
							<div class="heading pull-right">
								<h4>Individual Inventory</h4>
								<p>Orientation and information are given to help the students get acquainted with their new school environment, the school staff, the demands of college life, and the nature and requirements of the course. </p>
							</div>
							<div class="fea-img pull-left">
								<i class="fa fa-list"></i>
							</div>
						</div>
					</div>
					<div class="fea">
						<div class="col-md-4">
							<div class="heading pull-right">
								<h4>Research and Evaluation Service</h4>
								<p>This part of the program helps the unit in identifying the services or activities that require attention to be strengthened or to be offered. Likewise, it facilitates evaluation of the unit progress and services.</p>
							</div>
							<div class="fea-img pull-left">
								<i class="fa fa-search"></i>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</section>
	<!--/ feature-->
	<!--Organisations-->
	<section id="organisations" class="section-padding">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<div class="orga-stru">
							<h3>65%</h3>
							<p>Say NO!!</p>
							<i class="fa fa-male"></i>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<div class="orga-stru">
							<h3>20%</h3>
							<p>Says Yes!!</p>
							<i class="fa fa-male"></i>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
						<div class="orga-stru">
							<h3>15%</h3>
							<p>Can't Say!!</p>
							<i class="fa fa-male"></i>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="detail-info">
						<hgroup>
							<h3 class="det-txt"> Is inclusive quality education affordable?</h3>
							<h4 class="sm-txt">(Revised and Updated for 2016)</h4>
						</hgroup>
						<p class="det-p">Donec et lectus bibendum dolor dictum auctor in ac erat. Vestibulum egestas sollicitudin metus non urna in eros tincidunt convallis id id nisi in interdum.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/ Organisations-->
	<!--Cta-->
	<!-- <section id="cta-2">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<h2 class="text-center">Subscribe Now</h2>
					<p class="cta-2-txt">Sign up for our free weekly software design courses, we’ll send them right to your inbox.</p>
					<div class="cta-2-form text-center">
						<form action="#" method="post" id="workshop-newsletter-form">
							<input name="" placeholder="Enter Your Email Address" type="email">
							<input class="cta-2-form-submit-btn" value="Subscribe" type="submit">
						</form>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!--/ Cta-->
	<!--work-shop-->
	<!-- <section id="work-shop" class="section-padding">
		<div class="container">
			<div class="row">
				<div class="header-section text-center">
					<h2>Upcoming Workshop</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
					<hr class="bottom-line">
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="service-box text-center">
						<div class="icon-box">
							<i class="fa fa-html5 color-green"></i>
						</div>
						<div class="icon-text">
							<h4 class="ser-text">Mentor HTML5 Workshop</h4>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="service-box text-center">
						<div class="icon-box">
							<i class="fa fa-css3 color-green"></i>
						</div>
						<div class="icon-text">
							<h4 class="ser-text">Mentor CSS3 Workshop</h4>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="service-box text-center">
						<div class="icon-box">
							<i class="fa fa-joomla color-green"></i>
						</div>
						<div class="icon-text">
							<h4 class="ser-text">Mentor Joomla Workshop</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section> -->
	<!--/ work-shop-->
	<!--Faculity member-->
	<section id="faculity-member" class="section-padding">
		<div class="container">
			<div class="row">
				<div class="header-section text-center">
					<h2>Meet Our Faculty Member</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
					<hr class="bottom-line">
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4">
					<div class="pm-staff-profile-container">
						<div class="pm-staff-profile-image-wrapper text-center">
							<div class="pm-staff-profile-image">
								<img src="img/mentor.jpg" alt="" class="img-thumbnail img-circle" />
							</div>
						</div>
						<div class="pm-staff-profile-details text-center">
							<p class="pm-staff-profile-name">Bryan Johnson</p>
							<p class="pm-staff-profile-title">Lead Software Engineer</p>

							<p class="pm-staff-profile-bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et placerat dui. In posuere metus et elit placerat tristique. Maecenas eu est in sem ullamcorper tincidunt. </p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4">
					<div class="pm-staff-profile-container">
						<div class="pm-staff-profile-image-wrapper text-center">
							<div class="pm-staff-profile-image">
								<img src="img/mentor.jpg" alt="" class="img-thumbnail img-circle" />
							</div>
						</div>
						<div class="pm-staff-profile-details text-center">
							<p class="pm-staff-profile-name">Bryan Johnson</p>
							<p class="pm-staff-profile-title">Lead Software Engineer</p>

							<p class="pm-staff-profile-bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et placerat dui. In posuere metus et elit placerat tristique. Maecenas eu est in sem ullamcorper tincidunt. </p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-4">
					<div class="pm-staff-profile-container">
						<div class="pm-staff-profile-image-wrapper text-center">
							<div class="pm-staff-profile-image">
								<img src="img/mentor.jpg" alt="" class="img-thumbnail img-circle" />
							</div>
						</div>
						<div class="pm-staff-profile-details text-center">
							<p class="pm-staff-profile-name">Bryan Johnson</p>
							<p class="pm-staff-profile-title">Lead Software Engineer</p>

							<p class="pm-staff-profile-bio">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec et placerat dui. In posuere metus et elit placerat tristique. Maecenas eu est in sem ullamcorper tincidunt. </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/ Faculity member-->
	<!--Testimonial-->
	<section id="testimonial" class="section-padding">
		<div class="container">
			<div class="row">
				<div class="header-section text-center">
					<h2 class="white">See What Our Customer Are Saying?</h2>
					<p class="white">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
					<hr class="bottom-line bg-white">
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="text-comment">
						<p class="text-par">"Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, nec sagittis sem"</p>
						<p class="text-name">Abraham Doe - Creative Dırector</p>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="text-comment">
						<p class="text-par">"Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, nec sagittis sem"</p>
						<p class="text-name">Abraham Doe - Creative Dırector</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--/ Testimonial-->
	<!--Courses-->
	<section id="courses" class="section-padding">
		<div class="container">
			<div class="row">
				<div class="header-section text-center">
					<h2>Courses</h2>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem nesciunt vitae,<br> maiores, magni dolorum aliquam.</p>
					<hr class="bottom-line">
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-6 padleft-right">
					<figure class="imghvr-fold-up">
						<img src="img/course01.jpg" class="img-responsive">
						<figcaption>
							<h3>Course Name</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
						</figcaption>
						<a href="#"></a>
					</figure>
				</div>
				<div class="col-md-4 col-sm-6 padleft-right">
					<figure class="imghvr-fold-up">
						<img src="img/course02.jpg" class="img-responsive">
						<figcaption>
							<h3>Course Name</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
						</figcaption>
						<a href="#"></a>
					</figure>
				</div>
				<div class="col-md-4 col-sm-6 padleft-right">
					<figure class="imghvr-fold-up">
						<img src="img/course03.jpg" class="img-responsive">
						<figcaption>
							<h3>Course Name</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
						</figcaption>
						<a href="#"></a>
					</figure>
				</div>
				<div class="col-md-4 col-sm-6 padleft-right">
					<figure class="imghvr-fold-up">
						<img src="img/course04.jpg" class="img-responsive">
						<figcaption>
							<h3>Course Name</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
						</figcaption>
						<a href="#"></a>
					</figure>
				</div>
				<div class="col-md-4 col-sm-6 padleft-right">
					<figure class="imghvr-fold-up">
						<img src="img/course05.jpg" class="img-responsive">
						<figcaption>
							<h3>Course Name</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
						</figcaption>
						<a href="#"></a>
					</figure>
				</div>
				<div class="col-md-4 col-sm-6 padleft-right">
					<figure class="imghvr-fold-up">
						<img src="img/course06.jpg" class="img-responsive">
						<figcaption>
							<h3>Course Name</h3>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam atque, nostrum veniam consequatur libero fugiat, similique quis.</p>
						</figcaption>
						<a href="#"></a>
					</figure>
				</div>
			</div>
		</div>
	</section>
	<!--/ Courses-->
	<!--Contact-->
	<section id="contact" class="section-padding">
		<div class="container">
			<div class="row">
				<div class="header-section text-center">
					<h2>Message Us</h2>
					<p>If you have any concerns, message us! It could be a really big help for someone who needs help :) <br> </p>
					<hr class="bottom-line">
				</div>
				<div id="sendmessage">Your message has been sent. Thank you!</div>
				<div id="errormessage"></div>
				<form action="" method="post" role="form" class="contactForm">
					<div class="col-md-6 col-sm-6 col-xs-12 left">
						<div class="form-group">
							<input type="text" name="name" class="form-control form" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
							<div class="validation"></div>
						</div>
						<div class="form-group">
							<input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
							<div class="validation"></div>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
							<div class="validation"></div>
						</div>
					</div>

					<div class="col-md-6 col-sm-6 col-xs-12 right">
						<div class="form-group">
							<textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
							<div class="validation"></div>
						</div>
					</div>

					<div class="col-xs-12">
						<!-- Button -->
						<button type="submit" id="submit" name="submit" class="form contact-form-button light-form-button oswald light">SEND EMAIL</button>
					</div>
				</form>

			</div>
		</div>
	</section>
	<!--/ Contact-->
	
	<!--Footer-->
	<?php
	include("footer.php");
	?>
	<!--/ Footer-->

	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="contactform/contactform.js"></script>

</body>

</html>

