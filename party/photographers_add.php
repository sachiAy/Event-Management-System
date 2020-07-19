<?php
	//Unauthorized Access Check
    session_start();
    if(!isset($_SESSION['usertype']) || $_SESSION['usertype'] != 'a'){
       header('Location:login.php');
       exit();
       }
?>

<!DOCTYPE html>
<html>
	<head>
		<title></title>
		
		<style>
			.button {
    background-color: blue; 
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
		
		
		
		
		</style>
	</head>
		<body background="./img/bc.jpg">
			<center>

				<table cellpadding="12">
					<tr>
						<td><a href="homeadmin.php"><button class="button" id="deletePhotographer">HOME</button></a></td>
						<td><a href="aboutus.php"><input type="button" class="button" value="ABOUT"/></a><br></td>
						<td><a href="photographers_add.php"><button class="button" id="deletePhotographer">ADD</button></a></td>
						<td><a href="photographers_update.php"><button class="button" id="updatePhotographer">UPDATE</button></td>
						<td><a href="photographers_admin.php"><button class="button" id="updatePhotographer">VIEW</button></td>
						<td><a href="photographers_delete.php"><button class='button' id='deletePhotographer'>DELETE</button></td>
						<td><a href="logout.php"><button class="button" id="deletePhotographer">LOG OUT</button></a></td>
											
					</tr>
				</table>


				<h1>Add Photographers</h1>
				
				 <form class="form-box" action="photographers_add_submit.php" method="post" enctype="multipart/form-data">      
					<p>Enter ID:</p>
					<input type="text" name="photographerID" placeholder="Photographer ID" required>  
				
					<p>Enter Name:</p>
					<input type="text" name="name" placeholder="Photographer Name" required>    
					
					<p>Enter Contact Number:</p>
					<input type="number" name="contact" placeholder="Photographer Contact" required> 
				
					<p>Enter Email:</p>
					<input type="email" name="email" placeholder="Photographer Email" required> 
					
					<p>Select image (200x300) to upload:</p>
					<input type="file" name="fileToUpload" id="fileToUpload">
					
					<br><br>
					
					<a href="photographers_add_submit.php"><input class="form-button" type="submit" name="submit" value="Add Photgrapher"></a>
					           
				</form>     
					
					
					
			</center>
		<body>
</html>