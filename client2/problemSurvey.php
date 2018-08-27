<?php
include("errorReport.php");
include("session.php");
include("iircheck.php"); 
include("connectionString.php");
$studentNumber = $_SESSION['sessionStudentAccountNumber'];
$query="SELECT DISTINCT studentNumber FROM tbl_answerproblem WHERE studentNumber = '$studentNumber'";
$queryArray = mysqli_query($connect,$query);
if(mysqli_num_rows($queryArray)>0)
{
	echo"<script type='text/javascript'>alert('You have already answered for thhe survey! :)');</script>";
	echo "<script type='text/javascript'>location.href = 'index2.php';</script>";
}
if(isset($_POST['btnFinish']))
{
	if(isset($_POST['checkboxProblem']))
	{
		$studentNumber = $_SESSION['sessionStudentAccountNumber'];
		$checkedProblems = $_POST['checkboxProblem'];
		$selectedRating = $_POST['selectProblem'];
		foreach($checkedProblems as $i => $value){
			$query = "INSERT INTO `tbl_answerproblem` (`answerID`, `problemID`, `answerProblem`, `studentNumber`, `answerDate`) VALUES (NULL, '$value', '$selectedRating[$value]', '$studentNumber', CURRENT_TIMESTAMP)";
			if(mysqli_query($connect,$query))
			{
				//echo "<script type='text/javascript'>alert('success!');</script>";
			}
			else
			{
				//echo "<script type='text/javascript'>alert('error');</script>";
			}
		}
		echo"<script type='text/javascript'>alert('Thankyou for participating the survey!');</script>";
		echo "<script type='text/javascript'>location.href = 'index2.php';</script>";
	}
	else
	{
		echo "<script type='text/javascript'>alert('Please select at least one problem');</script>";
	}
}
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

	<!-- Custom CSS-->
	<link href="css/surveyForm.css" rel="stylesheet">
	<style>
	td{
		padding: 10px;
	}
	/* The container */
	.checkContainer {
		display: block;
		position: relative;
		padding-left: 35px;
		margin-bottom: 25px;
		cursor: pointer;
		font-size: 22px;
		-webkit-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;

	}
	/* Hide the browser's default checkbox */
	.checkContainer input {
		position: absolute;
		opacity: 0;
		cursor: pointer;
	}

	/* Create a custom checkbox */
	.checkmark {
		position: absolute;
		top: 0;
		left: 0;
		height: 25px;
		width: 25px;
		background-color: #fff;
		border:solid 1px #a7aabe;
	}

	/* On mouse-over, add a grey background color */
	.checkContainer:hover input ~ .checkmark {
		background-color: #ccc;
	}

	/* When the checkbox is checked, add a blue background */
	.checkContainer input:checked ~ .checkmark {
		background-color: #2196F3;
	}

	/* Create the checkmark/indicator (hidden when not checked) */
	.checkmark:after {
		content: "";
		position: absolute;
		display: none;
	}

	/* Show the checkmark when checked */
	.checkContainer input:checked ~ .checkmark:after {
		display: block;
	}

	/* Style the checkmark/indicator */
	.checkContainer .checkmark:after {
		left: 9px;
		top: 5px;
		width: 5px;
		height: 10px;
		border: solid white;
		border-width: 0 3px 3px 0;
		-webkit-transform: rotate(45deg);
		-ms-transform: rotate(45deg);
		transform: rotate(45deg);
	}
</style>
</head>

<body class="surveybg">

	<!--Navigation bar-->
	<?php
	include("navbar.php");
	?>
	<!--/ Navigation bar-->
	<div class="container" style="width: 950px;">
		<div class="container-shadow">
			<div class="jumbotron jumbotron-survey">
				<div class="formRendered">
					<center><h1>Survey of Problem</h1></center>
					<hr style="border-top: solid 1px #b9b5ce">
					<div class="container">
						<h4>Direction: Read each item very carefully and check the particular problems which are troubling you then go over the problems you have checked and rank them according to which are more concern to you.</h4>
					</div>
					<hr>
					
					<form method="post" onsubmit="validate(this.event)">
						<div class="form-group ">
							<div class="row">
								<center>
									<table >
										<thead>
											<tr>
												<th style="text-align: center;">
													Check
												</th>
												<th style="text-align: center;">
													Rating
												</th>
												<th style="text-align: center;">
													List of Problems
												</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$i = 0;
											$resultTest = mysqli_query($connect, "SELECT * FROM `tbl_surveyofproblems`");
											$noOfProblem = mysqli_num_rows($resultTest);
											echo "<script>var formCount = '$noOfProblem'</script>";
											while($resu = mysqli_fetch_array($resultTest)){
												echo '
												<tr>
												<td>
												<label class="checkContainer">
												<input type="checkbox" name="checkboxProblem[]" id="'.$i.'" onclick="check(this)" value="'.$resu['problemID'].'">
												<span class="checkmark"></span>
												</label>
												</td>
												<td>
												<select name="selectProblem['.$resu['problemID'].']" id="s'.$i.'" disabled="true" style="background:#ccc" required >
												<option value="0">1 - Never</option>
												<option value="1">2 - Seldom</option>
												<option value="2">3 - Sometimes</option>
												<option value="3">4 - Often</option>
												<option value="4">5 - Always</option>
												</select>
												</td>
												<td>
												<p style="margin:0px; font-size:16px;" name="problem[]">'.$resu['problemName'].'</p>
												</td>
												</tr>';
												$i ++ ;
											}
											echo "<script>var i = ".$i."</script>";
											?>
										</tbord>
									</table>
									<hr style="border-top: solid 1px #b9b5ce">
									<input type="submit" name="btnFinish" id="btnFinish" class="btn btn-primary" >
									<input type="reset" name="btnClear" id=" btnClear" onclick="disable();"  class="btn btn-warning" value="Clear">
								</center>
							</div>
						</div>
					</form>
				</div>
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
	<script type="text/javascript">
		function check(form){
			var selectId = 's'+form.id;
			if(form.checked==true)
			{
				document.getElementById(selectId).disabled=false;
				document.getElementById(selectId).style.background="#fff";
				
				$("#"+selectId).val(1);
			}
			else
			{
				document.getElementById(selectId).disabled=true;
				document.getElementById(selectId).style.background="#ccc";
				$("#"+selectId).val(0);
			}
		}
		function validate(form)
		{
			var checkboxs=document.getElementsByName("checkboxProblem");
			var okay=false;
			for(var i=0,l=checkboxs.length;i<l;i++)
			{
				if(checkboxs[i].checked)
				{
					okay=true;
					break;
				}
			}
		}
		function disable(){

			for(ctr=0;ctr<i;ctr++)
			{
				document.getElementById('s'+ctr).options[0].disabled = false;
				document.getElementById('s'+ctr).selectedIndex = '0'
				document.getElementById('s'+ctr).disabled=true;
				document.getElementById('s'+ctr).style.background="#ccc";
			}
		}
	</script>

</body>

</html>
