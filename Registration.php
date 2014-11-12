<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/jquery.min.js"></script>
<link rel="stylesheet" href="FormValidation.css">
<script type="text/javascript" src="MyFormValidation.js" ></script>
<script>
//Function for allowing only numbers in postal code and phone numbers... 
//Here 8 is for backspace key, 37 for left arrow key and 39 for right arrow key and 9 is for Tab.
//Here is a problem that ascii key conflicts occur at 37 and 39 % and ' also work.
function onlyNumbers(event)				
{
    	var e =event; 
   	var charCode = e.which || e.keyCode;

    		if ((charCode >= 48 && charCode <= 57) || charCode == 8 || charCode == 37 || charCode == 39 || charCode == 9) 
       			 return true;
			else
				 return false;

}
function onlyChars(event)
{
	var e =event;
	var charCode = e.which || e.keyCode;
	if ((charCode >= 65 && charCode <= 90) || (charCode >= 97 && charCode <= 122) || charCode == 8 || charCode == 9)
		return true;
	else 
		return false;
}
/*Function used to copy the current address to permanent address*/
function Copy(add)
{
	if(add.checkme.checked==true)
	{
		add.permanentaddress.value=add.currentaddress.value;
	}
}
function digitsonly(e)
{
	var data=document.getElementById('cnumber').value;
	if(data.Length!=10)
       {
       alert("Please enter 10 digits");
       return false;
       }
    else
    	return true;   
}
</script>
</head>
<body>
	<div class="panel panel-primary"  > <!--this div for bootstrap panel -->
		<div class="panel-heading"><h3 class="panel-title" <br><center><h1>International Institute of Professional Studies<h1></center></h3></div>
		<div class="panel-body"><!--  Panel content -->
			<div class="panel panel-default">
		
		
		
				<body style="background-color:white;">
					<div class="container">
						<div class="row">
							<div class="col-md-2"></div>
							<div class="col-md-8" style="border:1px solid black;background-color:white;">
								<div class="col-md-2"></div>
				
								<center><h2>Personal Information</h2></center>
				
								<form role="form" method="POST" id="theForm" action="r.php"> 
					
					
									<div class="form-group">
					
										<table border="0" class="table">
											<tr>
												<td>
													<label>Name </label>
												</td>
												<td>
													<div class="row">
														<div class="col-md-4">
															<input type="text" class="form-control" placeholder="FirstName" onkeypress="return onlyChars(event)" name="firstname" id="name"> <span id="nameError" class="red"></span>
														</div>
							
														<div class="col-md-4">
															<input type="text" class="form-control" placeholder="MiddleName" onkeypress="return onlyChars(event)" name="midname">
														</div>
														<div class="col-md-4">
															<input type="text" class="form-control" placeholder="LastName" onkeypress="return onlyChars(event)" name="lastname" id="lname"> <span id="lnameError" class="red"></span>
														</div>
													</div>
												</td>
											</tr>
						
      
											<tr>
												<td>
													<label>Father's Name &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
												</td>
												<td>
													<input type="text" class="form-control" placeholder="Father Name" onkeypress="return onlyChars(event)" name="fathername" id="fname"><span id="fnameError" class="red"></span>
												</td>
											</tr> 
	
											<tr>
												<td>
													<label>Mother's Name</label>
												</td>
												<td>
													<input type="text" class="form-control" placeholder="Mother Name" onkeypress="return onlyChars(event)" name="mothername" id="mname"><span id="mnameError" class="red"></span>
												</td>
											</tr>
    	
											<tr>
												<td>
													<label>BirthDay</label>
												</td>
												<td>
													<div class="row">
														<div class="col-md-4">
															<select class="form-control" name="month1">
																<option>January</option>
																<option>February</option>
																<option>March</option>
																<option>April</option>
																<option>May</option>
																<option>June</option>
																<option>July</option>
																<option>August</option>
																<option>September</option>
																<option>October</option>
																<option>November</option>
																<option>December</option>
															</select>
														</div>
													<div class="col-md-4">
		<select class="form-control" name="date">
		<script>var i;for(i=1;i<=31;i++){document.write("<option>"+i+"</option>");}</script>
		</select>
		</div>
		<div class="col-md-4">
		<select class="form-control" name="year">
		<script>var i;for(i=1950; i<=2014; i++) {document.write("<option>"+i + "</option>");}</script>
		</select>
		</div>
		</div>
	</td>
	
	</tr>

	<tr><td><label>Gender</label></td>
	<td><div class="row">
	<div class="col-md-4">
	<select class="form-control" name="gender">
  	<option>Male</option>
  	<option>Female</option>
	<option>other</option>
	</select>
  	</div></td>
	</div>	
   
	<tr><td><label>Student's Contact no.</label></td>
	<td><div class="row">
	<div class="col-md-4">
	<input type="text" class="form-control" placeholder="9876543210" name="studentnumber"
	onkeypress="return onlyNumbers(event)" maxlength="10">
	</div>
	</div></td>

	<tr><td><label>Guardian's Contact no.</label></td>
	<td><div class="row">
	<div class="col-md-4">
	<input type="text" class="form-control" placeholder="9876543210" name="guardiannumber"
	onkeypress="return onlyNumbers(event)"  maxlength="10">
	</div>
	</div></td>
	
	
	
	<tr><td><label>Category</label></td>
	<td><div class="row">
	<div class="col-md-4">
	<select class="form-control" name="gender">
  	<option>ST</option>
  	<option>SC</option>
	<option>OBC</option>
	<option>General</option>
	</select>
  	</div></td>
	</div>
	
	
	
	
	<!--
	
	<tr><td><label>Category</label></td>
	<td><div class="row">
	<div class="col-md-4">
	<input type="text" class="form-control" placeholder="ST/SC/OBC/GENERAL" name="category">
	</div>
	</div> </td> </tr>   -->

	<tr><td><label>Email</label></td>
 	<td><input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email"> 	
    </td></tr>
	<tr><td><label>Current Address</label></td>
 	<td><textarea class="form-control" rows="3" id="add" name="currentaddress" ></textarea></td>

 	<tr><td colspan="2"><label>
 	<input type="checkbox" style="display:inline;" name="checkme" onclick="Copy(this.form)">
 	<span style="display:inline;">Copy to Permanent Address</span>
 	</label></td></tr> 	<br>

	<tr><td><label>Permanent Address</label></td>
 	<td><textarea class="form-control" rows="3" name="permanentaddress" ></textarea></td>
             </table>
			</div>
		
			
			
	<!--<a class="btn btn-success" href="Registration2.html" role="button">Next Step</a>
	-->
	<input class="btn btn-success" type="submit" value="Submit" id="submit">
	<input class="btn btn-danger" type="reset" value="Reset">
		
		</form>

</div>
				
		</div>
	</div>
	
</div>
</div>	

	<div class="panel-footer"><br>Panel footer<br></div> 
	</div>

</body>
</html>


<?php
$connect=mysql_connect('localhost','root','');
?>