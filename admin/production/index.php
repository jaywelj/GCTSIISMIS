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

	<link rel="shortcut icon" href="assets/img/GCTS LOGO1.png">
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
							<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i><?php echo $PercentageOfIncreaseOfStudentAccounts; ?>% </i> From 6 months ago</span>
						</div>
						<!-- <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
							<span class="count_top"><i class="fa fa-clock-o"></i> Average Time</span>
							<div class="count">123.50</div>
							<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i>3% </i> From last Week</span>
						</div> -->
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
								<span class="count_bottom"><i class="green"><i class="fa fa-sort-asc"></i><?php echo $PercentageOfIncreaseOfStudentMale; ?>% </i> From 6 months ago</span>
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
														<h3>OCPS <small> Account Creation Chart</small></h3>
													</div>
													<?php 
													$queryStudentAccountLatestDate = "SELECT * FROM tbl_studentaccount ORDER BY studentDateAccountCreated DESC LIMIT 1";


													$resultStudentAccountLatestDate = mysqli_query($connect, $queryStudentAccountLatestDate);
													while ($row = mysqli_fetch_array($resultStudentAccountLatestDate)) 
													{
														$LatestStudentAccount = $row['studentDateAccountCreated'];
														$LatestStudentAccount = date("F j, Y",strtotime($LatestStudentAccount));
													}

													$queryStudentAccountOldestDate = "SELECT * FROM tbl_studentaccount ORDER BY studentDateAccountCreated ASC LIMIT 1";

													$resultStudentAccountOldestDate = mysqli_query($connect, $queryStudentAccountOldestDate);
													while ($row = mysqli_fetch_array($resultStudentAccountOldestDate)) 
													{
														$OldestStudentAccount = $row['studentDateAccountCreated'];
														$OldestStudentAccount = date("F j, Y",strtotime($OldestStudentAccount));
													}

													?>
													<div class="col-md-6">
														<div id="reportrange" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
															<i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
															<span><?php echo $OldestStudentAccount;  ?> - <?php echo $LatestStudentAccount;  ?></span> <b class="caret"></b>
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
														<?php 
														$queryStudentReligion = "SELECT religion, count(*) as numberofoccurancesreligion, sum(100) / percent as percentage from tbl_personalinfo cross join (select count(*) as percent from tbl_personalinfo) x group by 1 ORDER BY numberofoccurancesreligion DESC LIMIT 5";
														$resultStudentReligion = mysqli_query($connect, $queryStudentReligion);
														while ($row = mysqli_fetch_array($resultStudentReligion)) 
														{
															$religion = $row['religion'];
															$NumberOfOccurancesReligion = $row['numberofoccurancesreligion'];
															$PercentageOfOccurancesReligion = $row['percentage'];	

															echo '
															<div>
															<p>'.$religion.'</p>
															<div class="">
															<div class="progress progress_sm" style="width: 76%;">
															<div class="progress-bar bg-green" role="progressbar" data-transitiongoal="'.$PercentageOfOccurancesReligion.'"></div>
															</div>
															</div>
															</div>';
														}
														?>
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
													<h2>PUP Colleges with most students</h2>
													<ul class="nav navbar-right panel_toolbox">
														<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
														</li>
														<li><a class="close-link"><i class="fa fa-close"></i></a>
														</li>
													</ul>
													<div class="clearfix"></div>
												</div>
												<div class="x_content">
													<h4>No of Records</h4>
													<?php 
													$queryStudentColleges = "SELECT collegeCode, count(*) as numberofoccurancescollege, sum(100) / percent as percentage from tbl_personalinfo cross join (select count(*) as percent from tbl_personalinfo) x group by 1 LIMIT 5";
													$resultStudentColleges = mysqli_query($connect, $queryStudentColleges);
													while ($row = mysqli_fetch_array($resultStudentColleges)) 
													{
														$college = $row['collegeCode'];
														$NumberOfOccurancesCollege = $row['numberofoccurancescollege'];
														$PercentageOfOccurancesCollege = $row['percentage'];	

														echo'		<div class="widget_summary">
														<div class="w_left w_25">
														<span>'.$college.'</span>
														</div>
														<div class="w_center w_55">
														<div class="progress">
														<div class="progress-bar bg-green" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: '.$PercentageOfOccurancesCollege.'%;">
														<span class="sr-only">'.$PercentageOfOccurancesCollege.' Complete</span>
														</div>
														</div>
														</div>
														<div class="w_right w_20">
														<span>'.$NumberOfOccurancesCollege.'</span>
														</div>
														<div class="clearfix"></div>
														</div>';
													}
													?>	
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
																	<p class="">Sexuality</p>
																</div>
																<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
																	<p class="">Percentage</p>
																</div>
															</th>
														</tr>
														<tr>
															<td>
																<canvas class="sexualityDoughnut" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
															</td>
															<td>
																<table class="tile_info">
																	<?php 
																	$queryStudentSexuality = "SELECT sexuality, count(*) as numberofoccurancessexuality, sum(100) / percent as percentage from tbl_personalinfo cross join (select count(*) as percent from tbl_personalinfo) x group by 1 ORDER BY numberofoccurancessexuality DESC LIMIT 5";
																	$resultStudentSexuality = mysqli_query($connect, $queryStudentSexuality);
															// $color=array("blue","green","purple","aero","red");
																	$color=array("aero","purple","red","green","blue");
																	$arraycounter = 0;
																	while ($row = mysqli_fetch_array($resultStudentSexuality)) {

																		$sexuality = $row['sexuality'];
																		$numberofoccurancessexuality = $row['numberofoccurancessexuality'];
																		$PercentageOfOccurancesSexuality = round($row['percentage'],2);

																		?>
																		<?php 
																		echo '
																		<tr>
																		<td>
																		<p><i class="fa fa-square '.$color[$arraycounter].'"></i>'.$sexuality.'</p>
																		</td>
																		<td>'.$PercentageOfOccurancesSexuality.'</td>
																		</tr>';
																		$arraycounter++;
																	}
																	?>
																<!-- <tr>
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
																</tr> -->
															</table>
														</td>
													</tr>
												</table>
											</div>
										</div>
									</div>


									<div class="col-md-4 col-sm-4 col-xs-12">
										<div class="x_panel tile fixed_height_320 overflow_hidden">
											<div class="x_title">
												<h2>Civil Status</h2>
												<ul class="nav navbar-right panel_toolbox">
													<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
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
																<p class="">Civil Status</p>
															</div>
															<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
																<p class="">Percentage</p>
															</div>
														</th>
													</tr>
													<tr>
														<td>
															<canvas class="civilstatusDoughnut" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
														</td>
														<td>
															<table class="tile_info">
																<?php 
																$queryStudentCivilStatus = "SELECT civilStatus, count(*) as numberofoccurancescivilstatus, sum(100) / percent as percentage from tbl_personalinfo cross join (select count(*) as percent from tbl_personalinfo) x group by 1 ORDER BY numberofoccurancescivilstatus DESC LIMIT 5";
																$resultStudentCivilStatus = mysqli_query($connect, $queryStudentCivilStatus);
															// $color=array("blue","green","purple","aero","red");
																$color=array("aero","purple","red","green","blue");
																$arraycounter = 0;
																while ($row = mysqli_fetch_array($resultStudentCivilStatus)) {

																	$civilStatus = $row['civilStatus'];
																	$numberofoccurancescivilstatus = $row['numberofoccurancescivilstatus'];
																	$PercentageOfOccurancesCivilStatus = round($row['percentage'],2);		
																	?>
																	<?php 
																	echo '
																	<tr>
																	<td>
																	<p><i class="fa fa-square '.$color[$arraycounter].'"></i>'.$civilStatus.'</p>
																	</td>
																	<td>'.$PercentageOfOccurancesCivilStatus.'</td>
																	</tr>';
																	$arraycounter++;
																}
																?>
															</table>
														</td>
													</tr>
												</table>
											</div>
										</div>
									</div>

									<div class="col-md-4 col-sm-4 col-xs-12">
										<div class="x_panel tile fixed_height_320 overflow_hidden">
											<div class="x_title">
												<h2>Room Sharing</h2>
												<ul class="nav navbar-right panel_toolbox">
													<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
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
																<p class="">Room Sharing</p>
															</div>
															<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
																<p class="">Percentage</p>
															</div>
														</th>
													</tr>
													<tr>
														<td>
															<canvas class="roomsharingDoughnut" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
														</td>
														<td>
															<table class="tile_info">
																<?php 
																$queryStudentRoomSharing = "SELECT roomSharing, count(*) as numberofoccurancesroomsharing, sum(100) / percent as percentage from tbl_familybackground cross join (select count(*) as percent from tbl_familybackground) x group by 1 ORDER BY numberofoccurancesroomsharing DESC LIMIT 5";
																$resultStudentRoomSharing = mysqli_query($connect, $queryStudentRoomSharing);
															// $color=array("blue","green","purple","aero","red");
																$color=array("aero","purple","red","green","blue");
																$arraycounter = 0;
																while ($row = mysqli_fetch_array($resultStudentRoomSharing)) {

																	$roomSharing = $row['roomSharing'];
																	$numberofoccurancesroomsharing = $row['numberofoccurancesroomsharing'];
																	$PercentageOfOccurancesRoomSharing = round($row['percentage'],2);		
																	?>
																	<?php 
																	echo '
																	<tr>
																	<td>
																	<p><i class="fa fa-square '.$color[$arraycounter].'"></i>'.$roomSharing.'</p>
																	</td>
																	<td>'.$PercentageOfOccurancesRoomSharing.'</td>
																	</tr>';
																	$arraycounter++;
																}
																?>
															</table>
														</td>
													</tr>
												</table>
											</div>
										</div>
									</div>

									<div class="col-md-4 col-sm-4 col-xs-12">
										<div class="x_panel tile fixed_height_320 overflow_hidden">
											<div class="x_title">
												<h2>Ordinal Position</h2>
												<ul class="nav navbar-right panel_toolbox">
													<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
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
																<p class="">Ordinal Position</p>
															</div>
															<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
																<p class="">Percentage</p>
															</div>
														</th>
													</tr>
													<tr>
														<td>
															<canvas class="ordinalpositionDoughnut" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
														</td>
														<td>
															<table class="tile_info">
																<?php 
																$queryStudentordinalposition = "SELECT ordinalPosition, count(*) as numberofoccurancesordinalposition, sum(100) / percent as percentage from tbl_familybackground cross join (select count(*) as percent from tbl_familybackground) x group by 1 ORDER BY numberofoccurancesordinalposition DESC LIMIT 5";
																$resultStudentordinalposition = mysqli_query($connect, $queryStudentordinalposition);
															// $color=array("blue","green","purple","aero","red");
																$color=array("aero","purple","red","green","blue");
																$arraycounter = 0;
																while ($row = mysqli_fetch_array($resultStudentordinalposition)) {

																	$ordinalposition = $row['ordinalPosition'];
																	$numberofoccurancesordinalposition = $row['numberofoccurancesordinalposition'];
																	$PercentageOfOccurancesordinalposition = round($row['percentage'],2);		
																	?>
																	<?php 
																	echo '
																	<tr>
																	<td>
																	<p><i class="fa fa-square '.$color[$arraycounter].'"></i>'.$ordinalposition.'</p>
																	</td>
																	<td>'.$PercentageOfOccurancesordinalposition.'</td>
																	</tr>';
																	$arraycounter++;
																}
																?>
															</table>
														</td>
													</tr>
												</table>
											</div>
										</div>
									</div>

									<div class="col-md-4 col-sm-4 col-xs-12">
										<div class="x_panel tile fixed_height_320 overflow_hidden">
											<div class="x_title">
												<h2>Total Monthly Income</h2>
												<ul class="nav navbar-right panel_toolbox">
													<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
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
																<p class="">Total Monthly Income</p>
															</div>
															<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5">
																<p class="">Percentage</p>
															</div>
														</th>
													</tr>
													<tr>
														<td>
															<canvas class="totalmonthlyincomeDoughnut" height="140" width="140" style="margin: 15px 10px 10px 0"></canvas>
														</td>
														<td>
															<table class="tile_info">
																<?php 
																$queryStudenttotalmonthlyincome = "SELECT totalMonthlyIncome, count(*) as numberofoccurancestotalmonthlyincome, sum(100) / percent as percentage from tbl_familybackground cross join (select count(*) as percent from tbl_familybackground) x group by 1 ORDER BY numberofoccurancestotalmonthlyincome DESC LIMIT 5";
																$resultStudenttotalmonthlyincome = mysqli_query($connect, $queryStudenttotalmonthlyincome);
															// $color=array("blue","green","purple","aero","red");
																$color=array("aero","purple","red","green","blue");
																$arraycounter = 0;
																while ($row = mysqli_fetch_array($resultStudenttotalmonthlyincome)) {

																	$totalmonthlyincome = $row['totalMonthlyIncome'];
																	$numberofoccurancestotalmonthlyincome = $row['numberofoccurancestotalmonthlyincome'];
																	$PercentageOfOccurancestotalmonthlyincome = round($row['percentage'],2);		
																	?>
																	<?php 
																	echo '
																	<tr>
																	<td>
																	<p><i class="fa fa-square '.$color[$arraycounter].'"></i>'.$totalmonthlyincome.'</p>
																	</td>
																	<td>'.$PercentageOfOccurancestotalmonthlyincome.'</td>
																	</tr>';
																	$arraycounter++;
																}
																?>
															</table>
														</td>
													</tr>
												</table>
											</div>
										</div>
									</div>



									<?php 
									require 'viewMessageModal.php';
									?>

									
									
									
									


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
									<script src="../build/js/custom2.js"></script>
									<script>
										$(document).ready(function(){
											$(document).on('click','.message-view',function(){
												var messageID = $(this).attr("id");
												$.ajax({
													url:"viewMessage.php",
													method:"post",
													data:{messageID:messageID},
													success:function(data){
														$('#messageDetails').html(data);
														$('#view_message_Modal').modal('show');
													}
												});
											});

										});
									</script>
									<?php 
									$queryStudentSexuality = "SELECT sexuality, count(*) as numberofoccurancessexuality, sum(100) / percent as percentage from tbl_personalinfo cross join (select count(*) as percent from tbl_personalinfo) x group by 1 ORDER BY numberofoccurancessexuality DESC LIMIT 5";
									$resultStudentSexuality = mysqli_query($connect, $queryStudentSexuality);
									$colorString = "";
									$color=array("blue","green","purple","aero","red");
									$arraycounter = 0;
									while ($row = mysqli_fetch_array($resultStudentSexuality)) {

										$sexualityArray[] = $row['sexuality'];
										$numberofoccurancessexuality = $row['numberofoccurancessexuality'];
										$PercentageOfOccurancesSexualityArray[] = round($row['percentage'],2);		

									}
									$sexualityString = "";
									foreach($sexualityArray as $sexualityValue) 
									{
										$sexualityString .= '"'.$sexualityValue.'",' ;
									}
									$PercentageOfOccurancesSexualityString="";
									foreach ($PercentageOfOccurancesSexualityArray as $PercentageOfOccurancesSexualityValue) 
									{
										$PercentageOfOccurancesSexualityString .= ''.$PercentageOfOccurancesSexualityValue.',';	
									}
									foreach ($color as $colorValue) {
										$colorString .= ''.$colorValue.',';
									}
									?>


									<script>
										function init_chart_doughnut(){

											if( typeof (Chart) === 'undefined'){ return; }

											console.log('init_chart_doughnut');

											if ($('.sexualityDoughnut').length){

												var chart_doughnut_settings = {
													type: 'doughnut',
													tooltipFillColor: "rgba(51, 51, 51, 0.55)",
													data: {
														labels: [
														<?php
														echo $sexualityString;
														?>
														],
														datasets: [{
															data: [<?php echo $PercentageOfOccurancesSexualityString; ?>],
															backgroundColor: [
															"#BDC3C7",
															"#9B59B6",
															"#E74C3C",
															"#26B99A",
															"#3498DB"
															],
															hoverBackgroundColor: [
															"#CFD4D8",
															"#B370CF",
															"#E95E4F",
															"#36CAAB",
															"#49A9EA"
															]
														}]
													},
													options: { 
														legend: false, 
														responsive: false 
													}
												}

												$('.sexualityDoughnut').each(function(){

													var chart_element = $(this);
													var chart_doughnut = new Chart( chart_element, chart_doughnut_settings);

												});			

											}  

										}

									</script>
									<?php 
									$queryStudentCivilStatus = "SELECT civilStatus, count(*) as numberofoccurancescivilstatus, sum(100) / percent as percentage from tbl_personalinfo cross join (select count(*) as percent from tbl_personalinfo) x group by 1 ORDER BY numberofoccurancescivilstatus DESC LIMIT 5";
									$resultStudentCivilStatus = mysqli_query($connect, $queryStudentCivilStatus);
									$color=array("blue","green","purple","aero","red");
									$arraycounter = 0;
									while ($row = mysqli_fetch_array($resultStudentCivilStatus)) {

										$civilstatusArray[] = $row['civilStatus'];
										$numberofoccurancescivilstatus = $row['numberofoccurancescivilstatus'];
										$PercentageOfOccurancesCivilStatusArray[] = round($row['percentage'],2);		

									}
									$civilstatusString = "";
									foreach($civilstatusArray as $civilstatusValue) 
									{
										$civilstatusString .= '"'.$civilstatusValue.'",' ;
									}
									$PercentageOfOccurancesCivilStatusString="";
									foreach ($PercentageOfOccurancesCivilStatusArray as $PercentageOfOccurancesCivilStatusValue) 
									{
										$PercentageOfOccurancesCivilStatusString .= ''.$PercentageOfOccurancesCivilStatusValue.',';	
									}
									foreach ($color as $colorValue) {
										$colorString .= ''.$colorValue.',';
									}
									?>
									<script>
										function init_chart_doughnut2(){

											if( typeof (Chart) === 'undefined'){ return; }

											console.log('init_chart_doughnut2');

											if ($('.civilstatusDoughnut').length){

												var chart_doughnut_settings2 = {
													type: 'doughnut',
													tooltipFillColor: "rgba(51, 51, 51, 0.55)",
													data: {
														labels: [
														<?php
														echo $civilstatusString;
														?>
														],
														datasets: [{
															data: [<?php echo $PercentageOfOccurancesCivilStatusString; ?>],
															backgroundColor: [
															"#BDC3C7",
															"#9B59B6",
															"#E74C3C",
															"#26B99A",
															"#3498DB"
															],
															hoverBackgroundColor: [
															"#CFD4D8",
															"#B370CF",
															"#E95E4F",
															"#36CAAB",
															"#49A9EA"
															]
														}]
													},
													options: { 
														legend: false, 
														responsive: false 
													}
												}

												$('.civilstatusDoughnut').each(function(){

													var chart_element2 = $(this);
													var chart_doughnut2 = new Chart( chart_element2, chart_doughnut_settings2);

												});			

											}  

										}

									</script>


									<?php 
									$queryStudentRoomSharing = "SELECT roomSharing, count(*) as numberofoccurancesroomsharing, sum(100) / percent as percentage from tbl_familybackground cross join (select count(*) as percent from tbl_familybackground) x group by 1 ORDER BY numberofoccurancesroomsharing DESC LIMIT 5";
									$resultStudentRoomSharing = mysqli_query($connect, $queryStudentRoomSharing);
									$color=array("blue","green","purple","aero","red");
									$arraycounter = 0;
									while ($row = mysqli_fetch_array($resultStudentRoomSharing)) {

										$roomsharingArray[] = $row['roomSharing'];
										$numberofoccurancescivilstatus = $row['numberofoccurancesroomsharing'];
										$PercentageOfOccurancesRoomSharingArray[] = round($row['percentage'],2);		

									}
									$roomsharingString = "";
									foreach($roomsharingArray as $roomsharingValue) 
									{
										$roomsharingString .= '"'.$roomsharingValue.'",' ;
									}
									$PercentageOfOccurancesRoomSharingString="";
									foreach ($PercentageOfOccurancesRoomSharingArray as $PercentageOfOccurancesRoomSharingValue) 
									{
										$PercentageOfOccurancesRoomSharingString .= ''.$PercentageOfOccurancesRoomSharingValue.',';	
									}
									foreach ($color as $colorValue) {
										$colorString .= ''.$colorValue.',';
									}
									?>
									<script>
										function init_chart_doughnut3(){

											if( typeof (Chart) === 'undefined'){ return; }

											console.log('init_chart_doughnut3');

											if ($('.roomsharingDoughnut').length){

												var chart_doughnut_settings3 = {
													type: 'doughnut',
													tooltipFillColor: "rgba(51, 51, 51, 0.55)",
													data: {
														labels: [
														<?php
														echo $roomsharingString;
														?>
														],
														datasets: [{
															data: [<?php echo $PercentageOfOccurancesRoomSharingString; ?>],
															backgroundColor: [
															"#BDC3C7",
															"#9B59B6",
															"#E74C3C",
															"#26B99A",
															"#3498DB"
															],
															hoverBackgroundColor: [
															"#CFD4D8",
															"#B370CF",
															"#E95E4F",
															"#36CAAB",
															"#49A9EA"
															]
														}]
													},
													options: { 
														legend: false, 
														responsive: false 
													}
												}

												$('.roomsharingDoughnut').each(function(){

													var chart_element3 = $(this);
													var chart_doughnut3 = new Chart( chart_element3, chart_doughnut_settings3);

												});			

											}  

										}

									</script>

									<?php 
									$queryStudentordinalposition = "SELECT ordinalPosition, count(*) as numberofoccurancesordinalposition, sum(100) / percent as percentage from tbl_familybackground cross join (select count(*) as percent from tbl_familybackground) x group by 1 ORDER BY numberofoccurancesordinalposition DESC LIMIT 5";
									$resultStudentordinalposition = mysqli_query($connect, $queryStudentordinalposition);
									$color=array("blue","green","purple","aero","red");
									$arraycounter = 0;
									while ($row = mysqli_fetch_array($resultStudentordinalposition)) {

										$ordinalpositionArray[] = $row['ordinalPosition'];
										$numberofoccurancescivilstatus = $row['numberofoccurancesordinalposition'];
										$PercentageOfOccurancesordinalpositionArray[] = round($row['percentage'],2);		

									}
									$ordinalpositionString = "";
									foreach($ordinalpositionArray as $ordinalpositionValue) 
									{
										$ordinalpositionString .= '"'.$ordinalpositionValue.'",' ;
									}
									$PercentageOfOccurancesordinalpositionString="";
									foreach ($PercentageOfOccurancesordinalpositionArray as $PercentageOfOccurancesordinalpositionValue) 
									{
										$PercentageOfOccurancesordinalpositionString .= ''.$PercentageOfOccurancesordinalpositionValue.',';	
									}
									foreach ($color as $colorValue) {
										$colorString .= ''.$colorValue.',';
									}
									?>
									<script>
										function init_chart_doughnut4(){

											if( typeof (Chart) === 'undefined'){ return; }

											console.log('init_chart_doughnut4');

											if ($('.ordinalpositionDoughnut').length){

												var chart_doughnut_settings4 = {
													type: 'doughnut',
													tooltipFillColor: "rgba(51, 51, 51, 0.55)",
													data: {
														labels: [
														<?php
														echo $ordinalpositionString;
														?>
														],
														datasets: [{
															data: [<?php echo $PercentageOfOccurancesordinalpositionString; ?>],
															backgroundColor: [
															"#BDC3C7",
															"#9B59B6",
															"#E74C3C",
															"#26B99A",
															"#3498DB"
															],
															hoverBackgroundColor: [
															"#CFD4D8",
															"#B370CF",
															"#E95E4F",
															"#36CAAB",
															"#49A9EA"
															]
														}]
													},
													options: { 
														legend: false, 
														responsive: false 
													}
												}

												$('.ordinalpositionDoughnut').each(function(){

													var chart_element4 = $(this);
													var chart_doughnut4 = new Chart( chart_element4, chart_doughnut_settings4);

												});			

											}  

										}

									</script>

									<?php 
									$queryStudenttotalmonthlyincome = "SELECT totalMonthlyIncome, count(*) as numberofoccurancestotalmonthlyincome, sum(100) / percent as percentage from tbl_familybackground cross join (select count(*) as percent from tbl_familybackground) x group by 1 ORDER BY numberofoccurancestotalmonthlyincome DESC LIMIT 5";
									$resultStudenttotalmonthlyincome = mysqli_query($connect, $queryStudenttotalmonthlyincome);
									$color=array("blue","green","purple","aero","red");
									$arraycounter = 0;
									while ($row = mysqli_fetch_array($resultStudenttotalmonthlyincome)) {

										$totalmonthlyincomeArray[] = $row['totalMonthlyIncome'];
										$numberofoccurancescivilstatus = $row['numberofoccurancestotalmonthlyincome'];
										$PercentageOfOccurancestotalmonthlyincomeArray[] = round($row['percentage'],2);		

									}
									$totalmonthlyincomeString = "";
									foreach($totalmonthlyincomeArray as $totalmonthlyincomeValue) 
									{
										$totalmonthlyincomeString .= '"'.$totalmonthlyincomeValue.'",' ;
									}
									$PercentageOfOccurancestotalmonthlyincomeString="";
									foreach ($PercentageOfOccurancestotalmonthlyincomeArray as $PercentageOfOccurancestotalmonthlyincomeValue) 
									{
										$PercentageOfOccurancestotalmonthlyincomeString .= ''.$PercentageOfOccurancestotalmonthlyincomeValue.',';	
									}
									foreach ($color as $colorValue) {
										$colorString .= ''.$colorValue.',';
									}
									?>
									<script>
										function init_chart_doughnut5(){

											if( typeof (Chart) === 'undefined'){ return; }

											console.log('init_chart_doughnut5');

											if ($('.totalmonthlyincomeDoughnut').length){

												var chart_doughnut_settings5 = {
													type: 'doughnut',
													tooltipFillColor: "rgba(51, 51, 51, 0.55)",
													data: {
														labels: [
														<?php
														echo $totalmonthlyincomeString;
														?>
														],
														datasets: [{
															data: [<?php echo $PercentageOfOccurancestotalmonthlyincomeString; ?>],
															backgroundColor: [
															"#BDC3C7",
															"#9B59B6",
															"#E74C3C",
															"#26B99A",
															"#3498DB"
															],
															hoverBackgroundColor: [
															"#CFD4D8",
															"#B370CF",
															"#E95E4F",
															"#36CAAB",
															"#49A9EA"
															]
														}]
													},
													options: { 
														legend: false, 
														responsive: false 
													}
												}

												$('.totalmonthlyincomeDoughnut').each(function(){

													var chart_element5 = $(this);
													var chart_doughnut5 = new Chart( chart_element5, chart_doughnut_settings5);

												});			

											}  

										}

									</script>


									<?php

									$queryPlotChart1 = "SELECT MONTH(`studentDateAccountCreated`) AS Month , DAY(`studentDateAccountCreated`) AS Day , YEAR(`studentDateAccountCreated`) AS Year , COUNT(DISTINCT studentNumber) as NumberOfAccountsCreated FROM `tbl_studentaccount` WHERE studentDateAccountCreated > DATE_SUB(now(), INTERVAL 1 WEEK) GROUP BY MONTH(`studentDateAccountCreated`), DAY(`studentDateAccountCreated`), YEAR(`studentDateAccountCreated`) ORDER BY studentDateAccountCreated ASC";
									$resultPlotChart1 = mysqli_query($connect, $queryPlotChart1);


									?>
									<script>

										function init_flot_chart(){

											if( typeof ($.plot) === 'undefined'){ return; }

											console.log('init_flot_chart');

											var arr_data1 = [
											<?php
											while ($row = mysqli_fetch_array($resultPlotChart1)) {
												$Month = $row['Month'];
												$Day = $row['Day'];
												$Year = $row['Year'];
												$NumberOfAccountsCreated = $row['NumberOfAccountsCreated'];

												?>
												[gd(<?php echo $Year;  ?>, <?php echo $Month; ?>, <?php echo $Day; ?>), <?php echo $NumberOfAccountsCreated;  ?>],
												<?php
											}
											?>

											];

																// [gd(2018, 8, 15), 400]

																// [gd(2018, 8, 3), 60],
																// [gd(2018, 8, 5), 100],
																// [gd(2018, 8, 7), 150],
																// [gd(2018, 8, 11), 200],

																// var arr_data2 = [
																// [gd(2012, 1, 1), 82],
																// [gd(2012, 1, 2), 23],
																// [gd(2012, 1, 3), 66],
																// [gd(2012, 1, 4), 9],
																// [gd(2012, 1, 5), 119],
																// [gd(2012, 1, 6), 6],
																// [gd(2012, 1, 7), 9]
																// ];

																var arr_data3 = [
																[0, 1],
																[1, 9],
																[2, 6],
																[3, 10],
																[4, 5],
																[5, 17],
																[6, 6],
																[7, 10],
																[8, 7],
																[9, 11],
																[10, 35],
																[11, 9],
																[12, 12],
																[13, 5],
																[14, 3],
																[15, 4],
																[16, 9]
																];

																var chart_plot_02_data = [];

																var chart_plot_03_data = [
																[1, 10],
																[2, 1],
																[3, 2],
																[4, 9],
																// [4, 5],
																// [5, 17],
																// [6, 6],
																// [7, 10],
																// [8, 7],
																// [9, 11],
																// [10, 35],
																// [11, 9],
																// [12, 12],
																// [13, 5],
																// [14, 3],
																// [15, 4],
																[16, 9]
																];


																for (var i = 0; i < 30; i++) {
																	chart_plot_02_data.push([new Date(Date.today().add(i).days()).getTime(), randNum() + i + i + 10]);
																}

																// chart_plot_02_data.push([]);

																var chart_plot_01_settings = {
																	series: {
																		lines: {
																			show: false,
																			fill: true
																		},
																		splines: {
																			show: true,
																			tension: 0.4,
																			lineWidth: 1,
																			fill: 0.4
																		},
																		points: {
																			radius: 0,
																			show: true
																		},
																		shadowSize: 2
																	},
																	grid: {
																		verticalLines: true,
																		hoverable: true,
																		clickable: true,
																		tickColor: "#d5d5d5",
																		borderWidth: 1,
																		color: '#fff'
																	},
																	colors: ["rgba(38, 185, 154, 0.38)", "rgba(3, 88, 106, 0.38)"],
																	xaxis: {
																		tickColor: "rgba(51, 51, 51, 0.06)",
																		mode: "time",
																		tickSize: [1, "day"],
																		axisLabel: "Date",
																		axisLabelUseCanvas: true,
																		axisLabelFontSizePixels: 12,
																		axisLabelFontFamily: 'Verdana, Arial',
																		axisLabelPadding: 10
																	},
																	yaxis: {
																		ticks: 8,
																		tickColor: "rgba(51, 51, 51, 0.06)",
																	},
																	tooltip: false
																}

																var chart_plot_02_settings = {
																	grid: {
																		show: true,
																		aboveData: true,
																		color: "#3f3f3f",
																		labelMargin: 10,
																		axisMargin: 0,
																		borderWidth: 0,
																		borderColor: null,
																		minBorderMargin: 5,
																		clickable: true,
																		hoverable: true,
																		autoHighlight: true,
																		mouseActiveRadius: 100
																	},
																	series: {
																		lines: {
																			show: true,
																			fill: true,
																			lineWidth: 2,
																			steps: false
																		},
																		points: {
																			show: true,
																			radius: 4.5,
																			symbol: "circle",
																			lineWidth: 3.0
																		}
																	},
																	legend: {
																		position: "ne",
																		margin: [0, -25],
																		noColumns: 0,
																		labelBoxBorderColor: null,
																		labelFormatter: function(label, series) {
																			return label + '&nbsp;&nbsp;';
																		},
																		width: 40,
																		height: 1
																	},
																	colors: ['#96CA59', '#3F97EB', '#72c380', '#6f7a8a', '#f7cb38', '#5a8022', '#2c7282'],
																	shadowSize: 0,
																	tooltip: true,
																	tooltipOpts: {
																		content: "%s: %y.0",
																		xDateFormat: "%d/%m",
																		shifts: {
																			x: -30,
																			y: -50
																		},
																		defaultTheme: false
																	},
																	yaxis: {
																		min: 0
																	},
																	xaxis: {
																		mode: "time",
																		minTickSize: [1, "day"],
																		timeformat: "%d/%m/%y",
																		min: chart_plot_02_data[0][0],
																		max: chart_plot_02_data[20][0]
																	}
																};	

																var chart_plot_03_settings = {
																	series: {
																		curvedLines: {
																			apply: true,
																			active: true,
																			monotonicFit: true
																		}
																	},
																	colors: ["#26B99A"],
																	grid: {
																		borderWidth: {
																			top: 0,
																			right: 0,
																			bottom: 1,
																			left: 1
																		},
																		borderColor: {
																			bottom: "#7F8790",
																			left: "#7F8790"
																		}
																	}
																};


																if ($("#chart_plot_01").length){
																	console.log('Plot1');

																	$.plot( $("#chart_plot_01"), [ arr_data1 ],  chart_plot_01_settings );
																}


																if ($("#chart_plot_02").length){
																	console.log('Plot2');

																	$.plot( $("#chart_plot_02"), 
																		[{ 
																			label: "Accounts Signed Up", 
																			data: chart_plot_02_data, 
																			lines: { 
																				fillColor: "rgba(150, 202, 89, 0.12)" 
																			}, 
																			points: { 
																				fillColor: "#fff" } 
																			}], chart_plot_02_settings);

																}

																if ($("#chart_plot_03").length){
																	console.log('Plot3');


																	$.plot($("#chart_plot_03"), [{
																		label: "Registrations",
																		data: chart_plot_03_data,
																		lines: {
																			fillColor: "rgba(150, 202, 89, 0.12)"
																		}, 
																		points: {
																			fillColor: "#fff"
																		}
																	}], chart_plot_03_settings);

																};

															}

														</script>

													</body>
													</html>

