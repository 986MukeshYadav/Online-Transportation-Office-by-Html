<?php
 
if(isset($_POST['submit']))
{ 
    $Email = $_POST["em"];
    $password = $_POST["pswd"];
}
 
$con = mysqli_connect("localhost","root","","sign");
$sql="INSERT INTO user(Email,Password) VALUES ('$Email','$password');";

$que=mysqli_query($con,$sql);

if($que){
   echo "insert operation successfully";
}
else{
    echo "error";
}


?>