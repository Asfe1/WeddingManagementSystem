<?php 



session_start();




$con= mysqli_connect('localhost','root');

mysqli_select_db($con,'ems');
$comment = $_POST['comment'];
$email = $_POST['email'];

$qy=" INSERT INTO comment (email,comment) values('$email','$comment')";
    mysqli_query($con,$qy);
    header('location:contact.php');



 ?>