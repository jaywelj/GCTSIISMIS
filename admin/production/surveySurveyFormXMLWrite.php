<?php
$xml = $_POST['xmldata'];


include("connectionString.php");
if(isset($_POST['xmldata'])){
    $xmldata = $_POST['xmldata'];
    
    $query = "INSERT INTO `tbl_surveyform` (`surveyFormId`, `surveyFormXML`, `surveyFormDetails`) VALUES (NULL, NULL, '//comment')";
    if(mysqli_query($connect,$query))
    {
        echo "<script>alert('SUCCESS!');</script>";
    }
    else{
        echo "<script>alert('ERROR!');</script>";
        echo ("Error description: " . mysqli_error($connect));
    }
    $surveyFormId = $connect->insert_id;
    $fileName = "surveyFormXML".$surveyFormId.".xml";
    file_put_contents("assets/xml/".$fileName,$xmldata);
    $query ="UPDATE `tbl_surveyform` SET `surveyFormXML` = '$fileName' WHERE `tbl_surveyform`.`surveyFormId` = '$surveyFormId'";
    if(mysqli_query($connect,$query))
    {
        echo "<script>alert('SUCCESS!');</script>";
    }
    else{
        echo "<script>alert('ERROR!');</script>";
        echo ("Error description: " . mysqli_error($connect));
    }
}
?>