

<?php

$xml = $_POST['xmldata'];
include("connectionString.php");
if(isset($_POST['xmldata'])){
    $xmldata = $_POST['xmldata'];
    $varcharSurveyFormName = mysqli_real_escape_string($connect,$_POST['surveyFormName']);
    $varcharSurveyFormDetails = mysqli_real_escape_string($connect,$_POST['surveyFormDetails']);

    $query = "INSERT INTO `tbl_surveyform` (`surveyFormId`, `surveyFormXML`, `surveyFormStatus`, `surveyFormName`, `surveyFormDetails`) VALUES (NULL, NULL, 'Inactive', '$varcharSurveyFormName', '$varcharSurveyFormDetails')";
    if(mysqli_query($connect,$query))
    {
        echo "<script>alert('$varcharSurveyFormName');</script>";
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

        $affectedRow = 0;

        $xmlstring = simplexml_load_string($xmldata) or die("Error: Cannot create object");

        foreach ($xmlstring->children() as $row) {
            $i = 0;
            foreach ($row->field as $row2) {
                $type = $row->field[$i]['type'];
                if($type <> "header")
                {
                    $question = $row->field[$i]['label'];
                    $question = mysqli_real_escape_string($connect,$question);

                    $sql = "INSERT INTO `tbl_surveyquestion` (`surveyQuestionId`, `surveyQuestion`, `surveyFormId`) VALUES (NULL, '$question', '$surveyFormId');";

                    $result = mysqli_query($connect, $sql);

                    if (! empty($result)) {
                        $affectedRow ++;
                    } 
                    else {
                        $error_message = mysqli_error($connect) . "\n";
                    }
                }
                $i++;
            }
        }
        ?>
        <?php
        if ($affectedRow > 0) {
            $message = $affectedRow . " records inserted";
        } 
        else {
            $message = "No records inserted";
        }

    }
    else{
        echo "<script>alert('ERROR!');</script>";
        echo ("Error description: " . mysqli_error($connect));
    }
}
?>