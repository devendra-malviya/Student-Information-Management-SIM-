<?php session_start(); 
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/jquery.min.js"></script>
</head>
<body><br><br>
<body style="background-color:grey;">
	<div class="container">
		<div class="row">
			<div class="col-md-6"><img src="2.jpg" height="620" width="520" style='position:fixed'></div>
			<div class="col-xs-6"style="border:1px solid black;background-color:grey;">
				<label style="color:black;">
				   <h2>Student Qualification</h2>
			    </label>

			    <form role="form" name="myForm" method="post" action="r2.php">
			    	<div class="form-group">
			    		<label>Enter 10% percentage</label>
			    		<div class="row">
			    			<div class="col-xs-3">
			    			   <input type="text" class="form-control" placeholder="99.79%" name="tenthpercentage">
			    			</div>
			    		</div>

			    		<label>School Name</label>
			    			<input type="text" class="form-control" placeholder="Name of School" name="highschoolname">

			    		<label>Enter 12% percentage</label>
			    		<div class="row">
			    			<div class="col-xs-3">
			    			   <input type="text" class="form-control" placeholder="99.00%" name="twelthpercentage">
			    			</div>
			    		</div>

			    		<label>School Name</label>
			    			<input type="text" class="form-control" placeholder="Name of School" name="highersecandryschoolname">
			    				
			    		<label>Course,Sem and Section</label>
			    		<div class="row">
							<div class="col-xs-3">
			    				<select class="form-control" name="course">
			    					<option>M.Tech</option>
			    					<option>MCA</option>
			    					<option>B.Com</option>
			    				</select>
			    			</div>	

			    			<div class="col-xs-3">
			    				<select class="form-control" name="sem">
			    					<script>var i;for(i=1;i<=12;i++){document.write("<option>"+i+"</option>");}</script>
				    			</select>
			    			</div>
                            <!--
			    			<div class="col-xs-3">
			    				<select class="form-control" name="section">
			    					<option>A</option>
			    					<option>B</option>
			    				</select>
			    			</div>  -->
							<label style="color:black;">
							<br>
				<div class="container"> 
			<div class="row">
                 <div class="col-xs-6">
				   <h2>Personal Information</h2>
			    </label>

			    
			    	<!--<div class="form-group">-->
					
					    <label>Achievements</label>                
			    		&nbsp;<textarea style="resize:none"  class="form-control" rows="1" id="add" name="achievements"></textarea>

			    		
						
						<label>Career Objective</label>
			    		<textarea class="form-control" rows="1" id="add" name="careerobjective"></textarea>
						
						<label>To Do</label>
			    		<textarea class="form-control" rows="1" id="add" name="todo"></textarea>
						
						<label>Dream Company</label>
			    		<textarea class="form-control" rows="1" id="add" name="dreamcompany"></textarea>

			    		<label>Blood Group</label>
			    		<div class="row">
			    			<div class="col-xs-2">
			    			   <input type="text" class="form-control" placeholder="A+" name="bloodgroup">
			    			</div>
			    		</div>
			    		    <br>
			    		    <a class="btn btn-success" href="Registration.html" role="button">Previous</a>
			    		    <input class="btn btn-primary" type="submit" value="Submit">
							<input class="btn btn-danger" type="reset" value="Reset">				
			  


			    		</div>			
			    	</div>	
			    </form>	
			</div>
		</div>
	</div>
</body>
</html>
