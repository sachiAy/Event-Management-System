<?php
	
	require 'dbconfig/config.php';
	require 'session/session.php';
	
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Login Page</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	
	<body background="images/img4.jpg">
		<div id="login-box">
			<center>
			<h1>Login Form</h1>
			<img src="images/img1.png" class="img1"/>
			<img src="images/img2.png" class="img2"/>
			</center>
			
			<form class="loginform" action="login.php" method="post">
				<label><b>Username:</b></label><br>
				<input name="username" type="text" class="inputvalues" placeholder="Type your user name" required/><br>
				<label><b>Password:</b></label><br>
				<input name="password" type="password" class="inputvalues" placeholder="Enter your password" required/><br>
				<input name="login" type="submit" id="login_btn" value="Log In"/><br>
				<a href="register.php"><input type="button" id="register_btn" value="Register"/></a>
				<a href="homepage.php"><input type="button" id="back_btn" value="<<Back to Home"/></a>
			</form>
			<?php
				if(isset($_POST['login'])){
					$username=$_POST['username'];
					$password=$_POST['password'];
					
					$query="select * from userinfo WHERE username='$username' AND password='$password'
					";
					 
					$query_run = mysqli_query($con,$query);
					if(mysqli_num_rows($query_run)>0){
						
						$userRow = mysqli_fetch_array($query_run);
						session_start();
						$_SESSION["usertype"] = $userRow['usertype'];
						
						$usertype= $userRow['usertype'];
						
						if($usertype == 'a' ){
							header( "Location:homeadmin.php" );
						}
						elseif ($usertype == 'c'){
							header( "Location:homelogout.php" );
						}
            
						//header('location:homepage.php');
					}else{
						//invalid
						echo '<script type="text/javascript"> alert("Invalid Credentials") </script>';
					}
					
				}
			?>
		</div>	
			
	</body>
</html>