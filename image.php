<?php
  // Create database connection
  $db = mysqli_connect("localhost", "id5086052_backend", "backend", "id5086052_backend");
  
  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$imagename = mysqli_real_escape_string($db,$_FILES['image']['name']);
  	$imagedata = mysqli_real_escape_string($db,file_get_contents($_FILES['image']['tmp_name']));
  	  	$imagetype = mysqli_real_escape_string($db,$_FILES['image']['type']);
  	  	if(substr($imagetype,0,5)=="image")
    {
        mysqli_query($db,"insert into image values ('$imagedata','$imagename')");
         echo "image uploaded";
    }
    else
        echo "error";
  }
  echo $imagedata;
?>
<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
</head>
<body>
<div id="content">
  <form action="" method="POST"  enctype="multipart/form-data">
  	<input type="hidden" name="size" value="1000000">
  	<div>
  	  <input type="file" name="image">
  	</div>
  	<div>
  		<button type="submit" name="upload">POST</button>
  	</div>
  </form>
</div>
</body>
</html>