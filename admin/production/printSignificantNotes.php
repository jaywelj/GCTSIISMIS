<?php
session_start();
$varcharStudentAccountNumber = $_GET['id'];
include("connectionString.php");
$sessionEmail = $_SESSION['sessionAdminEmail'];
$queryGettingAdmin = "SELECT * FROM tbl_adminaccount WHERE `adminEmail` = '$sessionEmail' LIMIT 1";
$resultGettingAdmin = mysqli_query($connect, $queryGettingAdmin); 



while($row = mysqli_fetch_array($resultGettingAdmin))  
{

    $LoggedInAdminEmail = $row['adminEmail'];
    $LoggedInAdminID = $row['adminId'];
    $LoggedInAdminFirstName = $row['adminFirstName'];
    $LoggedInAdminMiddleName = $row['adminMiddleName'];
    $LoggedInAdminLastName = $row['adminLastName'];

}
//============================================================+
// File name   : example_006.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 006 for TCPDF class
//               WriteHTML and RTL support
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: WriteHTML and RTL support
 * @author Rigel
 * @since 2008-03-04
 */


$queryInsertingPrintedSignificantNotes = "";
$resulto = mysqli_query($connect,"INSERT INTO `tbl_printedsignificantnotes` (`print_ID`, `studentNumber`, `adminID`, `datePrinted`) VALUES (NULL, '$varcharStudentAccountNumber', '$LoggedInAdminID', CURRENT_TIMESTAMP)");

$result = mysqli_query($connect,"SELECT * FROM `tbl_studentaccount`WHERE studentNumber = '$varcharStudentAccountNumber'");
                                                                        //$res = mysqli_fetch_assoc($result);
                                                                        //$varcharAccountImage = $res['admin_image'];
while($res = mysqli_fetch_array($result))
{

    $varcharStudentNumber = $res['studentNumber'];
    $varcharStudentAbout = $res['aboutStudent'];
    $varcharStudentDisplayPic = $res['studentDisplayPic'];

}
$result2 = mysqli_query($connect, "SELECT * FROM `tbl_personalinfo` WHERE studentNumber = '$varcharStudentAccountNumber' ORDER BY `infoID` DESC LIMIT 1");

while($res2 = mysqli_fetch_array($result2))
{

    $varcharStudentFirstName = $res2['firstName'];
    $varcharStudentMiddleName = $res2['middleName'];
    $varcharStudentLastName = $res2['lastName'];
    $varcharStudentCollege = $res2['collegeCode'];
    $varcharStudentCourse = $res2['courseCode'];
    $varcharStudentSex = $res2['sex'];
    $varcharStudentSexuality = $res2['sexuality'];
    $varcharStudentAge = $res2['age'];
    $varcharStudentYear = $res2['year'];
    $varcharStudentSection = $res2['section'];
    $varcharStudentCivilStatus = $res2['civilStatus'];
    $varcharStudentBirthdate = $res2['birthDate'];
    $varcharStudentHeight = $res2['height'];
    $varcharStudentWeight = $res2['weight'];
    $varcharStudentComplexion = $res2['complexion'];
    $varcharStudentBirthplace = $res2['birthPlace'];
    $varcharStudentCityHouseNumber = $res2['cityHouseNumber'];
    $varcharStudentCityCity = $res2['cityName'];
    $varcharStudentCityBarangay = $res2['cityBarangay'];

    $tempStudentCityAddress = $varcharStudentCityHouseNumber .' '. $varcharStudentCityCity .' '. $varcharStudentCityBarangay; 

    $varcharStudentProvinceHouseNumber = $res2['provinceHouseNumber'];
    $varcharStudentProvinceProvince = $res2['provinceProvincial'];
    $varcharStudentProvinceCity = $res2['provinceName'];
    $varcharStudentProvinceBarangay = $res2['provinceBarangay'];

    $tempStudentProvinceAddress = $varcharStudentProvinceHouseNumber .' '.  $varcharStudentProvinceProvince . ' ' . $varcharStudentProvinceCity . ' ' .  $varcharStudentProvinceBarangay;

    $varcharStudentEmail = $res2['email'];
    $varcharStudentMobileNum = $res2['mobileNumber'];
    $varcharStudentTelNum = $res2['telNumber'];
    $varcharStudentHSGWA = $res2['hsGWA'];
    $varcharStudentReligion = $res2['religion'];
    $varcharStudentEmployerName = $res2['employerName'];
    $varcharStudentEmployerAddress = $res2['employerAddress'];
    $varcharStudentContactPersonName = $res2['contactPersonName'];
    $varcharStudentContactPersonAdress = $res2['cpAddress'];
    $varcharStudentContactPersonRelationship = $res2['cpRelationship'];
    $varcharStudentContactPersonContactNumber = $res2['cpContactNumber'];
}

$result2point5 = mysqli_query($connect, "SELECT * FROM `tbl_educationalbackground` WHERE studentNumber = '$varcharStudentAccountNumber' ORDER BY `educationID` DESC LIMIT 1");
while($res2point5 = mysqli_fetch_array($result2point5)){
    $varcharStudentPreSchoolName = $res2point5['prepSchoolName'];
    $varcharStudentPreSchoolAddress = $res2point5['prepSchoolAddress'];
    $varcharStudentPreSchoolType = $res2point5['prepType'];
    $varcharStudentPreSchoolYearAttended = $res2point5['prepYearAttended'];
    $varcharStudentPreSchoolAwards = $res2point5['prepAwards'];
    $varcharStudentElementarySchoolName = $res2point5['elemSchoolName'];
    $varcharStudentElementarySchoolAddress = $res2point5['elemSchoolAddress'];
    $varcharStudentElementarySchoolType = $res2point5['elemType'];
    $varcharStudentElementarySchoolYearAttended = $res2point5['elemYearAttended'];
    $varcharStudentElementarySchoolAwards = $res2point5['elemAwards'];
    $varcharStudentHSSchoolName = $res2point5['hsSchoolName'];
    $varcharStudentHSSchoolAddress = $res2point5['hsSchoolAddress'];
    $varcharStudentHSSchoolType = $res2point5['hsType'];
    $varcharStudentHSSchoolYearAttended = $res2point5['hsYearAttended'];
    $varcharStudentHSSchoolAwards = $res2point5['hsAwards'];
    $varcharStudentVocationalSchoolName = $res2point5['vocSchoolName'];
    $varcharStudentVocationalSchoolAddress = $res2point5['vocSchoolAddress'];
    $varcharStudentVocationalSchoolType = $res2point5['vocType'];
    $varcharStudentVocationalSchoolYearAttended = $res2point5['vocYearAttended'];
    $varcharStudentVocationalAwards = $res2point5['vocAwards'];
    $varcharStudentCollegeSchoolName = $res2point5['collegeSchoolName'];
    $varcharStudentCollegeSchoolAddress = $res2point5['collegeSchoolAddress'];
    $varcharStudentCollegeSchoolType = $res2point5['collegeType'];
    $varcharStudentCollegeSchoolYearAttended = $res2point5['collegeYearAttended'];
    $varcharStudentCollegeSchoolAwards = $res2point5['collegeAwards'];  
    $varcharStudentNatureOfSchooling = $res2point5['natureOfSchooling'];
    $varcharStudentInterruptedWhy = $res2point5['interruptedWhy'];

}


$result3 = mysqli_query($connect, "SELECT * FROM `tbl_familybackground` WHERE studentNumber = '$varcharStudentAccountNumber' ORDER BY `familyID` DESC LIMIT 1");
while($res3 = mysqli_fetch_array($result3)){
    $varcharStudentFatherName = $res3['fatherName'];
    $varcharStudentFatherAge = $res3['fatherAge'];
    $varcharStudentFatherStatus = $res3['fatherStatus'];
    $varcharStudentFatherEducation = $res3['fatherEducation'];
    $varcharStudentFatherOccupationType = $res3['fatherOccupationType'];
    $varcharStudentFatherOccupation = $res3['fatherOccupation'];
    $varcharStudentFatherEmployerName = $res3['fatherEmployerName'];
    $varcharStudentFatherEmployerAddress = $res3['fatherEmployerAdd'];

    $varcharStudentMotherName = $res3['motherName'];
    $varcharStudentMotherAge = $res3['motherAge'];
    $varcharStudentMotherStatus = $res3['motherStatus'];
    $varcharStudentMotherEducation = $res3['motherEducation'];
    $varcharStudentMotherOccupationType = $res3['motherOccupationType'];
    $varcharStudentMotherOccupation = $res3['motherOccupation'];
    $varcharStudentMotherEmployerName = $res3['motherEmployerName'];
    $varcharStudentMotherEmployerAddress = $res3['motherEmployerAdd'];

    $varcharStudentGuardianName = $res3['guardianName'];
    $varcharStudentGuardianAge = $res3['guardianAge'];
    $varcharStudentGuardianRelation = $res3['guardianRelation'];
    $varcharStudentGuardianEducation = $res3['guardianEducation'];
    $varcharStudentGuardianOccupationType = $res3['guardianOccupationType'];
    $varcharStudentGuardianOccupation = $res3['guardianOccupation'];
    $varcharStudentGuardianEmployerName = $res3['guardianEmployerName'];
    $varcharStudentGuardianEmployerAddress = $res3['guardianEmployerAdd'];

    $varcharStudentMaritalRelationship = $res3['parentsMaritalRelation'];
    $varcharStudentNumOfChildren = $res3['noOfChildren'];
    $varcharStudentNumOfBrother = $res3['noOfBrother'];
    $varcharStudentNumOfSister = $res3['noOfSister'];
    $varcharStudentSiblingsEmployed = $res3['broSisEmployed'];
    $varcharStudentOrdinalPosition = $res3['ordinalPosition'];
    $varcharStudentSiblingSupporter = $res3['supportedByYourSibling'];
    $varcharStudentSchoolFinancer = $res3['schoolFinancer'];
    $varcharStudentWeeklyAllowance = $res3['weeklyAllowance'];
    $varcharStudentMonthlyIncome = $res3['totalMonthlyIncome'];
    $varcharStudentStudyPlace = $res3['studyPlace'];
    $varcharStudentRoomSharing = $res3['roomSharing'];
    $varcharStudentNatureOfResidence = $res3['natureOfResidence'];
}

$result4 = mysqli_query($connect, "SELECT * FROM `tbl_healthinfo` WHERE studentNumber = '$varcharStudentAccountNumber' ORDER BY `healthID` DESC LIMIT 1");
while($res4 = mysqli_fetch_array($result4)){
    $varcharStudentHealthID = $res4['healthID'];
    $varcharStudentVisionProblem = $res4['visionProblem'];
    $varcharStudentHearingProblem = $res4['hearingProblem'];
    $varcharStudentSpeechProblem = $res4['speechProblem'];
    $varcharStudentGeneralHealth = $res4['generalHealth'];
    $varcharStudentPsychiatristConsult = $res4['psychiatristConsult'];
    $varcharStudentPsychiatristWhen = $res4['psychiatristWhen'];
    $varcharStudentPsychiatristReason  = $res4['psychiatristReason'];
    $varcharStudentPsychologistConsult = $res4['psychologistConsult'];
    $varcharStudentPsychologistWhen = $res4['psychologistWhen'];
    $varcharStudentPsychologistReason = $res4['psychologistReason'];
    $varcharStudentCounselorConsult = $res4['counselorConsult'];
    $varcharStudentCounselorWhen = $res4['counselorWhen'];
    $varcharStudentCounselorReason = $res4['counselorReason'];


}
$result5 = mysqli_query($connect, "SELECT * FROM `tbl_interesthobbies` WHERE studentNumber = '$varcharStudentAccountNumber' ORDER BY `interestID` DESC LIMIT 1");
while($res5 = mysqli_fetch_array($result5)){
    $varcharStudentInterestID = $res5['interestID'];
    $varcharStudentClubName = $res5['clubName'];
    $varcharStudentFavSubject = $res5['favSubject'];
    $varcharStudentLeastFavSubject = $res5['leastFavSubject'];
    $varcharStudentHobby1 = $res5['hobby1'];
    $varcharStudentHobby2 = $res5['hobby2'];
    $varcharStudentHobby3 = $res5['hobby3'];
    $varcharStudentHobby4 = $res5['hobby4'];
    $varcharStudentInterestOrganization = $res5['interestOrganization'];
    $varcharStudentOrganizationPosition = $res5['organizationPosition'];

}



if($varcharStudentSex == "F"){
    $varcharStudentSex = "Female";
}
else if($varcharStudentSex == "M"){
    $varcharStudentSex = "Male";
}


// Include the main TCPDF library (search for installation path).
require_once('TCPDF/tcpdf.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor($varcharStudentFirstName);
$pdf->SetTitle($varcharStudentNumber);
$pdf->SetSubject('Significant Notes Printable');
$pdf->SetKeywords('TCPDF, PDF, example, test, guide');

$result = mysqli_query($connect,"SELECT * FROM `tbl_studentaccount` WHERE `studentNumber` = '$varcharStudentAccountNumber'");

while($res = mysqli_fetch_array($result))
{
    $VarcharStudentProfileImage = $res['studentDisplayPic'];
    if(empty($VarcharStudentProfileImage))
    {
        // echo '
        // <img class="img-responsive avatar-view" src="assets/img/default-user.png">
        // ';
    }
    else{
        // echo '
        // <img class="img-responsive avatar-view" src="data:image/jpeg;base64,'.base64_encode($res['studentDisplayPic']).'"  alt="Avatar" title='.$res['studentNumber'].' >
        // ';
    }
}

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_RIGHT);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

$pdf->SetPrintHeader(false);
// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
//set image scale factor 
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);  


// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
    require_once(dirname(__FILE__).'/lang/eng.php');
    $pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('dejavusans', '', 10);
$pdf->Image('images/GCTS_LOGO1.png', 70, 5, 73, 20, '', '', '', true, 100);
// add a page
$pdf->AddPage();

// $pdf->Image('', 0, 0, 50, 50, 'PNG', 'https://image.ibb.co/fwB5qz/GCTS_LOGO1.png', '', true, 150, '', false, false, 1, false, false, false);

// writeHTML($html, $ln=true, $fill=false, $reseth=false, $cell=false, $align='')
// writeHTMLCell($w, $h, $x, $y, $html='', $border=0, $ln=0, $fill=0, $reseth=true, $align='', $autopadding=true)

// create some HTML content

$html = '<h3 style="text-align:center">Polytechnic University of the Philippines</h3><h3 style="text-align:center" >OFFICE OF COUNSELING AND PSYCHOLOGICAL SERVICES</h3><h2 style="text-align:center" >Significant Notes</h2><img src="https://image.ibb.co/iNkFqz/PUPLogo88x88.png" style="position:absolute; top:0px; right:0;" /><br><h3>Student Number: '.$varcharStudentNumber.'</h3>
<h3>Name: '.$varcharStudentFirstName.' '.$varcharStudentMiddleName.' '.$varcharStudentLastName.'</h3>
';

$result7 = mysqli_query($connect, "SELECT * FROM tbl_significantnotes INNER JOIN tbl_personalinfo ON tbl_significantnotes.studentNumber = tbl_personalinfo.studentNumber WHERE tbl_personalinfo.studentNumber = '$varcharStudentAccountNumber'");
$i = 0;
while($res7 = mysqli_fetch_array($result7)){

    $varcharStudentNoteID = $res7['noteID'];
    $varcharStudentNoteDate = $res7['noteDate'];
    $varcharStudentCategoryID = $res7['categoryID'];
    $varcharStudentSubCategoryID = $res7['subCategoryID'];
    $varcharStudentNoteRemarks = $res7['noteRemarks'];
    $varcharStudentAdminAddedBy = $res7['adminId'];



    $i = $i + 1 ;

    $html .='

    Significant Note #'.$i.'

    <table>
    <tr>
    <th></th>
    <td><img src="images/logo_example.png" alt="test alt attribute" width="30" height="30" border="0" /></td>
    </tr>
    <tr>
    <th><b>Significant Note Date</b></th>
    <td><b>'.$varcharStudentNoteDate.'</b></td>
    </tr>
    <tr>
    <th><b>Note ID</b></th>
    <td>'.$varcharStudentNoteID.'</td>
    </tr>';
    $queryGettingCategoryName = "SELECT * FROM tbl_incidentcategory WHERE `categoryID` = '$varcharStudentCategoryID' ";
    $resultGettingCategoryName = mysqli_query($connect, $queryGettingCategoryName); 
    while($res = mysqli_fetch_array($resultGettingCategoryName))  
    { 
        $queryGettingSubCategoryName = "SELECT * FROM tbl_incidentsubcategory WHERE `subCategoryID` = '$varcharStudentSubCategoryID' ";
        $resultGettingSubCategoryName = mysqli_query($connect, $queryGettingSubCategoryName); 
        while($res2 = mysqli_fetch_array($resultGettingSubCategoryName))  
        { 
            $varcharStudentSubCategoryName = $res2['subCategoryName'];
            $varcharStudentCategoryName = $res['categoryName'];
            $html .='
            <tr>
            <th><b>Type Of Visitation</b></th>
            <td>'.$varcharStudentCategoryName.'</td>
            </tr>
            <tr>
            <th><b>Reason For Visitation</b></th>
            <td>'.$varcharStudentSubCategoryName.'</td>
            </tr>';
        }
    }
    $html .='
    <tr>
    <th><b>Note Remarks</b></th>
    <td>'.$varcharStudentNoteRemarks.'</td>
    </tr>';
    $queryGettingAdminID = "SELECT * FROM tbl_adminaccount WHERE `adminId` = '$varcharStudentAdminAddedBy' ";
    $resultGettingAdminID = mysqli_query($connect, $queryGettingAdminID); 
    while($res3 = mysqli_fetch_array($resultGettingAdminID))  
    { 
        $varcharStudentAdminFirstName = $res3['adminFirstName']; 
        $varcharStudentAdminLastName = $res3['adminLastName'];
        $html .='<tr>
        <th><b>Added By </b></th>
        <td>'.$varcharStudentAdminFirstName.' '.$varcharStudentAdminLastName.'</td>
        </tr>';
    }
    $html .='</table>
    <div style="text-align:center"><br />
    </div>';
}

// output the HTML content
$pdf->writeHTML($html, true, false, true, false, '');


// output some RTL HTML content
$html = '<div style="text-align:center"></div>';
$pdf->writeHTML($html, true, false, true, false, '');

// test some inline CSS
$html = '';
$pdf->writeHTML($html, true, false, true, false, '');

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
// Print a table

// add a page

// - - - - - - - - - - - - - - - - - - - - - - - - - - - - -

// reset pointer to the last page
$pdf->lastPage();

// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('example_006.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+