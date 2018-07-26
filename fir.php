<html>
<head>
<title>FIR</title>
<link rel="icon" href="https://s3.amazonaws.com/simbla-static/2018/2/5ab7e8454725bd001a6a8951/26-n5uycj.nph8d.png" type="image/x-icon" />
<link rel="shortcut icon" href="https://s3.amazonaws.com/simbla-static/2018/2/5ab7e8454725bd001a6a8951/26-n5uycj.nph8d.png" type="image/x-icon" />

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.image{
position: relative;
bottom:40px;
left:10px;
}
.smart{
float:right;
margin-top:-33px;
}
p.class{
text-align=right;
}
.govcolor{
margin-top:-22px;
margin-right:-10px;
margin-left:-10px;
padding:0px 10px;
background-color:#f2f2f2;
}
body {font-family: Arial;
background-image:url("https://images.firstpost.com/wp-content/uploads/2017/11/smart-india-hackathon-logo-Copy.png");;
background-repeat: no-repeat;
background-position: center;   
   background-size: auto;
}
/* Style the tab */
.tab {
margin-left:-10px;
margin-right:-10px;
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: white;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
table, th, td {
    border: 0px solid black;
    border-collapse: collapse;
    padding:10px;
    text-align: centre;
}
table.input[type="button]
{
background-color:red;
}
button {
  color: #900;
  font-weight: bold;
}
</style>

</head>
<body>
<div class="govcolor">
<header>
<h1 align="center">First Information Report</h1>
</header>
<img src="https://s3.amazonaws.com/simbla-static/2018/2/5ab7e8454725bd001a6a8951/26-n5uycj.nph8d.png" class="image" width="100" height="100" >
<img src="http://www.noticebard.com/wp-content/uploads/2017/10/smart-india-hackathon-2018-banner.jpg" class="smart" width="350" height="100" >
<hr>
</div>

<?php
	$ser="localhost";
	$usern="root";
	$passk="";
	$db="lr";
    $conn=mysqli_connect($ser,$usern,$passk,$db);
	
   
   if(isset($_POST['cnic'])) {
	   
	   $cnic = mysqli_real_escape_string($conn,$_POST['cnic']);
	   $sql = "SELECT * FROM fir WHERE cnic= '$casenumber'";
	    $result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0){
		  while($row=mysqli_fetch_array($result)){
			  $cnic=$row['cnic'];
			  $name=$row['name'];
			  $fathername=$row['fathername'];
			  $landline=$row['landline'];
			  $mobile=$row['mobile'];
			  $email=$row['email'];
			  $present=$row['present'];
			  $district=$row['district'];
			  $police=$row['police'];
			  $dincident=$row['dincident'];
			  $tincident=$row['tincident'];
			  $pincident=$row['pincident'];
			  $hincident=$row['hincident'];
			  $details=$row['details'];
		  }
echo "<form>
<table style='width:100%'>
<tr>
  <td> CNIC#:</td>
    <td>";
	echo "<input type='text' value='".$cnic."'></td>
	</tr>
	<tr>
	<td> Name:</td><br>
    <td>";
	echo "<input type='text' value='".$name."'></td> 
	</tr>
	<tr><td>Father's Name:</td>
    <td>";
	echo "<input type='text' value='".$fathername."'></td>
	</tr>
	<tr><td>Land Line:</td>
    <td>";
	echo "<input type='text' value='".$landline."'></td>
	</tr>
	<tr>
	<td>Mobile#:</td>
	<td>";
	echo "<input type='text' value='".$mobile."'></td>
	</tr><tr>
	<td>Email Address:</td>
	<td>";
	echo "<input type='text' value='".$email."'></td>
	</tr>
	
	<tr>
	<td>Present Address:</td>
	<td>";
	echo "<textarea rows='5' cols='50' >".$present."</textarea></td>
	</tr>
	<tr><td>Home District:</td>
	<td>";
	echo "<input type='text' value='".$district."'></td>
	</tr>
	<tr>
	<td>Home Police Station:</td>
	<td>";
	echo "<input type='text' value='".$police."'><td>	
	</tr>
	<tr><td>Date of Incident:</td>
    <td>";
	echo "<input type='text' value='".$dincident."'></td>
	</tr>
	<tr><td>Time Of Incident:</td>
    <td>";
	echo "<input type='text' value='".$tincident."></td></tr>
	<tr><td>Place Of Incident:</td>
<td>";
echo "<input type='text' value='".$pincident."'></td>
	</tr>
	<tr><td>Home Of Incident:</td>
<td>";
echo "<input type='text' value='".$hincident."'></td>
	</tr>
	<tr>
	<td>Details Of Incident:</td>
	<td>";
	echo "<textarea  rows='10' cols='100' >".$details."</textarea></td>
	</tr>
	<tr>
  <td></td>
  <td><input type='button' value='GENERATE PDF' style='position:absolute;font-size:15pt;color:white;background-color:green;border:2px solid #336600'></td>
  </tr>
  </table>
  </form>";
		}
		   else
	   echo "<script>alert('no data');
   window.location.assign('fir.html');</script>";
   }
  ?>
   <tr>
<td><form><a href="new 1.html"><input type="button"  value="Death Certificate " style="position:absolute;font-size:15pt;color:white;background-color:green;border:2px solid #336600;margin-top:-20px;margin-left:1150px"></a></form></td>
</tr>
	
	</div>
	</body>
	</html>