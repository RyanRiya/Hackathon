<?php 


$ser="localhost";
$usern="id5086052_backend";
$pass="backend";
$db="id5086052_backend";
$table="posts";

// Create connection
$conn = new mysqli($ser, $usern, $pass, $db);
if (!$conn)
{
die ('Could not connect:' . mysqli_error());
}


$name= $_FILES['file']['name'];
$tmp_name= $_FILES['file']['tmp_name'];
$submitbutton= $_POST['submit'];
$position= strpos($name, "."); 
$fileextension= substr($name, $position + 1);
$fileextension= strtolower($fileextension);
$description= $_POST['description_entered'];
$success= -1;
$descript= 0;
if (empty($description))
{
$descript= 1;
}

echo"$name";

if (isset($name)) {

$path= 'Uploads/videos/';

if (!empty($name)){
if (($fileextension !== "mp4") && ($fileextension !== "ogg") && ($fileextension !== "webm"))
{
$success=0;
echo "The file extension must be .mp4, .ogg, or .webm in order to be uploaded";
}


else if (($fileextension == "mp4") || ($fileextension == "ogg") || ($fileextension == "webm"))
{
$success=1;
if (move_uploaded_file($tmp_name, $path.$name)) {
echo 'Uploaded!';
}
}
}
}




//Block 4
if((!empty($description)) && ($success == 1)){
mysqli_query("INSERT INTO $table (description, filename, fileextension)
VALUES ('$description', '$name', '$fileextension')");
}


//Block 5
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>

   <head>
      <title>Student</title>

   </head>
	
   <body>

<form action="" method='post' enctype="multipart/form-data">
Description of Video: <input type="text" name="description_entered"/><br><br>
<input type="file" name="file"/><br><br>
	
<input type="submit" name="submit" value="Upload"/>

</form>

</body>
</html>