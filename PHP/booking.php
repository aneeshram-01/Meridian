<?php
$con=mysqli_connect("localhost","root","");
if(!$con){
    die("could not connect:".mysqli_connect_error());
}
mysqli_select_db($con,"ccal");
$username=$_POST['user'];
$Date=$_POST['date'];
$estimate=$_POST['count'];
$price=$_POST['budget'];
$destination=$_POST['dest'];
$eventtype=$_POST['type'];




mysqli_query($con,"INSERT INTO customer_booking VALUES('$username','$Date','$estimate','$price','$destination','$eventtype')")
or

die(mysqli_connect_error());
echo 'Inserted Successfully';
mysqli_close($con);

?>