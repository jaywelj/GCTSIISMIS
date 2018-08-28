<!--Modal box-->
<div class="modal fade" id="login" role="dialog">
	<div class="modal-dialog modal-sm">

		<!-- Modal content no 1-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title text-center form-title">Login</h4>
			</div>
			<div class="modal-body padtrbl">

				<div class="login-box-body">
					<div class="form-group">
						<form name="" id="loginForm" method="post">
							<div class="form-group has-feedback">
								<!----- username -------------->
								<input class="form-control" placeholder="Student Number" id="loginid" name="loginid" type="text" autocomplete="off" pattern="[0-9]{4}-[0-9]{5}-[A-Za-z]{2}-[0-1]{1}" required=""  style="text-transform: uppercase;" />
								<span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span>
								<!---Alredy exists  ! -->
								<span class="glyphicon glyphicon-user form-control-feedback"></span>
							</div>
							<div class="form-group has-feedback">
								<!----- password -------------->
								<input class="form-control" placeholder="PASSWORD" id="loginpw" name="loginpw" type="password" autocomplete="off" pattern=".{8,60}" required="required" />
								<span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span>
								<!---Alredy exists  ! -->
								<span class="glyphicon glyphicon-lock form-control-feedback"></span>
							</div>
							<div class="row">

								<div class="col-xs-12">
									<div class="checkbox text-center ">
										<input name="showcheck" id="showcheck" type="checkbox" value="" onclick="showCheck()">
										<h5 style="display:inline;">Show Password</h5>
									</div>
									<!-- <div class="checkbox icheck">
										<div class="checkbox text-center ">
											<input id="loginrem" type="checkbox" value="">
											<h5 style="display:inline;">Remember Password</h5>
										</div>
									</div> -->
								</div>
								<div class="col-xs-12">
									<input type="submit" class="btn btn-green btn-block btn-flat" name="btnLogin" value="Sign In"/>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="modal-header">
				<h5 class="modal-title text-center form-title">Don't have an account? <a href="#" data-target="#signup" data-toggle="modal">Sign Up.</a></h5>
			</div>
		</div>
	</div>
</div>
<!--/ Modal box-->
<!--Modal box-->
<div class="modal fade" id="signup" role="dialog">
	<div class="modal-dialog modal-md">

		<!-- Modal content no 1-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title text-center form-title">Sign Up</h4>
			</div>
			<div class="modal-body padtrbl">

				<div class="login-box-body">
					<p class="login-box-msg">Make the most out of your college journey.</p>
					<div class="form-group">
						<form name="" id="signUpForm" method="post">
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group has-feedback">
										<!----- Student Number -------------->
										<input class="form-control" placeholder="Student Number" name="txtbxStudentAccountNumber" id="txtbxStudentAccountNumber" type="text" pattern="[0-9]{4}-[0-9]{5}-[A-Za-z]{2}-[0-1]{1}" style="text-transform: uppercase;" required="required" autocomplete="off" maxlength="15" title="####-#####-MN-#" />
										<span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span>
										<!---Alredy exists  ! -->
										<span class="glyphicon glyphicon-user form-control-feedback"></span>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group has-feedback">
										<!----- Birthdate gaga -------------->
										<input class="form-control" placeholder="Birthdate" id="dateStudentAccountBirthDate" name="dateStudentAccountBirthDate" type="text" onfocus="(this.type='date')" required="required" autocomplete="off" />
										<span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span>
										<!---Alredy exists  ! -->
										<span class="glyphicon glyphicon-calendar form-control-feedback"></span>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group has-feedback">
										<!----- password -------------->
										<input class="form-control" placeholder="Password" name="txtbxStudentAccountPassword" id="txtbxStudentAccountPassword" type="password" required="required" autocomplete="off" />
										<span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span>
										<!---Alredy exists  ! -->
										<span class="glyphicon glyphicon-lock form-control-feedback"></span>
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group has-feedback">
										<!-----confirm password -------------->
										<input class="form-control" placeholder="Confirm Password" name="txtbxStudentAccountCPassword" id="txtbxStudentAccountCPassword" type="password" required="required" autocomplete="off" />
										<span style="display:none;font-weight:bold; position:absolute;color: grey;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginpsw"></span>
										<!---Alredy exists  ! -->
										<span class="glyphicon glyphicon-lock form-control-feedback"></span>
									</div>
								</div>
								<div class="col-lg-12">
									<small>
									<div class="form-group has-feedback text-center" id="divCheckPasswordMatch">
										
									</div>
									</small>
								</div>
								<div class="col-lg-12">
									<div class="form-group has-feedback">
										<!----- First Name -------------->
										<input class="form-control" placeholder="First Name" name="txtbxStudentAccountFirstName" id="txtbxStudentAccountFirstName" type="text" style="text-transform:capitalize;" pattern="^[\u00F1A-Za-z-'.\s]+$" required="required" autocomplete="off" />
										<span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span>
										<!---Alredy exists  ! -->
									</div>
								</div>
								
								<div class="col-lg-12">
									<div class="form-group has-feedback">
										<!----- Last Name -------------->
										<input class="form-control" placeholder="Middle Name" name="txtbxStudentAccountMiddleName" id="txtbxStudentAccountMiddleName" type="text" data-max-words="2" style="text-transform:capitalize;" pattern="^[\u00F1A-Za-z-'.\s]+$" autocomplete="off" />
										<span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span>
										<!---Alredy exists  ! -->
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group has-feedback">
										<!----- Middle Name -------------->
										<input class="form-control" placeholder="Last Name" name="txtbxStudentAccountLastName" id="txtbxStudentAccountLastName" type="text" data-max-words="2" style="text-transform:capitalize;" pattern="^[\u00F1A-Za-z-'.\s]+$" required="required" autocomplete="off" />
										<span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span>
										<!---Alredy exists  ! -->
									</div>
								</div>
								<?php

        						// php select option value from database
								include("connectionString.php");

       					 		// mysql select query
								$queryCourse2 = "SELECT * FROM tbl_course";

        						// for method 1/

								$resultCourse2 = mysqli_query($connect, $queryCourse2);

								?>
								<div class="col-lg-4">
									<div class="form-group">
										<!----- Course -------------->
										<select required="required" class="form-control" placeholder="Select a Course" name="dropdownStudentAccountCourse" id="dropdownStudentAccountCourse" autocomplete="off" >
											<?php while($row = mysqli_fetch_array($resultCourse2)):;?>
												<option value="<?php echo $row['courseCode'];?>"><?php echo $row['courseCode'];?> - <?php echo $row['courseName'];?></option>
											<?php endwhile;?>
										</select>
										<span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span>
										<!---Alredy exists  ! -->
									</div>
								</div>
								<div class="col-lg-4">
									<div class="form-group">
										<!----- Year -------------->
										<input class="form-control" placeholder="YEAR" name="txtbxStudentAccountYear" id="txtbxStudentAccountYear" type="number" required="required" min="1" max="5" autocomplete="off" />
										<span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span>
										<!---Alredy exists  ! -->
									</div>
								</div>
								<div class="col-lg-4">
									<div class="form-group">
										<!----- Section -------------->
										<input class="form-control" placeholder="Section" name="txtbxStudentAccountSection" id="txtbxStudentAccountSection" type="text" style="text-transform:uppercase;" pattern="^[\u00F1A-Za-z0-9]+$" required="required" autocomplete="off" />
										<span style="display:none;font-weight:bold; position:absolute;color: red;position: absolute;padding:4px;font-size: 11px;background-color:rgba(128, 128, 128, 0.26);z-index: 17;  right: 27px; top: 5px;" id="span_loginid"></span>
										<!---Alredy exists  ! -->
									</div>
								</div>
								
							</div>
							<div class="row">
								<div class="col-xs-12">
									<input type="submit" class="btn btn-green btn-block btn-flat" name="btnAdd" value="Sign Up"/>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--/ Modal box-->



<script type="text/javascript">
	function showCheck() 
	{
		var x = document.getElementById("loginpw");
		if (x.type === "password") 
		{
			x.type = "texts";
		} 
		else 
		{
			x.type = "password";
		}
	}
</script>

