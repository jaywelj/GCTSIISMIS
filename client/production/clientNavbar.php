<?php 
include ("connectionString.php");
$sessionStudentNumber = $_SESSION['sessionStudentAccountNumber'];
$sessionStudentPassword = $_SESSION['sessionStudentAccountPassword'];
$WebsiteState = $_SESSION['WebsiteState'];
?>
<nav class="menu_wrapper os-animation">
	<image class="navbar-left" src="PUPLogo88x88.png" style="padding-top:5px"></image>
	<div class="navbar-header" style="font-family:'Cinzel'; font-weight:bold; padding:5px; color:#b22222;">
		<h4 style="margin-bottom:0px;"><a href="#" style="font-weight:bold; color:#880000;">POLYTECHNIC UNIVERSITY OF THE PHILIPPINES</a></h4>
		<p style="margin-bottom: 0;">THE COUNTRY'S 1ST POLYTECHNICU</p>
		<h4 style="margin-top: 0; font-weight: bold;">GUIDANCE COUNCIL AND TESTING SERVICES</h4>
	</div>
	<div id="nav_wrapper">
		<ul style="margin-top: 13px;">
			<li class="page-scroll"><a href="clientHome.php"><span> Home</span></a>
			</li>
			<li class="page-scroll"><a class="profile" href="clientProfile.php"><span>Profile </span></a></li>
			<li class="page-scroll"><a href="IIR.php?id='.$varcharStudentAccountNumber.'"><span>Individual Inventory Report</span></a></li>
			<li class="page-scroll"><a href="clientSurvey.php"><span>Survey</span></a>
			</li>
			<li class="page-scroll"><a class="logout" href="clientLogout.php"><span>Log Out </span></a></li>
		</ul>
	</div>
	<div class="clearfix"></div>
</nav> 