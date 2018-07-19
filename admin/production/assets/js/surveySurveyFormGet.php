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
	echo '
        <div class="x_content">
            <form class="render-wrap">

            </form>
            
            <div id="xmldatadiv"></div>

        </div>
	';
	echo '
		<script>
			document.getElementById(" setRender ");
		</script>
	';
}
?>