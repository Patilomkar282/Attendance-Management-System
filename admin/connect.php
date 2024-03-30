<?php
//establishing connection with database.

$hn="localhost";
$db="attsystem";
$un="root";
$pass="";

$conn=new mysqli($hn,$un,$pass,$db);
if($conn->connect_error) die ($conn->connect_error);
mysqli_select_db($conn,"attsystem");



//mysql_connect('localhost','root','') or die('Cannot connect to server');
//mysql_select_db('attsystem') or die ('Cannot found database');

?>