<?php
session_start();
$varcharStudentAccountNumber = $_SESSION['sessionStudentAccountNumber'];
$varcharStudentAccountPassword = $_SESSION['sessionStudentAccountPassword'];
$_SESSION['sessionStudentAccountNumber'] = $varcharStudentAccountNumber;
$_SESSION['sessionStudentAccountPassword'] = $varcharStudentAccountPassword;
?>
<!DOCTYPE html>
<html><head>
	<meta charset="utf-8" /> 
  <title>:: Guidance Counseling and Testing services ::</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">  
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google font here -->
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400' rel='stylesheet' type='text/css'>
    <!-- Latest compiled and minified CSS -->

    <link rel='stylesheet' type='text/css' href="assets/bootstrap/css/bootstrap.min.css">

    <!--  Font Awesome CSS -->
    <link rel='stylesheet' type='text/css' href="assets/custom/css/font-awesome.min.css">
    <link rel='stylesheet' type='text/css' href="assets/custom/css/animate.css">


    <!--menu style-->	
    <link rel="stylesheet" href="assets/menu/styles.css">

    <!--FancyBox CSS -->
    <link rel="stylesheet" href="assets/fancybox/css/jquery.fancybox-buttons.css">
    <link rel="stylesheet" href="assets/fancybox/css/jquery.fancybox-thumbs.css">
    <link rel="stylesheet" href="assets/fancybox/css/jquery.fancybox.css">

    <!-- Custom CSS -->
    <link rel='stylesheet' type='text/css' href="assets/custom/css/style.css">    

    <!-- Latest compiled and minified JavaScript -->
    <script src="assets/custom/js/jquery-1.11.1.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>  

    <!--menu style-->	
    <script src="assets/menu/script.js"></script>

    <!--Portfolio js-->	
    <link rel="stylesheet" type="text/css" href="assets/portfolio/css/component.css" />
    <script src="assets/portfolio/js/modernizr.custom.js"></script>

  </head>
  <body>   


    <!--main container start Here-->
    <main id="main_Container" class="main_container">
    	
      <!--header Wrapper start Here-->
      <header class="header_wrapper">
       <div class="overly_bg">
         <div class="container">
           <div class="row">
            <!--Navigation  Start Here-->
            <?php 
            $_SESSION['WebsiteState'] = "Home";
            ?>

            <?php 
            require 'clientNavbar.php';
            ?>
            <!--Navigation  End Here-->
            <div class="clearfix" style="height:100px;"></div>
            <div class="text-center os-animation"></div>	

          </div>    
        </div>
      </div>
    </header>
    <!--header Wrapper End Here-->

    <!--Middle Wrapper Start Here-->

    <!--Personal Information Wrapper Start Here-->
    <section class="about_wrapper">
      <div class="container">
        <div class="row">

          <div class="vertical_space"></div>
          <div class="col-md-9 col-sm-9 os-animation">
            <h3 class="section_heading">Guidance, Counseling and Testing Services</h3>
            <p>Located at Charlie Del Rosario, Polytechnic University oF The Philippines Sta. Mesa</p>
            <div class="devider">
             <div class="icon-green">
               <div class="white-icon"></div>
             </div>
           </div>

           <div class="vertical_space"></div>
           <p> Guidance is a vital part of education that provides assistance to students so that they would make intelligent decisions and adjustment in life. Its fundamental aim is to assist in bringing-out the best in a person – to help him responsibly adjust to situations as he progresses. </p>
           <p>The role of the Guidance, Counseling and Testing Services (GCTS) is to mold the student through education with the ultimate goal of making him a better person. Through active student participation, it seeks to provide the student with the means to obtain self-direction and self-management while pursuing their chosen career in the University. It supports the Institution in its realization of the educational objectives through assisting, coordinating, and implementing relevant policies for student welfare and development.</p>
           <p>To realize its objectives, Guidance Services are implemented within the school year to benefit the students and the entire academic community, as well. They are the following: counseling service, information service, individual inventory service, testing service, and research and evaluation service. Various activities are planned, organized, and implemented to help the student understand himself, improve his abilities, skills, and interests, and eventually become a well-adjusted individual. It continuously works towards its goal of maximizing students’ potentials to become self-directive.</p>
           <p>Guided by the University’s Mission and Philosophy, the PUP GCTS is committed to enhance and uplift the moral, social, and spiritual development of every PUPian.</p>
         </div>


       </div>
     </div>



   </section>
   <!--Personal Information Wrapper End Here-->
   <section class="my_work_wrapper">
    <div class="container">
      <div class="row">
        <h2 class="section_heading">GCTS Pictures</h2>
        <ul class="grid effect-2" id="grid">
          <li><a class="fancybox" rel="group" href="assets/portfolio/images/1-large.jpg"><img src="https://www.pup.edu.ph/studentservices/gcts/images/2.jpg" alt=""></a></li>
          <li><a class="fancybox" rel="group" href="assets/portfolio/images/2-large.jpg"><img src="https://www.pup.edu.ph/studentservices/gcts/images/13.jpg" alt=""></a></li>
          <li><a class="fancybox" rel="group" href="assets/portfolio/images/3-large.jpg"><img src="https://www.pup.edu.ph/studentservices/gcts/images/16.jpg" alt=""></a></li>
          <li><a class="fancybox" rel="group" href="assets/portfolio/images/4-large.jpg"><img src="assets/portfolio/images/4.jpg" alt=""></a></li>
          <li><a class="fancybox" rel="group" href="assets/portfolio/images/5-large.jpg"><img src="assets/portfolio/images/5.jpg" alt=""></a></li>
          <li><a class="fancybox" rel="group" href="assets/portfolio/images/6-large.jpg"><img src="assets/portfolio/images/6.jpg" alt=""></a></li>
          <li><a class="fancybox" rel="group" href="assets/portfolio/images/7-large.jpg"><img src="assets/portfolio/images/7.jpg" alt=""></a></li>
          <li><a class="fancybox" rel="group" href="assets/portfolio/images/8-large.jpg"><img src="assets/portfolio/images/8.jpg" alt=""></a></li>

          <li><a class="fancybox" rel="group" href="assets/portfolio/images/1-large.jpg"><img src="assets/portfolio/images/1.jpg" alt=""></a></li>
          <li><a class="fancybox" rel="group" href="assets/portfolio/images/2-large.jpg"><img src="assets/portfolio/images/2.jpg" alt=""></a></li>
          <li><a class="fancybox" rel="group" href="assets/portfolio/images/3-large.jpg"><img src="assets/portfolio/images/3.jpg" alt=""></a></li>
          <li><a class="fancybox" rel="group" href="assets/portfolio/images/4-large.jpg"><img src="assets/portfolio/images/4.jpg" alt=""></a></li>
          <li><a class="fancybox" rel="group" href="assets/portfolio/images/5-large.jpg"><img src="assets/portfolio/images/5.jpg" alt=""></a></li>
          <li><a class="fancybox" rel="group" href="assets/portfolio/images/6-large.jpg"><img src="assets/portfolio/images/6.jpg" alt=""></a></li>
          <li><a class="fancybox" rel="group" href="assets/portfolio/images/7-large.jpg"><img src="assets/portfolio/images/7.jpg" alt=""></a></li>
          <li><a class="fancybox" rel="group" href="assets/portfolio/images/8-large.jpg"><img src="assets/portfolio/images/8.jpg" alt=""></a></li>
        </ul>

      </div>
    </div>
  </section>

  <section class="about_wrapper">
    <div class="container">
      <div class="row">

        <div class="vertical_space"></div>


        <div class="col-md-9 col-sm-9 os-animation">
          <h3 class="section_heading">Vision, Mission and Objectives</h3>

          <div class="devider">
            <div class="icon-green">
              <div class="white-icon"></div>
            </div>
          </div>

          <div class="vertical_space"></div>
          <h4 class="section_heading">Vision</h4>
          <p> This dynamic Office with a staff of professionally trained and competent counselors boasts of a program designed to maximize the students’ potentials to become self-directive and productive citizens of society. </p>
          <h4 class="section_heading">Mission</h4>
          <p>The Guidance and Counseling Office is committed to:</p>
          <p>*Implement effective and viable guidance programs for the University;</p>
          <p>*Maintain a close and harmonious coordination with all its units, faculty, and administration for the total development of their constituents;</p>
          <p>*Pursue a continuing personal and professional development of its counselors and staff; and</p>
          <p>*Establish linkages with other guidance institutions, non-government organizations and other universities with similar vision and mission.</p>
          <h4 class="section_heading">Objectives</h4>
          <p>The Guidance and Counseling Office is composed of professional workers who apply modern techniques of education for the direct benefit of the students, faculty and administration in meeting their needs to maximize their development. The Office, however, does not limit its duties to this activity but is, likewise engaged in basic research designed to increase its own effectiveness in rendering services and carry out its objectives.</p>
          <h4 class="section_heading">General Objectives</h4>
          <p>Through the Guidance and Counseling Office, the University offers a broad spectrum of counseling and psychological services designed to assist students in mobilizing their creative energies and achieving more effective personal, social, emotional, spiritual, educational, and vocational development, The Office specially aims:</p>
          <p>*To help the students achieve the maximum level of their potentials thereby; enabling them to contribute their share to society;</p>
          <p>*To assist the students in meeting and solving their own problems as they make correct interpretation of facts that lead to wise choices and needed adjustments;</p>
          <p>*To enable the students to enjoy a well-balanced life in all its aspects - physical, mental, emotional and social.</p>
          <p class="section_heading">These objectives are realized in general through:</p>
          <p>*Securing information that the student need:</p>
          <p>*Developing positive habits, techniques, attitudes, ideals, and interest;</p>
          <p>*Offering wise counsel for students to make choices, adjustments and interpretations.</p>
        </div>


      </div>
    </div>



  </section>

  <section class="about_wrapper">
    <div class="container">
      <div class="row">

        <div class="vertical_space"></div>


        <div class="col-md-9 col-sm-9 os-animation">
          <h3 class="section_heading">History</h3>

          <div class="devider">
            <div class="icon-green">
              <div class="white-icon"></div>
            </div>
          </div>

          <div class="vertical_space"></div>

          <p> The Guidance and Counseling Office does not claim to be as old as the university. It was initiated only in the early 50's when PUP was then the old PCC with a small enrollment. While the code identified its functions, the Office did not have any well-defined structure and program. Faculty members assigned to the Office of Student Affairs acted as counselors but lacked the training and skills necessary for the job. Much of the work they performed concerned problems on discipline, student failures and the issuance of re-admission slips for absences. Upon the declaration of Martial Law, PCC, a hotbed of student activism, was ordered closed by President Ferdinand E, Marcos. A series of seminars were conducted for the faculty and staff of the college to orient them on the thrust of the New Society and after three months, the school was allowed to re-open. The Guidance Office remained closed and the faculty counselors were put on full time teaching. Dr. Pablo T. Mateo was named Officer-in-Charge of PCC. The Guidance Office was revived with only two counselors, one of whom was assigned to the newly acquired Sta. Mesa, Campus. The head of the student affairs was concurrently designated as Chairman of the Department of Arts and Sciences. Reorganization started and the Guidance Office was placed under the Registrar’s Office. </p>

          <p>In 1974, the individual problems of the students regarding guidance and counseling became the responsibility of their respective department heads. This was the result of the administration’s restructuring of the College organization set-up. When Isabelo T. Crisostomo was appointed Acting President in that same year, the Guidance and Counseling Office began to play a more significant role. The Office acted as adviser on student needs and problems when it was re-organized into a center directly under the Office of the President. It was when the Chief of Guidance became the Director of Guidance and Counseling that the Guidance Office gained its own identity and stood on its own ground. New counselors with the degree in psychology were designated to help the Director implement its program. This was the time that the College Entrance Test was constructed to screen an ever-growing number of freshmen applicants. New departments were created to offer relevant courses and new buildings sprouted in the Sta. Mesa Campus.
          </p>

          <p>In 1977, Dr. Pablo T. Mateo replaced President Isabelo T. Crisostomo. This did not change the status of the Office, which continued its functions and extended its services to the services to the PUP Laboratory High School. It was during Dr. Mateo’s term that the PCC was converted into a University. The Guidance Office was once more placed under the Dean of Student Services.</p>

          <p>In 1986, Dr. Nemesio E. Prudente was reinstated as PUP President after the EDSA I Revolution. His all-out support to the Guidance and Counseling Office in the University paved the way for the full existence and development of the Office. The University Guidance and Counseling Office at the Unyon ng Mag-aaral Building developed into a very significant part of the University supporting the President’s thrust to coordinate with other units and departments toward the total development of the students and the redirection of their outlook in life. The office started to organize the peer facilitators group which served as the extension arm of the guidance counselors in assisting the students in the solution of their problems.</p>

          <p>Before Dr. Prudente’s term ended, the University Guidance and Counseling Office transferred to its new home at the South Wing’s 5th Floor. The Office also started to extend its testing services to other government agencies for the hiring of the rank-and-file and the promotion of supervisory applicants. These testing services were made possible under Memorandum of Agreements between the Bagong katipunan Foundation and government agencies such as the Department of Science and Technology (DOST), National Dairy Authority, Philippine Carabao under the Department of Agriculture and Philippine Retirement Authority. The latest addition to the list of government agencies is the Commission on Higher Education (2004).</p>

          <p>Upon the retirement of Dr. Prudente in 1992, former Pres. Corazon C. Aquino appointed Dr. Jaime Gellor as Acting University President. Dr. Gellor appointed new sets of university officials including the chief of the Guidance and Counseling Office. However, the appointment of the Chief lasted for fiteen (15) days only due to the community protests against the appointment of Dr. Gellor.</p>

          <p>Dr. Gellor was immediately succeeded by Dr. Zenaida A. Olonan. The then Chief of the Guidance and Counseling Office requested that the Office be transferred to the Ground Floor of North Wing facing the interfaith Chapel to reach out to more students and thus make the program available to them. The continuously promoted the different services available through Guidance Awareness Week, orientation programs, bulletin board displays and distribution of its office brochures.</p>

          <p>The retirement of Dr. Olonan in 1998 led to the appointment of Dr. Ofelia M. Carague as the University President. It was during her term that the Guidance and Counseling Office was transferred to the 2nd Floor of the Student Development Center (Formerly Unyon ng Mag-aaral Building). The Guidance Counselors with degrees in Counseling Psychology or have earned units in guidance were hired. To enhance and update their knowledge in the field of guidance and counseling, the Guidance Counselors attend seminars, workshops, convocations and training programs sponsored by different professional organizations. As part of its student services, the Guidance and Counseling also conducts and co-sponsors seminars, workshops and training programs.</p>

          <p>As the University celebrated its centenary, Acting President Samuel M. Salvador’s administration gave more attention and ample support to most of the projects of the Office. Likewise, under the newly installed Officer-In-Charge of PUP, Dr. Dante G. Guevarra, the Guidance and Counseling Office continues to serve not only the students, but the PUP community as a whole. The Office offers the students effective guidance and counseling by providing them a channel for expressing their difficulties and assisting them as they look for solutions to their problems. In this manner, students now find PUP a very conductive place for growth and development. It was November 2, 2006 when Dr. Dante S. Guevarra became Acting President. The Guidance and Counseling Office submitted and proposed to add the guidance fee on the miscellaneous. The said guidance fee was approved last April 19, 2007 Board Meeting held at Sulo Hotel Quezon City. This will signal the full implementation of the different guidance programs.</p>
        </div>


      </div>
    </div>



  </section>


  <section class="about_wrapper">
    <div class="container">
      <div class="row">

        <div class="vertical_space"></div>


        <div class="col-md-9 col-sm-9 os-animation">
          <h3 class="section_heading">Services</h3>

          <div class="devider">
            <div class="icon-green">
              <div class="white-icon"></div>
            </div>
          </div>

          <div class="vertical_space"></div>
          <h4 class="section_heading">Counseling Service</h4>
          <p> This is the heart of Guidance. It aims to assist the student to make a realistic appraisal of his interest, abilities and aptitudes as gathered from preliminary interviews and to arrive at an educational adjustment or solution to his problems.
          Effective counseling makes a student adjust better in his school, home and community; thus he develops the maturity to view life objectively and gain a better insight into his own conduct so that he may solve his problem. </p>
          <h4 class="section_heading">Information Service</h4>
          <p>Orientation and information are given to help the students get acquainted with their new school environment, the school staff, the demands of college life, and the nature and requirements of the course. Through the dissemination of pertinent information, particularly cumulative sheets as bases for counseling, assessment and research, they may broaden their learning experiences.</p>
          <h4 class="section_heading">Individual Inventory Service</h4>
          <p>Collecting, recording and utilizing information about the students are done through the accomplishment of the Personal Data Sheet (PDS) or the Cumulative Record, results of psychological tests and previous interviews. The data gathered can be used as basis for counseling.</p>
          <h4 class="section_heading">Peer-Facilitators</h4>
          <p>This program is designed to reach out to as many students as possible. With the sound principle that students relate best with their peers, the Guidance Office utilizes students in the task of redirecting others. A number of qualified students are trained to become peer facilitators. They assist the guidance personnel in implementing the different guidance programs. The peer facilitators help facilitate growth groups or group guidance sessions.</p>
          <h4 class="section_heading">Research and Evaluation Service</h4>
          <p>This part of the program helps the unit in identifying the services or activities that require attention to be strengthened or to be offered. Likewise, it facilitates evaluation of the unit progress and services.</p>
          <h4 class="section_heading">Testing Services</h4>
          <p>Psychological tests are given to students or classes needing them. Tests help to measure a sample of students’ interest, mental ability, aptitudes, academic achievement, personality and adjustment. Tests results are interpreted to students for purposes of greater self-awareness, self-understanding and career planning.</p>
          <h4 class="section_heading">Follow-Up Service</h4>
          <p>The progress of the underachievers and students with failing grades are followed up in terms of their low academic performance and poor study skills. Achievers or scholars are also followed up in terms of their academic progress and personal adjustment. This service hopes to help underachievers cope with strong pressures, temporary disappointments or frustrations. Serious cases of mental and physical problems are referred to the family.</p>
          <h4 class="section_heading">Other Services</h4>
          <p>Seminars, workshops, lectures, training programs that will help students, faculty and administration are programmed. These services are designed for students with or without problem so that they can gain greater understanding of themselves and the world around them. Such will result in greater self-improvement and self-realization.</p>
        </div>


      </div>
    </div>



  </section>

  <section class="about_wrapper">
    <div class="container">
      <div class="row">

        <div class="vertical_space"></div>


        <div class="col-md-9 col-sm-9 os-animation">
          <h3 class="section_heading">Officials and Staffs</h3>

          <div class="devider">
            <div class="icon-green">
              <div class="white-icon"></div>
            </div>
          </div>

          <div class="vertical_space"></div>
          <h4 class="section_heading">Counseling Service</h4>
          <img src="assets/img/officialpup.jpg"  alt="">
          <p> Barbara P. Camacho
            <br>
            Chief
            <br>
            Associate Professor II
            <br>
            Master in Psychology major in Counseling Psychology PUP
            <br>
          Specialization: Psychology/Counseling </p>

          <h4 class="section_heading">Guidance Counselors</h4>
          <p> Yolanda F. Rabe
            <br>
            Faculty Assistant, Guidance Counselor
            <br>
            Master of Arts in Education major in Guidance and Counseling PUP 
            <br>
          Lyceum Specialization: Psychology/Counseling </p>

          <p> Flordeliza E. Alvendia
            <br>
            Administrative Officer II, assigned as Guidance Counselor
            <br>
            Master of Arts in Psychology PUP
            <br>
          Specialization: Psychology, Counseling</p>

          <p> Cielito B. Buhain
            <br>
            Guidance Counselor
            <br>
            Master of Arts in Psychology PUP
            <br>
          Specialization: Psychology, Counseling</p>

          <p> Jimmy P. Dollaga
            <br>
            Administrative Officer II, designated as Guidance Counselor
            <br>
            Master of Arts in Psychology (18 units) PUP
            <br>
          Specialization : Psychology, Counseling</p>

          <p> Rose Helen T. Merza
            <br>
            Guidance Counselor, Psychometrician
            <br>
            Master of Arts in Guidance Manuel L. Quezon University
            <br>
          Specialization: Counseling</p>

          <h4 class="section_heading">Support Staff</h4>
          <p> Ma. Suraida R. Dela Cruz
            <br>
          Clerk</p>

        </div>


      </div>
    </div>



  </section>

  <!--Interests and Hobbies end here-->

  <!--contact wrapper Start Here-->
  <section class="contact_wrapper">
   <div class="container">
     <div class="row">
       <p class="section_heading">Polytechnic University Of The Philippies</p>
       <div class="col-md-3 col-sm-6 os-animation">
         <div class="contact_address">
           <h3>Contact Information</h3>
           <h3>Email</h3>
           <p>guidance@pup.edu.ph</p>
           <h3>Postal Mail</h3>
           <p>Guidance, Counseling and Testing Services
            2/F Charlie del Rosario Student Development Center
            PUP A. Mabini Campus, Anonas St., Sta. Mesa
          Manila, Philippines 1016</p>
          <h3>Telephone</h3>
          <p>(63 2) 335-1PUP (335-1787) or 335-1777 local 321</p>
        </div>
      </div>

                             	 <!--<div class="col-md-9 col-sm-6 os-animation" data-os-animation="slideInUp" data-os-animation-delay="0s">
                                 	<h3>Contact form</h3>
                                    <div class="form-group">
                                    	<input type="text" class="form-control" placeholder="Name">
                                        <input type="email"  class="form-control" placeholder="Email">
                                        <input type="tel"   class="form-control" placeholder="Phone">
                                        <textarea  class="form-control textarea" rows="5" placeholder="Message"></textarea>
                                        <button type="submit" class="submit">Send</button>
                                    </div>
                                  </div>-->

                                </div>
                              </div>
                            </section>     		
                            <!--contact wrapper Start Here-->     

                            <!--Middle Wrapper End Here-->

                            <!--Footer Wrapper Start Here-->       
            <!-- <footer class="footer_wrapper">
                 <div class="container">
                    <div class="row os-animation" data-os-animation="slideInLeft" data-os-animation-delay="0s">
                         <a href="" class="social-icon"><i class="fa fa-facebook"></i></a>
                         <a href="" class="social-icon"><i class="fa fa-twitter"></i></a>
                         <a href="" class="social-icon"><i class="fa fa-linkedin"></i></a>
                         <p>© 2015 - All rights reserved | Developed by NavThemes</p>
                    </div>
                 </div>
               </footer>-->
               <!--Footer Wrapper End Here-->    

             </main>
             <!--main container End Here-->



             <!--PRE LOADER HERE-->
             <div id="pre-loader">
              <div class="spinner">
                <div class="double-bounce1"></div>
                <div class="double-bounce2"></div>
              </div>
            </div> 


            <!-- Portfolio js -->
            <script src="assets/portfolio/js/masonry.pkgd.min.js"></script>
            <script src="assets/portfolio/js/imagesloaded.js"></script>
            <script src="assets/portfolio/js/classie.js"></script>
            <script src="assets/portfolio/js/AnimOnScroll.js"></script>
            <script>
             new AnimOnScroll( document.getElementById( 'grid' ), {
              minDuration : 0.4,
              maxDuration : 0.7,
              viewportFactor : 0.2
            } );
          </script>


          <!-- FancyBox -->
          <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

          <script src="assets/fancybox/js/jquery.fancybox.js"></script>
          <script src="assets/fancybox/js/jquery.fancybox-buttons.js"></script>
          <script src="assets/fancybox/js/jquery.fancybox-thumbs.js"></script>
          <script src="assets/fancybox/js/jquery.easing-1.3.pack.js"></script>
          <script src="assets/fancybox/js/jquery.mousewheel-3.0.6.pack.js"></script>

          <script type="text/javascript">
            $(document).ready(function() {
              $(".fancybox").fancybox();
            });
          </script>


          <!-- Custom js -->
          <script src="assets/custom/js/custom.js"></script>


          <!-- Way Point -->
          <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.4/waypoints.min.js"></script>



        </body>
        </html>