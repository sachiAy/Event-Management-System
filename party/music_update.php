<?php 
include('dbconfig/config.php')

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
						<td><a href="music_add.php"><button class="button" id="deletePhotographer">ADD</button></a></td>
						<td><a href="music_update.php"><button class="button" id="updatePhotographer">UPDATE</button></td>
						<td><a href="music_admin.php"><button class="button" id="updatePhotographer">VIEW</button></td>
						<td><a href="music_delete.php"><button class='button' id='deletePhotographer'>DELETE</button></td>
						<td><a href="logout.php"><button class="button" id="deletePhotographer">LOG OUT</button></a></td>		
					</tr>
				</table>


				<h1>Update Musicians</h1>
				
				 <form class="form-box" action="music_update_submit.php" method="post" enctype="multipart/form-data">      
					<p>Enter ID:</p>
					<input type="text" name="musicID" placeholder="Musician ID" required>  
				
					<p>Enter Name:</p>
					<input type="text" name="name" placeholder="Musician Name" required>    
					
					<p>Enter Contact Number:</p>
					<input type="number" name="contact" placeholder="Musician Contact" required> 
				
					<p>Enter Email:</p>
					<input type="email" name="email" placeholder="Musician Email" required> 
					
					<p>Select image (200x300) to upload:</p>
					<input type="file" name="fileToUpload" id="fileToUpload">
					
					<br><br>
					
					<a href="music_update_submit.php"><input class="form-button" type="submit" name="submit" value="Update Musician"></a>
					           
				</form>     
					
					
					
			</center>
		<body>
</html>