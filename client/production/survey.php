<!DOCTYPE html>
<html>
<head>

	<title>GCTS Survey</title>
	<!-- Bootstrap -->
	<link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- Custom CSS-->
	<link href="../css/survey.css" rel="stylesheet">


	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<!--===============================================================================================-->

</head>
<body class="surveybg">
	<div class="container">
		<div class="container-shadow">
			<div class="jumbotron ">
				<div id="formRendered" class="formRendered">	
				</div>
			</div>
		</div>
	</div>

</body>
<!-- jQuery -->
<script src="../vendors/jquery/dist/jquery.min.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/form-render.min.js"></script>
<script>
	jQuery(function($) {
		var fbRender = document.getElementById('formRendered');
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				var xmldata = this.responseText;
				alert(xmldata);

				var formRenderOpts = {
					formData: xmldata,
					dataType: 'xml'
				};
				$(fbRender).formRender(formRenderOpts); 
			}
		};
        //var xmldata = '<form-template><fields><field class="form-control" label="Full Name" name="text-input-1459436848806" type="text" subtype="text"></field><field class="form-control" label="Select" name="select-1459436851691" type="select"><option value="option-1">Option 1</option><option value="option-2">Option 2</option></field><field class="form-control" label="Your Message" name="textarea-1459436854560" type="textarea"></field></fields></form-template>';
        xhttp.open("POST","xml/surveyFormXML1.xml", true);
        xhttp.send();
    });
</script>

</html>