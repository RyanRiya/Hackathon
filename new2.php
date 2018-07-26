<html>
<head>
<title>Autopsy Endorsement</title>
<link rel="icon" href="https://s3.amazonaws.com/simbla-static/2018/2/5ab7e8454725bd001a6a8951/26-n5uycj.nph8d.png" type="image/x-icon" />
<link rel="shortcut icon" href="https://s3.amazonaws.com/simbla-static/2018/2/5ab7e8454725bd001a6a8951/26-n5uycj.nph8d.png" type="image/x-icon" />

<meta name="viewport" content="width=device-width, initial-scale=1">

<style>
table
{
border:0px solid black;
border-collapse:collapse;


}
h1{
text-align:center;
}

td{
padding:10px;
text-align:left;
}
body {font-family: Arial;
background-image:url("https://images.firstpost.com/wp-content/uploads/2017/11/smart-india-hackathon-logo-Copy.png");;
background-repeat: no-repeat;
background-position: center;   
   background-size: auto;
}

}
.image{
position: relative;
bottom:60px;
left:10px;
}


div{
border-width:100%;
background-color:#f2f2f2;
border-padding:20px;
}
.smart{
float:right;
margin-top:-33px;
}
.govcolor{
margin-top:-22px;
margin-right:-10px;
margin-left:-10px;
padding:0px 10px;
background-color:#f2f2f2;
}


</style>
</head>
<body >
<div class="govcolor">
<header>
<h1 align="center"><strong>PRI</strong></h1>
</header>
<img src="https://s3.amazonaws.com/simbla-static/2018/2/5ab7e8454725bd001a6a8951/26-n5uycj.nph8d.png" class="image" width="90" height="90" >
<img src="http://www.noticebard.com/wp-content/uploads/2017/10/smart-india-hackathon-2018-banner.jpg" class="smart" width="350" height="100" >
<hr>
</div>

    <tr>
<td>
<form>
<a href="fir.html"><input type="button"  value=" FIR " style="position:absolute;font-size:15pt;color:white;background-color:green;border:2px solid #336600;margin-top:100px;margin-left:1150px">
</a>
</form>
</td>
</tr>
  </body>

<?php
	$ser="localhost";
	$usern="root";
	$passk="";
	$db="lr";
    $conn=mysqli_connect($ser,$usern,$passk,$db);
	
   
   if(isset($_POST['casenumber'])) {
	   
	   $casenumber = mysqli_real_escape_string($conn,$_POST['casenumber']);
	   $sql = "SELECT * FROM postmortem WHERE caseno= '$casenumber'";
	    $result = mysqli_query($conn,$sql);
		if(mysqli_num_rows($result)>0){
		  while($row=mysqli_fetch_array($result)){
			  $casenumber=$row['caseno'];
			  $name=$row['name'];
			  $age=$row['age'];
			  $fathername=$row['fathername'];
			  $address1=$row['address1'];
			  $date=$row['date'];
			  $sectionoflaw=$row['sectionoflaw'];
			  $policestation=$row['policestation'];
			  $address2=$row['address2'];
			  $relationshipwithdeceased=$row['relationshipwithdeseased'];
			  $purposeofreport=$row['purposeofreport'];
		  }
echo "<form>
<table style='width:100%'>
<h1 align='center'> Autopsy Endorsement </h1>
  <tr>
    <td>case number:</td><td>";
	echo "<input type='text' value='".$casenumber."' ></td>
  </tr>
  <tr>
    <td>Name of deceased:</td>
    <td>";
	echo "<input type='text' value='".$name."'></td>
  </tr>    <td>Age:</td>
    <td>";
	echo "<input type='text' value='".$age."'></td>
  </tr>
  <tr>
    <td>Father name:</td>
    <td>";
	echo "<input type='text' value='".$fathername."'></td>
  </tr>    <td>Date:</td>
    <td>";
	echo "<input type='text' value='".$date."'></td>
  </tr>
  <tr><td></td></tr>
<td><strong>Section(s) of law</strong></td>
<td>";
echo "<input type='text' value='".$sectionoflaw."'></td>
</tr>
<tr>
<td><strong>Police station</strong></td>
<td>";
echo "<input type='text' value='".$policestation."'></td>
</tr>
<tr>
<td><strong>Name & address of applicant</strong></td>
<td>";
echo "<textarea rows='5' cols='50'>".$address2."</textarea></td>
</tr>
<tr>
<td><strong>Relationship with deceased</strong></td>
<td>";
echo "<input type='text' value='".$relationshipwithdeceased."'></td>
</tr>
<tr>
<td><strong>Purpose of report</strong></td>
<td>";
echo "<input type='text' value='".$purposeofreport."'>
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
   window.location.assign('new2.html');</script>";
   }
  ?>

</html>
