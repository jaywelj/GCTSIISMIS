<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DataTables | Gentelella</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="../vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
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
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div style="border-bottom:5px solid #9a3532;">
              <div class="clearfix"></div>
              <!-- menu profile quick info -->
              <div class="profile clearfix">
                <div class="profile_pic">
                  <img src="images/img.jpg" alt="..." class="img-circle profile_img"  style="margin-left:100%; width:75%; margin-top:10px; ">
                </div>
                <div class="profile_info"  style="width:100%;">
                  <center>
                  <span>Welcome,</span>
                  <h2><strong>Jaywel B Javier</strong></h2>
                  <center>
                </div>
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
                      <?php
                      include("connectionString.php");  
                        $queryCollege = "SELECT * FROM tbl_college";
                        $resultCollege = mysqli_query($connect, $queryCollege); 
                                while($row = mysqli_fetch_array($resultCollege))  
                                {  
                                $collegeCode = $row['collegeCode'];
                                $collegeName = $row['collegeName'];
                                ?>

                                <li><a href="IndividualInventoryRecord.php?id=<?php echo $collegeCode; ?>"><?php echo $collegeName; ?> (<?php echo $collegeCode; ?>)</a></li>

                                
                                <?php  
                              }

                      ?>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i>Tally<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <?php
                      include("connectionString.php");  
                        $queryCollege = "SELECT * FROM tbl_college";
                        $resultCollege = mysqli_query($connect, $queryCollege); 
                                while($row = mysqli_fetch_array($resultCollege))  
                                {  
                                $collegeCode = $row['collegeCode'];
                                $collegeName = $row['collegeName'];
                                ?>

                                <li><a href="Tallytables.php?id=<?php echo $collegeCode; ?>"><?php echo $collegeName; ?> (<?php echo $collegeCode; ?>)</a></li> 

                                <?php  
                              }

                      ?>
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
                  <li><a><i class="fa fa-institution"></i> Manage Course And College <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="manageCourse.php">Course</a></li>
                      <li><a href="manageCollege.php">College</a></li>
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
                <h3>Manage College<small></small></h3>
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
                    <h2>College <small>Code And Name</small></h2>
                    <ul class="nav navbar-right">
                      <button class="btn btn-default btn-info" data-toggle="modal" data-target="#add_data_Modal" type="button">ADD ANOTHER COLLEGE</button>
                    </ul>
                    <!--NAVBAR TOOLBOX<ul class="nav navbar-right panel_toolbox">
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
                    </ul>-->
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <!--<p class="text-muted font-13 m-b-30">
                      The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p>-->
                    <table id="datatable-buttons" class="table table-striped table-bordered">

                      <thead>
                        <tr>
                          <th></th>
                          <th>College Code</th>
                          <th>College Name</th>
                        </tr>
                      </thead>


                      <tbody>
                        <?php  
                        include("connectionString.php");  
                        $queryCollege = "SELECT * FROM tbl_college";
                        $resultCollege = mysqli_query($connect, $queryCollege); 
                                while($row = mysqli_fetch_array($resultCollege))  
                                {  
                                    ?>  
                                    <tr>
                                        <td>
                                            
                                            <button class="btn btn-default btn-info" data-toggle="modal" data-target="#view_data_Modal" type="button"><i class="fa fa-list"></i></button>

                                            <button class="btn btn-default btn-warning" data-toggle="modal" data-target="#edit_data_Modal" type="button"><i class="fa fa-edit"></i></button>

                                            <button class="btn btn-default btn-danger" type="button"><i class="fa fa-trash"></i></button>
                                            
                                        </td>
                                        <td> <?php echo $row['collegeCode'];?> </td>
                                        <td> <?php echo $row['collegeName'];?> </td>
                                        </tr>  
                           <?php
                                }
                           ?> 
                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!--Other Tables
              othertables/-->
            </div>
          </div>
        </div>
        <!-- /page content -->
        <!--Modal view-->
        <div id="view_data_Modal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Account Details</h4>
              </div>
              <div class="modal-body">
                <form method="post" id="insert_form" style="font-size: 16px;">
                  <table class="table">
                      <tbody>
                        <tr>
                          <th scope="row">Name</th>
                          <td>TIger Nixon</td>
                        </tr>
                        <tr>
                          <th scope="row">Username</th>
                          <td>nexTiger</td>
                        </tr>
                        <tr>
                          <th scope="row">Account No.</th>
                          <td>08-001-A</td>
                        </tr>
                        <tr>
                          <th scope="row">Address</th>
                          <td>Manila, Philippines</td>
                        </tr>
                        <tr>
                          <th scope="row">Gender</th>
                          <td>Male</td>
                        </tr>
                        <tr>
                          <th scope="row">Date of Birth</th>
                          <td>2011/04/25</td>
                        </tr>
                        <tr>
                          <th scope="row">Contact No.</th>
                          <td>09778711191</td>
                        </tr>
                        <tr>
                          <th scope="row">Email</th>
                          <td>NixonT@gmail.com</td>
                        </tr>
                      </tbody>
                    </table>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        <!--/Modal view-->
        <!--Modal Edit-->
        <div id="edit_data_Modal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Update Account</h4>
              </div>
              <div class="modal-body">
                <form method="post" id="insert_form">
                  <label>Username</label>
                  <input type="text" name="name" id="name" value="Tiger" class="form-control" />
                  <br />
                  <label>Last Name</label>
                  <input type="text" name="name" id="name" value="Nixon" class="form-control" />
                  <br />
                  <label>Middle Name</label>
                  <input type="text" name="name" id="name" value="" class="form-control" />
                  <br />
                  <label>Username</label>
                  <input type="text" name="name" id="name" value="NexTiger" class="form-control" />
                  <br />
                  <label>Email</label>
                  <input type="email" name="name" id="name" value="NixonT@gmail.com" class="form-control" />
                  <br />
                  <label>Address</label>
                  <textarea name="address" id="address" class="form-control">Manila, Philippines</textarea>
                  <br />
                  <label>Select Gender</label>
                  <select name="gender" id="gender" class="form-control">
                    <option value="Male">Male</option>  
                    <option value="Female">Female</option>
                  </select>
                  <br />
                  <label>Date of Birth</label>
                  <input type="Date" name="name" id="name" value="" class="form-control" />
                  <br />  
                  <label>Contact No</label>
                  <input type="text" name="designation" value="09778711191" id="designation" class="form-control" />
                  <br />
                  <input type="submit" name="insert" id="insert" value="Cancel" class="btn btn-danger pull-right" />
                  <input type="submit" name="insert" id="insert" value="Update" class="btn btn-success pull-right" />
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        <!--/Modal Edit-->
        <!--Modal Edit-->
        <div id="add_data_Modal" class="modal fade">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add College</h4>
              </div>
              <div class="modal-body">
                <form method="post" id="insert_form" enctype="multipart/form-data">
                  <label>College Code</label>
                  <input type="text" name="txtbxCollegeCode" id="txtbxCollegeCode" class="form-control" />
                  <br />
                  <label>College Name</label>
                  <input type="text" name="txtbxCollegeName" id="txtbxCollegeName" class="form-control" />
                  <br />
                  <input type="submit" name="btnAdd" id="btnAdd" value="Add College" class="btn btn-success pull-right" />
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
              <?php
                if(isset($_POST['btnAdd'])) 
                {
                    //including the database connection file
                    include_once("connectionString.php");

                    $VarcharCollegeCode = mysqli_real_escape_string($connect, $_POST['txtbxCollegeCode']);

                    $VarcharCollegeName = mysqli_real_escape_string($connect, $_POST['txtbxCollegeName']);
                    
                    
                    //first name validation if input is a space 
                    // checking empty fields
                    if(empty($VarcharCollegeCode) || empty($VarcharCollegeName)) 
                    {
                             
                        if(empty($VarcharCollegeCode))
                        {
                            $message = "Enter a Legitimate College Code";
                            echo "<script type='text/javascript'>alert('$message');</script>";
                        }
                        if(empty($VarcharCollegeName)) 
                        {
                            $message = "Enter a Legitimate College Name";
                            echo "<script type='text/javascript'>alert('$message');</script>";
                        }
                        //link to the previous page
                        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
                     } 
                    else 
                    { 
                        // if all the fields are filled (not empty) 
                        //insert data to database   
                      
                        $queryAdd = "INSERT INTO `tbl_college` (`collegeCode`, `collegeName`) VALUES ('$VarcharCollegeCode', '$VarcharCollegeName')";
                        if(mysqli_query($connect, $queryAdd))
                        {
                            $message = "College added successfully!";
                            echo "<script type='text/javascript'>alert('$message');</script>";
                            //redirectig to the display page. In our case, it is index.php
                            echo "<script type='text/javascript'>location.href = 'manageCollege.php';</script>";

                        }
                        else
                        { 
                          $message = "Query Error";
                            echo "<script type='text/javascript'>alert('$message');</script>";

                          $query = "SELECT * FROM tbl_college WHERE collegeCode='$VarcharCollegeCode' ";
                          $result = mysqli_query($connect, $query);

                          if (mysqli_num_rows($result) == 1) {

                          $message = "College Already Existing";
                          echo "<script type='text/javascript'>alert('$message');</script>";
                          
                        
                          
                          

                            $message = "Query Error";
                            echo "<script type='text/javascript'>alert('$message');</script>";
                            //redirectig to the display page. In our case, it is index.php
                            echo "<script type='text/javascript'>location.href = 'manageCollege.php';</script>";
                          }
                        }
                    }
                }

                ?>
            </div>
          </div>
        </div>
        <!--/Modal Edit-->

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
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

  </body>
</html>