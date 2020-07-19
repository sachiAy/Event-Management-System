<?php 

	//Unauthorized Check
    session_start();
    if(!isset($_SESSION['usertype']) || $_SESSION['usertype'] != 'a'){
       header('Location:login.php');
       exit();
       }

$con=mysqli_connect('localhost','root','');

if(!mysqli_select_db($con,'logindb')){
    echo "database not selected";
}
if (isset($_POST['submit'])){

    $fileName=$_FILES['fileToUpload']['name'];
    $fileType=$_FILES['fileToUpload']['type'];
    $fileSize=$_FILES['fileToUpload']['size'];
    $tempName=$_FILES['fileToUpload']['tmp_name'];

    $uploadTo='img/';

    $fileUploaded=move_uploaded_file($tempName,$uploadTo. $fileName );


$id=$_POST['photographerID'];
$name=$_POST['name'];
$contact=$_POST['contact'];
$email=$_POST['email'];

$sql="INSERT INTO photographers(p_id, p_name, con_num, email, imglink) VALUES ('$id', '$name', '$contact', '$email', '$fileName')";
if(!mysqli_query($con,$sql)){
    echo "<script>alert('Not inserted')</script>";

}
else{
    echo "<script>alert('inserted')</script>";
}
}
header("refresh:2; url=photographers_add.php");
 ?>