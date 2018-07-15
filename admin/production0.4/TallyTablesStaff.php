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
                <h3>Individual Inventory Records<small></small></h3>
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
                    <h2>Button Example <small>Users</small></h2>
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
                      The Buttons extension for DataTables provides a common set of options, API methods and styling to display buttons on a page that will interact with a DataTable. The core library provides the based framework upon which plug-ins can built.
                    </p>
                    <table id="datatable-buttons" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>Personal Information</th>
                          <th>BSIT 1-1</th>
                          <th>BSIT 1-2</th>
                          <th>BSIT 1-3</th>
                          <th>BSIT 1-4</th>
                          <th>BSIT 1-5</th>
                          <th>BSIT 1-1N</th>
                          <th>BSIT 1-2N</th>


                        </tr>
                      </thead>

                      <tbody>
                        <tr>
                          <td>Male</td>
                          <td>22</td>
                          <td>21</td>
                          <td>26</td>
                          <td>24</td>
                          <td>28</td>
                          <td>19</td>
                          <td>20</td>
                        </tr>
                        <tr>
                          <td>Female</td>
                          <td>23</td>
                          <td>26</td>
                          <td>25</td>
                          <td>29</td>
                          <td>20</td>
                          <td>17</td>
                          <td>20</td>
                        </tr>
                        <tr>
                          <td>Total</td>
                          <td>45</td>
                          <td>47</td>
                          <td>51</td>
                          <td>53</td>
                          <td>48</td>
                          <td>36</td>
                          <td>40</td>
                        </tr>
                        <tr>
                          <th><strong>Age</strong></th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                          <th></th>
                        </tr>
                        <tr>
                          <td>15</td>
                          <td>12</td>
                          <td>11</td>
                          <td>16</td>
                          <td>14</td>
                          <td>18</td>
                          <td>9</td>
                          <td>10</td>
                        </tr>
                        <tr>
                          <td>16</td>
                          <td>10</td>
                          <td>10</td>
                          <td>10</td>
                          <td>10</td>
                          <td>10</td>
                          <td>10</td>
                          <td>10</td>
                        </tr>
                        <tr>
                          <td>17</td>
                          <td>11</td>
                          <td>11</td>
                          <td>11</td>
                          <td>11</td>
                          <td>11</td>
                          <td>11</td>
                          <td>11</td>
                        </tr>
                        <tr>
                          <td>18</td>
                          <td>12</td>
                          <td>15</td>
                          <td>14</td>
                          <td>18</td>
                          <td>10</td>
                          <td>6</td>
                          <td>9</td>
                        </tr>
                        <tr>
                          <td>19</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>20 and above</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Not Indicated</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Total</td>
                          <td>45</td>
                          <td>47</td>
                          <td>51</td>
                          <td>53</td>
                          <td>48</td>
                          <td>36</td>
                          <td>40</td>
                        </tr>
                        <tr>
                          <th>Civil Status</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Single</td>
                          <td>40</td>
                          <td>42</td>
                          <td>51</td>
                          <td>50</td>
                          <td>48</td>
                          <td>36</td>
                          <td>40</td>
                        </tr>
                        <tr>
                          <td>Married</td>
                          <td>1</td>
                          <td>1</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Widowed</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Divorced</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Not Indicated</td>
                          <td>4</td>
                          <td>4</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Total</td>
                          <td>45</td>
                          <td>47</td>
                          <td>51</td>
                          <td>53</td>
                          <td>48</td>
                          <td>36</td>
                          <td>40</td>
                        </tr>
                        <tr>
                          <th>City Address</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Caloocan</td>
                          <td>5</td>
                          <td>5</td>
                          <td>5</td>
                          <td>3</td>
                          <td>2</td>
                          <td>6</td>
                          <td>5</td>
                        </tr>
                        <tr>
                          <td>Las Pinas</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>2</td>
                          <td>3</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>Mandaluyong</td>
                          <td>10</td>
                          <td>10</td>
                          <td>10</td>
                          <td>10</td>
                          <td>10</td>
                          <td>10</td>
                          <td>10</td>
                        </tr>
                        <tr>
                          <td>Makati</td>
                          <td>7</td>
                          <td>8</td>
                          <td>6</td>
                          <td>5</td>
                          <td>7</td>
                          <td>8</td>
                          <td>4</td>
                        </tr>
                        <tr>
                          <td>Malabon</td>
                          <td>2</td>
                          <td>1</td>
                          <td>2</td>
                          <td>1</td>
                          <td>2</td>
                          <td>0</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>Marikina</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>1</td>
                          <td>1</td>
                          <td>2</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>Manila</td>
                          <td>1</td>
                          <td>2</td>
                          <td>1</td>
                          <td>1</td>
                          <td>2</td>
                          <td>1</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>Muntinlupa</td>
                          <td>2</td>
                          <td>2</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>Navotas</td>
                          <td>1</td>
                          <td>2</td>
                          <td>2</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>Paranaque</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Pasay</td>
                          <td>0</td>
                          <td>1</td>
                          <td>0</td>
                          <td>2</td>
                          <td>1</td>
                          <td>0</td>
                          <td>3</td>
                        </tr>
                        <tr>
                          <td>Pasig</td>
                          <td>0</td>
                          <td>1</td>
                          <td>2</td>
                          <td>3</td>
                          <td>1</td>
                          <td>0</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>Pateros</td>
                          <td>1</td>
                          <td>2</td>
                          <td>4</td>
                          <td>4</td>
                          <td>7</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Quezon City</td>
                          <td>5</td>
                          <td>6</td>
                          <td>5</td>
                          <td>9</td>
                          <td>5</td>
                          <td>4</td>
                          <td>2</td>
                        </tr>
                        <tr>
                          <td>San Juan</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>3</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Taguig</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>Valenzuela</td>
                          <td>5</td>
                          <td>2</td>
                          <td>1</td>
                          <td>1</td>
                          <td>0</td>
                          <td>0</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>Not Indicated</td>
                          <td>5</td>
                          <td>5</td>
                          <td>10</td>
                          <td>0</td>
                          <td>12</td>
                          <td>0</td>
                          <td>3</td>
                        </tr>
                        <tr>
                          <td>Total</td>
                          <td>45</td>
                          <td>47</td>
                          <td>51</td>
                          <td>53</td>
                          <td>48</td>
                          <td>36</td>
                          <td>40</td>
                        </tr>
                        <tr>
                          <th>Provincial Address</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <th>Region I. Ilocos Region</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Ilocos Norte</td>
                          <td>4</td>
                          <td>3</td>
                          <td>5</td>
                          <td>3</td>
                          <td>1</td>
                          <td>2</td>
                          <td>4</td>
                        </tr>
                        <tr>
                          <td>Ilocos Sur</td>
                          <td>4</td>
                          <td>2</td>
                          <td>1</td>
                          <td>5</td>
                          <td>4</td>
                          <td>3</td>
                          <td>2</td>
                        </tr>
                        <tr>
                          <td>La Union</td>
                          <td>1</td>
                          <td>2</td>
                          <td>1</td>
                          <td>1</td>
                          <td>3</td>
                          <td>1</td>
                          <td>2</td>
                        </tr>
                        <tr>
                          <td>Pangasinan</td>
                          <td>2</td>
                          <td>3</td>
                          <td>1</td>
                          <td>4</td>
                          <td>1</td>
                          <td>2</td>
                          <td>2</td>
                        </tr>
                        <tr>
                          <th>Region II. Cagayan Valley</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Quirino</td>
                          <td>1</td>
                          <td>2</td>
                          <td>1</td>
                          <td>2</td>
                          <td>1</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Cagayan</td>
                          <td>3</td>
                          <td>4</td>
                          <td>3</td>
                          <td>2</td>
                          <td>1</td>
                          <td>3</td>
                          <td>2</td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>2</td>
                          <td>3</td>
                          <td>4</td>
                          <td>2</td>
                          <td>1</td>
                          <td>2</td>
                          <td>3</td>
                        </tr>
                        <tr>
                          <th>Region III. Central Luzon</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Bataan</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>Bulacan</td>
                          <td>3</td>
                          <td>4</td>
                          <td>5</td>
                          <td>2</td>
                          <td>1</td>
                          <td>1</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Nueva Ecija</td>
                          <td>1</td>
                          <td>2</td>
                          <td>1</td>
                          <td>0</td>
                          <td>0</td>
                          <td>1</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Pampanga</td>
                          <td>1</td>
                          <td>2</td>
                          <td>1</td>
                          <td>0</td>
                          <td>1</td>
                          <td>0</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>Tarlac</td>
                          <td>1</td>
                          <td>1</td>
                          <td>0</td>
                          <td>0</td>
                          <td>1</td>
                          <td>0</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>Zambales</td>
                          <td>3</td>
                          <td>2</td>
                          <td>1</td>
                          <td>1</td>
                          <td>2</td>
                          <td>1</td>
                          <td>2</td>
                        </tr>
                        <tr>
                          <td>Aurora</td>
                          <td>1</td>
                          <td>2</td>
                          <td>1</td>
                          <td>2</td>
                          <td>3</td>
                          <td>1</td>
                          <td>2</td>
                        </tr>
                        <tr>
                          <th>Region IV-A CALABARZON</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Batangas</td>
                          <td>1</td>
                          <td>2</td>
                          <td>3</td>
                          <td>1</td>
                          <td>2</td>
                          <td>3</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>Cavite</td>
                          <td>1</td>
                          <td>2</td>
                          <td>1</td>
                          <td>2</td>
                          <td>3</td>
                          <td>2</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>Laguna</td>
                          <td>1</td>
                          <td>2</td>
                          <td>3</td>
                          <td>1</td>
                          <td>2</td>
                          <td>1</td>
                          <td>2</td>
                        </tr>
                        <tr>
                          <td>Quezon</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Rizal</td>
                          <td>1</td>
                          <td>2</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>Region IV-B MIMAROPA</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Mindoro Occidental</td>
                          <td>1</td>
                          <td>2</td>
                          <td>1</td>
                          <td>1</td>
                          <td>2</td>
                          <td>3</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>Mindoro Oriental</td>
                          <td>1</td>
                          <td>2</td>
                          <td>3</td>
                          <td>1</td>
                          <td>2</td>
                          <td>1</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>Marinduque</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>2</td>
                          <td>0</td>
                          <td>1</td>
                          <td>2</td>
                        </tr>
                        <tr>
                          <td>Romblon</td>
                          <td>1</td>
                          <td>1</td>
                          <td>2</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>2</td>
                        </tr>
                        <tr>
                          <td>Palawan</td>
                          <td>1</td>
                          <td>2</td>
                          <td>1</td>
                          <td>2</td>
                          <td>1</td>
                          <td>2</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <th>Region V: Bicol Region</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Albay</td>
                          <td>1</td>
                          <td>1</td>
                          <td>0</td>
                          <td>1</td>
                          <td>0</td>
                          <td>1</td>
                          <td>2</td>
                        </tr>
                        <tr>
                          <td>Camarines Norte</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>2</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>Camarines Sur</td>
                          <td>0</td>
                          <td>0</td>
                          <td>1</td>
                          <td>2</td>
                          <td>1</td>
                          <td>0</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>Catanduanes</td>
                          <td>1</td>
                          <td>2</td>
                          <td>1</td>
                          <td>0</td>
                          <td>1</td>
                          <td>3</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>Masbate</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>Sorsogon</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>1</td>
                          <td>0</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <th>Region IV: Western Visayas</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Aklan</td>
                          <td>2</td>
                          <td>1</td>
                          <td>1</td>
                          <td>0</td>
                          <td>1</td>
                          <td>0</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>Antique</td>
                          <td>1</td>
                          <td>2</td>
                          <td>1</td>
                          <td>1</td>
                          <td>0</td>
                          <td>1</td>
                          <td>2</td>
                        </tr>
                        <tr>
                          <td>Capiz</td>
                          <td>0</td>
                          <td>1</td>
                          <td>2</td>
                          <td>1</td>
                          <td>1</td>
                          <td>0</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>Ilo-ilo</td>
                          <td>0</td>
                          <td>1</td>
                          <td>2</td>
                          <td>1</td>
                          <td>1</td>
                          <td>0</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>Negros Occidental</td>
                          <td>0</td>
                          <td>1</td>
                          <td>2</td>
                          <td>1</td>
                          <td>1</td>
                          <td>0</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>Negros Oriental</td>
                          <td>1</td>
                          <td>0</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>2</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <th>Region VII: Central Visayas</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Bohol</td>
                          <td>0</td>
                          <td>1</td>
                          <td>2</td>
                          <td>3</td>
                          <td>1</td>
                          <td>1</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Cebu</td>
                          <td>0</td>
                          <td>1</td>
                          <td>2</td>
                          <td>1</td>
                          <td>0</td>
                          <td>1</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>Siquijor</td>
                          <td>1</td>
                          <td>0</td>
                          <td>2</td>
                          <td>1</td>
                          <td>2</td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Region VIII: Eastern Visayas</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Eastern Samar</td>
                          <td>1</td>
                          <td>0</td>
                          <td>2</td>
                          <td>1</td>
                          <td>3</td>
                          <td>0</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>Northern Samar</td>
                          <td>1</td>
                          <td>0</td>
                          <td>1</td>
                          <td>2</td>
                          <td>0</td>
                          <td>1</td>
                          <td>2</td>
                        </tr>
                        <tr>
                          <td>Samar</td>
                          <td>1</td>
                          <td>0</td>
                          <td>1</td>
                          <td>2</td>
                          <td>1</td>
                          <td>0</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>Biliran</td>
                          <td>0</td>
                          <td>1</td>
                          <td>2</td>
                          <td>1</td>
                          <td>0</td>
                          <td>1</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>Leyte</td>
                          <td>1</td>
                          <td>2</td>
                          <td>1</td>
                          <td>0</td>
                          <td>0</td>
                          <td>1</td>
                          <td>2</td>
                        </tr>
                        <tr>
                          <th>Region IX: Western Mindanao</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Basilan</td>
                          <td>0</td>
                          <td>1</td>
                          <td>1</td>
                          <td>0</td>
                          <td>1</td>
                          <td>2</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Zamboanga Del Norte</td>
                          <td>0</td>
                          <td>1</td>
                          <td>0</td>
                          <td>1</td>
                          <td>2</td>
                          <td>0</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>Zambaonga Sibugay</td>
                          <td>1</td>
                          <td>3</td>
                          <td>1</td>
                          <td>2</td>
                          <td>1</td>
                          <td>0</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <th>Region X: Northern Mindanao</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Bukidnon</td>
                          <td>0</td>
                          <td>1</td>
                          <td>2</td>
                          <td>1</td>
                          <td>0</td>
                          <td>1</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <th>ARMM</th>
                          <td>1</td>
                          <td>0</td>
                          <td>1</td>
                          <td>0</td>
                          <td>1</td>
                          <td>2</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Maguindanao</td>
                          <td>0</td>
                          <td>1</td>
                          <td>2</td>
                          <td>1</td>
                          <td>0</td>
                          <td>1</td>
                          <td>2</td>
                        </tr>
                        <tr>
                          <td>Sulu</td>
                          <td>0</td>
                          <td>1</td>
                          <td>2</td>
                          <td>1</td>
                          <td>0</td>
                          <td>1</td>
                          <td>2</td>
                        </tr>
                        <tr>
                          <td>Tawi Tawi</td>
                          <td>0</td>
                          <td>1</td>
                          <td>2</td>
                          <td>0</td>
                          <td>1</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <th>CAR</th>
                          <td>3</td>
                          <td>4</td>
                          <td>5</td>
                          <td>4</td>
                          <td>0</td>
                          <td>1</td>
                          <td>2</td>
                        </tr>
                        <tr>
                          <td>Benguet</td>
                          <td>1</td>
                          <td>2</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>Mt. Province</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>1</td>
                          <td>2</td>
                          <td>3</td>
                        </tr>
                        <tr>
                          <td>Abra</td>
                          <td>0</td>
                          <td>2</td>
                          <td>1</td>
                          <td>4</td>
                          <td>2</td>
                          <td>1</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>Apayao</td>
                          <td>1</td>
                          <td>2</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>Kalinga</td>
                          <td>3</td>
                          <td>1</td>
                          <td>2</td>
                          <td>1</td>
                          <td>2</td>
                          <td>1</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>Ifugao</td>
                          <td>0</td>
                          <td>1</td>
                          <td>2</td>
                          <td>1</td>
                          <td>0</td>
                          <td>1</td>
                          <td>2</td>
                        </tr>
                        <tr>
                          <th>CARAGA</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Davao</td>
                          <td>0</td>
                          <td>1</td>
                          <td>2</td>
                          <td>1</td>
                          <td>3</td>
                          <td>1</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>Surigao del sur</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>Surigao del norte</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Not Indicated</td>
                          <td>0</td>
                          <td>0</td>
                          <td>1</td>
                          <td>0</td>
                          <td>1</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Total</td>
                          <td>45</td>
                          <td>47</td>
                          <td>51</td>
                          <td>53</td>
                          <td>48</td>
                          <td>36</td>
                          <td>40</td>
                        </tr>
                        <tr>
                          <th>II. Educational Background</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <th>Elementary</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Public</td>
                          <td>40</td>
                          <td>40</td>
                          <td>46</td>
                          <td>48</td>
                          <td>43</td>
                          <td>36</td>
                          <td>40</td>
                        </tr>
                        <tr>
                          <td>Private</td>
                          <td>5</td>
                          <td>5</td>
                          <td>5</td>
                          <td>5</td>
                          <td>5</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Not Indicated</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Total</td>
                          <td>45</td>
                          <td>47</td>
                          <td>51</td>
                          <td>53</td>
                          <td>48</td>
                          <td>36</td>
                          <td>40</td>
                        </tr>
                        <tr>
                          <td>Continuous</td>
                          <td>45</td>
                          <td>47</td>
                          <td>51</td>
                          <td>53</td>
                          <td>48</td>
                          <td>36</td>
                          <td>40</td>
                        </tr>
                        <tr>
                          <td>Interrupted</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Not Indicated</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Total</td>
                          <td>45</td>
                          <td>47</td>
                          <td>51</td>
                          <td>53</td>
                          <td>48</td>
                          <td>36</td>
                          <td>40</td>
                        </tr>
                        <tr>
                          <th>III. Home And Family Background</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <th>Father</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Living</td>
                          <td>45</td>
                          <td>47</td>
                          <td>51</td>
                          <td>53</td>
                          <td>48</td>
                          <td>36</td>
                          <td>40</td>
                        </tr>
                        <tr>
                          <td>Deceased</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Not Indicated</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Total</td>
                          <td>45</td>
                          <td>47</td>
                          <td>51</td>
                          <td>53</td>
                          <td>48</td>
                          <td>36</td>
                          <td>40</td>
                        </tr>
                        <tr>
                          <th>Father's Educational Attainment</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Doctoral Degree</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>Masteral Degree</td>
                          <td>4</td>
                          <td>4</td>
                          <td>4</td>
                          <td>4</td>
                          <td>4</td>
                          <td>4</td>
                          <td>4</td>
                        </tr>
                        <tr>
                          <td>Masteral Unit</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Vocational Graduate</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>College Graduate</td>
                          <td>40</td>
                          <td>42</td>
                          <td>46</td>
                          <td>49</td>
                          <td>43</td>
                          <td>31</td>
                          <td>30</td>
                        </tr>
                        <tr>
                          <td>College Undergraduate</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Highschool Graduate</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Highschool Undergraduate</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Elementary Graduate</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Elementary Undergraduate</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Not Indicated</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <th>Occupation</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Employed</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Local</td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Government</td>
                          <td>25</td>
                          <td>27</td>
                          <td>31</td>
                          <td>33</td>
                          <td>28</td>
                          <td>16</td>
                          <td>20</td>
                        </tr>
                        <tr>
                          <td>Private</td>
                          <td>20</td>
                          <td>20</td>
                          <td>20</td>
                          <td>20</td>
                          <td>20</td>
                          <td>20</td>
                          <td>20</td>
                        </tr>
                        <tr>
                          <td>Abroad</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Unemployed</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Self-employed</td>
                          <td>20</td>
                          <td>20</td>
                          <td>20</td>
                          <td>20</td>
                          <td>20</td>
                          <td>20</td>
                          <td>20</td>
                        </tr>
                        <tr>
                          <td>Not Indicated</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Total</td>
                          <td>45</td>
                          <td>47</td>
                          <td>51</td>
                          <td>53</td>
                          <td>48</td>
                          <td>36</td>
                          <td>40</td>
                        </tr>
                        <tr>
                          <th>Mother</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Living</td>
                          <td>45</td>
                          <td>47</td>
                          <td>51</td>
                          <td>53</td>
                          <td>48</td>
                          <td>36</td>
                          <td>40</td>
                        </tr>
                        <tr>
                          <td>Deceased</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Not Indicated</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Total</td>
                          <td>45</td>
                          <td>47</td>
                          <td>51</td>
                          <td>53</td>
                          <td>48</td>
                          <td>36</td>
                          <td>40</td>
                        </tr>
                        <tr>
                          <th>Mother's Educational Attainment</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Doctoral Degree</td>
                          <td>2</td>
                          <td>2</td>
                          <td>2</td>
                          <td>2</td>
                          <td>2</td>
                          <td>2</td>
                          <td>2</td>
                        </tr>
                        <tr>
                          <td>Masteral Degree</td>
                          <td>3</td>
                          <td>3</td>
                          <td>3</td>
                          <td>3</td>
                          <td>3</td>
                          <td>3</td>
                          <td>3</td>
                        </tr>
                        <tr>
                          <td>Masteral Unit</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Vocational Graduate</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>College Graduate</td>
                          <td>40</td>
                          <td>42</td>
                          <td>46</td>
                          <td>48</td>
                          <td>43</td>
                          <td>31</td>
                          <td>35</td>
                        </tr>
                        <tr>
                          <td>College Undergraduate</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Highschool Graduate</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Highschool Undergraduate</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Elementary Graduate</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Elementary Undergraduate</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Not Indicated</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <th>Occupation</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Employed</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Local</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Government</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Private</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Abroad</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Unemployed</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Self-employed</td>
                          <td>45</td>
                          <td>47</td>
                          <td>51</td>
                          <td>53</td>
                          <td>48</td>
                          <td>36</td>
                          <td>40</td>
                        </tr>
                        <tr>
                          <td>Not Indicated</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Total</td>
                          <td>45</td>
                          <td>47</td>
                          <td>51</td>
                          <td>53</td>
                          <td>48</td>
                          <td>36</td>
                          <td>40</td>
                        </tr>
                        <tr>
                          <th>Total Monthly Income</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Below 5000</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>5001-10000</td>
                          <td>1</td>
                          <td>2</td>
                          <td>2</td>
                          <td>3</td>
                          <td>3</td>
                          <td>1</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>10001-15000</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>15001-20000</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>20001-25000</td>
                          <td>4</td>
                          <td>3</td>
                          <td>3</td>
                          <td>2</td>
                          <td>2</td>
                          <td>4</td>
                          <td>4</td>
                        </tr>
                        <tr>
                          <td>25001-30000</td>
                          <td>40</td>
                          <td>42</td>
                          <td>45</td>
                          <td>48</td>
                          <td>43</td>
                          <td>31</td>
                          <td>35</td>
                        </tr>
                        <tr>
                          <td>30001-35000</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>40001-45000</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>45001-50000</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Above 50000</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <th>Number of Children in the family</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>0</td>
                          <td>1</td>
                          <td>2</td>
                          <td>1</td>
                          <td>0</td>
                          <td>1</td>
                          <td>2</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>0</td>
                          <td>1</td>
                          <td>2</td>
                          <td>0</td>
                          <td>1</td>
                          <td>2</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>0</td>
                          <td>1</td>
                          <td>2</td>
                          <td>0</td>
                          <td>1</td>
                          <td>2</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>0</td>
                          <td>1</td>
                          <td>2</td>
                          <td>1</td>
                          <td>3</td>
                          <td>5</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td>0</td>
                          <td>1</td>
                          <td>2</td>
                          <td>3</td>
                          <td>1</td>
                          <td>1</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>6</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>7</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>8</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>9</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>10</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Others</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Not Indicated</td>
                          <td>35</td>
                          <td>32</td>
                          <td>36</td>
                          <td>38</td>
                          <td>36</td>
                          <td>30</td>
                          <td>29</td>
                        </tr>
                        <tr>
                          <td>Total</td>
                          <td>45</td>
                          <td>47</td>
                          <td>51</td>
                          <td>53</td>
                          <td>48</td>
                          <td>36</td>
                          <td>40</td>
                        </tr>
                        <tr>
                          <th>No. of Bro/sis gainfully emplpoyed</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>1</td>
                          <td>3</td>
                          <td>3</td>
                          <td>3</td>
                          <td>3</td>
                          <td>3</td>
                          <td>3</td>
                          <td>3</td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>0</td>
                          <td>0</td>
                          <td>1</td>
                          <td>2</td>
                          <td>1</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>4 and above</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>None</td>
                          <td>42</td>
                          <td>42</td>
                          <td>47</td>
                          <td>49</td>
                          <td>47</td>
                          <td>34</td>
                          <td>48</td>
                        </tr>
                        <tr>
                          <td>Not Indicated</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Total</td>
                          <td>45</td>
                          <td>47</td>
                          <td>51</td>
                          <td>53</td>
                          <td>48</td>
                          <td>36</td>
                          <td>40</td>
                        </tr>
                        <tr>
                          <th>Support For</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Family</td>
                          <td>1</td>
                          <td>3</td>
                          <td>3</td>
                          <td>3</td>
                          <td>3</td>
                          <td>3</td>
                          <td>3</td>
                          <td>3</td>
                        </tr>
                        <tr>
                          <td>Studies</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Own Family</td>
                          <td>2</td>
                          <td>0</td>
                          <td>0</td>
                          <td>1</td>
                          <td>2</td>
                          <td>1</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Not Indicated</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Total</td>
                          <td>3</td>
                          <td>3</td>
                          <td>3</td>
                          <td>4</td>
                          <td>5</td>
                          <td>3</td>
                          <td>3</td>
                        </tr>
                        <tr>
                          <th>Who Support Your Schooling?</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Parents</td>
                          <td>45</td>
                          <td>47</td>
                          <td>51</td>
                          <td>53</td>
                          <td>48</td>
                          <td>36</td>
                          <td>40</td>
                        </tr>
                        <tr>
                          <td>Sibling</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Spouse</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Scholarship</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Self-supporting</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Not indicated</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Total</td>
                          <td>45</td>
                          <td>47</td>
                          <td>51</td>
                          <td>53</td>
                          <td>48</td>
                          <td>36</td>
                          <td>40</td>
                        </tr>
                        <tr>
                          <th>Weekly Allowance</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Below 100</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>101-500</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>501-1000</td>
                          <td>30</td>
                          <td>36</td>
                          <td>33</td>
                          <td>32</td>
                          <td>33</td>
                          <td>32</td>
                          <td>34</td>
                        </tr>
                        <tr>
                          <td>Above 1000</td>
                          <td>10</td>
                          <td>11</td>
                          <td>8</td>
                          <td>1</td>
                          <td>3</td>
                          <td>2</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>Not Indicated</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Total</td>
                          <td>45</td>
                          <td>47</td>
                          <td>51</td>
                          <td>53</td>
                          <td>48</td>
                          <td>36</td>
                          <td>40</td>
                        </tr>
                        <tr>
                          <th>Do you have a quiet place to study?</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Yes</td>
                          <td>40</td>
                          <td>42</td>
                          <td>46</td>
                          <td>53</td>
                          <td>43</td>
                          <td>31</td>
                          <td>35</td>
                        </tr>
                        <tr>
                          <td>No</td>
                          <td>5</td>
                          <td>5</td>
                          <td>5</td>
                          <td>5</td>
                          <td>5</td>
                          <td>5</td>
                          <td>5</td>
                        </tr>
                        <tr>
                          <td>Not Indicated</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Total</td>
                          <td>45</td>
                          <td>47</td>
                          <td>51</td>
                          <td>53</td>
                          <td>48</td>
                          <td>36</td>
                          <td>40</td>
                        </tr>
                        <tr>
                          <th>Do you share your room with anyone?</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Yes</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>No</td>
                          <td>44</td>
                          <td>46</td>
                          <td>50</td>
                          <td>52</td>
                          <td>47</td>
                          <td>35</td>
                          <td>39</td>
                        </tr>
                        <tr>
                          <td>Not Indicated</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Total</td>
                          <td>45</td>
                          <td>47</td>
                          <td>51</td>
                          <td>53</td>
                          <td>48</td>
                          <td>36</td>
                          <td>40</td>
                        </tr>
                        <tr>
                          <th>Nature Of Residence</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Family</td>
                          <td>30</td>
                          <td>30</td>
                          <td>25</td>
                          <td>25</td>
                          <td>30</td>
                          <td>25</td>
                          <td>25</td>
                        </tr>
                        <tr>
                          <td>Relative's house</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Shares Apartment</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>With Friends</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>With Relatives</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Bed Spacer</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Rented Apartment</td>
                          <td>12</td>
                          <td>10</td>
                          <td>7</td>
                          <td>13</td>
                          <td>14</td>
                          <td>15</td>
                          <td>16</td>
                        </tr>
                        <tr>
                          <td>House of married brother/sister</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Dorm</td>
                          <td>3</td>
                          <td>2</td>
                          <td>3</td>
                          <td>1</td>
                          <td>2</td>
                          <td>3</td>
                          <td>1</td>
                        </tr>
                        <tr>
                          <td>Not Indicated</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Total</td>
                          <td>45</td>
                          <td>47</td>
                          <td>51</td>
                          <td>53</td>
                          <td>48</td>
                          <td>36</td>
                          <td>40</td>
                        </tr>
                        <tr>
                          <th>IV. Health</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <th>A. Physical</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <th>Yes</th>
                          <td>20</td>
                          <td>20</td>
                          <td>20</td>
                          <td>20</td>
                          <td>20</td>
                          <td>20</td>
                          <td>20</td>
                        </tr>
                        <tr>
                          <td>Vision</td>
                          <td>20</td>
                          <td>20</td>
                          <td>20</td>
                          <td>20</td>
                          <td>20</td>
                          <td>20</td>
                          <td>20</td>
                        </tr>
                        <tr>
                          <td>Hearing</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Speech</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>General Health</td>
                          <td>2</td>
                          <td>2</td>
                          <td>2</td>
                          <td>2</td>
                          <td>2</td>
                          <td>2</td>
                          <td>2</td>
                        </tr>
                        <tr>
                          <th>No</th>
                          <td>25</td>
                          <td>27</td>
                          <td>31</td>
                          <td>33</td>
                          <td>28</td>
                          <td>16</td>
                          <td>20</td>
                        </tr>
                        <tr>
                          <th>Psychological</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <th>Psychiatrist</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Yes</td>
                          <td>1</td>
                          <td>2</td>
                          <td>3</td>
                          <td>4</td>
                          <td>5</td>
                          <td>6</td>
                          <td>7</td>
                        </tr>
                        <tr>
                          <td>No</td>
                          <td>44</td>
                          <td>45</td>
                          <td>49</td>
                          <td>49</td>
                          <td>43</td>
                          <td>30</td>
                          <td>33</td>
                        </tr>
                        <tr>
                          <td>Not Indicated</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Total</td>
                          <td>45</td>
                          <td>47</td>
                          <td>51</td>
                          <td>53</td>
                          <td>48</td>
                          <td>36</td>
                          <td>40</td>
                        </tr>
                        <tr>
                          <th>Psychologist</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Yes</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>No</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Not Indicated</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Total</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <th>Counselor</th>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>Yes</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>No</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Not Indicated</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>
                        <tr>
                          <td>Total</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                          <td>0</td>
                        </tr>



                      </tbody>
                    </table>
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