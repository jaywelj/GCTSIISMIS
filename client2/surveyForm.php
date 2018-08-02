<?php
include("session.php");
$surveyFormId=$_GET['id'];
echo "<script>var surveyFormId = '$surveyFormId';</script>";
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
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/imagehover.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<!-- Custom CSS-->
	<link href="css/surveyForm.css" rel="stylesheet">
  <!-- =======================================================
	Theme Name: Mentor
	Theme URL: https://bootstrapmade.com/mentor-free-education-bootstrap-theme/
	Author: BootstrapMade.com
	Author URL: https://bootstrapmade.com
	======================================================= -->
</head>

<body class="surveybg">

	<!--Navigation bar-->
	<?php
	include("navbar.php");
	?>
	<!--/ Navigation bar-->
	<div class="container">
		<div class="container-shadow">
			<div class="jumbotron jumbotron-survey">
				<div id="formRendered" class="formRendered">	
				</div>
				<button class="btn btn-success" id="surveyUserData">User Data</button>
			</div>
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
	<script src="js/jquery-ui.min.js"></script>
	<script src="js/form-render.min.js"></script>
	<script src="js/form-builder.min.js"></script>
	<script>
		jQuery(function($) {
			var surveyFormXML = 'surveyFormXML'+surveyFormId+'.xml';
			var fbRender = document.getElementById('formRendered');
			var xhttp = new XMLHttpRequest();
			xhttp.onreadystatechange = function() {
				if (this.readyState == 4 && this.status == 200) {
					var xmldata = this.responseText;

					var formRenderOpts = {
						formData: xmldata,
						dataType: 'xml'
					};

					var frInstance = $(fbRender).formRender(formRenderOpts);
					document.getElementById('surveyUserData').addEventListener('click', function() {
						alert('check console');
						console.log(frInstance.userData);
					}); 

					
				}
			};
	        //var xmldata = '<form-template><fields><field class="form-control" label="Full Name" name="text-input-1459436848806" type="text" subtype="text"></field><field class="form-control" label="Select" name="select-1459436851691" type="select"><option value="option-1">Option 1</option><option value="option-2">Option 2</option></field><field class="form-control" label="Your Message" name="textarea-1459436854560" type="textarea"></field></fields></form-template>';
	        xhttp.open("POST","../admin/production/assets/xml/"+surveyFormXML, true);
	        xhttp.send();

	    });
	</script>

</body>

</html>
