<!DOCTYPE html>
<html>
<head>
    <title>Wedding Management</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
    	<div class="main">
    		<div class="logo">
    			<img src="logo1.png">
    		</div>
         <ul>
         	<li><a href="hoome.php">Home</a></li>
            <li><a href="about.php">About</a></li>
             <li><a href="venue.php">Venues</a></li>
             <li><a href="serve.php">Services</a></li>
              <li><a href="contact.php">Contact</a></li>
              <li><a href="eventchart.php">Event</a></li>
              <li><a href="eventform.php">Booking</a></li>

              <li><a href="image.php">Gallery</a></li>
                <li><a href="signup.php">Sign-Up</a></li>
                <button type="button"  class="btn btn-info"><a href="logout.php">Log-out</a> </button>





         </ul>
        </div>
<!-- Button to open the modal login form -->
<button onclick="document.getElementById('id01').style.display='block'">Login</button>

<!-- The Modal -->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'"
class="close" title="Close Modal">&times;</span>

  <!-- Modal Content -->
  <form class="modal-content animate" action="userlog.php" method="post">
    <div class="imgcontainer">
      <img src="logo1.png" alt="logo1" class="logo1">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>
      <label for="uname"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <button type="submit">Login</button >
      
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
    </div>
  </form>
</div>
 
  </div>
</div>

        	
        </div>
      


 </header>
</body>
</html>


    


