<?php
session_start();
include("connectionString.php");
if (isset($_POST['btnLogin'])) 
{
  $varcharUsername = mysqli_real_escape_string($connect, $_POST['txtbxUsername']);
  $varcharPassword = mysqli_real_escape_string($connect, $_POST['txtbxPassword']);
  $queryAccount = "SELECT * FROM tbl_adminaccount WHERE adminUserName='$varcharUsername' AND adminPassword='$varcharPassword' ";
  $resultAccount = mysqli_query($connect, $queryAccount);

  while($res = mysqli_fetch_array($resultAccount)) 
  {
    $varcharAccessLevel = $res['admin_accessLevel'];
  }
  if (mysqli_num_rows($resultAccount) == 1) 
  {
    $_SESSION['sessionAdminName'] = $varcharUsername;
    $_SESSION['sessionAdminAccessLevel'] = $varcharAccessLevel;
    header('location: index.php');
  }
  else 
  {
    $message = "No account matches the given information";
    echo "<script type='text/javascript'>alert('$message');</script>";
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

    <title>Gentelella Alela! | </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>
  <div class="jumbotron" style="background-color:#ffffff; height:100px; margin-bottom:5px; padding:0px;">
      <div style="padding:10px 0px 20px 0px;">
        <image class="navbar-left" src="images/PUPLogo88x88.png"></image>
        <div style="font-family:'Cinzel'; font-weight:bold; margin-left:100px; color:#b22222;">
          <h4 style="margin-bottom:0px;"><a href="#" style="font-weight:bold; color:#880000;">POLYTECHNIC UNIVERSITY OF THE PHILIPPINES</a></h4>
          <p style="margin-bottom: 0; font-size: 14px;">THE COUNTRY'S 1ST POLYTECHNICU</p>
          <h4 style="margin-top: 0; font-weight: bold;">GUIDANCE COUNCIL AND TESTING SERVICES</h4>
        </div>
      </div>
      <!--<form class="navbar-form navbar-right" action="/action_page.php" style="padding-top: 20px;">
        <div class="form-group">
          <input type="text" class="form-control " placeholder="Search" name="search">
        </div>
        <button type="submit" class="btn btn-default"> Submit </button>
      </form>-->
      <image src="images/hands-art.jpg" style="width:100%"></image>
  </div> 
  <body class="login">
    <div>
          <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">

        <div class="animate form login_form">

          <section class="login_content">
            <div class="jumbotron" style="width:400px; height:400px; background-color: #ffffff; padding:45px; margin: 10px; border-radius: 10px">
              <form method='post'>
                <h1>Login</h1>
                <div>
                  <input type="text" name="txtbxUsername" id="txtbxUsername" class="form-control" placeholder="Username" required=""/>
                </div>
                <div>
                  <input type="password" name="txtbxPassword" id="txtbxPassword" class="form-control" placeholder="Password" required=""/>
                </div>
                <div class="checkbox text-center ">
                  <input name="showcheck" id="showcheck" type="checkbox" value="" onclick="showCheck()">
                  <h5 style="display:inline;">Show Password</h5>
                </div>
                <div>
                  <input type="submit" class="btn btn-default" value="Log in" name="btnLogin" id="btnLogin" style="float: none; margin:0px"/>
                </div>
                <div class="clearfix">
                </div>
                <div>
                  <a class="reset_pass" style="margin-right: 0px; text-align:center;" href="#">Lost your password?</a>
                </div>
                  <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                  <div class="clearfix">
                  </div>
                  <br />
                </div>

              </form>
            </div>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <div class="jumbotron" style="width:400px; height:400px; background-color: #ffffff; padding:50px; margin: 10px; border-radius: 10px">
              <form>
                <h1>Create Account</h1>
                <div>
                  <input type="text" class="form-control" placeholder="Username" required="" />
                </div>
                <div>
                  <input type="email" class="form-control" placeholder="Email" required="" />
                </div>
                <div>
                  <input type="password" class="form-control" placeholder="Password" required="" />
                </div>
                <div>
                  <a class="btn btn-default submit" href="index.php">Submit</a>
                </div>

                <div class="clearfix"></div>

                <div class="separator">
                  <p class="change_link">Already a member ?
                    <a href="#signin" class="to_register"> Log in </a>
                  </p>

                  <div class="clearfix"></div>
                  <br />

                </div>
              </form>
            </div>
          </section>
        </div>
      </div>
    </div>
    <script>
    function showCheck() 
    {
      var x = document.getElementById("txtbxPassword");
      if (x.type === "password") 
      {
          x.type = "text";
      } else 
      {
          x.type = "password";
      }
    }
    </script>
  </body>
</html>

