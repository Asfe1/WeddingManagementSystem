<?php 
session_start();


$con= mysqli_connect('localhost','root','');
if($con){
echo "connection successfull";
}else{
echo "connection faild";
}

mysqli_select_db($con,'ems');
$name = $_POST['name'];
$email=$_POST['email'];

$phn = $_POST['phone'];
$tdate = $_POST['tdate'];
$edate=$_POST['edate'];
$venue=$_POST['venue'];
$etime=$_POST['etime'];

$loc=$_POST['loc'];
$plan=$_POST['plan'];
$guest=$_POST['guest'];


$q = "SELECT * From book where  email ='$email'  ";
$result=mysqli_query($con,$q);
$num = mysqli_num_rows($result);

if($num == 1){
	echo "failed";
}else{
	$qy=" INSERT INTO book (name,email,phone,tdate,edate,venue,etime,loc,plan,guest) values('$name','$email','$phn','$tdate','$edate','$venue','$etime','$loc','$plan','$guest')";
	mysqli_query($con,$qy);
	 header('location:inndex3.php');
}


 ?>