<?php
//including the database connection file
include("connectionString.php");

//getting id of the data from url
$studentNumber = $_GET['id'];

//deleting the row from table
//$query ="DELETE FROM tbl_destination WHERE destination_ID=$id";
//Clearing Tour Package dependencies 

$default = "0";

$querydeletingstudentaccount = "DELETE FROM `tbl_studentaccountarchive` WHERE `tbl_studentaccountarchive`.`studentNumber` = '$studentNumber'";
$querydeletingpersonalinfo = "DELETE FROM `tbl_personalinfoarchive` WHERE `tbl_personalinfoarchive`.`studentNumber` = '$studentNumber'";
$querydeletingeducationalbackground = "DELETE FROM `tbl_educationalbackgroundarchive` WHERE `studentNumber` = '$studentNumber' ";
$querydeletingfamilybackground = "DELETE FROM `tbl_familybackgroundarchive` WHERE `studentNumber` = '$studentNumber' ";
$querydeletinghealthinfo = "DELETE FROM `tbl_healthinfoarchive` WHERE `studentNumber` = '$studentNumber' ";
$querydeletinginteresthobbies = "DELETE FROM `tbl_interesthobbiesarchive` WHERE `studentNumber` = '$studentNumber' ";
$querydeletingsignificantnotes = "DELETE FROM `tbl_significantnotesarchive` WHERE `studentNumber` = '$studentNumber' ";
$querydeletingtestrecord = "DELETE FROM `tbl_testrecordarchive` WHERE `studentNumber` = '$studentNumber' ";


if ($resultdeletingpersonalinfo = mysqli_query($connect, $querydeletingpersonalinfo))
{
    $message = "Successful deleting personal info";
    echo "<script type='text/javascript'>alert('$message');</script>";

}
else
{
    $message = "Error deleting personal info";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script type='text/javascript'>location.href = 'manageAccountStudentAccount.php';</script>";
}
if ($resultdeletingeducationalbackground = mysqli_query($connect, $querydeletingeducationalbackground))
{
    $message = "Successful deleting educational background";
    echo "<script type='text/javascript'>alert('$message');</script>";
    
}
else
{
    $message = "Error deleting educational background";
    echo "<script type='text/javascript'>alert('$message');</script>";
}
if ($resultdeletingfamilybackground = mysqli_query($connect, $querydeletingfamilybackground))
{
    $message = "Successful deleting family background";
    echo "<script type='text/javascript'>alert('$message');</script>";

}
else
{
    $message = "Error deleting family background";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script type='text/javascript'>location.href = 'manageAccountStudentAccount.php';</script>";
}

if ($resultdeletinghealthinfo = mysqli_query($connect, $querydeletinghealthinfo))
{
    $message = "Successful deleting health to archive";
    echo "<script type='text/javascript'>alert('$message');</script>";

}
else
{
    $message = "Error deleting health";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script type='text/javascript'>location.href = 'manageAccountStudentAccount.php';</script>";
}

if ($resultdeletingtestrecord = mysqli_query($connect, $querydeletingtestrecord))
{
    $message = "Successful deleting test record";
    echo "<script type='text/javascript'>alert('$message');</script>";

}
else
{
    $message = "Query Error moving test record";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script type='text/javascript'>location.href = 'manageAccountStudentAccount.php';</script>";
}

if ($resultdeletingsignificantnotes = mysqli_query($connect, $querydeletingsignificantnotes))
{
    $message = "Query Successful deleting significant notes";
    echo "<script type='text/javascript'>alert('$message');</script>";

}
else
{
    $message = "Query Error deleting significant notes";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script type='text/javascript'>location.href = 'manageAccountStudentAccount.php';</script>";
}

if ($resultdeletingstudentaccount = mysqli_query($connect, $querydeletingstudentaccount))
{

    $message = "Successful Deleting Student Account";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script type='text/javascript'>location.href = 'manageAccountStudentAccount.php';</script>";
    
}
else{
    $message = "Error Deleting Student Account";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script type='text/javascript'>location.href = 'manageAccountStudentAccount.php';</script>";
    
}



//redirecting to the display page (index.php in our case)

?>


