<?php
 
if(isset($_POST['submit']))
{ 
    $name = $_POST["name"];
    $city = $_POST["ci"];
	$country = $_POST["co"];
	$email = $_POST["em"];
	$password = $_POST["pswd"];
	
}
 
$con = mysqli_connect("localhost","root","","signin");
$sql="INSERT INTO register2 (Name,City,Country,Email,Password) VALUES ('$name','$city','$country','$email','$password');";

$que=mysqli_query($con,$sql);

if($que){
   echo "insert operation successfully";
}
else{
    echo "error";
}


?>