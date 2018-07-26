<?php
//session_start();
$ser="localhost";
$usern="id5086052_verify";
$pass="backend";
$db="id5086052_root";

// Create connection
$conn = new mysqli($ser, $usern, $pass, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 if (isset($_POST['register'])){
    $user=$_POST['user'];
    $bat=$_POST['bat'];
    $em1=$_POST['em1'];
    $ps1=$_POST['ps1'];

$sql = "INSERT INTO tb1 (name,batch_id,mail,password)
VALUES ( '$user', '$bat','$em1','$ps1');";

if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
	 echo "
	    <script>
	      window.location.assign('login.php');
	    </script>
	    ";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
	 echo "
	    <script>
	      window.location.assign('register.php');
	    </script>
	    ";
}
}
$conn->close();
?>



<html>
<head>
<link rel="stylesheet" href="reg1.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<script>
var check = function(){
  if (document.getElementById('psw').value ==
    document.getElementById('cpsw').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'not matching';
  }
}
function validateMail(mail, p2) {
if (mail.value != p2.value || mail.value == '' || p2.value == '') {
    p2.setCustomValidity('email incorrect');
} else {
    p2.setCustomValidity('');
}
}
 function check(input) {
        if (input.value != document.getElementById('psw').value) {
            input.setCustomValidity('Password Must be Matching.');
        } else {
            // input is valid -- reset the error message
            input.setCustomValidity('');
        }
    }
</script>
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
  margin:10 auto;
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
  text-decoration:none;
}

.login-form {
  box-sizing:border-box;
  padding-top:15px;
	padding-bottom:50%;
  margin:5% auto;
  text-align:center;
    text-decoration:none;
}
.login input[type="text"],
.login input[type="password"] {
	  text-decoration:none;
  max-width:400px;
	width: 80%;
  line-height:2em;
  font-family: 'Ubuntu', sans-serif;
  margin:1em 2em;
  border-radius:5px;
  border:2px solid #f2f2f2;
  outline:none;
  padding-left:20px;
}
.login-form input[type="submit"] {
  height:30px;
  width:100px;
  background:#fff;
  border:1px solid #f2f2f2;
  border-radius:20px;
  color: slategrey;
  text-transform:uppercase;
  font-family: 'Ubuntu', sans-serif;
  cursor:pointer;
    text-decoration:none;
}
#Batch-id{
	width:65%;
}
#drop{
	margin-left:35px;
height:30px;
 border-radius:5px;
  border:2px solid #f2f2f2;
}

</style>


</head>
<body>
<div class="login">
 
  <div class="login-form">
   <form action="#" method="post">
	<h3><label for="usrname">Username:</label></h3>
    <input type="text" id="usrname" name="user" placeholder="username" required>
    <h3><label for="">Batch-id:</label></h3>
	<select id="drop">
  <option value="volvo">TN</option>
  <option value="saab">GJ</option>
  <option value="opel">KL</option>
  <option value="audi">KT</option>
  </select><input type="text" id="Batch-id" name="bat"   pattern="[0-9]{10}" placeholder="Enter Batch-id " required>
    <h3><label for="mail">Email-id:</label></h3>
    <input type="text" id="mail" name="em1" placeholder="Enter Email-id"pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" title="mail should has @ and . with rquired format. e.g. john@gmail.com" required>
    <h3><label for="mail">Confirm Email-id:</label></h3>
    <input type="text"  name="em2" placeholder="reenter your Email-id"  onfocus="validateMail(document.getElementById('mail'), this);" 
    oninput="validateMail(document.getElementById('mail'), this);" required>
	<h3><label for="psw">Password:</label></h3>
    <input type="password" id="psw" name="ps1" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Enter password" required>
    <h3><label for="psw">Confirm-Password:</label></h3>
    <input type="password" id="cpsw" name="ps2" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" placeholder="Re Enter password" oninput="check(this)" required>
    <input type="submit" value="register"name="register">
    </form>
     </div>
</div>

<div id="message">
  
  <p id="letter" class="invalid"></p>
  <p id="capital" class="invalid"></p>
  <p id="number" class="invalid"></p>
  <p id="length" class="invalid"></p>
</div>
<script>
function submit('email')
{
 var reg = /^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/;
 if (reg.test(email)){
 return true; 
}
 else{
 return false;
 } 
}
</script>
				
<script>
var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");
  myInput.onfocus = function() {
    document.getElementById("message").style.display = "block";
}
myInput.onfocus = function() {
    document.getElementById("message").style.display = "none";
}
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
  </script>
</body>
</div>
</html>