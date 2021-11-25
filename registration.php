<?php 
session_start();


$con= mysqli_connect('localhost','root','');
if($con){
echo "connection successfull";
}else{
echo "connection faild";
}

mysqli_select_db($con,'ems');
$name = $_POST['user-name'];
$pass = $_POST['password'];
$add = $_POST['address'];
$email=$_POST['email'];


$q = "SELECT * From registration where  email ='$email'  ";
$result=mysqli_query($con,$q);
$num = mysqli_num_rows($result);

if($num == 1){
	echo "failed";
}else{
	$qy=" INSERT INTO registration (name,password,address,email) values('$name','$pass','$add','$email')";
	mysqli_query($con,$qy);
	 header('location:inndex3.php');
}


 ?>