<tr>
	<img src="data:image/jpeg;base64,'.base64_encode($row['studentDisplayPic']).'"  alt="" height="200" width="200" style="margin: 10px 0 10px 0; object-fit:cover; display: block; margin-left: auto; margin-right: auto; border-radius:50%">
</tr>
<tr>
	<th scope="row">Name</th>
	<td>'.$row["firstName"].' '.$row["middleName"].' '.$row["lastName"].'</td>
</tr>
<tr>
	<th scope="row">Course</th>
	<td>'.$row["courseCode"].'</td>
</tr>
<tr>
	<th scope="row">College</th>
	<td>'.$row["collegeCode"].'</td>
</tr>
<tr>
	<th scope="row">Year and Section</th>
	<td>'.$row["year"]." - ".$row["section"].'</td>
</tr>
<tr>
	<th scope="row">Gender</th>
	<td>'.$row["sex"].'</td>
</tr>
<tr>
	<th scope="row">Birth Date</th>
	<td>'.$row["birthDate"].'</td>
</tr>	
<tr>
	<th scope="row">Address</th>
	<td>'.$row["cityName"]." ".$row["cityProvince"].'</td>
</tr>
<tr>
	<th scope="row">Contact No.</th>
	<td>'.$row["cpContactNumber"].'</td>
</tr>
<tr>
	<th scope="row">Email</th>
	<td>'.$row["email"].'</td>
</tr>