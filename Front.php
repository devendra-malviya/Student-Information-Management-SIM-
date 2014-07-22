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



$rollno = $_SESSION['rollno'];

$con=mysqli_connect($server,$username,$password,$database);

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }  
  
  
if(isset($_POST['editsubmit']))
{
	
	
  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $midname=$_POST['midname'];
  $fathername=$_POST['fathername'];
  $mothername=$_POST['mothername'];
  $bmonth=$_POST['bmonth'];
  $bdate=$_POST['bdate'];
  $byear=$_POST['byear'];
  $gender=$_POST['gender'];
  $category=$_POST['category'];
  $studentno=$_POST['studentno'];
  $email=$_POST['email'];
  $course=$_POST['course'];
  $paddress=$_POST['paddress']; 
  
  mysqli_query($con,"update student_info set Firstname='$firstname', Lastname='$lastname',Midname='$midname', Fathername='$fathername',Mothername='$mothername', bmonth='$bmonth', category='$category',bdate='$bdate', byear='$byear', gender='$gender', studentno='$studentno',	email='$email',Course='$course', permanentaddress='$paddress' where rollno='$rollno'");
  echo '<script>alert("Edited Successfully!");</script>';

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
  $category=$row['category'];
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
<!--	 <script>
	 function slow(e)
 	{
  	e.scrollAmount=0;
	}
  	function fast(e)
 	{
  	e.scrollAmount=8;
 	}
	</script> -->
	</head>
	<body>
		<div class="container" style="border:2px solid;">
			<nav class="navbar navbar-default navbar-static-top text-center" style="background-color:grey;border-radius:5px"> <label style="color:white"><h2>International Institute of Professional Studies</h2></label></nav>
         
			   <h3> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbspStudent's Profile</h3>
				<div class="col-md-3">
				
				
				<?php 
				
				if(file_exists("images/" . $rollno . ".jpg"))
				{
					$imagefile="images/" . $rollno . ".jpg" ;
				}
				else
					$imagefile="images/image001.png" ;
				
				?>
				<img width=165 height=187 id="_x0000_i1025" src="<?php echo $imagefile ; ?>" alt="TextBox:  &#13;&#10;      &#13;&#10;">
				<br>
				<form action="upload.php" method="post" enctype="multipart/form-data">

				<input type="file" size="10" name="file" id="file"><br>
				<input type="submit" name="submit" value="<?php 
				if(file_exists("images/" . $rollno . ".jpg"))
					echo "Edit your pic!";
				else echo "Add your pic!";
				?>">
				
				
				</form>
				<br><br>
				<a class="btn btn-primary"  id='logout' href="logout.php" role="button">Logout</a>
				<br><br><br><br><br><br>
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
				space(19);
				echo ' - <input type="text" size="2" class="editme" name="gender"  style="color:blue;border-color:white;border-top:white;border-left:white;background-color:white"  disabled  value=" ' . $gender . '"> </div>
				<div>Course ';
				space(20);
				echo '-  <input type="text" class="editme" name="course"  style="color:blue;border-color:white;border-top:white;border-left:white;background-color:white"  disabled  value=" ' . $course.' "> </div>
				<div>Address ';
				space(19);
				echo '-  <input type="text" class="editme" name="paddress" style="color:blue;border-color:white;border-top:white;border-left:white;background-color:white"  disabled  value=" ' . $paddress . ' "> </div>
				<div>Email';
				space(25);
				echo '-  <input type="text" class="editme" name="email"  style="color:blue;border-color:white;border-top:white;border-left:white;background-color:white"  disabled  value=" ' . $email .  ' "> </div>
				<div>Contact ';
				space(20);
				echo '-  <input type="text" class="editme" name="studentno"onkeypress="return onlyNumbers($event)" maxlength="10"  style="color:blue;border-color:white;border-top:white;border-left:white;background-color:white"  disabled  value=" ' . $studentno . '"> </div>
				<div>Category ';
				space(18);
				echo '- <input type="text" class="editme" name="category" style="color:blue;border-color:white;border-top:white;border-left:white;background-color:white"  disabled  value="' . $category . '"> </div>
				<div>Roll No. ';
				space(20);
				echo '-  <input type="text" class="editm" name="rollno2" style="color:blue;border-color:white;border-top:white;border-left:white;background-color:white"  disabled  value="  ' . $rollno . '"> </div>
				
			<!--	<div>Enrolment No.';
				space(10); 
				echo ' -  </div>
				 -->
				
				';
				?>
				<a class="btn btn-primary"  id='editbutton' href="#" onclick='editme()' role="button">Edit</a>
                 <!--<input type='submit' name='edit' value='edit' onclick='editme()'>-->

				<input type='submit' style='display:none' class="btn btn-primary" id='submitbutton' name='editsubmit' onsubmit='editme()' value='Submit'>
				
				</form>
				</div>
				<div class="col-md-3">
					<div class="panel panel-default" style="border:1px solid grey;">
						<div class="panel-heading text-center"  style="background-color:grey;border-bottom:1px solid grey;color:white;">
						<label>Updates</label>
						</div>	
						
						<div class="panel-body text-center">
						
							<marquee direction="up" style="color:#000066" scrollamount="4" onmouseover="javascript:slow(this);" onmouseout="javascript:slow(this);">
								<u><a href="info/accounts.docx">Attendence</a></u><br>
								<u><a href="info/results.docx">Results Declared</a></u>		<br>
								<u><a href="info/syllabus.docx">Syllabus</a></u><br>
								<u><a href=http://www.mponline.gov.in/portal/Services/DAVV/UTD_APP/semfee/semfeesubmission.aspx>fees information</a></u><br>
								
							
                        	</marquee>	
                        
						</div>
						
					</div>	
				</div>	
				
			</div>
               

			<footer class="text-center">
				Developed by Devendra Malviya and Abhishek Sharma..
			</footer>
		</div>	
		
	<script>
	function editme()
	{
		document.getElementsById('editme').style.ba='red';
		//alert('');
		//editme.style.background-color='red';
	}
	
	$(document).ready()
	{
	
		$( "#editbutton" ).click(function() {
		
		
			$('.editme').removeAttr('style');
			$('.editme').removeAttr('disabled');
			$('#submitbutton').removeAttr('style');
			
		
		});
	  
   }
	
	
	</script>
		
	</body>
</html>