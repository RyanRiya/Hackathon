<?php
$ser="localhost";
$usern="id5086052_backend";
$pass="backend";
$db="id5086052_backend";
$table="posts";

// Create connection
$conn = new mysqli($ser, $usern, $pass, $db);

$result= mysqli_query( "SELECT description, filename, fileextension FROM $table ORDER BY ID DESC LIMIT 5" ) 
or die("SELECT Error: ".mysqli_error()); 

print "<table border=1>\n"; 
while ($row = mysqli_fetch_array($result)){ 
$videos_field= $row['filename'];
$video_show= "Uploads/videos/$videos_field";
$descriptionvalue= $row['description'];
$fileextensionvalue= $row['fileextension'];
print "<tr>\n"; 
print "\t<td>\n"; 
echo "<font face=arial size=4/>$descriptionvalue</font>";
print "</td>\n";
print "\t<td>\n"; 
echo "<div align=center><video width='320' controls><source src='$video_show' type='video/$fileextensionvalue'>Your browser does
not support the video tag.</video></div>";
print "</td>\n";
print "</tr>\n"; 
} 
print "</table>\n";  

?> 
