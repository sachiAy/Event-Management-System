<?php
	require 'dbconfig/config.php';

$id=$_POST['p_id'];

    $delQuery= "DELETE FROM photographers WHERE p_id = '$id' ";

    $delResult = mysqli_query ($con, $delQuery);
    header('Location:photographers_admin.php');


mysqli_close($con);
?>