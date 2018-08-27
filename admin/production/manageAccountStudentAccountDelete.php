<?php
//including the database connection file
include("connectionString.php");

//getting id of the data from url
if (isset($_GET['id'])) {
$studentNumber = $_GET['id'];

//deleting the row from table
//$query ="DELETE FROM tbl_destination WHERE destination_ID=$id";
//Clearing Tour Package dependencies 

$default = "0";

$querymovingstudentaccounttoarchive = "INSERT INTO `tbl_studentaccountarchive` select * from tbl_studentaccount where studentNumber = '$studentNumber'";
$querydeletingstudentaccount = "DELETE FROM `tbl_studentaccount` WHERE `tbl_studentaccount`.`studentNumber` = '$studentNumber'";
$querymovingpersonalinfotoarchive = "INSERT INTO `tbl_personalinfoarchive` select * from tbl_personalinfo where studentNumber = '$studentNumber'";
$querydeletingpersonalinfo = "DELETE FROM `tbl_personalinfo` WHERE `tbl_personalinfo`.`studentNumber` = '$studentNumber'";
$querymovingeducationalbackgroundtoarchive = "INSERT INTO `tbl_educationalbackgroundarchive` SELECT * FROM `tbl_educationalbackground` WHERE studentNumber = '$studentNumber' ";
$querydeletingeducationalbackground = "DELETE FROM `tbl_educationalbackground` WHERE `studentNumber` = '$studentNumber' ";
$querymovingfamilybackgroundtoarchive = "INSERT INTO `tbl_familybackgroundarchive` SELECT * FROM `tbl_familybackground` WHERE `studentNumber` = '$studentNumber' ";
$querydeletingfamilybackground = "DELETE FROM `tbl_familybackground` WHERE `studentNumber` = '$studentNumber' ";
$querymovinginteresthobbiestoarchive = "INSERT INTO `tbl_interesthobbiesarchive` SELECT * FROM `tbl_interesthobbies` WHERE `studentNumber` = '$studentNumber' ";
$querydeletinginteresthobbies = "DELETE FROM `tbl_interesthobbies` WHERE `studentNumber` = '$studentNumber' ";
$querymovinghealthinfotoarchive = "INSERT INTO `tbl_healthinfoarchive` SELECT * FROM `tbl_healthinfo` WHERE `studentNumber` = '$studentNumber' ";
$querydeletinghealthinfo = "DELETE FROM `tbl_healthinfo` WHERE `studentNumber` = '$studentNumber' ";
$querymovingtestrecordtoarchive = "INSERT INTO `tbl_testrecordarchive` SELECT * FROM `tbl_testrecord` WHERE `studentNumber` = '$studentNumber' ";
$querydeletingtestrecord = "DELETE FROM `tbl_testrecord` WHERE `studentNumber` = '$studentNumber' ";
$querymovingsignificantnotestoarchive = "INSERT INTO `tbl_significantnotesarchive` SELECT * FROM `tbl_significantnotes` WHERE `studentNumber` = '$studentNumber' ";
$querydeletingsignificantnotes = "DELETE FROM `tbl_significantnotes` WHERE `studentNumber` = '$studentNumber' ";


if ($resultmovingstudentaccounttoarchive = mysqli_query($connect, $querymovingstudentaccounttoarchive))
{
    // $message = "Successful moving student account!";
    // echo "<script type='text/javascript'>alert('$message');</script>";

    if ($resultmovingpersonalinfotoarchive = mysqli_query($connect, $querymovingpersonalinfotoarchive))
    {
        // $message = "Successful moving personal info";
        // echo "<script type='text/javascript'>alert('$message');</script>";

        if ($resultdeletingpersonalinfo = mysqli_query($connect, $querydeletingpersonalinfo))
        {
            // $message = "Successful deleting personal info";
            // echo "<script type='text/javascript'>alert('$message');</script>";

        }
        else
        {
            // $message = "Error deleting personal info";
            // echo "<script type='text/javascript'>alert('$message');</script>";
            echo "<script type='text/javascript'>location.href = 'manageAccountStudentAccount.php';</script>";
        }
    }
    else
    {
        // $message = "Error moving personal info to archive";
        // echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script type='text/javascript'>location.href = 'manageAccountStudentAccount.php';</script>";
    }
    if ($resultmovingeducationalbackgroundtoarchive = mysqli_query($connect, $querymovingeducationalbackgroundtoarchive))
    {
        // $message = "Successful moving educational background to archive";
        // echo "<script type='text/javascript'>alert('$message');</script>";

        if ($resultdeletingeducationalbackground = mysqli_query($connect, $querydeletingeducationalbackground))
        {
            // $message = "Successful deleting educational background";
            // echo "<script type='text/javascript'>alert('$message');</script>";

        }
        else
        {
            // $message = "Error deleting educational background";
            // echo "<script type='text/javascript'>alert('$message');</script>";
        }
    }
    else
    {
        // $message = "Error moving tbl_educationalbackground to archive";
        // echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script type='text/javascript'>location.href = 'manageAccountStudentAccount.php';</script>";
    }
    if ($resultmovingfamilybackgroundtoarchive = mysqli_query($connect, $querymovingfamilybackgroundtoarchive))
    {
        // $message = "Successful moving family background to archive";
        // echo "<script type='text/javascript'>alert('$message');</script>";

        if ($resultdeletingfamilybackground = mysqli_query($connect, $querydeletingfamilybackground))
        {
            // $message = "Successful deleting family background";
            // echo "<script type='text/javascript'>alert('$message');</script>";

        }
        else
        {
            // $message = "Error deleting family background";
            // echo "<script type='text/javascript'>alert('$message');</script>";
            echo "<script type='text/javascript'>location.href = 'manageAccountStudentAccount.php';</script>";
        }
    }
    else
    {
        // $message = "Error moving family background to archive";
        // echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script type='text/javascript'>location.href = 'manageAccountStudentAccount.php';</script>";
    }
    if ($resultmovinghealthinfotoarchive = mysqli_query($connect, $querymovinghealthinfotoarchive))
    {   
        // $message = "Successful moving health to archive";
        // echo "<script type='text/javascript'>alert('$message');</script>";

        if ($resultdeletinghealthinfo = mysqli_query($connect, $querydeletinghealthinfo))
        {
            // $message = "Successful deleting health to archive";
            // echo "<script type='text/javascript'>alert('$message');</script>";

        }
        else
        {
            // $message = "Error deleting health";
            // echo "<script type='text/javascript'>alert('$message');</script>";
            echo "<script type='text/javascript'>location.href = 'manageAccountStudentAccount.php';</script>";
        }
    }
    else
    {
        // $message = "Query Error moving health";
        // echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script type='text/javascript'>location.href = 'manageAccountStudentAccount.php';</script>";
    }

    if ($resultmovingtestrecordtoarchive = mysqli_query($connect, $querymovingtestrecordtoarchive))
    {
        // $message = "Successful moving test record";
        // echo "<script type='text/javascript'>alert('$message');</script>";

        if ($resultdeletingtestrecord = mysqli_query($connect, $querydeletingtestrecord))
        {
            // $message = "Successful deleting test record";
            // echo "<script type='text/javascript'>alert('$message');</script>";

        }
        else
        {
            // $message = "Query Error moving test record";
            // echo "<script type='text/javascript'>alert('$message');</script>";
            echo "<script type='text/javascript'>location.href = 'manageAccountStudentAccount.php';</script>";
        }
    }
    else
    {
        // $message = "Query Error deleting test record";
        // echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script type='text/javascript'>location.href = 'manageAccountStudentAccount.php';</script>";
    }
    if ($resultmovingsignificantnotestoarchive = mysqli_query($connect, $querymovingsignificantnotestoarchive))
    {   
        // $message = "Query Successful moving significant notes ";
        // echo "<script type='text/javascript'>alert('$message');</script>";

        if ($resultdeletingsignificantnotes = mysqli_query($connect, $querydeletingsignificantnotes))
        {
            // $message = "Query Successful deleting significant notes";
            // echo "<script type='text/javascript'>alert('$message');</script>";

        }
        else
        {
            // $message = "Query Error deleting significant notes";
            // echo "<script type='text/javascript'>alert('$message');</script>";
        }
        if ($resultdeletingstudentaccount = mysqli_query($connect, $querydeletingstudentaccount))
        {

            $message = "Successful Archiving Student Account";
            // echo "<script type='text/javascript'>alert('$message');</script>";
            echo "<script type='text/javascript'>location.href = 'manageAccountStudentAccount.php';</script>";
            
        }
        else{
            // $message = "Error Deleting Student Account";
            // echo "<script type='text/javascript'>alert('$message');</script>";
            echo "<script type='text/javascript'>location.href = 'manageAccountStudentAccount.php';</script>";
            
        }

    }
    else
    {
        // $message = "Query Error moving significant notes";
        // echo "<script type='text/javascript'>alert('$message');</script>";

        if ($resultdeletingstudentaccount = mysqli_query($connect, $querydeletingstudentaccount))
        {

            // $message = "Successful Deleting Student Account";
            // echo "<script type='text/javascript'>alert('$message');</script>";
            echo "<script type='text/javascript'>location.href = 'manageAccountStudentAccount.php';</script>";

        }
        else{
            // $message = "Error Deleting Student Account";
            // echo "<script type='text/javascript'>alert('$message');</script>";
            echo "<script type='text/javascript'>location.href = 'manageAccountStudentAccount.php';</script>";

        }
    }
    
}
else{
	// $message = "Error Moving Student Account";
 //    echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script type='text/javascript'>location.href = 'manageAccountStudentAccount.php';</script>";
    
}
}
else
{
    echo "<script type='text/javascript'>location.href = 'manageAccountStudentAccount.php';</script>";
}
//redirecting to the display page (index.php in our case)

?>

