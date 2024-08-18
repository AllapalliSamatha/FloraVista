<?php
    echo "hello";
$connect=mysqli_connect('localhost','root','','PROJECT_DETAILS');
    if($connect)
{
echo "success";
}
else
{
echo "fail;
}
  
   
//$query1=CREATE DATABASE 'PROJECT_DETAILS' ;
//mysqli_query($connect,$query1);
 $query3="CREATE TABLE  `USER_DETAILS` ("`NAME` VARCHAR(20), `EMAIL` VARCHAR(30),  `PHONE_NUMBER` VARCHAR(20), `ADDRESS` VARCHAR(50),`PAYMENT` VARCHAR(10), `PINCODE` VARCHAR(10)");
 mysqli_query($connect, $query3);

?>

