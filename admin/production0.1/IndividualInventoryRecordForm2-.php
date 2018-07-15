<!DOCTYPE html>
<?php
include("connectionString.php");
$varcharStudentNumber = $_GET["id"];
$queryStudentAccount = "SELECT * FROM tbl_studentaccount WHERE studentNumber='$varcharStudentNumber'";
$arrayStudentAccount = mysqli_query($connect, $queryStudentAccount);
while($res = mysqli_fetch_array($arrayStudentAccount))
{
  $varcharFirstName = $res['studentFirstName'];
  $varcharMiddleName = $res['studentMiddleName'];
  $varcharLastName = $res['studentLastName'];
}
$queryPersonalInfo = "SELECT * FROM tbl_personalinfo WHERE studentNumber='$varcharStudentNumber'";
$arrayPersonalInfo = mysqli_query($connect, $queryPersonalInfo);
while($res = mysqli_fetch_array($arrayPersonalInfo))
{
  $vacharYear = $res['year'];
  $vacharSection = $res['section'];
  $vacharCourse = $res['courseCode'];
}
?>
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

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">

    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  </head>
<div class="jumbotron" style="background-color:#ffffff; height:100px; margin-bottom:5px; padding:7px;" >
      <image class="navbar-left" src="images/PUPLogo88x88.png"></image>
      <div style="font-family:'Cinzel'; font-weight:bold; margin-left:100px; color:#b22222;">
        <h4 style="margin-bottom:0px;"><a href="#" style="font-weight:bold; color:#880000;">POLYTECHNIC UNIVERSITY OF THE PHILIPPINES</a></h4>
        <p style="margin-bottom: 0; font-size: 14px;">THE COUNTRY'S 1ST POLYTECHNICU</p>
        <h4 style="margin-top: 0; font-weight: bold;">GUIDANCE COUNCIL AND TESTING SERVICES</p>
      </div>
      <!--<form class="navbar-form navbar-right" action="/action_page.php" style="padding-top: 20px;">
        <div class="form-group">
          <input type="text" class="form-control " placeholder="Search" name="search">
        </div>
        <button type="submit" class="btn btn-default"> Submit </button>
      </form>-->
  </div>
  <body class="nav-md">
    <div class="container body" id="div1">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><i class="fa fa-paw"></i><span>Gentelella Alela!</span></a>
            </div>
            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.jpg" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>John Doe</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="index.php">Dashboard</a></li>
                      <li><a href="index2.php">Dashboard2</a></li>
                      <li><a href="index3.php">Dashboard3</a></li>
                    </ul>
                  <li><a><i class="fa fa-table"></i> Individual Inventory Record <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="IndividualInventoryRecordLHS.php">Laboratory High School</a></li>
                      <li><a href="IndividualInventoryRecordSHS.php">Senior High School</a></li>
                      <li><a href="IndividualInventoryRecordCollege.php">College</a></li>
                      <li><a href="IndividualInventoryRecordGraduate.php">Graduate School</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i>Tally<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="Tallytables.php">Laboratory High School</a></li>
                      <li><a href="Tallytables.php">Senior High Schoool</a></li>
                      <li><a href="Tallytables.php">College</a></li>
                      <li><a href="Tallytables.php">Graduate School</a></li>
                    </ul>
                  </li>
                  <!--<li><a><i class="fa fa-edit"></i> IIR Form <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="form.php">General Form</a></li>
                      <li><a href="form_advanced.php">Advanced Components</a></li>
                      <li><a href="form_validation.php">Form Validation</a></li>
                      <li><a href="form_wizards.php">Form Wizard</a></li>
                      <li><a href="form_upload.php">Form Upload</a></li>
                      <li><a href="form_buttons.php">Form Buttons</a></li>
                    </ul>
                  </li>-->
                  <li><a><i class="fa fa-desktop"></i> Manage Accounts <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="manageAccountAdminAccount.php">Admin Account</a></li>
                      <li><a href="manageAccountStaffAccount.php">Staff Account</a></li>
                      <li><a href="manageAccountStudentAccount.php">Student Account</a></li>
                      <!--<li><a href="general_elements.php">General Elements</a></li>
                      <li><a href="media_gallery.php">Media Gallery</a></li>
                      <li><a href="typography.php">Typography</a></li>
                      <li><a href="icons.php">Icons</a></li>
                      <li><a href="glyphicons.php">Glyphicons</a></li>
                      <li><a href="widgets.php">Widgets</a></li>
                      <li><a href="invoice.php">Invoice</a></li>
                      <li><a href="inbox.php">Inbox</a></li>
                      <li><a href="calendar.php">Calendar</a></li>-->
                    </ul>
                  </li>
                  
                </ul>
              </div>
              <!--
              <div class="menu_section">
                <h3>Live On</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="e_commerce.php">E-commerce</a></li>
                      <li><a href="projects.php">Projects</a></li>
                      <li><a href="project_detail.php">Project Detail</a></li>
                      <li><a href="contacts.php">Contacts</a></li>
                      <li><a href="profile.php">Profile</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="page_403.php">403 Error</a></li>
                      <li><a href="page_404.php">404 Error</a></li>
                      <li><a href="page_500.php">500 Error</a></li>
                      <li><a href="plain_page.php">Plain Page</a></li>
                      <li><a href="login.php">Login Page</a></li>
                      <li><a href="pricing_tables.php">Pricing Tables</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-sitemap"></i> Multilevel Menu <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="#level1_1">Level One</a>
                        <li><a>Level One<span class="fa fa-chevron-down"></span></a>
                          <ul class="nav child_menu">
                            <li class="sub_menu"><a href="level2.php">Level Two</a>
                            </li>
                            <li><a href="#level2_1">Level Two</a>
                            </li>
                            <li><a href="#level2_2">Level Two</a>
                            </li>
                          </ul>
                        </li>
                        <li><a href="#level1_2">Level One</a>
                        </li>
                    </ul>
                  </li>                  
                  <li><a href="javascript:void(0)"><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a></li>
                </ul>
              </div>-->
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.php">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.jpg" alt="">John Doe
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="AdminProfile.php"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Manage Individual Inventory Record</h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for...">
                    <span class="input-group-btn">
                              <button class="btn btn-default" type="button">Go!</button>
                          </span>
                  </div>
                </div>
              </div>
            </div>
            <div class="clearfix"></div>

            <div class="row">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Individual Inventory Record Form<small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">


                    <!-- Smart Wizard -->
                    <div id="wizard" class="form_wizard wizard_horizontal">
                      <ul class="wizard_steps" style="margin-left: -30px;">
                        <li>
                          <a href="#step-1">
                            <span class="step_no">1</span>
                            <span class="step">
                              Step 1<br />
                              <small>Personal<br>Information</small>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-2">
                            <span class="step_no">2</span>
                            <span class="step_descr">
                              Step 2<br />
                              <small>Educational<br>Background</small>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-3">
                            <span class="step_no">3</span>
                            <span class="step_descr">
                              Step 3<br />
                              <small>Home/Family<br>Background</small>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-4">
                            <span class="step_no">4</span>
                            <span class="step_descr">
                              Step 4<br />
                              <small>Health<br>Background</small>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-5">
                            <span class="step_no">5</span>
                            <span class="step_descr">
                              Step 5<br />
                              <small>Interest and<br>Hobby</small>
                            </span>
                          </a>
                        </li>
                        <li>
                          <a href="#step-6">
                            <span class="step_no">6</span>
                            <span class="step_descr">
                              Step 5<br />
                              <small>Test Results</small>
                            </span>
                          </a>
                        </li>
                      </ul>
                        <form method="post">
                          <div id="step-1">
                            <form class="form-horizontal form-label-left">
                              <span class="section"> <h1>Personal Information </h1></span>
                              <span class="section" style="margin-left:90px;">I. Basic Information</span>

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="first-name">First Name <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                  <input type="text" id="txtbxFirstName" name="txtbxFirstName" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $varcharFirstName; ?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3" >Middle Name / Initial</label>
                                <div class="col-md-6 col-sm-6">
                                  <input class="form-control col-md-7 col-xs-12" type="text" id="txtbxMiddleName" name="txtbxMiddleName" value="<?php echo $varcharMiddleName; ?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="last-name">Last Name <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                  <input type="text" id="txtbxLastName" name="txtbxLastName" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $varcharLastName; ?>">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3">Gender</label>
                                <div class="col-md-6 col-sm-6">
                                  <div id="gender2" class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                      <input type="radio" name="gender" value="Male"> Male 
                                    </label>
                                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                      <input type="radio" name="gender" value="female" checked=""> Female
                                    </label>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Sexuality(Sexual Orientation)</label>
                                <div class="col-md-2 col-sm-2 col-xs-2">
                                  <select class="select2_single form-control" tabindex="-1">
                                    <option></option>
                                    <option disabled="" selected=""></option>
                                    <option value="public">Heterosexual</option>
                                    <option value="public">Homosexual</option>
                                    <option value="public">Bisexual</option>
                                    <option value="public">Pansexual</option>
                                    <option value="public">Demisexual</option>
                                    <option value="public">Queer</option>
                                    <option value="public">Asexual</option>
                                    <option value="public">Others</option>
                                  </select>
                                </div>
                                <label class="control-label col-md-1 col-sm-1" for="first-name">Others: <span class="required">*</span>
                                </label>
                                <div class="col-md-3 col-sm-3">
                                  <input type="text" id="txtbxOthersSexuality" name="txtbxOthersSexuality" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3">Age</label>
                                <div class="col-md-2 col-sm-2">
                                  <input class="form-control col-md-7 col-xs-12" type="number" id="txtbxAge" name="txtbxAge">
                                </div>
                                <label class="control-label col-md-1 col-sm-1">Date Of Birth </label>
                                <div class="col-md-3 col-sm-3">
                                  <input class="date-picker form-control col-md-7 col-xs-12" required="required" type="date" id="dateDateOfBirth" name="dateDateOfBirth">
                                </div>  
                              </div>
                              <div class="form-group">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3">Place of Birth</label>
                                <div class="col-md-6 col-sm-6">
                                  <input class="form-control col-md-7 col-xs-12" type="text" id="txtbxPlaceOfBirth" name="txtbxPlaceOfBirth">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Civil Status</label>
                                <div class="col-md-2 col-sm-2 col-xs-2">
                                  <select class="select2_single form-control" tabindex="-1">
                                    <option></option>
                                    <option disabled="" selected=""></option>
                                    <option value="public">Single</option>
                                    <option value="public">Married</option>
                                    <option value="public">Separated</option>
                                    <option value="public">Widowed</option>
                                  </select>
                                </div>
                                <label class="control-label col-md-1 col-sm-1" for="first-name">Others: <span class="required">*</span>
                                </label>
                                <div class="col-md-3 col-sm-3">
                                  <input type="text" id="txtbxOthersCivilStatus" name="txtbxOthersCivilStatus" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Religion</label>
                                <div class="col-md-2 col-sm-2 col-xs-2">
                                  <select class="select2_single form-control" tabindex="-1">
                                    <option></option>
                                    <option disabled="" selected=""></option>
                                    <option value="public">Aglipayan</option>
                                    <option value="public">Buddhism</option>
                                    <option value="public">Born Again Christian</option>
                                    <option value="public">Baptist</option>
                                    <option value="public">Catholic</option>
                                    <option value="public">Jehovas Witnesses</option>
                                    <option value="public">Iglesia ni Cristo</option>
                                    <option value="public">Islam</option>
                                    <option value="public">Protestant</option>
                                    <option value="public">Seventh Day Adventist</option>
                                    <option value="public">Mormons (Latter Day Saints)</option>
                                    <option value="public">Methodist</option>
                                    <option value="public">Others</option>
                                  </select>
                                </div>
                                <label class="control-label col-md-1 col-sm-1" for="first-name">Others: <span class="required">*</span>
                                </label>
                                <div class="col-md-3 col-sm-3">
                                  <input type="text" id="txtbxOthersReligion" name="txtbxOthersReligion" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3">Height</label>
                                <div class="col-md-2 col-sm-2">
                                  <input id="middle-name2" class="form-control col-md-7 col-xs-12" type="text" id="txtbxHeight" name="txtbxHeight" >
                                </div>
                                <label for="middle-name" class="control-label col-md-1 col-sm-1">Weight</label>
                                <div class="col-md-2 col-sm-2">
                                  <input id="middle-name2" class="form-control col-md-7 col-xs-12" type="text" id="txtbxWeight" name="txtbxWeight" >
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Complexion</label>
                                <div class="col-md-2 col-sm-2 col-xs-2">
                                  <select class="select2_single form-control" tabindex="-1">
                                    <option></option>
                                    <option disabled="" selected=""></option>
                                    <option value="public">White Skin</option>
                                    <option value="public">Fair Skin</option>
                                    <option value="public">Medium Skin</option>
                                    <option value="public">Olive Skin</option>
                                    <option value="public">Tan Brown</option>
                                    <option value="public">Black Brown</option>
                                    <option value="public">Dark Skin</option>
                                  </select>
                                </div>
                                <label class="control-label col-md-1 col-sm-1" for="first-name">Others: <span class="required">*</span>
                                </label>
                                <div class="col-md-3 col-sm-3">
                                  <input type="text" id="txtbxOthersComplexion" name="txtbxOthersComplexion" required="required" class="form-control col-md-7 col-xs-12" >
                                </div>
                              </div>
                              <span class="section" style="margin-left:90px;">II. Student Information</span>
                              <div class="form-group">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3">Student Number</label>
                                <div class="col-md-6 col-sm-6">
                                  <input disabled="disabled" class="form-control col-md-7 col-xs-12" type="text" id="txtbxStudentNumber" name="txtbxStudentNumber" value="<?php echo $varcharStudentNumber; ?>">
                                </div>
                              </div>
                              <!--<div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Course</label>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                  <select class="select2_single form-control" tabindex="-1" name="dropdownCourse" id="dropdownCourse" >
                                    <option groupid=" " value="<?php echo $vacharCourse; ?>" ><?php echo $vacharCourse; ?></option>
                                    <option groupid="110" value="AB-PHILO">AB-PHILO&nbsp;&nbsp; - BACHELOR OF ARTS IN PHILOSOPHY</option>
                                    <option groupid="110" value="ABE">ABE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR OF ARTS IN ENGLISH</option>
                                    <option groupid="0" value="ABE-INE">ABE-INE&nbsp;&nbsp;&nbsp; - BACHELOR OF ARTS IN ENGLISH</option>
                                    <option groupid="110" value="ABF">ABF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BATSILYER NG ARTES SA FILIPINOLOHIYA</option>
                                    <option groupid="122" value="ABF-INE">ABF-INE&nbsp;&nbsp;&nbsp; - BATSILYER NG ARTES SA FILIPINOLOHIYA (INE)</option>
                                    <option groupid="114" value="ABH">ABH&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR OF ARTS IN HISTORY</option>
                                    <option groupid="110" value="ABTA">ABTA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR OF ARTS IN THEATER ARTS</option>
                                    <option groupid="9" value="BABRC">BABRC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR OF ARTS IN BROADCAST COMMUNICATION</option>
                                    <option groupid="122" value="BABRC-INE">BABRC-INE&nbsp; - BACHELOR OF ARTS IN BROADCAST COMMUNICATION(INE)</option>
                                    <option groupid="17" value="BABRCOUMN">BABRCOUMN&nbsp; - BACHELOR OF ARTS IN BROADCAST COMMUNICATION(OU MANILA)</option>
                                    <option groupid="9" value="BACR">BACR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR OF ARTS IN COMMUNICATION RESEARCH</option>
                                    <option groupid="9" value="BADPR">BADPR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR IN ADVERTISING AND PUBLIC RELATIONS</option>
                                    <option groupid="122" value="BADPR-INE">BADPR-INE&nbsp; - BACHELOR IN ADVERTISING AND PUBLIC RELATIONS(INE)</option>
                                    <option groupid="114" value="BAH">BAH&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR OF ARTS IN HISTORY</option>
                                    <option groupid="9" value="BAJ">BAJ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR OF ARTS IN JOURNALISM</option>
                                    <option groupid="122" value="BAJ-INE">BAJ-INE&nbsp;&nbsp;&nbsp; - BACHELOR OF ARTS IN JOURNALISM(INE)</option>
                                    <option groupid="13" value="BAS">BAS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR IN APPLIED STATISTICS</option>
                                    <option groupid="109" value="BBF">BBF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR IN BANKING AND FINANCE</option>
                                    <option groupid="122" value="BBF-INE">BBF-INE&nbsp;&nbsp;&nbsp; - BACHELOR IN BANKING AND FINANCE(INE)</option>
                                    <option groupid="99" value="BBF-T">BBF-T&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR IN BANKING AND FINANCE - TRANSFEREES</option>
                                    <option groupid="109" value="BBFMSM">BBFMSM&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR IN BANKING AND FINANCE-MINOR IN SERVICE MANAGEMENT</option>
                                    <option groupid="9" value="BBRC">BBRC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR IN BROADCAST COMMUNICATION</option>
                                    <option groupid="9" value="BBRC (FS)">BBRC (FS)&nbsp; - BACHELOR IN BROADCAST COMMUNICATION (FOREIGN STUDENT)</option>
                                    <option groupid="17" value="BBRCOUMN">BBRCOUMN&nbsp;&nbsp; - BACHELOR IN BROADCAST COMMUNICATION (OU MANILA)</option>
                                    <option groupid="11" value="BBTE-BT">BBTE-BT&nbsp;&nbsp;&nbsp; - BACHELOR IN BUSINESS TEACHER EDUCATION MAJOR IN BUSINESS TECHNOLOGY</option>
                                    <option groupid="0" value="BBTE-T">BBTE-T&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR IN BUSINESS TEACHER EDUCATION - TRANSFEREES</option>
                                    <option groupid="11" value="BBTEBTL">BBTEBTL&nbsp;&nbsp;&nbsp; - BACHELOR IN BUSINESS TEACHER EDUCATION-MAJOR IN BUSINESS TEACHER AND LIVELIHOOD EDUCATION</option>
                                    <option groupid="11" value="BBTEIT">BBTEIT&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR IN BUSINESS TEACHER EDUCATION-MAJOR IN INFORMATION TECHNOLOGY EDUCATION</option>
                                    <option groupid="114" value="BCOOP">BCOOP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR IN COOPERATIVES</option>
                                    <option groupid="114" value="BCOOP-CBM">BCOOP-CBM&nbsp; - BACHELOR IN COOPERATIVES - COOPERATIVE BUSINESS MANAGEMENT</option>
                                    <option groupid="114" value="BCOOP-ECD">BCOOP-ECD&nbsp; - BACHELOR IN COOPERATIVES - EDUCATION AND COMMUNITY DEVELOPMENT</option>
                                    <option groupid="114" value="BCOOP-FMA">BCOOP-FMA&nbsp; - BACHELOR IN COOPERATIVES - FINANCIAL MANAGEMENT AND ACCOUNTING</option>
                                    <option groupid="122" value="BCOOPCBM-INE">BCOOPCBM-INE - BACHELOR IN COOPERATIVES - COOPERATIVE BUSINESS MANAGEMENT(INE)</option>
                                    <option groupid="122" value="BCOOPECD-INE">BCOOPECD-INE - BACHELOR IN COOPERATIVES - EDUCATION AND COMMUNITY DEVELOPMENT(INE)</option>
                                    <option groupid="122" value="BCOOPFMA-INE">BCOOPFMA-INE - BACHELOR IN COOPERATIVES - FINANCIAL MANAGEMENT AND ACCOUNTING(INE)</option>
                                    <option groupid="9" value="BCR">BCR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR IN COMMUNICATION RESEARCH</option>
                                    <option groupid="0" value="BCR-T">BCR-T&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR IN COMMUNICATION RESEARCH-TRANSFEREE</option>
                                    <option groupid="11" value="BEED">BEED&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR OF ELEMENTARY EDUCATION</option>
                                    <option groupid="9" value="BJ">BJ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR IN JOURNALISM</option>
                                    <option groupid="11" value="BLIS">BLIS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR IN LIBRARY AND INFORMATION SCIENCE</option>
                                    <option groupid="111" value="BOA">BOA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR IN OFFICE ADMINISTRATION</option>
                                    <option groupid="111" value="BOA-CT">BOA-CT&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR IN OFFICE ADMINISTRATION Major in CORPORATE TRANSCRIPTION </option>
                                    <option groupid="111" value="BOA-LT">BOA-LT&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR IN OFFICE ADMINISTRATION Major in LEGAL TRANSCRIPTION</option>
                                    <option groupid="111" value="BOA-MT">BOA-MT&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR IN OFFICE ADMINISTRATION Major in MEDICAL TRANSCRIPTION</option>
                                    <option groupid="0" value="BOA-T">BOA-T&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR IN OFFICE ADMINISTRATION - TRANSFEREE</option>
                                    <option groupid="113" value="BPA">BPA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR IN PUBLIC ADMINISTRATION</option>
                                    <option groupid="122" value="BPA-INE">BPA-INE&nbsp;&nbsp;&nbsp; - BACHELOR IN PUBLIC ADMINISTRATION(INE)</option>
                                    <option groupid="113" value="BPAG">BPAG&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR IN PUBLIC ADMINISTRATION &amp; GOVERNANCE</option>
                                    <option groupid="12" value="BPE">BPE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR IN PHYSICAL EDUCATION</option>
                                    <option groupid="113" value="BPS">BPS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR IN POLITICAL SCIENCE</option>
                                    <option groupid="122" value="BPS-INE">BPS-INE&nbsp;&nbsp;&nbsp; - BACHELOR IN POLITICAL SCIENCE(INE)</option>
                                    <option groupid="0" value="BPS-T">BPS-T&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR IN POLITICAL SCIENCE - TRANSFEREES</option>
                                    <option groupid="2" value="BS-ARCHI">BS-ARCHI&nbsp;&nbsp; - BACHELOR OF SCIENCE IN ARCHITECTURE</option>
                                    <option groupid="6" value="BS-ECE">BS-ECE&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR OF SCIENCE IN ELECTRONICS ENGINEERING</option>
                                    <option groupid="109" value="BSA">BSA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR OF SCIENCE IN ACCOUNTANCY</option>
                                    <option groupid="99" value="BSA-T">BSA-T&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR OF SCIENCE IN ACCOUNTANCY - TRANSFEREES</option>
                                    <option groupid="13" value="BSAMATH">BSAMATH&nbsp;&nbsp;&nbsp; - BACHELOR OF SCIENCE IN APPLIED MATHEMATICS MAJOR IN ACTUARIAL MATHEMATICS</option>
                                    <option groupid="111" value="BSBA-HRDM">BSBA-HRDM&nbsp; - BACHELOR OF SCIENCE IN BUSINESS ADMINISTRATION MAJOR IN HUMAN RESOURCE DEVELOPMENT MANAGEMENT</option>
                                    <option groupid="99" value="BSBA-HRDM-T">BSBA-HRDM-T - BACHELOR OF SCIENCE IN BUSINESS ADMINISTRATION MAJOR IN HUMAN RESOURCES DEVELOPMENT MANAGEMENT  - TRANSFEREE</option>
                                    <option groupid="111" value="BSBA-MM">BSBA-MM&nbsp;&nbsp;&nbsp; - BACHELOR OF SCIENCE IN BUSINESS ADMINISTRATION Major in MARKETING MANAGEMENT</option>
                                    <option groupid="111" value="BSBA-MM(FS">BSBA-MM(FS - BACHELOR OF SCIENCE IN BUSINESS ADMINISTRATION MAJOR IN MARKETING MANAGEMENT(FOREIGN STUDENT)</option>
                                    <option groupid="122" value="BSBAHRDM-INE">BSBAHRDM-INE - BACHELOR OF SCIENCE IN BUSINESS ADMINISTRATION MAJOR IN HUMAN RESOURCE DEVELOPMENT MANAGEMENT(INE)</option>
                                    <option groupid="111" value="BSBAHRDMMSM">BSBAHRDMMSM - BACHELOR OF SCIENCE IN BUSINESS ADMINISTRATION MAJOR IN HUMAN RESOURCE DEVELOPMENT MANAGEMENT MINOR IN SERVICE MANAGEMENT FOR BUSINESS PROCESS OUTSOURCING</option>
                                    <option groupid="122" value="BSBAMM-INE">BSBAMM-INE - BACHELOR OF SCIENCE IN BUSINESS ADMINISTRATION MAJOR IN MARKETING MANAGEMENT(INE)</option>
                                    <option groupid="111" value="BSBAMMMSM">BSBAMMMSM&nbsp; - BACHELOR OF SCIENCE IN BUSINESS ADMINISTRATION MAJOR IN MARKETING MANAGEMENT MINOR IN SERVICE MANAGEMENT</option>
                                    <option groupid="13" value="BSBIO">BSBIO&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR OF SCIENCE IN BIOLOGY</option>
                                    <option groupid="0" value="BSBIO-T">BSBIO-T&nbsp;&nbsp;&nbsp; - BACHELOR OF SCIENCE IN BIOLOGY - TRANSFEREE</option>
                                    <option groupid="6" value="BSCE">BSCE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR OF SCIENCE IN CIVIL ENGINEERING</option>
                                    <option groupid="13" value="BSCHEM">BSCHEM&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR OF SCIENCE IN CHEMISTRY</option>
                                    <option groupid="6" value="BSCOE">BSCOE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR OF SCIENCE IN COMPUTER ENGINEERING</option>
                                    <option groupid="122" value="BSCOE-INE">BSCOE-INE&nbsp; - BACHELOR OF SCIENCE IN COMPUTER ENGINEERING(INE)</option>
                                    <option groupid="114" value="BSCP">BSCP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR OF SCIENCE IN CLINICAL PSYCHOLOGY</option>
                                    <option groupid="0" value="BSCP-T">BSCP-T&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR OF SCIENCE IN CLINICAL PSYCHOLOGY - TRANSFEREE</option>
                                    <option groupid="112" value="BSCS">BSCS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR OF SCIENCE IN COMPUTER SCIENCE</option>
                                    <option groupid="122" value="BSCS-INE">BSCS-INE&nbsp;&nbsp; - BACHELOR OF SCIENCE IN COMPUTER SCIENCE(INE)</option>
                                    <option groupid="99" value="BSCS-T">BSCS-T&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR OF SCIENCE IN COMPUTER SCIENCE - TRANSFEREES</option>
                                    <option groupid="114" value="BSE">BSE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR OF SCIENCE IN ECONOMICS</option>
                                    <option groupid="6" value="BSECE">BSECE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR OF SCIENCE IN ELECTRONICS AND COMMUNICATIONS ENGINEERING</option>
                                    <option groupid="0" value="BSECE-T">BSECE-T&nbsp;&nbsp;&nbsp; - BACHELOR OF SCIENCE IN ELECTRONICS COMMUNICATION  - TRANSFEREE</option>
                                    <option groupid="11" value="BSED">BSED&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR OF SECONDARY EDUCATION</option>
                                    <option groupid="11" value="BSEDEN">BSEDEN&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR OF SECONDARY EDUCATION MAJOR IN ENGLISH</option>
                                    <option groupid="11" value="BSEDFL">BSEDFL&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR OF SECONDARY EDUCATION MAJOR IN FILIPINO</option>
                                    <option groupid="11" value="BSEDMT">BSEDMT&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR OF SECONDARY EDUCATION MAJOR IN MATHEMATICS</option>
                                    <option groupid="11" value="BSEDSS">BSEDSS&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR OF SECONDARY EDUCATION MAJOR IN SOCIAL STUDIES</option>
                                    <option groupid="6" value="BSEE">BSEE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR OF SCIENCE IN ELECTRICAL ENGINEERING</option>
                                    <option groupid="111" value="BSEM">BSEM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR OF SCIENCE IN ENTREPRENEURIAL MANAGEMENT</option>
                                    <option groupid="17" value="BSEMOUMN">BSEMOUMN&nbsp;&nbsp; - BACHELOR OF SCIENCE IN ENTREPRENEURIAL MANAGEMENT (OU MANILA)</option>
                                    <option groupid="122" value="BSENT-INE">BSENT-INE&nbsp; - BACHELOR OF SCIENCE IN ENTREPRENEURSHIP(INE)</option>
                                    <option groupid="17" value="BSENTOUMN">BSENTOUMN&nbsp; - BACHELOR OF SCIENCE IN ENTREPRENEURSHIP (OU MANILA)</option>
                                    <option groupid="111" value="BSENTREP">BSENTREP&nbsp;&nbsp; - BACHELOR OF SCIENCE IN ENTREPRENEURSHIP</option>
                                    <option groupid="13" value="BSFT">BSFT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR OF SCIENCE IN FOOD TECHNOLOGY</option>
                                    <option groupid="14" value="BSHM">BSHM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR OF SCIENCE IN HOSPITALITY MANAGEMENT </option>
                                    <option groupid="122" value="BSHM-INE">BSHM-INE&nbsp;&nbsp; - BACHELOR OF SCIENCE IN HOSPITALITY MANAGEMENT(INE)</option>
                                    <option groupid="14" value="BSHRM">BSHRM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR OF SCIENCE IN HOTEL AND RESTAURANT MANAGEMENT</option>
                                    <option groupid="99" value="BSHRM-T">BSHRM-T&nbsp;&nbsp;&nbsp; - BACHELOR OF SCIENCE IN HOTEL AND RESTAURANT MANAGEMENT - TRANSFEREES</option>
                                    <option groupid="2" value="BSID">BSID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR OF SCIENCE IN INTERIOR DESIGN</option>
                                    <option groupid="6" value="BSIE">BSIE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR OF SCIENCE IN INDUSTRIAL ENGINEERING</option>
                                    <option groupid="122" value="BSIE-INE">BSIE-INE&nbsp;&nbsp; - BACHELOR OF SCIENCE IN INDUSTRIAL ENGINEERING(INE)</option>
                                    <option groupid="114" value="BSIOP">BSIOP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR OF SCIENCE IN INDUSTRIAL AND ORGANIZATIONAL PSYCHOLOGY</option>
                                    <option groupid="112" value="BSIT">BSIT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY</option>
                                    <option groupid="99" value="BSIT(SAMPLE)">BSIT(SAMPLE) - BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY (SAMPLE ONLY)</option>
                                    <option groupid="122" value="BSIT-INE">BSIT-INE&nbsp;&nbsp; - BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY(INE)</option>
                                    <option groupid="13" value="BSMATH">BSMATH&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR OF SCIENCE IN MATHEMATICS</option>
                                    <option groupid="6" value="BSME">BSME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR OF SCIENCE IN MECHANICAL ENGINEERING</option>
                                    <option groupid="99" value="BSME-T">BSME-T&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR OF SCIENCE IN MECHANICAL ENGINEERING - TRANSFEREES</option>
                                    <option groupid="13" value="BSND">BSND&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR OF SCIENCE IN NUTRITION AND DIETETICS</option>
                                    <option groupid="111" value="BSOA">BSOA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR OF SCIENCE IN OFFICE ADMINISTRATION</option>
                                    <option groupid="111" value="BSOACT">BSOACT&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR OF SCIENCE IN OFFICE ADMINISTRATION MAJOR IN CORPORATE TRANSCRIPTION</option>
                                    <option groupid="122" value="BSOACT-INE">BSOACT-INE - BACHELOR OF SCIENCE IN OFFICE ADMINISTRATION MAJOR IN CORPORATE TRANSCRIPTION(INE)</option>
                                    <option groupid="111" value="BSOALT">BSOALT&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR OF SCIENCE IN OFFICE ADMINISTRATION MAJOR IN LEGAL TRANSCRIPTION</option>
                                    <option groupid="122" value="BSOALT-INE">BSOALT-INE - BACHELOR OF SCIENCE IN OFFICE ADMINISTRATION MAJOR IN LEGAL TRANSCRIPTION(INE)</option>
                                    <option groupid="111" value="BSOAMT">BSOAMT&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR OF SCIENCE IN OFFICE ADMINISTRATION MAJOR IN MEDICAL TRANSCRIPTION</option>
                                    <option groupid="122" value="BSOAMT-INE">BSOAMT-INE - BACHELOR OF SCIENCE IN OFFICE ADMINISTRATION MAJOR IN MEDICAL TRANSCRIPTION(INE)</option>
                                    <option groupid="113" value="BSPE">BSPE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR OF SCIENCE IN POLITICAL ECONOMY</option>
                                    <option groupid="13" value="BSPHY">BSPHY&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR OF SCIENCE IN PHYSICS</option>
                                    <option groupid="114" value="BSPSY">BSPSY&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR OF SCIENCE IN PSYCHOLOGY</option>
                                    <option groupid="6" value="BSREM">BSREM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR OF SCIENCE IN RAILWAY ENGINEERING &amp; MANAGEMENT</option>
                                    <option groupid="114" value="BSS">BSS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR OF SCIENCE IN SOCIOLOGY</option>
                                    <option groupid="122" value="BSS-INE">BSS-INE&nbsp;&nbsp;&nbsp; - BACHELOR OF SCIENCE IN SOCIOLOGY(INE)</option>
                                    <option groupid="14" value="BSTM">BSTM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR OF SCIENCE IN TOURISM  MANAGEMENT</option>
                                    <option groupid="122" value="BSTM-INE">BSTM-INE&nbsp;&nbsp; - BACHELOR OF SCIENCE IN TOURISM MANAGEMENT(INE)</option>
                                    <option groupid="14" value="BTM">BTM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR IN TRANSPORTATION MANAGEMENT</option>
                                    <option groupid="35" value="CE-MAIN">CE-MAIN&nbsp;&nbsp;&nbsp; - CROSS-ENROLMENT MAIN CAMPUS</option>
                                    <option groupid="12" value="COACHING">COACHING&nbsp;&nbsp; - COACHING - SPORTS EVENTS</option>
                                    <option groupid="115" value="COLLTECH">COLLTECH&nbsp;&nbsp; - COLLEGE OF TECHNOLOGY</option>
                                    <option groupid="115" value="CXD-CT">CXD-CT&nbsp;&nbsp;&nbsp;&nbsp; - CANCELLED SLOT (COLLEGE OF TECHNOLOGY)</option>
                                    <option groupid="99" value="CXD-MN">CXD-MN&nbsp;&nbsp;&nbsp;&nbsp; - CANCELLED SLOT</option>
                                    <option groupid="121" value="CXD-SHS">CXD-SHS&nbsp;&nbsp;&nbsp; - CANCELLED SLOTS - SENIOR HIGH SCHOOL</option>
                                    <option groupid="28" value="DBA">DBA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - DOCTOR IN BUSINESS ADMINISTRATION</option>
                                    <option groupid="115" value="DCEMT">DCEMT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - DIPLOMA IN COMPUTER ENGINEERING MANAGEMENT TECHNOLOGY</option>
                                    <option groupid="115" value="DCET">DCET&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - DIPLOMA IN COMPUTER ENGINEERING TECHNOLOGY</option>
                                    <option groupid="115" value="DECEMT">DECEMT&nbsp;&nbsp;&nbsp;&nbsp; - DIPLOMA IN ELECTRONICS AND COMMUNICATIONS ENGINEERING MANAGEMENT TECHNOLOGY</option>
                                    <option groupid="115" value="DECET">DECET&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - DIPLOMA IN ELECTRONICS  ENGINEERING TECHNOLOGY</option>
                                    <option groupid="115" value="DEEMT">DEEMT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - DIPLOMA IN ELECTRICAL ENGINEERING MANAGEMENT TECHNOLOGY</option>
                                    <option groupid="115" value="DEET">DEET&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - DIPLOMA IN ELECTRICAL ENGINEERING TECHNOLOGY</option>
                                    <option groupid="28" value="DEM">DEM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - DOCTOR IN EDUCATIONAL MANAGEMENT</option>
                                    <option groupid="115" value="DFPMT">DFPMT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - DIPLOMA IN FOOD PROCESSING MANAGEMENT TECHNOLOGY</option>
                                    <option groupid="115" value="DHRMT">DHRMT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - DIPLOMA IN HOTEL AND RESTAURANT MANAGEMENT TECHNOLOGY</option>
                                    <option groupid="115" value="DICMT">DICMT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - DIPLOMA IN INFORMATION COMMUNICATION MANAGEMENT TECHNOLOGY</option>
                                    <option groupid="115" value="DICT">DICT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - DIPLOMA IN INFORMATION COMMUNICATION TECHNOLOGY</option>
                                    <option groupid="115" value="DMEMT">DMEMT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - DIPLOMA IN MECHANICAL ENGINEERING MANAGEMENT TECHNOLOGY</option>
                                    <option groupid="115" value="DMET">DMET&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - DIPLOMA IN MECHANICAL ENGINEERING TECHNOLOGY</option>
                                    <option groupid="115" value="DOMT">DOMT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - DIPLOMA IN OFFICE MANAGEMENT TECHNOLOGY</option>
                                    <option groupid="115" value="DOMT-LOM">DOMT-LOM&nbsp;&nbsp; - DIPLOMA IN OFFICE MANAGEMENT TECHNOLOGY WITH SPECIALIZATION IN LEGAL OFFICE MANAGEMENT</option>
                                    <option groupid="115" value="DOMT-MOM">DOMT-MOM&nbsp;&nbsp; - DIPLOMA IN OFFICE MANAGEMENT TECHNOLOGY WITH SPECIALIZATION IN MEDICAL OFFICE MANAGEMENT</option>
                                    <option groupid="28" value="DPA">DPA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - DOCTOR IN PUBLIC ADMINISTRATION</option>
                                    <option groupid="115" value="DTMT">DTMT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - DIPLOMA IN TOURISM MANAGEMENT TECHNOLOGY</option>
                                    <option groupid="36" value="ES-MN">ES-MN&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - ENTRANCE SCHOLAR (MAIN CAMPUS)</option>
                                    <option groupid="0" value="FOR SHIFTING-MN">FOR SHIFTING-MN - FOR SHIFTING</option>
                                    <option groupid="28" value="GS">GS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - GRADUATE SCHOOL</option>
                                    <option groupid="32" value="HD-MAIN">HD-MAIN&nbsp;&nbsp;&nbsp; - HONORABLY DISMISSED - MAIN</option>
                                    <option groupid="23" value="HS">HS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - SECONDARY CURRICULUM</option>
                                    <option groupid="23" value="HS-K12">HS-K12&nbsp;&nbsp;&nbsp;&nbsp; - SECONDARY CURRICULUM</option>
                                    <option groupid="40" value="JD">JD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - JURIS DOCTOR</option>
                                    <option groupid="40" value="LLB">LLB&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR OF LAWS</option>
                                    <option groupid="31" value="LOA">LOA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - ON LEAVE OF ABSENCE</option>
                                    <option groupid="40" value="LW">LW&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - LAW SCHOOL</option>
                                    <option groupid="28" value="MA-TESL">MA-TESL&nbsp;&nbsp;&nbsp; - MASTER OF ARTS MAJOR IN TEACHING ENGLISH AS A SECOND LANGUAGE</option>
                                    <option groupid="28" value="MAE">MAE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - MASTER OF ARTS IN ECONOMICS(THESIS)</option>
                                    <option groupid="28" value="MAELT">MAELT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - MASTER OF ARTS IN ENGLISH LANGUAGE TEACHING</option>
                                    <option groupid="28" value="MAF">MAF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - MASTER OF ARTS IN FILIPINO</option>
                                    <option groupid="28" value="MAS">MAS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - MASTER IN APPLIED STATISTICS</option>
                                    <option groupid="28" value="MAS-OS">MAS-OS&nbsp;&nbsp;&nbsp;&nbsp; - MASTER IN APPLIED STATISTICS MAJOR IN OFFICIAL STATISTICS</option>
                                    <option groupid="28" value="MAS-SM">MAS-SM&nbsp;&nbsp;&nbsp;&nbsp; - MASTER IN APPLIED STATISTICS MAJOR IN STATISTICAL METHODS</option>
                                    <option groupid="28" value="MBA">MBA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - MASTER IN BUSINESS ADMINISTRATION</option>
                                    <option groupid="28" value="MBA-ENT">MBA-ENT&nbsp;&nbsp;&nbsp; - MASTER IN BUSINESS ADMINISTRATION W/ SPECIALIZATION IN ENTREPRENEURSHIP</option>
                                    <option groupid="28" value="MBA-FIN">MBA-FIN&nbsp;&nbsp;&nbsp; - MASTER IN BUSINESS ADMINISTRATION W/ SPECIALIZIATION IN FINANCIAL MANAGEMENT</option>
                                    <option groupid="28" value="MBA-GBA">MBA-GBA&nbsp;&nbsp;&nbsp; - MASTER IN BUSINESS ADMINISTRATION W/ SPECIALIZATION IN GENERAL BUSINESS ADMINISTRATION</option>
                                    <option groupid="28" value="MBA-HRM">MBA-HRM&nbsp;&nbsp;&nbsp; - MASTER IN BUSINESS ADMINISTRATION W/ SPECIALIZATION IN HUMAN RESOURCE MANAGEMENT</option>
                                    <option groupid="122" value="MBA-INE">MBA-INE&nbsp;&nbsp;&nbsp; - MASTER IN BUSINESS ADMINISTRATION(INE)</option>
                                    <option groupid="28" value="MBA-MKTG">MBA-MKTG&nbsp;&nbsp; - MASTER IN BUSINESS ADMINISTRATION W/ SPECIALIZATION IN MARKETING MANAGEMENT</option>
                                    <option groupid="28" value="MBA-PBG">MBA-PBG&nbsp;&nbsp;&nbsp; - MASTER  IN BUSINESS ADMINISTRATION (PAGIBIG)</option>
                                    <option groupid="122" value="MBAFM-INE">MBAFM-INE&nbsp; - MASTER IN BUSINESS ADMINISTRATION - MAJOR IN FINANCIAL MANAGEMENT(INE)</option>
                                    <option groupid="122" value="MBAHRM-INE">MBAHRM-INE - MASTER IN BUSINESS ADMINISTRATION - MAJOR IN HUMAN RESOURCE MANAGEMENT(INE)</option>
                                    <option groupid="122" value="MBAMM-INE">MBAMM-INE&nbsp; - MASTER IN BUSINESS ADMINISTRATION - MAJOR IN MARKETING MANAGEMENT(INE)</option>
                                    <option groupid="28" value="MBE">MBE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - MASTER IN BUSINESS EDUCATION</option>
                                    <option groupid="28" value="MC">MC&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - MASTER IN COMMUNICATION</option>
                                    <option groupid="28" value="MC-BJ">MC-BJ&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - MASTER IN COMMUNICATION W/ SPECIALIZATION IN BROADCAST JOURNALISM</option>
                                    <option groupid="28" value="MC-CM">MC-CM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - MASTER IN COMMUNICATION W/ SPECIALIZATION IN COMMUNICATION MANAGEMENT</option>
                                    <option groupid="122" value="MC-INE">MC-INE&nbsp;&nbsp;&nbsp;&nbsp; - MASTER IN COMMUNICATION(INE)</option>
                                    <option groupid="34" value="MCOUMN">MCOUMN&nbsp;&nbsp;&nbsp;&nbsp; - MASTER IN COMMUNICATION (OU-MANILA)</option>
                                    <option groupid="34" value="MCOUMN-FS">MCOUMN-FS&nbsp; - MASTER IN COMMUNICATION (OU-MANILA)</option>
                                    <option groupid="28" value="ME">ME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - MASTER IN ECONOMICS(NON-THESIS)</option>
                                    <option groupid="28" value="MELT">MELT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - MASTER IN ENGLISH LANGUAGE TEACHING</option>
                                    <option groupid="0" value="MEM">MEM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - MEM SAMPLE</option>
                                    <option groupid="28" value="MEM-AS">MEM-AS&nbsp;&nbsp;&nbsp;&nbsp; - MASTER IN EDUCATIONAL MANAGEMENT W/ SPECIALIZATION IN ADMINISTRATION AND SUPERVISION</option>
                                    <option groupid="28" value="MEM-CC">MEM-CC&nbsp;&nbsp;&nbsp;&nbsp; - MASTER IN EDUCATIONAL MANAGEMENT W/ SPECIALIZATION IN CURRICULUM AND CONSTRUCTION</option>
                                    <option groupid="28" value="MEM-CI">MEM-CI&nbsp;&nbsp;&nbsp;&nbsp; - MASTER IN EDUCATIONAL MANAGEMENT W/ SPECIALIZATION IN CURRICULUM AND INSTRUCTION</option>
                                    <option groupid="28" value="MEM-ELM">MEM-ELM&nbsp;&nbsp;&nbsp; - MASTER IN EDUCATIONAL MANAGEMENT WITH SPECIALIZATION IN EDUCATIONAL LEADERSHIP AND MANAGEMENT</option>
                                    <option groupid="34" value="MEM-FOR">MEM-FOR&nbsp;&nbsp;&nbsp; - MASTER IN EDUCATIONAL MANAGEMENT</option>
                                    <option groupid="28" value="MEM-IL">MEM-IL&nbsp;&nbsp;&nbsp;&nbsp; - MASTER IN EDUCATIONAL MANAGEMENT WITH SPECIALIZATION IN INSTRUCTIONAL LEADERSHIP</option>
                                    <option groupid="122" value="MEM-INE">MEM-INE&nbsp;&nbsp;&nbsp; - MASTER IN EDUCATIONAL MANAGEMENT(INE)</option>
                                    <option groupid="34" value="MEMOUMN">MEMOUMN&nbsp;&nbsp;&nbsp; - MASTER IN EDUCATIONAL MANAGEMENT (OU-MANILA)</option>
                                    <option groupid="34" value="MEMOUMN-FS">MEMOUMN-FS - MASTER IN EDUCATIONAL MANAGEMENT (OU-MANILA)</option>
                                    <option groupid="28" value="MF">MF&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - MASTER IN FILIPINO</option>
                                    <option groupid="28" value="MIEM">MIEM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - MASTER IN INDUSTRIAL ENGINEERING AND MANAGEMENT</option>
                                    <option groupid="28" value="MIT">MIT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - MASTER IN INFORMATION TECHNOLOGY</option>
                                    <option groupid="28" value="MIT-CA">MIT-CA&nbsp;&nbsp;&nbsp;&nbsp; - MASTER IN INFORMATION TECHNOLOGY W/ SPECIALIZATION IN COMMUNICATION ADMINISTRATION</option>
                                    <option groupid="28" value="MIT-DA">MIT-DA&nbsp;&nbsp;&nbsp;&nbsp; - MASTER IN INFORMATION TECHNOLOGY W/ SPECIALIZATION IN DATABASE ADMINISTRATION</option>
                                    <option groupid="122" value="MIT-INE">MIT-INE&nbsp;&nbsp;&nbsp; - MASTER IN INFORMATION TECHNOLOGY(INE)</option>
                                    <option groupid="28" value="MIT-MIS">MIT-MIS&nbsp;&nbsp;&nbsp; - MASTER IN INFORMATION TECHNOLOGY W/ SPECIALIZATION IN MANAGING INFORMATION SYSTEM</option>
                                    <option groupid="28" value="MIT-NA">MIT-NA&nbsp;&nbsp;&nbsp;&nbsp; - MASTER IN INFORMATION TECHNOLOGY W/ SPECIALIZATION IN NETWORK ADMINISTRATION</option>
                                    <option groupid="17" value="MITOUCM">MITOUCM&nbsp;&nbsp;&nbsp; - MASTER IN INFORMATION TECHNOLOGY</option>
                                    <option groupid="28" value="MLIS-AL">MLIS-AL&nbsp;&nbsp;&nbsp; - MASTER IN LIBRARY AND INFORMATION SCIENCE W/ SPECIALIZATION IN ACADEMIC LIBRARIES</option>
                                    <option groupid="28" value="MLIS-PL">MLIS-PL&nbsp;&nbsp;&nbsp; - MASTER IN LIBRARY AND INFORMATION SCIENCE W/ SPECIALIZATION IN PUBLIC LIBRARIES</option>
                                    <option groupid="28" value="MLIS-SCHL">MLIS-SCHL&nbsp; - MASTER IN LIBRARY AND INFORMATION SCIENCE W/ SPECIALIZATION IN SCHOOL LIBRARIES</option>
                                    <option groupid="28" value="MLIS-SPL">MLIS-SPL&nbsp;&nbsp; - MASTER IN LIBRARY AND INFORMATION SCIENCE W/ SPECIALIZATION IN SPECIAL LIBRARIES</option>
                                    <option groupid="28" value="MME">MME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - MASTER IN MATHEMATICS EDUCATION</option>
                                    <option groupid="28" value="MME-CT">MME-CT&nbsp;&nbsp;&nbsp;&nbsp; - MASTER IN MATHEMATICS EDUCATION W/ SPECIALIZATION IN COLLEGE TEACHING</option>
                                    <option groupid="28" value="MME-HST">MME-HST&nbsp;&nbsp;&nbsp; - MASTER IN MATHEMATICS EDUCATION W/ SPECIALIZATION IN HIGH SCHOOL TEACHING</option>
                                    <option groupid="28" value="MP-CP">MP-CP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - MASTER IN PSYCHOLOGY W/ SPECIALIZATION IN CLINICAL PSYCHOLOGY</option>
                                    <option groupid="28" value="MP-IP">MP-IP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - MASTER IN PSYCHOLOGY W/ SPECIALIZATION IN INDUSTRIAL PSYCHOLOGY</option>
                                    <option groupid="28" value="MP-SP">MP-SP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - MASTER IN PSYCHOLOGY W/ SPECIALIZATION IN SCHOOL PSYCHOLOGY</option>
                                    <option groupid="28" value="MPA">MPA&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - MASTER IN PUBLIC ADMINISTRATION</option>
                                    <option groupid="28" value="MPA-DEPED">MPA-DEPED&nbsp; - MASTER IN PUBLIC ADMINISTRATION (DEPED)</option>
                                    <option groupid="28" value="MPA-DOST">MPA-DOST&nbsp;&nbsp; - MASTER IN PUBLIC ADMINISTRATION (DOST)</option>
                                    <option groupid="122" value="MPA-INE">MPA-INE&nbsp;&nbsp;&nbsp; - MASTER IN PUBLIC ADMINISTRATION(INE)</option>
                                    <option groupid="34" value="MPAOUMN">MPAOUMN&nbsp;&nbsp;&nbsp; - MASTER IN PUBLIC ADMINISTRATION (OU-MANILA)</option>
                                    <option groupid="17" value="MPAOUMN-DOLE">MPAOUMN-DOLE - MASTER IN PUBLIC ADMINISTRATION (DOLE)</option>
                                    <option groupid="28" value="MPES">MPES&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - MASTER IN PHYSICAL EDUCATION AND SPORTS</option>
                                    <option groupid="28" value="MS-CR">MS-CR&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - MASTER IN COMMUNICATION W/ SPECIALIZATION IN COMMUNICATION RESEARCH</option>
                                    <option groupid="34" value="MSCM">MSCM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - MASTER OF SCIENCE IN CONSTRUCTION MANAGEMENT</option>
                                    <option groupid="17" value="MSCM-LOC">MSCM-LOC&nbsp;&nbsp; - MASTER OF SCIENCE IN CONSTRUCTION MANAGEMENT (LOCAL)</option>
                                    <option groupid="28" value="MSE-COE">MSE-COE&nbsp;&nbsp;&nbsp; - MASTER OF SCIENCE IN ENGINEERING W/ OPTION IN COMPUTER ENGINEERING</option>
                                    <option groupid="28" value="MSE-ECE">MSE-ECE&nbsp;&nbsp;&nbsp; - MASTER OF SCIENCE IN ENGINEERING W/ OPTION IN ELECTRONICS AND COMMUNICATION ENGINEERING</option>
                                    <option groupid="28" value="MSE-EE">MSE-EE&nbsp;&nbsp;&nbsp;&nbsp; - MASTER OF SCIENCE IN ENGINEERING W/ OPTION IN EARTHQUAKE ENGINEERING</option>
                                    <option groupid="28" value="MSE-SE">MSE-SE&nbsp;&nbsp;&nbsp;&nbsp; - MASTER OF SCIENCE IN ENGINEERING W/ OPTION IN STRUCTURAL ENGINEERING</option>
                                    <option groupid="28" value="MSE-TE">MSE-TE&nbsp;&nbsp;&nbsp;&nbsp; - MASTER OF SCIENCE IN ENGINEERING W/ OPTION IN TRANSPORTATION ENGINEERING</option>
                                    <option groupid="28" value="MSIEM">MSIEM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - MASTER OF SCIENCE IN INDUSTRIAL ENGINEERING AND MANAGEMENT</option>
                                    <option groupid="28" value="MSIT">MSIT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - MASTER OF SCIENCE IN INFORMATION TECHNOLOGY</option>
                                    <option groupid="28" value="MSIT-CA">MSIT-CA&nbsp;&nbsp;&nbsp; - MASTER OF SCIENCE IN INFORMATION TECHNOLOGY W/ SPECIALIZATION IN COMMUNICATION ADMINISTRATION</option>
                                    <option groupid="28" value="MSIT-DA">MSIT-DA&nbsp;&nbsp;&nbsp; - MASTER OF SCIENCE IN INFORMATION TECHNOLOGY W/ SPECIALIZATION IN DATABASE ADMINISTRATION</option>
                                    <option groupid="28" value="MSIT-MIS">MSIT-MIS&nbsp;&nbsp; - MASTER OF SCIENCE IN INFORMATION TECHNOLOGY W/ SPECIALIZATION IN MANAGEMENT INFORMATION SYSTEM</option>
                                    <option groupid="28" value="MSIT-NA">MSIT-NA&nbsp;&nbsp;&nbsp; - MASTER OF SCIENCE IN INFORMATION TECHNOLOGY W/ SPECIALIZATION IN NETWORK ADMINISTRATION</option>
                                    <option groupid="28" value="MSME">MSME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - MASTER OF SCIENCE IN MATHEMATICS EDUCATION</option>
                                    <option groupid="28" value="MSME-CT">MSME-CT&nbsp;&nbsp;&nbsp; - MASTER OF SCIENCE IN MATHEMATICS EDUCATION W/ SPECIALIZATION IN COLLEGE TEACHING</option>
                                    <option groupid="28" value="MSME-HST">MSME-HST&nbsp;&nbsp; - MASTER OF SCIENCE IN MATHEMATICS EDUCATION W/ SPECIIALIZATION IN HIGH SCHOOL TEACHING</option>
                                    <option groupid="99" value="NO COURSE">NO COURSE&nbsp; - NO COURSE</option>
                                    <option groupid="109" value="OPEN-COA">OPEN-COA&nbsp;&nbsp; - OPEN COURSES- COLLEGE OF ACCOUNTANCY</option>
                                    <option groupid="29" value="OPEN-COABT">OPEN-COABT - OPEN COURSES-DEPT OF OFFICE ADMINISTRATION</option>
                                    <option groupid="115" value="OPEN-CT">OPEN-CT&nbsp;&nbsp;&nbsp; - OPEN COURSES - COLLEGE OF TECHNOLOGY</option>
                                    <option groupid="9" value="OPEN-DAPR">OPEN-DAPR&nbsp; - OPEN COURSES-DEPARTMENT OF ADVERTISING AND PUBLIC RELATIONS</option>
                                    <option groupid="2" value="OPEN-DARCHI">OPEN-DARCHI - OPEN COURSES - DEPT OF ARCHITECTURE</option>
                                    <option groupid="13" value="OPEN-DB">OPEN-DB&nbsp;&nbsp;&nbsp; - OPEN COURSES- DEPARTMENT OF BIOLOGY</option>
                                    <option groupid="28" value="OPEN-DBA">OPEN-DBA&nbsp;&nbsp; - OPEN COURSES - DOCTOR IN BUSINESS ADMINISTRATION</option>
                                    <option groupid="113" value="OPEN-DBF">OPEN-DBF&nbsp;&nbsp; - OPEN COURSES - DEPARTMENT OF BANKING AND FINANCE</option>
                                    <option groupid="9" value="OPEN-DBRC">OPEN-DBRC&nbsp; - OPEN COURSES - DEPT OF BROADCAST COMMUNICATION</option>
                                    <option groupid="11" value="OPEN-DBTE">OPEN-DBTE&nbsp; - OPEN COURSES - DEPTARTMENT BUSINESS TEACHER EDUCATION</option>
                                    <option groupid="6" value="OPEN-DCE">OPEN-DCE&nbsp;&nbsp; - OPEN COURSES - DEPARTMENT OF CIVIL ENGINEERING</option>
                                    <option groupid="6" value="OPEN-DCOE">OPEN-DCOE&nbsp; - OPEN COURSE - DEPARTMENT OF COMPUTER ENGINEERING</option>
                                    <option groupid="114" value="OPEN-DCOOP">OPEN-DCOOP - OPEN COURSES - DEPARTMENT OF COOPERATIVES</option>
                                    <option groupid="112" value="OPEN-DCS">OPEN-DCS&nbsp;&nbsp; - OPEN COURSES-DEPT OF COMPUTER SCIENCE</option>
                                    <option groupid="6" value="OPEN-DECE">OPEN-DECE&nbsp; - OPEN COURSE - DEPARTMENT OF ELECTRONICS ENGINEERING</option>
                                    <option groupid="113" value="OPEN-DECO">OPEN-DECO&nbsp; - OPEN COURSES-DEPT OF ECONOMICS</option>
                                    <option groupid="6" value="OPEN-DEE">OPEN-DEE&nbsp;&nbsp; - OPEN COURSE - DEPARTMENT OF ELECTRICAL ENGINEERING</option>
                                    <option groupid="110" value="OPEN-DEFLL">OPEN-DEFLL - OPEN COURSES-DEPT. OF ENGLISH, FOREIGN LANGUAGES &amp; LINGUISTICS</option>
                                    <option groupid="28" value="OPEN-DEM">OPEN-DEM&nbsp;&nbsp; - OPEN COURSES-DOCTOR IN EDUCATIONAL MANAGEMENT</option>
                                    <option groupid="6" value="OPEN-DES">OPEN-DES&nbsp;&nbsp; - OPEN COURSES - DEPARTMENT OF ENGINEERING SCIENCES</option>
                                    <option groupid="11" value="OPEN-DESED">OPEN-DESED - OPEN COURSES-DEPARTMENT OF ELEMENTARY AND SECONDARY EDUCATION</option>
                                    <option groupid="13" value="OPEN-DFT">OPEN-DFT&nbsp;&nbsp; - OPEN COURSES- DEPT. OF FOOD TECHNOLOGY</option>
                                    <option groupid="114" value="OPEN-DHLS">OPEN-DHLS&nbsp; - OPEN COURSES-DEPT OF HISTORY &amp; LIBRARY SCIENCE</option>
                                    <option groupid="110" value="OPEN-DHP">OPEN-DHP&nbsp;&nbsp; - OPEN COURSES-DEPT OF HUMANITIES &amp; PHILOSOPHY</option>
                                    <option groupid="14" value="OPEN-DHRM">OPEN-DHRM&nbsp; - OPEN COURSES-DEPARTMENT OF HOTEL AND RESTAURANT MANAGEMENT</option>
                                    <option groupid="6" value="OPEN-DIE">OPEN-DIE&nbsp;&nbsp; - OPEN COURSES- DEPARTMENT OF INDUSTRIAL ENGINEERING</option>
                                    <option groupid="9" value="OPEN-DJ">OPEN-DJ&nbsp;&nbsp;&nbsp; - OPEN-COURSES - DEPARTMENT OF JOURNALISM</option>
                                    <option groupid="111" value="OPEN-DME">OPEN-DME&nbsp;&nbsp; - OPEN COURSES-DEPT OF MANAGEMENT AND ENTREPRENEURSHIP</option>
                                    <option groupid="6" value="OPEN-DMENG">OPEN-DMENG - OPEN COURSES - DEPARTMENT OF MECHANICAL ENGINEERING</option>
                                    <option groupid="111" value="OPEN-DMM">OPEN-DMM&nbsp;&nbsp; - OPEN COURSES-DEPT OF MARKETING MANAGEMENT</option>
                                    <option groupid="13" value="OPEN-DMS">OPEN-DMS&nbsp;&nbsp; - OPEN COURSES-DEPT OF MATHEMATICS &amp; STATISTICS</option>
                                    <option groupid="13" value="OPEN-DND">OPEN-DND&nbsp;&nbsp; - OPEN COURSES - DEPARTMENT OF NUTRITION AND DIETETICS</option>
                                    <option groupid="13" value="OPEN-DNS">OPEN-DNS&nbsp;&nbsp; - OPEN COURSES-DEPT. OF NATURAL SCIENCE</option>
                                    <option groupid="111" value="OPEN-DOA">OPEN-DOA&nbsp;&nbsp; - OPEN COURSES - DEPARTMENT OF OFFICE ADMINISTRATION</option>
                                    <option groupid="28" value="OPEN-DPA">OPEN-DPA&nbsp;&nbsp; - OPEN COURSES-DOCTOR IN PUBLIC ADMINISTRATION</option>
                                    <option groupid="12" value="OPEN-DPP">OPEN-DPP&nbsp;&nbsp; - OPEN COURSES - DEPARTMENT OF PROFESSIONAL PROGRAMS</option>
                                    <option groupid="13" value="OPEN-DPS">OPEN-DPS&nbsp;&nbsp; - OPEN COURSE- DEPARTMENT OF PHYSICAL SCIENCE</option>
                                    <option groupid="113" value="OPEN-DPSPA">OPEN-DPSPA - OPEN COURSES-DEPT OF POLITICAL SCIENCE AND PUBLIC ADMINISTRATION</option>
                                    <option groupid="114" value="OPEN-DPSYC">OPEN-DPSYC - OPEN COURSES-DEPT OF PSYCHOLOGY</option>
                                    <option groupid="114" value="OPEN-DS">OPEN-DS&nbsp;&nbsp;&nbsp; - OPEN COURSES-DEPT OF SOCIOLOGY</option>
                                    <option groupid="12" value="OPEN-DSPE">OPEN-DSPE&nbsp; - OPEN COURSES-DEPARTMENT OF SERVICE PHYSICAL EDUCATION</option>
                                    <option groupid="110" value="OPEN-DTA">OPEN-DTA&nbsp;&nbsp; - OPEN COURSES - DEPARTMENT OF THEATER ARTS</option>
                                    <option groupid="14" value="OPEN-DTTM">OPEN-DTTM&nbsp; - OPEN COURSES - DEPARTMENT OF TOURISM AND TRANSPORT MANAGEMENT</option>
                                    <option groupid="110" value="OPEN-KF">OPEN-KF&nbsp;&nbsp;&nbsp; - OPEN COURSES-KAGAWARAN NG FILIPINOLOHIYA</option>
                                    <option groupid="40" value="OPEN-LLB">OPEN-LLB&nbsp;&nbsp; - OPEN COURSES - BACHELOR OF LAWS</option>
                                    <option groupid="28" value="OPEN-MAE">OPEN-MAE&nbsp;&nbsp; - OPEN COURSES-MASTER OF ARTS IN ECONOMICS</option>
                                    <option groupid="28" value="OPEN-MAELT">OPEN-MAELT - OPEN COURSES-MASTER OF ARTS IN ENGLISH LANGUAGE TEACHING</option>
                                    <option groupid="28" value="OPEN-MAF">OPEN-MAF&nbsp;&nbsp; - OPEN COURSES-MASTER OF ARTS IN FILIPINO</option>
                                    <option groupid="28" value="OPEN-MAS">OPEN-MAS&nbsp;&nbsp; - OPEN COURSES-MASTER IN APPLIED STATISTICS</option>
                                    <option groupid="28" value="OPEN-MATESL">OPEN-MATESL - OPEN COURSES - MASTER OF ARTS IN TEACHING ENGLISH AS SECOND LANGUAGE</option>
                                    <option groupid="28" value="OPEN-MBA">OPEN-MBA&nbsp;&nbsp; - OPEN COURSES-MASTER IN BUSINESS ADMINISTRATION</option>
                                    <option groupid="28" value="OPEN-MBE">OPEN-MBE&nbsp;&nbsp; - OPEN COURSES-MASTER IN BUSINESS EDUCATION</option>
                                    <option groupid="28" value="OPEN-MC">OPEN-MC&nbsp;&nbsp;&nbsp; - OPEN COURSES-MASTER IN COMMUNICATION</option>
                                    <option groupid="28" value="OPEN-MEM">OPEN-MEM&nbsp;&nbsp; - OPEN COURSES-MASTER IN EDUCATIONAL MANAGEMENT</option>
                                    <option groupid="28" value="OPEN-MIEM">OPEN-MIEM&nbsp; - OPEN COURSES-MASTER IN INDUSTRIAL ENGINEERING MANAGEMENT</option>
                                    <option groupid="28" value="OPEN-MLIS ">OPEN-MLIS  - OPEN COURSES-MASTER IN LIBRARY AND INFORMATION SCIENCE</option>
                                    <option groupid="28" value="OPEN-MP">OPEN-MP&nbsp;&nbsp;&nbsp; - OPEN COURSES-MASTER IN PSYCHOLOGY</option>
                                    <option groupid="28" value="OPEN-MPA">OPEN-MPA&nbsp;&nbsp; - OPEN COURSES-MASTER IN PUBLIC ADMINISTRATION</option>
                                    <option groupid="28" value="OPEN-MPES">OPEN-MPES&nbsp; - OPEN COURSES-MASTER IN PHYSICAL EDUCATION AND SPORTS</option>
                                    <option groupid="28" value="OPEN-MSE">OPEN-MSE&nbsp;&nbsp; - OPEN COURSES-MASTER OF SCIENCE IN ENGINEERING</option>
                                    <option groupid="28" value="OPEN-MSIEM">OPEN-MSIEM - OPEN COURSES - MASTER OF SCIENCE IN INDUSTRIAL ENGINEERING AND MANAGEMENT</option>
                                    <option groupid="28" value="OPEN-MSIT">OPEN-MSIT&nbsp; - OPEN COURSES-MASTER OF SCIENCE IN INFORMATION TECHNOLOGY</option>
                                    <option groupid="28" value="OPEN-MSME">OPEN-MSME&nbsp; - OPEN COURSES-MASTER OF SCIENCE IN MATHEMATICS EDUCATION</option>
                                    <option groupid="20" value="OPEN-NSTP">OPEN-NSTP&nbsp; - OPEN COURSES-NSTP</option>
                                    <option groupid="23" value="OPENHS">OPENHS&nbsp;&nbsp;&nbsp;&nbsp; - OPEN COURSES - LABORATORY HIGH SCHOOL</option>
                                    <option groupid="122" value="OPENNT">OPENNT&nbsp;&nbsp;&nbsp;&nbsp; - OPEN COURSES - NON TRADITIONAL</option>
                                    <option groupid="122" value="OPENNTGS">OPENNTGS&nbsp;&nbsp; - OPEN COURSES - NON TRADITIONAL(GRADUATE STUDIES)</option>
                                    <option groupid="17" value="OPENOUMN">OPENOUMN&nbsp;&nbsp; - OPEN COURSES - OPEN UNIVERSITY(MANILA)</option>
                                    <option groupid="34" value="OUMN-TRANS">OUMN-TRANS - OPEN UNIVERSITY - TRANSFEREES (MAIN)</option>
                                    <option groupid="17" value="OUMNNOCOURSE">OUMNNOCOURSE - OU MANILA NO COURSE</option>
                                    <option groupid="114" value="PBDCM">PBDCM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - POST BACCALAUREATE DIPLOMA IN COOPERATIVE MANAGEMENT</option>
                                    <option groupid="17" value="PBDIT">PBDIT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - POST BACCALAUREATE DIPLOMA IN INFORMATION TECHNOLOGY</option>
                                    <option groupid="11" value="PBTE">PBTE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - POST BACCALAUREATE IN TEACHER EDUCATION</option>
                                    <option groupid="0" value="PE">PE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - PE SUBJECTS</option>
                                    <option groupid="0" value="SAMPLE">SAMPLE&nbsp;&nbsp;&nbsp;&nbsp; - SAMPLE COURSE IN SIS</option>
                                    <option groupid="121" value="SHS">SHS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - SENIOR HIGH SCHOOL (APPLICANTS)</option>
                                    <option groupid="121" value="SHS-SAMPLE">SHS-SAMPLE - SHS SAMPLE TRACK ONLY</option>
                                    <option groupid="121" value="SHSABMSA">SHSABMSA&nbsp;&nbsp; - SENIOR HIGH SCHOOL (ACCOUNTANCY, BUSINESS AND MANAGEMENT STRAND-ACCOUNTANCY)</option>
                                    <option groupid="121" value="SHSABMSBA">SHSABMSBA&nbsp; - SENIOR HIGH SCHOOL (ACCOUNTANCY, BUSINESS AND MANAGEMENT STRAND-BUSINESS ADMINISTRATION)</option>
                                    <option groupid="121" value="SHSADT">SHSADT&nbsp;&nbsp;&nbsp;&nbsp; - SENIOR HIGH SCHOOL (ARTS AND DESIGN TRACK)</option>
                                    <option groupid="121" value="SHSGAS">SHSGAS&nbsp;&nbsp;&nbsp;&nbsp; - SENIOR HIGH SCHOOL (GENERAL ACADEMIC STRAND)</option>
                                    <option groupid="121" value="SHSHUMSSS">SHSHUMSSS&nbsp; - SENIOR HIGH SCHOOL (HUMANITIES AND SOCIAL SCIENCES STRAND)</option>
                                    <option groupid="121" value="SHSSPORTST">SHSSPORTST - SENIOR HIGH SCHOOL (SPORTS TRACK)</option>
                                    <option groupid="121" value="SHSSTEMS">SHSSTEMS&nbsp;&nbsp; - SENIOR HIGH SCHOOL (SCIENCE, TECHNOLOGY, ENGINEERING AND MATHEMATICS STRAND)</option>
                                    <option groupid="121" value="SHSTVLTHESA">SHSTVLTHESA - SENIOR HIGH SCHOOL (TECHNICAL-VOCATIONAL-LIVELIHOOD TRACK - HOME ECONOMICS STRAND - COOKERY)</option>
                                    <option groupid="121" value="SHSTVLTHESB">SHSTVLTHESB - SENIOR HIGH SCHOOL (TECHNICAL-VOCATIONAL-LIVELIHOOD TRACK - HOME ECONOMICS STRAND-BARTENDING)</option>
                                    <option groupid="121" value="SHSTVLTICTS">SHSTVLTICTS - SENIOR HIGH SCHOOL (TECHNICAL-VOCATIONAL-LIVELIHOOD TRACK - ICT STRAND)</option>
                                    <option groupid="121" value="SHSTVLTTSA">SHSTVLTTSA - SENIOR HIGH SCHOOL (TECHNICAL-VOCATIONAL-LIVELIHOOD TRACK - TOURISM-LOCAL TOUR GUIDING SERVICES)</option>
                                    <option groupid="121" value="SHSTVLTTSB">SHSTVLTTSB - SENIOR HIGH SCHOOL (TECHNICAL-VOCATIONAL-LIVELIHOOD TRACK - TOURISM-TRAVEL SERVICES)</option>
                                    <option groupid="121" value="SHSTVLTTSC">SHSTVLTTSC - SENIOR HIGH SCHOOL (TECHNICAL-VOCATIONAL-LIVELIHOOD TRACK - TOURISM-OPTION C)</option>
                                    <option groupid="99" value="SPAP">SPAP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - SPECIAL APPLICANTS</option>
                                    <option groupid="0" value="TRANSFEREE">TRANSFEREE - STUDENT TRANSFEREES</option>
                                    <option groupid="99" value="WL">WL&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - WAITING LIST</option>
                                    <option groupid="99" value="WL2">WL2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - WAITING LIST 2</option>
                                    <option groupid="47" value="WL3">WL3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - WAITING LIST 3</option>
                                  </select>
                                </div>
                              </div>-->
                              <div class="form-group">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3">Year</label>
                                <div class="col-md-2 col-sm-2">
                                  <input class="form-control col-md-7 col-xs-12" type="text" id="txtbxYear" name="txtbxYear" value="<?php echo $vacharYear; ?>">
                                </div>
                                <label for="middle-name" class="control-label col-md-1 col-sm-1">Section</label>
                                <div class="col-md-3 col-sm-3">
                                  <input class="form-control col-md-7 col-xs-12" type="text" id="txtbxSection" name="txtbxSection" value="<?php echo $vacharSection; ?>">
                                </div>
                              </div>
                              <span class="section" style="margin-left:90px;">III. Contact Informaltion</span>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">City Address</label>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                  <select class="select2_single form-control" tabindex="-1" id="dropdownCityAddress" name="txtbxOthersReligion" >
                                    <option disabled="" selected=""></option>
                                    <option value="8262">Metro Manila~Caloocan</option>
                                    <option value="22722">Metro Manila~Las Pinas</option>
                                    <option value="24972">Metro Manila~Makati</option>
                                    <option value="25007">Metro Manila~Malabon</option>
                                    <option value="25030">Metro Manila~Mandaluyong</option>
                                    <option value="88">Metro Manila~Manila</option>
                                    <option value="25059">Metro Manila~Marikina</option>
                                    <option value="27973">Metro Manila~Muntinlupa</option>
                                    <option value="27984">Metro Manila~Navotas</option>
                                    <option value="34589">Metro Manila~Paranaque</option>
                                    <option value="34607">Metro Manila~Pasay</option>
                                    <option value="34810">Metro Manila~Pasig</option>
                                    <option value="34842">Metro Manila~Pateros</option>
                                    <option value="36138">Metro Manila~Quezon City</option>
                                    <option value="36861">Metro Manila~San Juan</option>
                                    <option value="39826">Metro Manila~Taguig</option>
                                    <option value="40599">Metro Manila~Valenzuela</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Provincial Address</label>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                  <select class="select2_single form-control" tabindex="-1" id="dropdownProvincialAddress" name="dropdownProvincialAddress" >
                                    <option disabled="" selected=""></option>
                                    <option value="42">Abra</option>
                                    <option value="43">Agusan Del Norte</option>
                                    <option value="44">Agusan Del Sur</option>
                                    <option value="45">Aklan</option>
                                    <option value="46">Albay</option>
                                    <option value="47">Antique</option>
                                    <option value="2990">Aurora</option>
                                    <option value="50">Basilan</option>
                                    <option value="3372">Bataan</option>
                                    <option value="53">Batangas</option>
                                    <option value="54">Benguet</option>
                                    <option value="55">Biliran</option>
                                    <option value="56">Bohol</option>
                                    <option value="57">Bukidnon</option>
                                    <option value="6819">Bulacan</option>
                                    <option value="7412">Cagayan</option>
                                    <option value="60">Camarines Norte</option>
                                    <option value="61">Camarines Sur</option>
                                    <option value="62">Camiguin</option>
                                    <option value="63">Capiz</option>
                                    <option value="64">Catanduanes</option>
                                    <option value="65">Cavite</option>
                                    <option value="66">Cebu</option>
                                    <option value="12832">Compostela Valley</option>
                                    <option value="68">Cotabato</option>
                                    <option value="69">Davao Del Norte</option>
                                    <option value="70">Davao Del Sur</option>
                                    <option value="71">Davao Oriental</option>
                                    <option value="221">Dinagat Islands</option>
                                    <option value="72">Eastern Samar</option>
                                    <option value="73">Guimaras</option>
                                    <option value="74">Ifugao</option>
                                    <option value="75">Ilocos Norte</option>
                                    <option value="76">Ilocos Sur</option>
                                    <option value="77">Iloilo</option>
                                    <option value="78">Isabela</option>
                                    <option value="79">Kalinga</option>
                                    <option value="19693">La Union</option>
                                    <option value="20290">Laguna</option>
                                    <option value="82">Lanao Del Norte</option>
                                    <option value="83">Lanao Del Sur</option>
                                    <option value="43805">Lazada Office</option>
                                    <option value="84">Leyte</option>
                                    <option value="24428">Maguindanao</option>
                                    <option value="86">Marinduque</option>
                                    <option value="87">Masbate</option>
                                    <option value="91">Misamis Occidental</option>
                                    <option value="92">Misamis Oriental</option>
                                    <option value="93">Mountain Province</option>
                                    <option value="94">Negros Occidental</option>
                                    <option value="95">Negros Oriental</option>
                                    <option value="29275">North Cotabato</option>
                                    <option value="96">Northern Samar</option>
                                    <option value="97">Nueva Ecija</option>
                                    <option value="98">Nueva Vizcaya</option>
                                    <option value="89">Occidental Mindoro</option>
                                    <option value="90">Oriental Mindoro</option>
                                    <option value="32177">Palawan</option>
                                    <option value="32616">Pampanga</option>
                                    <option value="101">Pangasinan</option>
                                    <option value="34854">Quezon</option>
                                    <option value="36282">Quirino</option>
                                    <option value="36421">Rizal</option>
                                    <option value="36624">Romblon</option>
                                    <option value="36884">Sarangani</option>
                                    <option value="108">Siquijor</option>
                                    <option value="109">Sorsogon</option>
                                    <option value="110">South Cotabato</option>
                                    <option value="111">Southern Leyte</option>
                                    <option value="38453">Sultan Kudarat</option>
                                    <option value="113">Sulu</option>
                                    <option value="114">Surigao Del Norte</option>
                                    <option value="115">Surigao Del Sur</option>
                                    <option value="116">Tarlac</option>
                                    <option value="40384">Tawi~Tawi</option>
                                    <option value="40634">Western Samar</option>
                                    <option value="118">Zambales</option>
                                    <option value="119">Zamboanga Del Norte</option>
                                    <option value="120">Zamboanga Del Sur</option>
                                    <option value="121">Zamboanga Sibugay</option>
                                  </select>
                                </div>
                              </div>
                            </form>
                          </div>
                          <div id="step-2">
                            <form class="form-horizontal form-label-left">
                              <span class="section"> <h1>Educational Background</h1></span>
                              <span class="section" style="margin-left:90px;">I. Pre-elementary</span>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="first-name">School Graduated <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                  <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="last-name">School Address <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                  <input type="text" id="last-name2" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="first-name">Type of School<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                  <div id="gender2" class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                      <input type="radio" name="gender" value="male"> Public
                                    </label>
                                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                      <input type="radio" name="gender" value="female" checked=""> Private
                                    </label>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3">Year Attended</label>
                                <div class="col-md-6 col-sm-6">
                                  <input id="middle-name2" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3">Honors Recieved/Special Awards</label>
                                <div class="col-md-6 col-sm-6">
                                  <input id="middle-name2" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                                </div>
                              </div>
                              <span class="section" style="margin-left:90px;">II. Elementary</span>

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="first-name">School Graduated <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                  <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="last-name">School Address <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                  <input type="text" id="last-name2" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="first-name">Type of School<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                  <div id="gender2" class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                      <input type="radio" name="gender" value="male"> Public
                                    </label>
                                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                      <input type="radio" name="gender" value="female" checked=""> Private
                                    </label>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3">Year Attended</label>
                                <div class="col-md-6 col-sm-6">
                                  <input id="middle-name2" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3">Honors Recieved/Special Awards</label>
                                <div class="col-md-6 col-sm-6">
                                  <input id="middle-name2" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                                </div>
                              </div>
                              <span class="section" style="margin-left:90px;">III. High School</span>

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="first-name">School Graduated <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                  <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="last-name">School Address <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                  <input type="text" id="last-name2" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="first-name">Type of School<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                  <div id="gender2" class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                      <input type="radio" name="gender" value="male"> Public
                                    </label>
                                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                      <input type="radio" name="gender" value="female" checked=""> Private
                                    </label>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3">Year Attended</label>
                                <div class="col-md-6 col-sm-6">
                                  <input id="middle-name2" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3">Honors Recieved/Special Awards</label>
                                <div class="col-md-6 col-sm-6">
                                  <input id="middle-name2" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                                </div>
                              </div>
                              <span class="section" style="margin-left:90px;">IV. Vocational</span>

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="first-name">School Graduated <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                  <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="last-name">School Address <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                  <input type="text" id="last-name2" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="first-name">Type of School<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                  <div id="gender2" class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                      <input type="radio" name="gender" value="male"> Public
                                    </label>
                                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                      <input type="radio" name="gender" value="female" checked=""> Private
                                    </label>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3">Year Attended</label>
                                <div class="col-md-6 col-sm-6">
                                  <input id="middle-name2" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3">Honors Recieved/Special Awards</label>
                                <div class="col-md-6 col-sm-6">
                                  <input id="middle-name2" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                                </div>
                              </div>
                              <span class="section" style="margin-left:90px;">V. College</span>

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="first-name">School Graduated <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                  <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="last-name">School Address <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                  <input type="text" id="last-name2" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="first-name">Type of School<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                  <div id="gender2" class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                      <input type="radio" name="gender" value="male"> Public
                                    </label>
                                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                      <input type="radio" name="gender" value="female" checked=""> Private
                                    </label>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3">Year Attended</label>
                                <div class="col-md-6 col-sm-6">
                                  <input id="middle-name2" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3">Honors Recieved/Special Awards</label>
                                <div class="col-md-6 col-sm-6">
                                  <input id="middle-name2" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                                </div>
                              </div>
                              <br>

                              <div class="form-group">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3">HighSchool General Average</label>
                                <div class="col-md-6 col-sm-6">
                                  <input id="middle-name2" class="form-control col-md-7 col-xs-12" type="text" name="middle-name">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="first-name">Nature of schooling<span class="required">*</span>
                                </label>
                                <div class="col-md-3 col-sm-3">
                                  <div id="gender2" class="btn-group" data-toggle="buttons" >
                                    <label class="btn btn-default" data-toggle-class="btn-primary " style="padding-left: 22px; padding-right:22px;" data-toggle-passive-class="btn-default">
                                      <input type="radio" name="gender" value="male" > Continuous
                                    </label>
                                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default" style="padding-left: 23px; padding-right:23px;">
                                      <input type="radio" name="gender" value="female" checked=""> Interrupted, Why?
                                    </label>
                                  </div>
                                </div>
                                <div class="col-md-3 col-sm-3">
                                  <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>

                            </form>
                          </div>
                          <div id="step-3">
                            <form class="form-horizontal form-label-left">
                              <span class="section"> <h1>Home and Family Background</h1></span>
                              <span class="section" style="margin-left:90px;">I. Mother</span>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="first-name">Name <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                  <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                                </div>

                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="first-name">Age <span class="required">*</span>
                                </label>
                                <div class="col-md-3 col-sm-3">
                                  <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                                <div id="gender2" class="btn-group" data-toggle="buttons">
                                  <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                    <input type="radio" name="gender" value="male"> Living 
                                  </label>
                                  <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                    <input type="radio" name="gender" value="female" checked=""> Deceased
                                  </label>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Educational Attainment</label>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                  <select class="select2_single form-control" tabindex="-1">
                                    <option></option>
                                    <option disabled="" selected=""></option>
                                    <option value="public">Elementary Undergraduate</option>
                                    <option value="public">Elementary graduate</option>
                                    <option value="public">High School Undergraduate</option>
                                    <option value="public">High School Graduate</option>
                                    <option value="public">College undergraduate</option>
                                    <option value="public">Vocational Graduate</option>
                                    <option value="public">Masteral Unit</option>
                                    <option value="public">Doctoral Degree</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Occupation Type</label>
                                <div class="col-md-2 col-sm-2 col-xs-12">
                                  <select class="select2_group form-control">
                                    <option disabled="" selected=""></option>
                                    <optgroup label="Employed">
                                      <optgroup label="Local">
                                        <option value="AK">Government</option>
                                        <option value="HI">Private</option>
                                      </optgroup>
                                      <option value="HI">Abroad</option>
                                    </optgroup>
                                    <option value="CA">Unemployed</option>
                                    <option value="NV">Self-Employed</option>
                                  </select>
                                </div>
                                <label class="control-label col-md-1 col-sm-1" for="first-name">Occupation:<span class="required">*</span>
                                </label>
                                <div class="col-md-3 col-sm-3">
                                  <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="first-name">Name of Employer <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                  <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="first-name">Address of Employer <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                  <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                               <span class="section" style="margin-left:90px;">II. Father</span>

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="first-name">Name <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                  <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="first-name">Age <span class="required">*</span>
                                </label>
                                <div class="col-md-3 col-sm-3">
                                  <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                                <div id="gender2" class="btn-group" data-toggle="buttons">
                                  <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                    <input type="radio" name="gender" value="male"> Living 
                                  </label>
                                  <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                    <input type="radio" name="gender" value="female" checked=""> Deceased
                                  </label>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Educational Attainment</label>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                  <select class="select2_single form-control" tabindex="-1">
                                    <option></option>
                                    <option disabled="" selected=""></option>
                                    <option value="public">Elementary Undergraduate</option>
                                    <option value="public">Elementary graduate</option>
                                    <option value="public">High School Undergraduate</option>
                                    <option value="public">High School Graduate</option>
                                    <option value="public">College undergraduate</option>
                                    <option value="public">Vocational Graduate</option>
                                    <option value="public">Masteral Unit</option>
                                    <option value="public">Doctoral Degree</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Occupation Type</label>
                                <div class="col-md-2 col-sm-2 col-xs-12">
                                  <select class="select2_group form-control">
                                    <option disabled="" selected=""></option>
                                    <optgroup label="Employed">
                                      <optgroup label="Local">
                                        <option value="AK">Government</option>
                                        <option value="HI">Private</option>
                                      </optgroup>
                                      <option value="HI">Abroad</option>
                                    </optgroup>
                                    <option value="CA">Unemployed</option>
                                    <option value="NV">Self-Employed</option>
                                  </select>
                                </div>
                                <label class="control-label col-md-1 col-sm-1" for="first-name">Occupation:<span class="required">*</span>
                                </label>
                                <div class="col-md-3 col-sm-3">
                                  <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div> 
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="first-name">Name of Employer <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                  <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="first-name">Address of Employer <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                  <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                               <span class="section" style="margin-left:90px;">III. Guardian</span>

                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="first-name">Name <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                  <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="first-name">Age <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                  <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Relationship</label>
                                <div class="col-md-2 col-sm-2 col-xs-6">
                                  <select class="select2_single form-control" tabindex="-1">
                                    <option></option>
                                    <option disabled="" selected=""></option>
                                    <option value="public">Parent</option>
                                    <option value="public">Brother/Sister</option>
                                    <option value="public">Aunt/Uncle</option>
                                    <option value="public">Relatives</option>
                                    <option value="public">Grandparents</option>
                                    <option value="public">Vocational Graduate</option>
                                    <option value="public">Land lady</option>
                                    <option value="public">Step-Mother/Step-Father</option>
                                    <option value="public">Others</option>
                                  </select>
                                </div>
                                <label class="control-label col-md-1 col-sm-1" for="first-name">Others: <span class="required">*</span>
                                </label>
                                <div class="col-md-3 col-sm-3">
                                  <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12" >
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Educational Attainment</label>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                  <select class="select2_single form-control" tabindex="-1">
                                    <option></option>
                                    <option disabled="" selected=""></option>
                                    <option value="public">Elementary Undergraduate</option>
                                    <option value="public">Elementary graduate</option>
                                    <option value="public">High School Undergraduate</option>
                                    <option value="public">High School Graduate</option>
                                    <option value="public">College undergraduate</option>
                                    <option value="public">Vocational Graduate</option>
                                    <option value="public">Masteral Unit</option>
                                    <option value="public">Doctoral Degree</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Occupation Type</label>
                                <div class="col-md-2 col-sm-2 col-xs-12">
                                  <select class="select2_group form-control">
                                    <option disabled="" selected=""></option>
                                    <optgroup label="Employed">
                                      <optgroup label="Local">
                                        <option value="AK">Government</option>
                                        <option value="HI">Private</option>
                                      </optgroup>
                                      <option value="HI">Abroad</option>
                                    </optgroup>
                                    <option value="CA">Unemployed</option>
                                    <option selected value="NV">Self-Employed</option>
                                  </select>
                                </div>
                                <label class="control-label col-md-1 col-sm-1" for="first-name">Occupation:<span class="required">*</span>
                                </label>
                                <div class="col-md-3 col-sm-3">
                                  <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12" value="Business Woman">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="first-name">Name of Employer <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                  <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="first-name">Address of Employer <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                  <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <br>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Parent's Marital RelationShip</label>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                  <select class="select2_single form-control" tabindex="-1">
                                    <option></option>
                                    <option disabled="" selected=""></option>
                                      <option value="public">Married and staying together</option>
                                      <option value="public">Not married but living together</option>
                                      <option value="public">Single Parent</option>
                                      <option value="public">Married but separated</option>
                                      <option value="public">Others</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3">Number of children in the family including yourself</label>
                                <div class="col-md-2 col-sm-2">
                                  <input id="middle-name2" class="form-control col-md-1 col-xs-1" type="text" name="middle-name">
                                </div>
                                <label for="middle-name" class="control-label col-md-1 col-sm-1">Brothers</label>
                                <div class="col-md-1 col-sm-1">
                                  <input id="middle-name2" class="form-control col-md-1 col-xs-1" type="text" name="middle-name">
                                </div>
                                <label for="middle-name" class="control-label col-md-1 col-sm-1">Sisters</label>
                                <div class="col-md-1 col-sm-1">
                                  <input id="middle-name2" class="form-control col-md-1 col-xs-1" type="text" name="middle-name">
                                </div>
                              </div>
                              <div class="form-group">
                                <label for="middle-name" class="control-label col-md-3 col-sm-3">Number of brother/s sisters gainfully employed</label>
                                <div class="col-md-3 col-sm-3">
                                  <input id="middle-name2" class="form-control col-md-1 col-xs-1" type="text" name="middle-name">
                                </div>
                                <label class="control-label col-md-1 col-sm-1 col-xs-12">Ordinal Position</label>
                                <div class="col-md-2 col-sm-2 col-xs-6">
                                  <select class="select2_single form-control" tabindex="-1">
                                    <option disabled="" selected=""></option>
                                    <option value="public">Only Child</option>
                                    <option value="public">First</option>
                                    <option value="public">Second</option>
                                    <option value="public">Third</option>
                                    <option value="public">Fourth</option>
                                    <option value="public">Fifth</option>
                                    <option value="public">Sixth</option>
                                    <option value="public">Seventh</option>
                                    <option value="public">Eight</option>
                                    <option value="public">Ninth</option>
                                    <option value="public">Tenth</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="first-name">Is your brother/sister who's gainfully employed providing support to your: <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                  <div id="gender2" class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                      <input type="radio" name="gender" value="Family"> Family 
                                    </label>
                                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                      <input type="radio" name="gender" value="Your Studies" checked=""> Your studies
                                    </label>
                                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                      <input type="radio" name="gender" value="Own Family" checked=""> His/Her own family
                                    </label>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Who finance your schooling?</label>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                  <select class="select2_single form-control" tabindex="-1">
                                    <option></option>
                                    <option disabled="" selected=""></option>
                                    <option value="public">Parents</option>
                                    <option value="public">Brother/Sister</option>
                                    <option value="public">Spouse</option>
                                    <option value="public">Scholarship</option>
                                    <option value="public">Relatives</option>
                                    <option value="public">Self-supporting/Working student</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="last-name">How much is your weekly allowance<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                  <input type="text" id="last-name2" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Parent's total monthly income</label>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                  <select class="select2_single form-control" tabindex="-1">
                                    <option disabled="" selected=""></option>
                                    <option value="public">Below 5,000</option>
                                    <option value="public">5,001 - 10,000</option>
                                    <option value="public">10,001 - 15,000</option>
                                    <option value="public">15,001 - 20,000</option>
                                    <option value="public">20,001 - 25,000</option>
                                    <option value="public">25,001 - 30,000</option>
                                    <option value="public">30,001 - 35,000</option>
                                    <option value="public">35,001 - 40,000</option>
                                    <option value="public">40,001 - 45,000</option>
                                    <option value="public">45,001 - 50,000</option>
                                    <option value="public">Above 50,001</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="first-name">Do you have a quite place to study?<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                  <div id="gender2" class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                      <input type="radio" name="gender" value="male"> Yes
                                    </label>
                                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                      <input type="radio" name="gender" value="female" checked=""> No
                                    </label>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="first-name">Do you share your room with anyone?<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                  <div id="gender2" class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                      <input type="radio" name="gender" value="male"> Yes
                                    </label>
                                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                      <input type="radio" name="gender" value="female" checked=""> No
                                    </label>
                                  </div>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="last-name">If yes with whom?<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                  <input type="text" id="last-name2" name="last-name" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Nature of Residence while attending school</label>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                  <select class="select2_single form-control" tabindex="-1">
                                    <option disabled="" selected=""></option>
                                      <option value="public">Family home</option>
                                      <option value="public">Relative's house</option>
                                      <option value="public">Shares apartment with friends</option>
                                      <option value="public">Shares apartment with relatives</option>
                                      <option value="public">Bed spacer</option>
                                      <option value="public">Rented apartment</option>
                                      <option value="public">Dorm</option>
                                  </select>
                                </div>
                              </div>  
                            </form>
                          </div>
                          <div id="step-4">
                            <form class="form-horizontal form-label-left">
                              <span class="section"> <h1>Health Background</h1></span>
                              <span class="section" style="margin-left:90px;">I. Physical</span>
                               <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="first-name">Do you have problems with:
                                </label>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="first-name">Your Vision<span class="required">*</span>
                                </label>
                                <div class="col-md-2 col-sm-2">
                                  <div id="gender2" class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                      <input type="radio" name="gender" value="male"> Yes
                                    </label>
                                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                      <input type="radio" name="gender" value="female" checked=""> No
                                    </label>
                                  </div>
                                </div>
                                <label class="control-label col-md-1 col-sm-1" style="margin-left: -90px;" for="first-name">If yes <span class="required">*</span></label>
                                <div style="margin-left:-10px;" class="col-md-4 col-sm-4">
                                  <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="first-name">Your Hearing<span class="required">*</span>
                                </label>
                                <div class="col-md-2 col-sm-2">
                                  <div id="gender2" class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                      <input type="radio" name="gender" value="male"> Yes
                                    </label>
                                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                      <input type="radio" name="gender" value="female" checked=""> No
                                    </label>
                                  </div>
                                </div>
                                <label class="control-label col-md-1 col-sm-1" style="margin-left: -90px;" for="first-name">If yes <span class="required">*</span></label>
                                <div style="margin-left:-10px;" class="col-md-4 col-sm-4">
                                  <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="first-name">Your Speach<span class="required">*</span>
                                </label>
                                <div class="col-md-2 col-sm-2">
                                  <div id="gender2" class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                      <input type="radio" name="gender" value="male"> Yes
                                    </label>
                                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                      <input type="radio" name="gender" value="female" checked=""> No
                                    </label>
                                  </div>
                                </div>
                                <label class="control-label col-md-1 col-sm-1" style="margin-left: -90px;" for="first-name">If yes <span class="required">*</span></label>
                                <div style="margin-left:-10px;" class="col-md-4 col-sm-4">
                                  <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="first-name">Your General Health<span class="required">*</span>
                                </label>
                                <div class="col-md-2 col-sm-2">
                                  <div id="gender2" class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                      <input type="radio" name="gender" value="male"> Yes
                                    </label>
                                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                      <input type="radio" name="gender" value="female" checked=""> No
                                    </label>
                                  </div>
                                </div>
                                <label class="control-label col-md-1 col-sm-1" style="margin-left: -90px;" for="first-name">If yes <span class="required">*</span></label>
                                <div style="margin-left:-10px;" class="col-md-4 col-sm-4">
                                  <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <span class="section" style="margin-left:90px;">II. Psychological</span>
                               <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="first-name">Psychiatrist<span class="required">*</span>
                                </label>
                                <div class="col-md-2 col-sm-2">
                                  <div id="gender2" class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                      <input type="radio" name="gender" value="male"> Yes
                                    </label>
                                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                      <input type="radio" name="gender" value="female" checked=""> No
                                    </label>
                                  </div>
                                </div>
                                <label class="control-label col-md-1 col-sm-1" style="margin-left: -90px;" for="first-name">When <span class="required">*</span></label>
                                <div style="margin-left:-10px;" class="col-md-4 col-sm-4">
                                  <input type="date" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="first-name">For what? <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                  <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="10" data-parsley-maxlength="150" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                                data-parsley-validation-threshold="10"></textarea>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="first-name">Psychologist<span class="required">*</span>
                                </label>
                                <div class="col-md-2 col-sm-2">
                                  <div id="gender2" class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                      <input type="radio" name="gender" value="male"> Yes
                                    </label>
                                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                      <input type="radio" name="gender" value="female" checked=""> No
                                    </label>
                                  </div>
                                </div>
                                <label class="control-label col-md-1 col-sm-1" style="margin-left: -90px;" for="first-name">When <span class="required">*</span></label>
                                <div style="margin-left:-10px;" class="col-md-4 col-sm-4">
                                  <input type="date" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="first-name">For what? <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                  <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="10" data-parsley-maxlength="150" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                                data-parsley-validation-threshold="10"></textarea>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="first-name">Counselor<span class="required">*</span>
                                </label>
                                <div class="col-md-2 col-sm-2">
                                  <div id="gender2" class="btn-group" data-toggle="buttons">
                                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                      <input type="radio" name="gender" value="male"> Yes
                                    </label>
                                    <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                                      <input type="radio" name="gender" value="female" checked=""> No
                                    </label>
                                  </div>
                                </div>
                                <label class="control-label col-md-1 col-sm-1" style="margin-left: -90px;" for="first-name">When <span class="required">*</span></label>
                                <div style="margin-left:-10px;" class="col-md-4 col-sm-4">
                                  <input type="date" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="first-name">For what? <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                  <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="10" data-parsley-maxlength="150" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                                data-parsley-validation-threshold="10"></textarea>
                                </div>
                              </div>
                            </form>
                          </div>
                          <div id="step-5">
                            <form class="form-horizontal form-label-left">
                              <span class="section"> <h1>Interest and Hobbies</h1></span>
                              <span class="section" style="margin-left:90px;">I. Academic</span>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Club Interests</label>
                                <div class="col-md-6 col-sm-6 col-xs-6">
                                  <select class="select2_single form-control" tabindex="-1">
                                    <option></option>
                                    <option disabled="" selected=""></option>
                                    <option value="public">Math Club</option>
                                    <option value="public">Science Club</option>
                                    <option value="public">English Club</option>
                                    <option value="public">Filipino Club</option>
                                    <option value="public">Astronomy Club</option>
                                    <option value="public">Quizzers Club</option>
                                    <option value="public">Scoial Studies Club</option>
                                    <option value="public">Statistics Club</option>
                                    <option value="public">Geometry Club</option>
                                    <option value="public">Others</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="first-name">Others, please specify: <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                  <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="first-name">What is/are you favorite subject/s <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                  <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="10" data-parsley-maxlength="150" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                                data-parsley-validation-threshold="10"></textarea>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="first-name">What is/are your least favorite subject <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                  <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="10" data-parsley-maxlength="150" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                                data-parsley-validation-threshold="10"></textarea>
                                </div>
                              </div>
                              <span class="section" style="margin-left:90px;">Ii. Extra-Culicular</span>
                              <div class="form-group">
                                <label class="control-label col-md-4 col-sm-4" for="first-name">Hobbies (according to preference) <span class="required">*</span>
                                </label>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="first-name">1. <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                  <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div><div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="first-name">2. <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                  <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="first-name">3. <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                  <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="first-name">4. <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                  <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12">Organization of your interest<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                  <select class="select2_single form-control" tabindex="-1">
                                    <option></option>
                                    <option disabled="" selected=""></option>
                                    <option value="public">Athletics Club</option>
                                    <option value="public">Religious Organization</option>
                                    <option value="public">Glee Club</option>
                                    <option value="public">Scouting</option>
                                    <option value="public">Praternity</option>
                                    <option value="public">Dramitics</option>
                                    <option value="public">Chess Club</option>
                                    <option value="public">College Organization</option>
                                    <option value="public">Activist Organization</option>
                                    <option value="public">Others</option>
                                  </select>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="first-name">Others, please specify: <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                  <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                            </form>
                          </div>
                          <div id="step-6">
                            <form class="form-horizontal form-label-left">
                              <span class="section"> <h1>Test Results</h1></span>
                              <span class="section" style="margin-left:90px;">Test Result 1</span>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3">Date Of Test<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                  <input id="birthday2" class="date-picker form-control col-md-7 col-xs-12" required="required" type="date">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="first-name">Name of Test <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                  <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="first-name">Raw Score(RS) <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                  <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="first-name">Percentile Rating(PR) <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                  <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="first-name">Description<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                  <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="10" data-parsley-maxlength="150" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                                data-parsley-validation-threshold="10"></textarea>
                                </div>
                              </div>
                              <span class="section" style="margin-left:90px;">Test Result 2</span>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3">Date Of Test <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                  <input id="birthday2" class="date-picker form-control col-md-7 col-xs-12" required="required" type="date">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="first-name">Name of Test <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                  <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="first-name">Raw Score(RS) <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                  <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="first-name">Percentile Rating(PR) <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                  <input type="text" id="first-name2" required="required" class="form-control col-md-7 col-xs-12">
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3" for="first-name">Description<span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6">
                                  <textarea id="message" required="required" class="form-control" name="message" data-parsley-trigger="keyup" data-parsley-minlength="10" data-parsley-maxlength="150" data-parsley-minlength-message="Come on! You need to enter at least a 20 caracters long comment.."
                                data-parsley-validation-threshold="10"></textarea>
                                </div>
                              </div>
                            </form>
                          </div>
                        </form>
                    </div>
                    <!-- End SmartWizard Content -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- jQuery Smart Wizard -->
    <script src="../vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

  
  </body>
</html>