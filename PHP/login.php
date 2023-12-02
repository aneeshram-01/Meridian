<?php
$con=mysqli_connect("localhost","root","");
if(!$con){
    die("could not connect:".mysqli_connect_error());
}
mysqli_select_db($con,"ccal");
$username=$_POST['username'];
$emailId=$_POST['mail'];
$phone=$_POST['phoneNo'];
$pass=$_POST['password'];

mysqli_query($con,"INSERT INTO customer_details VALUES('$username','$emailId','$phone','$pass')")
or

die(mysqli_connect_error());
echo 'Inserted Successfully';
mysqli_close($con);

?>
