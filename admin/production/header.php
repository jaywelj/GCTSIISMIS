<?php
if(!session_id())
session_start();
if(empty($_SESSION['sessionAdminEmail']))
{
	header("Location: logout.php");
}

?>

<div class="jumbotron" style="background-color:#ffffff; height:100px; margin-bottom:5px; padding:7px;" >
	<image class="navbar-left" src="images/PUPLogo88x88.png"></image>
	<div style="font-family:'Cinzel'; font-weight:bold; margin-left:100px; color:#b22222;">
		<h4 style="margin-bottom:0px;"><a href="#" style="font-weight:bold; color:#880000;">POLYTECHNIC UNIVERSITY OF THE PHILIPPINES</a></h4>
		<p style="margin-bottom: 0; font-size: 14px;">THE COUNTRY'S 1ST POLYTECHNICU</p>
		<h4 style="margin-top: 0; font-weight: bold;">GUIDANCE COUNSELING AND TESTING SERVICES</h4>
	</div>
</div>