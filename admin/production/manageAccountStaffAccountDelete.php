<?php
if(empty($_SESSION['sessionAdminName']))
{
  header("Location: logout.php");
}

?>
<?php  
include("connectionString.php");  
$queryStudent = "SELECT * FROM tbl_studentaccount";
$resultStudent = mysqli_query($connect, $queryStudent); 
while($row = mysqli_fetch_array($resultStudent))  
{  
    ?>  
    <tr>
        
        <td> <?php echo $row['studentNumber'];?> </td>
        <td> <?php echo $row['studentFirstName'];?> </td>
        <td> <?php echo $row['studentMiddleName'];?> </td>
        <td> <?php echo $row['studentLastName'];?> </td>
        <td> <?php echo '<img src="data:image/jpeg;base64,'.base64_encode($row['studentDisplayPic'] ).'"width="50" />';?> </td>
        <td> <?php echo $row['aboutStudent'];?> </td>
    </tr>  
    <?php
}
?> 

<?php
//including the database connection file
include("connectionString.php");

//getting id of the data from url
$adminUserName = $_GET['id'];

//deleting the row from table
//$query ="DELETE FROM tbl_destination WHERE destination_ID=$id";
//Clearing Tour Package dependencies 



$querymovingtoarchive = "INSERT INTO tbl_adminaccountarchive select * from tbl_studentaccount where studentNumber = '$studentNumber'";
$querydeleting = "DELETE FROM `tbl_studentaccount` WHERE `tbl_studentaccount`.`studentNumber` = '$studentNumber'";

if ($resultmovingtoarchive = mysqli_query($connect, $querymovingtoarchive))
{
  if ($resultdeleting = mysqli_query($connect, $querydeleting))
  {
    header("Location:manageAccountStudentAccount.php");
}
else{
    $message = "Error Deleting";
    echo "<script type='text/javascript'>alert('$message');</script>";
    header("Location:manageAccountStudentAccount.php");
}

}
else{
  $message = "Error Moving";
  echo "<script type='text/javascript'>alert('$message');</script>";
  header("Location:manageAccountStudentAccount.php");
}

//redirecting to the display page (index.php in our case)

?>

