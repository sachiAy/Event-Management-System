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

$sql="UPDATE musicians SET p_name='$name',con_num='$contact',email='$email',imglink='$fileName' WHERE p_id='$id' " ;
if(!mysqli_query($con,$sql)){
    echo "not Updated";

}
else{
    echo "Updated";
}
}
header("refresh:2; url=music_update.php");







 ?>