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
<head>
<title>Online Attendance System</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../css/main.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
   
   <!-- Optional theme -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >



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
<body>


<header>
<div class="top">
  <img src="../img/smlogo.webp">
<h2>Marathwada Mitra Mandal's College of Engineering,Karvenagar,Pune</h2>
  </div>

  

  <h1>Online Attendance System</h1>
  <div class="navbar">
  <a href="../logout.php">Logout</a>
  <a href="report.php">Report</a>
  <a href="attendance.php">Attendance</a>
  <a href="teachers.php">Faculties</a>
  <a href="students.php">Students</a>
  <a href="index.php">Home</a>
 
  
 
 


</div>

</header>

<center>

<div class="row">
    <div class="content">
      <p>One step solution for your class room :)</p>
    <img src="../img/tcr.png" height="200px" width="300px" />

  </div>

</div>

</center>

</body>
</html>
