<?php 
require "connect.php";
$msg = '';
if(isset($_POST['submit'])){
	$f_name = mysqli_real_escape_string($con,$_POST['f_name']);
	$l_name = mysqli_real_escape_string($con,$_POST['l_name']);
	$email = mysqli_real_escape_string($con,$_POST['email']);
	$course = mysqli_real_escape_string($con,$_POST['course']);
	$phone = mysqli_real_escape_string($con,$_POST['phone']);
	$status = mysqli_real_escape_string($con,$_POST['status']);
	$sql = "INSERT INTO users (f_name,l_name,email,course,phone,status) values(
	'$f_name','$l_name','$email','$course','$phone',1)";
	if(mysqli_query($con,$sql)){
		$msg = "Registration Successfully";
	}else{
		$msg = "Registration failed";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
   <head>
    <title>Registration Form</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!--Bootstrap CSS-->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/glyphicon.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css"/>	
   </head>
   <body>
         <div class="navbar">
		    <ul>
			   <li><a href="index.php">Home</a></li>
			</ul>
		 </div>
		 <div class="container">
		    <form method="post">
			    <h3 align="center">Registration Form</h3>
				<span style='color:green;'><?php echo $msg ?></span>
			    <div class="form-group">
				    <label>First Name</label>
			        <input type="text"  name="f_name" class="form-control" required >		
				</div>
			    <div class="form-group">
				    <label>Last Name</label>
				    <input type="text"  name="l_name" class="form-control" required >
			    </div>
				<div class="form-group">
				    <label>Email</label>
			        <input type="email"  name="email" class="form-control" required >		
				</div>
				<div class="form-group">
				    <label>Course</label>
                    <select name="course" class="form-control">
					    <option value="">Select</option>
					    <option value="B.Tech">B.Tech</option>
						<option value="M.Tech">M.Tech</option>
						<option value="MBA">MBA</option>
                    </select>	
			    </div>
			    <div class="form-group">
				    <label>Phone</label>
				    <input type="number"  name="phone" class="form-control" required >
			    </div>
				<input type="submit" name="submit" value="Saved Data"/>
			</form>
		 </div>
        
  </body>
</html>