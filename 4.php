<?php
session_start();


function space($no)
{
	for($i=0;$i<$no;$i++)
		echo '&nbsp;';
}

$server = "";
$username = "root";
$password="";
$database="sim database";



//$rollno = $_SESSION['rollno'];
$rollno='';
if(isset($_POST['roll']))
	$rollno=$_POST['roll'];
$con=mysqli_connect($server,$username,$password,$database);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }  
  
  
  
  
 
	
  

  
  $sql="select * from student_info where rollno='$rollno'";
  
   $result = mysqli_query($con,$sql);
   $row = mysqli_fetch_array($result);
  
  
  
  $firstname=$row['Firstname'];
  $lastname=$row['Lastname'];
  $midname=$row['Midname'];
  $fathername=$row['Fathername'];
  $rollno=$row['rollno'];
  $mothername=$row['Mothername'];
  $bmonth=$row['bmonth'];
  $bdate=$row['bdate'];
  $byear=$row['byear'];
  $gender=$row['Gender'];
  $studentno=$row['studentno'];
  $email=$row['Email'];
  $course=$row['Course'];
  $paddress=$row['permanentaddress'];
  



  
  
  
?><!DOCTYPE html>
<html>
	<head>	
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<title>International Institute of Professional Studies</title>
<!--	<style type="text/css">
	.form-signin {
    max-width: 330px;
    padding: 15px;
    margin: 0px auto;
    height: 34px;
    }
    </style> -->
	<script>
	 function slow(e)
 	{
  	e.scrollAmount=0;
	}
  	function fast(e)
 	{
  	e.scrollAmount=8;
 	}
	</script>
	</head>
	<body>
		<div class="container" style="border:2px solid;">
			<nav class="navbar navbar-default navbar-static-top text-center" style="background-color:grey;border-radius:5px"> <label style="color:white"><h2>International Institute of Professional Studies</h2></label></nav>
         <!--		 <nav class="navbar navbar-default navbar-static-top text-center" style="background-color:grey;border-radius:1px"> <label style="color:white"><h3>Profile</h3></label></nav> -->
			<!-- img tag is started-->
			   <h3> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbspInformation For Scholarship Section</h3>
				<div class="col-md-3">
				
				<?php 
				
				echo "<form action='' method='post'>";
				
				echo "<select name='roll'>";
				$result=mysqli_query($con,"SELECT * from student_info");
				while($row=mysqli_fetch_array($result))
				{
					echo '<option value=' . $row['rollno'] . '>' . $row['Firstname'] . ' ( ' . $row['rollno'] . ' )'. '</option>';
				}
						
				echo "</select>";
				echo"<input type='submit' name='submit' value='Submit'></button>";
				echo"</form>
				";
				
				
				if(isset($_POST['submit']))
				{
				
					if(file_exists("images/" . $rollno . ".jpg"))
					{
						$imagefile="images/" . $rollno . ".jpg" ;
					}
					else
						$imagefile="images/image001.png" ;
					
					?>
					<img width=165 height=187 id="_x0000_i1025" src="<?php echo $imagefile ; ?>" alt="TextBox:  &#13;&#10;      &#13;&#10;">
					<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
				
				
					</div>
				
				
					<form action='' method='post'>
				
					<?php 

					echo'
					<div class="col-md-6">
					<div>Name';
					space(24);
					
					echo '-  <input type="text" class="editme" name="firstname" size="10" style="color:blue;border-color:white;border-top:white;border-left:white;background-color:white" disabled value="'.$firstname . '">';
					$midnamestyle="visiblity:visible";
					if($midname==null)
					$midnamestyle="display:none";
	
					echo'<input type="text" class="editme" size="10" name="midname" style="color:blue;border-color:white;border-top:white;border-left:white;background-color:white;' . $midnamestyle . '" disabled value="' . $midname . '">';
					echo' <input type="text" class="editme" name="lastname" size="10" style="color:blue;border-color:white;border-top:white;border-left:white;background-color:white" disabled value="' . $lastname  . '"> </div>
					<div>Father\'s name ';
					space(9);
					echo '-  <input type="text" name="fathername" class="editme" style="color:blue;border-color:white;border-top:white;border-left:white;background-color:white"  disabled  value="'  . $fathername .'  "> </div>
					<div>Mother\'s name ';
					space(9);

					echo '-  <input type="text" name="mothername" class="editme" style="color:blue;border-color:white;border-top:white;border-left:white;background-color:white"  disabled  value=" ' . $mothername . ' "> </div>
				
					<div>Date of birth';
					space(14);
					echo '-  <input type="text" class="editme" name="bdate"  style="color:blue;border-color:white;border-top:white;border-left:white;background-color:white" size="2" disabled  value=" ' . $bdate . '">-
					<input type="text" size="2" class="editme" name="bmonth"  style="color:blue;border-color:white;border-top:white;border-left:white;background-color:white"  disabled  value="' . $bmonth . '">-
					<input type="text" size="2" class="editme" name="byear"  style="color:blue;border-color:white;border-top:white;border-left:white;background-color:white"  disabled  value="'  . $byear  .  '"> </div>
				
					<div>Gender ';
					space(20);
					echo ' - <input type="text" size="2" class="editme" name="gender"  style="color:blue;border-color:white;border-top:white;border-left:white;background-color:white"  disabled  value="' . $gender . '"> </div>
					<div>Course ';
					space(20);
					echo '-  <input type="text" class="editme" name="course"  style="color:blue;border-color:white;border-top:white;border-left:white;background-color:white"  disabled  value=" ' . $course.' "> </div>
					<div>Address ';
					space(19);
					echo '-  <input type="text" class="editme" name="paddress" style="color:blue;border-color:white;border-top:white;border-left:white;background-color:white"  disabled  value=" ' . $paddress . ' "> </div>
					<div>Email';
					space(24);
					echo '-  <input type="text" class="editme" name="email"  style="color:blue;border-color:white;border-top:white;border-left:white;background-color:white"  disabled  value=" ' . $email .  ' "> </div>
					<div>Contact ';
					space(20);
					echo '-  <input type="text" class="editme" name="studentno"  style="color:blue;border-color:white;border-top:white;border-left:white;background-color:white"  disabled  value=" ' . $studentno . '"> </div>
					<div>Roll No. ';
					space(20);
					echo '-  <input type="text" class="editm" name="rollno2" style="color:blue;border-color:white;border-top:white;border-left:white;background-color:white"  disabled  value="  ' . $rollno . '"> </div>
			<!--		<div>Enrolment No.';
					space(10);
					echo ' -  </div>
				-->
				
					';
					?>
				
				
				</form>
				
				
				<?php
				}?>
				</div>
					
				
			</div>
               

			<footer class="text-center">
				Developed by Devendra Malviya and Abhishek Sharma..
			</footer>
		</div>	
		
	</body>
</html>