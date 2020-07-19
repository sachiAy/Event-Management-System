


<?php
	require 'dbconfig/config.php';

$id=$_POST['m_id'];

    $delQuery= "DELETE FROM musicians WHERE m_id = '$id' ";

    $delResult = mysqli_query ($con, $delQuery);
    header('Location:music_admin.php');


mysqli_close($con);
?>