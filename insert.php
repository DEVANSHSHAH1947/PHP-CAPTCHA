<?php
session_start();
$con=mysqli_connect('localhost','root','','youtube');
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$captcha=$_POST['captcha'];
if($_SESSION['CODE']==$captcha){
	mysqli_query($con,"insert into enquiry(fname,lname,email) values('$fname','$lname','$email')");
	echo "Thank you ! Have A Great Day";
}else{
	echo "Please enter valid captcha code";
}
?>