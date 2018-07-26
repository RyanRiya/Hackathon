<html>
<head>
<title>Policy</title>
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
#head{


</style>
</head>
<body>
<div class="govcolor">
<header>
<h1 align="center"><strong>PRI</strong></h1>
</header>
<img src="https://s3.amazonaws.com/simbla-static/2018/2/5ab7e8454725bd001a6a8951/26-n5uycj.nph8d.png" class="image" width="80" height="80" >
<img src="http://www.noticebard.com/wp-content/uploads/2017/10/smart-india-hackathon-2018-banner.jpg" class="smart" width="350" height="100" >

</div>
<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')">APP</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">POST</button>
</div>
</body>
<?php

	$ser="localhost";
	$usern="root";
	$passk="";
	$db="lr";
    $con=mysqli_connect('localhost','root','','lr') or die(mysql_error());  
	
   
   if(isset($_POST['policynumber'])) {
	   $policynumber = mysqli_real_escape_string($con,$_POST['policynumber']);
	   $sql = "SELECT * FROM policy WHERE policynumber= '$policynumber'";
	    $result = mysqli_query($con,$sql);
		if(mysqli_num_rows($result)>0){
		  while($row=mysqli_fetch_array($result)){
			  $policynumber=$row['policynumber'];
			  $nameofinsurance=$row['nameofinsurrance'];
			  $dateofdeath=$row['dateofdeath'];
			  $placeofdeath=$row['placeofdeath'];
			  $nameofclient=$row['nameofclient'];
			  $statementofdeath=$row['statementofdeath'];
		  }
echo "<form>
<table style='width:100%'>
<h1 align='center'> Policy Details </h1>
  <tr>
    <td>Policy number:</td><td>";
	echo "<input type='text' value='".$policynumber."' ></td>
  </tr>
  <tr>
    <td>Name of Insurance:</td>
    <td>";
	echo "<input type='text' value='".$nameofinsurance."'></td>
  </tr>    <td>Date of Death:</td>
    <td>";
	echo "<input type='text' value='".$dateofdeath."'></td>
  </tr>
  <tr>
    <td>Place of Death:</td>
    <td>";
	echo "<input type='text' value='".$placeofdeath."'></td>
  </tr>    <td>Name of Client:</td>
    <td>";
	echo "<input type=text' value='".$nameofclient."'></td>
  </tr>
  <tr><td></td></tr>
  <tr>
    <td>Statement of Death:</td>
    <td>";
	echo "<textarea  rows='10' cols='100' value='".$statementofdeath."'></textarea></td>
  </tr>
      <td>Original policy Document</td>
    <td><form><input type='file' value=' submit ' style='font-size:15pt;color:white;background-color:green;border:1px solid #027a06;padding:5px;align:centre;'></form></td>
  </tr>
  <tr>
  <td></td></br>
  </tr>
  </form>";
   }
   else
	   echo "<script>alert('no data');
   window.location.assign('pol.html');</script>";
   }
  ?>

<div id="London" class="tabcontent">
<table>
  <tr>
<td><form><a href="new2.html"><input type="button"  value=" PMR " style="position:absolute;font-size:15pt;color:white;background-color:green;border:2px solid #336600;margin-top:-15px;margin-left:1150px"></a></form></td>
</tr>
</table>
 
</div>

<div id="Paris" class="tabcontent">
<h1 align="center">Grievance Redressal Cell of IRDA</h1>
<table style="width:100%">
<tr>
  <td>Policy No:</td>
    <td><input type="text" name=""></td>
	</tr>
	<tr>
	<td>Name Of Insured:</td><br>
    <td><input type="text" name=""></td> 
	
	</tr>
<tr>
	<td>Nominee (or) HSC  :</td>
	<td><input type="text" name=""></td> 
	</tr>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<tr><td></td></tr>
	<tr>
	<td>Complaint:</td>
	<td><textarea  rows="10" cols="100" name=""></textarea></td>
	</tr>
	<tr>
	<td></td>
	<tr>
     <td><form><input type="submit" value=" submit " style="font-size:15pt;color:white;background-color:green;border:2px solid #336600;padding:5px;"></form></td>
	</tr>
	</tr>
	
	</table>
</div>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>

</body>
</html>
   


