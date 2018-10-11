<?php
include("connectionString.php");  
if(isset($_POST['btnSubmit']))
{
	$query = "INSERT INTO tbl_answerproblemarchive SELECT * FROM tbl_answerproblem";
	$query2 = "DELETE FROM tbl_answerproblem";
	if(mysqli_query($connect,$query))
	{
		//echo "<script type='text/javascript'>alert('Moving to Archive Successfull');</script>";
		if(mysqli_query($connect,$query2))
		{
			echo "<script type='text/javascript'>alert('Moving to Archive Successfull');</script>";
			//echo "<script type='text/javascript'>alert('Deleted');</script>";
			echo "<script type='text/javascript'>location.href = 'surveyProblemSurveyAnswer.php';</script>";
		}
		else
		{
			echo "<script type='text/javascript'>alert('Query Error2');</script>";
			echo "<script type='text/javascript'>location.href = 'surveyProblemSurveyAnswer.php';</script>";
		}	
	}
	else
	{
		echo "<script type='text/javascript'>alert('Query Error');</script>";
		echo "<script type='text/javascript'>location.href = 'surveyProblemSurveyAnswer.php';</script>";
	}
}
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
	<title>Survey Tally | OCPS</title>

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
	<!-- ECharts -->
	<script src="../vendors/echarts/dist/echarts.min.js"></script>
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
							<h3>Manage Survey<small></small></h3>
						</div>

						<div class="title_right">
							<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
								<div class="input-group">
									
								</div>
							</div>
						</div>
					</div>

					<div class="clearfix"></div>

					<div class="row">

						<div class="col-md-12 col-sm-12 col-xs-12">
							<div class="x_panel">
								<div class="" role="tabpanel" data-example-id="togglable-tabs">
									<ul id="myTab1" class="nav nav-tabs bar_tabs right" role="tablist">
										<li role="presentation" class="active"><a href="#tab_content11" id="home-tabb" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Table</a>
										</li>
										<li role="presentation" class=""><a href="#tab_content22" role="tab" id="profile-tabb" data-toggle="tab" aria-controls="profile" aria-expanded="false">Chart</a>
										</li>
									</ul>
									<div id="myTabContent2" class="tab-content">
										<div role="tabpanel" class="tab-pane fade in active" id="tab_content11" aria-labelledby="home-tab">
											<div class="x_title">
												<h2>Survey Tally <small></small></h2>
												<ul class="nav navbar-right">
													<ul class="nav navbar-right">
														<?php
														$query = "SELECT tbl_answerproblem.studentNumber,firstName,lastName,middleName,answerDate FROM tbl_answerproblem INNER JOIN tbl_personalinfo on tbl_answerproblem.studentNumber = tbl_personalinfo.studentNumber GROUP BY tbl_answerproblem.studentNumber";
														$result = mysqli_query($connect, $query); 
														$noOfRespondents = mysqli_num_rows($result);
														?>
														<h2>Total Number of Respondents = <?php echo $noOfRespondents; ?> </h2>
													</ul>
												</ul>
												<div class="clearfix"></div>
											</div>


											<div class="x_content">
												<table id="datatable-buttons" class="table table-striped table-bordered">

													<thead>
														<tr>
															<th>Problems</th>
															<th>Never</th>
															<th>Seldom</th>
															<th>Sometimes</th>
															<th>Often</th>
															<th>Always</th>
														</tr>
													</thead>
													<tbody>
														<?php  
														$query = "SELECT * FROM `tbl_surveyofproblems`";
														$result = mysqli_query($connect, $query); 
														while($row = mysqli_fetch_array($result))  
														{  
															$total=0;
															echo"<tr>";
															echo "<td>".$row['problemName']."</td>";
															for($ctr=1;$ctr<6;$ctr++)
															{
																$query2 = "SELECT COUNT(answerID) FROM tbl_answerproblem where problemID = ".$row['problemID']." AND answerProblem = '$ctr'";
																$query2array = mysqli_query($connect,$query2);
																while($row2 = mysqli_fetch_array($query2array))
																{
																	echo "<td>".$row2['COUNT(answerID)']."</td>";
																}
															}
																//echo "<td>".$total."</td>";
															echo"</tr>";
														}
														?> 
													</tbody>
													<tfoot>
														<tr>
															<th>Problems</th>
															<th>Never</th>
															<th>Seldom</th>
															<th>Sometimes</th>
															<th>Often</th>
															<th>Always</th>
														</tr>
													</tfoot>
												</table>
											</div>
										</div>
										<div role="tabpanel" class="tab-pane fade in" id="tab_content22" aria-labelledby="profile-tab">
											<?php  
											$query = "SELECT * FROM `tbl_surveyofproblems`";
											$result = mysqli_query($connect, $query); 
											$total=1;
											while($row = mysqli_fetch_array($result))  
											{  
												echo'<div class="col-md-6 col-sm-6 col-xs-12">
												<div class="x_panel">
												<div class="x_title">
												<h5 style="font-weight:600">'.$row['problemName'].'</h5>

												<div class="clearfix"></div>
												</div>
												<div class="x_content">

												<div id="echarts_pie'.$total.'" style="width: 515px; height:400px;"></div>

												</div>
												</div>
												</div>';

												$values = array();
												$respondesntstotal = 0;
												for($ctr=1;$ctr<6;$ctr++)
												{
													$query2 = "SELECT COUNT(answerID) FROM tbl_answerproblem where problemID = ".$row['problemID']." AND answerProblem = '$ctr'";
													$query2array = mysqli_query($connect,$query2);
													while($row2 = mysqli_fetch_array($query2array))
													{
														array_push($values, $row2['COUNT(answerID)']);
														$respondesntstotal += $row2['COUNT(answerID)'];
													}
												}
												if($respondesntstotal != 0)
												{
													echo "
													<script type='text/javascript'> var myChart".$total." = echarts.init(document.getElementById('echarts_pie".$total."')); option = {title : {text: 'Pie Chart', subtext: 'Graphical Representation', x:'center'}, tooltip : {trigger: 'item', formatter: '{a} <br/>{b} : {c} ({d}%)'}, legend: {orient: 'vertical', left: 'left', data: ['".round($values[0]/$respondesntstotal * 100,2) ."% Never','".round($values[1]/$respondesntstotal * 100,2) ."% Seldom','".round($values[2]/$respondesntstotal * 100,2) ."% Sometimes','".round($values[3]/$respondesntstotal * 100,2) ."% Often','".round($values[4]/$respondesntstotal * 100,2) ."% Always'] }, toolbox: {show: true, feature: {restore: {show: true, title: 'Restore'}, saveAsImage: {show: true, title: 'Save Image'} }, x:'right'}, series : [{name: 'Details', type: 'pie', radius : '70%', center: ['50%', '60%'],";
													echo " data:[{value:".$values[0].", name:'".round($values[0]/$respondesntstotal * 100,2) ."% Never', itemStyle: {color: '#0066cc'}}, {value:".$values[1].", name:'".round($values[1]/$respondesntstotal * 100,2) ."% Seldom', itemStyle: {color: '#009933'}}, {value:".$values[2].", name:'".round($values[2]/$respondesntstotal * 100,2) ."% Sometimes', itemStyle: {color: '#ffcc00'}}, {value:".$values[3].", name:'".round($values[3]/$respondesntstotal * 100,2) ."% Often', itemStyle: {color: '#ff6600'}}, {value:".$values[4].", name:'".round($values[4]/$respondesntstotal * 100,2) ."% Always', itemStyle: {color: '#cc0000'}} ], itemStyle: {emphasis: {shadowBlur: 20, shadowOffsetX: 6, shadowColor: 'rgba(0, 0, 0, 0.5)'} } }, ] }; myChart".$total.".setOption(option); </script>"; 

													$total++;
												}
											}
											?>

										</div>
									</div>
								</div>
							</div>
						</div>
						<!--Other Tables othertables/-->
					</div>
				</div>
			</div>

			<?php 
			require 'viewMessageModal.php';
			?>
			<!-- /page content -->
			<!--Modal Edit-->

			<!--/Modal Edit-->
			<!--Modal Add-->

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
	<script type="text/javascript">
		var respondents = '<?php echo $noOfRespondents; ?>';
		function init_DataTables() {
			const monthNames = ["January", "February", "March", "April", "May", "June",
			"July", "August", "September", "October", "November", "December"
			];

			const d = new Date();
			var monthName = monthNames[d.getMonth()];
			var year = d.getFullYear();
			console.log('run_datatables');

			if( typeof ($.fn.DataTable) === 'undefined'){ return; }
			console.log('init_DataTables');

			var handleDataTableButtons = function() {
				if ($("#datatable-buttons").length) {
					$("#datatable-buttons").DataTable({
						dom: "Blfrtip",
						buttons: [
						{
							extend: "copy",
							className: "btn-sm"
						},
						{
							extend: "csv",
							className: "btn-sm"
						},
						{
							extend: "excel",
							className: "btn-sm"
						},
						{
							extend: "pdfHtml5",
							className: "btn-sm"
						},
						{
							extend: "print",
							customize: function ( win ) {
								$(win.document.body)
								.css( 'font-size', '10pt', 'margin-left', '-500px' )
								.prepend(
									'<img src="https://image.ibb.co/fwB5qz/GCTS_LOGO1.png" style="position:absolute; top:0px; left:0;" /><h4 class="text-center">Polytechnic University of the Philippines</h4><h4 class="text-center" >OFFICE OF COUNSELING AND PSYCHOLOGICAL SERVICES</h4><h4 class="text-center"><br></h4><h3 class="text-center" ><hr>Survey Report</h3><h4 class="text-center" >No of Respondents = '+respondents+'</h4><h5 class="text-center" >'+monthName+', '+year+'</h5 style="margin-bottom:40px;"><img src="https://image.ibb.co/iNkFqz/PUPLogo88x88.png" style="position:absolute; top:0px; right:0;" />'
									);

								$(win.document.body).find( 'table' )
								.addClass( 'compact' )
								.css( 'font-size', 'inherit');
							},
							className: "btn-sm"
						},
						],
						"lengthMenu": [ [-1,50, 100, 150, 200, 250 ], [  "All",50, 100, 150, 200, 250] ]
					});
				}
			};

			TableManageButtons = function() {
				"use strict";
				return {
					init: function() {
						handleDataTableButtons();
					}
				};
			}();

			$('#datatable').dataTable();

			$('#datatable-keytable').DataTable({
				keys: true
			});

			$('#datatable-responsive').DataTable();

			$('#datatable-scroller').DataTable({
				ajax: "js/datatables/json/scroller-demo.json",
				deferRender: true,
				scrollY: 380,
				scrollCollapse: true,
				scroller: true
			});

			$('#datatable-fixed-header').DataTable({
				fixedHeader: true
			});

			var $datatable = $('#datatable-checkbox');

			$datatable.dataTable({
				'order': [[ 1, 'asc' ]],
				'columnDefs': [
				{ orderable: false, targets: [0] }
				]
			});
			$datatable.on('draw.dt', function() {
				$('checkbox input').iCheck({
					checkboxClass: 'icheckbox_flat-green'
				});
			});

			TableManageButtons.init();

		};
	</script>





</body>
</html>