
<?php
//echo "<script type='text/javascript'>alert('iirc');</script>";
$queryAccount = "SELECT * FROM tbl_personalinfo WHERE studentNumber='$varcharStudentAccountNumber'";
if($queryArray = mysqli_query($connect, $queryAccount))
{
	while($row=mysqli_fetch_array($queryArray))
	{
		if($row['sex']==''||$row['sex']==NULL)
		{

			$message = "Please fill up your Individual Inventory Form";
			echo "<script type='text/javascript'>alert('$message');window.location.replace('individualInventory.php');</script>";
		}
	}
}
else
{
	echo mysqli_error($connect);
}
?>