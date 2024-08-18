<?php
$con=mysqli_connect("localhost","root","samatha","PROJECT_DETAILS");
if($con)
{

	echo "connection successfull";
}
else
{
	echo "connection failed";


}

//$query="CREATE DATABASE `PROJECT_DETAILS`";
$query="CREATE TABLE `ORDER_DETAILS` (`NAME` VARCHAR(10),`EMAIL` VARCHAR(30),`NUMBER` VARCHAR(10),`ADDRESS` VARCHAR(50),`PAYMENT` VARCHAR(10),`PINCODE` VARCHAR(6))";
mysqli_query($con,$query);

?>
