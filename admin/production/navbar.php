<?php
$varcharAdminEmail = $_SESSION['sessionAdminEmail'];

?>
<?php 
include("connectionString.php");

?>
<link href="../vendors/font-awesome5.2.0/css/all.min.css" rel="stylesheet">
<div class="top_nav">
	<div class="nav_menu">
		<nav>
			<div class="nav toggle">
				<a id="menu_toggle"><i class="fa fa-bars"></i></a>
			</div>

			<ul class="nav navbar-nav navbar-right">
				<li class="">
					<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
						<?php

						$result = mysqli_query($connect,"SELECT * FROM `tbl_adminaccount` WHERE `adminEmail` = '$varcharAdminEmail'");

						while($res = mysqli_fetch_array($result))
						{
							$varcharAdminEmail = $res['adminEmail'];
							$varcharAdminFirstName = $res['adminFirstName'];
							$varcharAdminMiddleName = $res['adminMiddleName'];
							$varcharAdminLastName = $res['adminLastName'];
							$varcharAdminBirthDate = $res['adminBirthDate'];
							$varcharAdminPassword = $res['adminPassword'];
							$varcharAdminAccessLevel = $res['adminAccessLevel'];
							$varcharAdminImage = $res['adminImage'];
							if(empty($varcharAdminImage))
							{
								echo '
								<img src="assets/img/default-user.png">
								';
							}
							else{
								echo '
								<img src="data:image/jpeg;base64,'.base64_encode($res['adminImage']).'"  alt="">
								';
							}
						}
						?>
						<?php echo $varcharAdminFirstName;?>
						<span class=" fa fa-angle-down"></span>
					</a>
					
					<ul class="dropdown-menu dropdown-usermenu pull-right">
						<li><a href="manageAccountSelf.php"> Profile</a></li>
						<!-- <li>
							<a href="javascript:;">
								<span class="badge bg-red pull-right">50%</span>
								<span>Settings</span>
							</a>
						</li>
						<li><a href="javascript:;">Help</a></li> -->
						<li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
					</ul>
				</li>
				<?php 
				$queryMessageUnread = "SELECT COUNT(*) AS NumberOfMessageUnread FROM tbl_message WHERE messageStatus = 'Unread' ORDER BY messageDateSent DESC LIMIT 5";

				$resultMessageUnread = mysqli_query($connect, $queryMessageUnread);
				while ($row = mysqli_fetch_array($resultMessageUnread)) {
					$CurrentNumberOfStudentMale = $row['NumberOfMessageUnread'];

				}

				?>

				<li role="presentation" class="dropdown">
					<a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
						<i class="fa fa-envelope"></i>
						<span class="badge bg-green"><?php echo $CurrentNumberOfStudentMale; ?></span>
					</a>
					<ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
						<?php 
						date_default_timezone_set('Asia/Manila');
						$datetoday = date("Y/m/d H:i:s");
						$datetoday = new DateTime($datetoday);

						$queryGettingMessages = "SELECT * FROM `tbl_message` ORDER BY messageDateSent DESC LIMIT 5";
						$resultGettingMessages = mysqli_query($connect, $queryGettingMessages);
						while ($row = mysqli_fetch_array($resultGettingMessages)) 
						{
							$messageID = $row['messageID'];
							$messageDateSent = $row['messageDateSent'];	
							$messageDateSent = strtotime($messageDateSent);
							$messageDateSent = date("Y/m/d H:i:s", $messageDateSent);
							$messageDateSent = new DateTime($messageDateSent);
							$messageDatePassed = date_diff($datetoday,$messageDateSent);
							$studentNumber = $row['studentNumber'];
							$senderName = $row['senderName'];
							$messageContent = $row['messageContent'];

							$messageStatus = $row['messageStatus'];
							if ($messageStatus == "Unread")
							{
								$messageStatus = "fa fa-envelope";
								$style = "";
							}
							else if ($messageStatus == "Read")
							{
								$messageStatus = "fa fa-envelope-open";
								$style = "#fff";
							}

							$messageSubject = $row['subCategoryID'];

							$queryGettingSubCategoryName = "SELECT * FROM tbl_incidentsubcategory WHERE `subCategoryID` = ".$row['subCategoryID']." ";
							$resultGettingSubCategoryName = mysqli_query($connect, $queryGettingSubCategoryName); 
							while($res = mysqli_fetch_array($resultGettingSubCategoryName))  
							{ 
								$subCategoryName = $res['subCategoryName'];
								


								?>
								<?php

								if(empty($studentNumber))
								{

									echo '
									<li style="background:'.$style.';">
									<a id='.$messageID.' class="message-view">
									<span class="image"><img src="images/default-user.png" alt="Profile Image" /></span>
									<span>
									<span class="message"><i class="'.$messageStatus.'"></i></span>
									<span>'.$senderName.'</span>
									<span class="time">'.$messageDatePassed->format("%d d %h h %i m %s s ago").'</span>
									</span>
									<span class="message">
									'.$subCategoryName.'
									</span>
									</a>
									</li>';
								}
								else{
									$queryGettingAccount = "SELECT * FROM `tbl_studentaccount` WHERE studentNumber = '$studentNumber'";
									$resultGettingAccount = mysqli_query($connect, $queryGettingAccount);
									while ($res = mysqli_fetch_array($resultGettingAccount)) 
									{

										$studentDisplayPic = $res['studentDisplayPic'];
										if (empty($studentDisplayPic)) {
										 echo '
										<li style="background:'.$style.';">
										<a id='.$messageID.' class="message-view">
										<span class="image"><img src="images/default-user.png" alt="Profile Image" /></span>
										<span>
										<span class="message"><i class="'.$messageStatus.'"></i></span>
										<span>'.$senderName.'</span>
										<span class="time">'.$messageDatePassed->format("%d d %h h %i m %s s ago").'</span>
										</span>
										<span class="message">
										'.$subCategoryName.'
										</span>
										</a>
										</li>';
										}
										else{
										echo '
										<li style="background:'.$style.';">
										<a id='.$messageID.' class="message-view">
										<span class="image"><img src="data:image/jpeg;base64,'.base64_encode($res['studentDisplayPic'] ).'" alt="Profile Image" /></span>
										<span>
										<span class="message"><i class="'.$messageStatus.'"></i></span>
										<span>'.$senderName.'</span>
										<span class="time">'.$messageDatePassed->format("%d d %h h %i m %s s ago").'</span>
										</span>
										<span class="message">
										'.$subCategoryName.'
										</span>
										</a>
										</li>';
									}
									}
								}

							}
							?>
							<?php 
							
						}
						?>
						<li>
							<div class="text-center">
								<a href="manageMessage.php">
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

