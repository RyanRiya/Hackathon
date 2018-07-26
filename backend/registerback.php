<?php
$ser="localhost";
$usern="id5086052_backend";
$pass="backend";
$db="id5086052_backend";

// Create connection
$conn = new mysqli($ser, $usern, $pass, $db);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 if (isset($_POST['register'])){
    $user=$_POST['name'];
    $bat=$_POST['age'];
    $em1=$_POST['adhaar'];
    $dob=$_POST['date']."/".$_POST['month']."/".$_POST['year'];
    $image=addslashes($_FILES['image']['tmp_name']);
    $name=addslashes($_FILES['image']['name']);
    $image=file_get_contents($image);
    $image=base64_encode($image); 
    $sql = "INSERT INTO databack (name,age,adhaar,DOB,photo,photodata) 
        VALUES ( '$user', '$bat','$em1','$dob','$image','$name');";
  // mysqli_query($conn,$sql);
   if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
     } 
     else 
     echo "not inserted";
}
$conn->close();
?>

<!DOCTYPE html>
<html>

   <head>
      <title>Student</title>

   </head>
	
   <body>
      <form action="#" method="post" enctype="multipart/form-data" >
          <tr>
         <td>Name : <input type = "text" name = "name" /></td>
         <br>
		 <td>Age : <input type = "number" name = "age" /></td>
		 <br>
		 <td>Date Of Birth<br>
		 <select name ="date">
		 <option value = "Date" selected>Date</option>
		 <option value = "1" selected>1</option>
		 <option value = "2" selected>2</option>
		 <option value = "3" selected>3</option>
		 <option value = "4" selected>4</option>
		 <option value = "5" selected>5</option>
		 <option value = "6" selected>6</option>
		 <option value = "7" selected>7</option>
		 <option value = "8" selected>8</option>
		 <option value = "9" selected>9</option>
		 <option value = "10" selected>10</option>
		 <option value = "11" selected>11</option>
		 <option value = "12" selected>12</option>
		 <option value = "13-" selected>13</option>
		 <option value = "14" selected>14</option>
		 <option value = "15" selected>15</option>
		 <option value = "16" selected>16</option>
		 <option value = "17" selected>17</option>
		 <option value = "18" selected>18</option>
		 <option value = "19" selected>19</option>
		 <option value = "20" selected>20</option>
		 <option value = "21" selected>21</option>
		 <option value = "22" selected>22</option>
		 <option value = "23" selected>23</option>
		 <option value = "24" selected>24</option>
		 <option value = "25" selected>25</option>
		 <option value = "26" selected>26</option>
		 <option value = "27" selected>27</option>
		 <option value = "28" selected>28</option>
		 <option value = "29" selected>29</option>
		 <option value = "30" selected>30</option>
		 <option value = "31" selected>31</option>
		 </select>
		 <select name ="month">
		 <option value = "month" selected>month</option>
		 <option value = "january" selected>january</option>
		 <option value = "february" selected>february</option>
		 </select>
		 <select name ="year">
		 <option value = "year" selected>1997</option>
		 <option value = "year" selected>1998</option>
		 <option value = "year" selected>1999</option>
		 </select></td>
		 <br>
		 <td>Gender: 
		 <select name = "dropdown">
         <option value = "Male" selected>Male</option>
         <option value = "Female" selected>Female</option>
         </select></td>
		 <br>
		 <td>Address : <br />
         <textarea rows = "5" cols = "50" name = "address">
        </textarea></td>
		 <br>
		 <td>Mobile number : <input type = "number" name= "phone" ></td>
		 <br>
		 <td>Workplace : <br />
         <textarea rows = "5" cols = "50" name= "workplace">
         </textarea></td>
		 <br>
		 <td>Designation : <input type = "Designation" Age = "Designation" /></td>
		 <br>
		 <td>salary : <input type = "Amount" Age = "Amount" /></td>
		 <br>
		 <td>Aadhar number : <input type = "Number" name= "adhaar" /></td>
		 <br>
		 <td>image:
	    <input type="hidden" name="size" value="1000000">
  	    <div>
  	    <input type="file" name="image">
  	    </div></td>
		  </tr><br>
		  <input type="submit" name="register">
		  </form>
   </body>
	</html>