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

$querymovingstudentaccounttoarchive = "INSERT INTO `tbl_studentaccount` select * from tbl_studentaccountarchive where studentNumber = '$studentNumber'";
$querydeletingstudentaccount = "DELETE FROM `tbl_studentaccountarchive` WHERE `tbl_studentaccountarchive`.`studentNumber` = '$studentNumber'";
$querymovingpersonalinfotoarchive = "INSERT INTO `tbl_personalinfo` select * from tbl_personalinfoarchive where studentNumber = '$studentNumber'";
$querydeletingpersonalinfo = "DELETE FROM `tbl_personalinfoarchive` WHERE `tbl_personalinfoarchive`.`studentNumber` = '$studentNumber'";
$querymovingeducationalbackgroundtoarchive = "INSERT INTO `tbl_educationalbackground` SELECT * FROM `tbl_educationalbackgroundarchive` WHERE studentNumber = '$studentNumber' ";
$querydeletingeducationalbackground = "DELETE FROM `tbl_educationalbackgroundarchive` WHERE `studentNumber` = '$studentNumber' ";
$querymovingfamilybackgroundtoarchive = "INSERT INTO `tbl_familybackground` SELECT * FROM `tbl_familybackgroundarchive` WHERE `studentNumber` = '$studentNumber' ";
$querydeletingfamilybackground = "DELETE FROM `tbl_familybackgroundarchive` WHERE `studentNumber` = '$studentNumber' ";
$querymovinghealthinfotoarchive = "INSERT INTO `tbl_healthinfo` SELECT * FROM `tbl_healthinfoarchive` WHERE `studentNumber` = '$studentNumber' ";
$querydeletinghealthinfo = "DELETE FROM `tbl_healthinfoarchive` WHERE `studentNumber` = '$studentNumber' ";
$querymovinginteresthobbiestoarchive = "INSERT INTO `tbl_interesthobbies` SELECT * FROM `tbl_interesthobbiesarchive` WHERE `studentNumber` = '$studentNumber' ";
$querydeletinginteresthobbies = "DELETE FROM `tbl_interesthobbiesarchive` WHERE `studentNumber` = '$studentNumber' ";
$querymovingsignificantnotestoarchive = "INSERT INTO `tbl_significantnotes` SELECT * FROM `tbl_significantnotesarchive` WHERE `studentNumber` = '$studentNumber' ";
$querydeletingsignificantnotes = "DELETE FROM `tbl_significantnotesarchive` WHERE `studentNumber` = '$studentNumber' ";
$querymovingtestrecordtoarchive = "INSERT INTO `tbl_testrecord` SELECT * FROM `tbl_testrecordarchive` WHERE `studentNumber` = '$studentNumber' ";
$querydeletingtestrecord = "DELETE FROM `tbl_testrecordarchive` WHERE `studentNumber` = '$studentNumber' ";



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
                echo "<script type='text/javascript'>location.href = 'manageAccountStudentAccountArchived.php';</script>";
            }
        }
        else
        {
            // $message = "Error moving personal info to archive";
            // echo "<script type='text/javascript'>alert('$message');</script>";
            echo "<script type='text/javascript'>location.href = 'manageAccountStudentAccountArchived.php';</script>";
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
            echo "<script type='text/javascript'>location.href = 'manageAccountStudentAccountArchived.php';</script>";
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
                echo "<script type='text/javascript'>location.href = 'manageAccountStudentAccountArchived.php';</script>";
            }
        }
        else
        {
            // $message = "Error moving family background to archive";
            // echo "<script type='text/javascript'>alert('$message');</script>";
            echo "<script type='text/javascript'>location.href = 'manageAccountStudentAccountArchived.php';</script>";
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
                echo "<script type='text/javascript'>location.href = 'manageAccountStudentAccountArchived.php';</script>";
            }
        }
        else
        {
            // $message = "Query Error moving health";
            // echo "<script type='text/javascript'>alert('$message');</script>";
            echo "<script type='text/javascript'>location.href = 'manageAccountStudentAccountArchived.php';</script>";
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
                echo "<script type='text/javascript'>location.href = 'manageAccountStudentAccountArchived.php';</script>";
            }
        }
        else
        {
            // $message = "Query Error deleting test record";
            // echo "<script type='text/javascript'>alert('$message');</script>";
            echo "<script type='text/javascript'>location.href = 'manageAccountStudentAccountArchived.php';</script>";
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
                echo "<script type='text/javascript'>location.href = 'manageAccountStudentAccountArchived.php';</script>";
            }
        }
        else
        {
            // $message = "Query Error moving significant notes";
            // echo "<script type='text/javascript'>alert('$message');</script>";
            echo "<script type='text/javascript'>location.href = 'manageAccountStudentAccountArchived.php';</script>";
        }
    if ($resultdeletingstudentaccount = mysqli_query($connect, $querydeletingstudentaccount))
    {

        $message = "Successfully Restored Student Account";
        echo "<script type='text/javascript'>alert('$message');</script>";
        echo "<script type='text/javascript'>location.href = 'manageAccountStudentAccountArchived.php';</script>";
       
    }
    else{
        // $message = "Error Deleting Student Account";
        // echo "<script type='text/javascript'>alert('$message');</script>";
           echo "<script type='text/javascript'>location.href = 'manageAccountStudentAccountArchived.php';</script>";
        
    }
    
}
else{
	$message = "Error Moving Student Account";
    echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script type='text/javascript'>location.href = 'manageAccountStudentAccountArchived.php';</script>";
    
}
}
else
{
    echo "<script type='text/javascript'>location.href = 'manageAccountStudentAccountArchived.php';</script>";
}
//redirecting to the display page (index.php in our case)

?>


