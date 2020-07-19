<?php	
	require 'dbconfig/config.php';
?>
<!DOCTYPE html>
<html>
	<head>
	
		<title>Register page</title>
		<link rel="stylesheet" href="css/style.css">
		
	</head>
	<body background="images/img4.jpg">
		<div id="login-box">
			<center>
			<h1>Registation Form</h1>
			<img src="images/img1.png" class="img1"/><br>
			</center>
			
			<form class="loginform" action="register.php" method="post">
				
				<label><b>First Name:</b></label>
				<input name="fname" type="text" class="inputvalues1" placeholder="First Name" required/>
				
				<label><b>Last Name:</b></label>
				<input name="lname" type="text" class="inputvalues1" placeholder="Last Name" required/><br>
				
				<label><b>Contact Number:</b></label>
				<input name="con_num" type="text" class="inputvalues" placeholder="Enter your Mobile Number" required/><br>
				
				<label><b>Email</b></label><br>
				<input name="email" type="text" class="inputvalues" placeholder="Enter your Email Address" required/><br>
				
				<label>Select User Type</label>
                    <select name="usertype" class="inputvalues">
                        <option value="c">Customer</option>
                    </select>
					
				<label><b>User Name</b></label>
				<input name="username" type="text" class="inputvalues" placeholder="Enter a user name" required/><br>
				
	 			<label><b>Password</b></label><br>
				<input name="password" type="password" class="inputvalues" placeholder="Enter a password" required/><br>
				
				<label><b>Confirm Password</b></label><br>
				<input name="cpassword" type="password" class="inputvalues" placeholder="Confirm password" required/><br>
				
				<a href="register.php"><input name="submit_btn" type="submit" id="signup_btn" value="Sign Up"/></a>
				<a href="login.php"><input type="button" id="back_btn" value="<<Back to login"/></a>
				
			</form>
			
			<?php
				if(isset($_POST['submit_btn'])){
					
					$fname=$_POST['fname'];
					$lname=$_POST['lname'];
					$con_num=$_POST['con_num'];
					$email=$_POST['email'];
					$usertype = $_POST['usertype'];
					$username=$_POST['username'];
					$password=$_POST['password']; 
					$cpassword=$_POST['cpassword'];
					
					if($password==$cpassword){
						$query= "select * from userinfo WHERE username='$username'";
						
						$query_run = mysqli_query($con,$query);
						
						if(mysqli_num_rows($query_run)>0){
							echo '<script type="text/javascript"> alert("user exists")</script>';
						}else{
							$query= "insert into userinfo values('$fname','$lname','$con_num','$email','$usertype','$username','$password')";
							$query_run = mysqli_query($con,$query);
							
							if($query_run){
								echo '<script type="text/javascript"> alert("User registerd")</script>';
							}else{
								echo '<script type="text/javascript"> alert("Error!")</script>';
							}
						}
						
						
					}
				}
				
				
				
			?>
		</div>
	</body>
</html>