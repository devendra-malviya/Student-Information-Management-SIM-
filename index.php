<?php
session_start();
$_SESSION['office']='no';
if(isset($_POST['submit']))  


 /* submit ki value jb true hogi jb koi bhi token enter krenge, 
  isset ek function hai jisme jo variable diya hai, agr uski value defined hai to vo true return krega else false..
  submit ki value tb true hogi jb form submit hoga. else kch ni hogi. 
 */ 
{
	if($_POST['token']=='admin')    /* agr token admin hai to use registration.php pe bhej do else isi page pe rhene do */

		header("Location:Registration.php");
	if($_POST['token']=='office')
		$_SESSION['office']='yes';
	
}



if(isset($_POST['loginsubmit']))
{
	
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


	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$sql="SELECT * from student_info where Username='$username'";
	
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result);
	
	if($row && $row['Password']==$password)
	{
		$_SESSION['rollno']=$row['rollno'];
		header("Location:front.php");
	}
	
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Student Information Management</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Fonts -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	<script src="js/jquery.min.js"></script>
    <!-- Custom Theme CSS -->
    <link href="css/grayscale.css" rel="stylesheet">
	
	<style>
.dropdown{position:relative}
.dropdown-toggle{color:inherit}
.dropdown-menu{border-bottom-right-radius:0;border-bottom-left-radius:0}
.dropdown-header{padding:5px 15px 5px 25px}
</style>

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
				
				
				
				
				
				
				
				
                <a class="navbar-brand" href="#page-top">
                    <i class="fa fa-play-circle"></i>  <span class="light">Welcome</span> To SIM
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
					<li class="page-scroll">
                        <a href="#login">Student Login</a>
                    </li>
                    <li class="page-scroll">
                        <a href="#contact">Contact</a>
                <?php
				if( $_SESSION['office']=='yes')
				{
				
					
				?>
				<li>
                <a href="#" onclick="$('#drop').toggle(300)">For Office Use <b class="caret"></b></a>
                <ul style="display:none" id="drop">
                  <li><a href="1.php">Addmission Section</a></li>
                  <li><a href="2.php">Accounts Section</a></li>
                  <li><a href="3.php">Library Section</a></li>
				  <li><a href="4.php">Scholarship Section</a></li>  
				  <li><a href="uploadinfo.php">For BatchFacilator</a></li>
				</ul>
              </li>
			 <?php
			 }
			 ?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <section class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h5 class="brand-heading">Student Information Management IIPS</h5>
                        <p class="intro-text">International Institute of Professional Studies</p>
                        <div class="page-scroll">
                            <a href="#login" class="btn btn-circle">
                                <i class="fa fa-angle-double-down animated"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="login" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
			 <h4>For New Student Login</h4>
<form class="form-inline" role="form" action="" method="post">
  <div class="form-group">
    <label class="sr-only" for="exampleInputEmail2">Token Number</label>
    <input type="password" name="token" class="form-control" id="exampleInputEmail2" placeholder="Enter Token">
  </div>
<!--  <a class="btn btn-primary" href="Registration.php" role="button">sign in</a>-->
  <input type='submit' value='Register' name='submit'>
</form>

               
            </div>
        </div>
<br><br><br>
    
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
            <h4>For Already registered student</h4>
<form class="form-inline" role="form" action="" method="post">
  <div class="form-group">
    <label class="sr-only" for="exampleInputEmail2">Login</label>
    <input type="text" name="username" class="form-control" size="18" id="exampleInputEmail2" placeholder="Username">
	<input type="password" name="password" class="form-control" id="exampleInputEmail2" placeholder="Password">
	
  </div>
<!--  <a class="btn btn-primary" href="Registration.php" role="button">sign in</a>-->
  <input type='submit' value='Login' name='loginsubmit'>
</form>

               
            </div>
        </div>
    </section>
	
<br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <section id="contact" class="container content-section text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <h2>Contact IIPS DAVV</h2>
                <p>Address : 

                  Devi Ahilya University
                  Takshashila Campus, Khandwa Road
                  Indore - 452001, INDIA
                  Phone: 91-731-2461888, 2462087, 2461332, 2760101
                  Fax - 91-731-2467888
                  admin@iips.edu.in</p>
            
            </div>
        </div>
    </section>


</body>

</html>
