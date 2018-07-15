<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>
  <div class="jumbotron" style="background-color:#ffffff; height:100px; margin-bottom:5px; padding:0px;">
      <div style="padding:10px 0px 20px 0px;">
        <image class="navbar-left" src="images/PUPLogo88x88.png"></image>
        <div style="font-family:'Cinzel'; font-weight:bold; margin-left:100px; color:#b22222;">
          <h4 style="margin-bottom:0px;"><a href="#" style="font-weight:bold; color:#880000;">POLYTECHNIC UNIVERSITY OF THE PHILIPPINES</a></h4>
          <p style="margin-bottom: 0; font-size: 14px;">THE COUNTRY'S 1ST POLYTECHNICU</p>
          <h4 style="margin-top: 0; font-weight: bold;">GUIDANCE COUNCIL AND TESTING SERVICES</h4>
        </div>
      </div>
      <!--<form class="navbar-form navbar-right" action="/action_page.php" style="padding-top: 20px;">
        <div class="form-group">
          <input type="text" class="form-control " placeholder="Search" name="search">
        </div>
        <button type="submit" class="btn btn-default"> Submit </button>
      </form>-->
      <image src="images/hands-art.jpg" style="width:100%"></image>
  </div> 
  <body class="login">
    <div>
          <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">

        <div class="animate form login_form">

          <section class="login_content">
            <div class="jumbotron" style="width:400px; height:920px; background-color: #ffffff; padding:45px; margin: 10px; border-radius: 10px">
              <form method='post'>
                <h1>Create Account</h1>
                <div>
                  
                  <input type="text" name="txtbxStudentAccountNumber" id="txtbxStudentAccountNumber" class="form-control" placeholder="Student Number" required="" />
                </div>
                <div>
                  
                  <input type="text" name="txtbxStudentAccountFirstName" id="txtbxStudentAccountFirstName" class="form-control" placeholder="First Name" required="" />
                </div>
                <div>
                  
                  <input type="text" name="txtbxStudentAccountLastName" id="txtbxStudentAccountLastName" class="form-control" placeholder="Last Name" required="" />
                </div>
                <div>
                  
                  <input type="text" name="txtbxStudentAccountMiddleName" id="txtbxStudentAccountMiddleName" class="form-control" placeholder="Middle Name" required="" />
                </div>
                <?php

        // php select option value from database
                  include("connectionString.php");

        // mysql select query
                  $queryCourse2 = "SELECT * FROM tbl_course";

        // for method 1/
                  
                  $resultCourse2 = mysqli_query($connect, $queryCourse2);

                  ?>
                <div>
                  
                                  
                <select name="dropdownStudentAccountCourse" id="dropdownStudentAccountCourse" class="form-control">
                  <option value="NULL" selected>Select A Course</option>
                  <?php while($row = mysqli_fetch_array($resultCourse2)):;?>
                    <option value="<?php echo $row['courseCode'];?>"><?php echo $row['courseCode'];?> - <?php echo $row['courseName'];?></option>
                  <?php endwhile;?>
                  </select>
                  <br>
                </div>
                
                <div>
                  
                  <input type="text" name="txtbxStudentAccountYear" id="txtbxStudentAccountYear" class="form-control" placeholder="Year" required="" />
                </div>
                <div>
                  
                  <input type="text" name="txtbxStudentAccountSection" id="txtbxStudentAccountSection" class="form-control" placeholder="Section" required="" />
                </div>
                <div>
                  
                  <input type="password" name="txtbxStudentAccountPassword" id="txtbxStudentAccountPassword" class="form-control" placeholder="Password" required="" />
                </div>

                <div>
                  <input type="submit" class="btn btn-default" value="Register" name="btnAdd" id="btnAdd" style="float: none; margin:0px"/>
                </div>

                <?php
                if(isset($_POST['btnAdd'])) 
                {
                    //including the database connection file
                    include_once("connectionString.php");

                    $VarcharStudentAccountFirstName = mysqli_real_escape_string($connect, $_POST['txtbxStudentAccountFirstName']);
                    
                    $VarcharStudentAccountLastName = mysqli_real_escape_string($connect, $_POST['txtbxStudentAccountLastName']);
                    
                    $VarcharStudentAccountMiddleName = mysqli_real_escape_string($connect, $_POST['txtbxStudentAccountMiddleName']);

                    $VarcharStudentAccountNumber = mysqli_real_escape_string($connect, $_POST['txtbxStudentAccountNumber']);

                    $VarcharStudentAccountPassword = mysqli_real_escape_string($connect, $_POST['txtbxStudentAccountPassword']);

                    $VarcharStudentAccountCourse = mysqli_real_escape_string($connect, $_POST['dropdownStudentAccountCourse']);

                    $VarcharStudentAccountYear = mysqli_real_escape_string($connect, $_POST['txtbxStudentAccountYear']);

                    $VarcharStudentAccountSection = mysqli_real_escape_string($connect, $_POST['txtbxStudentAccountSection']);
                    
                    
                    $querySelectingCollege = "SELECT * FROM tbl_course WHERE `courseCode` = '$VarcharStudentAccountCourse'";
                    $resSelectingCollege = mysqli_query($connect, $querySelectingCollege);
                    while($res = mysqli_fetch_array($resSelectingCollege))
                                    {
                                    
                                    $varcharCourseCode = $res['courseCode'];
                                    $varcharCourseName = $res['courseName'];
                                    $varcharCollegeCode = $res['collegeCode'];
                                    
                                   }
                    $VarcharStudentAccountCollege = $varcharCollegeCode;
                    //first name validation if input is a space 
                    // checking empty fields
                    if(empty($VarcharStudentAccountFirstName) || empty($VarcharStudentAccountNumber)) 
                    {
                             
                        if(empty($VarcharStudentAccountFirstName))
                        {
                            $message = "Enter a First Name";
                            echo "<script type='text/javascript'>alert('$message');</script>";
                        }
                        if(empty($VarcharStudentAccountNumber)) 
                        {
                            $message = "Enter a valid Student Number";
                            echo "<script type='text/javascript'>alert('$message');</script>";
                        }
                        //link to the previous page
                        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
                     } 
                    else 
                    { 
                        // if all the fields are filled (not empty) 
                        //insert data to database   
                        $default = "0";

                        $queryAddStudentAccount = "INSERT INTO `tbl_studentaccount` (`studentNumber`, `studentFirstName`, `studentMiddleName`, `studentLastName`, `studentPassword`, `aboutStudent`, `studentDisplayPic`) VALUES ('$VarcharStudentAccountNumber', '$VarcharStudentAccountFirstName', '$VarcharStudentAccountMiddleName', '$VarcharStudentAccountLastName', '$VarcharStudentAccountPassword', 'Newly Registered', NULL)";

                        $queryAddPersonalInfo = "INSERT INTO `tbl_personalinfo` (`infoID`, `lastName`, `firstName`, `middleName`, `sex`, `sexuality`, `age`, `year`, `section`, `civilStatus`, `birthDate`, `height`, `weight`, `complexion`, `birthPlace`, `cityHouseNumber`, `cityProvince`, `cityName`, `cityBarangay`, `provinceHouseNumber`, `provinceProvincial`, `provinceName`, `provinceBarangay`, `telNumber`, `mobileNumber`, `email`, `hsGWA`, `religion`, `employerName`, `employerAddress`, `contactPersonName`, `cpAddress`, `cpRelationship`, `cpContactNumber`, `collegeCode`, `courseCode`, `studentNumber`) VALUES (NULL, '$VarcharStudentAccountLastName', '$VarcharStudentAccountFirstName', '$VarcharStudentAccountMiddleName', '$default', '$default', '$default', '$VarcharStudentAccountYear', '$VarcharStudentAccountSection', '$default', '9999-99-99', '$default', '$default', '$default', '$default', '$default', '$default', '$default', '$default', '$default', '$default', '$default', '$default', '$default', '$default', '$default', '$default', '$default', '$default', '$default', '$default', '$default', '$default', '$default', '$VarcharStudentAccountCollege', '$VarcharStudentAccountCourse', '$VarcharStudentAccountNumber')";

                        $queryAddEducationalBackground = "INSERT INTO `tbl_educationalbackground` (`educationID`, `prepSchoolName`, `prepSchoolAddress`, `prepType`, `prepYearAttended`, `prepAwards`, `prepImage`, `elemSchoolName`, `elemSchoolAddress`, `elemType`, `elemYearAttended`, `elemAwards`, `elemImage`, `hsSchoolName`, `hsSchoolAddress`, `hsType`, `hsYearAttended`, `hsAwards`, `hsImage`, `vocSchoolName`, `vocSchoolAddress`, `vocType`, `vocYearAttended`, `vocAwards`, `vocImage`, `collegeSchoolName`, `collegeSchoolAddress`, `collegeType`, `collegeYearAttended`, `collegeAwards`, `collegeImage`, `natureOfSchooling`, `interruptedWhy`, `studentNumber`) VALUES (NULL, '$default', '$default', '$default', '$default', '$default', NULL, '$default', '$default', '$default', '$default', '$default', NULL, '$default', '$default', '$default', '$default', '$default', NULL, '$default', '$default', '$default', '$default', '$default', NULL, '$default', '$default', '$default', '$default', '$default', NULL, '$default', '$default', '$VarcharStudentAccountNumber')";

                        $queryAddFamilyBackground = "INSERT INTO `tbl_familybackground` (`familyID`, `fatherName`, `fatherAge`, `fatherStatus`, `fatherEducation`, `fatherOccupation`, `fatherEmployerName`, `fatherEmployerAdd`, `motherName`, `motherAge`, `motherStatus`, `motherEducation`, `motherOccupation`, `motherEmployerName`, `motherEmployerAdd`, `guardianName`, `guardianAge`, `guardianRelation`, `guardianEducation`, `guardianOccupation`, `guardianEmployerName`, `guardianEmployerAdd`, `parentsMaritalRelation`, `noOfChildren`, `noOfBrother`, `noOfSister`, `broSisEmployed`, `ordinalPosition`, `supportedByYourSibling`, `schoolFinancer`, `weeklyAllowance`, `totalMonthlyIncome`, `studyPlace`, `roomSharing`, `natureOfResidence`, `studentNumber`, `motherOccupationType`, `fatherOccupationType`, `guardianOccupationType`) VALUES (NULL, '$default', '$default', '$default', '$default', '$default', '$default', '$default', '$default', '$default', '$default', '$default', '$default', '$default', '$default', '$default', '$default', '$default', '$default', '$default', '$default', '$default', '$default', '$default', '$default', '$default', '$default', '$default', '$default', '$default', '$default', '$default', '$default', '$default', '$default', '$VarcharStudentAccountNumber', '$default','$default','$default')";

                        $queryAddHealth = "INSERT INTO `tbl_healthinfo` (`healthID`, `visionProblem`, `hearingProblem`, `speechProblem`, `generalHealth`, `psychiatristConsult`, `psychiatristWhen`, `psychiatristReason`, `psychologistConsult`, `psychologistWhen`, `psychologistReason`, `counselorConsult`, `counselorWhen`, `counselorReason`, `studentNumber`) VALUES (NULL, '$default', '$default', '$default', '$default', '$default', '9999-99-99', '$default', '$default', '9999-99-99', '$default', '$default', '9999-99-99', '$default', '$VarcharStudentAccountNumber')";

                        $queryAddInterests = "INSERT INTO `tbl_interesthobbies` (`interestID`, `clubName`, `favSubject`, `leastFavSubject`, `hobby1`, `hobby2`, `hobby3`, `hobby4`, `interestOrganization`, `organizationPosition`, `studentNumber`) VALUES (NULL, '$default', '$default', '$default', '$default', '$default', '$default', '$default', '$default', '$default', '$VarcharStudentAccountNumber')";

                        $queryAddTestResults = "INSERT INTO `tbl_testrecord` (`testID`, `testDate`, `testName`, `testRawScore`, `testPercentile`, `testDescription`, `studentNumber`) VALUES (NULL, '9999-99-99', '$default', '$default', '$default', '$default', '$VarcharStudentAccountNumber')";



                        //$queryAdd = "INSERT INTO `tbl_studentaccount` (`studentNumber`, `studentFirstName`, `studentMiddleName`, `studentLastName`, `studentPassword`, `aboutStudent`, `studentDisplayPic`, `studentCoverPhoto`) VALUES ('435345643', '43534534', '345345', '3454353', '345345', NULL, NULL, NULL)";
                        if(mysqli_query($connect, $queryAddStudentAccount))
                        {   
                           $message = "Successfully Added Student Account";
                            echo "<script type='text/javascript'>alert('$message');</script>";
                            
                        }
                        else
                        {
                          $query = "SELECT * FROM tbl_studentaccount WHERE studentNumber='$VarcharStudentAccountNumber' ";
                          $result = mysqli_query($connect, $query);

                          if (mysqli_num_rows($result) == 1) {

                          $message = "Student Number Already Registered ";
                          echo "<script type='text/javascript'>alert('$message');</script>";
                          
                          echo "<script type='text/javascript'>location.href = 'clientRegister.php';</script>";
                          }
                          
                            $message = "Query Error";
                            echo "<script type='text/javascript'>alert('$message');</script>";
                            //redirectig to the display page. In our case, it is index.php
                            echo "<script type='text/javascript'>location.href = 'clientRegister.php';</script>";
                          
                        }
                        if (mysqli_query($connect, $queryAddPersonalInfo)) {
                            $message = "Successfully Added In Personal Info";
                            echo "<script type='text/javascript'>alert('$message');</script>";
                           
                        }
                        else
                        {
                          $message = "Query Error #2";
                            echo "<script type='text/javascript'>alert('$message');</script>";
                            //redirectig to the display page. In our case, it is index.php
                            echo "<script type='text/javascript'>location.href = 'clientRegister.php';</script>";
                        }

                         if (mysqli_query($connect, $queryAddEducationalBackground)) {
                            $message = "Successfully Added In Educational Background";
                            echo "<script type='text/javascript'>alert('$message');</script>";
                           
                        }
                        else
                        {
                          $message = "Query Error #3";
                            echo "<script type='text/javascript'>alert('$message');</script>";
                            //redirectig to the display page. In our case, it is index.php
                            echo "<script type='text/javascript'>location.href = 'clientRegister.php';</script>";
                        }

                         if (mysqli_query($connect, $queryAddFamilyBackground)) {
                            $message = "Successfully Added In Family Background";
                            echo "<script type='text/javascript'>alert('$message');</script>";
                           
                        }
                        else
                        {
                          $message = "Query Error #4";
                            echo "<script type='text/javascript'>alert('$message');</script>";
                            //redirectig to the display page. In our case, it is index.php
                            echo "<script type='text/javascript'>location.href = 'clientRegister.php';</script>";
                        }

                         if (mysqli_query($connect, $queryAddHealth)) {
                            $message = "Successfully Added In Health";
                            echo "<script type='text/javascript'>alert('$message');</script>";
                           
                        }
                        else
                        {
                          $message = "Query Error #5";
                            echo "<script type='text/javascript'>alert('$message');</script>";
                            //redirectig to the display page. In our case, it is index.php
                            echo "<script type='text/javascript'>location.href = 'clientRegister.php';</script>";
                        }

                         if (mysqli_query($connect, $queryAddInterests)) {
                            $message = "Successfully Added In Interest And Hobbies";
                            echo "<script type='text/javascript'>alert('$message');</script>";
                           
                        }
                        else
                        {
                          $message = "Query Error #6";
                            echo "<script type='text/javascript'>alert('$message');</script>";
                            //redirectig to the display page. In our case, it is index.php
                            echo "<script type='text/javascript'>location.href = 'clientRegister.php';</script>";
                        }

                         if (mysqli_query($connect, $queryAddTestResults)) {
                            $message = "Successfully Added In Test Results";
                            echo "<script type='text/javascript'>alert('$message');</script>";
                            
                            echo "<script type='text/javascript'>location.href = 'clientLogin.php';</script>";                           
                        }
                        else
                        {
                          $message = "Query Error #7";
                            echo "<script type='text/javascript'>alert('$message');</script>";
                            //redirectig to the display page. In our case, it is index.php
                            echo "<script type='text/javascript'>location.href = 'clientRegister.php';</script>";
                        }
                    }
                }

                ?>
                <div class="clearfix"></div>

                <div class="separator">
                  <p class="change_link">Already a member ?
                    <a href="clientLogin.php" class="to_register"> Log in </a>
                  </p>

                  <div class="clearfix"></div>
                  <br />
                </div>
              </form>
            </div>
          </section>
        </div>

        <!--<div id="register" class="animate form registration_form">
          <section class="login_content">
            <div class="jumbotron" style="width:400px; height:600px; background-color: #ffffff; padding:50px; margin: 10px; border-radius: 10px">
              <form>
                <h1>Create Accounto</h1>
                <div>
                  <input type="text" name="txtbxStudentAccountNumber" id="txtbxStudentAccountNumber" class="form-control" placeholder="Student Number" required="" />
                </div>
                <div>
                  <input type="text" name="txtbxStudentAccountFirstName" id="txtbxStudentAccountFirstName" class="form-control" placeholder="First Name" required="" />
                </div>
                <div>
                  <input type="text" name="txtbxStudentAccountLastName" id="txtbxStudentAccountLastName" class="form-control" placeholder="Last Name" required="" />
                </div>
                <div>
                  <input type="text" name="txtbxStudentAccountMiddleName" id="txtbxStudentAccountMiddleName" class="form-control" placeholder="Middle Name" required="" />
                </div>
                <div>
                  <input type="text" name="txtbxStudentAccountFirstName" id="txtbxStudentAccountFirstName" class="form-control" placeholder="First Name" required="" />
                </div>
                <div>
                  <input type="email" class="form-control" placeholder="Email" required="" />
                </div>
                <div>
                  <input type="password" class="form-control" placeholder="Password" required="" />
                </div>
                <div>
                  <a class="btn btn-default submit" href="index.php">Submit</a>
                </div>

                <div class="clearfix"></div>

                <div class="separator">
                  <p class="change_link">Already a member ?
                    <a href="#signin" class="to_register"> Log in </a>
                  </p>

                  <div class="clearfix"></div>
                  <br />
                </div>

                <label>Student Number</label>
                  <input type="text" name="txtbxStudentAccountNumber" id="txtbxStudentAccountNumber" class="form-control" />
                  <br />
                  <label>First Name</label>
                  <input type="text" name="txtbxStudentAccountFirstName" id="txtbxStudentAccountFirstName" class="form-control" />
                  <br />
                  <label>Last Name</label>
                  <input type="text" name="txtbxStudentAccountLastName" id="txtbxStudentAccountLastName" class="form-control" />
                  <br />
                  <label>Middle Name</label>
                  <input type="text" name="txtbxStudentAccountMiddleName" id="txtbxStudentAccountMiddleName" class="form-control" />
                  <br />
                  <?php

        // php select option value from database
                  include("connectionString.php");

        // mysql select query
                  $queryCollege2 = "SELECT * FROM tbl_college";
                  $queryCourse2 = "SELECT * FROM tbl_course";

        // for method 1/
                  $resultCollege2 = mysqli_query($connect, $queryCollege2);
                  $resultCourse2 = mysqli_query($connect, $queryCourse2);

                  ?>
                  <label>College</label>
                  <select name="dropdownStudentAccountCollege" id="dropdownStudentAccountCollege" class="form-control">
                  <option value="NULL" selected>Select A College</option>
                  <?php while($row = mysqli_fetch_array($resultCollege2)):;?>
                    <option value="<?php echo $row[0];?>"><?php echo $row[0];?> - <?php echo $row[1];?></option>
                  <?php endwhile;?>
                  </select>
                  <br />
                  <label>Course</label>
                  <select name="dropdownStudentAccountCourse" id="dropdownStudentAccountCourse" class="form-control">
                  <option value="NULL" selected>Select A Course</option>
                  <?php while($row = mysqli_fetch_array($resultCourse2)):;?>
                    <option value="<?php echo $row[0];?>"><?php echo $row[0];?> - <?php echo $row[1];?></option>
                  <?php endwhile;?>
                  </select>
                  <br />

                  <label>Year</label>
                  <input type="number" name="txtbxStudentAccountYear" id="txtbxStudentAccountYear" class="form-control" />
                  <br />
                  <label>Section</label>
                  <input type="number" name="txtbxStudentAccountSection" id="txtbxStudentAccountSection" class="form-control" />
                  <br />
                  <label>Password</label>
                  <input type="password" name="txtbxStudentAccountPassword" id="txtbxStudentAccountPassword" class="form-control" />
                  <br />
                  <input type="submit" name="btnAdd" id=btnAdd value="Add Account" class="btn btn-success pull-right" />
              
              </form>
            </div>
          </section>
        </div>
      </div>
    </div>-->
    <script>
    function showCheck() 
    {
      var x = document.getElementById("txtbxPassword");
      if (x.type === "password") 
      {
          x.type = "text";
      } else 
      {
          x.type = "password";
      }
    }
    </script>
  </body>
</html>

