<?php
if(isset($_POST['surveyFormId']))
{
	$surveyFormId = $_POST['surveyFormId'];
	include("connectionString.php");
	$query = "SELECT * FROM tbl_surveyform WHERE surveyFormId = '$surveyFormId'";
	$quearyArray = mysqli_query($connect, $query);
	while ($row = mysqli_fetch_array($quearyArray)) {
		$xmldata = mysqli_real_escape_string($connect, $row['surveyFormXML']);
	}
	$xmldata = "assets/xml/" . $xmldata;
}
?>
<script>
	jQuery(function($) {

		var fbRender = document.getElementById('formRendered');
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				var xmldata = this.responseText;

				var formRenderOpts = {
					formData: xmldata,
					dataType: 'xml'
				};
				$(fbRender).formRender(formRenderOpts); 
			}
		};
        //var xmldata = '<form-template><fields><field class="form-control" label="Full Name" name="text-input-1459436848806" type="text" subtype="text"></field><field class="form-control" label="Select" name="select-1459436851691" type="select"><option value="option-1">Option 1</option><option value="option-2">Option 2</option></field><field class="form-control" label="Your Message" name="textarea-1459436854560" type="textarea"></field></fields></form-template>';
        xhttp.open("POST","<?php echo $xmldata; ?>", true);
        xhttp.send();
    });
</script>


