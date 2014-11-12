<?php session_start(); 
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="css/bootstrap.min.css" rel="stylesheet">
<script src="js/jquery.min.js"></script>
</head>
<body>
<div class="panel panel-primary"  > <!--this div for bootstrap panel -->
  <div class="panel-heading"><h3 class="panel-title" <br><center><h1>International Institute of Professional Studies<h1><center></h3></div>
   <div class="panel-body"><!--  Panel content -->
	    <div class="panel panel-default">
  
 <body style="background-color:white;">
	<div class="container">
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-xs-8"style="border:1px solid black;background-color:white;">
				<div class="col-md-2"></div>
					<label style="color:black;">
						<h2>Previous Academic Qualification</h2>
					</label>

						<form role="form" name="myForm" method="post" action="r2.php">
							<div class="form-group">
			   				    <table border="0" class="table">
									<tr>
										<td style="width:200px"><label>High school Name</label></td>
										<td><input type="text" class="form-control" placeholder="Name of School" name="highschoolname"></td>
									</tr>			
									<tr>
									    <td><label>Year of passing</label></td>
										<td><div class="row">
												<div class="col-xs-4">
													<input type="text" class="form-control" placeholder="2010" name="yearofpassing">
												</div>
											</div>
										</td>
									</tr> 		
									<tr>
										<td><label>Higher Secondary school Name</label></td>
										<td><input type="text" class="form-control" placeholder="Name of School" name="highersecandryschoolname"></td>
									</tr>  							
									<tr>
										<td><label>Year of passing</label></td>
										<td><div class="row">
												<div class="col-xs-4">
													<input type="text" class="form-control" placeholder="2010" name="year of passing">
												</div>
											</div>
										</td>
									</tr> 
								</table>
	                 
			    	
									<!--	<div class="container"> 
										<div class="row">
										<div class="col-xs-6"> -->
								<center><h2>Academic Information</h2></center>
							

								<table border="0" class="table">
									<!--<div class="form-group">-->
									<tr>
										<td  style="width:200px"><label>Enrollment Number</label></td>
										<td>
											<div class="row">
											<div class="col-md-4"><input type="text" class="form-control" placeholder="DE/11/****" name="enrollmentnumber"></div>
											</div>
										</td>
									</tr>
									
									
									
									
									<tr>
										<td><label>Roll Number</label></td>
										<td><div class="row">
												<div class="col-md-4"><input type="text" class="form-control" placeholder="IT-2K11-10" name="rollno"></div>
											</div>
										</td>
									</tr>
						
									
						
									<tr><td><label>Course,Sem and Section</label></td>
										<td><div class="row">
												<div class="col-xs-4">
													<select onchange ="generate(this.value)" class="form-control" name="course">
													<option >Select Course</option>
													<option >M.Tech</option>
													<option >MCA</option>
													<option>B.Com</option>
													</select>
												</div>	

												<div id="selectsem" class="col-xs-4">
													
													
													
													
													
													
													
													
													
													
													
													
													
												</div>
                            
											    <div  id="section" style ='visibility:hidden' class="col-xs-2">
														<select class="form-control" name="section">
																<option>A</option>
																<option>B</option>
															</select> 
													</div>  
													<label style="color:black;">
													<br>
											</div>
										</td>
									</tr> 
						 
									<tr><td><label>Enrollment year</label></td>
										<td><div class="row">
												<div class="col-md-4"><input type="text" class="form-control" placeholder="2012" name="enrollmentnumber"></div>
											</div>
										</td>
									</tr>
						
									<tr><td><label>Alternate Email</label></td>
										<td><input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
										</td>
									</tr>
								</table>
						
                        
			    		
			    		    
								<!--<a class="btn btn-success" href="Registration.html" role="button">Previous</a> -->
									<input class="btn btn-primary" type="submit" value="Submit">
									<input class="btn btn-danger" type="reset" value="Reset">				
			  


								<!--    </div> -->			
								<!--	</div>  -->	
						</form>	
								<!--	</div> -->
								<!--	</div> -->
							</div>
			</div>
		</div>
	</div>
   </div>
  </div>
  
														<script>
														function generate(x)
														{
															
															var i;
															
															
															
															msg = '';
															
															msg ='<select class="form-control" name="sem">';
															
															
															
															
															
															count = 0;
															if (x=='M.Tech')
																count  = 11;
															else if(x =='MCA')
																count = 12;
															else 
																count = 6 ;
															//document.write('');
															for(i=1;i<=count;i++)
															{
																msg += "<option>"+i+" SEM </option>";
															}
															
														
															
															msg += '</select>' ;
															
														//	$('#selectsem').html(msg);
															document.getElementById('selectsem').innerHTML = msg;
															
															if(x =='MCA')
																$('#section').css('visibility','visible');
															else
																$('#section').css('visibility','hidden');
														
															
													}
														</script>
													
</body>
<div class="panel-footer"><br>Panel footer<br></div>
</div>
</html>
