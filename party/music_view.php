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
				<h1>Our Musicians</h1>
		<table>
			<td><a href="homepage.php"><input type="button" class="button" value="HOME"/></a><br></td>
			<td><a href="aboutus.php"><input type="button" class="button" value="ABOUT"/></a><br></td>
			<td><a href="help.html"><input type="button" class="button" value="HELP"/></a><br></td>
			<td><a href="logout.php"><input type="button" class="button" value="Log Out"/></a><br></td>
		</table>
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
									<b><h3>".$row['m_id']."</h3></b>
									<b><h3>".$row['m_name']."</h3></b>
									<b><h3>".$row['con_num']."</h3></b>
									<b><h3>".$row['email']."</h3></b>
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