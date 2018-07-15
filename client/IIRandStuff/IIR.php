<!doctype html>
<html lang="en">
<head>
	
	<title>Individual Inventory Record</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
	<style>
	h3 {color:white;}
	p {color:blue;}
	</style>
<!--Bootstrap for form-->

	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="assets/img/favicon.png" />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/material-bootstrap-wizard.css" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="assets/css/demo.css" rel="stylesheet" />
</head>

<body>
	<div class="image-container set-full-height" style="background-image: url('assets/img/wizard-city.jpg')">
	    <!--   Creative Tim Branding   -->
	    <a href="http://creative-tim.com">
	         <div class="logo-container">
	            <div class="logo">
	                <img src="assets/img/pup_logo.png">
	            </div>
	            <div class="brand">
	                Polytechnic University Of The Philippines
	            </div>
	        </div>
	    </a>

		<!--  Made With Material Kit  -->
		<a href="http://demos.creative-tim.com/material-kit/index.html?ref=material-bootstrap-wizard" class="made-with-mk">
			<div class="brand">MK</div>
			<div class="made-with">Made with <strong>Material Kit</strong></div>
		</a>

	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">
		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="red" id="wizard">
			                <form action="" method="">
			                <!--        You can switch " data-color="rose" "  with one of the next bright colors: "blue", "green", "orange", "purple"        -->

		                    	<div class="wizard-header">
		                        	<h3 class="wizard-title">
		                        		Guidance Counseling And Testing Services
		                        	</h3>
									<h5> Individual Inventory Record Form </h5>
		                    	</div>
								<div class="wizard-navigation">
									<ul>
			                            <li><a href="#personalinformation" data-toggle="tab">I. Personal Information</a></li>
			                            <li><a href="#educationalbackground" data-toggle="tab">II. Educational Background</a></li>
			                            <li><a href="#homeandfamilybackground" data-toggle="tab">III. Home And Family Background</a></li>
			                            <li><a href="#health" data-toggle="tab">IV. Health</a></li>
			                            <li><a href="#interestsandhobbies" data-toggle="tab">V. Interests And Hobbies</a></li>
			                            <li><a href="#testresult" data-toggle="tab">VI. Test Results</a></li>
			                        </ul>
								</div>

		                        <div class="tab-content">
		                            <div class="tab-pane" id="personalinformation">
		                            	<div class="row">
		                                	<div class="col-sm-12">
		                                    	<h4 class="info-text"> I. Personal Information </h4>
		                                	</div>
		                                	<!--Upper Left-->
		                                	<div class="col-sm-5 col-sm-offset-1">
		                                		<h4 class="info-text"> Name </h4>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Last Name</label>
		                                        	<input type="text" class="form-control" id="lastname">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">First Name</label>
		                                        	<input type="text" class="form-control" id="firstname">
		                                    	</div>
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Middle Name</label>
		                                        	<input type="text" class="form-control" id="middlename">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Height</label>
		                                        	<input type="text" class="form-control" id="height">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Weight</label>
		                                        	<input type="text" class="form-control" id="weight">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Complexion</label>
		                                        	<input type="text" class="form-control" id="complexion">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Course</label>
		                                        	<input type="text" class="form-control" id="complexion">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                            <label class="control-label">Year</label>
	                                            	<select name="year" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<option value="01">1</option>
            											<option value="02">2</option>
            											<option value="03">3</option>
            											<option value="04">4</option>
            											<option value="05">5</option>
	                                            	</select>
	                                        	</div>

	                                        	<div class="form-group label-floating">
		                                        	<label class="control-label">Section</label>
		                                        	<input type="text" class="form-control" id="section">
		                                    	</div>
		                                	</div>
		                                	<!--Upper Right-->
		                                	<div class="col-sm-5">
		                                    	<h4 class="info-text"> Gender </h4>

		                                    	<div class="form-group label-floating">
		                                    		<div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you are male">
		                                                <input type="radio" name="type" value="Male">
		                                                <div class="icon">
		                                                    <i class="material-icons">man</i>
		                                                </div>
		                                                <h6>Male</h6>
		                                            </div>

		                                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this option if you are female">
		                                                <input type="radio" name="type" value="Female">
		                                                <div class="icon">
		                                                    <i class="material-icons">female</i>
		                                                </div>
		                                                <h6>Female</h6>
		                                            </div>
		                                           <!-- <label class="control-label">Gender</label>
	                                            	<select name="gender" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<option value="male"> Male </option>
	                                                	<option value="female"> Female </option>
	                                            	</select> -->
	                                        	</div>

	                                        	<div class="form-group label-floating">
		                                        	<label class="control-label">Age</label>
		                                        	<input type="text" class="form-control" id="age">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Civil Status</label>
		                                        	<input type="text" class="form-control" id="civilstatus">
		                                    	</div>

		                                    	<h4 class="info-text"> Birthdate </h4>

		                                    	<div class="form-group label-floating">
		                                            <label class="control-label">Year</label>
	                                            	<select name="birthdate_ear" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<?php
                 										for ($i = 2018; $i >= 1900; $i--) {
               											echo'<option  class=  value="' . $i . '">' . $i . '</option>';
                										}
                    									?>
	                                            	</select>
	                                        	</div>

	                                        	<div class="form-group label-floating">
		                                            <label class="control-label">Day</label>
	                                            	<select name="birthdate_day" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<?php
                										for ($i = 1; $i <= 31; $i++) {
                										echo'<option class=" " value="' . $i . '">' . $i . '</option>';
                										}
                										?>
	                                            	</select>
	                                        	</div>

	                                        	<div class="form-group label-floating">
		                                            <label class="control-label">Month</label>
	                                            	<select name="birthdate_month" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<option value="01">January</option>
            											<option value="02">February</option>
            											<option value="03">March</option>
            											<option value="04">April</option>
            											<option value="05">May</option>
            											<option value="06">June</option>
            											<option value="07">July</option>
            											<option value="08">August</option>
            											<option value="09">September</option>
            											<option value="10">October</option>
            											<option value="11">November</option>
            											<option value="12">December</option>
	                                            	</select>
	                                        	</div>
	                                        </div>
		                                	<!--Lower Left-->
		                                	<div class="col-sm-5 col-sm-offset-1">
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">City Address</label>
		                                        	<input type="text" class="form-control" id="cityaddress">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Provincial Address</label>
		                                        	<input type="text" class="form-control" id="provincialaddress">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Highschool General Average</label>
		                                        	<input type="text" class="form-control" id="hsgenave">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Religion</label>
		                                        	<input type="text" class="form-control" id="religion">
		                                    	</div>

		                                	</div>
		                                	<!--Lower Right-->
		                                	<div class="col-sm-5">
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Place Of Birth</label>
		                                        	<input type="text" class="form-control" id="placeofbirth">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Email Address</label>
		                                        	<input type="text" class="form-control" id="emailaddress">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Telephone Number</label>
		                                        	<input type="text" class="form-control" id="telnum">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Mobile Number</label>
		                                        	<input type="text" class="form-control" id="mobilenum">
		                                    	</div>
		                                	
		                                	</div>
		                                	</div>
		                            	</div>

		                            <div class="tab-pane" id="educationalbackground">
		                                <h4 class="info-text"> II. Educational Background </h4>
		                                <div class="row">
		                                    <!--Left-->
		                                    <div class="row">
		                                	<div class="col-sm-12">

		                                	</div>
		                                	<!--Upper Left-->
		                                	<div class="col-sm-5 col-sm-offset-1">

		                                		<h4 class="info-text"> Pre-elementary </h4>
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">School Graduated</label>
		                                        	<input type="text" class="form-control" id="pre-elemgrad">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">School Address</label>
		                                        	<input type="text" class="form-control" id="pre-elemaddress">
		                                    	</div>

	                                        	<div class="form-group label-floating">
		                                            <label class="control-label">Type</label>
	                                            	<select name="pre-elempub/priv" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<option value="public">Public</option>
            											<option value="public">Private</option>
	                                            	</select>
	                                        	</div>

	                                        	<div class="form-group label-floating">
		                                        	<label class="control-label">Number Of Attendance</label>
		                                        	<input type="text" class="form-control" id="pre-elemnumofattendance">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Honors Received/Special Awards</label>
		                                        	<input type="text" class="form-control" id="pre-elemhonors">
		                                    	</div>
		                                	</div>
		                                	<!--Upper Right-->
		                                	<div class="col-sm-5">
		                                    	<h4 class="info-text"> Elementary </h4>
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">School Graduated</label>
		                                        	<input type="text" class="form-control" id="elemgrad">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">School Address</label>
		                                        	<input type="text" class="form-control" id="elemaddress">
		                                    	</div>

	                                        	<div class="form-group label-floating">
		                                            <label class="control-label">Type</label>
	                                            	<select name="elempub/priv" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<option value="public">Public</option>
            											<option value="public">Private</option>
	                                            	</select>
	                                        	</div>

	                                        	<div class="form-group label-floating">
		                                        	<label class="control-label">Number Of Attendance</label>
		                                        	<input type="text" class="form-control" id="elemnumofattendance">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Honors Received/Special Awards</label>
		                                        	<input type="text" class="form-control" id="elemhonors">
		                                    	</div>
		                                	</div>
		                                	<!--Lower Left-->
		                                	<div class="col-sm-5 col-sm-offset-1">
		                                    	<h4 class="info-text"> Highschool </h4>
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">School Graduated</label>
		                                        	<input type="text" class="form-control" id="hsgrad">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">School Address</label>
		                                        	<input type="text" class="form-control" id="hsaddress">
		                                    	</div>

	                                        	<div class="form-group label-floating">
		                                            <label class="control-label">Type</label>
	                                            	<select name="hspub/priv" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<option value="public">Public</option>
            											<option value="public">Private</option>
	                                            	</select>
	                                        	</div>

	                                        	<div class="form-group label-floating">
		                                        	<label class="control-label">Number Of Attendance</label>
		                                        	<input type="text" class="form-control" id="hsnumofattendance">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Honors Received/Special Awards</label>
		                                        	<input type="text" class="form-control" id="hshonors">
		                                    	</div>

		                                    	<h4 class="info-text"> College </h4>
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">School Graduated</label>
		                                        	<div class="input-group">
		                                            	<input type="text" class="form-control" id="collegegrad">
		                                            	<span class="input-group-addon">If Any</span>
		                                        	</div>
		                                        <div class="form-group label-floating">
		                                        	<label class="control-label">School Address</label>
		                                        	<input type="text" class="form-control" id="collegeaddress">
		                                    	</div>

	                                        	<div class="form-group label-floating">
		                                            <label class="control-label">Type</label>
	                                            	<select name="collegepub/priv" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<option value="public">Public</option>
            											<option value="public">Private</option>
	                                            	</select>
	                                        	</div>

	                                        	<div class="form-group label-floating">
		                                        	<label class="control-label">Number Of Attendance</label>
		                                        	<input type="text" class="form-control" id="collegenumofattendance">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Honors Received/Special Awards</label>
		                                        	<input type="text" class="form-control" id="collegehonors">
		                                    	</div>

		                                    	</div>

		                                	</div>
		                                	<!--Lower Right-->
		                                	<div class="col-sm-5">
		                                    	<h4 class="info-text"> Vocational </h4>
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">School Graduated</label>
		                                        	<input type="text" class="form-control" id="vocationalgrad">
		                                    	</div>
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">School Address</label>
		                                        	<input type="text" class="form-control" id="vocationaladdress">
		                                    	</div>

	                                        	<div class="form-group label-floating">
		                                            <label class="control-label">Type</label>
	                                            	<select name="vocationalpub/priv" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<option value="public">Public</option>
            											<option value="public">Private</option>
	                                            	</select>
	                                        	</div>

	                                        	<div class="form-group label-floating">
		                                        	<label class="control-label">Number Of Attendance</label>
		                                        	<input type="text" class="form-control" id="vocationalnumofattendance">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Honors Received/Special Awards</label>
		                                        	<input type="text" class="form-control" id="vocationalhonors">
		                                    	</div>
		                                	
		                                	</div>
		                            	</div>
		                                    </div>
		                                </div>

		                            <div class="tab-pane" id="homeandfamilybackground">
		                            	<h4 class="info-text"> III. Home And Family Background </h4>
		                            	<div class="row">
		                                	<div class="col-sm-12">
		                                	</div>
		                                	<!--Upper Left-->
		                                	<div class="col-sm-5 col-sm-offset-1">
		                                		<h4 class="info-text"> Father </h4>
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Name</label>
		                                        	<input type="text" class="form-control" id="father_name">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Educational Attainment</label>
		                                        	<input type="text" class="form-control" id="father_educationalattainment">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Name Of Employer</label>
		                                        	<input type="text" class="form-control" id="father_employer">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Age</label>
		                                        	<input type="text" class="form-control" id="father_age">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                    		<h4 class="info-text"> State </h4>
		                                    		<div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this option if your father is still living">
		                                                <input type="radio" name="type" value="father_living">
		                                                <div class="icon">
		                                                    <i class="material-icons">living</i>
		                                                </div>
		                                                <h6>Living</h6>
		                                            </div>

		                                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this option if your father is deceased">
		                                                <input type="radio" name="type" value="father_deceased">
		                                                <div class="icon">
		                                                    <i class="material-icons">deceased</i>
		                                                </div>
		                                                <h6>Deceased</h6>
		                                            </div>
	                                        	</div>

	                                        	<div class="form-group label-floating">
		                                        	<label class="control-label">Occupation</label>
		                                        	<input type="text" class="form-control" id="father_occupation">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Address Of Employer</label>
		                                        	<input type="text" class="form-control" id="father_employeraddress">
		                                    	</div>
		                                	</div>
		                                	<!--Upper Right-->
		                                	<div class="col-sm-5">
		                                    	<h4 class="info-text"> Mother </h4>
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Name</label>
		                                        	<input type="text" class="form-control" id="mother_name">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Educational Attainment</label>
		                                        	<input type="text" class="form-control" id="mother_educationalattainment">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Name Of Employer</label>
		                                        	<input type="text" class="form-control" id="mother_employer">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Age</label>
		                                        	<input type="text" class="form-control" id="mother_age">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                    		<h4 class="info-text"> State </h4>
		                                    		<div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this option if your mother is still living">
		                                                <input type="radio" name="type" value="mother_living">
		                                                <div class="icon">
		                                                    <i class="material-icons">living</i>
		                                                </div>
		                                                <h6>Living</h6>
		                                            </div>

		                                            <div class="choice" data-toggle="wizard-radio" rel="tooltip" title="Select this option if your mother is deceased">
		                                                <input type="radio" name="type" value="mother_deceased">
		                                                <div class="icon">
		                                                    <i class="material-icons">deceased</i>
		                                                </div>
		                                                <h6>Deceased</h6>
		                                            </div>
	                                        	</div>

	                                        	<div class="form-group label-floating">
		                                        	<label class="control-label">Occupation</label>
		                                        	<input type="text" class="form-control" id="mother_occupation">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Address Of Employer</label>
		                                        	<input type="text" class="form-control" id="mother_employeraddress">
		                                    	</div>
		                                	</div>
		                                	<!--Lower Left-->
		                                	<div class="col-sm-5 col-sm-offset-1">
		                                    	<h4 class="info-text"> Guardian </h4>
		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Name</label>
		                                        	<input type="text" class="form-control" id="guardian_name">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Educational Attainment</label>
		                                        	<input type="text" class="form-control" id="guardian_educationalattainment">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Name Of Employer</label>
		                                        	<input type="text" class="form-control" id="guardian_employer">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Age</label>
		                                        	<input type="text" class="form-control" id="guardian_age">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Relation</label>
		                                        	<input type="text" class="form-control" id="guardian_relation">
		                                    	</div>

	                                        	<div class="form-group label-floating">
		                                        	<label class="control-label">Occupation</label>
		                                        	<input type="text" class="form-control" id="guardian_occupation">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Address Of Employer</label>
		                                        	<input type="text" class="form-control" id="guardian_employeraddress">
		                                    	</div>
		                                	</div>
		                                	<!--Lower Right-->
		                                	<div class="col-sm-5">

		                                        <div class="form-group label-floating">
		                                            <label class="control-label">Parent's Marital Relationship</label>
	                                            	<select name="vocationalpub/priv" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<option value="public">Married and staying together</option>
            											<option value="public">Not married but living together</option>
            											<option value="public">Single Parent</option>
            											<option value="public">Married but separated</option>
            											<option value="public">Others</option>
	                                            	</select>
	                                        	</div>

	                                        	<div class="form-group label-floating">
		                                        	<label class="control-label">Others</label>
		                                        	<div class="input-group">
		                                            	<input type="text" class="form-control" id="others">
		                                            	<span class="input-group-addon">If Others Is Selected</span>
		                                        	</div>
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Number Of Children In The Family Including Yourself</label>
		                                        	<input type="text" class="form-control" id="numofchildren">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Number Of Brother/s </label>
		                                        	<input type="text" class="form-control" id="numofbrothers">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Number Of Sister/s </label>
		                                        	<input type="text" class="form-control" id="numofsisters">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">Number Of siblings gainfully employed </label>
		                                        	<input type="text" class="form-control" id="numofsiblingsemployed">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                            <label class="control-label">Is He/She providing support to your</label>
	                                            	<select name="providingsupport" class="form-control">
	                                               	<option disabled="" selected=""></option>
	                                                <option value="public"> Family </option>
	                                                <option value="public"> Your Studies </option>
	                                                <option value="public"> His/Her own family </option>
	                                                <span class="input-group-addon">if there are</span>
	                                            </select>
	                                        	</div>

		                                    	<div class="form-group label-floating">
		                                            <label class="control-label">Ordinal Position</label>
	                                            	<select name="ordinalposition" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<option value="public">Only Child</option>
            											<option value="public">1st</option>
            											<option value="public">2nd</option>
            											<option value="public">3rd</option>
            											<option value="public">4th</option>
            											<option value="public">5th</option>
            											<option value="public">6th</option>
            											<option value="public">7th</option>
            											<option value="public">8th</option>
            											<option value="public">9th</option>
            											<option value="public">10th</option>
	                                            	</select>
	                                        	</div>

	                                        	<div class="form-group label-floating">
		                                        	<label class="control-label">Who finances your schooling?</label>
		                                        	<input type="text" class="form-control" id="financesofschooling">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        	<label class="control-label">How Much is your weekly allowance?</label>
		                                        	<input type="text" class="form-control" id="weeklyallowance">
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                            <label class="control-label">Parent's Total Monthly Income:</label>
	                                            	<select name="vocationalpub/priv" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<option value="public">Below 5,000</option>
            											<option value="public">5,001 - 10,000</option>
            											<option value="public">10,001 - 15,000</option>
            											<option value="public">15,001 - 20,000</option>
            											<option value="public">20,001 - 25,000</option>
            											<option value="public">25,001 - 30,000</option>
            											<option value="public">30,001 - 35,000</option>
            											<option value="public">35,001 - 40,000</option>
            											<option value="public">40,001 - 45,000</option>
            											<option value="public">45,001 - 50,000</option>
            											<option value="public">Above 50,001</option>
	                                            	</select>
	                                        	</div>

	                                        	<div class="form-group label-floating">
		                                            <label class="control-label">Do you have a quiet place to study?</label>
	                                            	<select name="vocationalpub/priv" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<option value="public">Yes</option>
            											<option value="public">No</option>
            										</select>
            									</div>

            									<div class="form-group label-floating">
		                                            <label class="control-label">Do you share your room with anyone?</label>
	                                            	<select name="vocationalpub/priv" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<option value="public">Yes</option>
            											<option value="public">No</option>
            										</select>
            									</div>

            									<div class="form-group label-floating">
		                                        	<label class="control-label">With whom</label>
		                                        	<input type="text" class="form-control" id="withwhom">
		                                        	<span class="input-group-addon">If Yes</span>
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                            <label class="control-label">Nature of residence while attending school</label>
	                                            	<select name="natureofresidence" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<option value="public">Family home</option>
	                                                	<option value="public">Relative's house</option>
            											<option value="public">Shares apartment with friends/relatives</option>
            											<option value="public">Bed spacer</option>
            											<option value="public">Rented apartment</option>
            											<option value="public">Dorm</option>
            										</select>
            									</div>

		                                    	</div>
		                                	</div>
		                            	</div>
		                            

		                            <div class="tab-pane" id="health">
		                            	<h4 class="info-text"> IV. Health </h4>
		                            	<div class="row">
		                                	<div class="col-sm-12">
		                                	</div>
		                                	<!--Upper Left-->
		                                	<div class="col-sm-5 col-sm-offset-1">
		                                	<h4 class="info-text">A. Physical </h4>
		                                	<h6 class="info-text">Do you have problems with?</h6>

		                                	<div class="form-group label-floating">
		                                	<label class="control-label">Vision</label>
	                                            	<select name="vision" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<option value="public">Yes</option>
	                                                	<option> No </option>
	                                                </select>
	                                         </div>
		                                	<div class="form-group label-floating">
		                                        <label class="control-label">Please Specify</label>
		                                        <input type="text" class="form-control" id="visionyes">
		                                        <span class="input-group-addon">If Yes</span>
		                                    </div>

		                                    <div class="form-group label-floating">
		                                	<label class="control-label">Hearing</label>
	                                            	<select name="hearing" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<option value="public">Yes</option>
	                                                	<option> No </option>
	                                                </select>
	                                         </div>
		                                	<div class="form-group label-floating">
		                                        <label class="control-label">Please Specify</label>
		                                        <input type="text" class="form-control" id="hearingyes">
		                                        <span class="input-group-addon">If Yes</span>
		                                    </div>

		                                    <div class="form-group label-floating">
		                                	<label class="control-label">Speech</label>
	                                            	<select name="vision" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<option value="public">Yes</option>
	                                                	<option> No </option>
	                                                </select>
	                                         </div>
		                                	<div class="form-group label-floating">
		                                        <label class="control-label">Please Specify</label>
		                                        <input type="text" class="form-control" id="speechyes">
		                                        <span class="input-group-addon">If Yes</span>
		                                    </div>

		                                    <div class="form-group label-floating">
		                                	<label class="control-label">General Health</label>
	                                            	<select name="generalhealth" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<option value="public">Yes</option>
	                                                	<option> No </option>
	                                                </select>
	                                         </div>
		                                	<div class="form-group label-floating">
		                                        <label class="control-label">Please Specify</label>
		                                        <input type="text" class="form-control" id="generalhealthyes">
		                                        <span class="input-group-addon">If Yes</span>
		                                    </div>

		                                	</div>
		                                	<!--Upper Right-->
		                                	<div class="col-sm-5">
		             							<h4 class="info-text">B. Psychological </h4>
		                                		<h6 class="info-text">Previous Consultations</h6>
		                                		<!--Psychiatrist-->
		                                		<div class="form-group label-floating">
		                                		<label class="control-label">Psychiatrist</label>
		                                        <select name="psychiatrist" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<option value="public">Yes</option>
	                                                	<option> No </option>
	                                            </select>
		                                    	</div>


		                                    	<h6 class="info-text"> When? </h6>

		                                    	<div class="form-group label-floating">
		                                            <label class="control-label">Year</label>
	                                            	<select name="psychiatrist_year" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<?php
                 										for ($i = 2018; $i >= 1900; $i--) {
               											echo'<option  class=  value="' . $i . '">' . $i . '</option>';
                										}
                    									?>
	                                            	</select>
	                                        	</div>

	                                        	<div class="form-group label-floating">
		                                            <label class="control-label">Day</label>
	                                            	<select name="psychiatrist_day" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<?php
                										for ($i = 1; $i <= 31; $i++) {
                										echo'<option class=" " value="' . $i . '">' . $i . '</option>';
                										}
                										?>
	                                            	</select>
	                                        	</div>

	                                        	<div class="form-group label-floating">
		                                            <label class="control-label">Month</label>
	                                            	<select name="psychiatrist_month" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<option value="01">January</option>
            											<option value="02">February</option>
            											<option value="03">March</option>
            											<option value="04">April</option>
            											<option value="05">May</option>
            											<option value="06">June</option>
            											<option value="07">July</option>
            											<option value="08">August</option>
            											<option value="09">September</option>
            											<option value="10">October</option>
            											<option value="11">November</option>
            											<option value="12">December</option>
	                                            	</select>
	                                        	</div>


		                                    	<div class="form-group label-floating">
		                                        <label class="control-label">For What?</label>
		                                        <input type="textarea" class="form-control" id="psychiatrist_what">
		                                    	</div>

		                                    	<!--Psychologist-->
		                                    	<div class="form-group label-floating">
		                                		<label class="control-label">Psychologist</label>
		                                        <select name="psychiatrist" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<option value="public">Yes</option>
	                                                	<option> No </option>
	                                            </select>
		                                    	</div>


		                                    	<h6 class="info-text"> When? </h6>

		                                    	<div class="form-group label-floating">
		                                            <label class="control-label">Year</label>
	                                            	<select name="psychologist_year" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<?php
                 										for ($i = 2018; $i >= 1900; $i--) {
               											echo'<option  class=  value="' . $i . '">' . $i . '</option>';
                										}
                    									?>
	                                            	</select>
	                                        	</div>

	                                        	<div class="form-group label-floating">
		                                            <label class="control-label">Day</label>
	                                            	<select name="psychologist_day" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<?php
                										for ($i = 1; $i <= 31; $i++) {
                										echo'<option class=" " value="' . $i . '">' . $i . '</option>';
                										}
                										?>
	                                            	</select>
	                                        	</div>

	                                        	<div class="form-group label-floating">
		                                            <label class="control-label">Month</label>
	                                            	<select name="psychologist_month" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<option value="01">January</option>
            											<option value="02">February</option>
            											<option value="03">March</option>
            											<option value="04">April</option>
            											<option value="05">May</option>
            											<option value="06">June</option>
            											<option value="07">July</option>
            											<option value="08">August</option>
            											<option value="09">September</option>
            											<option value="10">October</option>
            											<option value="11">November</option>
            											<option value="12">December</option>
	                                            	</select>
	                                        	</div>


		                                    	<div class="form-group label-floating">
		                                        <label class="control-label">For What?</label>
		                                        <input type="textarea" class="form-control" id="psychiatrist_what">
		                                    	</div>

		                                    	<!--Counselor-->
		                                    	<div class="form-group label-floating">
		                                		<label class="control-label">Counselor</label>
		                                        <select name="counselor" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<option value="public">Yes</option>
	                                                	<option> No </option>
	                                            </select>
		                                    	</div>


		                                    	<h6 class="info-text"> When? </h6>

		                                    	<div class="form-group label-floating">
		                                            <label class="control-label">Year</label>
	                                            	<select name="counselor_year" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<?php
                 										for ($i = 2018; $i >= 1900; $i--) {
               											echo'<option  class=  value="' . $i . '">' . $i . '</option>';
                										}
                    									?>
	                                            	</select>
	                                        	</div>

	                                        	<div class="form-group label-floating">
		                                            <label class="control-label">Day</label>
	                                            	<select name="counselor_day" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<?php
                										for ($i = 1; $i <= 31; $i++) {
                										echo'<option class=" " value="' . $i . '">' . $i . '</option>';
                										}
                										?>
	                                            	</select>
	                                        	</div>

	                                        	<div class="form-group label-floating">
		                                            <label class="control-label">Month</label>
	                                            	<select name="counselor_month" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<option value="01">January</option>
            											<option value="02">February</option>
            											<option value="03">March</option>
            											<option value="04">April</option>
            											<option value="05">May</option>
            											<option value="06">June</option>
            											<option value="07">July</option>
            											<option value="08">August</option>
            											<option value="09">September</option>
            											<option value="10">October</option>
            											<option value="11">November</option>
            											<option value="12">December</option>
	                                            	</select>
	                                        	</div>


		                                    	<div class="form-group label-floating">
		                                        <label class="control-label">For What?</label>
		                                        <input type="textarea" class="form-control" id="counselor_what">
		                                    	</div>

		                                	</div>
		                                	<!--Lower Left-->
		                                	<div class="col-sm-5 col-sm-offset-1">
		                                    	
		                                	</div>
		                                	<!--Lower Right-->
		                                	<div class="col-sm-5">

		                                        
		                                  	</div>

		                                </div>
		                            </div>

		                            <div class="tab-pane" id="interestsandhobbies">
		                            	<div class="row">
		                                	<div class="col-sm-12">
		                                    	<h4 class="info-text"> V. Interests And Hobbies</h4>
		                                	</div>
		                                	<!--Upper Left-->
		                                	<div class="col-sm-5 col-sm-offset-1">
		                                    	
		                                    	<div class="form-group label-floating">
		                                    		<h4 class="info-text"> A. Academic</h4>
		                                    		<!--<input type="text" class="form-control" id="exampleInputEmail1">-->
		                                        	<!--<div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="checkbox" name="jobb" value="Design">
		                                                <div class="icon">
		                                                <br>
		                                                <br>
		                                                Math Club
		                                                </div>
		                                                <h6>Math Club</h6>
		                                            </div>-->
		                                            <div class="form-group label-floating">
		                                            <label class="control-label">Club Most Likely Interested In</label>
	                                            	<select name="country" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<option value="Math"> Math Club </option>
	                                                	<option value="Science"> Science Cub </option>
	                                                	<option value="Debate"> Debating Club </option>
	                                                	<option value="Quizzer"> Quizzer`s Club </option>
	                                                	<option value="Others"> Others Club </option>
	                                                	</select>
	                                        	</div>
	                                                	
	                                                	
	                                                	<div class="form-group label-floating">
		                                        		<label class="control-label">If Others</label>
		                                        		<div class="input-group">
		                                            	<input type="text" class="form-control">
		                                            	<span class="input-group-addon">Please Specify</span>
		                                        	</div>
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        		<label class="control-label">What is/are your favorite subjects?</label>
		                                        		<div class="input-group">
		                                            	<input type="text" class="form-control">
		                                            
		                                        	</div>
		                                    	</div>

		                                    	<div class="form-group label-floating">
		                                        		<label class="control-label">What is/are the subjects you least like?</label>
		                                        		<div class="input-group">
		                                            	<input type="text" class="form-control">
		                                        	</div>
		                                    	</div>

	                                            	

		                                    	</div>
		                                    	
		                                	</div>
		                                	<!--Upper Right-->
		                                	<div class="col-sm-5">
		                                    	<div class="form-group label-floating">
		                                    		<h4 class="info-text"> B. Extra Curricular </h4>
		                                            <div class="form-group label-floating">
		                                        		<label class="control-label">What are your hobbies?</label>
		                                        		<div class="input-group">
		                                            	<input type="text" class="form-control">
		                                            	<input type="text" class="form-control">
		                                            	<input type="text" class="form-control">
		                                            	<input type="text" class="form-control">
		                                        	</div>
		                                    	</div>
	                                            	
	                                            	
	                                        	</div>
		                                	</div>
		                                	<div class="col-sm-5 col-sm-offset-1">
		                                    	<div class="form-group label-floating">
		                                        	<!--<input type="text" class="form-control" id="exampleInputEmail1">-->
		                                        	<h4 class="info-text"> Which Organizations Interests you the most? </h4>
		                                        	<div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="checkbox" name="jobb" value="Design">
		                                                <div class="icon">
		                                                <br>
		                                                <br>
		                                                Athletics
		                                                </div>
		                                                <h6>Athletics</h6>
		                                            </div>

		                                            <div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="checkbox" name="jobb" value="Design">
		                                                <div class="icon">
		                                                <br>
		                                                <br>
		                                                Dramatics
		                                                </div>
		                                                <h6>Dramatics</h6>
		                                            </div>

		                                            <div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="checkbox" name="jobb" value="Design">
		                                                <div class="icon">
		                                                <br>
		                                                <br>
		                                                Religious Oranization 
		                                                </div>
		                                                <h6>Religious Organization</h6>
		                                            </div>

		                                            <div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="checkbox" name="jobb" value="Design">
		                                                <div class="icon">
		                                                <br>
		                                                <br>
		                                                Chess Club
		                                                </div>
		                                                <h6>Chess Club</h6>
		                                            </div>

		                                    	</div>
		                                	</div>
		                                	<div class="col-sm-5">
		                                    	<div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="checkbox" name="jobb" value="Design">
		                                                <div class="icon">
		                                                <br>
		                                                <br>
		                                                Glee Club
		                                                </div>
		                                                <h6>Glee Club</h6>
		                                            </div>

		                                            <div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="checkbox" name="jobb" value="Design">
		                                                <div class="icon">
		                                                <br>
		                                                <br>
		                                                Scouting
		                                                </div>
		                                                <h6>Scouting</h6>
		                                            </div>

		                                            <div class="choice" data-toggle="wizard-checkbox">
		                                                <input type="checkbox" name="jobb" value="Design">
		                                                <div class="icon">
		                                                <br>
		                                                <br>
		                                                Others
		                                                </div>
		                                                <h6>Others</h6>
		                                            </div>

		                                            <div class="form-group label-floating">
		                                        		<label class="control-label">If Others</label>
		                                        		<div class="input-group">
		                                            	<input type="text" class="form-control">
		                                            	<span class="input-group-addon">Please Specify</span>
		                                        	</div>

		                                	</div>
		                            	</div>
		                            </div>
		                       </div>
		                            <div class="tab-pane" id="testresult">
		                            	
		                            	<div class="row">
		                                	<div class="col-sm-12">
		                                    	<h4 class="info-text"> IV. Test Results</h4>
		                                	</div>

		                                	<div class="col-sm-5 col-sm-offset-1">
		                                    	<div class="form-group label-floating">
		                                        	
		                                        	<h4 class="info-text"> Date </h4>

		                                    	<div class="form-group label-floating">
		                                            <label class="control-label">Year</label>
	                                            	<select name="birthdate_ear" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<?php
                 										for ($i = 2018; $i >= 1900; $i--) {
               											echo'<option  class=  value="' . $i . '">' . $i . '</option>';
                										}
                    									?>
	                                            	</select>
	                                        	</div>

	                                        	<div class="form-group label-floating">
		                                            <label class="control-label">Day</label>
	                                            	<select name="birthdate_day" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<?php
                										for ($i = 1; $i <= 31; $i++) {
                										echo'<option class=" " value="' . $i . '">' . $i . '</option>';
                										}
                										?>
	                                            	</select>
	                                        	</div>

	                                        	<div class="form-group label-floating">
		                                        		<label class="control-label">Name</label>
		                                        		<div class="input-group">
		                                            	<input type="text" class="form-control">
		                                            	
		                                        	</div>
												</div>
		                                        	<div class="form-group label-floating">
		                                        		<label class="control-label">RS</label>
		                                        		<div class="input-group">
		                                            	<input type="text" class="form-control">
		                                            	
		                                        	</div>
		                                        </div>

		                                        	<div class="form-group label-floating">
		                                        		<label class="control-label">PR</label>
		                                        		<div class="input-group">
		                                            	<input type="text" class="form-control">
		                                            	
		                                        	</div>
		                                        </div>

		                                        	<div class="form-group label-floating">
		                                        		<label class="control-label">Description</label>
		                                        		<div class="input-group">
		                                            	<input type="text" class="form-control">
		                                            	
		                                        	</div>
		                                        </div>
		                                        </div>
		                                    	</div>

		                                	


		                                	<div class="col-sm-5">
		                                    	<div class="form-group label-floating">
		                                            <div class="form-group label-floating">
		                                        	
		                                        	<h4 class="info-text"> Date </h4>

		                                    	<div class="form-group label-floating">
		                                            <label class="control-label">Year</label>
	                                            	<select name="birthdate_ear" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<?php
                 										for ($i = 2018; $i >= 1900; $i--) {
               											echo'<option  class=  value="' . $i . '">' . $i . '</option>';
                										}
                    									?>
	                                            	</select>
	                                        	</div>

	                                        	<div class="form-group label-floating">
		                                            <label class="control-label">Day</label>
	                                            	<select name="birthdate_day" class="form-control">
	                                                	<option disabled="" selected=""></option>
	                                                	<?php
                										for ($i = 1; $i <= 31; $i++) {
                										echo'<option class=" " value="' . $i . '">' . $i . '</option>';
                										}
                										?>
	                                            	</select>
	                                        	</div>

	                                        	<div class="form-group label-floating">
		                                        		<label class="control-label">Name</label>
		                                        		<div class="input-group">
		                                            	<input type="text" class="form-control">
		                                            	
		                                        	</div>
												</div>
		                                        	<div class="form-group label-floating">
		                                        		<label class="control-label">RS</label>
		                                        		<div class="input-group">
		                                            	<input type="text" class="form-control">
		                                            	
		                                        	</div>
		                                        </div>

		                                        	<div class="form-group label-floating">
		                                        		<label class="control-label">PR</label>
		                                        		<div class="input-group">
		                                            	<input type="text" class="form-control">
		                                            	
		                                        	</div>
		                                        </div>

		                                        	<div class="form-group label-floating">
		                                        		<label class="control-label">Description</label>
		                                        		<div class="input-group">
		                                            	<input type="text" class="form-control">
		                                            	
		                                        	</div>
		                                        </div>
		                                        </div>
	                                        	</div>
		                                	</div>
		                                	<div class="col-sm-5 col-sm-offset-1">
		                                    	<div class="form-group label-floating">
		                                        	
		                                    	</div>
		                                	</div>
		                                	<div class="col-sm-5">
		                                    	
		                                	</div>
		                            	</div>
		                            </div>

		                        <div class="wizard-footer">
	                            	<div class="pull-right">
	                                    <input type='button' class='btn btn-next btn-fill btn-primary btn-wd' name='next' value='Next' />
	                                    <input type='button' class='btn btn-finish btn-fill btn-primary btn-wd' name='finish' value='Finish' />
	                                </div>
	                                <div class="pull-left">
	                                    <input type='button' class='btn btn-previous btn-fill btn-default btn-wd' name='previous' value='Previous' />
	                                </div>
		                            <div class="clearfix"></div>
		                        </div>
			                </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	        </div> <!-- row -->
	    </div> <!--  big container -->

	    <div class="footer">
	        <div class="container text-center">
	             Made with <i class="fa fa-heart heart"></i> by <a href="http://www.creative-tim.com">Creative Tim</a>. Free download <a href="http://www.creative-tim.com/product/bootstrap-wizard">here.</a>
	        </div>
	    </div>
	</div>

</body>
	<!--   Core JS Files   -->
	<script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.bootstrap.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="assets/js/material-bootstrap-wizard.js"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="assets/js/jquery.validate.min.js"></script>

</html>
