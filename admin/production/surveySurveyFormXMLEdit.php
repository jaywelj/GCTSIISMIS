<?php

include("connectionString.php");
if(isset($_POST['xmldataFileName'])){
    $xmldata = $_POST['xmldata'];
    $fileName = $_POST['xmldataFileName'];
    $varcharSurveyFormName = mysqli_real_escape_string($connect,$_POST['surveyFormName']);
    $varcharSurveyFormDetails = mysqli_real_escape_string($connect,$_POST['surveyFormDetails']);

    file_put_contents("assets/xml/".$fileName,$xmldata);
    $query ="UPDATE `tbl_surveyform` SET `surveyFormName` = '$varcharSurveyFormName', `surveyFormDetails` = '$varcharSurveyFormDetails'  WHERE `tbl_surveyform`.`surveyFormXML` = '$fileName'";
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