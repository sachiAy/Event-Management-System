<?php
	require 'dbconfig/config.php';
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
				<h1>Delete Musicians</h1>
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
					<table cellpadding="30">
					
					
					
					 <?php

						$retrieve = "SELECT * FROM musicians;";

						//Selecting all data from Table     
						$result = mysqli_query($con,$retrieve);//Passing SQL

						while($row = mysqli_fetch_assoc($result)){

							echo "
							
							<tr>
								<td><img src=\"img/{$row['imglink']}\" height=\"300px\"\ width=\"300px\"\"></td>
								<td>
									<b><h3>".$row['m_name']."</h3></b>
									<b><h3>".$row['con_num']."</h3></b>
									<b><h3>".$row['email']."</h3></b>
									<form action =\"admin_music_delete_submit.php\" name=\"del_submit\" method=\"post\" >
                            <input type=\"hidden\" value=" .$row['m_id']. " name=\"m_id\">
                            <input class=\"button\" type=\"submit\" name=\"submit\" value=\"Delete\">
                        </form>
								</td>	


							</tr>

							
							
							";

						}	


					?>     
					

						
					</table>
					
					
				</table>	
			</center>
		<body>
</html>