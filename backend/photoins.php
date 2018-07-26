<?php
$ser="localhost";
$usern="id5086052_backend";
$pass="backend";
$db="id5086052_backend";

// Create connection

echo "oiuytrtyu";
$conn = new mysqli($ser, $usern, $pass, $db);

if(isset($_POST['insert']))
  {
      $adhaar=$POST('adhaar');
          $ge=$_POST['search'];
    $resultset=$mysqli->query("select * from databack where adhaar='$ge'");
	    if($resultset->num_rows!=0)
	    
    $image1=addslashes($_FILES['image1']['tmp_name']);
    $name1=addslashes($_FILES['image1']['name']);
    $image1=file_get_contents($image1);
    $image1=base64_encode($image1); 
          $image1=file_get_contents($image1);
    $image1=base64_encode($image1); 
    $sql1 = "INSERT INTO databack (photo2) 
        VALUES ( '$image1');";
        echo"	<img src='data:image;base64,".$row['photo2']."' width='100' height='100' disabled>";
  }
  else
  echo"not";
  ?>