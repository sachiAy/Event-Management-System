<?php 
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


$id=$_POST['musicID'];
$name=$_POST['name'];
$contact=$_POST['contact'];
$email=$_POST['email'];

$sql="INSERT INTO musicians(m_id, m_name, con_num, email, imglink) VALUES ('$id', '$name', '$contact', '$email', '$fileName')";
if(!mysqli_query($con,$sql)){
    echo "not inserted";

}
else{
    echo "<script>alert('inserted')</script>";
}
}
header("refresh:2; url=music_add.php");
 ?>