

<?php


	$ser="localhost";
	$usern="root";
	$passk="";
	$db="lr";
    $con=mysqli_connect('localhost','root','','lr') or die(mysql_error());  
	
   
   if(isset($_POST['submit'])) {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($con,$_POST['username']);
      $mypassword = mysqli_real_escape_string($con,$_POST['password']); 
      
      $sql = "SELECT * FROM tb1 WHERE batch_id = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result);//,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
	  echo "
	    <script>
	      window.location.assign('bhav.html');
	    </script>
	    ";         
      }
	  else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>
<html>
<head>
<link rel="stylesheet" href="page.css">
<style>
body{background:url('https://governmentcontracts.dentons.com/-/media/images/website/background-images/regions/united-states/us_regional_image_v7.jpg');
  margin:0px;
  font-family: 'Ubuntu', sans-serif;
	background-size: 100% 110%;
}
h1, h2, h3, h4, h5, h6, a {
  margin:0; padding:0px;
}
.login {
  margin:170 auto;
  max-width:500px;
  
}
.login-header {
  color:#008000;
  text-align:center;
  font-size:300%;
}
}
.login-form {
  border:.5px solid #fff;
  background:#4facff;
  border-radius:10px;
  box-shadow:0px 0px 10px #000;
}
.login-form h3 {
  text-align:left;
  margin-left:47px;
  color:white;
}

.login-form {
  box-sizing:border-box;
  padding-top:15px;
	padding-bottom:50%;
  margin:5% auto;
  text-align:center;
}
.login input[type="text"],
.login input[type="password"] {
  max-width:400px;
	width: 80%;
  line-height:3em;
  font-family: 'Ubuntu', sans-serif;
  margin:1em 2em;
  border-radius:5px;
  border:2px solid #f2f2f2;
  outline:none;
  padding-left:20px;
}
.login-form input[type="button"]
 {
  height:30px;
  width:100px;
  background:#fff;
  border:1px solid #f2f2f2;
  border-radius:20px;
  color: slategrey;
  text-transform:uppercase;
  font-family: 'Ubuntu', sans-serif;
  cursor:pointer;
}

</style>

</head>
<body>
<div class="login">
 <div class="login-header">
  
  </div>
  <div class="login-form">
      <form action="#" method="post">
    <h3>Username:</h3>
    <input type="text"  placeholder="Username" name="username"required><br>
    <h3>Password:</h3>
    <input type="password" placeholder="Password" name="password">
    <br>
    <input type="submit" value="submit" name="submit" class="login-button"/>
	<br>
	</form>
    <a href="register.php"  ><input type="button" value="register" style="position: absolute; top: 40px;right:40px"> </a>
     </div>
</div>


</body>
</div>
</html>