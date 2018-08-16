<?php
include("session.php");
$varcharStudentAccountNumber = $_SESSION['sessionStudentAccountNumber'];
$varcharStudentAccountPassword = $_SESSION['sessionStudentAccountPassword'];
$_SESSION['sessionStudentAccountNumber'] = $varcharStudentAccountNumber;
$_SESSION['sessionStudentAccountPassword'] = $varcharStudentAccountPassword;
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="img/GCTS LOGO1.png">
	<title>Survey | OCPS</title>
	<meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
	<meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/card.css">
  <!-- =======================================================
	Theme Name: Mentor
	Theme URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
	Author: BootstrapMade.com
	Author URL: https://bootstrapmade.com
	======================================================= -->
</head>

<body >

	<!--Navigation bar-->
	<?php
	include("navbar.php");
	?>
	<!--/ Navigation bar-->
	<div class="container">
		<div class="row">
			<?php
			include("connectionString.php");
			$query ="SELECT * FROM tbl_surveyform WHERE surveyFormStatus != 'Inactive'";
			$quearyArray = mysqli_query($connect,$query);
			while($row = mysqli_fetch_array($quearyArray))
			{
				?>
				<div class="card col-lg-12" style="background-color: #901a1a; margin-bottom: 40px; "  >
					<div class="card-header">
						<small>Survey Id. #<?php echo $row['surveyFormId']; ?></small>
					</div>
					<div class="card-body" style="">
						<strong><?php echo $row['surveyFormName']; ?></strong>
						<hr>
						<p class="card-text"><?php echo $row['surveyFormDetails']; ?></p>
					</div>
					<div class="card-footer">
						<small>Deployed: <?php echo $row['surveyFormDateDeployed']; ?></small>
						<a href="surveyForm.php?id=<?php echo $row['surveyFormId'];?>" name="<?php echo $row['surveyFormId']; ?>" class="btn btn-default btn-sm pull-right">Answer This Survey</a>
						<div class="clearfix"></div>
					</div>
				</div>
				<?php
			}
			?>
		</div>
	</div>


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
