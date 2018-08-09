<?php 
include("connectionString.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Dashboard | OCPS</title>

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
				<!-- top tiles -->
				<?php 
				include("connectionString.php");  
				$queryStudentAccount = "SELECT COUNT(*) AS NumberOfStudentAccounts FROM tbl_studentaccount";
				$queryStudentAccount6MonthsAgo = "SELECT COUNT(*) as NumberOfStudentAccounts6MonthsAgo FROM tbl_studentaccount where studentDateAccountCreated > DATE_SUB(now(), INTERVAL 6 MONTH)";
				$resultStudentAccount = mysqli_query($connect, $queryStudentAccount); 
				$resultStudentAccount6MonthsAgo = mysqli_query($connect, $queryStudentAccount6MonthsAgo);
				while($row = mysqli_fetch_array($resultStudentAccount))  
				{ 
					$CurrentNumberOfStudentAccounts = $row['NumberOfStudentAccounts'];
					while ($res =  mysqli_fetch_array($resultStudentAccount6MonthsAgo)) {
						$NumberOfStudentAccounts6MonthsAgo = $res['NumberOfStudentAccounts6MonthsAgo'];

						$NewNumberOfStudentAccounts = $CurrentNumberOfStudentAccounts - $NumberOfStudentAccounts6MonthsAgo;
						if ($CurrentNumberOfStudentAccounts = $NumberOfStudentAccounts6MonthsAgo || $CurrentNumberOfStudentAccounts == 0) {
							$PercentageOfIncreaseOfStudentAccounts = 0;
						}
						else{
							$PercentageOfIncreaseOfStudentAccounts1 = $NewNumberOfStudentAccounts / $CurrentNumberOfStudentAccounts;
							$PercentageOfIncreaseOfStudentAccounts = $PercentageOfIncreaseOfStudentAccounts1 * 100;
							$PercentageOfIncreaseOfStudentAccounts  = round($PercentageOfIncreaseOfStudentAccounts,2);
						}
					}

					?>
					<div class="row tile_count">
						<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
							<span class="count_top"><i class="fa fa-user"></i>Total Student Accounts</span>
							<div class="count"><?php echo $row['NumberOfStudentAccounts'] ; } ?></div> 
							<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i><?php echo $PercentageOfIncreaseOfStudentAccounts; ?> </i> From 6 months ago</span>
						</div>
						<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
							<span class="count_top"><i class="fa fa-clock-o"></i> Average Time</span>
							<div class="count">123.50</div>
							<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
						</div>
						<?php
						$queryStudentAccountMale = "SELECT COUNT(*) AS NumberOfStudentMale FROM tbl_studentaccount INNER JOIN tbl_personalinfo ON tbl_studentaccount.studentNumber = tbl_personalinfo.studentNumber WHERE sex = 'M'";
						$queryStudentAccountMale6MonthsAgo = "SELECT COUNT(*) AS NumberOfStudentMale6MonthsAgo FROM tbl_studentaccount INNER JOIN tbl_personalinfo ON tbl_studentaccount.studentNumber = tbl_personalinfo.studentNumber WHERE sex = 'M' AND studentDateAccountCreated > DATE_SUB(now(), INTERVAL 6 MONTH)";
						$resultStudentMale = mysqli_query($connect, $queryStudentAccountMale);
						$resultStudentMale6MonthsAgo = mysqli_query($connect, $queryStudentAccountMale6MonthsAgo);
						while ($row = mysqli_fetch_array($resultStudentMale)) {
							$CurrentNumberOfStudentMale = $row['NumberOfStudentMale'];
							
							while ($res =  mysqli_fetch_array($resultStudentMale6MonthsAgo)) {
								$NumberOfStudentMale6MonthsAgo = $res['NumberOfStudentMale6MonthsAgo'];

								$NewNumberOfStudentMale = $CurrentNumberOfStudentMale - $NumberOfStudentMale6MonthsAgo;
								if ($CurrentNumberOfStudentMale == $NumberOfStudentMale6MonthsAgo || $CurrentNumberOfStudentMale == 0) {
									$PercentageOfIncreaseOfStudentMale = 0;
								}
								else{
									$PercentageOfIncreaseOfStudentMale1 = $NewNumberOfStudentMale / $CurrentNumberOfStudentMale;
									$PercentageOfIncreaseOfStudentMale = $PercentageOfIncreaseOfStudentMale1 * 100;
									$PercentageOfIncreaseOfStudentMale = round($PercentageOfIncreaseOfStudentMale,2);
								}
							}

							?>
							<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
								<span class="count_top"><i class="fa fa-user"></i> Total Males</span>
								<div class="count"><?php  echo $row['NumberOfStudentMale']; } ?></div>
								<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i><?php echo $PercentageOfIncreaseOfStudentMale; ?> </i> From 6 months ago</span>
							</div>
							<?php
							$queryStudentAccountFemale = "SELECT COUNT(*) AS NumberOfStudentFemale FROM tbl_studentaccount INNER JOIN tbl_personalinfo ON tbl_studentaccount.studentNumber = tbl_personalinfo.studentNumber WHERE sex = 'F'";
							$queryStudentAccountFemale6MonthsAgo = "SELECT COUNT(*) AS NumberOfStudentFemale6MonthsAgo FROM tbl_studentaccount INNER JOIN tbl_personalinfo ON tbl_studentaccount.studentNumber = tbl_personalinfo.studentNumber WHERE sex = 'F' AND studentDateAccountCreated > DATE_SUB(now(), INTERVAL 6 MONTH)";
							$resultStudentFemale = mysqli_query($connect, $queryStudentAccountFemale);
							$resultStudentFemale6MonthsAgo = mysqli_query($connect, $queryStudentAccountFemale6MonthsAgo);
							while ($row = mysqli_fetch_array($resultStudentFemale)) {
								$CurrentNumberOfStudentFemale = $row['NumberOfStudentFemale'];

								

								while ($res =  mysqli_fetch_array($resultStudentFemale6MonthsAgo)) {
									$NumberOfStudentFemale6MonthsAgo = $res['NumberOfStudentFemale6MonthsAgo'];

									$NewNumberOfStudentFemale = $CurrentNumberOfStudentFemale - $NumberOfStudentFemale6MonthsAgo;
									if ($CurrentNumberOfStudentFemale == $NumberOfStudentFemale6MonthsAgo || $CurrentNumberOfStudentFemale == 0) {
										$PercentageOfIncreaseOfStudentFemale = 0;
									}
									else{
										$PercentageOfIncreaseOfStudentFemale1 = $NewNumberOfStudentFemale / $CurrentNumberOfStudentFemale;
										$PercentageOfIncreaseOfStudentFemale = $PercentageOfIncreaseOfStudentFemale1 * 100;
										$PercentageOfIncreaseOfStudentFemale  = round($PercentageOfIncreaseOfStudentFemale,2);
									}
								}
								?>
								<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
									<span class="count_top"><i class="fa fa-user"></i> Total Females</span>
									<div class="count"><?php echo $row['NumberOfStudentFemale']; } ?></div>
									<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i><?php echo $PercentageOfIncreaseOfStudentFemale; ?>% </i> From 6 months ago</span>
								</div>
								<?php
								$queryStudentAccountNotes = "SELECT COUNT(*) AS NumberOfStudentNotes FROM tbl_significantnotes";
								$queryStudentAccountNotes6MonthsAgo = "SELECT COUNT(*) AS NumberOfStudentNotes6MonthsAgo FROM tbl_significantnotes WHERE noteDate > DATE_SUB(now(), INTERVAL 6 MONTH) ";

								$resultStudentNotes = mysqli_query($connect, $queryStudentAccountNotes);
								$resultStudentNotes6MonthsAgo = mysqli_query($connect, $queryStudentAccountNotes6MonthsAgo);
								while ($row = mysqli_fetch_array($resultStudentNotes)) {
									$CurrentNumberOfStudentNotes = $row['NumberOfStudentNotes'];
									//7
									while ($res =  mysqli_fetch_array($resultStudentNotes6MonthsAgo)) {
										$NumberOfStudentNotes6MonthsAgo = $res['NumberOfStudentNotes6MonthsAgo'];
										//3
										$NewNumberOfStudentNotes = $CurrentNumberOfStudentNotes - $NumberOfStudentNotes6MonthsAgo;
										//4
										if ($CurrentNumberOfStudentNotes == $NumberOfStudentNotes6MonthsAgo || $CurrentNumberOfStudentNotes == 0) {
											$PercentageOfIncreaseOfStudentNotes = 0;
										}
										else{
											$PercentageOfIncreaseOfStudentNotes1 = $NewNumberOfStudentNotes / $CurrentNumberOfStudentNotes;
											$PercentageOfIncreaseOfStudentNotes = $PercentageOfIncreaseOfStudentNotes1 * 100;
											$PercentageOfIncreaseOfStudentNotes  = round($PercentageOfIncreaseOfStudentNotes,2);
										}
									}
									?>
									<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
										<span class="count_top"><i class="fa fa-sticky-note"></i> Total Notes Recorded</span>
										<div class="count"><?php echo $row['NumberOfStudentNotes'];  } ?></div>
										<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i><?php echo $PercentageOfIncreaseOfStudentNotes; ?>% </i> From 6 months ago</span>
									</div>
									<?php
									$queryStudentAccountPrograms = "SELECT COUNT(*) AS NumberOfRecommendedPrograms FROM tbl_recommendedprogram";

									$resultStudentPrograms = mysqli_query($connect, $queryStudentAccountPrograms);
									while ($row = mysqli_fetch_array($resultStudentPrograms)) 
									{

										$CurrentNumberOfStudentNotes = $row['NumberOfRecommendedPrograms'];
										?>
										<div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
											<span class="count_top"><i class="fa fa-user"></i> Total Programs Recorded</span>
											<div class="count"><?php  echo $row['NumberOfRecommendedPrograms']; } ?></div>
											<!-- <span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>34% </i> From last Week</span> -->
										</div>
									</div>
									<!-- /top tiles -->

									<div class="row">
										<div class="col-md-12 col-sm-12 col-xs-12">
											<div class="dashboard_graph">

												<div class="row x_title">
													<div class="col-md-6">
														<h3>GCTS Activities <small> Testing/Guidance</small></h3>
													</div>
													<div class="col-md-6">
														<div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
															<i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
															<span>December 30, 2014 - January 28, 2015</span> <b class="caret"></b>
														</div>
													</div>
												</div>

												<div class="col-md-9 col-sm-9 col-xs-12">
													<div id="chart_plot_01" class="demo-placeholder"></div>
												</div>
												<div class="col-md-3 col-sm-3 col-xs-12 bg-white">
													<div class="x_title">
														<h2>Religions</h2>
														<div class="clearfix"></div>
													</div>

													<div class="col-md-12 col-sm-12 col-xs-6">
														<div>
															<p>Catholic</p>
															<div class="">
																<div class="progress progress_sm" style="width: 76%;">
																	<div class="progress-bar bg-green" role="progressbar" data-transitiongoal="80"></div>
																</div>
															</div>
														</div>
														<div>
															<p>Born-Again Christian</p>
															<div class="">
																<div class="progress progress_sm" style="width: 76%;">
																	<div class="progress-bar bg-green" role="progressbar" data-transitiongoal="60"></div>
																</div>
															</div>
														</div>
													</div>
													<div class="col-md-12 col-sm-12 col-xs-6">
														<div>
															<p>Muslim</p>
															<div class="">
																<div class="progress progress_sm" style="width: 76%;">
																	<div class="progress-bar bg-green" role="progressbar" data-transitiongoal="40"></div>
																</div>
															</div>
														</div>
														<div>
															<p>Others</p>
															<div class="">
																<div class="progress progress_sm" style="width: 76%;">
																	<div class="progress-bar bg-green" role="progressbar" data-transitiongoal="50"></div>
																</div>
															</div>
														</div>
													</div>

												</div>

												<div class="clearfix"></div>
											</div>
										</div>

									</div>
									<br />

									<div class="row">


										<div class="col-md-4 col-sm-4 col-xs-12">
											<div class="x_panel tile fixed_height_320">
												<div class="x_title">
													<h2>Bachellor's Degree Population</h2>
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
													<h4>No of Records</h4>
													<div class="widget_summary">
														<div class="w_left w_25">
															<span>1st Year</span>
														</div>
														<div class="w_center w_55">
															<div class="progress">
																<div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 66%;">
																	<span class="sr-only">60% Complete</span>
																</div>
															</div>
														</div>
														<div class="w_right w_20">
															<span>3952</span>
														</div>
														<div class="clearfix"></div>
													</div>

													<div class="widget_summary">
														<div class="w_left w_25">
															<span>2nd Year</span>
														</div>
														<div class="w_center w_55">
															<div class="progress">
																<div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 45%;">
																	<span class="sr-only">60% Complete</span>
																</div>
															</div>
														</div>
														<div class="w_right w_20">
															<span>1926</span>
														</div>
														<div class="clearfix"></div>
													</div>
													<div class="widget_summary">
														<div class="w_left w_25">
															<span>3rd Year</span>
														</div>
														<div class="w_center w_55">
															<div class="progress">
																<div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 25%;">
																	<span class="sr-only">60% Complete</span>
																</div>
															</div>
														</div>
														<div class="w_right w_20">
															<span>802</span>
														</div>
														<div class="clearfix"></div>
													</div>
													<div class="widget_summary">
														<div class="w_left w_25">
															<span>4th Year</span>
														</div>
														<div class="w_center w_55">
															<div class="progress">
																<div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 5%;">
																	<span class="sr-only">60% Complete</span>
																</div>
															</div>
														</div>
														<div class="w_right w_20">
															<span>509</span>
														</div>
														<div class="clearfix"></div>
													</div>
													<div class="widget_summary">
														<div class="w_left w_25">
															<span>5th Year</span>
														</div>
														<div class="w_center w_55">
															<div class="progress">
																<div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
																	<span class="sr-only">60% Complete</span>
																</div>
															</div>
														</div>
														<div class="w_right w_20">
															<span>304</span>
														</div>
														<div class="clearfix"></div>
													</div>

												</div>
											</div>
										</div>

										<div class="col-md-4 col-sm-4 col-xs-12">
											<div class="x_panel tile fixed_height_320 overflow_hidden">
												<div class="x_title">
													<h2>Sexuality</h2>
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
													<table class="" style="width:100%">
														<tr>
															<th style="width:37%;">
																<p>Top 5</p>
															</th>
															<th>
																<div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
																	<p class="">Device</p>
																</div>
																<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
																	<p class="">Progress</p>
																</div>
															</th>
														</tr>
														<tr>
															<td>
																<canvas class="canvasDoughnut" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
															</td>
															<td>
																<table class="tile_info">
																	<tr>
																		<td>
																			<p><i class="fa fa-square blue"></i>Heterosexual</p>
																		</td>
																		<td>25%</td>
																	</tr>
																	<tr>
																		<td>
																			<p><i class="fa fa-square green"></i>Homosexual</p>
																		</td>
																		<td>10%</td>
																	</tr>
																	<tr>
																		<td>
																			<p><i class="fa fa-square purple"></i>Bisexual</p>
																		</td>
																		<td>20%</td>
																	</tr>
																	<tr>
																		<td>
																			<p><i class="fa fa-square aero"></i>Gender-Queer</p>
																		</td>
																		<td>15%</td>
																	</tr>
																	<tr>
																		<td>
																			<p><i class="fa fa-square red"></i>Others </p>
																		</td>
																		<td>30%</td>
																	</tr>
																</table>
															</td>
														</tr>
													</table>
												</div>
											</div>
										</div>


										<div class="col-md-4 col-sm-4 col-xs-12">
											<div class="x_panel tile fixed_height_320">
												<div class="x_title">
													<h2>Quick Settings</h2>
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
													<div class="dashboard-widget-content">
														<ul class="quick-list">
															<li><i class="fa fa-calendar-o"></i><a href="#">Settings</a>
															</li>
															<li><i class="fa fa-bars"></i><a href="#">Subscription</a>
															</li>
															<li><i class="fa fa-bar-chart"></i><a href="#">Auto Renewal</a> </li>
															<li><i class="fa fa-line-chart"></i><a href="#">Achievements</a>
															</li>
															<li><i class="fa fa-bar-chart"></i><a href="#">Auto Renewal</a> </li>
															<li><i class="fa fa-line-chart"></i><a href="#">Achievements</a>
															</li>
															<li><i class="fa fa-area-chart"></i><a href="#">Logout</a>
															</li>
														</ul>

														<div class="sidebar-widget">
															<h4>Profile Completion</h4>
															<canvas width="150" height="80" id="chart_gauge_01" class="" style="width: 160px; height: 100px;"></canvas>
															<div class="goal-wrapper">
																<span id="gauge-text" class="gauge-value pull-left">0</span>
																<span class="gauge-value pull-left">%</span>
																<span id="goal-text" class="goal-value pull-right">100%</span>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

									</div>


									<div class="row">
										<div class="col-md-4 col-sm-4 col-xs-12">
											<div class="x_panel">
												<div class="x_title">
													<h2>Recent Activities <small>Sessions</small></h2>
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
													<div class="dashboard-widget-content">

														<ul class="list-unstyled timeline widget">
															<li>
																<div class="block">
																	<div class="block_content">
																		<h2 class="title">
																			<a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
																		</h2>
																		<div class="byline">
																			<span>13 hours ago</span> by <a>Jane Smith</a>
																		</div>
																		<p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
																		</p>
																	</div>
																</div>
															</li>
															<li>
																<div class="block">
																	<div class="block_content">
																		<h2 class="title">
																			<a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
																		</h2>
																		<div class="byline">
																			<span>13 hours ago</span> by <a>Jane Smith</a>
																		</div>
																		<p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
																		</p>
																	</div>
																</div>
															</li>
															<li>
																<div class="block">
																	<div class="block_content">
																		<h2 class="title">
																			<a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
																		</h2>
																		<div class="byline">
																			<span>13 hours ago</span> by <a>Jane Smith</a>
																		</div>
																		<p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
																		</p>
																	</div>
																</div>
															</li>
															<li>
																<div class="block">
																	<div class="block_content">
																		<h2 class="title">
																			<a>Who Needs Sundance When You’ve Got&nbsp;Crowdfunding?</a>
																		</h2>
																		<div class="byline">
																			<span>13 hours ago</span> by <a>Jane Smith</a>
																		</div>
																		<p class="excerpt">Film festivals used to be do-or-die moments for movie makers. They were where you met the producers that could fund your project, and if the buyers liked your flick, they’d pay to Fast-forward and… <a>Read&nbsp;More</a>
																		</p>
																	</div>
																</div>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>


										<div class="col-md-8 col-sm-8 col-xs-12">



											<div class="row">

												<div class="col-md-12 col-sm-12 col-xs-12">
													<div class="x_panel">
														<div class="x_title">
															<h2>Visitors location <small>geo-presentation</small></h2>
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
															<div class="dashboard-widget-content">
																<div class="col-md-4 hidden-small">
																	<h2 class="line_30">125.7k Views from 60 countries</h2>

																	<table class="countries_list">
																		<tbody>
																			<tr>
																				<td>United States</td>
																				<td class="fs15 fw700 text-right">33%</td>
																			</tr>
																			<tr>
																				<td>France</td>
																				<td class="fs15 fw700 text-right">27%</td>
																			</tr>
																			<tr>
																				<td>Germany</td>
																				<td class="fs15 fw700 text-right">16%</td>
																			</tr>
																			<tr>
																				<td>Spain</td>
																				<td class="fs15 fw700 text-right">11%</td>
																			</tr>
																			<tr>
																				<td>Britain</td>
																				<td class="fs15 fw700 text-right">10%</td>
																			</tr>
																		</tbody>
																	</table>
																</div>
																<div id="world-map-gdp" class="col-md-8 col-sm-12 col-xs-12" style="height:230px;"></div>
															</div>
														</div>
													</div>
												</div>

											</div>
											<div class="row">


												<!-- Start to do list -->
												<div class="col-md-6 col-sm-6 col-xs-12">
													<div class="x_panel">
														<div class="x_title">
															<h2>To Do List <small>Sample tasks</small></h2>
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

															<div class="">
																<ul class="to_do">
																	<li>
																		<p>
																			<input type="checkbox" class="flat"> Schedule meeting with new client </p>
																		</li>
																		<li>
																			<p>
																				<input type="checkbox" class="flat"> Create email address for new intern</p>
																			</li>
																			<li>
																				<p>
																					<input type="checkbox" class="flat"> Have IT fix the network printer</p>
																				</li>
																				<li>
																					<p>
																						<input type="checkbox" class="flat"> Copy backups to offsite location</p>
																					</li>
																					<li>
																						<p>
																							<input type="checkbox" class="flat"> Food truck fixie locavors mcsweeney</p>
																						</li>
																						<li>
																							<p>
																								<input type="checkbox" class="flat"> Food truck fixie locavors mcsweeney</p>
																							</li>
																							<li>
																								<p>
																									<input type="checkbox" class="flat"> Create email address for new intern</p>
																								</li>
																								<li>
																									<p>
																										<input type="checkbox" class="flat"> Have IT fix the network printer</p>
																									</li>
																									<li>
																										<p>
																											<input type="checkbox" class="flat"> Copy backups to offsite location</p>
																										</li>
																									</ul>
																								</div>
																							</div>
																						</div>
																					</div>
																					<!-- End to do list -->

																					<!-- start of weather widget -->
																					<div class="col-md-6 col-sm-6 col-xs-12">
																						<div class="x_panel">
																							<div class="x_title">
																								<h2>Daily active users <small>Sessions</small></h2>
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
																										<div class="temperature"><b>Monday</b>, 07:30 AM
																											<span>F</span>
																											<span><b>C</b></span>
																										</div>
																									</div>
																								</div>
																								<div class="row">
																									<div class="col-sm-4">
																										<div class="weather-icon">
																											<canvas height="84" width="84" id="partly-cloudy-day"></canvas>
																										</div>
																									</div>
																									<div class="col-sm-8">
																										<div class="weather-text">
																											<h2>Texas <br><i>Partly Cloudy Day</i></h2>
																										</div>
																									</div>
																								</div>
																								<div class="col-sm-12">
																									<div class="weather-text pull-right">
																										<h3 class="degrees">23</h3>
																									</div>
																								</div>

																								<div class="clearfix"></div>

																								<div class="row weather-days">
																									<div class="col-sm-2">
																										<div class="daily-weather">
																											<h2 class="day">Mon</h2>
																											<h3 class="degrees">25</h3>
																											<canvas id="clear-day" width="32" height="32"></canvas>
																											<h5>15 <i>km/h</i></h5>
																										</div>
																									</div>
																									<div class="col-sm-2">
																										<div class="daily-weather">
																											<h2 class="day">Tue</h2>
																											<h3 class="degrees">25</h3>
																											<canvas height="32" width="32" id="rain"></canvas>
																											<h5>12 <i>km/h</i></h5>
																										</div>
																									</div>
																									<div class="col-sm-2">
																										<div class="daily-weather">
																											<h2 class="day">Wed</h2>
																											<h3 class="degrees">27</h3>
																											<canvas height="32" width="32" id="snow"></canvas>
																											<h5>14 <i>km/h</i></h5>
																										</div>
																									</div>
																									<div class="col-sm-2">
																										<div class="daily-weather">
																											<h2 class="day">Thu</h2>
																											<h3 class="degrees">28</h3>
																											<canvas height="32" width="32" id="sleet"></canvas>
																											<h5>15 <i>km/h</i></h5>
																										</div>
																									</div>
																									<div class="col-sm-2">
																										<div class="daily-weather">
																											<h2 class="day">Fri</h2>
																											<h3 class="degrees">28</h3>
																											<canvas height="32" width="32" id="wind"></canvas>
																											<h5>11 <i>km/h</i></h5>
																										</div>
																									</div>
																									<div class="col-sm-2">
																										<div class="daily-weather">
																											<h2 class="day">Sat</h2>
																											<h3 class="degrees">26</h3>
																											<canvas height="32" width="32" id="cloudy"></canvas>
																											<h5>10 <i>km/h</i></h5>
																										</div>
																									</div>
																									<div class="clearfix"></div>
																								</div>
																							</div>
																						</div>

																					</div>
																					<!-- end of weather widget -->
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
															<!-- Chart.js -->
															<script src="../vendors/Chart.js/dist/Chart.min.js"></script>
															<!-- gauge.js -->
															<script src="../vendors/gauge.js/dist/gauge.min.js"></script>
															<!-- bootstrap-progressbar -->
															<script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
															<!-- iCheck -->
															<script src="../vendors/iCheck/icheck.min.js"></script>
															<!-- Skycons -->
															<script src="../vendors/skycons/skycons.js"></script>
															<!-- Flot -->
															<script src="../vendors/Flot/jquery.flot.js"></script>
															<script src="../vendors/Flot/jquery.flot.pie.js"></script>
															<script src="../vendors/Flot/jquery.flot.time.js"></script>
															<script src="../vendors/Flot/jquery.flot.stack.js"></script>
															<script src="../vendors/Flot/jquery.flot.resize.js"></script>
															<!-- Flot plugins -->
															<script src="../vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
															<script src="../vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
															<script src="../vendors/flot.curvedlines/curvedLines.js"></script>
															<!-- DateJS -->
															<script src="../vendors/DateJS/build/date.js"></script>
															<!-- JQVMap -->
															<script src="../vendors/jqvmap/dist/jquery.vmap.js"></script>
															<script src="../vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
															<script src="../vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
															<!-- bootstrap-daterangepicker -->
															<script src="../vendors/moment/min/moment.min.js"></script>
															<script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

															<!-- Custom Theme Scripts -->
															<script src="../build/js/custom.min.js"></script>

														</body>
														</html>

