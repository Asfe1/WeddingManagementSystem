


<?php 
session_start();


$con= mysqli_connect('localhost','root','');
if($con){
echo "connection successfull";
}else{
echo "connection faild";
}

mysqli_select_db($con,'ems');
$name = $_POST['uname'];
$pass = $_POST['psw'];
$email= $_POST['email'];


$q = "SELECT * From registration where name ='$name' && password ='$pass' &&  email= '$email'   ";
$result=mysqli_query($con,$q);
$num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION ['email']=$email;
	 header('location:inndex3.php');

}else if ($name=="admin" && $pass=="1234" && $email=="1@gmail.com"){
	
 header('location:admin.php');
	
}
else{
	echo "nothing";
}

 ?>