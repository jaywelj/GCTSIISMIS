<!DOCTYPE html>
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
</head>
<body>

	<div class="bg-contact3" style="background-image: url('images/bg-01.jpg');">
		<div class="container-contact3">
			<div class="wrap-contact3">
				<form class="contact3-form validate-form">
					<span class="contact3-form-title">
						Individual Inventory Record
					</span>

					<div class="wrap-contact3-form-radio">
						<div class="contact3-form-radio m-r-42">
							<input class="input-radio3" id="radio1" type="radio" name="choice" value="say-hi" checked="checked">
							<label class="label-radio3" for="radio1">
								LHS
							</label>
						</div>

						<div class="contact3-form-radio">
							<input class="input-radio3" id="radio2" type="radio" name="choice" value="get-quote">
							<label class="label-radio3" for="radio2">
								College/SHS
							</label>
						</div>
					</div>
<!-- Start of I. Personal Information -->
					<h3 color="white">I. Personal Information</h3>

					<div class="wrap-input3 validate-input" data-validate="Last Name is required">
						<input class="input3" type="text" name="lastname" placeholder="Last Name">
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 validate-input" data-validate="First Name is required">
						<input class="input3" type="text" name="firstname" placeholder="First Name">
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 validate-input" data-validate="Middle Name is required">
						<input class="input3" type="text" name="middlename" placeholder="Middle Name">
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 validate-input" data-validate="Gender is required">
					<select class="selection-2" name="Gender">
								<option>Gender</option>
								<option>Male ♂</option>
								<option>Female ♀</option>
							</select>
					</div>

					<div class="wrap-input3 validate-input" data-validate="Middle Name is required">
						<input class="input3" type="text" name="age" placeholder="Age">
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 validate-input">
						<div>
							<select class="selection-2" name="year">
								<option>Year</option>
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</div>
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 validate-input">
						<div class="wrap-input3 validate-input" data-validate="Section is required">
						<input class="input3" type="text" name="section" placeholder="Section">
						<span class="focus-input3"></span>
					</div>

					<div class="wrap-input3 validate-input">
						<div>
							<select class="selection-2" name="Civil Status">
								<option>Civil Status</option>
								<option>Single</option>
								<option>Married</option>
								<option>Widowed</option>
								<option>Divorced</option>
								<option>Separated</option>
								<option>Registered Partnership</option>
							</select>
						</div>
						<span class="focus-input3"></span>
					</div>

				<div class="wrap-input3 validate-input">
                    <font color="white">Date of Birth</font>
					<br>
					<select class="selection-2" name="birthdate_year" >
            		<?php
                  	echo'<option value=" ">Year</option>';
                 	for ($i = 2018; $i >= 1900; $i--) {
               		echo'<option  class=  value="' . $i . '">' . $i . '</option>';
                	}
                    ?>
                    </select>

                	<select class="selection-2" name="birthdate_day">
					<?php
                	echo'<option value=" ">Day</option>';
                	for ($i = 1; $i <= 31; $i++) {
                	echo'<option class=  value="' . $i . '">' . $i . '</option>';
                	}
                	?>
                	</select>

                	<select class="selection-2" name="birthdate_month" >
            		<option value=" ">Month</option>;
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

        		<div class="wrap-input3 validate-input">
					<div class="wrap-input3 validate-input" data-validate="Place Of Birth is required">
					<input class="input3" type="text" name="placeofbirth" placeholder="Place Of Birth">
					<span class="focus-input3"></span>
				</div>

				<div class="wrap-input3 validate-input">
					<div class="wrap-input3 validate-input" data-validate="Height is required">
					<input class="input3" type="text" name="height" placeholder="Height">
					<span class="focus-input3"></span>
				</div>

				<div class="wrap-input3 validate-input">
					<div class="wrap-input3 validate-input" data-validate="Weight is required">
					<input class="input3" type="text" name="weight" placeholder="Weight">
					<span class="focus-input3"></span>
				</div>

				<div class="wrap-input3 validate-input">
					<div class="wrap-input3 validate-input" data-validate="Complexion is required">
					<input class="input3" type="text" name="complexion" placeholder="Complexion">
					<span class="focus-input3"></span>
				</div>

				<div class="wrap-input3 validate-input">
					<div class="wrap-input3 validate-input" data-validate="City Address is required">
					<input class="input3" type="text" name="cityaddress" placeholder="City Address">
					<span class="focus-input3"></span>
				</div>

				<div class="wrap-input3 validate-input">
					<div class="wrap-input3 validate-input" data-validate="Provincial Address is required">
					<input class="input3" type="text" name="provincialaddress" placeholder="Provincial Address">
					<span class="focus-input3"></span>
				</div>

				<div class="wrap-input3 validate-input">
					<div class="wrap-input3 validate-input" data-validate="Section is required">
					<input class="input3" type="text" name="section" placeholder="Section">
					<span class="focus-input3"></span>
				</div>
				
				<div class="wrap-input3 validate-input">
					<div class="wrap-input3 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
					<input class="input3" type="text" name="email" placeholder="Email Address">
					<span class="focus-input3"></span>
				</div>

				<div class="wrap-input3 validate-input">
					<div class="wrap-input3 validate-input" data-validate = "Religion is required">
					<input class="input3" type="text" name="religion" placeholder="Religion">
					<span class="focus-input3"></span>
				</div>
<!--Start of II. Educational Attainment-->





<!-- College Only Part -->
					<div class="wrap-input3 input3-select">
						<div>
							<select class="selection-2" name="college">
								<option>College</option>
								<option>CCIS</option>
								<option>COED</option>
								<option>COL</option>
							</select>
						</div>
						<span class="focus-input3"></span>
					</div>

					<div class="selection-2" data-validate = "Highschool General Average is required">
					<input class="input3" type="text" name="hsgenave" placeholder="HIgh School General Average">
					<span class="focus-input3"></span>
					</div>
<!--Div is here-->
					</div>
<!--End Of College Only Part-->


					
					<div class="wrap-input3 validate-input" data-validate = "Message is required">
						<textarea class="input3" name="message" placeholder="Your Message"></textarea>
						<span class="focus-input3"></span>
					</div>

					<div class="container-contact3-form-btn">
						<button class="contact3-form-btn">
							Submit
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
