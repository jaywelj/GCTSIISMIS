<?php

if(isset($_POST["courseCode"]))
{	
	$output = '';
	$varcharCourseCode = $_POST["courseCode"];
	include('connectionString.php');
	$queryView = "SELECT * FROM tbl_course WHERE courseCode = '$varcharCourseCode'";
	$queryViewArray=mysqli_query($connect,$queryView);
	$output .= '
			 		<table class="table" >
						<tbody>';
						while($row = mysqli_fetch_array($queryViewArray))
						{
							$output .= '
							<input type="text" name="txtbxCourseCode" id="txtbxCourseCode"  value="'.$varcharCourseCode.'" class="form-control" style="display:none;"/>
							<label>Course Code</label>
							<input type="text" name="txtbxEditCourseCode" id="txtbxEditCourseCode"  value="'.$row["courseCode"].'" class="form-control" />
							<br />
							<label>Course Name</label>
							<input type="text" name="txtbxEditCourseName" id="txtbxEditCourseName" value="'.$row["courseName"].'" class="form-control" />
							<br />';

								// php select option value from database
								include("connectionString.php");

									// mysql select query
								$queryFromCollege = "SELECT * FROM `tbl_college`";

								// for method 1/
								$resultFromCollege = mysqli_query($connect, $queryFromCollege);
								?>
								<script>
								var college = '<?php echo $row["collegeCode"];?>';
								$("#selectCourseCollege").val(college).change();
								</script>
								<?php

								$output .= '

								<label>College</label>
								<select name="selectCourseCollege" id="selectCourseCollege" class="form-control">
									<option value="NULL" selected>select a college </option>';
									while($row = mysqli_fetch_array($resultFromCollege)):;
									$output .= '<option value="'.$row["collegeCode"].'">'.$row["collegeCode"].' - '.$row["collegeName"].'</option>';
									endwhile;
								$output .= '</select>
							';
						}
						$output .= '
						</tbody>
					</table>
				';
	echo $output;
}
else
echo '<script> alert("emplty string");</script>';
?>	
