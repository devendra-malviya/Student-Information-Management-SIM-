<?php
session_start();

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
  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $middlename=$_POST['midname'];
  $fathername=$_POST['fathername'];
  $rollno=$_POST['rollno'];
  $username=$_POST['username'];
  $password=$_POST['pwd'];
  $mothername=$_POST['mothername'];
  $bmonth=$_POST['month1'];
  $bdate=$_POST['date'];
  $byear=$_POST['year'];
  $gender=$_POST['gender'];
  $scontactno=$_POST['studentnumber'];
  $gcontactno=$_POST['guardiannumber'];
  $category=$_POST['category'];
  $email=$_POST['email'];
  $paddress=$_POST['currentaddress'];
  $caddress=$_POST['permanentaddress'];
  


	$_SESSION['rollno']=$rollno;

	//echo $firstname. $middlename. $lastname. $fathername. $mothername. $rollno. $username. $password. $bmonth. $bdate. $byear. $gender. $scontactno. $gcontactno. $email. $caddress. $paddress
	
  $sql="INSERT INTO student_info VALUES('$firstname', '$middlename', '$lastname', '$fathername', '$mothername', '$rollno', '$username', '$password', '$bmonth', '$bdate', '$byear', '$gender', '$scontactno', '$gcontactno','$category', '$email', '$caddress', '$paddress','','','','','','','','','','','','') ";
  
   mysqli_query($con,$sql);
  header("Location:Registration2.php");
  
?>