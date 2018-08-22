<?php 
include("connectionString.php");
$selections = array();
$columns = array();
$whereValues = array();
$whereClause = "";
if(isset($_POST['dropdownCivilStatus']))
{
	$value = $_POST['dropdownCivilStatus'];
	if($_POST['dropdownCivilStatus']<>"None")
	{
		array_push($selections, "civilStatus");
		array_push($columns, "Civil Status");
		if($_POST['dropdownCivilStatus']<>"All")
			array_push($whereValues, "civilStatus = '".$_POST['dropdownCivilStatus']."'");
	}
	
	if($_POST['dropdownSexuality']<>"None")
	{
		array_push($selections, "sexuality");
		array_push($columns, "Sexuality");
		if($_POST['dropdownSexuality']<>"All")
			array_push($whereValues, "sexuality = '".$_POST['dropdownSexuality']."'");
	}
	
	$selectionArray = $selections;
	$selections = implode(", ", $selections);
	if(!empty($selections))
		$selections = ",".$selections;
	$whereValues = implode(" AND ", $whereValues);
	if(!empty($whereValues))
		$whereClause = "WHERE ".$whereValues;


}
else
{
}
?>

<table id="datatable-buttons" class="table table-striped table-bordered">
	<thead>
		<tr>
			<?php
			echo"<th>Student Number</th>";
			foreach($columns as $i => $value)
			{
				echo"<th>".$value."</th>";
			}
			?>
		</tr>
	</thead>
	<tbody>
		<?php
		$query = "
		SELECT tbl_studentAccount.studentNumber $selections FROM tbl_studentaccount
		INNER JOIN tbl_personalinfo on tbl_studentaccount.studentNumber = tbl_personalinfo.studentNumber
		INNER JOIN tbl_educationalbackground on tbl_studentaccount.studentNumber = tbl_educationalbackground.studentNumber
		INNER JOIN tbl_familybackground on tbl_studentaccount.studentNumber = tbl_familybackground.studentNumber
		INNER JOIN tbl_healthinfo on tbl_studentaccount.studentNumber = tbl_healthinfo.studentNumber
		INNER JOIN tbl_interesthobbies on tbl_studentaccount.studentNumber = tbl_interesthobbies.studentNumber
		INNER JOIN tbl_testrecord on tbl_studentaccount.studentNumber = tbl_testrecord.studentNumber $whereClause
		";
		if(!($queryResult = mysqli_query($connect, $query)))
		{
			echo mysqli_error($connect);
		}
		while($row = mysqli_fetch_array($queryResult))
		{
			echo "<tr>";
			echo"<td>".$row['studentNumber']."</td>";
			foreach($selectionArray as $i => $value)
			{
				echo"<td>".$row[$value]."</td>";
			}
			echo "</tr>";
		}
		?>
	</tbody>
	<tfoot>
		<?php
		echo"<th>Student Number</th>";
		foreach($columns as $i => $value)
		{
			echo"<th>".$value."</th>";
		}
		?>
	</tfoot>
</table>
