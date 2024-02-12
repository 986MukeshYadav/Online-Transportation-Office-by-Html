<?php
 
if(isset($_POST['submit']))
{
    $Name = $_POST["name"];
    $Occupation = $_POST["occ"];
$Age=$_POST["age"];
$Gender=$_POST["gen"];
    $Email=$_POST["em"];
$CitizenshipNumber=$_POST["ciz"];
$Address=$_POST["addr"];
$District=$_POST["dist"];
    $Pincode=$_POST["pin"];
$VehicleName=$_POST["veh"];
$Date=$_POST["date"];
$Time=$_POST["time"];
$MobileNo=$_POST["mob"];
$NearOffice=$_POST["near"];
$Message=$_POST["mess"];


}
 
$con = mysqli_connect("localhost","root","","signin");
$sql="INSERT INTO registration VALUES (' $Name','$Occupation','$Age','$Gender','$Email','$CitizenshipNumber',' $Address','$District','$Pincode','$VehicleName','$Date','$Time','$MobileNo','$NearOffice','$Message');";

$que=mysqli_query($con,$sql);

if($que){
   echo "insert operation successfully";
}
else{
    echo "error";
}


?>