<?php
if(isset($_POST['surveyFormId2']))
{
	$surveyId = $_POST['surveyFormId2'];
	$surveyStatus = $_POST['statusSelected'];
}

?>
<div>
	<hr>
	<h4>Are you sure you want to change the form's status to <strong><?php echo $surveyStatus; ?></strong> ?</h4>
	<hr>
	<input type="text" value="<?php echo $surveyId; ?>" name="idHidden" style="display:none;"/>
	<input type="text" value="<?php echo $surveyStatus; ?>" name="statusHidden" style="display:none;"/>
	<input type="submit" class="btn btn-primary" value="Confirm" name="btnConfirmChange"/>
	<button class="btn btn-danger .btnCancel" data-dismiss="modal" onclick="location.reload();"> Cancel </button>
</div>
