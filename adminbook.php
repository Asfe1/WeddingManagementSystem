

<?php


 include_once('connection.php');
 $query="select name, email, phone, tdate, edate, etime, loc, plan, guest from book ";
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
  <h2>BOOKING INFORMATION</h2>        
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>name</th>
        <th>email</th>
         <th>phone</th>
          <th>tdate</th>
           <th>edate</th>
            <th>etime</th>
             <th>loc</th>
              <th>plan</th>
               <th>guest</th>
                

       
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
             <td><?php echo $rows['phone'] ?></td>
                   <td><?php echo $rows['tdate'] ?></td>
                     <td><?php echo $rows['edate'] ?></td>
                   <td><?php echo $rows['etime'] ?></td>
                 <td><?php echo $rows['loc'] ?></td>
               <td><?php echo $rows['plan'] ?></td>


             <td><?php echo $rows['guest'] ?></td>
          



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
