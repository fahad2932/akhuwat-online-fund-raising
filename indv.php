<?php

session_start();
if(!isset($_SESSION['username'])){

    header('location:indvlogin.php');
}
?>

<html>
    <head>
        <a href="https://www.flaticon.com/free-icons/number-1" title="number 1 icons"></a>
        <link rel="stylesheet" type ="text/css" href="home.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
    <title>Welcome to AKHUWAT Charity</title>
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
                            
                            <a href="registerFund.html">Register your fundraiser</a>
                            <a href="charityportal.html">Your Portal</a>
                          </div>
                    <li class="dropdown">
                        <a href="javascript:void(0)" class="dropbtn">Sign In</a>
                        <div class="dropdown-content">
                          <a href="adminLogin.php">Admin</a>
                          <a href="login.html">Individual</a>
                         
                        </div>
                    <li><a href="Contact.html">Contact Us</a></li>
                    <li class="btn btn-primary" ><a href="indvlogout.php">Logout</a></li>
                </ul>
            </div>
        </section>

        <h2>Individual Portal: Welcome <?php
        echo $_SESSION['username'];
        ?></h2>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </body>
</html>