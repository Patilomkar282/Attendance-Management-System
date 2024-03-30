<?php

ob_start();
session_start();

if($_SESSION['name']!='oasis')
{
  header('location: ../index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<!-- head started -->
<head>
<title>Online Attendance Management System 1.0</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../css/main.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
   
   <!-- Optional theme -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >


<link rel="stylesheet" href="styles.css" >
<link rel="stylesheet" href="../css/allstyle.css" >


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style type="text/css">

  .message{
    padding: 10px;
    font-size: 15px;
    font-style: bold;
    color: black;
  }
</style>



</head>
<!-- head ended -->

<!-- body started -->
<body>

<!-- Menus started-->
<header>
<div class="top">
  <img src="../img/smlogo.webp">
<h2>Marathwada Mitra Mandal's College of Engineering,Karvenagar,Pune</h2>
  </div>

  <h1>Online Attendance System</h1>
  <div class="navbar">
  <a href="../logout.php">Logout</a>
  <a href="account.php">My Account</a>
  <a href="report.php">My Report</a>
  <a href="students.php">Students</a>
  <a href="index.php">Home</a>
 
  
 
  

</div>

</header>
<!-- Menus ended -->

<center>

<!-- Content, Tables, Forms, Texts, Images started -->
<div class="row">
    <div class="content">
      <p>Be attentive and be regular :)</p>
    <img src="../img/tcr.png" height="200px" width="300px" />

  </div>

</div>
<!-- Contents, Tables, Forms, Images ended -->

</center>

</body>
<!-- Body ended  -->
<footer>
        <div class="footer-content">
            <p>&copy; 2024 Attendance Management System</p>
        </div>
    </footer>

</html>
