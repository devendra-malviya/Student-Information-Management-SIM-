<?php
if(isset($_POST['submit']))
{
	$typeofinfo=$_POST['typeofinfo'];
	define("UPLOAD_DIR", "info/");
	
	if (!empty($_FILES["myFile"])) 
	{
		$myFile = $_FILES["myFile"];
	
		if ($myFile["error"] !== UPLOAD_ERR_OK) 
		{
			echo "<p>An error occurred.</p>";
			exit;
		}

		// ensure a safe filename
		$name = preg_replace("/[^A-Z0-9._-]/i", "_", $myFile["name"]);
	
		// don't overwrite an existing file
		$i = 0;
		$parts = pathinfo($name);
		//    while (file_exists(UPLOAD_DIR . $name)) {
	//      $i++;
			
			
			//$name = $parts["filename"] . "-" . $i . "." . $parts["extension"];
			if($typeofinfo=="accounts")
				$name="accounts." .  $parts["extension"];
			if($typeofinfo=="syllabus")
				$name="syllabus." .  $parts["extension"];
			if($typeofinfo=="results")
				$name="results." .  $parts["extension"];
		
	//   }
		
		// preserve file from temporary directory
		$success = move_uploaded_file($myFile["tmp_name"],
			UPLOAD_DIR . $name);
		if (!$success) { 
			echo "<script>alert('Unable to save file') ;</script>";
			
		}
		else
			echo "<script>alert('Uploaded Successfully!') ;</script>";
	
	}
}
?><!DOCTYPE html>
<html>
	<head>	
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<title>International Institute of Professional Studies</title>	</head>
	<body>
		<div class="container" style="border:2px solid;">
			<nav class="navbar navbar-default navbar-static-top text-center" style="background-color:grey;border-radius:5px"> <label style="color:white"><h2>International Institute of Professional Studies</h2></label></nav>
         <!--		 <nav class="navbar navbar-default navbar-static-top text-center" style="background-color:grey;border-radius:1px"> <label style="color:white"><h3>Profile</h3></label></nav> -->
			<!-- img tag is started-->
			   <h3> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;Upload Information!</h3>
				
						<div class="col-md-3">
						
					
						
						
						
					<form action="uploadinfo.php" method="post" enctype="multipart/form-data"> 
					<input type="file" name="myFile" class="form-control">
					
					<br>
					<select class="form-control" name="typeofinfo">
					<option value="accounts">Upload Attendence Information</option>
					<option value="syllabus">Upload Syllabus Information</option>
					<option value="results">Upload Results Information</option>
					</select>
					<br>
					<input class="btn-success" type="submit" name="submit" value="Upload">
					</form>
						
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