<?php

session_start();


$server = "";
$username = "root";
$password="";
$database="sim database";

$rollno=$_SESSION['rollno'];

$con=mysqli_connect($server,$username,$password,$database);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  
  }
  
  
  
  $tenthpercentage=$_POST['tenthpercentage'];
  $highschoolname=$_POST['highschoolname'];
  $twelthpercentage=$_POST['twelthpercentage'];
  $highersecandryschoolname=$_POST['highersecandryschoolname'];
  
  $course=$_POST['course'];
  $sem=$_POST['sem'];
  $section=$_POST['section'];
  $achievements=$_POST['achievements'];
  $careerobjective=$_POST['careerobjective'];
  $todo=$_POST['todo'];
  $dreamcompany=$_POST['dreamcompany'];
  $bloodgroup=$_POST['bloodgroup'];
  
  echo $tenthpercentage . $highschoolname .$twelthpercentage . $highersecandryschoolname . $course . $sem . $section . $achievements . $careerobjective . $todo . $dreamcompany . $bloodgroup ;
  
  $sql="UPDATE student_info set 10thperc='$tenthpercentage', Highschoolname='$highschoolname', 12thperc='$twelthpercentage', Highersecandryschoolname='$highersecandryschoolname', Course='$course', Semester='$sem', section='$section', Achievements='$achievements', CareerObjective='$careerobjective', ToDo='$todo', DreamCompany='$dreamcompany', BloodGroup='$bloodgroup'
  where rollno='$rollno'";
  
  
  mysqli_query($con,$sql);
  

 
  header("Location:front.php");
  

?>