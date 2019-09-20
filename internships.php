<?php
  session_start();
  if($_SESSION['email']){
    $var_value = $_SESSION['email'];
    $std = $_SESSION['stud'];
  }
  //session_destroy();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Internshala</title>
</head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<body>
  <!-- Header Start -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item active" style="padding-left: 102px;">
                  <a class="navbar-brand" href="index.php">
                    <img src="images/internshala_logo.svg" width="100" height="40" alt="">
                  </a>
              </li>
          </ul>
      </div>
      <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
        <ul class="navbar-nav mr-auto" style="padding-left: 12px;" href="internships.php">
          <li class="nav-item dropdown" style="padding-left: 12px;">
            <a class="nav-link dropdown-toggle" href="Internships.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              <b>INTERNSHIPS</b>
            </a>
            <div class="dropdown" aria-labelledby="navbarDropdown">
                <ul class="dropdown-menu">
                  <li class="dropdown-header"><h6>Location</h6><hr></li>
                  <li class="dropdown-header"><a href ="#">Delhi</a></li>
                  <li class="dropdown-header"><a href ="#">Bangalore</a></li>
                  <li class="dropdown-header"><a href ="#">Chennai</a></li>
                  <li class="dropdown-header"><a href ="#">Kolkata</a></li>
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
                <li class="dropdown-header"><a href ="#">Web Development</a></li>
                <li class="dropdown-header"><a href ="#">Android App Development</a></li>
                <li class="dropdown-header"><a href ="#">Programming with Python</a></li>
                <li class="dropdown-header"><a href ="#">Data Science</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item dropdown" style="padding-left: 12px;">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
              <b>LOGIN / REGISTER</b>
            </a>
            <div class="dropdown" aria-labelledby="navbarDropdown">
              <ul class="dropdown-menu">
                <li class="dropdown-header"><a href ="register.php">Register as a Student</a></li>
                <li class="dropdown-header"><a href ="register.php">Register as a Employer</a></li>
                <?php
                if($_SESSION['email'] != 'no'){
                  echo '<li class="dropdown-header"><a href ="index.php">Logout</a></li>';
                  } else{
                  echo '<li class="dropdown-header"><a href ="login.php">Student Login</a></li>';
                  echo '<li class="dropdown-header"><a href ="elogin.php">Employer Login</a></li>';
                  }
                ?>
              </ul>
            </div>
          </li>
        </ul>
      </div>
  </nav>
<!-- Header End -->
 <!-- Middle Login Page -->
  <div class="row">
    <div class="col-sm-3" style="background: #F8F9F2;">
      <center>
        <?php 
          $connection = mysqli_connect("localhost", "root", "","internships");
          $getvalue=mysqli_query($connection,"SELECT Employer FROM login where Email_id='$var_value';");
          $see=mysqli_fetch_assoc($getvalue);
          if ($see)
          {
            if($see['Employer']==1){
              echo "<a href='postinternships.php'>Post Internships</a><br><br>";
              echo "<a href='view.php'>View Internships</a>";
            }
          }
        ?>
      </center>
    </div>
    <div class="col-sm-6">
      <div class="container" style="padding: 10px;">
        <center>
          <h3>
          <?php
          $connection = mysqli_connect("localhost", "root", "","internships");
          $sql="SELECT Email FROM internships_view";
          if ($result=mysqli_query($connection,$sql))
          {
            $rowcount=mysqli_num_rows($result);
            print $rowcount;
            mysqli_free_result($result);
          }
          ?> total internships [+]
          </h3>
        </center><br>
        <?php
          $res = mysqli_query( $connection,"select * from internships_view");
          while($row1=mysqli_fetch_assoc($res)){
          ?>
          <div class="row justify-content-md-center">
            <div class="col-md-auto" style="width: 100%; font-size: 20px;">
              <div class="bg-white rounded" style="border-color: black; border: 1px solid gray; padding: 10px;">
                <font style="color: blue;text-decoration-style: bold; font-size: 23px;"><?php echo $row1['Category']; ?></font><br>
                <font style="text-decoration-style: bold; font-size: 20px;"><?php echo $row1['company_name']; ?></font><br>
                <div class="row justify-content-md-center">
                  <div class="col-2">
                    Start Date
                  </div>
                  <div class="col-2">
                    Duration
                  </div>
                  <div class="col-2">
                    Stipend
                  </div>
                  <div class="col-2">
                    Location 
                  </div>
                  <div class="col-2">
                    Apply By
                  </div>
                </div>
                <div class="row justify-content-md-center">
                  <div class="col-2">
                    Immediately
                  </div>
                  <div class="col-2">
                   <?php echo $row1['Duration']; ?>
                  </div>
                  <div class="col-2">₹<?php echo $row1['Stipend'];?>/Month
                  </div>
                  <div class="col-2">
                    <?php echo $row1['Location']; ?> 
                  </div>
                  <div class="col-2">
                    <?php echo $row1['Last_date']; ?>
                  </div>
                </div>
                <div class="text-right">
                    <a href= "internships.php?value=true"> Register</a>
                   <?php
                   $connection = mysqli_connect("localhost", "root", "","internships");
                    $result=mysqli_query($connection,"SELECT * from login where Email_id='$var_value';");
                    $data=mysqli_fetch_assoc($result);
                    if($data) { 
                      $inter =$row1['company_name'];
                      $nam=$data['Name'];
                      $email=$data['Email_id'];
                      $phone=$data['Phone_no'];
                      $emp=$data['Employer'];
                      if($emp == 0){
                        $resu=mysqli_query($connection,"INSERT INTO student (Name, Email, Phone,Internship)SELECT * FROM (SELECT '$nam', '$email', '$phone','$inter') AS tmp
                        WHERE NOT EXISTS (SELECT Name,Internship FROM student WHERE Name='$nam' and Internship='$inter') LIMIT 1;");break;
                      } else{

                      }
                    }
                   ?>
                </a>
                </div>
              </div>
            </div>
          </div><br>
          <?php
        }
        mysqli_close($connection);
      ?>
        </div>
    </div>
    <div class="col-sm-3"></div>
  </div>
  <!-- Footer  start-->
  <footer class="page-footer font-small blue pt-4 bg-dark text-white">
    <div class="container-fluid text-center text-md-left">
      <div class="row">
        <div class="col-md-3 mt-md-0 mt-3" style="padding-left: 100px;">
            <h5 class="text-uppercase">Internships by places</h5>
            <ul class="list-unstyled">
              <li><a href="#"style="color: white;">Internship in India</a></li>
              <li><a href="#"style="color: white;">Internship in Delhi</a></li>
              <li><a href="#"style="color: white;">Internship in Bangalore</a></li>
              <li><a href="#"style="color: white;">Internship in Hyderabad</a></li>
              <li><a href="#"style="color: white;">Internship in Mumbai</a></li>
              <li><a href="#"style="color: white;">Internship in Chennai</a></li>
              <li><a href="#"style="color: white;">Internship in Gurgaon</a></li>
              <li><a href="#"style="color: white;">Internship in Kolkata</a></li>
              <li><a href="#"style="color: white;">Virtual internship</a></li>
            </ul>
        </div>
        <hr class="clearfix w-100 d-md-none pb-3">
        <div class="col-md-3 mt-md-0 mt-3" style="padding-left: 100px;">
            <h5 class="text-uppercase">Internship by Stream</h5>
            <ul class="list-unstyled">
              <li><a href="#"style="color: white;">Computer Science Internship</a></li>
              <li><a href="#"style="color: white;">Electronics Internship</a></li>
              <li><a href="#"style="color: white;">Mechanical Internship</a></li>
              <li><a href="#"style="color: white;">Civil Internship</a></li>
              <li><a href="#"style="color: white;">Marketing Internship</a></li>
              <li><a href="#"style="color: white;">Chemical Internship</a></li>
              <li><a href="#"style="color: white;">Finance Internship</a></li>
              <li><a href="#"style="color: white;">Summer Research Fellowship</a></li>
              <li><a href="#"style="color: white;">Campus Ambassador Program</a></li>
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