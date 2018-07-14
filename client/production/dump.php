if(mysqli_query($connect, $query6TestResults2))
                            					{
                            						echo "<script type='text/javascript'>location.href = 'clientHome.php';</script>";
                            					}
                            					else
                            					{
                            					$message = "Student Account Query Error#6.2";
                            					echo "<script type='text/javascript'>alert('$message');</script>";
                            					//redirectig to the display page. In our case, it is index.php
                           						echo "<script type='text/javascript'>location.href = 'clientLogin.php';</script>";
                            					}