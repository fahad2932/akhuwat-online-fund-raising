<?php

$success=0;
$invalid=0;

if($_SERVER['REQUEST_METHOD']=='POST'){
    include 'connect.php';
    $username=$_POST['username'];
    $password=$_POST['password'];

    $sql="SELECT * FROM `indvlogin` WHERE `username` = '$username' and `password` = '$password'";
    $result=mysqli_query($con,$sql);

    if($result) 
    {
      $num=mysqli_num_rows($result);
      if($num>0)
      {
        $success=1;
        session_start();
        $_SESSION['username']=$username;
        header('location:indv.php');
      }
      else{
        $invalid=1; 
      }
    }



}



?>






<!DOCTYPE html>
<html lang="en">
<head> 
    <link rel="stylesheet" type="text/css" href="login.css">
    <a href="https://www.flaticon.com/free-icons/number-1" title="number 1 icons"></a>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <link rel="stylesheet" type ="text/css" href="home.css">
    <title>Login - AKHUWAT Charity</title>
</head>
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
                        <a href="#">Link 1</a>
                        <a href="startaFund.html">Start Fundraising</a>
                        <a href="hiw.html">How AKHUWAT works?</a>
                      </div>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn">Sign In</a>
                    <div class="dropdown-content">
                      <a href="adminlogin.html">Admin</a>
                      <a href="login.php">Individual</a>
                     
                    </div>
                <li><a href="Contact.html">Contact Us</a></li>
            </ul>
        </div>
    </section>

    <?php

    if($success)
    {
      echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>Success!</strong> You are successfully logged in.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    
    if($invalid)
    {
      echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
      <strong>Error!</strong> Invalid credentials.
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';
    }
    
    
    
    
    ?>





    <section id="loginSection">
        <h1>Akhuwat Login</h1>
        <form action="login.php" method="post" onsubmit="return validatePassword(event)" >
            <label for="username">Username:</label>
            <input type="text" id="username"  placeholder="Enter your username" name="username">

            <label for="password">Password:</label>
            <input type="password" id="password" placeholder="Enter your password" name="password">

            <div>
                <a href="#forgotPasswordSection">Forgot Password?</a>  
            </div><br>
             
          <button id="login" type="submit" value="validatePassword(event)">Login</button>
        </form>
    </section>

    <div id="signupSection">
        <br>
        <li><a href="SignUp.php"><button class="SU-button">Sign Up</button></a></li>
        
    </div>
    
    <style>
        body
        {
            background-color: rgb(10, 133, 133);
            background-image: url('home.jpeg');
          
        }
        
               </style>

        <script src="login.js"></script>
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
                        <a href="#">Sign Up</a>
                      </li>
                      
                      <li>
                        <a href="#">About Us</a>
                      </li>
                      
                      <li>
                        <a href="#">Contact Us</a>
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
</html>
