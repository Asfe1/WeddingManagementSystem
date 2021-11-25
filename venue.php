
<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"ems");
 ?>
<?php
session_start();

$res=mysqli_query($link,"select * from uppdate where type='venue'");

?>

<!DOCTYPE html>
<html>
<head>
<style media="screen">
body{
  background-image: url("back3.jpg");
  height :90vh;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}
.Header{
  margin-top:100px;
  margin-left:180px;

}

.Header h1{
  color: white;
}

</style>

  <title></title>
    

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">

  

</head>

<body>
  

<?php
while ($row=mysqli_fetch_array($res)) {
 ?>

</div>
</nav>

<section class="my-5">
 
    <h3 class="text-center">VENUES</h3>
  </div>
  <body bgcolor="#99A3A4">
   <div class="py-5" >
  <div class="container-fluid">  
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12"> 
   
       
     
        
 
   

     <img src="<?php echo $row["pic"]; ?>" class="img-fluid" width="300" height="300">
      
         <img src="adnew.jpg" class="img-fluid" width="300" height="300">
      
         <img src="out3.jpg" class="img-fluid" width="300" height="300">

   

    </div>
     
     <div class="col-lg-6 col-md-6 col-12"> 
         <body bgcolor="#E67E22"> 

       <h1>IN-DOOR WEDDING</h1>
       <p>
         <?php echo $row["test"]; ?>
       </p>
       

        <h1>OUT-DOOR WEDDING</h1>
        <p>An outdoor wedding comes with a stunning backdrop on its own. Whether it’s lush gardens, a vast mountain range, or a quaint creek, you can be sure that an outdoor wedding will have a beautiful setting.Outdoor weddings can be less expensive than indoor weddings. The beautiful scenery and of course, you and your partner will be the center of attention, meaning a lot of extra decorations aren’t needed. One area that you can save on, specifically, is a florist. The outdoors will supply the organic, soft feeling you crave without the extra cost. An outdoor wedding venue allows you to keep things simple, which can mean a more affordable wedding for you.
</p>
         


    </div>

   </div>
  </div>
</section>

 <?php
}
  ?>
 
  </div>
</nav>

<section class="my-5">
 
    <h3 class="text-center">VENUES</h3>
  </div>
  <body bgcolor="#99A3A4">
   <div class="py-5" >
  <div class="container-fluid">  
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12"> 
   
       
     
        
 
   

     <img src="in1.jpg" class="img-fluid" width="300" height="300">
      
         <img src="adnew.jpg" class="img-fluid" width="300" height="300">
      
         <img src="out3.jpg" class="img-fluid" width="300" height="300">

   

    </div>
     
     <div class="col-lg-6 col-md-6 col-12"> 
         <body bgcolor="#E67E22"> 

       <h1>IN-DOOR WEDDING</h1>
       <p> Indoor weddings allow you to be prepared for unpredictable weather.You can stay on top of the weather, making sure that your wedding will be stunning, even if the clouds outside aren’t. Additionally, indoor wedding venues are great for winter weddings.But it will be quite expensive rather than outdoor wedding.You can invite as many guests you want.We will provide you the best indoor & outdoor wedding set-up according to your wish.</p>
       

        <h1>OUT-DOOR WEDDING</h1>
        <p>An outdoor wedding comes with a stunning backdrop on its own. Whether it’s lush gardens, a vast mountain range, or a quaint creek, you can be sure that an outdoor wedding will have a beautiful setting.Outdoor weddings can be less expensive than indoor weddings. The beautiful scenery and of course, you and your partner will be the center of attention, meaning a lot of extra decorations aren’t needed. One area that you can save on, specifically, is a florist. The outdoors will supply the organic, soft feeling you crave without the extra cost. An outdoor wedding venue allows you to keep things simple, which can mean a more affordable wedding for you.
</p>
         


    </div>

   </div>
  </div>
</section>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


</body>
</html>
  