

 ?>

 <?php 
session_start();


$con= mysqli_connect('localhost','root');
if($con){
echo "connection successfull";
}else{
echo "connection faild";
}

mysqli_select_db($con,'ems');

$comment = $_POST['tarea'];
$email=$_POST['email'];


if(isset($_POST['add']))
{

	
       	$qy=" INSERT INTO evnt (email,comment) values('$email','$comment')";
	mysqli_query($con,$qy);
	header('location:inndex3.php');


       



}


if(isset($_POST['remove']))
{


	$qy="DELETE From evnt where email='$email'";
	mysqli_query($con,$qy);
	header('location:inndex3.php');
	
	 

} 




 ?>
