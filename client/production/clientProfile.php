<?php
session_start();
$varcharStudentAccountNumber = $_SESSION['sessionStudentAccountNumber'];
$varcharStudentAccountPassword = $_SESSION['sessionStudentAccountPassword'];
$_SESSION['sessionStudentAccountNumber'] = $varcharStudentAccountNumber;
$_SESSION['sessionStudentAccountPassword'] = $varcharStudentAccountPassword;
?>
<?php
include("connectionString.php");

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

while($res2 = mysqli_fetch_array($result2)){

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
  $varcharStudentEmail = $res2['email'];
  $varcharStudentCivilStatus = $res2['civilStatus'];
  $varcharStudentBirthdate = $res2['birthDate'];
  $varcharStudentHeight = $res2['height'];
  $varcharStudentWeight = $res2['weight'];
  $varcharStudentComplexion = $res2['complexion'];
  $varcharStudentBirthplace = $res2['birthPlace'];
  $varcharStudentCityHouseNumber = $res2['cityHouseNumber'];
  $varcharStudentCityProvince = $res2['cityProvince'];
  $varcharStudentCityCity = $res2['cityName'];
  $varcharStudentCityBarangay = $res2['cityBarangay'];

  $tempStudentCityAddress = $varcharStudentCityHouseNumber .' '. $varcharStudentCityProvince .' '. $varcharStudentCityCity .' '. $varcharStudentCityBarangay; 

  $varcharStudentProvinceHouseNumber = $res2['provinceHouseNumber'];
  $varcharStudentProvinceProvince = $res2['provinceProvincial'];
  $varcharStudentProvinceCity = $res2['provinceName'];
  $varcharStudentProvinceBarangay = $res2['provinceBarangay'];

  $tempStudentProvinceAddress = $varcharStudentProvinceHouseNumber .' '.  $varcharStudentProvinceProvince . ' ' . $varcharStudentProvinceCity . ' ' .  $varcharStudentProvinceBarangay;

  $varcharStudentTelNum = $res2['telNumber'];
  $varcharStudentMobileNum = $res2['mobileNumber'];
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
  $varcharStudentPreSchoolImage = $res2point5['prepImage'];
  $varcharStudentElementarySchoolName = $res2point5['elemSchoolName'];
  $varcharStudentElementarySchoolAddress = $res2point5['elemSchoolAddress'];
  $varcharStudentElementarySchoolType = $res2point5['elemType'];
  $varcharStudentElementarySchoolYearAttended = $res2point5['elemYearAttended'];
  $varcharStudentElementarySchoolAwards = $res2point5['elemAwards'];
  $varcharStudentELemntarySchoolImage = $res2point5['elemImage'];
  $varcharStudentHSSchoolName = $res2point5['hsSchoolName'];
  $varcharStudentHSSchoolAddress = $res2point5['hsSchoolAddress'];
  $varcharStudentHSSchoolType = $res2point5['hsType'];
  $varcharStudentHSSchoolYearAttended = $res2point5['hsYearAttended'];
  $varcharStudentHSSchoolAwards = $res2point5['hsAwards'];
  $varcharStudentHSSchoolImage = $res2point5['hsImage'];
  $varcharStudentVocationalSchoolName = $res2point5['vocSchoolName'];
  $varcharStudentVocationalSchoolAddress = $res2point5['vocSchoolAddress'];
  $varcharStudentVocationalSchoolType = $res2point5['vocType'];
  $varcharStudentVocationalSchoolYearAttended = $res2point5['vocYearAttended'];
  $varcharStudentVocationalAwards = $res2point5['vocAwards'];
  $varcharStudentVocationalImage = $res2point5['vocImage'];
  $varcharStudentCollegeSchoolName = $res2point5['collegeSchoolName'];
  $varcharStudentCollegeSchoolAddress = $res2point5['collegeSchoolAddress'];
  $varcharStudentCollegeSchoolType = $res2point5['collegeType'];
  $varcharStudentCollegeSchoolYearAttended = $res2point5['collegeYearAttended'];
  $varcharStudentCollegeSchoolAwards = $res2point5['collegeAwards'];
  $varcharStudentCollegeSchoolImage = $res2point5['collegeImage'];
  $varcharStudentNatureOfSchooling = $res2point5['natureOfSchooling'];
  $varcharStudentInterruptedWhy = $res2point5['interruptedWhy'];





}


$result3 = mysqli_query($connect, "SELECT * FROM `tbl_familybackground` WHERE studentNumber = '$varcharStudentAccountNumber' ORDER BY `familyID` DESC LIMIT 1");
while($res3 = mysqli_fetch_array($result3)){
  $varcharStudentFatherName = $res3['fatherName'];
  $varcharStudentFatherAge = $res3['fatherAge'];
  $varcharStudentFatherStatus = $res3['fatherStatus'];
  $varcharStudentFatherEducation = $res3['fatherEducation'];
  $varcharStudentFatherOccupation = $res3['fatherOccupation'];
  $varcharStudentFatherEmployerName = $res3['fatherEmployerName'];
  $varcharStudentFatherEmployerAddress = $res3['fatherEmployerAdd'];

  $varcharStudentMotherName = $res3['motherName'];
  $varcharStudentMotherAge = $res3['motherAge'];
  $varcharStudentMotherStatus = $res3['motherStatus'];
  $varcharStudentMotherEducation = $res3['motherEducation'];
  $varcharStudentMotherOccupation = $res3['motherOccupation'];
  $varcharStudentMotherEmployerName = $res3['motherEmployerName'];
  $varcharStudentMotherEmployerAddress = $res3['motherEmployerAdd'];

  $varcharStudentGuardianName = $res3['guardianName'];
  $varcharStudentGuardianAge = $res3['guardianAge'];
  $varcharStudentGuardianRelation = $res3['guardianRelation'];
  $varcharStudentGuardianEducation = $res3['guardianEducation'];
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
  $varcharStudentJoinedOrganization = $res5['interestOrganization'];
  $varcharStudentInterestOrganization = $res5['interestOrganization'];
  $varcharStudentOrganizationPosition = $res5['organizationPosition'];

}
$result6 = mysqli_query($connect, "SELECT * FROM `tbl_testrecord` WHERE studentNumber = '$varcharStudentAccountNumber' ORDER BY `testID` DESC LIMIT 1");
while($res6 = mysqli_fetch_array($result6)){

  $varcharStudentTestID = $res6['testID'];
  $varcharStudentTestName = $res6['testName'];
  $varcharStudentTestRawScore = $res6['testRawScore']; 
  $varcharStudentTestPercentile = $res6['testPercentile'];
  $varcharStudentTestDescription = $res6['testDescription'];


}


if($varcharStudentSex = "F"){
  $varcharStudentSex = "Female";
}
else if($varcharStudentSex = "M"){
  $varcharStudentSex = "Male";
}

$varcharStudentDisplayPic =  "getimage.php?id=2015-01438-MN-0";

?>

<!DOCTYPE html>
<html><head>
	<meta charset="utf-8" /> 
  <title>:: Guidance Counseling and Testing services ::</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">  
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="stylesheet" href="C:\xampp\htdocs\SAD\client\assets\bootstrap\css\bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- Google font here -->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
    <!-- Latest compiled and minified CSS -->

    <link rel='stylesheet' type='text/css' href="assets/bootstrap/css/bootstrap.min.css">

    <!--  Font Awesome CSS -->
    <link rel='stylesheet' type='text/css' href="assets/custom/css/font-awesome.min.css">
    <link rel='stylesheet' type='text/css' href="assets/custom/css/animate.css">


    <!--menu style-->	
    <link rel="stylesheet" href="assets/menu/styles.css">

    <!--FancyBox CSS -->
    <link rel="stylesheet" href="assets/fancybox/css/jquery.fancybox-buttons.css">
    <link rel="stylesheet" href="assets/fancybox/css/jquery.fancybox-thumbs.css">
    <link rel="stylesheet" href="assets/fancybox/css/jquery.fancybox.css">

    <!-- Custom CSS -->
    <link rel='stylesheet' type='text/css' href="assets/custom/css/style.css">    

    <!-- Latest compiled and minified JavaScript -->
    <script src="assets/custom/js/jquery-1.11.1.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>  

    <!--menu style-->	
    <script src="assets/menu/script.js"></script>

    <!--Portfolio js-->	
    <link rel="stylesheet" type="text/css" href="assets/portfolio/css/component.css" />
    <script src="assets/portfolio/js/modernizr.custom.js"></script>


    <header class="header_wrapper">
      <div class="overly_bg">
       <div class="container">
        <div class="row">
          <?php 
          $_SESSION['WebsiteState'] = "Profile";
          ?>
          <!--Navigation  Start Here-->
          <?php 
          require 'clientNavbar.php';
          ?> 
          <!--Navigation  End Here-->
          <div class="clearfix" style="height:100px;"></div>
          <div class="text-center os-animation">

            <img src="assets/img/white_icon.png" alt="">

          </div> 
          <h1 class="os-animation">Hello <br>
            <?php echo $varcharStudentFirstName.' '.$varcharStudentMiddleName.' '.$varcharStudentLastName ?> 
            <br>
            Welcome!
          </h1>

        </div>    
      </div>
    </div>
  </header>   
</head>
<body>   
	

  <!--main container start Here-->
  <main id="main_Container" class="main_container">

    <!--header Wrapper start Here-->

    <!--header Wrapper End Here-->

    <!--Middle Wrapper Start Here-->

    <!--Personal Information Wrapper Start Here-->
    <section class="about_wrapper">
      <div class="container">

        <!--  -->
        <div class="row">
          <div class="about_img os-animation">


            <figure><!--<img src="<?php echo $varcharStudentDisplayPic; ?>"  alt="">-->
              <!--<img src="<?php echo $varcharStudentDisplayPic ?>" width="250" />-->


              <?php
              $resultDisplayImage = mysqli_query($connect,"SELECT * FROM `tbl_studentaccount`WHERE studentNumber = '$varcharStudentNumber'");

              while($resDisplayImage = mysqli_fetch_array($resultDisplayImage))
              {
                $studentDisplayPic = $resDisplayImage['studentDisplayPic'];
                if(empty($studentDisplayPic))
                {
                  echo '  
                  <tr>  
                  <td>  
                  <img src="assets/img/default-user.png"  height="260" width="260" class="img-thumnail" />  
                  </td>  
                  </tr>  
                  ';  
                }
                else{
                  echo '  
                  <tr>  
                  <td>  
                  <img src="data:image/jpeg;base64,'.base64_encode($resDisplayImage['studentDisplayPic'] ).'" height="260" width="260" class="img-thumnail" />  
                  </td>  
                  </tr>  
                  ';  
                }
              }

              ?>

              <!---->
            </figure>


          </div>
          <div class="vertical_space"></div>
          <div class="col-md-3 col-sm-3 text-center os-animation">

            <p class="section_heading"><?php echo $varcharStudentFirstName.' '.$varcharStudentMiddleName.' '.$varcharStudentLastName ;?></p>
            <h3><?php echo $varcharStudentCollege.' '.$varcharStudentCourse.' '.$varcharStudentYear.'-'.$varcharStudentSection; ?> </h3>

            <div class="about_block">
             <button type="button" class="btn btn-default btn-lg" id="myBtn" onclick="window.location.href='clientProfileEdit.php'">
              <img src="assets/img/iconedit.png"  alt="" height="20" width="20">
              <p> </p>
              <p> </p>
              <p>Change Your</p>
              <p>Details</p>
            </button>


          </div>
        </div>

        <div class="col-md-9 col-sm-9 os-animation">


          <!--<h3 class="section_heading">I. Personal Information</h3>-->
          <!--<p>She is a second-year student who joined Chika's class after moving from Akihabara, Tokyo. She transferred from Otonokizaka High School. She is neighbors with her friend Chika.</p>-->
          <!--<input type="text" value="<?php echo $varcharStudentAbout; ?>" size="50" readonly>-->

          <h1 class="section_heading">"<?php echo $varcharStudentAbout;?>" </h1>

          <h4>- <?php echo $varcharStudentFirstName.' '.$varcharStudentLastName ;?></h4>
          <div class="devider">
           <div class="icon-green">
             <div class="white-icon"></div>
           </div>
         </div>
         <h3 class="section_heading">I. Personal Information</h3>
         <div class="vertical_space"></div>
         <p><span>Gender :  </span>  <?php echo $varcharStudentSex; ?> </p>
         <p><span>Sexuality :  </span>  <?php echo $varcharStudentSexuality; ?> </p>
         <p><span>Height :  </span>  <?php echo $varcharStudentHeight; ?> cm </p>
         <p><span>Weight :  </span>  <?php echo $varcharStudentWeight; ?> kg </p>
         <p><span>Complexion :  </span>  <?php echo $varcharStudentComplexion; ?> </p>
         <p><span>Age :  </span>  <?php echo $varcharStudentAge; ?> </p>
         <p><span>Civil Status :  </span>  <?php echo $varcharStudentCivilStatus; ?> </p>
         <p><span>Date Of Birth :</span> <?php echo $varcharStudentBirthdate; ?> </p>
         <p><span>Mobile Phone : </span> <?php echo $varcharStudentMobileNum; ?> </p>
         <p><span>Email : </span> <?php echo $varcharStudentEmail; ?></p>
         <p><span>Telephone : </span> <?php echo $varcharStudentTelNum; ?> </p>
         <p><span>City Address :  </span>  <?php echo $varcharStudentCityHouseNumber; echo " "; echo $varcharStudentCityBarangay; echo " ";  echo $varcharStudentCityCity.' '. $varcharStudentCityProvince; ?> </p>
         <p><span>Provincial Address :  </span>  <?php echo $varcharStudentProvinceHouseNumber.' '.$varcharStudentProvinceBarangay.' '. $varcharStudentProvinceCity.' '. $varcharStudentProvinceProvince; ?> </p>
         <p><span>Place of birth : </span> <?php echo $varcharStudentBirthplace; ?> </p>
         <p><span>Religion : </span> <?php echo $varcharStudentReligion; ?> </p>
         <p><span>Highschool General Average : </span> <?php echo $varcharStudentHSGWA; ?> </p>
       </div>


     </div>
   </div>


 </div>
</div>
</section>
<!--Personal Information Wrapper End Here-->


<!--Educational Attainment Wrapper Start Here-->
<section class="skill_wrapper">
  <div class="container">
    <div class="row">

      <h3 class="section_heading">II.Educational Attainment</h3>
      <article class="os-animation">
       <p class="text-indent-hide">html5</p>

       <div class="col-md-3 col-sm-3">
        <div class="skill_block">
          <figure> <img src="assets/img/school.jpg" alt=""></figure>
          <p>Pre School</p>
          <div class="green_block"> <?php echo $varcharStudentPreSchoolYearAttended; ?></div>
        </div>
      </div>
      <div class="col-md-8 col-sm-8 col-md-offset-1 col-sm-offset-1">
        <div class="gray_section">
          <p><span>Type :  </span>  <?php echo $varcharStudentPreSchoolType; ?> </p>
          <p><span>School Name :  </span>  <?php echo $varcharStudentPreSchoolName;  ?> </p>
          <p><span>School Addressed :  </span> <?php echo $varcharStudentPreSchoolAddress ?> </p>
          <p><span>Honors Received :  </span> <?php echo $varcharStudentPreSchoolAwards; ?> </p>
        </div>
      </div>
      <div class="clearfix"></div>
    </article>

    <article class="os-animation">
     <p class="text-indent-hide">html5</p>
     <div class="col-md-3 col-sm-3">
      <div class="skill_block">
        <figure> <img src="assets/img/school.jpg" alt=""></figure>
        <p>Elementary School</p>
        <div class="green_block"> <?php echo $varcharStudentElementarySchoolYearAttended; ?> </div>
      </div>
    </div>
    <div class="col-md-8 col-sm-8 col-md-offset-1 col-sm-offset-1">
      <div class="gray_section">
        <p><span>Type :  </span>  <?php echo $varcharStudentElementarySchoolType; ?> </p>
        <p><span>School Name :  </span>  <?php echo $varcharStudentElementarySchoolName; ?> </p>
        <p><span>School Addressed :  </span> <?php echo $varcharStudentElementarySchoolAddress; ?> </p>
        <p><span>Honors Received :  </span> <?php echo $varcharStudentElementarySchoolAwards; ?> </p>
      </div>
    </div>
    <div class="clearfix"></div>
  </article>

  <article class="os-animation">
    <p class="text-indent-hide">html5</p>
    <div class="col-md-3 col-sm-3">
      <div class="skill_block">
        <figure> <img src="assets/img/school.jpg" alt=""></figure>
        <p>High School</p>
        <div class="green_block"> <?php echo $varcharStudentHSSchoolYearAttended; ?> </div>
      </div>
    </div>
    <div class="col-md-8 col-sm-8 col-md-offset-1 col-sm-offset-1">
      <div class="gray_section">
        <p><span>Type :  </span>  <?php echo $varcharStudentHSSchoolType; ?> </p>
        <p><span>School Name :  </span> <?php echo $varcharStudentHSSchoolName; ?></p>
        <p><span>School Addressed :  </span> <?php echo $varcharStudentHSSchoolAddress; ?> </p>
        <p><span>Honors Received :  </span> <?php echo $varcharStudentHSSchoolAwards; ?></p>
      </div>
    </div>
    <div class="clearfix"></div>
  </article>


</div>
</div> 	
</section>
<!--Educational Attainment Wrapper Start Here-->     


<!--Home and family Wrapper Start Here-->
<section class="Home And Family">
 <div class="container">
   <div class="row">

     <h3 class="section_heading">III.Home And Family Background</h3>

     <article class="os-animation">
      <p class="text-indent-hide">html5</p>
      <div class="col-md-3 col-sm-3">
        <div class="skill_block">
          <figure> <!--<img src="assets/img/school.jpg" alt="">--></figure>
          <h3>Father</h3>
        </div>
      </div>
      <div class="col-md-8 col-sm-8 col-md-offset-1 col-sm-offset-1">
        <div class="gray_section">
          <p><span>Name :  </span>  <?php echo $varcharStudentFatherName; ?> </p>
          <p><span>Educational Attainment :  </span>  <?php echo $varcharStudentFatherEducation; ?> </p>
          <p><span>Age :  </span> <?php echo $varcharStudentFatherAge; ?></p>
          <p><span>State :  </span> <?php echo $varcharStudentFatherStatus; ?> </p>
          <p><span>Occupation :  </span> <?php echo $varcharStudentFatherOccupation; ?> </p>
          <p><span>Employer :  </span> <?php echo $varcharStudentFatherEmployerName; ?></p>
          <p><span>Address of employer :  </span> <?php echo $varcharStudentFatherEmployerAddress; ?> </p>
        </div>
      </div>
      <div class="clearfix"></div>
    </article>

    <article class="os-animation">
      <p class="text-indent-hide">html5</p>
      <div class="col-md-3 col-sm-3">
        <div class="skill_block">
          <figure> <!--<img src="assets/img/school.jpg" alt="">--></figure>
          <h3>Mother</h3>
        </div>
      </div>
      <div class="col-md-8 col-sm-8 col-md-offset-1 col-sm-offset-1">

        <div class="gray_section">
          <p><span>Name :  </span> <?php echo $varcharStudentMotherName; ?> </p>
          <p><span>Educational Attainment :  </span> <?php echo $varcharStudentMotherEducation; ?> </p>
          <p><span>Age :  </span> <?php echo $varcharStudentMotherAge; ?> </p>
          <p><span>State :  </span> <?php echo $varcharStudentMotherStatus; ?> </p>
          <p><span>Occupation :  </span> <?php echo $varcharStudentMotherOccupation; ?> </p>
          <p><span>Employer :  </span> <?php echo $varcharStudentMotherEmployerName; ?> </p>
          <p><span>Address of employer :  </span> <?php echo $varcharStudentMotherEmployerAddress; ?> </p>

        </div>

      </div>
      <div class="clearfix"></div>
    </article>

    <article class="os-animation">
      <p class="text-indent-hide">html5</p>
      <div class="col-md-3 col-sm-3">
        <div class="skill_block">
          <figure> <!--<img src="assets/img/school.jpg" alt="">--></figure>
          <h3>Guardian</h3>
        </div>
      </div>
      <div class="col-md-8 col-sm-8 col-md-offset-1 col-sm-offset-1">
        <div class="gray_section">
          <p><span>Name :  </span> <?php echo $varcharStudentGuardianName; ?> </p>
          <p><span>Educational Attainment :  </span> <?php echo $varcharStudentGuardianEducation; ?> </p>
          <p><span>Name of Employer :  </span> <?php echo $varcharStudentGuardianEmployerName; ?> </p>
          <p><span>Age :  </span> <?php echo $varcharStudentGuardianAge; ?> </p>
          <p><span>Relation :  </span> <?php echo $varcharStudentGuardianRelation; ?> </p>
          <p><span>Occupation :  </span> <?php echo $varcharStudentGuardianOccupation; ?> </p>
          <p><span>Employer :  </span> <?php echo $varcharStudentGuardianEmployerName; ?> </p>
          <p><span>Address of employer :  </span> <?php echo $varcharStudentGuardianEmployerAddress; ?> </p>
        </div>
      </div>
      <div class="clearfix"></div>
    </article>

    <article class="os-animation">
      <p class="text-indent-hide">html5</p>
      <div class="col-md-3 col-sm-3">
        <div class="skill_block">
          <figure> <!--<img src="assets/img/school.jpg" alt="">--></figure>
          <h3>Home State</h3>
        </div>
      </div>
      <div class="col-md-8 col-sm-8 col-md-offset-1 col-sm-offset-1">
        <div class="gray_section">
          <p><span>Parents` Marital Relationship :  </span> <?php echo $varcharStudentMaritalRelationship; ?> </p>
          <p><span>Number of children in the family including them :  </span> <?php echo $varcharStudentNumOfChildren; ?> </p>
          <p><span>Number Of Brothers :  </span>  <?php echo $varcharStudentNumOfBrother; ?> </p>
          <p><span>Number Of Sisters :  </span> <?php echo $varcharStudentNumOfSister; ?> </p>
          <p><span>Number Of Siblings gainfully employed :  </span> <?php echo $varcharStudentSiblingsEmployed; ?> </p>
          <p><span>He/She is providing unto :  </span> <?php echo $varcharStudentSiblingSupporter; ?> </p>
          <p><span>Ordinal Position :  </span> <?php echo $varcharStudentOrdinalPosition; ?> </p>

          <p><span>Financer of my schooling :  </span> <?php echo $varcharStudentSchoolFinancer; ?> </p>
          <p><span>Weekly Allowance :  </span> <?php echo $varcharStudentWeeklyAllowance; ?> </p>

          <p><span>Parent's Total Monthly Income :  </span> <?php echo $varcharStudentMonthlyIncome; ?> </p>
          <p><span>Has a quiet place to study :  </span> <?php echo $varcharStudentStudyPlace; ?> </p>

          <p><span>Shares a room with someone :  </span> <?php echo $varcharStudentRoomSharing; ?> </p>
          <p><span>Nature Of Residence :  </span> <?php echo $varcharStudentNatureOfResidence; ?> </p>
        </div>
      </div>
      <div class="clearfix"></div>
    </article>

  </div>
</div>
</section>
<!--Home And Family End Here-->

<!--Health Starts Here-->
<section class="Health">
  <div class="container">
    <div class="row">

      <h4 class="section_heading">IV. Health</h4>

      <article class="os-animation">
        <p class="text-indent-hide">html5</p>
        <div class="col-md-3 col-sm-3">
          <div class="skill_block">
            <figure> <!--<img src="assets/img/school.jpg" alt="">--></figure>
            <h3>A. Physical</h3>
          </div>
        </div>
        <div class="col-md-8 col-sm-8 col-md-offset-1 col-sm-offset-1">
          <div class="gray_section">
            <h4><span>Do You Have Problems With?  </span> </h4>
            <p><span>Vision :  </span>  <?php echo $varcharStudentVisionProblem; ?> </p>
            <p><span>Hearing :  </span> <?php echo $varcharStudentHearingProblem; ?> </p>
            <p><span>Speech :  </span> <?php echo $varcharStudentSpeechProblem; ?> </p>
            <p><span>General Health :  </span> <?php echo $varcharStudentGeneralHealth; ?> </p>
          </div>
        </div>
        <div class="clearfix"></div>
      </article>

      <article class="os-animation">
        <p class="text-indent-hide">html5</p>
        <div class="col-md-3 col-sm-3">
          <div class="skill_block">
            <figure> <!--<img src="assets/img/school.jpg" alt="">--></figure>
            <h3>B. Psychological</h3>
          </div>
        </div>
        <div class="col-md-8 col-sm-8 col-md-offset-1 col-sm-offset-1">
          <div class="gray_section">
            <h4><span>Previous Consultation  </span> </h4>
            <p><span>Psychiatrist :  </span>  <?php echo $varcharStudentPsychiatristConsult; ?> </p>
            <p><span>When :  </span> <?php echo $varcharStudentPsychiatristWhen; ?> </p>
            <p><span>For What :  </span> <?php echo $varcharStudentPsychiatristReason; ?> </p>
            <p><span>Psychologist :  </span> <?php echo $varcharStudentPsychologistConsult; ?> </p>
            <p><span>When :  </span> <?php echo $varcharStudentPsychologistWhen; ?> </p>
            <p><span>For What :  </span> <?php echo $varcharStudentPsychologistReason; ?> </p>
            <p><span>Counselor :  </span> <?php echo $varcharStudentCounselorConsult; ?> </p>
            <p><span>When :  </span> <?php echo $varcharStudentCounselorWhen; ?> </p>
            <p><span>For What :  </span> <?php echo $varcharStudentCounselorReason; ?> </p>
          </div>
        </div>
        <div class="clearfix"></div>
      </article>


    </div>
  </div>
</section>
<!--Health Ends Here-->
<!--Interests and Hobbies start here-->

<section class="Health">
  <div class="container">
    <div class="row">

      <h4 class="section_heading">V. Interests And Hobbies</h4>

      <article class="os-animation">
        <p class="text-indent-hide">html5</p>
        <div class="col-md-3 col-sm-3">
          <div class="skill_block">
            <figure> <!--<img src="assets/img/school.jpg" alt="">--></figure>
            <h3>A. Academic</h3>
          </div>
        </div>

        <div class="col-md-8 col-sm-8 col-md-offset-1 col-sm-offset-1">
          <div class="gray_section">
            <p><span>Club most likely interested in :  </span> <?php echo $varcharStudentClubName; ?> </p>
            <p><span>Favorite Subject :  </span>  <?php echo $varcharStudentFavSubject; ?> </p>
            <p><span>Least Favorite Subject :  </span> <?php echo $varcharStudentLeastFavSubject; ?> </p>
          </div>
        </div>
        <div class="clearfix"></div>
      </article>

      <article class="os-animation">
        <p class="text-indent-hide">html5</p>
        <div class="col-md-3 col-sm-3">
          <div class="skill_block">
            <figure> <!--<img src="assets/img/school.jpg" alt="">--></figure>
            <h3>B. Extra Curricular</h3>
          </div>
        </div>
        <div class="col-md-8 col-sm-8 col-md-offset-1 col-sm-offset-1">
          <div class="gray_section">
            <p><span>What are your hobbies :  </span> <?php echo $varcharStudentHobby1 . " " . $varcharStudentHobby2 ." ". $varcharStudentHobby3." ".$varcharStudentHobby4; ?> </p>
            <p><span>Organization Interest :  </span> <?php echo $varcharStudentInterestOrganization; ?> </p>
          </div>
        </div>
        <div class="clearfix"></div>
      </article>


    </div>
  </div>
</section>
<br>
<!--Interests and Hobbies end here-->

<!--Interests and Hobbies start here-->

<section class="Health">
  <div class="container">
    <div class="row">

      <h4 class="section_heading">VI. Test Results</h4>
      <?php 
      $resultTest = mysqli_query($connect, "SELECT * FROM `tbl_testrecord` WHERE studentNumber = '$varcharStudentAccountNumber' ORDER BY `testID` DESC");

      while($resTest = mysqli_fetch_array($resultTest)){
        ?>
        <?php
        echo "
        <article class='os-animation'>
        <p class='text-indent-hide'>html5</p>
        <div class='col-md-3 col-sm-3'>
        <div class='skill_block'>
        <figure></figure>

        <h3>".$resTest['testName']."</h3>
        </div>
        </div>";
        ?>
        <?php
        echo "
        <div class='col-md-8 col-sm-8 col-md-offset-1 col-sm-offset-1's>
        <div class='gray_section'>
        <p><span>Date :  </span>".$resTest['testDate']."</p>
        <p><span>RS :  </span>".$resTest['testRawScore']."   </p>
        <p><span>PR :  </span>".$resTest['testPercentile']."</p>
        </div>
        </div>
        <div class='clearfix'></div>    </article>";
        
        ?>
        
        <?php
      }
      ?>



    </div>
  </div>
</section>
<br>
<!--Interests and Hobbies end here-->

<!--contact wrapper Start Here-->
<section class="contact_wrapper">
 <div class="container">
   <div class="row">
     <p class="section_heading">Polytechnic University Of The Philippies</p>
     <div class="col-md-3 col-sm-6 os-animation">
       <div class="contact_address">
         <h3>Contact Address</h3>
         <p>Anonas, Santa Mesa, Maynila, Kalakhang Maynila</p>
         <p>Phone: (02) 335 1787</p>
         <p>Website : www.pup.edu.ph</p>
       </div>
     </div>

                             	 <!--<div class="col-md-9 col-sm-6 os-animation" data-os-animation="slideInUp" data-os-animation-delay="0s">
                                 	<h3>Contact form</h3>
                                    <div class="form-group">
                                    	<input type="text" class="form-control" placeholder="Name">
                                        <input type="email"  class="form-control" placeholder="Email">
                                        <input type="tel"   class="form-control" placeholder="Phone">
                                        <textarea  class="form-control textarea" rows="5" placeholder="Message"></textarea>
                                        <button type="submit" class="submit">Send</button>
                                    </div>
                                  </div>-->

                                </div>
                              </div>
                            </section>     		
                            <!--contact wrapper Start Here-->     

                            <!--Middle Wrapper End Here-->

                            <!--Footer Wrapper Start Here-->       
            <!-- <footer class="footer_wrapper">
                 <div class="container">
                    <div class="row os-animation" data-os-animation="slideInLeft" data-os-animation-delay="0s">
                         <a href="" class="social-icon"><i class="fa fa-facebook"></i></a>
                         <a href="" class="social-icon"><i class="fa fa-twitter"></i></a>
                         <a href="" class="social-icon"><i class="fa fa-linkedin"></i></a>
                         <p>© 2015 - All rights reserved | Developed by NavThemes</p>
                    </div>
                 </div>
               </footer>-->
               <!--Footer Wrapper End Here-->    

             </main>
             <!--main container End Here-->



             <!--PRE LOADER HERE-->
             <div id="pre-loader">
              <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
              </div>
            </div> 


            <!-- Portfolio js -->
            <script>
              $(document).ready(function(){
                $("#editBtn").click(function(){
                  $("#modalForEdit").modal();
                });
              });
            </script>


            <script src="assets/portfolio/js/masonry.pkgd.min.js"></script>
            <script src="assets/portfolio/js/imagesloaded.js"></script>
            <script src="assets/portfolio/js/classie.js"></script>
            <script src="assets/portfolio/js/AnimOnScroll.js"></script>
            <script>
             new AnimOnScroll( document.getElementById( 'grid' ), {
              minDuration : 0.4,
              maxDuration : 0.7,
              viewportFactor : 0.2
            } );
          </script>


          <!-- FancyBox -->
          <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

          <script src="assets/fancybox/js/jquery.fancybox.js"></script>
          <script src="assets/fancybox/js/jquery.fancybox-buttons.js"></script>
          <script src="assets/fancybox/js/jquery.fancybox-thumbs.js"></script>
          <script src="assets/fancybox/js/jquery.easing-1.3.pack.js"></script>
          <script src="assets/fancybox/js/jquery.mousewheel-3.0.6.pack.js"></script>

          <script type="text/javascript">
            $(document).ready(function() {
              $(".fancybox").fancybox();
            });
          </script>




          <!-- Custom js -->
          <script src="assets/custom/js/custom.js"></script>


          <!-- Way Point -->
          <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.4/waypoints.min.js"></script>



        </body>
        </html>