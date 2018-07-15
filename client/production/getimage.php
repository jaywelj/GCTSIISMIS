<?php
									session_start();
									$id = $_GET['id'];
									$varcharStudentAccountNumber = $_SESSION['sessionStudentAccountNumber'];
									$varcharStudentAccountPassword = $_SESSION['sessionStudentAccountPassword'];
									$_SESSION['sessionStudentAccountNumber'] = $varcharStudentAccountNumber;
									$_SESSION['sessionStudentAccountPassword'] = $varcharStudentAccountPassword;

									include("connectionString.php");

                                  $result = mysqli_query($connect,"SELECT studentDisplayPic FROM `tbl_studentaccount`WHERE studentNumber = '$id'");

                                  $row = mysqli_fetch_assoc($result);
  									mysqli_close($link);

  									header("Content-type: image/jpeg");
  									echo $row['studentDisplayPic'];
                                   


?>