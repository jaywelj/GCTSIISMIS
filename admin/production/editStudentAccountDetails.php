<?php

if(isset($_POST["studentNumber"]))
{	
	$output = '';
	$varcharStudentNumber = $_POST["studentNumber"];
	include('connectionString.php');
	$queryView = "SELECT * FROM tbl_studentaccount INNER JOIN tbl_personalinfo ON tbl_studentaccount.studentNumber = tbl_personalinfo.studentNumber WHERE tbl_studentaccount.studentNumber = '$varcharStudentNumber'";
	$queryViewArray=mysqli_query($connect,$queryView);
	$output .= '
			 		<table class="table" >
						<tbody>';
						while($row = mysqli_fetch_array($queryViewArray))
						{
							$output .= '
							<input type="text" name="txtbxEditStudentNumber" id="txtbxEditStudentNumber"  value="'.$row["studentNumber"].'" class="form-control" style="display:none;" />

							<label for="fileEditStudentImage" class="btn btn-default" style="border-radius:50%; margin-left:25%;" title="CHANGE PROFILE PICTURE">
								<img src="data:image/jpeg;base64,'.base64_encode($row['studentDisplayPic']).'"  alt="" height="200" width="200" style="margin: 10px 0 10px 0; object-fit:cover;  border-radius:50%">
							</label>
							<br>
							
							<i class="fa fa-pencil" style="margin-left:46%;"></i>
							<input type="file" id="fileEditStudentImage" name="fileEditStudentImage" accept="image/*" style="display:none" value="">
							<br />
							<label>First Name</label>
							<input type="text" name="txtbxEditStudentFirstName" id="txtbxEditStudentFirstName"  value="'.$row["lastName"].'" class="form-control" />
							<br />
							<label>Middle Name</label>
							<input type="text" name="txtbxEditStudentMiddleName" id="txtbxEditStudentMiddleName" value="'.$row["middleName"].'" class="form-control" />
							<br />
							<label>Last Name</label>
							<input type="text" name="txtbxEditStudentLastName" id="txtbxEditStudentLastName"  value="'.$row["lastName"].'" class="form-control" />
							<br />
							<label>Year</label>
							<input type="number" name="txtbxEditStudentYear" id="txtbxEditStudentYear" value="'.$row["year"].'" class="form-control" />
							<br />
							<label>Section</label>
							<input type="number" name="txtbxEditStudentSection" id="txtbxEditStudentSection" value="'.$row["section"].'" class="form-control" />
							<br />
							';
							// mysql select query
							$queryCourse2 = "SELECT * FROM tbl_course";

							// for method 1/
							$resultCourse2 = mysqli_query($connect, $queryCourse2);

							?>
							<script>
								var course = '<?php echo $row["courseCode"];?>';
								$("#optionStudentCourse").val(course).change();
							</script>
							<?php
							$output .= '<label>Course</label>
							<select name="optionStudentCourse" id="optionStudentCourse" class="form-control">
								<option value="NULL" selected>Select A Course</option>';?>
								<?php 
								while($row1 = mysqli_fetch_array($resultCourse2)):;?>
									<?php
									$output .='<option value="'.$row1[0].'">'.$row1[0].' - '.$row1[1].'</option>';
									?>
								<?php endwhile;?>
							<?php
							$output .='</select>
							<br />';

							?>
							<script>
								var gender = '<?php echo $row["sex"];?>';
								$("#optionEditStudentGender").val(gender).change();
							</script>
							<?php

							$output .= '
							<label>Select Gender</label>
							<select name="optionEditStudentGender" id="optionEditStudentGender" class="form-control">
								<option value="NA" disabled>NA</option>  
								<option value="M">Male</option>  
								<option value="F">Female</option>
							</select>
							<br />
							<label>Date of Birth</label>
							<input type="date" name="dateEditStudentBirthdate" id="dateEditStudentBirthdate" value="'.$row["birthDate"].'" class="form-control" />
							<br />  
							<label>Contact No</label>
							<input type="number" name="txtbxEditStudentContactNo" value="'.$row["cpContactNumber"].'" id="txtbxEditStudentContactNo" class="form-control" />
							<br />
							<label>Email</label>
							<input type="text" name="txtbxEditStudentEmail" id="txtbxEditStudentEmail"  value="'.$row["email"].'" class="form-control" />
							<br />
							';
						}
						$output .= '
						</tbody>
					</table>
				';
	echo $output;
}
else
echo '<script> altert("emplty string");</script>';
?>	
