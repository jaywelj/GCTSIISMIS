<?php
session_start();
$varcharStudentAccountNumber = $_SESSION['sessionStudentAccountNumber'];
$varcharStudentAccountPassword = $_SESSION['sessionStudentAccountPassword'];
$_SESSION['sessionStudentAccountNumber'] = $varcharStudentAccountNumber;
$_SESSION['sessionStudentAccountPassword'] = $varcharStudentAccountPassword;
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" /> 
	<title>:: Guidance Counseling and Testing services ::</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">  
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta name="author" content="">

	<!-- Google font here -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
	<!-- Latest compiled and minified CSS -->

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel='stylesheet' type='text/css' href="assets/bootstrap/css/bootstrap.min.css">


	<!--  Font Awesome CSS -->
	<link rel='stylesheet' type='text/css' href="assets/custom/css/font-awesome.min.css">
	<link rel='stylesheet' type='text/css' href="assets/custom/css/animate.css">


	<!--menu style-->	
	<link rel="stylesheet" href="assets/menu/styles.css">

	<!--FancyBox CSS -->
	<link rel="stylesheet" href="assets/fancybox/css/jquery.fancybox-buttons.css">
	<link rel="stylesheet" href="assets/fancybox/css/jquery.fancybox-thumbs.css">
	<link rel="stylesheet" href="assets/fancybox/css/jquery.fancybox.css">

	<!-- Custom CSS -->
	<link rel='stylesheet' type='text/css' href="assets/custom/css/style.css">    


	<!--Portfolio js-->	
	<link rel="stylesheet" type="text/css" href="assets/portfolio/css/component.css" />



</head>
<body>   
	<!--header Wrapper start Here-->
	<header>
		<div class="container">
			<div class="row">
				<!--Navigation  Start Here-->
				<?php 
				$_SESSION['WebsiteState'] = "Home";
				?>
				<?php 
				require 'clientNavbar.php';
				?>
				<!--Navigation  End Here-->
				<div class="clearfix" style="height:100px;"></div>
				<div class="text-center os-animation"></div>	
			</div> 
		</div>
	</header>
	<!--header Wrapper End Here-->
	<!--main container start Here-->
	<main id="main_Container" class="main_container" style="margin-top: 50px;">
		<div class="container">
			<div class="row">
				<?php
				include("connectionString.php");
				$query ="SELECT * FROM tbl_surveyform WHERE surveyFormStatus != 'Inactive'";
				$quearyArray = mysqli_query($connect,$query);
				while($row = mysqli_fetch_array($quearyArray))
				{
					?>
					<div class=" card col-lg-12 text-white " style="background-color: #901a1a; margin-bottom: 40px; "  >
						<div class="card-header">
							<h5>Survey Id. <?php echo $row['surveyFormId']; ?></h5>
						</div>
						<div class="card-body" style="">
							<strong><h3 class="card-title" style="margin-top:0px;"><?php echo $row['surveyFormName']; ?></h3></strong>
							<h4 class="card-text"><?php echo $row['surveyFormDetails']; ?></h4>
						</div>
						<div class="card-footer">
							<small>Deployed: <?php echo $row['surveyFormDateDeployed']; ?></small>
							<a href="#" class="btn btn-default pull-right btn-sm">Answer This Survey</a>
						</div>
					</div>
					<?php
				}
				?>
			</div>
		</div>
	</main>
	<!--main container End Here-->
	


	<!--PRE LOADER HERE-->
	<div id="pre-loader">
		<div class="spinner">
			<div class="double-bounce1"></div>
			<div class="double-bounce2"></div>
		</div>
	</div> 


	<!-- Latest compiled and minified JavaScript -->
	<script src="assets/custom/js/jquery-1.11.1.min.js"></script>
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!--menu style-->
	<script src="assets/menu/script.js"></script>
	<script src="assets/portfolio/js/modernizr.custom.js"></script>
	<!-- Portfolio js -->
	<script src="assets/portfolio/js/masonry.pkgd.min.js"></script>
	<script src="assets/portfolio/js/imagesloaded.js"></script>
	<script src="assets/portfolio/js/classie.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="assets/custom/js/jquery-1.11.1.min.js"></script>
	<script src="assets/portfolio/js/modernizr.custom.js"></script>
	<!-- FancyBox -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="assets/fancybox/js/jquery.fancybox.js"></script>
	<script src="assets/fancybox/js/jquery.fancybox-buttons.js"></script>
	<script src="assets/fancybox/js/jquery.fancybox-thumbs.js"></script>
	<script src="assets/fancybox/js/jquery.easing-1.3.pack.js"></script>
	<script src="assets/fancybox/js/jquery.mousewheel-3.0.6.pack.js"></script>
	<!-- Custom js -->
	<script src="assets/custom/js/custom.js"></script>
	<!-- Way Point -->
	<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.4/waypoints.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			$(".fancybox").fancybox();
		});
	</script>



</body>
</html>