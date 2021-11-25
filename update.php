<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"ems");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
  body
  {
    width:550px;
    top:50%;
    left:50%;
    position: absolute;
    transform: translate(-50%,-50%);
    border: 1px solid green;
    height: 550px;
    padding: 20px;
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.4);
    border-radius: 10px;
  }
  h2{
    text-align: center;
    color: green;
    text-shadow: 2px 2px 5px lime;
  }
  .update label,input,textarea,select{
    padding: 6px;
    margin-top:5px;
    text-align: center;
  }
  .update input[type=submit]{
    width: 20%;
    margin: auto;
    background-color: rgba(47, 221, 108, 0.5);
  }
  </style>
</head>
<body>
  <h2>Update</h2>
  <form class="update" action="#" method="post" enctype="multipart/form-data">
  
  
    <br>
   
    <label for="img">Select Image: </label>
    <input type="file" name="book_img" id="img">
    <br>
    
    <label for="price">Description: </label>
    <textarea name="book_description" rows="10" cols="15"></textarea>
    <br>
     <label for="price">type: </label>
   <input type="input" name="type" id="img">
   
    <br>
    <input type="submit" name="submit1" value="Update">
  </form>

<?php
if (isset($_POST["submit1"])) {
  $fnm=$_FILES["book_img"]["name"];
  $dst="./asset./image/".$fnm;
  $dst1="image/".$fnm;
  move_uploaded_file($_FILES["book_img"]["tmp_name"],$dst1);

  mysqli_query($link,"insert into uppdate values('$_POST[book_description]','$dst1','$_POST[type]')");
}
 ?>


</body>
</html>
