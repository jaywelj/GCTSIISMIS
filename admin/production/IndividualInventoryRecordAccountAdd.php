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
<?php
require 'header.php';
?>
<body class="nav-md">
	<div class="container body" id="div1">
		<div class="main_container">
			<!-- side navigation -->
			<?php 
			require 'sidebar.php';
			?>
			<!-- /side navigation -->
			<!-- top navigation -->
			<?php 
			require 'navbar.php';
			?>
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
									<div class="clearfix"></div>
								</div>
								<div class="x_content">
									<table id="datatable-buttons" class="table table-striped table-bordered">

										<thead>
											<tr>
												<th></th>
												<th>Student Number</th>
												<th>Student Name Name</th>
												<th>Adress</th>
												<th>Contact Number</th>
												<th>Email</th>
												<th>Date of Birth</th>
											</tr>
										</thead>


										<tbody>
											<tr>
												<td>
													<div class="btn-group  btn-group-xs" >
														<button class="btn btn-default btn-info" data-toggle="modal" data-target="#view_data_Modal" type="button"><i class="fa fa-list"></i></button>
														<button class="btn btn-default btn-warning" data-toggle="modal" data-target="#edit_data_Modal" type="button"><i class="fa fa-edit"></i></button>
														<button class="btn btn-default btn-danger" type="button"><i class="fa fa-trash"></i></button>
													</div>

													<td>2015-04778-MN-0</td>
													<td>Jaywel Bisarra Javier</td>
													<td>Taytay, Rizal,Philippines</td>
													<td>09778711191</td>
													<td>jaywelj@gmail.com</td>
													<td>2011/04/25</td>
												</tr>
												<tr>
													<td>
														<div class="btn-group  btn-group-xs" >
															<button class="btn btn-default btn-info" data-toggle="modal" data-target="#view_data_Modal" type="button"><i class="fa fa-list"></i></button>
															<button class="btn btn-default btn-warning" data-toggle="modal" data-target="#edit_data_Modal" type="button"><i class="fa fa-edit"></i></button>
															<button class="btn btn-default btn-danger" type="button"><i class="fa fa-trash"></i></button>
														</div>
													</td>
													<td>08-002-A</td>
													<td>Garrett Winters</td>
													<td>Manila,Philippines</td>
													<td>09778711191</td>
													<td>NixonT@gmail.com</td>
													<td>2011/04/25</td>
												</tr>
												<tr>
													<td>
														<div class="btn-group  btn-group-xs" >
															<button class="btn btn-default btn-info" data-toggle="modal" data-target="#view_data_Modal" type="button"><i class="fa fa-list"></i></button>
															<button class="btn btn-default btn-warning" data-toggle="modal" data-target="#edit_data_Modal" type="button"><i class="fa fa-edit"></i></button>
															<button class="btn btn-default btn-danger" type="button"><i class="fa fa-trash"></i></button>
														</div>
													</td>
													<td>08-003-A</td>
													<td>Ashton Cox</td>
													<td>Manila,Philippines</td>
													<td>09778711191</td>
													<td>NixonT@gmail.com</td>
													<td>2011/04/25</td>
												</tr>
												<tr>
													<td>
														<div class="btn-group  btn-group-xs" >
															<button class="btn btn-default btn-info" data-toggle="modal" data-target="#view_data_Modal" type="button"><i class="fa fa-list"></i></button>
															<button class="btn btn-default btn-warning" data-toggle="modal" data-target="#edit_data_Modal" type="button"><i class="fa fa-edit"></i></button>
															<button class="btn btn-default btn-danger" type="button"><i class="fa fa-trash"></i></button>
														</div>
													</td>
													<td>08-004-A</td>
													<td>Cedric Kelly</td>
													<td>Manila,Philippines</td>
													<td>09778711191</td>
													<td>NixonT@gmail.com</td>
													<td>2011/04/25</td>
												</tr>
												<tr>
													<td>
														<div class="btn-group  btn-group-xs" >
															<button class="btn btn-default btn-info" data-toggle="modal" data-target="#view_data_Modal" type="button"><i class="fa fa-list"></i></button>
															<button class="btn btn-default btn-warning" data-toggle="modal" data-target="#edit_data_Modal" type="button"><i class="fa fa-edit"></i></button>
															<button class="btn btn-default btn-danger" type="button"><i class="fa fa-trash"></i></button>
														</div>
													</td>
													<td>08-005-A</td>
													<td>Airi Satou</td>
													<td>Manila,Philippines</td>
													<td>09778711191</td>
													<td>NixonT@gmail.com</td>
													<td>2011/04/25</td>
												</tr>
												<tr>
													<td>
														<div class="btn-group  btn-group-xs" >
															<button class="btn btn-default btn-info" data-toggle="modal" data-target="#view_data_Modal" type="button"><i class="fa fa-list"></i></button>
															<button class="btn btn-default btn-warning" data-toggle="modal" data-target="#edit_data_Modal" type="button"><i class="fa fa-edit"></i></button>
															<button class="btn btn-default btn-danger" type="button"><i class="fa fa-trash"></i></button>
														</div>
													</td>
													<td>08-006-A</td>
													<td>Brielle Williamson</td>
													<td>Manila,Philippines</td>
													<td>09778711191</td>
													<td>NixonT@gmail.com</td>
													<td>2011/04/25</td>
												</tr>
												<tr>
													<td>
														<div class="btn-group  btn-group-xs" >
															<button class="btn btn-default btn-info" data-toggle="modal" data-target="#view_data_Modal" type="button"><i class="fa fa-list"></i></button>
															<button class="btn btn-default btn-warning" data-toggle="modal" data-target="#edit_data_Modal" type="button"><i class="fa fa-edit"></i></button>
															<button class="btn btn-default btn-danger" type="button"><i class="fa fa-trash"></i></button>
														</div>
													</td>
													<td>08-007-A</td>
													<td>Herrod Chandler</td>
													<td>Manila,Philippines</td>
													<td>09778711191</td>
													<td>NixonT@gmail.com</td>
													<td>2011/04/25</td>
												</tr>
												<tr>
													<td>
														<div class="btn-group  btn-group-xs" >
															<button class="btn btn-default btn-info" data-toggle="modal" data-target="#view_data_Modal" type="button"><i class="fa fa-list"></i></button>
															<button class="btn btn-default btn-warning" data-toggle="modal" data-target="#edit_data_Modal" type="button"><i class="fa fa-edit"></i></button>
															<button class="btn btn-default btn-danger" type="button"><i class="fa fa-trash"></i></button>
														</div>
													</td>
													<td>08-008-A</td>
													<td>Rhona Davidson</td>
													<td>Manila,Philippines</td>
													<td>09778711191</td>
													<td>NixonT@gmail.com</td>
													<td>2011/04/25</td>
												</tr>
												<tr>
													<td>
														<div class="btn-group  btn-group-xs" >
															<button class="btn btn-default btn-info" data-toggle="modal" data-target="#view_data_Modal" type="button"><i class="fa fa-list"></i></button>
															<button class="btn btn-default btn-warning" data-toggle="modal" data-target="#edit_data_Modal" type="button"><i class="fa fa-edit"></i></button>
															<button class="btn btn-default btn-danger" type="button"><i class="fa fa-trash"></i></button>
														</div>
													</td>
													<td>08-009-A</td>
													<td>Colleen Hurst</td>
													<td>Manila,Philippines</td>
													<td>09778711191</td>
													<td>NixonT@gmail.com</td>
													<td>2011/04/25</td>
												</tr>
												<tr>
													<td>
														<div class="btn-group  btn-group-xs" >
															<button class="btn btn-default btn-info" data-toggle="modal" data-target="#view_data_Modal" type="button"><i class="fa fa-list"></i></button>
															<button class="btn btn-default btn-warning" data-toggle="modal" data-target="#edit_data_Modal" type="button"><i class="fa fa-edit"></i></button>
															<button class="btn btn-default btn-danger" type="button"><i class="fa fa-trash"></i></button>
														</div>
													</td>
													<td>08-010-A</td>
													<td>Sonya Frost</td>
													<td>Manila,Philippines</td>
													<td>09778711191</td>
													<td>NixonT@gmail.com</td>
													<td>2011/04/25</td>
												</tr>
												<tr>
													<td>
														<div class="btn-group  btn-group-xs" >
															<button class="btn btn-default btn-info" data-toggle="modal" data-target="#view_data_Modal" type="button"><i class="fa fa-list"></i></button>
															<button class="btn btn-default btn-warning" data-toggle="modal" data-target="#edit_data_Modal" type="button"><i class="fa fa-edit"></i></button>
															<button class="btn btn-default btn-danger" type="button"><i class="fa fa-trash"></i></button>
														</div>
													</td>
													<td>08-100-A</td>
													<td>Jena Gaines</td>
													<td>Manila,Philippines</td>
													<td>09778711191</td>
													<td>NixonT@gmail.com</td>
													<td>2011/04/25</td>
												</tr>
												<tr>
													<td>
														<div class="btn-group  btn-group-xs" >
															<button class="btn btn-default btn-info" data-toggle="modal" data-target="#view_data_Modal" type="button"><i class="fa fa-list"></i></button>
															<button class="btn btn-default btn-warning" data-toggle="modal" data-target="#edit_data_Modal" type="button"><i class="fa fa-edit"></i></button>
															<button class="btn btn-default btn-danger" type="button"><i class="fa fa-trash"></i></button>
														</div>
													</td>
													<td>08-100-A</td>
													<td>Quinn Flynn</td>
													<td>Manila,Philippines</td>
													<td>09778711191</td>
													<td>NixonT@gmail.com</td>
													<td>2011/04/25</td>
												</tr>
												<tr>
													<td>
														<div class="btn-group  btn-group-xs" >
															<button class="btn btn-default btn-info" data-toggle="modal" data-target="#view_data_Modal" type="button"><i class="fa fa-list"></i></button>
															<button class="btn btn-default btn-warning" data-toggle="modal" data-target="#edit_data_Modal" type="button"><i class="fa fa-edit"></i></button>
															<button class="btn btn-default btn-danger" type="button"><i class="fa fa-trash"></i></button>
														</div>
													</td>
													<td>08-100-A</td>
													<td>Charde Marshall</td>
													<td>Manila,Philippines</td>
													<td>09778711191</td>
													<td>NixonT@gmail.com</td>
													<td>2011/04/25</td>
												</tr>
												<tr>
													<td>
														<div class="btn-group  btn-group-xs" >
															<button class="btn btn-default btn-info" data-toggle="modal" data-target="#view_data_Modal" type="button"><i class="fa fa-list"></i></button>
															<button class="btn btn-default btn-warning" data-toggle="modal" data-target="#edit_data_Modal" type="button"><i class="fa fa-edit"></i></button>
															<button class="btn btn-default btn-danger" type="button"><i class="fa fa-trash"></i></button>
														</div>
													</td>
													<td>08-100-A</td>
													<td>Haley Kennedy</td>
													<td>Manila,Philippines</td>
													<td>09778711191</td>
													<td>NixonT@gmail.com</td>
													<td>2011/04/25</td>
												</tr>
												<tr>
													<td>
														<div class="btn-group  btn-group-xs" >
															<button class="btn btn-default btn-info" data-toggle="modal" data-target="#view_data_Modal" type="button"><i class="fa fa-list"></i></button>
															<button class="btn btn-default btn-warning" data-toggle="modal" data-target="#edit_data_Modal" type="button"><i class="fa fa-edit"></i></button>
															<button class="btn btn-default btn-danger" type="button"><i class="fa fa-trash"></i></button>
														</div>
													</td>
													<td>08-100-A</td>
													<td>Tatyana Fitzpatrick</td>
													<td>Manila,Philippines</td>
													<td>09778711191</td>
													<td>NixonT@gmail.com</td>
													<td>2011/04/25</td>
												</tr>
												<tr>
													<td>
														<div class="btn-group  btn-group-xs" >
															<button class="btn btn-default btn-info" data-toggle="modal" data-target="#view_data_Modal" type="button"><i class="fa fa-list"></i></button>
															<button class="btn btn-default btn-warning" data-toggle="modal" data-target="#edit_data_Modal" type="button"><i class="fa fa-edit"></i></button>
															<button class="btn btn-default btn-danger" type="button"><i class="fa fa-trash"></i></button>
														</div>
													</td>
													<td>08-100-A</td>
													<td>Michael Silva</td>
													<td>Manila,Philippines</td>
													<td>09778711191</td>
													<td>NixonT@gmail.com</td>
													<td>2011/04/25</td>
												</tr>
												<tr>
													<td>
														<div class="btn-group  btn-group-xs" >
															<button class="btn btn-default btn-info" data-toggle="modal" data-target="#view_data_Modal" type="button"><i class="fa fa-list"></i></button>
															<button class="btn btn-default btn-warning" data-toggle="modal" data-target="#edit_data_Modal" type="button"><i class="fa fa-edit"></i></button>
															<button class="btn btn-default btn-danger" type="button"><i class="fa fa-trash"></i></button>
														</div>
													</td>
													<td>08-100-A</td>
													<td>Tiger Nixon</td>
													<td>Manila,Philippines</td>
													<td>09778711191</td>
													<td>NixonT@gmail.com</td>
													<td>2011/04/25</td>
												</tr>
												<tr>
													<td>
														<div class="btn-group  btn-group-xs" >
															<button class="btn btn-default btn-info" data-toggle="modal" data-target="#view_data_Modal" type="button"><i class="fa fa-list"></i></button>
															<button class="btn btn-default btn-warning" data-toggle="modal" data-target="#edit_data_Modal" type="button"><i class="fa fa-edit"></i></button>
															<button class="btn btn-default btn-danger" type="button"><i class="fa fa-trash"></i></button>
														</div>
													</td>
													<td>08-100-A</td>
													<td>Tiger Nixon</td>
													<td>Manila,Philippines</td>
													<td>09778711191</td>
													<td>NixonT@gmail.com</td>
													<td>2011/04/25</td>
												</tr>
												<tr>
													<td>
														<div class="btn-group  btn-group-xs" >
															<button class="btn btn-default btn-info" data-toggle="modal" data-target="#view_data_Modal" type="button"><i class="fa fa-list"></i></button>
															<button class="btn btn-default btn-warning" data-toggle="modal" data-target="#edit_data_Modal" type="button"><i class="fa fa-edit"></i></button>
															<button class="btn btn-default btn-danger" type="button"><i class="fa fa-trash"></i></button>
														</div>
													</td>
													<td>08-100-A</td>
													<td>Tiger Nixon</td>
													<td>Manila,Philippines</td>
													<td>09778711191</td>
													<td>NixonT@gmail.com</td>
													<td>2011/04/25</td>
												</tr>
												<tr>
													<td>
														<div class="btn-group  btn-group-xs" >
															<button class="btn btn-default btn-info" data-toggle="modal" data-target="#view_data_Modal" type="button"><i class="fa fa-list"></i></button>
															<button class="btn btn-default btn-warning" data-toggle="modal" data-target="#edit_data_Modal" type="button"><i class="fa fa-edit"></i></button>
															<button class="btn btn-default btn-danger" type="button"><i class="fa fa-trash"></i></button>
														</div>
													</td>
													<td>08-100-A</td>
													<td>Tiger Nixon</td>
													<td>Manila,Philippines</td>
													<td>09778711191</td>
													<td>NixonT@gmail.com</td>
													<td>2011/04/25</td>
												</tr>
												<tr>
													<td>
														<div class="btn-group  btn-group-xs" >
															<button class="btn btn-default btn-info" data-toggle="modal" data-target="#view_data_Modal" type="button"><i class="fa fa-list"></i></button>
															<button class="btn btn-default btn-warning" data-toggle="modal" data-target="#edit_data_Modal" type="button"><i class="fa fa-edit"></i></button>
															<button class="btn btn-default btn-danger" type="button"><i class="fa fa-trash"></i></button>
														</div>
													</td>
													<td>08-100-A</td>
													<td>Tiger Nixon</td>
													<td>Manila,Philippines</td>
													<td>09778711191</td>
													<td>NixonT@gmail.com</td>
													<td>2011/04/25</td>
												</tr>
												<tr>
													<td>
														<div class="btn-group  btn-group-xs" >
															<button class="btn btn-default btn-info" data-toggle="modal" data-target="#view_data_Modal" type="button"><i class="fa fa-list"></i></button>
															<button class="btn btn-default btn-warning" data-toggle="modal" data-target="#edit_data_Modal" type="button"><i class="fa fa-edit"></i></button>
															<button class="btn btn-default btn-danger" type="button"><i class="fa fa-trash"></i></button>
														</div>
													</td>
													<td>08-100-A</td>
													<td>Tiger Nixon</td>
													<td>Manila,Philippines</td>
													<td>09778711191</td>
													<td>NixonT@gmail.com</td>
													<td>2011/04/25</td>
												</tr>
												<tr>
													<td>
														<div class="btn-group  btn-group-xs" >
															<button class="btn btn-default btn-info" data-toggle="modal" data-target="#view_data_Modal" type="button"><i class="fa fa-list"></i></button>
															<button class="btn btn-default btn-warning" data-toggle="modal" data-target="#edit_data_Modal" type="button"><i class="fa fa-edit"></i></button>
															<button class="btn btn-default btn-danger" type="button"><i class="fa fa-trash"></i></button>
														</div>
													</td>
													<td>08-100-A</td>
													<td>Tiger Nixon</td>
													<td>Manila,Philippines</td>
													<td>09778711191</td>
													<td>NixonT@gmail.com</td>
													<td>2011/04/25</td>
												</tr>
												<tr>
													<td>
														<div class="btn-group  btn-group-xs" >
															<button class="btn btn-default btn-info" data-toggle="modal" data-target="#view_data_Modal" type="button"><i class="fa fa-list"></i></button>
															<button class="btn btn-default btn-warning" data-toggle="modal" data-target="#edit_data_Modal" type="button"><i class="fa fa-edit"></i></button>
															<button class="btn btn-default btn-danger" type="button"><i class="fa fa-trash"></i></button>
														</div>
													</td>
													<td>08-100-A</td>
													<td>Tiger Nixon</td>
													<td>Manila,Philippines</td>
													<td>09778711191</td>
													<td>NixonT@gmail.com</td>
													<td>2011/04/25</td>
												</tr>
												<tr>
													<td>
														<div class="btn-group  btn-group-xs" >
															<button class="btn btn-default btn-info" data-toggle="modal" data-target="#view_data_Modal" type="button"><i class="fa fa-list"></i></button>
															<button class="btn btn-default btn-warning" data-toggle="modal" data-target="#edit_data_Modal" type="button"><i class="fa fa-edit"></i></button>
															<button class="btn btn-default btn-danger" type="button"><i class="fa fa-trash"></i></button>
														</div>
													</td>
													<td>08-100-A</td>
													<td>Tiger Nixon</td>
													<td>Manila,Philippines</td>
													<td>09778711191</td>
													<td>NixonT@gmail.com</td>
													<td>2011/04/25</td>
												</tr>
												<tr>
													<td>
														<div class="btn-group  btn-group-xs" >
															<button class="btn btn-default btn-info" data-toggle="modal" data-target="#view_data_Modal" type="button"><i class="fa fa-list"></i></button>
															<button class="btn btn-default btn-warning" data-toggle="modal" data-target="#edit_data_Modal" type="button"><i class="fa fa-edit"></i></button>
															<button class="btn btn-default btn-danger" type="button"><i class="fa fa-trash"></i></button>
														</div>
													</td>
													<td>08-100-A</td>
													<td>Tiger Nixon</td>
													<td>Manila,Philippines</td>
													<td>09778711191</td>
													<td>NixonT@gmail.com</td>
													<td>2011/04/25</td>
												</tr>
												<tr>
													<td>
														<div class="btn-group  btn-group-xs" >
															<button class="btn btn-default btn-info" data-toggle="modal" data-target="#view_data_Modal" type="button"><i class="fa fa-list"></i></button>
															<button class="btn btn-default btn-warning" data-toggle="modal" data-target="#edit_data_Modal" type="button"><i class="fa fa-edit"></i></button>
															<button class="btn btn-default btn-danger" type="button"><i class="fa fa-trash"></i></button>
														</div>
													</td>
													<td>08-100-A</td>
													<td>Tiger Nixon</td>
													<td>Manila,Philippines</td>
													<td>09778711191</td>
													<td>NixonT@gmail.com</td>
													<td>2011/04/25</td>
												</tr>
												<tr>
													<td>
														<div class="btn-group  btn-group-xs" >
															<button class="btn btn-default btn-info" data-toggle="modal" data-target="#view_data_Modal" type="button"><i class="fa fa-list"></i></button>
															<button class="btn btn-default btn-warning" data-toggle="modal" data-target="#edit_data_Modal" type="button"><i class="fa fa-edit"></i></button>
															<button class="btn btn-default btn-danger" type="button"><i class="fa fa-trash"></i></button>
														</div>
													</td>
													<td>08-100-A</td>
													<td>Tiger Nixon</td>
													<td>Manila,Philippines</td>
													<td>09778711191</td>
													<td>NixonT@gmail.com</td>
													<td>2011/04/25</td>
												</tr>
												<tr>
													<td>
														<div class="btn-group  btn-group-xs" >
															<button class="btn btn-default btn-info" data-toggle="modal" data-target="#view_data_Modal" type="button"><i class="fa fa-list"></i></button>
															<button class="btn btn-default btn-warning" data-toggle="modal" data-target="#edit_data_Modal" type="button"><i class="fa fa-edit"></i></button>
															<button class="btn btn-default btn-danger" type="button"><i class="fa fa-trash"></i></button>
														</div>
													</td>
													<td>08-100-A</td>
													<td>Tiger Nixon</td>
													<td>Manila,Philippines</td>
													<td>09778711191</td>
													<td>NixonT@gmail.com</td>
													<td>2011/04/25</td>
												</tr>
												<tr>
													<td>
														<div class="btn-group  btn-group-xs" >
															<button class="btn btn-default btn-info" data-toggle="modal" data-target="#view_data_Modal" type="button"><i class="fa fa-list"></i></button>
															<button class="btn btn-default btn-warning" data-toggle="modal" data-target="#edit_data_Modal" type="button"><i class="fa fa-edit"></i></button>
															<button class="btn btn-default btn-danger" type="button"><i class="fa fa-trash"></i></button>
														</div>
													</td>
													<td>08-100-A</td>
													<td>Tiger Nixon</td>
													<td>Manila,Philippines</td>
													<td>09778711191</td>
													<td>NixonT@gmail.com</td>
													<td>2011/04/25</td>
												</tr>
												<tr>
													<td>
														<div class="btn-group  btn-group-xs" >
															<button class="btn btn-default btn-info" data-toggle="modal" data-target="#view_data_Modal" type="button"><i class="fa fa-list"></i></button>
															<button class="btn btn-default btn-warning" data-toggle="modal" data-target="#edit_data_Modal" type="button"><i class="fa fa-edit"></i></button>
															<button class="btn btn-default btn-danger" type="button"><i class="fa fa-trash"></i></button>
														</div>
													</td>
													<td>08-100-A</td>
													<td>Tiger Nixon</td>
													<td>Manila,Philippines</td>
													<td>09778711191</td>
													<td>NixonT@gmail.com</td>
													<td>2011/04/25</td>
												</tr>
												<tr>
													<td>
														<div class="btn-group  btn-group-xs" >
															<button class="btn btn-default btn-info" data-toggle="modal" data-target="#view_data_Modal" type="button"><i class="fa fa-list"></i></button>
															<button class="btn btn-default btn-warning" data-toggle="modal" data-target="#edit_data_Modal" type="button"><i class="fa fa-edit"></i></button>
															<button class="btn btn-default btn-danger" type="button"><i class="fa fa-trash"></i></button>
														</div>
													</td>
													<td>08-100-A</td>
													<td>Tiger Nixon</td>
													<td>Manila,Philippines</td>
													<td>09778711191</td>
													<td>NixonT@gmail.com</td>
													<td>2011/04/25</td>
												</tr>
												<tr>
													<td>
														<div class="btn-group  btn-group-xs" >
															<button class="btn btn-default btn-info" data-toggle="modal" data-target="#view_data_Modal" type="button"><i class="fa fa-list"></i></button>
															<button class="btn btn-default btn-warning" data-toggle="modal" data-target="#edit_data_Modal" type="button"><i class="fa fa-edit"></i></button>
															<button class="btn btn-default btn-danger" type="button"><i class="fa fa-trash"></i></button>
														</div>
													</td>
													<td>08-100-A</td>
													<td>Tiger Nixon</td>
													<td>Manila,Philippines</td>
													<td>09778711191</td>
													<td>NixonT@gmail.com</td>
													<td>2011/04/25</td>
												</tr>
												<tr>
													<td>
														<div class="btn-group  btn-group-xs" >
															<button class="btn btn-default btn-info" data-toggle="modal" data-target="#view_data_Modal" type="button"><i class="fa fa-list"></i></button>
															<button class="btn btn-default btn-warning" data-toggle="modal" data-target="#edit_data_Modal" type="button"><i class="fa fa-edit"></i></button>
															<button class="btn btn-default btn-danger" type="button"><i class="fa fa-trash"></i></button>
														</div>
													</td>
													<td>08-100-A</td>
													<td>Tiger Nixon</td>
													<td>Manila,Philippines</td>
													<td>09778711191</td>
													<td>NixonT@gmail.com</td>
													<td>2011/04/25</td>
												</tr>
												<tr>
													<td>
														<div class="btn-group  btn-group-xs" >
															<button class="btn btn-default btn-info" data-toggle="modal" data-target="#view_data_Modal" type="button"><i class="fa fa-list"></i></button>
															<button class="btn btn-default btn-warning" data-toggle="modal" data-target="#edit_data_Modal" type="button"><i class="fa fa-edit"></i></button>
															<button class="btn btn-default btn-danger" type="button"><i class="fa fa-trash"></i></button>
														</div>
													</td>
													<td>08-100-A</td>
													<td>Tiger Nixon</td>
													<td>Manila,Philippines</td>
													<td>09778711191</td>
													<td>NixonT@gmail.com</td>
													<td>2011/04/25</td>
												</tr>
												<tr>
													<td>
														<div class="btn-group  btn-group-xs" >
															<button class="btn btn-default btn-info" data-toggle="modal" data-target="#view_data_Modal" type="button"><i class="fa fa-list"></i></button>
															<button class="btn btn-default btn-warning" data-toggle="modal" data-target="#edit_data_Modal" type="button"><i class="fa fa-edit"></i></button>
															<button class="btn btn-default btn-danger" type="button"><i class="fa fa-trash"></i></button>
														</div>
													</td>
													<td>08-100-A</td>
													<td>Tiger Nixon</td>
													<td>Manila,Philippines</td>
													<td>09778711191</td>
													<td>NixonT@gmail.com</td>
													<td>2011/04/25</td>
												</tr>
												<tr>
													<td>
														<div class="btn-group  btn-group-xs" >
															<button class="btn btn-default btn-info" data-toggle="modal" data-target="#view_data_Modal" type="button"><i class="fa fa-list"></i></button>
															<button class="btn btn-default btn-warning" data-toggle="modal" data-target="#edit_data_Modal" type="button"><i class="fa fa-edit"></i></button>
															<button class="btn btn-default btn-danger" type="button"><i class="fa fa-trash"></i></button>
														</div>
													</td>
													<td>08-100-A</td>
													<td>Tiger Nixon</td>
													<td>Manila,Philippines</td>
													<td>09778711191</td>
													<td>NixonT@gmail.com</td>
													<td>2011/04/25</td>
												</tr>
												<tr>
													<td>
														<div class="btn-group  btn-group-xs" >
															<button class="btn btn-default btn-info" data-toggle="modal" data-target="#view_data_Modal" type="button"><i class="fa fa-list"></i></button>
															<button class="btn btn-default btn-warning" data-toggle="modal" data-target="#edit_data_Modal" type="button"><i class="fa fa-edit"></i></button>
															<button class="btn btn-default btn-danger" type="button"><i class="fa fa-trash"></i></button>
														</div>
													</td>
													<td>08-100-A</td>
													<td>Tiger Nixon</td>
													<td>Manila,Philippines</td>
													<td>09778711191</td>
													<td>NixonT@gmail.com</td>
													<td>2011/04/25</td>
												</tr>
												<tr>
													<td>
														<div class="btn-group  btn-group-xs" >
															<button class="btn btn-default btn-info" type="button"><i class="fa fa-list"></i></button>
															<button class="btn btn-default btn-warning" type="button"><i class="fa fa-edit"></i></button>
															<button class="btn btn-default btn-danger" type="button"><i class="fa fa-trash"></i></button>
														</div>
													</td>
													<td>08-100-A</td>
													<td>Tiger Nixon</td>
													<td>Manila,Philippines</td>
													<td>09778711191</td>
													<td>NixonT@gmail.com</td>
													<td>2011/04/25</td>
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
											<th scope="row">Address</th>
											<td>Taytay, Rizal, Philippines</td>
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
											<td>jaywelj@gmail.com</td>
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
								<label>Email</label>
								<input type="email" name="name" id="name" value="jaywelj@gmail.com" class="form-control" />
								<br />
								<div class="form-group">
									<label class="control-label col-md-3 col-sm-3 col-xs-12">City Address</label>
									<div class="col-md-6 col-sm-6 col-xs-6">
										<select class="select2_single form-control" tabindex="-1">
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
										<select class="select2_single form-control" tabindex="-1">
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