<?php
  session_start();
 $_SESSION['email']="no";
 $_SESSION['stud']="no";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Internshala</title>
</head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style type="text/css">
      .container1 {
        position: relative;
        text-align: center;
        color: white;
      }
      .centered1 {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
      }
  </style>
<body>
  <!-- Header Start -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item active" style="padding-left: 102px;">
                  <a class="navbar-brand" href="index.php">
                    <img src="./images/internshala_logo.svg" width="100" height="40" alt="">
                  </a>
              </li>
          </ul>
      </div>
      <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav mr-auto" style="padding-left: 12px;">
          <li class="nav-item dropdown" style="padding-left: 12px;">
            <a class="nav-link dropdown-toggle" href="Internships.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              <b>INTERNSHIPS</b>
            </a>
            <div class="dropdown" aria-labelledby="navbarDropdown">
                <ul class="dropdown-menu">
                  <li class="dropdown-header"><h6>Location</h6><hr></li>
                  <li class="dropdown-header"><a href ="internships.php">Delhi</a></li>
                  <li class="dropdown-header"><a href ="internships.php">Bangalore</a></li>
                  <li class="dropdown-header"><a href ="internships.php">Chennai</a></li>
                  <li class="dropdown-header"><a href ="internships.php">Kolkata</a></li>
                </ul>
            </div>
          </li>
          <li class="nav-item dropdown" style="padding-left: 12px;">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              <b>ONLINE WINTER TRANINGS </b><span style="background-color: orange; font-size: 10px;">OFFER</span>
            </a>
            <div class="dropdown" aria-labelledby="navbarDropdown">
              <ul class="dropdown-menu">
                <li class="dropdown-header"><h6>Programming</h6></li><hr>
                <li class="dropdown-header"><a href ="internships.php">Web Development</a></li>
                <li class="dropdown-header"><a href ="internships.php">Android App Development</a></li>
                <li class="dropdown-header"><a href ="internships.php">Programming with Python</a></li>
                <li class="dropdown-header"><a href ="internships.php">Data Science</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item" style="padding-left: 12px;">
            <div class="dropdown">
              <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><a href ="register.php" style="text-decoration: none; text-decoration: white; color: white;">LOGIN</a>
              <span class="caret"></span></button>
              <ul class="dropdown-menu">
                <li class="dropdown-header"><a href ="login.php">Student</a></li>
                <li class="dropdown-header"><a href ="elogin.php">Employer</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item dropdown" style="padding-left: 20px;">
            <div class="dropdown">
              <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><a style="text-decoration: none; text-decoration: white; color: white;">REGISTER</a>
              <span class="caret"></span></button>
              <ul class="dropdown-menu">
                <li class="dropdown-header"><a href="register.php">As a Student</a></li>
                <li class="dropdown-header"><a href="register.php">As a Employer</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
  </nav>
<!-- Header End -->

<!-- Image Slider -->

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="./images/home_img2.jpg">
        <a class="carousel-control-prev" style="width: 100%;">
          
        </a>
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="./images/home_img1.jpg">
         <a class="carousel-control-prev" style="width: 45%;">
          <h6><b>Online Winter Trainings</b></h6><!--  Used to write on Image-->
        </a>
      </div>
    </div>
  </div>

<!-- Image Slider End -->
  <!-- Middle Page -->
  <div style="padding: 10px;"><center> <font style="font-size: 20px;"> Internships in popular cities </font></center></div>
  <div class="row" style="padding-bottom: 20px; padding-left: 100px; padding-right: 100px;">
    <div class="col-sm-2 container1">
      <img src="images\Internships_citys\workfromhome.jpg" style="width: 80%;">
      <div class="centered1"><b>WORK FROM HOME</b></div>
    </div>
    <div class="col-sm-2 container1">
      <img src="images\Internships_citys\city_mumbai_new.jpg" style="width:80%">
      <div class="centered1"><b>MUMBAI</b></div>
    </div>
    <div class="col-sm-2 container1">
      <img src="images\Internships_citys\city_delhi_new.jpg" style="width:80%">
      <div class="centered1"><b>DELHI NCR</b></div>
    </div>
    <div class="col-sm-2 container1">
      <img src="images\Internships_citys\city_chennai_new.jpg" style="width:80%">
      <div class="centered1"><b>CHENNAI</b></div>
    </div>
    <div class="col-sm-2 container1">
      <img src="images\Internships_citys\city_bangalore_new.jpg" style="width:80%">
      <div class="centered1"><b>BANGALORE</b></div>
    </div>
    <div class="col-sm-2 container1">
      <img src="images\Internships_citys\city_international_new.jpg" style="width:80%">
      <div class="centered1"><b>INTERNATIONAL</b></div>
    </div>
  </div>
<!-- internship in popular category -->
  <div style="padding: 10px;"><center> <font style="font-size: 20px;"> Internships in popular categories </font></center></div>
  <div class="row" style="padding-bottom: 20px; padding-left: 100px; padding-right: 100px;">
    <div class="col-sm-2 container1">
      <img src="images\popular_categories\category_part_time.png" style="width: 80%;">
      <div class="centered1"><b>PART-TIME</b></div>
    </div>
    <div class="col-sm-2 container1">
      <img src="images\popular_categories\category_engineering_new.jpg" style="width:80%">
      <div class="centered1"><b>ENGINEERING</b></div>
    </div>
    <div class="col-sm-2 container1">
      <img src="images\popular_categories\category_mba_new.jpg" style="width:80%">
      <div class="centered1"><b>MBA</b></div>
    </div>
    <div class="col-sm-2 container1">
      <img src="images\popular_categories\category_science_new.jpg" style="width:80%">
      <div class="centered1"><b>SCIENCE</b></div>
    </div>
    <div class="col-sm-2 container1">
      <img src="images\popular_categories\category_design_new.jpg" style="width:80%">
      <div class="centered1"><b>DESIGN</b></div>
    </div>
    <div class="col-sm-2 container1">
      <img src="images\popular_categories\category_humanities_new.jpg" style="width:80%">
      <div class="centered1"><b>HUMANITIES</b></div>
    </div>
  </div>
  <div style="font-size: 20px; padding: 10px;"> <center>or
        <a href="/internships">view all internships <font style="font-family: cursive; text-underline-position: none;"><b>></b></font> </a></center>
        <br>
        <hr>
  </div>
  <!-- Internshala Trainings -->
  <div class="container" style="padding: 10px;">
    <center><h3>Internshala Trainings</h3></center><br>
    <div class="row justify-content-md-center">
      <div class="col-md-auto" style="width: 20%;">
        <a href="#" style="text-decoration: none;">
          <div class="shadow p-3 mb-5 bg-white rounded">
            <center>
              <img src="images\Trainings\webdev101.jpg" style="width: 100%;">
              <font style="color: skyblue;text-decoration-style: bold;"> Web Development</font><br>
              <font style="color: black;">Build an e-commerce website from scratch</font><br>&nbsp;
            </center>
          </div>
        </a>
      </div>
      <div class="col-md-auto" style="width: 20%;">
        <a href="#" style="text-decoration: none;">
          <div class="shadow p-3 mb-5 bg-white rounded">
            <center>
              <img src="images\Trainings\python.jpg" style="width: 100%;">
              <font style="color: skyblue;text-decoration-style: bold;"> Python</font><br>
              <font style="color: black;">Build a fantasy cricket game using Python language</font>
            </center>
          </div>
        </a>
      </div>
      <div class="col-md-auto" style="width: 20%;">
        <a href="#" style="text-decoration: none;">
          <div class="shadow p-3 mb-5 bg-white rounded">
            <center>
              <img src="images\Trainings\hacking.jpg" style="width: 100%;">
              <font style="color: skyblue;text-decoration-style: bold;"> Ethical Hacking</font><br>
              <font style="color: black;">Learn to hack and secure web applications</font>
            </center>
          </div>
        </a>
      </div>
      <div class="col-md-auto" style="width: 20%; ">
        <a href="#" style="text-decoration: none;">
          <div class="shadow p-3 mb-5 bg-white rounded">
            <center>
              <img src="images\Trainings\marketing101.jpg" style="width: 100%;">
              <font style="color: skyblue;text-decoration-style: bold;">Digital Marketing</font>
              <font style="color: black;">Learn SEO, email marketing, web analytics and more.</font>
            </center>
          </div>
        </a>
      </div>
    </div>
  </div>
  <div>
    <center>
      <button class="btn my-2 my-sm-0 btn-primary">View all training programs</button>
    </center><br>
    <hr style="border: 1px solid gray;">
  </div>
  <!-- Articles -->

  <div class="container" style="padding: 10px; ">
    <center><h3>Top Articles of the Month</h3></center><br>
    <div class="row justify-content-md-center" style="padding:0px;">
      <div class="col-lg-6" style="width: 40%;">
        <a href="#" style="text-decoration: none;">
          <div class="shadow p-3 mb-5 bg-white rounded" style="padding: 0px;">
            <div class="row" style="padding: 0px;">
              <div class="col-6">
                <img src="images\Articles\article_1.png" style="width: 100%;">
              </div>
              <div class="col-6" style="display:table-cell; vertical-align:middle;">
                <font style="color: black; font-size: 20px;">
                  What is an internship and how to get one – The complete handbook!
                </font>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-6" style="width: 40%;">
        <a href="#" style="text-decoration: none;">
          <div class="shadow p-3 mb-5 bg-white rounded" style="padding: 0px;">
            <div class="row" style="padding: 0px;">
              <div class="col-6">
                <img src="images\Articles\article_2.png" style="width: 100%;">
              </div>
              <div class="col-6" style="display:table-cell; vertical-align:middle;">
                <font style="color: black; font-size: 20px;">
                  What is an internship and how to get one – The complete handbook!
                </font>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-6" style="width: 40%;">
        <a href="#" style="text-decoration: none;">
          <div class="shadow p-3 mb-5 bg-white rounded" style="padding: 0px;">
            <div class="row" style="padding: 0px;">
              <div class="col-6">
                <img src="images\Articles\article_3.png" style="width: 100%;">
              </div>
              <div class="col-6" style="display:table-cell; vertical-align:middle;">
                <font style="color: black; font-size: 20px;">
                  Common interview questions and how to answer them
                </font>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-lg-6" style="width: 40%;">
        <a href="#" style="text-decoration: none;">
          <div class="shadow p-3 mb-5 bg-white rounded" style="padding: 0px;">
            <div class="row" style="padding: 0px;">
              <div class="col-6">
                <img src="images\Articles\article_4.png" style="width: 100%;">
              </div>
              <div class="col-6" style="display:table-cell; vertical-align:middle;">
                <font style="color: black; font-size: 20px;">
                  Part-time jobs for students – How to work while in college
                </font>
              </div>
            </div>
          </div>
        </a>
      </div>
    </div>
  </div>

  <div style="font-size: 20px; padding: 10px;"> <center>
        <a href="/internships"> View more articles <font style="font-family: cursive; text-underline-position: none;"><b>></b></font> </a></center>
        <br>
  </div>


  <!-- Midddle Page End-->
  <!-- Footer  start-->
  <footer class="page-footer font-small blue pt-4 bg-dark text-white">
    <div class="container-fluid text-center text-md-left">
      <div class="row">
        <div class="col-md-3 mt-md-0 mt-3" style="padding-left: 100px;">
            <h5 class="text-uppercase">Internships by places</h5>
            <ul class="list-unstyled">
              <li><a href="internships.php"style="color: white;">Internship in India</a></li>
              <li><a href="internships.php"style="color: white;">Internship in Delhi</a></li>
              <li><a href="internships.php"style="color: white;">Internship in Bangalore</a></li>
              <li><a href="internships.php"style="color: white;">Internship in Hyderabad</a></li>
              <li><a href="internships.php"style="color: white;">Internship in Mumbai</a></li>
              <li><a href="internships.php"style="color: white;">Internship in Chennai</a></li>
              <li><a href="internships.php"style="color: white;">Internship in Gurgaon</a></li>
              <li><a href="internships.php"style="color: white;">Internship in Kolkata</a></li>
              <li><a href="internships.php"style="color: white;">Virtual internship</a></li>
            </ul>
        </div>
        <hr class="clearfix w-100 d-md-none pb-3">
        <div class="col-md-3 mt-md-0 mt-3" style="padding-left: 100px;">
            <h5 class="text-uppercase">Internship by Stream</h5>
            <ul class="list-unstyled">
              <li><a href="internships.php"style="color: white;">Computer Science Internship</a></li>
              <li><a href="internships.php"style="color: white;">Electronics Internship</a></li>
              <li><a href="internships.php"style="color: white;">Mechanical Internship</a></li>
              <li><a href="internships.php"style="color: white;">Civil Internship</a></li>
              <li><a href="internships.php"style="color: white;">Marketing Internship</a></li>
              <li><a href="internships.php"style="color: white;">Chemical Internship</a></li>
              <li><a href="internships.php"style="color: white;">Finance Internship</a></li>
              <li><a href="internships.php"style="color: white;">Summer Research Fellowship</a></li>
              <li><a href="internships.php"style="color: white;">Campus Ambassador Program</a></li>
            </ul>
        </div>
        <div class="col-md-3 mt-md-0 mt-3" style="padding-left: 100px;">
            <h5 class="text-uppercase">Online Winter Trainings <span style="background-color: orange; font-size: 10px;">OFFER</span></h5>
            <ul class="list-unstyled">
              <li><a href="#"style="color: white;">Web Development</a></li>
              <li><a href="#"style="color: white;">Android App Development</a></li>
              <li><a href="#"style="color: white;">Programming with Python</a></li>
              <li><a href="#"style="color: white;">Data Science</a></li>
              <li><a href="#"style="color: white;">Ethical Hacking</a></li>
              <li><a href="#"style="color: white;">Core Java</a></li>
              <li><a href="#"style="color: white;">Digital Marketing</a></li>
              <li><a href="#"style="color: white;">Advance Excel</a></li>
              <li><a href="#"style="color: white;">Programming with C & C++</a></li>
            </ul>
        </div>
        <div class="col-md-3 mt-md-0 mt-3" style="padding-left: 100px;">
            <h6 class="text-uppercase">About Internshala</h6>
            <ul class="list-unstyled">
              <li><a href="#"style="color: white;">About us</a></li>
              <li><a href="#"style="color: white;">We're hiring</a></li>
              <li><a href="#"style="color: white;">Hire interns for your company</a></li>
              <li><a href="#"style="color: white;">Team Diary</a></li>
              <li><a href="#"style="color: white;">Blog</a></li>
              <li><a href="#"style="color: white;">Our Services</a></li>
              <li><a href="#"style="color: white;">Terms & Conditions</a></li>
              <li><a href="#"style="color: white;">Privacy</a></li>
              <li><a href="#"style="color: white;">Contact us</a></li>
              <li><img src="images/google_play_store_button.svg" style="width: 100px;height: 40px; "></li>
            </ul>
        </div>
      </div>
    </div>
    <hr style="background-color: white; width: 90%;">
    <div class="footer-copyright text-center py-3" style="text-align-last: right; padding-right: 5%;">
      <a href="index.php" style="color: white;">© Copyright 2019 Internshala</a>
    </div>
  </footer>
<!-- footer end -->
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</html>
