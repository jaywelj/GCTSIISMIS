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
                  <img src="images/img.jpg" alt="..." class="img-circle profile_img" style="margin-left:100%; width:75%; margin-top:10px;">
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
                      <li><a href="indexStaff.php">Dashboard</a></li>
                      <li><a href="index2Staff.php">Dashboard2</a></li>
                      <li><a href="index3Staff.php">Dashboard3</a></li>
                    </ul>
                  <li><a><i class="fa fa-table"></i> Individual Inventory Record <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="IndividualInventoryRecordLHSStaff.php">Laboratory High School</a></li>
                      <li><a href="IndividualInventoryRecordSHSStaff.php">Senior High School</a></li>
                      <li><a href="IndividualInventoryRecordCollegeStaff.php">College</a></li>
                      <li><a href="IndividualInventoryRecordGraduateStaff.php">Graduate School</a></li>
                      <?php
                      session_start();
                      include(connectionString.php);
                      
                      ?>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-bar-chart-o"></i>Tally<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="TallytablesStaff.php">Laboratory High School</a></li>
                      <li><a href="TallytablesStaff.php">Senior High Schoool</a></li>
                      <li><a href="TallytablesStaff.php">College</a></li>
                      <li><a href="TallytablesStaff.php">Graduate School</a></li>
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
                      <!--<li><a href="manageAccountAdminAccount.php">Admin Account</a></li>
                      <li><a href="manageAccountStaffAccount.php">Staff Account</a></li>-->
                      <li><a href="manageAccountStudentAccountStaff.php">Student Account</a></li>
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
                <h3>Manage Accounts<small></small></h3>
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
                    <h2>Student Accounts <small>Users</small></h2>
                    <ul class="nav navbar-right">
                      <button class="btn btn-default btn-info" data-toggle="modal" data-target="#add_data_Modal" type="button">ADD AN ACCOUNT</button>
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
                          <th>Student Number</th>
                          <th>Student Name</th>
                          <th>Student Type</th>
                          <th>Couse</th>
                          <th>Year</th>
                          <th>Section</th>
                        </tr>
                      </thead>


                      <tbody>
                        <tr>
                              
                          <td>2015-04778-MN-0</td>
                          <td>Jaywel Bisarra Javier</td>
                          <td>College</td>
                          <td>BSIT</td>
                          <td>3</td>
                          <td>2D</td>                   
                        </tr>
                        <tr>
                                                    
                          <td>2015-02775-MN-0</td>
                          <td>Rona May Zamoras De Juan</td>
                          <td>College</td>
                          <td>BSIT</td>
                          <td>3</td>
                          <td>2D</td>
                        </tr>
                        <tr>
                                                    
                         <td>2015-02051-MN-0</td>
                          <td>Ace Anthony Diaz Tanoy</td>
                          <td>College</td>
                          <td>BSIT</td>
                          <td>3</td>
                          <td>2D</td>
                        </tr>
                        <tr>
                                                    
                          <td>2015-04780-MN-0</td>
                          <td>Rigel Khen Aguilan Marzan</td>
                          <td>College</td>
                          <td>BSIT</td>
                          <td>3</td>
                          <td>2D</td>
                        </tr>
                        <tr>
                                                    
                           <td>2015-04781-MN-0</td>
                          <td>Karen Algerika Isales</td>
                          <td>College</td>
                          <td>BSIT</td>
                          <td>3</td>
                          <td>2D</td>
                        </tr>
                        <tr>
                                                    
                         <td>2015-04782-MN-0</td>
                          <td>Ronnie Jr. Tatel Nagum</td>
                          <td>College</td>
                          <td>BSIT</td>
                          <td>3</td>
                          <td>2D</td>
                        </tr>
                        <tr>
                                                    
                          <td>2015-04783-MN-0</td>
                          <td>Hasmin Dor Mitory</td>
                          <td>College</td>
                          <td>BSA</td>
                          <td>2</td>
                          <td>5N</td>
                        </tr>
                        <tr>
                                                    
                          <td>2015-04784-MN-0</td>
                          <td>Maria Di Pinagpala</td>
                          <td>College</td>
                          <td>BSCE</td>
                          <td>4</td>
                          <td>6D</td>
                        </tr>
                        <tr>
                                                    
                          <td>2015-04785-MN-0</td>
                          <td>Juan Tina Tamad</td>
                          <td>College</td>
                          <td>BSCS</td>
                          <td>3</td>
                          <td>2N</td>
                        </tr>
                        <tr>
                                                    
                          <td>2015-04786-MN-0</td>
                          <td>Luningning Laging Dilim</td>
                          <td>Senior High School</td>
                          <td>SHSGAS</td>
                          <td>11</td>
                          <td>4</td>
                        </tr>
                        <tr>
                                                    
                          <td>2015-04787-MN-0</td>
                          <td>Century Tuna Turner</td>
                          <td>College</td>
                          <td>BSBA</td>
                          <td>1</td>
                          <td>12N</td>
                        </tr>
                        <tr>
                                                    
                         <td>2015-04788-MN-0</td>
                          <td>Sar Di Nas</td>
                          <td>College</td>
                          <td>BSBA</td>
                          <td>2</td>
                          <td>5N</td>
                        </tr>
                        <tr>
                                                    
                          <td>2015-04789-MN-0</td>
                          <td>Lucky Mee Yutu</td>
                          <td>College</td>
                          <td>BSCS</td>
                          <td>3</td>
                          <td>7N</td>
                        </tr>
                        <tr>
                                                    
                           <td>2015-04790-MN-0</td>
                          <td>Beel Zee Bub</td>
                          <td>College</td>
                          <td>BSIT</td>
                          <td>1</td>
                          <td>1D</td>
                        </tr>
                        <tr>
                                                    
                          <td>2015-04791-MN-0</td>
                          <td>Roberto Gonzaga Robaga</td>
                          <td>College</td>
                          <td>BSMM</td>
                          <td>4</td>
                          <td>3D</td>
                        </tr>
                        <tr>
                                                    
                         <td>2015-04792-MN-0</td>
                          <td>Ian Rewis Sylvan</td>
                          <td>College</td>
                          <td>BSCE</td>
                          <td>5</td>
                          <td>4D</td>
                        </tr>
                        <tr>
                                                    
                          <td>2015-04793-MN-0</td>
                          <td>Imogen Ritz Harison</td>
                          <td>College</td>
                          <td>BSIT</td>
                          <td>3</td>
                          <td>1D</td>
                        </tr>
                        <tr>
                                                    
                          <td>2015-04794-MN-0</td>
                          <td>Espeth Fernandez Santos</td>
                          <td>College</td>
                          <td>BSE</td>
                          <td>4</td>
                          <td>2N</td>
                        </tr>
                        <tr>
                                                    
                         <td>2015-04795-MN-0</td>
                          <td>Lukas Castro Ferron</td>
                          <td>College</td>
                          <td>BSCS</td>
                          <td>4</td>
                          <td>2D</td>
                        </tr>
                        <tr>
                                                    
                           <td>2015-04796-MN-0</td>
                          <td>Riggins Mar Roxas</td>
                          <td>College</td>
                          <td>ABE</td>
                          <td>2</td>
                          <td>4D</td>
                        </tr>
                        <tr>
                                                    
                          <td>2015-04797-MN-0</td>
                          <td>Hansel Sanchez Escobar</td>
                          <td>Senior High School</td>
                          <td>SHSSTEMS</td>
                          <td>12</td>
                          <td>3</td>
                        </tr>
                        <tr>
                                                    
                         <td>2015-04798-MN-0</td>
                          <td>Ammo Wagon Veran</td>
                          <td>College</td>
                          <td>BSIT</td>
                          <td>3</td>
                          <td>5D</td>
                        </tr>
                        <tr>
                                                    
                          <td>2017-04799-MN-0</td>
                          <td>Flincher Marquez Benitez</td>
                          <td>College</td>
                          <td>BSMM</td>
                          <td>3</td>
                          <td>4N</td>
                        </tr>
                        <tr>
                                                    
                          <td>2014-04800-MN-0</td>
                          <td>Hugo Suarez Romanov</td>
                          <td>College</td>
                          <td>BSCE</td>
                          <td>4</td>
                          <td>4D</td>
                        </tr>
                        <tr>
                                                    
                          <td>2017-04801-MN-0</td>
                          <td>Keaton Magno Peralta</td>
                          <td>Senior High School</td>
                          <td>SHSGAS</td>
                          <td>12</td>
                          <td>7</td>
                        </tr>
                        <tr>
                                                    
                          <td>2018-04802-MN-0</td>
                          <td>Aston Bently Martin</td>
                          <td>College</td>
                          <td>BPE</td>
                          <td>1</td>
                          <td>7D</td>
                        </tr>
                        <tr>
                                                    
                          <td>2016-04803-MN-0</td>
                          <td>Rohan Kelly Merza</td>
                          <td>College</td>
                          <td>BSCS</td>
                          <td>4</td>
                          <td>5D</td>
                        </tr>
                        <tr>
                                                    
                         <td>2014-04804-MN-0</td>
                          <td>Cosmos June Bennet</td>
                          <td>College</td>
                          <td>BSCS</td>
                          <td>2</td>
                          <td>2D</td>
                        </tr>
                        <tr>
                                                    
                         <td>2016-04805-MN-0</td>
                          <td>Bine Arie Brigit</td>
                          <td>College</td>
                          <td>BSIT</td>
                          <td>1</td>
                          <td>4N</td>
                        </tr>
                        <tr>
                                                    
                          <td>2016-04806-MN-0</td>
                          <td>Aski Neth Work</td>
                          <td>Senior High School</td>
                          <td>SHSHUMSSS</td>
                          <td>12</td>
                          <td>2</td>
                        </tr>
                        <tr>
                                                    
                          <td>2015-04807-MN-0</td>
                          <td>Damon Sigmund Farrel</td>
                          <td>College</td>
                          <td>ABE</td>
                          <td>4</td>
                          <td>2D</td>
                        </tr>
                        <tr>
                                                    
                          <td>2015-04808-MN-0</td>
                          <td>Resse Chucker Taylor</td>
                          <td>College</td>
                          <td>BSIT</td>
                          <td>2</td>
                          <td>2N</td>
                        </tr>
                        <tr>
                                                    
                          <td>2016-04809-MN-0</td>
                          <td>Aspen Cile Florence</td>
                          <td>College</td>
                          <td>BSMM</td>
                          <td>2</td>
                          <td>2N</td>
                        </tr>
                        <tr>
                                                    
                          <td>2015-04810-MN-0</td>
                          <td>Rylen Lopez Zara</td>
                          <td>College</td>
                          <td>BSCE</td>
                          <td>3</td>
                          <td>9N</td>
                        </tr>
                        <tr>
                                                    
                           <td>201-04811-MN-0</td>
                          <td>Tyce Rego Jetser</td>
                          <td>College</td>
                          <td>BSIT</td>
                          <td>2</td>
                          <td>5N</td>
                        </tr>
                        <tr>
                                                    
                          <td>2016-04812-MN-0</td>
                          <td>Torrin Wensley Romualdez</td>
                          <td>Senior High School</td>
                          <td>SHSGAS</td>
                          <td>11</td>
                          <td>5</td>
                        </tr>
                        <tr>
                                                    
                          <<td>2016-04813-MN-0</td>
                          <td>Sulien Barreto Fabregas</td>
                          <td>College</td>
                          <td>BSCS</td>
                          <td>1</td>
                          <td>4N</td>
                        </tr>
                        <tr>
                                                    
                          <td>2015-04814-MN-0</td>
                          <td>Daxten Curtis Manalo</td>
                          <td>College</td>
                          <td>BSMM</td>
                          <td>3</td>
                          <td>2N</td>
                        </tr>
                        <tr>
                                                    
                          <td>2017-04815-MN-0</td>
                          <td>Sulivan Mendez Carpio</td>
                          <td>College</td>
                          <td>BSHM</td>
                          <td>3</td>
                          <td>5D</td>
                        </tr>
                        <tr>
                                                    
                          <td>2018-04816-MN-0</td>
                          <td>Laith Pala Gege</td>
                          <td>College</td>
                          <td>BPe</td>
                          <td>3</td>
                          <td>1D</td>
                        </tr>
                        <tr>
                                                    
                          <td>2018-04817-MN-0</td>
                          <td>Bryn Jordan Guru</td>
                          <td>College</td>
                          <td>BSID</td>
                          <td>3</td>
                          <td>5D</td>
                        </tr>
                        <tr>
                                                    
                          <td>2015-04818-MN-0</td>
                          <td>Spense Lang Ong</td>
                          <td>College</td>
                          <td>BSIT</td>
                          <td>1</td>
                          <td>5N</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!--Other Tables
              <div name="OTHERTABLES">
	              <div class="col-md-12 col-sm-12 col-xs-12">
	                <div class="x_panel">
	                  <div class="x_title">
	                    <h2>Lab High School<small></small></h2>
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
	                    <p class="text-muted font-13 m-b-30">
	                      DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>
	                    </p>
	                    <table id="datatable" class="table table-striped table-bordered">
	                      <thead>
	                        <tr>
	                          <th>Name</th>
	                          <th>Year</th>
	                          <th>Section</th>
	                          <th>Age</th>
	                          <th>Gender</th>
	                          <th>Contact No.</th>
	                        </tr>
	                      </thead>


	                      <tbody>
	                        <tr>
	                          <td>Tiger Nixon</td>
	                          <td>System Architect</td>
	                          <td>Edinburgh</td>
	                          <td>61</td>
	                          <td>2011/04/25</td>
	                          <td>$320,800</td>
	                        </tr>
	                        <tr>
	                          <td>Garrett Winters</td>
	                          <td>Accountant</td>
	                          <td>Tokyo</td>
	                          <td>63</td>
	                          <td>2011/07/25</td>
	                          <td>$170,750</td>
	                        </tr>
	                        <tr>
	                          <td>Ashton Cox</td>
	                          <td>Junior Technical Author</td>
	                          <td>San Francisco</td>
	                          <td>66</td>
	                          <td>2009/01/12</td>
	                          <td>$86,000</td>
	                        </tr>
	                        <tr>
	                          <td>Cedric Kelly</td>
	                          <td>Senior Javascript Developer</td>
	                          <td>Edinburgh</td>
	                          <td>22</td>
	                          <td>2012/03/29</td>
	                          <td>$433,060</td>
	                        </tr>
	                        <tr>
	                          <td>Airi Satou</td>
	                          <td>Accountant</td>
	                          <td>Tokyo</td>
	                          <td>33</td>
	                          <td>2008/11/28</td>
	                          <td>$162,700</td>
	                        </tr>
	                        <tr>
	                          <td>Brielle Williamson</td>
	                          <td>Integration Specialist</td>
	                          <td>New York</td>
	                          <td>61</td>
	                          <td>2012/12/02</td>
	                          <td>$372,000</td>
	                        </tr>
	                        <tr>
	                          <td>Herrod Chandler</td>
	                          <td>Sales Assistant</td>
	                          <td>San Francisco</td>
	                          <td>59</td>
	                          <td>2012/08/06</td>
	                          <td>$137,500</td>
	                        </tr>
	                        <tr>
	                          <td>Rhona Davidson</td>
	                          <td>Integration Specialist</td>
	                          <td>Tokyo</td>
	                          <td>55</td>
	                          <td>2010/10/14</td>
	                          <td>$327,900</td>
	                        </tr>
	                        <tr>
	                          <td>Colleen Hurst</td>
	                          <td>Javascript Developer</td>
	                          <td>San Francisco</td>
	                          <td>39</td>
	                          <td>2009/09/15</td>
	                          <td>$205,500</td>
	                        </tr>
	                        <tr>
	                          <td>Sonya Frost</td>
	                          <td>Software Engineer</td>
	                          <td>Edinburgh</td>
	                          <td>23</td>
	                          <td>2008/12/13</td>
	                          <td>$103,600</td>
	                        </tr>
	                        <tr>
	                          <td>Jena Gaines</td>
	                          <td>Office Manager</td>
	                          <td>London</td>
	                          <td>30</td>
	                          <td>2008/12/19</td>
	                          <td>$90,560</td>
	                        </tr>
	                        <tr>
	                          <td>Quinn Flynn</td>
	                          <td>Support Lead</td>
	                          <td>Edinburgh</td>
	                          <td>22</td>
	                          <td>2013/03/03</td>
	                          <td>$342,000</td>
	                        </tr>
	                        <tr>
	                          <td>Charde Marshall</td>
	                          <td>Regional Director</td>
	                          <td>San Francisco</td>
	                          <td>36</td>
	                          <td>2008/10/16</td>
	                          <td>$470,600</td>
	                        </tr>
	                        <tr>
	                          <td>Haley Kennedy</td>
	                          <td>Senior Marketing Designer</td>
	                          <td>London</td>
	                          <td>43</td>
	                          <td>2012/12/18</td>
	                          <td>$313,500</td>
	                        </tr>
	                        <tr>
	                          <td>Tatyana Fitzpatrick</td>
	                          <td>Regional Director</td>
	                          <td>London</td>
	                          <td>19</td>
	                          <td>2010/03/17</td>
	                          <td>$385,750</td>
	                        </tr>
	                        <tr>
	                          <td>Michael Silva</td>
	                          <td>Marketing Designer</td>
	                          <td>London</td>
	                          <td>66</td>
	                          <td>2012/11/27</td>
	                          <td>$198,500</td>
	                        </tr>
	                        <tr>
	                          <td>Paul Byrd</td>
	                          <td>Chief Financial Officer (CFO)</td>
	                          <td>New York</td>
	                          <td>64</td>
	                          <td>2010/06/09</td>
	                          <td>$725,000</td>
	                        </tr>
	                        <tr>
	                          <td>Gloria Little</td>
	                          <td>Systems Administrator</td>
	                          <td>New York</td>
	                          <td>59</td>
	                          <td>2009/04/10</td>
	                          <td>$237,500</td>
	                        </tr>
	                        <tr>
	                          <td>Bradley Greer</td>
	                          <td>Software Engineer</td>
	                          <td>London</td>
	                          <td>41</td>
	                          <td>2012/10/13</td>
	                          <td>$132,000</td>
	                        </tr>
	                        <tr>
	                          <td>Dai Rios</td>
	                          <td>Personnel Lead</td>
	                          <td>Edinburgh</td>
	                          <td>35</td>
	                          <td>2012/09/26</td>
	                          <td>$217,500</td>
	                        </tr>
	                        <tr>
	                          <td>Jenette Caldwell</td>
	                          <td>Development Lead</td>
	                          <td>New York</td>
	                          <td>30</td>
	                          <td>2011/09/03</td>
	                          <td>$345,000</td>
	                        </tr>
	                        <tr>
	                          <td>Yuri Berry</td>
	                          <td>Chief Marketing Officer (CMO)</td>
	                          <td>New York</td>
	                          <td>40</td>
	                          <td>2009/06/25</td>
	                          <td>$675,000</td>
	                        </tr>
	                        <tr>
	                          <td>Caesar Vance</td>
	                          <td>Pre-Sales Support</td>
	                          <td>New York</td>
	                          <td>21</td>
	                          <td>2011/12/12</td>
	                          <td>$106,450</td>
	                        </tr>
	                        <tr>
	                          <td>Doris Wilder</td>
	                          <td>Sales Assistant</td>
	                          <td>Sidney</td>
	                          <td>23</td>
	                          <td>2010/09/20</td>
	                          <td>$85,600</td>
	                        </tr>
	                        <tr>
	                          <td>Angelica Ramos</td>
	                          <td>Chief Executive Officer (CEO)</td>
	                          <td>London</td>
	                          <td>47</td>
	                          <td>2009/10/09</td>
	                          <td>$1,200,000</td>
	                        </tr>
	                        <tr>
	                          <td>Gavin Joyce</td>
	                          <td>Developer</td>
	                          <td>Edinburgh</td>
	                          <td>42</td>
	                          <td>2010/12/22</td>
	                          <td>$92,575</td>
	                        </tr>
	                        <tr>
	                          <td>Jennifer Chang</td>
	                          <td>Regional Director</td>
	                          <td>Singapore</td>
	                          <td>28</td>
	                          <td>2010/11/14</td>
	                          <td>$357,650</td>
	                        </tr>
	                        <tr>
	                          <td>Brenden Wagner</td>
	                          <td>Software Engineer</td>
	                          <td>San Francisco</td>
	                          <td>28</td>
	                          <td>2011/06/07</td>
	                          <td>$206,850</td>
	                        </tr>
	                        <tr>
	                          <td>Fiona Green</td>
	                          <td>Chief Operating Officer (COO)</td>
	                          <td>San Francisco</td>
	                          <td>48</td>
	                          <td>2010/03/11</td>
	                          <td>$850,000</td>
	                        </tr>
	                        <tr>
	                          <td>Shou Itou</td>
	                          <td>Regional Marketing</td>
	                          <td>Tokyo</td>
	                          <td>20</td>
	                          <td>2011/08/14</td>
	                          <td>$163,000</td>
	                        </tr>
	                        <tr>
	                          <td>Michelle House</td>
	                          <td>Integration Specialist</td>
	                          <td>Sidney</td>
	                          <td>37</td>
	                          <td>2011/06/02</td>
	                          <td>$95,400</td>
	                        </tr>
	                        <tr>
	                          <td>Suki Burks</td>
	                          <td>Developer</td>
	                          <td>London</td>
	                          <td>53</td>
	                          <td>2009/10/22</td>
	                          <td>$114,500</td>
	                        </tr>
	                        <tr>
	                          <td>Prescott Bartlett</td>
	                          <td>Technical Author</td>
	                          <td>London</td>
	                          <td>27</td>
	                          <td>2011/05/07</td>
	                          <td>$145,000</td>
	                        </tr>
	                        <tr>
	                          <td>Gavin Cortez</td>
	                          <td>Team Leader</td>
	                          <td>San Francisco</td>
	                          <td>22</td>
	                          <td>2008/10/26</td>
	                          <td>$235,500</td>
	                        </tr>
	                        <tr>
	                          <td>Martena Mccray</td>
	                          <td>Post-Sales support</td>
	                          <td>Edinburgh</td>
	                          <td>46</td>
	                          <td>2011/03/09</td>
	                          <td>$324,050</td>
	                        </tr>
	                        <tr>
	                          <td>Unity Butler</td>
	                          <td>Marketing Designer</td>
	                          <td>San Francisco</td>
	                          <td>47</td>
	                          <td>2009/12/09</td>
	                          <td>$85,675</td>
	                        </tr>
	                        <tr>
	                          <td>Howard Hatfield</td>
	                          <td>Office Manager</td>
	                          <td>San Francisco</td>
	                          <td>51</td>
	                          <td>2008/12/16</td>
	                          <td>$164,500</td>
	                        </tr>
	                        <tr>
	                          <td>Hope Fuentes</td>
	                          <td>Secretary</td>
	                          <td>San Francisco</td>
	                          <td>41</td>
	                          <td>2010/02/12</td>
	                          <td>$109,850</td>
	                        </tr>
	                        <tr>
	                          <td>Vivian Harrell</td>
	                          <td>Financial Controller</td>
	                          <td>San Francisco</td>
	                          <td>62</td>
	                          <td>2009/02/14</td>
	                          <td>$452,500</td>
	                        </tr>
	                        <tr>
	                          <td>Timothy Mooney</td>
	                          <td>Office Manager</td>
	                          <td>London</td>
	                          <td>37</td>
	                          <td>2008/12/11</td>
	                          <td>$136,200</td>
	                        </tr>
	                        <tr>
	                          <td>Jackson Bradshaw</td>
	                          <td>Director</td>
	                          <td>New York</td>
	                          <td>65</td>
	                          <td>2008/09/26</td>
	                          <td>$645,750</td>
	                        </tr>
	                        <tr>
	                          <td>Olivia Liang</td>
	                          <td>Support Engineer</td>
	                          <td>Singapore</td>
	                          <td>64</td>
	                          <td>2011/02/03</td>
	                          <td>$234,500</td>
	                        </tr>
	                        <tr>
	                          <td>Bruno Nash</td>
	                          <td>Software Engineer</td>
	                          <td>London</td>
	                          <td>38</td>
	                          <td>2011/05/03</td>
	                          <td>$163,500</td>
	                        </tr>
	                        <tr>
	                          <td>Sakura Yamamoto</td>
	                          <td>Support Engineer</td>
	                          <td>Tokyo</td>
	                          <td>37</td>
	                          <td>2009/08/19</td>
	                          <td>$139,575</td>
	                        </tr>
	                        <tr>
	                          <td>Thor Walton</td>
	                          <td>Developer</td>
	                          <td>New York</td>
	                          <td>61</td>
	                          <td>2013/08/11</td>
	                          <td>$98,540</td>
	                        </tr>
	                        <tr>
	                          <td>Finn Camacho</td>
	                          <td>Support Engineer</td>
	                          <td>San Francisco</td>
	                          <td>47</td>
	                          <td>2009/07/07</td>
	                          <td>$87,500</td>
	                        </tr>
	                        <tr>
	                          <td>Serge Baldwin</td>
	                          <td>Data Coordinator</td>
	                          <td>Singapore</td>
	                          <td>64</td>
	                          <td>2012/04/09</td>
	                          <td>$138,575</td>
	                        </tr>
	                        <tr>
	                          <td>Zenaida Frank</td>
	                          <td>Software Engineer</td>
	                          <td>New York</td>
	                          <td>63</td>
	                          <td>2010/01/04</td>
	                          <td>$125,250</td>
	                        </tr>
	                        <tr>
	                          <td>Zorita Serrano</td>
	                          <td>Software Engineer</td>
	                          <td>San Francisco</td>
	                          <td>56</td>
	                          <td>2012/06/01</td>
	                          <td>$115,000</td>
	                        </tr>
	                        <tr>
	                          <td>Jennifer Acosta</td>
	                          <td>Junior Javascript Developer</td>
	                          <td>Edinburgh</td>
	                          <td>43</td>
	                          <td>2013/02/01</td>
	                          <td>$75,650</td>
	                        </tr>
	                        <tr>
	                          <td>Cara Stevens</td>
	                          <td>Sales Assistant</td>
	                          <td>New York</td>
	                          <td>46</td>
	                          <td>2011/12/06</td>
	                          <td>$145,600</td>
	                        </tr>
	                        <tr>
	                          <td>Hermione Butler</td>
	                          <td>Regional Director</td>
	                          <td>London</td>
	                          <td>47</td>
	                          <td>2011/03/21</td>
	                          <td>$356,250</td>
	                        </tr>
	                        <tr>
	                          <td>Lael Greer</td>
	                          <td>Systems Administrator</td>
	                          <td>London</td>
	                          <td>21</td>
	                          <td>2009/02/27</td>
	                          <td>$103,500</td>
	                        </tr>
	                        <tr>
	                          <td>Jonas Alexander</td>
	                          <td>Developer</td>
	                          <td>San Francisco</td>
	                          <td>30</td>
	                          <td>2010/07/14</td>
	                          <td>$86,500</td>
	                        </tr>
	                        <tr>
	                          <td>Shad Decker</td>
	                          <td>Regional Director</td>
	                          <td>Edinburgh</td>
	                          <td>51</td>
	                          <td>2008/11/13</td>
	                          <td>$183,000</td>
	                        </tr>
	                        <tr>
	                          <td>Michael Bruce</td>
	                          <td>Javascript Developer</td>
	                          <td>Singapore</td>
	                          <td>29</td>
	                          <td>2011/06/27</td>
	                          <td>$183,000</td>
	                        </tr>
	                        <tr>
	                          <td>Donna Snider</td>
	                          <td>Customer Support</td>
	                          <td>New York</td>
	                          <td>27</td>
	                          <td>2011/01/25</td>
	                          <td>$112,000</td>
	                        </tr>
	                      </tbody>
	                    </table>
	                  </div>
	                </div>
	              </div>

	              <div class="col-md-12 col-sm-12 col-xs-12">
	                <div class="x_panel">
	                  <div class="x_title">
	                    <h2>Plus Table Design</small></h2>
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
	                    <p class="text-muted font-13 m-b-30">
	                      DataTables has most features enabled by default, so all you need to do to use it with your own tables is to call the construction function: <code>$().DataTable();</code>
	                    </p>
	                    <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action">
	                      <thead>
	                        <tr>
	                          <th>
	                          	<th><input type="checkbox" id="check-all" class="flat"></th>
	                          </th>
	                          <th>Name</th>
	                          <th>Position</th>
	                          <th>Office</th>
	                          <th>Age</th>
	                          <th>Start date</th>
	                          <th>Salary</th>
	                        </tr>
	                      </thead>


	                      <tbody>
	                        <tr>
	                          <td>
								            <th><input type="checkbox" id="check-all" class="flat"></th>
							              </td>
	                          <td>Tiger Nixon</td>
	                          <td>System Architect</td>
	                          <td>Edinburgh</td>
	                          <td>61</td>
	                          <td>2011/04/25</td>
	                          <td>$320,800</td>
	                        </tr>
	                        <tr>
	                          <td>
								  				  <th><input type="checkbox" id="check-all" class="flat"></th>
							  				    </td>
	                          <td>Garrett Winters</td>
	                          <td>Accountant</td>
	                          <td>Tokyo</td>
	                          <td>63</td>
	                          <td>2011/07/25</td>
	                          <td>$170,750</td>
	                        </tr>
	                        <tr>
														<td>
															 <th><input type="checkbox" id="check-all" class="flat"></th>
													  </td>
	                          <td>Ashton Cox</td>
	                          <td>Junior Technical Author</td>
	                          <td>San Francisco</td>
	                          <td>66</td>
	                          <td>2009/01/12</td>
	                          <td>$86,000</td>
	                        </tr>
	                        <tr>
	                          <td>
	                          	<th><input type="checkbox" id="check-all" class="flat"></th>
	                          </td>
	                          <td>Cedric Kelly</td>
	                          <td>Senior Javascript Developer</td>
	                          <td>Edinburgh</td>
	                          <td>22</td>
	                          <td>2012/03/29</td>
	                          <td>$433,060</td>
	                        </tr>
	                        <tr>
	                        	<td>
	                        		<th><input type="checkbox" id="check-all" class="flat"></th>
	                        	</td>
	                        	<td>Airi Satou</td>
	                        	<td>Accountant</td>
	                        	<td>Tokyo</td>
	                        	<td>33</td>
	                        	<td>2008/11/28</td>
	                        	<td>$162,700</td>
	                        </tr>
	                        <tr>
	                        	<td>
	                        		<th><input type="checkbox" id="check-all" class="flat"></th>
	                        	</td>
	                        	<td>Brielle Williamson</td>
	                        	<td>Integration Specialist</td>
	                        	<td>New York</td>
	                        	<td>61</td>
	                        	<td>2012/12/02</td>
	                        	<td>$372,000</td>
	                        </tr>
	                        <tr>
	                        	<td>
	                        		<th><input type="checkbox" id="check-all" class="flat"></th>
	                        	</td>
	                        	<td>Herrod Chandler</td>
	                        	<td>Sales Assistant</td>
	                        	<td>San Francisco</td>
	                        	<td>59</td>
	                        	<td>2012/08/06</td>
	                        	<td>$137,500</td>
	                        </tr>
	                        <tr>
	                        	<td>
	                        		<th><input type="checkbox" id="check-all" class="flat"></th>
	                        	</td>
	                        	<td>Rhona Davidson</td>
	                        	<td>Integration Specialist</td>
	                        	<td>Tokyo</td>
	                        	<td>55</td>
	                        	<td>2010/10/14</td>
	                        	<td>$327,900</td>
	                        </tr>
	                        <tr>
	                        	<td>
	                        		<th><input type="checkbox" id="check-all" class="flat"></th>
	                        	</td>
	                        	<td>Colleen Hurst</td>
	                        	<td>Javascript Developer</td>
	                        	<td>San Francisco</td>
	                        	<td>39</td>
	                        	<td>2009/09/15</td>
	                        	<td>$205,500</td>
	                        </tr>
	                        <tr>
	                        	<td>
	                        		<th><input type="checkbox" id="check-all" class="flat"></th>
	                        	</td>
	                        	<td>Sonya Frost</td>
	                        	<td>Software Engineer</td>
	                        	<td>Edinburgh</td>
	                        	<td>23</td>
	                        	<td>2008/12/13</td>
	                        	<td>$103,600</td>
	                        </tr>
	                        <tr>
	                        	<td>
	                        		<th><input type="checkbox" id="check-all" class="flat"></th>
	                        	</td>
	                        	<td>Jena Gaines</td>
	                        	<td>Office Manager</td>
	                        	<td>London</td>
	                        	<td>30</td>
	                        	<td>2008/12/19</td>
	                        	<td>$90,560</td>
	                        </tr>
	                        <tr>
	                        	<td>
	                        		<th><input type="checkbox" id="check-all" class="flat"></th>
	                        	</td>
	                        	<td>Quinn Flynn</td>
	                        	<td>Support Lead</td>
	                        	<td>Edinburgh</td>
	                        	<td>22</td>
	                        	<td>2013/03/03</td>
	                        	<td>$342,000</td>
	                        </tr>
	                        <tr>
	                        	<td>
	                        		<th><input type="checkbox" id="check-all" class="flat"></th>
	                        	</td>
	                        	<td>Charde Marshall</td>
	                        	<td>Regional Director</td>
	                        	<td>San Francisco</td>
	                        	<td>36</td>
	                        	<td>2008/10/16</td>
	                        	<td>$470,600</td>
	                        </tr>
	                        <tr>
	                        	<td>
	                        		<th><input type="checkbox" id="check-all" class="flat"></th>
	                        	</td>
	                        	<td>Haley Kennedy</td>
	                        	<td>Senior Marketing Designer</td>
	                        	<td>London</td>
	                        	<td>43</td>
	                        	<td>2012/12/18</td>
	                        	<td>$313,500</td>
	                        </tr>
	                        <tr>
	                        	<td>
	                        		<th><input type="checkbox" id="check-all" class="flat"></th>
	                        	</td>
	                        	<td>Tatyana Fitzpatrick</td>
	                        	<td>Regional Director</td>
	                        	<td>London</td>
	                        	<td>19</td>
	                        	<td>2010/03/17</td>
	                        	<td>$385,750</td>
	                        </tr>
	                        <tr>
	                        	<td>
	                        		<th><input type="checkbox" id="check-all" class="flat"></th>
	                        	</td>
	                        	<td>Michael Silva</td>
	                        	<td>Marketing Designer</td>
	                        	<td>London</td>
	                        	<td>66</td>
	                        	<td>2012/11/27</td>
	                        	<td>$198,500</td>
	                        </tr>
	                        <tr>
	                        	<td>
	                        		<th><input type="checkbox" id="check-all" class="flat"></th>
	                        	</td>
	                        	<td>Paul Byrd</td>
	                        	<td>Chief Financial Officer (CFO)</td>
	                        	<td>New York</td>
	                        	<td>64</td>
	                        	<td>2010/06/09</td>
	                        	<td>$725,000</td>
	                        </tr>
	                        <tr>
	                        	<td>
	                        		<th><input type="checkbox" id="check-all" class="flat"></th>
	                        	</td>
	                        	<td>Gloria Little</td>
	                        	<td>Systems Administrator</td>
	                        	<td>New York</td>
	                        	<td>59</td>
	                        	<td>2009/04/10</td>
	                        	<td>$237,500</td>
	                        </tr>
	                        <tr>
	                        	<td>
	                        		<th><input type="checkbox" id="check-all" class="flat"></th>
	                        	</td>
	                        	<td>Bradley Greer</td>
	                        	<td>Software Engineer</td>
	                        	<td>London</td>
	                        	<td>41</td>
	                        	<td>2012/10/13</td>
	                        	<td>$132,000</td>
	                        </tr>
	                        <tr>
	                        	<td>
	                        		<th><input type="checkbox" id="check-all" class="flat"></th>
	                        	</td>
	                        	<td>Dai Rios</td>
	                        	<td>Personnel Lead</td>
	                        	<td>Edinburgh</td>
	                        	<td>35</td>
	                        	<td>2012/09/26</td>
	                        	<td>$217,500</td>
	                        </tr>
	                        <tr>
	                        	<td>
	                        		<th><input type="checkbox" id="check-all" class="flat"></th>
	                        	</td>
	                        	<td>Jenette Caldwell</td>
	                        	<td>Development Lead</td>
	                        	<td>New York</td>
	                        	<td>30</td>
	                        	<td>2011/09/03</td>
	                        	<td>$345,000</td>
	                        </tr>
	                        <tr>
	                        	<td>
	                        		<th><input type="checkbox" id="check-all" class="flat"></th>
	                        	</td>
	                        	<td>Yuri Berry</td>
	                        	<td>Chief Marketing Officer (CMO)</td>
	                        	<td>New York</td>
	                        	<td>40</td>
	                        	<td>2009/06/25</td>
	                        	<td>$675,000</td>
	                        </tr>
	                        <tr>
	                        	<td>
	                        		<th><input type="checkbox" id="check-all" class="flat"></th>
	                        	</td>
	                        	<td>Caesar Vance</td>
	                        	<td>Pre-Sales Support</td>
	                        	<td>New York</td>
	                        	<td>21</td>
	                        	<td>2011/12/12</td>
	                        	<td>$106,450</td>
	                        </tr>
	                        <tr>
	                        	<td>
	                        		<th><input type="checkbox" id="check-all" class="flat"></th>
	                        	</td>
	                        	<td>Doris Wilder</td>
	                        	<td>Sales Assistant</td>
	                        	<td>Sidney</td>
	                        	<td>23</td>
	                        	<td>2010/09/20</td>
	                        	<td>$85,600</td>
	                        </tr>
	                        <tr>
	                        	<td>
	                        		<th><input type="checkbox" id="check-all" class="flat"></th>
	                        	</td>
	                        	<td>Angelica Ramos</td>
	                        	<td>Chief Executive Officer (CEO)</td>
	                        	<td>London</td>
	                        	<td>47</td>
	                        	<td>2009/10/09</td>
	                        	<td>$1,200,000</td>
	                        </tr>
	                        <tr>
	                        	<td>
	                        		<th><input type="checkbox" id="check-all" class="flat"></th>
	                        	</td>
	                        	<td>Gavin Joyce</td>
	                        	<td>Developer</td>
	                        	<td>Edinburgh</td>
	                        	<td>42</td>
	                        	<td>2010/12/22</td>
	                        	<td>$92,575</td>
	                        </tr>
	                        <tr>
	                        	<td>
	                        		<th><input type="checkbox" id="check-all" class="flat"></th>
	                        	</td>
	                        	<td>Jennifer Chang</td>
	                        	<td>Regional Director</td>
	                        	<td>Singapore</td>
	                        	<td>28</td>
	                        	<td>2010/11/14</td>
	                        	<td>$357,650</td>
	                        </tr>
	                        <tr>
	                        	<td>
	                        		<th><input type="checkbox" id="check-all" class="flat"></th>
	                        	</td>
	                        	<td>Brenden Wagner</td>
	                        	<td>Software Engineer</td>
	                        	<td>San Francisco</td>
	                        	<td>28</td>
	                        	<td>2011/06/07</td>
	                        	<td>$206,850</td>
	                        </tr>
	                        <tr>
	                        	<td>
	                        		<th><input type="checkbox" id="check-all" class="flat"></th>
	                        	</td>
	                        	<td>Fiona Green</td>
	                        	<td>Chief Operating Officer (COO)</td>
	                        	<td>San Francisco</td>
	                        	<td>48</td>
	                        	<td>2010/03/11</td>
	                        	<td>$850,000</td>
	                        </tr>
	                        <tr>
	                        	<td>
	                        		<th><input type="checkbox" id="check-all" class="flat"></th>
	                        	</td>
	                        	<td>Shou Itou</td>
	                        	<td>Regional Marketing</td>
	                        	<td>Tokyo</td>
	                        	<td>20</td>
	                        	<td>2011/08/14</td>
	                        	<td>$163,000</td>
	                        </tr>
	                        <tr>
	                        	<td>
	                        		<th><input type="checkbox" id="check-all" class="flat"></th>
	                        	</td>
	                        	<td>Michelle House</td>
	                        	<td>Integration Specialist</td>
	                        	<td>Sidney</td>
	                        	<td>37</td>
	                        	<td>2011/06/02</td>
	                        	<td>$95,400</td>
	                        </tr>
	                        <tr>
	                        	<td>
	                        		<th><input type="checkbox" id="check-all" class="flat"></th>
	                        	</td>
	                        	<td>Suki Burks</td>
	                        	<td>Developer</td>
	                        	<td>London</td>
	                        	<td>53</td>
	                        	<td>2009/10/22</td>
	                        	<td>$114,500</td>
	                        </tr>
	                        <tr>
	                        	<td>
	                        		<th><input type="checkbox" id="check-all" class="flat"></th>
	                        	</td>
	                        	<td>Prescott Bartlett</td>
	                        	<td>Technical Author</td>
	                        	<td>London</td>
	                        	<td>27</td>
	                        	<td>2011/05/07</td>
	                        	<td>$145,000</td>
	                        </tr>
	                        <tr>
	                        	<td>
	                        		<th><input type="checkbox" id="check-all" class="flat"></th>
	                        	</td>
	                        	<td>Gavin Cortez</td>
	                        	<td>Team Leader</td>
	                        	<td>San Francisco</td>
	                        	<td>22</td>
	                        	<td>2008/10/26</td>
	                        	<td>$235,500</td>
	                        </tr>
	                        <tr>
	                        	<td>
	                        		<th><input type="checkbox" id="check-all" class="flat"></th>
	                        	</td>
	                        	<td>Martena Mccray</td>
	                        	<td>Post-Sales support</td>
	                        	<td>Edinburgh</td>
	                        	<td>46</td>
	                        	<td>2011/03/09</td>
	                        	<td>$324,050</td>
	                        </tr>
	                        <tr>
	                        	<td>
	                        		<th><input type="checkbox" id="check-all" class="flat"></th>
	                        	</td>
	                        	<td>Unity Butler</td>
	                        	<td>Marketing Designer</td>
	                        	<td>San Francisco</td>
	                        	<td>47</td>
	                        	<td>2009/12/09</td>
	                        	<td>$85,675</td>
	                        </tr>
	                        <tr>
	                        	<td>
	                        		<th><input type="checkbox" id="check-all" class="flat"></th>
	                        	</td>
	                        	<td>Howard Hatfield</td>
	                        	<td>Office Manager</td>
	                        	<td>San Francisco</td>
	                        	<td>51</td>
	                        	<td>2008/12/16</td>
	                        	<td>$164,500</td>
	                        </tr>
	                        <tr>
	                        	<td>
	                        		<th><input type="checkbox" id="check-all" class="flat"></th>
	                        	</td>
	                        	<td>Hope Fuentes</td>
	                        	<td>Secretary</td>
	                        	<td>San Francisco</td>
	                        	<td>41</td>
	                        	<td>2010/02/12</td>
	                        	<td>$109,850</td>
	                        </tr>
	                        <tr>
	                        	<td>
	                        		<th><input type="checkbox" id="check-all" class="flat"></th>
	                        	</td>
	                        	<td>Vivian Harrell</td>
	                        	<td>Financial Controller</td>
	                        	<td>San Francisco</td>
	                        	<td>62</td>
	                        	<td>2009/02/14</td>
	                        	<td>$452,500</td>
	                        </tr>
	                        <tr>
	                        	<td>
	                        		<th><input type="checkbox" id="check-all" class="flat"></th>
	                        	</td>
	                        	<td>Timothy Mooney</td>
	                        	<td>Office Manager</td>
	                        	<td>London</td>
	                        	<td>37</td>
	                        	<td>2008/12/11</td>
	                        	<td>$136,200</td>
	                        </tr>
	                        <tr>
	                        	<td>
	                        		<th><input type="checkbox" id="check-all" class="flat"></th>
	                        	</td>
	                        	<td>Jackson Bradshaw</td>
	                        	<td>Director</td>
	                        	<td>New York</td>
	                        	<td>65</td>
	                        	<td>2008/09/26</td>
	                        	<td>$645,750</td>
	                        </tr>
	                        <tr>
	                        	<td>
	                        		<th><input type="checkbox" id="check-all" class="flat"></th>
	                        	</td>
	                        	<td>Olivia Liang</td>
	                        	<td>Support Engineer</td>
	                        	<td>Singapore</td>
	                        	<td>64</td>
	                        	<td>2011/02/03</td>
	                        	<td>$234,500</td>
	                        </tr>
	                        <tr>
	                        	<td>
	                        		<th><input type="checkbox" id="check-all" class="flat"></th>
	                        	</td>
	                        	<td>Bruno Nash</td>
	                        	<td>Software Engineer</td>
	                        	<td>London</td>
	                        	<td>38</td>
	                        	<td>2011/05/03</td>
	                        	<td>$163,500</td>
	                        </tr>
	                        <tr>
	                        	<td>
	                        		<th><input type="checkbox" id="check-all" class="flat"></th>
	                        	</td>
	                        	<td>Sakura Yamamoto</td>
	                        	<td>Support Engineer</td>
	                        	<td>Tokyo</td>
	                        	<td>37</td>
	                        	<td>2009/08/19</td>
	                        	<td>$139,575</td>
	                        </tr>
	                        <tr>
	                        	<td>
	                        		<th><input type="checkbox" id="check-all" class="flat"></th>
	                        	</td>
	                        	<td>Thor Walton</td>
	                        	<td>Developer</td>
	                        	<td>New York</td>
	                        	<td>61</td>
	                        	<td>2013/08/11</td>
	                        	<td>$98,540</td>
	                        </tr>
	                        <tr>
	                        	<td>
	                        		<th><input type="checkbox" id="check-all" class="flat"></th>
	                        	</td>
	                        	<td>Finn Camacho</td>
	                        	<td>Support Engineer</td>
	                        	<td>San Francisco</td>
	                        	<td>47</td>
	                        	<td>2009/07/07</td>
	                        	<td>$87,500</td>
	                        </tr>
	                        <tr>
	                        	<td>
	                        		<th><input type="checkbox" id="check-all" class="flat"></th>
	                        	</td>
	                        	<td>Serge Baldwin</td>
	                        	<td>Data Coordinator</td>
	                        	<td>Singapore</td>
	                        	<td>64</td>
	                        	<td>2012/04/09</td>
	                        	<td>$138,575</td>
	                        </tr>
	                        <tr>
	                        	<td>
	                        		<th><input type="checkbox" id="check-all" class="flat"></th>
	                        	</td>
	                        	<td>Zenaida Frank</td>
	                        	<td>Software Engineer</td>
	                        	<td>New York</td>
	                        	<td>63</td>
	                        	<td>2010/01/04</td>
	                        	<td>$125,250</td>
	                        </tr>
	                        <tr>
	                        	<td>
	                        		<th><input type="checkbox" id="check-all" class="flat"></th>
	                        	</td>
	                        	<td>Zorita Serrano</td>
	                        	<td>Software Engineer</td>
	                        	<td>San Francisco</td>
	                        	<td>56</td>
	                        	<td>2012/06/01</td>
	                        	<td>$115,000</td>
	                        </tr>
	                        <tr>
	                        	<td>
	                        		<th><input type="checkbox" id="check-all" class="flat"></th>
	                        	</td>
	                        	<td>Jennifer Acosta</td>
	                        	<td>Junior Javascript Developer</td>
	                        	<td>Edinburgh</td>
	                        	<td>43</td>
	                        	<td>2013/02/01</td>
	                        	<td>$75,650</td>
	                        </tr>
	                        <tr>
	                        	<td>
	                        		<th><input type="checkbox" id="check-all" class="flat"></th>
	                        	</td>
	                        	<td>Cara Stevens</td>
	                        	<td>Sales Assistant</td>
	                        	<td>New York</td>
	                        	<td>46</td>
	                        	<td>2011/12/06</td>
	                        	<td>$145,600</td>
	                        </tr>
	                        <tr>
	                        	<td>
	                        		<th><input type="checkbox" id="check-all" class="flat"></th>
	                        	</td>
	                        	<td>Hermione Butler</td>
	                        	<td>Regional Director</td>
	                        	<td>London</td>
	                        	<td>47</td>
	                        	<td>2011/03/21</td>
	                        	<td>$356,250</td>
	                        </tr>
	                        <tr>
	                        	<td>
	                        		<th><input type="checkbox" id="check-all" class="flat"></th>
	                        	</td>
	                        	<td>Lael Greer</td>
	                        	<td>Systems Administrator</td>
	                        	<td>London</td>
	                        	<td>21</td>
	                        	<td>2009/02/27</td>
	                        	<td>$103,500</td>
	                        </tr>
	                        <tr>
	                        	<td>
	                        		<th><input type="checkbox" id="check-all" class="flat"></th>
	                        	</td>
	                        	<td>Jonas Alexander</td>
	                        	<td>Developer</td>
	                        	<td>San Francisco</td>
	                        	<td>30</td>
	                        	<td>2010/07/14</td>
	                        	<td>$86,500</td>
	                        </tr>
	                        <tr>
	                        	<td>
	                        		<th><input type="checkbox" id="check-all" class="flat"></th>
	                        	</td>
	                        	<td>Shad Decker</td>
	                        	<td>Regional Director</td>
	                        	<td>Edinburgh</td>
	                        	<td>51</td>
	                        	<td>2008/11/13</td>
	                        	<td>$183,000</td>
	                        </tr>
	                        <tr>
	                        	<td>
	                        		<th><input type="checkbox" id="check-all" class="flat"></th>
	                        	</td>
	                        	<td>Michael Bruce</td>
	                        	<td>Javascript Developer</td>
	                        	<td>Singapore</td>
	                        	<td>29</td>
	                        	<td>2011/06/27</td>
	                        	<td>$183,000</td>
	                        </tr>
	                        <tr>
	                        	<td>
	                        		<th><input type="checkbox" id="check-all" class="flat"></th>
	                        	</td>
	                          <td>Donna Snider</td>
	                          <td>Customer Support</td>
	                          <td>New York</td>
	                          <td>27</td>
	                          <td>2011/01/25</td>
	                          <td>$112,000</td>
	                        </tr>
	                      </tbody>
	                    </table>
	                  </div>
	                </div>
	              </div>

	              <div class="col-md-12 col-sm-12 col-xs-12">
	                <div class="x_panel">
	                  <div class="x_title">
	                    <h2>Fixed Header Example <small>Users</small></h2>
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
	                    <p class="text-muted font-13 m-b-30">
	                      This example shows FixedHeader being styling by the Bootstrap CSS framework.
	                    </p>
	                    <table id="datatable-fixed-header" class="table table-striped table-bordered">
	                      <thead>
	                        <tr>
	                          <th>Name</th>
	                          <th>Position</th>
	                          <th>Office</th>
	                          <th>Age</th>
	                          <th>Start date</th>
	                          <th>Salary</th>
	                        </tr>
	                      </thead>


	                      <tbody>
	                        <tr>
	                          <td>Tiger Nixon</td>
	                          <td>System Architect</td>
	                          <td>Edinburgh</td>
	                          <td>61</td>
	                          <td>2011/04/25</td>
	                          <td>$320,800</td>
	                        </tr>
	                        <tr>
	                          <td>Garrett Winters</td>
	                          <td>Accountant</td>
	                          <td>Tokyo</td>
	                          <td>63</td>
	                          <td>2011/07/25</td>
	                          <td>$170,750</td>
	                        </tr>
	                        <tr>
	                          <td>Ashton Cox</td>
	                          <td>Junior Technical Author</td>
	                          <td>San Francisco</td>
	                          <td>66</td>
	                          <td>2009/01/12</td>
	                          <td>$86,000</td>
	                        </tr>
	                        <tr>
	                          <td>Cedric Kelly</td>
	                          <td>Senior Javascript Developer</td>
	                          <td>Edinburgh</td>
	                          <td>22</td>
	                          <td>2012/03/29</td>
	                          <td>$433,060</td>
	                        </tr>
	                        <tr>
	                          <td>Airi Satou</td>
	                          <td>Accountant</td>
	                          <td>Tokyo</td>
	                          <td>33</td>
	                          <td>2008/11/28</td>
	                          <td>$162,700</td>
	                        </tr>
	                        <tr>
	                          <td>Brielle Williamson</td>
	                          <td>Integration Specialist</td>
	                          <td>New York</td>
	                          <td>61</td>
	                          <td>2012/12/02</td>
	                          <td>$372,000</td>
	                        </tr>
	                        <tr>
	                          <td>Herrod Chandler</td>
	                          <td>Sales Assistant</td>
	                          <td>San Francisco</td>
	                          <td>59</td>
	                          <td>2012/08/06</td>
	                          <td>$137,500</td>
	                        </tr>
	                        <tr>
	                          <td>Rhona Davidson</td>
	                          <td>Integration Specialist</td>
	                          <td>Tokyo</td>
	                          <td>55</td>
	                          <td>2010/10/14</td>
	                          <td>$327,900</td>
	                        </tr>
	                        <tr>
	                          <td>Colleen Hurst</td>
	                          <td>Javascript Developer</td>
	                          <td>San Francisco</td>
	                          <td>39</td>
	                          <td>2009/09/15</td>
	                          <td>$205,500</td>
	                        </tr>
	                        <tr>
	                          <td>Sonya Frost</td>
	                          <td>Software Engineer</td>
	                          <td>Edinburgh</td>
	                          <td>23</td>
	                          <td>2008/12/13</td>
	                          <td>$103,600</td>
	                        </tr>
	                        <tr>
	                          <td>Jena Gaines</td>
	                          <td>Office Manager</td>
	                          <td>London</td>
	                          <td>30</td>
	                          <td>2008/12/19</td>
	                          <td>$90,560</td>
	                        </tr>
	                        <tr>
	                          <td>Quinn Flynn</td>
	                          <td>Support Lead</td>
	                          <td>Edinburgh</td>
	                          <td>22</td>
	                          <td>2013/03/03</td>
	                          <td>$342,000</td>
	                        </tr>
	                        <tr>
	                          <td>Charde Marshall</td>
	                          <td>Regional Director</td>
	                          <td>San Francisco</td>
	                          <td>36</td>
	                          <td>2008/10/16</td>
	                          <td>$470,600</td>
	                        </tr>
	                        <tr>
	                          <td>Haley Kennedy</td>
	                          <td>Senior Marketing Designer</td>
	                          <td>London</td>
	                          <td>43</td>
	                          <td>2012/12/18</td>
	                          <td>$313,500</td>
	                        </tr>
	                        <tr>
	                          <td>Tatyana Fitzpatrick</td>
	                          <td>Regional Director</td>
	                          <td>London</td>
	                          <td>19</td>
	                          <td>2010/03/17</td>
	                          <td>$385,750</td>
	                        </tr>
	                        <tr>
	                          <td>Michael Silva</td>
	                          <td>Marketing Designer</td>
	                          <td>London</td>
	                          <td>66</td>
	                          <td>2012/11/27</td>
	                          <td>$198,500</td>
	                        </tr>
	                        <tr>
	                          <td>Paul Byrd</td>
	                          <td>Chief Financial Officer (CFO)</td>
	                          <td>New York</td>
	                          <td>64</td>
	                          <td>2010/06/09</td>
	                          <td>$725,000</td>
	                        </tr>
	                        <tr>
	                          <td>Gloria Little</td>
	                          <td>Systems Administrator</td>
	                          <td>New York</td>
	                          <td>59</td>
	                          <td>2009/04/10</td>
	                          <td>$237,500</td>
	                        </tr>
	                        <tr>
	                          <td>Bradley Greer</td>
	                          <td>Software Engineer</td>
	                          <td>London</td>
	                          <td>41</td>
	                          <td>2012/10/13</td>
	                          <td>$132,000</td>
	                        </tr>
	                        <tr>
	                          <td>Dai Rios</td>
	                          <td>Personnel Lead</td>
	                          <td>Edinburgh</td>
	                          <td>35</td>
	                          <td>2012/09/26</td>
	                          <td>$217,500</td>
	                        </tr>
	                        <tr>
	                          <td>Jenette Caldwell</td>
	                          <td>Development Lead</td>
	                          <td>New York</td>
	                          <td>30</td>
	                          <td>2011/09/03</td>
	                          <td>$345,000</td>
	                        </tr>
	                        <tr>
	                          <td>Yuri Berry</td>
	                          <td>Chief Marketing Officer (CMO)</td>
	                          <td>New York</td>
	                          <td>40</td>
	                          <td>2009/06/25</td>
	                          <td>$675,000</td>
	                        </tr>
	                        <tr>
	                          <td>Caesar Vance</td>
	                          <td>Pre-Sales Support</td>
	                          <td>New York</td>
	                          <td>21</td>
	                          <td>2011/12/12</td>
	                          <td>$106,450</td>
	                        </tr>
	                        <tr>
	                          <td>Doris Wilder</td>
	                          <td>Sales Assistant</td>
	                          <td>Sidney</td>
	                          <td>23</td>
	                          <td>2010/09/20</td>
	                          <td>$85,600</td>
	                        </tr>
	                        <tr>
	                          <td>Angelica Ramos</td>
	                          <td>Chief Executive Officer (CEO)</td>
	                          <td>London</td>
	                          <td>47</td>
	                          <td>2009/10/09</td>
	                          <td>$1,200,000</td>
	                        </tr>
	                        <tr>
	                          <td>Gavin Joyce</td>
	                          <td>Developer</td>
	                          <td>Edinburgh</td>
	                          <td>42</td>
	                          <td>2010/12/22</td>
	                          <td>$92,575</td>
	                        </tr>
	                        <tr>
	                          <td>Jennifer Chang</td>
	                          <td>Regional Director</td>
	                          <td>Singapore</td>
	                          <td>28</td>
	                          <td>2010/11/14</td>
	                          <td>$357,650</td>
	                        </tr>
	                        <tr>
	                          <td>Brenden Wagner</td>
	                          <td>Software Engineer</td>
	                          <td>San Francisco</td>
	                          <td>28</td>
	                          <td>2011/06/07</td>
	                          <td>$206,850</td>
	                        </tr>
	                        <tr>
	                          <td>Fiona Green</td>
	                          <td>Chief Operating Officer (COO)</td>
	                          <td>San Francisco</td>
	                          <td>48</td>
	                          <td>2010/03/11</td>
	                          <td>$850,000</td>
	                        </tr>
	                        <tr>
	                          <td>Shou Itou</td>
	                          <td>Regional Marketing</td>
	                          <td>Tokyo</td>
	                          <td>20</td>
	                          <td>2011/08/14</td>
	                          <td>$163,000</td>
	                        </tr>
	                        <tr>
	                          <td>Michelle House</td>
	                          <td>Integration Specialist</td>
	                          <td>Sidney</td>
	                          <td>37</td>
	                          <td>2011/06/02</td>
	                          <td>$95,400</td>
	                        </tr>
	                        <tr>
	                          <td>Suki Burks</td>
	                          <td>Developer</td>
	                          <td>London</td>
	                          <td>53</td>
	                          <td>2009/10/22</td>
	                          <td>$114,500</td>
	                        </tr>
	                        <tr>
	                          <td>Prescott Bartlett</td>
	                          <td>Technical Author</td>
	                          <td>London</td>
	                          <td>27</td>
	                          <td>2011/05/07</td>
	                          <td>$145,000</td>
	                        </tr>
	                        <tr>
	                          <td>Gavin Cortez</td>
	                          <td>Team Leader</td>
	                          <td>San Francisco</td>
	                          <td>22</td>
	                          <td>2008/10/26</td>
	                          <td>$235,500</td>
	                        </tr>
	                        <tr>
	                          <td>Martena Mccray</td>
	                          <td>Post-Sales support</td>
	                          <td>Edinburgh</td>
	                          <td>46</td>
	                          <td>2011/03/09</td>
	                          <td>$324,050</td>
	                        </tr>
	                        <tr>
	                          <td>Unity Butler</td>
	                          <td>Marketing Designer</td>
	                          <td>San Francisco</td>
	                          <td>47</td>
	                          <td>2009/12/09</td>
	                          <td>$85,675</td>
	                        </tr>
	                        <tr>
	                          <td>Howard Hatfield</td>
	                          <td>Office Manager</td>
	                          <td>San Francisco</td>
	                          <td>51</td>
	                          <td>2008/12/16</td>
	                          <td>$164,500</td>
	                        </tr>
	                        <tr>
	                          <td>Hope Fuentes</td>
	                          <td>Secretary</td>
	                          <td>San Francisco</td>
	                          <td>41</td>
	                          <td>2010/02/12</td>
	                          <td>$109,850</td>
	                        </tr>
	                        <tr>
	                          <td>Vivian Harrell</td>
	                          <td>Financial Controller</td>
	                          <td>San Francisco</td>
	                          <td>62</td>
	                          <td>2009/02/14</td>
	                          <td>$452,500</td>
	                        </tr>
	                        <tr>
	                          <td>Timothy Mooney</td>
	                          <td>Office Manager</td>
	                          <td>London</td>
	                          <td>37</td>
	                          <td>2008/12/11</td>
	                          <td>$136,200</td>
	                        </tr>
	                        <tr>
	                          <td>Jackson Bradshaw</td>
	                          <td>Director</td>
	                          <td>New York</td>
	                          <td>65</td>
	                          <td>2008/09/26</td>
	                          <td>$645,750</td>
	                        </tr>
	                        <tr>
	                          <td>Olivia Liang</td>
	                          <td>Support Engineer</td>
	                          <td>Singapore</td>
	                          <td>64</td>
	                          <td>2011/02/03</td>
	                          <td>$234,500</td>
	                        </tr>
	                        <tr>
	                          <td>Bruno Nash</td>
	                          <td>Software Engineer</td>
	                          <td>London</td>
	                          <td>38</td>
	                          <td>2011/05/03</td>
	                          <td>$163,500</td>
	                        </tr>
	                        <tr>
	                          <td>Sakura Yamamoto</td>
	                          <td>Support Engineer</td>
	                          <td>Tokyo</td>
	                          <td>37</td>
	                          <td>2009/08/19</td>
	                          <td>$139,575</td>
	                        </tr>
	                        <tr>
	                          <td>Thor Walton</td>
	                          <td>Developer</td>
	                          <td>New York</td>
	                          <td>61</td>
	                          <td>2013/08/11</td>
	                          <td>$98,540</td>
	                        </tr>
	                        <tr>
	                          <td>Finn Camacho</td>
	                          <td>Support Engineer</td>
	                          <td>San Francisco</td>
	                          <td>47</td>
	                          <td>2009/07/07</td>
	                          <td>$87,500</td>
	                        </tr>
	                        <tr>
	                          <td>Serge Baldwin</td>
	                          <td>Data Coordinator</td>
	                          <td>Singapore</td>
	                          <td>64</td>
	                          <td>2012/04/09</td>
	                          <td>$138,575</td>
	                        </tr>
	                        <tr>
	                          <td>Zenaida Frank</td>
	                          <td>Software Engineer</td>
	                          <td>New York</td>
	                          <td>63</td>
	                          <td>2010/01/04</td>
	                          <td>$125,250</td>
	                        </tr>
	                        <tr>
	                          <td>Zorita Serrano</td>
	                          <td>Software Engineer</td>
	                          <td>San Francisco</td>
	                          <td>56</td>
	                          <td>2012/06/01</td>
	                          <td>$115,000</td>
	                        </tr>
	                        <tr>
	                          <td>Jennifer Acosta</td>
	                          <td>Junior Javascript Developer</td>
	                          <td>Edinburgh</td>
	                          <td>43</td>
	                          <td>2013/02/01</td>
	                          <td>$75,650</td>
	                        </tr>
	                        <tr>
	                          <td>Cara Stevens</td>
	                          <td>Sales Assistant</td>
	                          <td>New York</td>
	                          <td>46</td>
	                          <td>2011/12/06</td>
	                          <td>$145,600</td>
	                        </tr>
	                        <tr>
	                          <td>Hermione Butler</td>
	                          <td>Regional Director</td>
	                          <td>London</td>
	                          <td>47</td>
	                          <td>2011/03/21</td>
	                          <td>$356,250</td>
	                        </tr>
	                        <tr>
	                          <td>Lael Greer</td>
	                          <td>Systems Administrator</td>
	                          <td>London</td>
	                          <td>21</td>
	                          <td>2009/02/27</td>
	                          <td>$103,500</td>
	                        </tr>
	                        <tr>
	                          <td>Jonas Alexander</td>
	                          <td>Developer</td>
	                          <td>San Francisco</td>
	                          <td>30</td>
	                          <td>2010/07/14</td>
	                          <td>$86,500</td>
	                        </tr>
	                        <tr>
	                          <td>Shad Decker</td>
	                          <td>Regional Director</td>
	                          <td>Edinburgh</td>
	                          <td>51</td>
	                          <td>2008/11/13</td>
	                          <td>$183,000</td>
	                        </tr>
	                        <tr>
	                          <td>Michael Bruce</td>
	                          <td>Javascript Developer</td>
	                          <td>Singapore</td>
	                          <td>29</td>
	                          <td>2011/06/27</td>
	                          <td>$183,000</td>
	                        </tr>
	                        <tr>
	                          <td>Donna Snider</td>
	                          <td>Customer Support</td>
	                          <td>New York</td>
	                          <td>27</td>
	                          <td>2011/01/25</td>
	                          <td>$112,000</td>
	                        </tr>
	                      </tbody>
	                    </table>
	                  </div>
	                </div>
	              </div>

	              <div class="col-md-12 col-sm-12 col-xs-12">
	                <div class="x_panel">
	                  <div class="x_title">
	                    <h2>KeyTable example <small>Users</small></h2>
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
	                    <div class="row">
	                      <div class="col-sm-12">
	                        <div class="card-box table-responsive">
	                          <p class="text-muted font-13 m-b-30">
	                            KeyTable provides Excel like cell navigation on any table. Events (focus, blur, action etc) can be assigned to individual cells, columns, rows or all cells.
	                          </p>

	                          <table id="datatable-keytable" class="table table-striped table-bordered">
	                            <thead>
	                              <tr>
	                                <th>Name</th>
	                                <th>Position</th>
	                                <th>Office</th>
	                                <th>Age</th>
	                                <th>Start date</th>
	                                <th>Salary</th>
	                              </tr>
	                            </thead>


	                            <tbody>
	                              <tr>
	                                <td>Tiger Nixon</td>
	                                <td>System Architect</td>
	                                <td>Edinburgh</td>
	                                <td>61</td>
	                                <td>2011/04/25</td>
	                                <td>$320,800</td>
	                              </tr>
	                              <tr>
	                                <td>Garrett Winters</td>
	                                <td>Accountant</td>
	                                <td>Tokyo</td>
	                                <td>63</td>
	                                <td>2011/07/25</td>
	                                <td>$170,750</td>
	                              </tr>
	                              <tr>
	                                <td>Ashton Cox</td>
	                                <td>Junior Technical Author</td>
	                                <td>San Francisco</td>
	                                <td>66</td>
	                                <td>2009/01/12</td>
	                                <td>$86,000</td>
	                              </tr>
	                              <tr>
	                                <td>Cedric Kelly</td>
	                                <td>Senior Javascript Developer</td>
	                                <td>Edinburgh</td>
	                                <td>22</td>
	                                <td>2012/03/29</td>
	                                <td>$433,060</td>
	                              </tr>
	                              <tr>
	                                <td>Airi Satou</td>
	                                <td>Accountant</td>
	                                <td>Tokyo</td>
	                                <td>33</td>
	                                <td>2008/11/28</td>
	                                <td>$162,700</td>
	                              </tr>
	                              <tr>
	                                <td>Brielle Williamson</td>
	                                <td>Integration Specialist</td>
	                                <td>New York</td>
	                                <td>61</td>
	                                <td>2012/12/02</td>
	                                <td>$372,000</td>
	                              </tr>
	                              <tr>
	                                <td>Herrod Chandler</td>
	                                <td>Sales Assistant</td>
	                                <td>San Francisco</td>
	                                <td>59</td>
	                                <td>2012/08/06</td>
	                                <td>$137,500</td>
	                              </tr>
	                              <tr>
	                                <td>Rhona Davidson</td>
	                                <td>Integration Specialist</td>
	                                <td>Tokyo</td>
	                                <td>55</td>
	                                <td>2010/10/14</td>
	                                <td>$327,900</td>
	                              </tr>
	                              <tr>
	                                <td>Colleen Hurst</td>
	                                <td>Javascript Developer</td>
	                                <td>San Francisco</td>
	                                <td>39</td>
	                                <td>2009/09/15</td>
	                                <td>$205,500</td>
	                              </tr>
	                              <tr>
	                                <td>Sonya Frost</td>
	                                <td>Software Engineer</td>
	                                <td>Edinburgh</td>
	                                <td>23</td>
	                                <td>2008/12/13</td>
	                                <td>$103,600</td>
	                              </tr>
	                              <tr>
	                                <td>Jena Gaines</td>
	                                <td>Office Manager</td>
	                                <td>London</td>
	                                <td>30</td>
	                                <td>2008/12/19</td>
	                                <td>$90,560</td>
	                              </tr>
	                              <tr>
	                                <td>Quinn Flynn</td>
	                                <td>Support Lead</td>
	                                <td>Edinburgh</td>
	                                <td>22</td>
	                                <td>2013/03/03</td>
	                                <td>$342,000</td>
	                              </tr>
	                              <tr>
	                                <td>Charde Marshall</td>
	                                <td>Regional Director</td>
	                                <td>San Francisco</td>
	                                <td>36</td>
	                                <td>2008/10/16</td>
	                                <td>$470,600</td>
	                              </tr>
	                              <tr>
	                                <td>Haley Kennedy</td>
	                                <td>Senior Marketing Designer</td>
	                                <td>London</td>
	                                <td>43</td>
	                                <td>2012/12/18</td>
	                                <td>$313,500</td>
	                              </tr>
	                              <tr>
	                                <td>Tatyana Fitzpatrick</td>
	                                <td>Regional Director</td>
	                                <td>London</td>
	                                <td>19</td>
	                                <td>2010/03/17</td>
	                                <td>$385,750</td>
	                              </tr>
	                              <tr>
	                                <td>Michael Silva</td>
	                                <td>Marketing Designer</td>
	                                <td>London</td>
	                                <td>66</td>
	                                <td>2012/11/27</td>
	                                <td>$198,500</td>
	                              </tr>
	                              <tr>
	                                <td>Paul Byrd</td>
	                                <td>Chief Financial Officer (CFO)</td>
	                                <td>New York</td>
	                                <td>64</td>
	                                <td>2010/06/09</td>
	                                <td>$725,000</td>
	                              </tr>
	                              <tr>
	                                <td>Gloria Little</td>
	                                <td>Systems Administrator</td>
	                                <td>New York</td>
	                                <td>59</td>
	                                <td>2009/04/10</td>
	                                <td>$237,500</td>
	                              </tr>
	                              <tr>
	                                <td>Bradley Greer</td>
	                                <td>Software Engineer</td>
	                                <td>London</td>
	                                <td>41</td>
	                                <td>2012/10/13</td>
	                                <td>$132,000</td>
	                              </tr>
	                              <tr>
	                                <td>Dai Rios</td>
	                                <td>Personnel Lead</td>
	                                <td>Edinburgh</td>
	                                <td>35</td>
	                                <td>2012/09/26</td>
	                                <td>$217,500</td>
	                              </tr>
	                              <tr>
	                                <td>Jenette Caldwell</td>
	                                <td>Development Lead</td>
	                                <td>New York</td>
	                                <td>30</td>
	                                <td>2011/09/03</td>
	                                <td>$345,000</td>
	                              </tr>
	                              <tr>
	                                <td>Yuri Berry</td>
	                                <td>Chief Marketing Officer (CMO)</td>
	                                <td>New York</td>
	                                <td>40</td>
	                                <td>2009/06/25</td>
	                                <td>$675,000</td>
	                              </tr>
	                              <tr>
	                                <td>Caesar Vance</td>
	                                <td>Pre-Sales Support</td>
	                                <td>New York</td>
	                                <td>21</td>
	                                <td>2011/12/12</td>
	                                <td>$106,450</td>
	                              </tr>
	                              <tr>
	                                <td>Doris Wilder</td>
	                                <td>Sales Assistant</td>
	                                <td>Sidney</td>
	                                <td>23</td>
	                                <td>2010/09/20</td>
	                                <td>$85,600</td>
	                              </tr>
	                              <tr>
	                                <td>Angelica Ramos</td>
	                                <td>Chief Executive Officer (CEO)</td>
	                                <td>London</td>
	                                <td>47</td>
	                                <td>2009/10/09</td>
	                                <td>$1,200,000</td>
	                              </tr>
	                              <tr>
	                                <td>Gavin Joyce</td>
	                                <td>Developer</td>
	                                <td>Edinburgh</td>
	                                <td>42</td>
	                                <td>2010/12/22</td>
	                                <td>$92,575</td>
	                              </tr>
	                              <tr>
	                                <td>Jennifer Chang</td>
	                                <td>Regional Director</td>
	                                <td>Singapore</td>
	                                <td>28</td>
	                                <td>2010/11/14</td>
	                                <td>$357,650</td>
	                              </tr>
	                              <tr>
	                                <td>Brenden Wagner</td>
	                                <td>Software Engineer</td>
	                                <td>San Francisco</td>
	                                <td>28</td>
	                                <td>2011/06/07</td>
	                                <td>$206,850</td>
	                              </tr>
	                              <tr>
	                                <td>Fiona Green</td>
	                                <td>Chief Operating Officer (COO)</td>
	                                <td>San Francisco</td>
	                                <td>48</td>
	                                <td>2010/03/11</td>
	                                <td>$850,000</td>
	                              </tr>
	                              <tr>
	                                <td>Shou Itou</td>
	                                <td>Regional Marketing</td>
	                                <td>Tokyo</td>
	                                <td>20</td>
	                                <td>2011/08/14</td>
	                                <td>$163,000</td>
	                              </tr>
	                              <tr>
	                                <td>Michelle House</td>
	                                <td>Integration Specialist</td>
	                                <td>Sidney</td>
	                                <td>37</td>
	                                <td>2011/06/02</td>
	                                <td>$95,400</td>
	                              </tr>
	                              <tr>
	                                <td>Suki Burks</td>
	                                <td>Developer</td>
	                                <td>London</td>
	                                <td>53</td>
	                                <td>2009/10/22</td>
	                                <td>$114,500</td>
	                              </tr>
	                              <tr>
	                                <td>Prescott Bartlett</td>
	                                <td>Technical Author</td>
	                                <td>London</td>
	                                <td>27</td>
	                                <td>2011/05/07</td>
	                                <td>$145,000</td>
	                              </tr>
	                              <tr>
	                                <td>Gavin Cortez</td>
	                                <td>Team Leader</td>
	                                <td>San Francisco</td>
	                                <td>22</td>
	                                <td>2008/10/26</td>
	                                <td>$235,500</td>
	                              </tr>
	                              <tr>
	                                <td>Martena Mccray</td>
	                                <td>Post-Sales support</td>
	                                <td>Edinburgh</td>
	                                <td>46</td>
	                                <td>2011/03/09</td>
	                                <td>$324,050</td>
	                              </tr>
	                              <tr>
	                                <td>Unity Butler</td>
	                                <td>Marketing Designer</td>
	                                <td>San Francisco</td>
	                                <td>47</td>
	                                <td>2009/12/09</td>
	                                <td>$85,675</td>
	                              </tr>
	                              <tr>
	                                <td>Howard Hatfield</td>
	                                <td>Office Manager</td>
	                                <td>San Francisco</td>
	                                <td>51</td>
	                                <td>2008/12/16</td>
	                                <td>$164,500</td>
	                              </tr>
	                              <tr>
	                                <td>Hope Fuentes</td>
	                                <td>Secretary</td>
	                                <td>San Francisco</td>
	                                <td>41</td>
	                                <td>2010/02/12</td>
	                                <td>$109,850</td>
	                              </tr>
	                              <tr>
	                                <td>Vivian Harrell</td>
	                                <td>Financial Controller</td>
	                                <td>San Francisco</td>
	                                <td>62</td>
	                                <td>2009/02/14</td>
	                                <td>$452,500</td>
	                              </tr>
	                              <tr>
	                                <td>Timothy Mooney</td>
	                                <td>Office Manager</td>
	                                <td>London</td>
	                                <td>37</td>
	                                <td>2008/12/11</td>
	                                <td>$136,200</td>
	                              </tr>
	                              <tr>
	                                <td>Jackson Bradshaw</td>
	                                <td>Director</td>
	                                <td>New York</td>
	                                <td>65</td>
	                                <td>2008/09/26</td>
	                                <td>$645,750</td>
	                              </tr>
	                              <tr>
	                                <td>Olivia Liang</td>
	                                <td>Support Engineer</td>
	                                <td>Singapore</td>
	                                <td>64</td>
	                                <td>2011/02/03</td>
	                                <td>$234,500</td>
	                              </tr>
	                              <tr>
	                                <td>Bruno Nash</td>
	                                <td>Software Engineer</td>
	                                <td>London</td>
	                                <td>38</td>
	                                <td>2011/05/03</td>
	                                <td>$163,500</td>
	                              </tr>
	                              <tr>
	                                <td>Sakura Yamamoto</td>
	                                <td>Support Engineer</td>
	                                <td>Tokyo</td>
	                                <td>37</td>
	                                <td>2009/08/19</td>
	                                <td>$139,575</td>
	                              </tr>
	                              <tr>
	                                <td>Thor Walton</td>
	                                <td>Developer</td>
	                                <td>New York</td>
	                                <td>61</td>
	                                <td>2013/08/11</td>
	                                <td>$98,540</td>
	                              </tr>
	                              <tr>
	                                <td>Finn Camacho</td>
	                                <td>Support Engineer</td>
	                                <td>San Francisco</td>
	                                <td>47</td>
	                                <td>2009/07/07</td>
	                                <td>$87,500</td>
	                              </tr>
	                              <tr>
	                                <td>Serge Baldwin</td>
	                                <td>Data Coordinator</td>
	                                <td>Singapore</td>
	                                <td>64</td>
	                                <td>2012/04/09</td>
	                                <td>$138,575</td>
	                              </tr>
	                              <tr>
	                                <td>Zenaida Frank</td>
	                                <td>Software Engineer</td>
	                                <td>New York</td>
	                                <td>63</td>
	                                <td>2010/01/04</td>
	                                <td>$125,250</td>
	                              </tr>
	                              <tr>
	                                <td>Zorita Serrano</td>
	                                <td>Software Engineer</td>
	                                <td>San Francisco</td>
	                                <td>56</td>
	                                <td>2012/06/01</td>
	                                <td>$115,000</td>
	                              </tr>
	                              <tr>
	                                <td>Jennifer Acosta</td>
	                                <td>Junior Javascript Developer</td>
	                                <td>Edinburgh</td>
	                                <td>43</td>
	                                <td>2013/02/01</td>
	                                <td>$75,650</td>
	                              </tr>
	                              <tr>
	                                <td>Cara Stevens</td>
	                                <td>Sales Assistant</td>
	                                <td>New York</td>
	                                <td>46</td>
	                                <td>2011/12/06</td>
	                                <td>$145,600</td>
	                              </tr>
	                              <tr>
	                                <td>Hermione Butler</td>
	                                <td>Regional Director</td>
	                                <td>London</td>
	                                <td>47</td>
	                                <td>2011/03/21</td>
	                                <td>$356,250</td>
	                              </tr>
	                              <tr>
	                                <td>Lael Greer</td>
	                                <td>Systems Administrator</td>
	                                <td>London</td>
	                                <td>21</td>
	                                <td>2009/02/27</td>
	                                <td>$103,500</td>
	                              </tr>
	                              <tr>
	                                <td>Jonas Alexander</td>
	                                <td>Developer</td>
	                                <td>San Francisco</td>
	                                <td>30</td>
	                                <td>2010/07/14</td>
	                                <td>$86,500</td>
	                              </tr>
	                              <tr>
	                                <td>Shad Decker</td>
	                                <td>Regional Director</td>
	                                <td>Edinburgh</td>
	                                <td>51</td>
	                                <td>2008/11/13</td>
	                                <td>$183,000</td>
	                              </tr>
	                              <tr>
	                                <td>Michael Bruce</td>
	                                <td>Javascript Developer</td>
	                                <td>Singapore</td>
	                                <td>29</td>
	                                <td>2011/06/27</td>
	                                <td>$183,000</td>
	                              </tr>
	                              <tr>
	                                <td>Donna Snider</td>
	                                <td>Customer Support</td>
	                                <td>New York</td>
	                                <td>27</td>
	                                <td>2011/01/25</td>
	                                <td>$112,000</td>
	                              </tr>
	                            </tbody>
	                          </table>
	                        </div>
	                      </div>
	                    </div>
	                  </div>
	                </div>
	              </div>

	              <div class="col-md-12 col-sm-12 col-xs-12">
	                <div class="x_panel">
	                  <div class="x_title">
	                    <h2>Responsive example<small>Users</small></h2>
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
	                    <p class="text-muted font-13 m-b-30">
	                      Responsive is an extension for DataTables that resolves that problem by optimising the table's layout for different screen sizes through the dynamic insertion and removal of columns from the table.
	                    </p>
						
	                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
	                      <thead>
	                        <tr>
	                          <th>First name</th>
	                          <th>Last name</th>
	                          <th>Position</th>
	                          <th>Office</th>
	                          <th>Age</th>
	                          <th>Start date</th>
	                          <th>Salary</th>
	                          <th>Extn.</th>
	                          <th>E-mail</th>
	                        </tr>
	                      </thead>
	                      <tbody>
	                        <tr>
	                          <td>Tiger</td>
	                          <td>Nixon</td>
	                          <td>System Architect</td>
	                          <td>Edinburgh</td>
	                          <td>61</td>
	                          <td>2011/04/25</td>
	                          <td>$320,800</td>
	                          <td>5421</td>
	                          <td>t.nixon@datatables.net</td>
	                        </tr>
	                        <tr>
	                          <td>Garrett</td>
	                          <td>Winters</td>
	                          <td>Accountant</td>
	                          <td>Tokyo</td>
	                          <td>63</td>
	                          <td>2011/07/25</td>
	                          <td>$170,750</td>
	                          <td>8422</td>
	                          <td>g.winters@datatables.net</td>
	                        </tr>
	                        <tr>
	                          <td>Ashton</td>
	                          <td>Cox</td>
	                          <td>Junior Technical Author</td>
	                          <td>San Francisco</td>
	                          <td>66</td>
	                          <td>2009/01/12</td>
	                          <td>$86,000</td>
	                          <td>1562</td>
	                          <td>a.cox@datatables.net</td>
	                        </tr>
	                        <tr>
	                          <td>Cedric</td>
	                          <td>Kelly</td>
	                          <td>Senior Javascript Developer</td>
	                          <td>Edinburgh</td>
	                          <td>22</td>
	                          <td>2012/03/29</td>
	                          <td>$433,060</td>
	                          <td>6224</td>
	                          <td>c.kelly@datatables.net</td>
	                        </tr>
	                        <tr>
	                          <td>Airi</td>
	                          <td>Satou</td>
	                          <td>Accountant</td>
	                          <td>Tokyo</td>
	                          <td>33</td>
	                          <td>2008/11/28</td>
	                          <td>$162,700</td>
	                          <td>5407</td>
	                          <td>a.satou@datatables.net</td>
	                        </tr>
	                        <tr>
	                          <td>Brielle</td>
	                          <td>Williamson</td>
	                          <td>Integration Specialist</td>
	                          <td>New York</td>
	                          <td>61</td>
	                          <td>2012/12/02</td>
	                          <td>$372,000</td>
	                          <td>4804</td>
	                          <td>b.williamson@datatables.net</td>
	                        </tr>
	                        <tr>
	                          <td>Herrod</td>
	                          <td>Chandler</td>
	                          <td>Sales Assistant</td>
	                          <td>San Francisco</td>
	                          <td>59</td>
	                          <td>2012/08/06</td>
	                          <td>$137,500</td>
	                          <td>9608</td>
	                          <td>h.chandler@datatables.net</td>
	                        </tr>
	                        <tr>
	                          <td>Rhona</td>
	                          <td>Davidson</td>
	                          <td>Integration Specialist</td>
	                          <td>Tokyo</td>
	                          <td>55</td>
	                          <td>2010/10/14</td>
	                          <td>$327,900</td>
	                          <td>6200</td>
	                          <td>r.davidson@datatables.net</td>
	                        </tr>
	                        <tr>
	                          <td>Colleen</td>
	                          <td>Hurst</td>
	                          <td>Javascript Developer</td>
	                          <td>San Francisco</td>
	                          <td>39</td>
	                          <td>2009/09/15</td>
	                          <td>$205,500</td>
	                          <td>2360</td>
	                          <td>c.hurst@datatables.net</td>
	                        </tr>
	                        <tr>
	                          <td>Sonya</td>
	                          <td>Frost</td>
	                          <td>Software Engineer</td>
	                          <td>Edinburgh</td>
	                          <td>23</td>
	                          <td>2008/12/13</td>
	                          <td>$103,600</td>
	                          <td>1667</td>
	                          <td>s.frost@datatables.net</td>
	                        </tr>
	                        <tr>
	                          <td>Jena</td>
	                          <td>Gaines</td>
	                          <td>Office Manager</td>
	                          <td>London</td>
	                          <td>30</td>
	                          <td>2008/12/19</td>
	                          <td>$90,560</td>
	                          <td>3814</td>
	                          <td>j.gaines@datatables.net</td>
	                        </tr>
	                        <tr>
	                          <td>Quinn</td>
	                          <td>Flynn</td>
	                          <td>Support Lead</td>
	                          <td>Edinburgh</td>
	                          <td>22</td>
	                          <td>2013/03/03</td>
	                          <td>$342,000</td>
	                          <td>9497</td>
	                          <td>q.flynn@datatables.net</td>
	                        </tr>
	                        <tr>
	                          <td>Charde</td>
	                          <td>Marshall</td>
	                          <td>Regional Director</td>
	                          <td>San Francisco</td>
	                          <td>36</td>
	                          <td>2008/10/16</td>
	                          <td>$470,600</td>
	                          <td>6741</td>
	                          <td>c.marshall@datatables.net</td>
	                        </tr>
	                        <tr>
	                          <td>Haley</td>
	                          <td>Kennedy</td>
	                          <td>Senior Marketing Designer</td>
	                          <td>London</td>
	                          <td>43</td>
	                          <td>2012/12/18</td>
	                          <td>$313,500</td>
	                          <td>3597</td>
	                          <td>h.kennedy@datatables.net</td>
	                        </tr>
	                        <tr>
	                          <td>Tatyana</td>
	                          <td>Fitzpatrick</td>
	                          <td>Regional Director</td>
	                          <td>London</td>
	                          <td>19</td>
	                          <td>2010/03/17</td>
	                          <td>$385,750</td>
	                          <td>1965</td>
	                          <td>t.fitzpatrick@datatables.net</td>
	                        </tr>
	                        <tr>
	                          <td>Michael</td>
	                          <td>Silva</td>
	                          <td>Marketing Designer</td>
	                          <td>London</td>
	                          <td>66</td>
	                          <td>2012/11/27</td>
	                          <td>$198,500</td>
	                          <td>1581</td>
	                          <td>m.silva@datatables.net</td>
	                        </tr>
	                        <tr>
	                          <td>Paul</td>
	                          <td>Byrd</td>
	                          <td>Chief Financial Officer (CFO)</td>
	                          <td>New York</td>
	                          <td>64</td>
	                          <td>2010/06/09</td>
	                          <td>$725,000</td>
	                          <td>3059</td>
	                          <td>p.byrd@datatables.net</td>
	                        </tr>
	                        <tr>
	                          <td>Gloria</td>
	                          <td>Little</td>
	                          <td>Systems Administrator</td>
	                          <td>New York</td>
	                          <td>59</td>
	                          <td>2009/04/10</td>
	                          <td>$237,500</td>
	                          <td>1721</td>
	                          <td>g.little@datatables.net</td>
	                        </tr>
	                        <tr>
	                          <td>Bradley</td>
	                          <td>Greer</td>
	                          <td>Software Engineer</td>
	                          <td>London</td>
	                          <td>41</td>
	                          <td>2012/10/13</td>
	                          <td>$132,000</td>
	                          <td>2558</td>
	                          <td>b.greer@datatables.net</td>
	                        </tr>
	                        <tr>
	                          <td>Dai</td>
	                          <td>Rios</td>
	                          <td>Personnel Lead</td>
	                          <td>Edinburgh</td>
	                          <td>35</td>
	                          <td>2012/09/26</td>
	                          <td>$217,500</td>
	                          <td>2290</td>
	                          <td>d.rios@datatables.net</td>
	                        </tr>
	                        <tr>
	                          <td>Jenette</td>
	                          <td>Caldwell</td>
	                          <td>Development Lead</td>
	                          <td>New York</td>
	                          <td>30</td>
	                          <td>2011/09/03</td>
	                          <td>$345,000</td>
	                          <td>1937</td>
	                          <td>j.caldwell@datatables.net</td>
	                        </tr>
	                        <tr>
	                          <td>Yuri</td>
	                          <td>Berry</td>
	                          <td>Chief Marketing Officer (CMO)</td>
	                          <td>New York</td>
	                          <td>40</td>
	                          <td>2009/06/25</td>
	                          <td>$675,000</td>
	                          <td>6154</td>
	                          <td>y.berry@datatables.net</td>
	                        </tr>
	                        <tr>
	                          <td>Caesar</td>
	                          <td>Vance</td>
	                          <td>Pre-Sales Support</td>
	                          <td>New York</td>
	                          <td>21</td>
	                          <td>2011/12/12</td>
	                          <td>$106,450</td>
	                          <td>8330</td>
	                          <td>c.vance@datatables.net</td>
	                        </tr>
	                        <tr>
	                          <td>Doris</td>
	                          <td>Wilder</td>
	                          <td>Sales Assistant</td>
	                          <td>Sidney</td>
	                          <td>23</td>
	                          <td>2010/09/20</td>
	                          <td>$85,600</td>
	                          <td>3023</td>
	                          <td>d.wilder@datatables.net</td>
	                        </tr>
	                        <tr>
	                          <td>Angelica</td>
	                          <td>Ramos</td>
	                          <td>Chief Executive Officer (CEO)</td>
	                          <td>London</td>
	                          <td>47</td>
	                          <td>2009/10/09</td>
	                          <td>$1,200,000</td>
	                          <td>5797</td>
	                          <td>a.ramos@datatables.net</td>
	                        </tr>
	                        <tr>
	                          <td>Gavin</td>
	                          <td>Joyce</td>
	                          <td>Developer</td>
	                          <td>Edinburgh</td>
	                          <td>42</td>
	                          <td>2010/12/22</td>
	                          <td>$92,575</td>
	                          <td>8822</td>
	                          <td>g.joyce@datatables.net</td>
	                        </tr>
	                        <tr>
	                          <td>Jennifer</td>
	                          <td>Chang</td>
	                          <td>Regional Director</td>
	                          <td>Singapore</td>
	                          <td>28</td>
	                          <td>2010/11/14</td>
	                          <td>$357,650</td>
	                          <td>9239</td>
	                          <td>j.chang@datatables.net</td>
	                        </tr>
	                        <tr>
	                          <td>Brenden</td>
	                          <td>Wagner</td>
	                          <td>Software Engineer</td>
	                          <td>San Francisco</td>
	                          <td>28</td>
	                          <td>2011/06/07</td>
	                          <td>$206,850</td>
	                          <td>1314</td>
	                          <td>b.wagner@datatables.net</td>
	                        </tr>
	                        <tr>
	                          <td>Fiona</td>
	                          <td>Green</td>
	                          <td>Chief Operating Officer (COO)</td>
	                          <td>San Francisco</td>
	                          <td>48</td>
	                          <td>2010/03/11</td>
	                          <td>$850,000</td>
	                          <td>2947</td>
	                          <td>f.green@datatables.net</td>
	                        </tr>
	                        <tr>
	                          <td>Shou</td>
	                          <td>Itou</td>
	                          <td>Regional Marketing</td>
	                          <td>Tokyo</td>
	                          <td>20</td>
	                          <td>2011/08/14</td>
	                          <td>$163,000</td>
	                          <td>8899</td>
	                          <td>s.itou@datatables.net</td>
	                        </tr>
	                        <tr>
	                          <td>Michelle</td>
	                          <td>House</td>
	                          <td>Integration Specialist</td>
	                          <td>Sidney</td>
	                          <td>37</td>
	                          <td>2011/06/02</td>
	                          <td>$95,400</td>
	                          <td>2769</td>
	                          <td>m.house@datatables.net</td>
	                        </tr>
	                        <tr>
	                          <td>Suki</td>
	                          <td>Burks</td>
	                          <td>Developer</td>
	                          <td>London</td>
	                          <td>53</td>
	                          <td>2009/10/22</td>
	                          <td>$114,500</td>
	                          <td>6832</td>
	                          <td>s.burks@datatables.net</td>
	                        </tr>
	                        <tr>
	                          <td>Prescott</td>
	                          <td>Bartlett</td>
	                          <td>Technical Author</td>
	                          <td>London</td>
	                          <td>27</td>
	                          <td>2011/05/07</td>
	                          <td>$145,000</td>
	                          <td>3606</td>
	                          <td>p.bartlett@datatables.net</td>
	                        </tr>
	                        <tr>
	                          <td>Gavin</td>
	                          <td>Cortez</td>
	                          <td>Team Leader</td>
	                          <td>San Francisco</td>
	                          <td>22</td>
	                          <td>2008/10/26</td>
	                          <td>$235,500</td>
	                          <td>2860</td>
	                          <td>g.cortez@datatables.net</td>
	                        </tr>
	                        <tr>
	                          <td>Martena</td>
	                          <td>Mccray</td>
	                          <td>Post-Sales support</td>
	                          <td>Edinburgh</td>
	                          <td>46</td>
	                          <td>2011/03/09</td>
	                          <td>$324,050</td>
	                          <td>8240</td>
	                          <td>m.mccray@datatables.net</td>
	                        </tr>
	                        <tr>
	                          <td>Unity</td>
	                          <td>Butler</td>
	                          <td>Marketing Designer</td>
	                          <td>San Francisco</td>
	                          <td>47</td>
	                          <td>2009/12/09</td>
	                          <td>$85,675</td>
	                          <td>5384</td>
	                          <td>u.butler@datatables.net</td>
	                        </tr>
	                        <tr>
	                          <td>Howard</td>
	                          <td>Hatfield</td>
	                          <td>Office Manager</td>
	                          <td>San Francisco</td>
	                          <td>51</td>
	                          <td>2008/12/16</td>
	                          <td>$164,500</td>
	                          <td>7031</td>
	                          <td>h.hatfield@datatables.net</td>
	                        </tr>
	                        <tr>
	                          <td>Hope</td>
	                          <td>Fuentes</td>
	                          <td>Secretary</td>
	                          <td>San Francisco</td>
	                          <td>41</td>
	                          <td>2010/02/12</td>
	                          <td>$109,850</td>
	                          <td>6318</td>
	                          <td>h.fuentes@datatables.net</td>
	                        </tr>
	                        <tr>
	                          <td>Vivian</td>
	                          <td>Harrell</td>
	                          <td>Financial Controller</td>
	                          <td>San Francisco</td>
	                          <td>62</td>
	                          <td>2009/02/14</td>
	                          <td>$452,500</td>
	                          <td>9422</td>
	                          <td>v.harrell@datatables.net</td>
	                        </tr>
	                        <tr>
	                          <td>Timothy</td>
	                          <td>Mooney</td>
	                          <td>Office Manager</td>
	                          <td>London</td>
	                          <td>37</td>
	                          <td>2008/12/11</td>
	                          <td>$136,200</td>
	                          <td>7580</td>
	                          <td>t.mooney@datatables.net</td>
	                        </tr>
	                        <tr>
	                          <td>Jackson</td>
	                          <td>Bradshaw</td>
	                          <td>Director</td>
	                          <td>New York</td>
	                          <td>65</td>
	                          <td>2008/09/26</td>
	                          <td>$645,750</td>
	                          <td>1042</td>
	                          <td>j.bradshaw@datatables.net</td>
	                        </tr>
	                        <tr>
	                          <td>Olivia</td>
	                          <td>Liang</td>
	                          <td>Support Engineer</td>
	                          <td>Singapore</td>
	                          <td>64</td>
	                          <td>2011/02/03</td>
	                          <td>$234,500</td>
	                          <td>2120</td>
	                          <td>o.liang@datatables.net</td>
	                        </tr>
	                        <tr>
	                          <td>Bruno</td>
	                          <td>Nash</td>
	                          <td>Software Engineer</td>
	                          <td>London</td>
	                          <td>38</td>
	                          <td>2011/05/03</td>
	                          <td>$163,500</td>
	                          <td>6222</td>
	                          <td>b.nash@datatables.net</td>
	                        </tr>
	                        <tr>
	                          <td>Sakura</td>
	                          <td>Yamamoto</td>
	                          <td>Support Engineer</td>
	                          <td>Tokyo</td>
	                          <td>37</td>
	                          <td>2009/08/19</td>
	                          <td>$139,575</td>
	                          <td>9383</td>
	                          <td>s.yamamoto@datatables.net</td>
	                        </tr>
	                        <tr>
	                          <td>Thor</td>
	                          <td>Walton</td>
	                          <td>Developer</td>
	                          <td>New York</td>
	                          <td>61</td>
	                          <td>2013/08/11</td>
	                          <td>$98,540</td>
	                          <td>8327</td>
	                          <td>t.walton@datatables.net</td>
	                        </tr>
	                        <tr>
	                          <td>Finn</td>
	                          <td>Camacho</td>
	                          <td>Support Engineer</td>
	                          <td>San Francisco</td>
	                          <td>47</td>
	                          <td>2009/07/07</td>
	                          <td>$87,500</td>
	                          <td>2927</td>
	                          <td>f.camacho@datatables.net</td>
	                        </tr>
	                        <tr>
	                          <td>Serge</td>
	                          <td>Baldwin</td>
	                          <td>Data Coordinator</td>
	                          <td>Singapore</td>
	                          <td>64</td>
	                          <td>2012/04/09</td>
	                          <td>$138,575</td>
	                          <td>8352</td>
	                          <td>s.baldwin@datatables.net</td>
	                        </tr>
	                        <tr>
	                          <td>Zenaida</td>
	                          <td>Frank</td>
	                          <td>Software Engineer</td>
	                          <td>New York</td>
	                          <td>63</td>
	                          <td>2010/01/04</td>
	                          <td>$125,250</td>
	                          <td>7439</td>
	                          <td>z.frank@datatables.net</td>
	                        </tr>
	                        <tr>
	                          <td>Zorita</td>
	                          <td>Serrano</td>
	                          <td>Software Engineer</td>
	                          <td>San Francisco</td>
	                          <td>56</td>
	                          <td>2012/06/01</td>
	                          <td>$115,000</td>
	                          <td>4389</td>
	                          <td>z.serrano@datatables.net</td>
	                        </tr>
	                        <tr>
	                          <td>Jennifer</td>
	                          <td>Acosta</td>
	                          <td>Junior Javascript Developer</td>
	                          <td>Edinburgh</td>
	                          <td>43</td>
	                          <td>2013/02/01</td>
	                          <td>$75,650</td>
	                          <td>3431</td>
	                          <td>j.acosta@datatables.net</td>
	                        </tr>
	                        <tr>
	                          <td>Cara</td>
	                          <td>Stevens</td>
	                          <td>Sales Assistant</td>
	                          <td>New York</td>
	                          <td>46</td>
	                          <td>2011/12/06</td>
	                          <td>$145,600</td>
	                          <td>3990</td>
	                          <td>c.stevens@datatables.net</td>
	                        </tr>
	                        <tr>
	                          <td>Hermione</td>
	                          <td>Butler</td>
	                          <td>Regional Director</td>
	                          <td>London</td>
	                          <td>47</td>
	                          <td>2011/03/21</td>
	                          <td>$356,250</td>
	                          <td>1016</td>
	                          <td>h.butler@datatables.net</td>
	                        </tr>
	                        <tr>
	                          <td>Lael</td>
	                          <td>Greer</td>
	                          <td>Systems Administrator</td>
	                          <td>London</td>
	                          <td>21</td>
	                          <td>2009/02/27</td>
	                          <td>$103,500</td>
	                          <td>6733</td>
	                          <td>l.greer@datatables.net</td>
	                        </tr>
	                        <tr>
	                          <td>Jonas</td>
	                          <td>Alexander</td>
	                          <td>Developer</td>
	                          <td>San Francisco</td>
	                          <td>30</td>
	                          <td>2010/07/14</td>
	                          <td>$86,500</td>
	                          <td>8196</td>
	                          <td>j.alexander@datatables.net</td>
	                        </tr>
	                        <tr>
	                          <td>Shad</td>
	                          <td>Decker</td>
	                          <td>Regional Director</td>
	                          <td>Edinburgh</td>
	                          <td>51</td>
	                          <td>2008/11/13</td>
	                          <td>$183,000</td>
	                          <td>6373</td>
	                          <td>s.decker@datatables.net</td>
	                        </tr>
	                        <tr>
	                          <td>Michael</td>
	                          <td>Bruce</td>
	                          <td>Javascript Developer</td>
	                          <td>Singapore</td>
	                          <td>29</td>
	                          <td>2011/06/27</td>
	                          <td>$183,000</td>
	                          <td>5384</td>
	                          <td>m.bruce@datatables.net</td>
	                        </tr>
	                        <tr>
	                          <td>Donna</td>
	                          <td>Snider</td>
	                          <td>Customer Support</td>
	                          <td>New York</td>
	                          <td>27</td>
	                          <td>2011/01/25</td>
	                          <td>$112,000</td>
	                          <td>4226</td>
	                          <td>d.snider@datatables.net</td>
	                        </tr>
	                      </tbody>
	                    </table>
						
						
	                  </div>
	                </div>
	              </div>
	            </div>
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
                          <td>Jaywel Bisarra Javier</td>
                        </tr>
                        </tr>
                        <tr>
                          <th scope="row">Student No.</th>
                          <td>2014-04778-MN-0</td>
                        </tr>
                        <tr>
                          <th scope="row">Student Type</th>
                          <td>College</td>
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
                  <label>First Name</label>
                  <input type="text" name="name" id="name" value="Jaywel" class="form-control" />
                  <br />
                  <label>Last Name</label>
                  <input type="text" name="name" id="name" value="Javier" class="form-control" />
                  <br />
                  <label>Middle Name</label>
                  <input type="text" name="name" id="name" value="Bisarra" class="form-control" />
                  <br />
                  <label>Student No.</label>
                  <input type="text" name="name" id="name" value="2015-04778-MN-0" class="form-control" />
                  <br />
                  <label>Student Type</label>
                  <select name="gender" id="gender" class="form-control">
                    <option value="Labhigh">Select type of student</option>
                    <option value="Labhigh">Laboratory High School</option>  
                    <option value="Male">Senior High</option>  
                    <option value="Female">College</option>
                    <option value="Female">Graduate School</option>
                  </select>
                  <br />
                  <label>Password</label>
                  <input type="password" name="name" id="name" value="" class="form-control" />
                  <br />
                  <label>Retype Password</label>
                  <input type="password" name="name" id="name" value="" class="form-control" />
                  <input type="submit" name="insert" id="insert" value="Cancel" class="btn btn-danger pull-right" />
                  <input type="submit" name="insert" id="insert" value="Update" class="btn btn-success pull-right" />
                </form>
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
                <h4 class="modal-title">Add Account</h4>
              </div>
              <div class="modal-body">
                <form method="post" id="insert_form">
                  <label>First Name</label>
                  <input type="text" name="name" id="name" class="form-control" />
                  <br />
                  <label>Last Name</label>
                  <input type="text" name="name" id="name" class="form-control" />
                  <br />
                  <label>Middle Name</label>
                  <input type="text" name="name" id="name" class="form-control" />
                  <br />
                  <label>Student Number</label>
                  <input type="text" name="name" id="name" class="form-control" />
                  <br />
                  <label>Student Type</label>
                  <select name="gender" id="gender" class="form-control">
                    <option value="Labhigh">Select type of student</option>
                    <option value="Labhigh">Laboratory High School</option>  
                    <option value="Male">Senior High</option>  
                    <option value="Female">College</option>
                    <option value="Female">Graduate School</option>
                  </select>
                  <label>Course</label>
                  <select class="select2_single form-control" tabindex="-1" selected="">
                    <option groupid=" " value=" " >-select course-</option>
                    <option groupid="110" value="AB-PHILO">AB-PHILO&nbsp;&nbsp; - BACHELOR OF ARTS IN PHILOSOPHY</option>
                    <option groupid="110" value="ABE" selected="">ABE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR OF ARTS IN ENGLISH</option>
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
                    <option groupid="112" selected="selected" value="BSIT">BSIT&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY</option>
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
                  <br>
                  <label>Year</label>
                  <input type="text" name="name" id="name" class="form-control" />
                  <br />
                  <label>Section</label>
                  <input type="text" name="name" id="name" class="form-control" />
                  <br />
                  <label>Password</label>
                  <input type="password" name="name" id="name" value="" class="form-control" />
                  <br />
                  <label>Retype Password</label>
                  <input type="password" name="name" id="name" value="" class="form-control" />

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