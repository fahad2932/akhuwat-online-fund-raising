<?php

$success=0;
$user=0;

 if($_SERVER['REQUEST_METHOD']=='POST')
 {
  include 'connect.php';

$username=$_POST['username'];
$password=$_POST['password'];

$sql="SELECT * FROM `indvLogin` WHERE `username` = '$username'";
$result=mysqli_query($con,$sql);
if($result)
{
  $num=mysqli_num_rows($result);
  if($num>0)
  {
    $user=1;
  }
  else{
    $sql="INSERT INTO `indvLogin` (`username`, `password`) VALUES ('$username', '$password');";

$result=mysqli_query($con,$sql);

if($result)
{
  $success=1;
}
else{
  die(mysqli_error($con)); 
}
  }
}


 }



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="SignUp.css">
    <link rel="stylesheet" type="text/css" href="home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>SignUp Akhuwat</title>
</head>

<div class="full">
<body>

    <section id="header">
        <a href ="#"><img src="finallogo.png" class="start" alt=""></a>
        <div id="name">
            <h1>AKHUWAT</h1>
        </div>
        <div>
            <ul id="navbar">
                <li><a class="active" href="home.html">Home</a></li>
                <li class="dropdown">
                    <a  href="javascript:void(0)" class="dropbtn">For Individuals</a>
                    <div class="dropdown-content">
                      <a href="donate.html">Donate</a>
                      <a href="startaFund.html">Start Fundraising</a>
                      <a href="hiw.html">How AKHUWAT works?</a>
                    </div>
                    <li class="dropdown">
                      <a  href="forCharity.html" class="dropbtn">For Charities</a>
                      <div class="dropdown-content">
                        
                        <a href="forCharity.html">Register your fundraiser</a>
                        <a href="charityportal.html">Your Portal</a>
                      </div>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn">Sign In</a>
                    <div class="dropdown-content">
                      <a href="adminlogin.php">Admin</a>
                      <a href="login.php">Individual</a>
                     
                    </div>
                <li><a href="Contact.html">Contact Us</a></li>
            </ul>
        </div>
    </section>

    <?php

if($user)
{
  echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Sorry!!</strong> The user already exists.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

if($success)
{
  echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> You are successfully signed up.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}


?>



    <section id="signupSection">
        <h1>Akhuwat Sign Up</h1>
        <form action="SignUp.php" method="post" onsubmit="return validatePassword(event)">
            <label for="newUsername">Username:</label>
            <input type="text" id="newUsername" placeholder="Enter your Email" name="username">

            <label for="newPassword">Password:</label>
            <input type="password" id="newPassword" placeholder="Enter your Password" name="password">

            <button id="sign-up" type="submit" value="validatePassword(event)">Sign Up</button>
        </form>
    </section>


    <script src="signup.js" ></script>
    <section id="footer">
        <footer class="footer">
            <div class="footer__addr">
            <a href ="#"><img src="finallogo.png" class="start" alt=""></a>
              <h1 class="footer__logo">AKHUWAT</h1>
                  
              <h2>Address</h2>
              
              <address>
                852-B Milaad St, Block B Faisal Town, Lahore<br>
                    
                <a class="footer__btn" href="mailto:example@gmail.com">Email Us</a>
              </address>
            </div>
            
            <ul class="footer__nav">
              
              
              
              
              <li class="nav__item">
                <h2 class="nav__title">Useful Links</h2>
                
                <ul class="nav__ul">
                  <li>
                    <a href="SignUp.html">Sign Up</a>
                  </li>
                  
                  <li>
                    <a href="hiw.html">About Us</a>
                  </li>
                  
                  <li>
                    <a href="Contact.html">Contact Us</a>
                  </li>
                </ul>
              </li>
            </ul>
            
            <div class="legal">
              <p>&copy; 2023 AKHUWAT. All rights reserved.</p>
              
              <div class="legal__links">
                <span>Made with <span class="heart">♥</span> By Fahad Musa Faizan Zohaib</span>
              </div>
            </div>
          </footer>
        </section>
      <style>
         body {
    overflow-x: hidden;
}
      </style>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</div>

</html>
