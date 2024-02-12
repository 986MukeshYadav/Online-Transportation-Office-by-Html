<?php
 
if(isset($_POST['submit']))
{ 
    $Licence_No= $_POST["number"];
    $Date_Of_Birth = $_POST["date"];
}
 
$con = mysqli_connect("localhost","root","","Status");
$sql="INSERT INTO Licence(Licence_No,Date_Of_Birth) VALUES ('$Licence_No','$Date_Of_Birth');";

$que=mysqli_query($con,$sql);

if($que){
   echo "insert operation successfully";
}
else{
    echo "error";
}


?>