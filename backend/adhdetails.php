<!DOCTYPE html>
<html>
<head>
<style>

header{
    background-color:#b3eafa;
}

#title{
    margin-top:-65px;
    margin-left:100px;
}
	
 table, td, th {    
  
    text-align: left:
}


table {
      
    border-collapse: collapse;
    width: 50%;
}
th {
    padding: 25px;
}
td{
padding-left:35px;
}
#photo{
  position: absolute;
    top: 8px;
    right: 16px;
}
.clearfix:after {
display:block;
clear:both;
}
.next{
	float:right;
	padding-right:100px;
}
</style>
</head>
<body id="background">
<header>
    <img src="TamilNadu.svg.png" width="80" height="80">
</header>
   <h1 id="title">Tamilnadu Police Department</h1>
<body>
<?php
  $host="localhost";
  $name="id5086052_backend";
  $pass="backend";
  $dbname="id5086052_backend";
  $errors = array();
  $mysqli = new mysqli($host,$name,$pass,$dbname);
    $ge=$_POST['search'];
    $resultset=$mysqli->query("select * from databack where adhaar='$ge'");
	    if($resultset->num_rows!=0)
    {
        while($row=$resultset->fetch_assoc())
        {
			echo"<table>";
echo "<tr><th>Name:</th><td>";
echo"	<input type='text' id='name' value='$row[name]'disabled />";
echo"<br>";
echo "<tr><th>adhaar:</th><td>";
echo"	<input type='text' id='name' value='$row[age]'disabled/>";
echo"<br>";
echo "<tr><th>DOB:</th><td>";
echo"	<input type='text' id='name' value='$row[DOB]'disabled/>";
echo"<br>";
echo "<tr><th>Salary:</th><td>";
echo"	<input type='text' id='name' value='$row[adhaar] 'disabled/>";
echo"<br>";
echo "<tr><th>photo:</th><td>";
echo"	<img src='data:image;base64,".$row['photo']."' width='100' height='100' disabled>";
echo"<br></tr></tr>";
echo"</table>";


		}
	}
?>
<form action="photoins.php" method="post"  enctype="multipart/form-data">
 <input type="file" name="image1">
<input type="button" value="insert" name="insert">
</form>





<a href="#" class="next">Licence</a>
</body>
</html>