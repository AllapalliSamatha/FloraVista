<?php
    
$conn=mysqli_connect("localhost","root","","USER_DATABASE");
if($conn)
{
echo "success"."<br>";
}
else
{
echo "fail";

}
$name=$_POST['name'];
    //echo $name;
    $email=$_POST['email'];
   // echo $email;
    $phone=$_POST['phone'];
   // echo $phone;
   $address=$_POST['address'];
  // echo $address;
$payment=$_POST['payment'];
//echo $payment;
    $pincode=$_POST['pincode'];
//$query="CREATE DATABASE `USER_DATABASE`";
//$query3="CREATE TABLE  `ORDER_DETAILS` (`NAME` VARCHAR(20), `EMAIL` VARCHAR(30),  `PHONE_NUMBER` VARCHAR(20), `ADDRESS` VARCHAR(50),`PAYMENT` VARCHAR(10), `PINCODE` VARCHAR(10))";
//mysqli_query($conn,$query3);
$query="INSERT INTO `ORDER_DETAILS`(`NAME`, `EMAIL`,  `PHONE_NUMBER` , `ADDRESS`,`PAYMENT`,`PINCODE`) VALUES('$name','$email','$phone','$address','$payment','$pincode')";
mysqli_query($conn,$query);

?>
<html>
<body>
<center style="color:black;padding: top 20px;" > 
<?php 
session_start();
$_SESSION["name"]=$_POST['name'];
$_SESSION["thank"]="Thank You!";
echo $_SESSION["name"]." " ."<b><i>successfully placed your order</i></b>";
	
?>
<br>+
<img src="thank.avif">
</center>
</body>
</html>
