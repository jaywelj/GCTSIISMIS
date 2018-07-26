	
<?php
include("connectionString.php");
if(isset($_POST['surveyFormId2']))
{
	$surveyId = $_POST['surveyFormId2'];
	$surveyStatus = $_POST['statusSelected'];
	$query = "SELECT * FROM tbl_surveyform WHERE surveyFormStatus = 'Active'";
	$queryArray = mysqli_query($connect,$query);
	$countActive = mysqli_num_rows($queryArray);
}

?>
<?php
if($countActive > 0 && $surveyStatus == "Active")
{
	echo'
<div>
	<hr>
	<h5><strong>You cannot set more than one Active status! </strong></h5>
	<hr>
	<button class="btn btn-primary .btnCancel" data-dismiss="modal" onclick="location.reload();"> Confirm </button>
</div>';
}
else
{
echo'
<div>
	<hr>
	<h4>Are you sure you want to change the form\'s status to <strong><?php echo $surveyStatus; ?></strong> ?</h4>
	<h5><strong>PS. You will not be able to update changes to the form once it\'s set to active/deployed?</h5>
	<hr>
	<input type="text" value="'.$surveyId.'" name="idHidden" style="display:none;"/>
	<input type="text" value="'.$surveyStatus.'" name="statusHidden" style="display:none;"/>
	<input type="submit" class="btn btn-primary" value="Confirm" name="btnConfirmChange"/>
	<button class="btn btn-danger .btnCancel" data-dismiss="modal" onclick="location.reload();"> Cancel </button>
</div>';
}
?>
