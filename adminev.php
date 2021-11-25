

<?php

 $username = $_SESSION['username'] ;
 include_once('connection.php');
 $query="select r.name,r.email,m.comments from message m join registration r on (m.name=r.name)";
$result=mysqli_query($con,$query);

?>
<!DOCTYPE html>
<html>
<head>
  <title></title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
  

</head>
<body>
  <div>

  



  
    <div class="py-5">

<div class="container" >
  <h2>All messages</h2>        
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>user name</th>
        <th>Email</th>
         <th>message</th>
       
      </tr>
    </thead>
    <tbody>
      <?php 
        while($rows=mysqli_fetch_assoc($result))
        {
      ?>
          <tr>
            <td><?php echo $rows['name'] ?></td>
             <td><?php echo $rows['email'] ?></td>
             <td><?php echo $rows['comments'] ?></td>
          </tr>
          <?php 
        }
       ?>
       
    </tbody>
  </table>
</div>


</div>





  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


</body>
</html>
