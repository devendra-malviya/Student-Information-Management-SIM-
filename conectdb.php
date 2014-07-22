<?php
// Create connection

$server = "";
$username = "root";
$password="";
$database="sim database";

$con=mysqli_connect($server,$username,$password,$database);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  
  }
  
  $firstname='';
  $lastname='';
  $middlename='';
  $fathername='';
  $rollno='';
  $username='fjafjshaf';
  $password='';
  $mothername="";
  $bmonth='';
  $bdate='';
  $byear='';
  $gender='';
  $scontactno='';
  $gcontactno='';
  $category='';
  $email='';
  $paddress='';
  $caddress='';
  
  
  $sql="INSERT INTO student_info VALUES('$firstname', '$middlename', '$lastname', '$fathername', '$mothername', '$rollno', '$username', '$password', '$bmonth', '$bdate', '$byear', '$gender', '$scontactno', '$gcontactno', '$category','$email', '$caddress', '$paddress') 
  ";
  
  mysqli_query($con,$sql);
  
  
  ?>