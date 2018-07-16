<?php

if(isset($_POST["adminEmail"]))
{	
	$output = '';
	$varcharAdminEmail = $_POST["adminEmail"];
	include('connectionString.php');
	$queryView = "SELECT * FROM tbl_adminaccount WHERE adminEmail = '$varcharAdminEmail'";
	$queryViewArray=mysqli_query($connect,$queryView);
	$output .= '
			 		<table class="table" >
						<tbody>';
						while($row = mysqli_fetch_array($queryViewArray))
						{
							$output .= '
							<label for="fileEditAdminAccountImage" class="btn btn-default" style="border-radius:50%; margin-left:25%;" title="CHANGE PROFILE PICTURE">
								<img src="data:image/jpeg;base64,'.base64_encode($row['adminImage']).'"  alt="" height="200" width="200" style="margin: 10px 0 10px 0; object-fit:cover;  border-radius:50%">
							</label>
							<br>
							<input type="text" name="txtbxEditAdminAccountEmail" id="txtbxEditAdminAccountEmail"  value="'.$row["adminEmail"].'" class="form-control" style="display:none;" />

							<i class="fa fa-pencil" style="margin-left:46%;"></i>
							<input type="file" id="fileEditAdminAccountImage" name="fileEditAdminAccountImage" accept="image/*" style="display:none" value="">
							<br />
							<label>First Name</label>
							<input type="text" name="txtbxEditAdminAccountFirstName" id="txtbxEditAdminAccountFirstName"  value="'.$row["adminFirstName"].'" class="form-control" />
							<br />
							<label>Middle Name</label>
							<input type="text" name="txtbxEditAdminAccountMiddleName" id="txtbxEditAdminAccountMiddleName" value="'.$row["adminMiddleName"].'" class="form-control" />
							<br />
							<label>Last Name</label>
							<input type="text" name="txtbxEditAdminAccountLastName" id="txtbxEditAdminAccountLastName"  value="'.$row["adminLastName"].'" class="form-control" />
							<br />
							<label>Address</label>
							<textarea name="txtbxEditAdminAccountAddress" id="txtbxEditAdminAccountAddress" class="form-control">'.$row["adminAddress"].'</textarea>
							<br />';
							?>
							<script>
								var gender = '<?php echo $row["adminGender"];?>';
								$("#optionEditAdminAccountGender").val(gender).change();
							</script>
							<?php
							$output .= '
							<label>Select Gender</label>
							<select name="optionEditAdminAccountGender" id="optionEditAdminAccountGender" class="form-control">
								<option value="NA" disabled>NA</option>  
								<option value="M">Male</option>  
								<option value="F">Female</option>
							</select>
							<br />
							<label>Date of Birth</label>
							<input type="date" name="dateEditAdminAccountBirthdate" id="dateEditAdminAccountBirthdate" value="'.$row["adminBirthDate"].'" class="form-control" />
							<br />  
							<label>Contact No</label>
							<input type="number" name="txtbxEditAdminAccountContactNo" value="'.$row["adminContactNo"]. '" id="txtbxEditAdminAccountContactNo" class="form-control" />
							<br />
							<center>
							<button class="btn btn-default btn-warning btn-change-password" type="button" id="'.$row["adminEmail"].'" data-dismiss="modal"><i class="fa fa-lock"> Change Password</i></button>
							</center>
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
