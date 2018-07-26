<?php
require('fpdf/fpdf.php');

if(isset($_POST['name'])){
class PDF extends FPDF {

     
	function Header(){
		$this->SetFont('Arial','B',15);
		
        $this->Rect(5, 5, 200, 287, 'D'); 
		
		//dummy cell to put logo
		//$this->Cell(12,0,'',0,0);
		//is equivalent to:
		$this->Cell(12);
		
		//put logo
		$this->Image('TamilNadu_Log.png',7,7,25,25);
		
		$this->Image('indiaemblem.png',98,7,15,18);
		
		$this->Image('logo.jpg',180,10,20,20);
		
		$this->Cell(100,10,'',0,1);
		
		//dummy cell to give line spacing
		//$this->Cell(0,5,'',0,1);
		//is equivalent to:
		$this->Ln(5);
		
		$this->SetFont('Arial','B',11);

	}
	
	function mycell($w,$h,$x,$t){
	   $height=$h/3;
	   $first=$height+2;
	   $second=$height+$height+$height+3;
	   $len= strlen($t);
	   if($len>15){
	       $txt=str_split($t,15);
	       $this->SetX($x);
	       $this->Cell($w,$first,$txt[0],'','','');
	       $this->SetX($x);
	       $this->Cell($w,$second,$txt[1],'','','');
	       $this->SetX($x);
	       $this->Cell($w,$h,'','LTRB','0','L','0');
	   }
	   else{
	       $this->SetX($x);
	       $this->Cell($w,$h,$t,'LRTB',0,'L',0);
	   }
	}
	function Footer(){
		//add table's bottom line
		$this->Cell(190,0,'','T',1,'',true);
		
		//Go to 1.5 cm from bottom
		$this->SetY(-15);
				
		$this->SetFont('Arial','',8);
		
		//width = 0 means the cell is extended up to the right margin
		$this->Cell(0,10,'Page '.$this->PageNo()." / {pages}",0,0,'C');
	}
}

//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

$pdf = new PDF('P','mm','A4'); //use new class


//define new alias for total page numbers
$pdf->AliasNbPages('{pages}');

$pdf->SetAutoPageBreak(true,15);
$pdf->AddPage();

$pdf->SetFont('Arial','',9);
$pdf->SetDrawColor(180,180,255);

$pdf->Cell(55	,5,' ',0,0);
$pdf->SetFont('Arial','B',18);
$pdf->Cell(34	,10,'Government of Tamilnadu',0,1);//end of line

$pdf->Cell(30	,10,' ',0,0);
$pdf->SetFont('Arial','B',13);
$pdf->Cell(34	,10,'Department of Municipality administration and Water department',0,1);//end of line

$pdf->Cell(72	,10,' ',0,0);
$pdf->SetFont('Arial','B',13);
$pdf->Cell(50	,10,'DEATH CERTIFICATE',0,1);//end of line


$pdf->Cell(15	,10,' ',0,0);
$pdf->SetFont('Arial','',13);
$pdf->Cell(50	,5,'(Issued Under Section 12/17 of the Registration of Births and Deaths Act, 1969 and ',0,1);//end of line

$pdf->Cell(25	,10,' ',0,0);
$pdf->SetFont('Arial','',13);
$pdf->Cell(50	,10,'Rule 8 of Tamil Nadu Registration of Births and Deaths Rules 2000)',0,1);//end of line


$pdf->Cell(40	,10,' ',0,0);
$pdf->SetFont('Arial','',13);
$pdf->Cell(50	,10,'This  is  to  certify  that  the  following  has  been  taken  from  the',0,1);//end of line

$pdf->Cell(5	,10,' ',0,0);
$pdf->SetFont('Arial','',13);
$pdf->Cell(50	,10,'original  record of  death  which  is  the  register  for  (local  area)',0,1);//end of line


$pdf->SetFont('Arial','B',12);
$pdf->Cell(80	,5,'Division ',0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(34	,10,": ".$_POST['division'],0,1);//end of line

$pdf->SetFont('Arial','B',12);
$pdf->Cell(80	,5,'Taluk ',0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(34	,10,": ".$_POST['taluk'],0,1);//end of line

$pdf->SetFont('Arial','B',12);
$pdf->Cell(80	,5,'District ',0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(34	,10,": ".$_POST['district'],0,1);//end of line

$pdf->SetFont('Arial','B',12);
$pdf->Cell(80	,5,'State ',0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(34	,10,": ".$_POST['state'],0,1);//end of line

$pdf->SetFont('Arial','B',12);
$pdf->Cell(80	,5,'Name ',0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(34	,10,": ".$_POST['name'],0,1);//end of line

$pdf->SetFont('Arial','B',12);
$pdf->Cell(80	,5,'Name of Father ',0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(34	,10,": ".$_POST['fathername'],0,1);//end of line

$pdf->SetFont('Arial','B',12);
$pdf->Cell(80	,5,'Age ',0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(34	,10,": ".$_POST['age'],0,1);//end of line

$pdf->SetFont('Arial','B',12);
$pdf->Cell(80	,5,'Sex ',0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(34	,10,": ".$_POST['sex'],0,1);//end of line



$pdf->SetFont('Arial','B',12);
$pdf->Cell(80	,5,'Place of Death ',0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(34	,10,": ".$_POST['placeofdeath'],0,1);//end of line
    
    $pdf->SetFont('Arial','B',12);
$pdf->Cell(80	,5,'Permanent Address',0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(34	,10,": ".$_POST['permanentaddress1'],0,1);//end of line

$pdf->SetFont('Arial','B',12);
$pdf->Cell(80	,5,'',0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(34	,10,": ".$_POST['permanentaddress2'],0,1);//end of line

$pdf->SetFont('Arial','B',12);
$pdf->Cell(80	,5,'',0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(34	,10,": ".$_POST['permanentaddress3'],0,1);//end of line

$pdf->SetFont('Arial','B',12);
$pdf->Cell(80	,5,'Registration No.',0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(34	,10,': ',0,1);//end of line

$pdf->SetFont('Arial','B',12);
$pdf->Cell(80	,5,'Date of Regitration',0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(34	,10,':'.$_POST['dateofreg'],0,1);//end of line

$pdf->SetFont('Arial','B',12);
$pdf->Cell(80	,5,'Date',0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(34	,10,": ".$_POST['date'],0,1);//end of line


$pdf->Cell(120	,5,'',0,0);
$pdf->SetFont('Arial','B',12);
$pdf->Cell(34	,10,'Signature of issuing Authority',0,1);//end of line


$pdf->SetFont('Arial','B',12);
$pdf->Cell(5	,5,'',0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(34	,10,'No disclosure shall be made of participant regarding the cause of death as entered in the Register',0,1);//end of line

    $pdf->SetFont('Arial','B',12);
$pdf->Cell(60	,5,'',0,0);
$pdf->SetFont('Arial','',12);
$pdf->Cell(34	,10,'See Proviso to Section 17(1)',0,1);//end of line


$pdf->Output();
}
?>


<html>
<head>
<h1><strong>Decease Endorsement</strong></h1>

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
body{
background-color:white;


}

body
{
border-style:solid;
border-width:10px;
border-color:lightblue;
border-radius:30px;
}
div{
border-width:100%;
padding:20px;
}

</style>
</head>
<body>
<form action="" method="post">
<table style="width:50%">
<tr>
<td><strong>Division</strong></td>
<td><input type="text" name="division"></td>
</tr>
<tr>
<td><strong>Taluk<strong></td>
<td><input type="text" name="taluk"></td>
</tr>
<tr>
<td><strong>District<strong></td>
<td><input type="text" name="district"></td>
</tr>
<tr>
<td><strong>State<strong></td>
<td><input type="text" name="state"></td>
</tr>
<tr>
<td><strong>Name</strong></td>
<td><input type="text" name="name"></td>
</tr>
<tr>
<td><strong>Father's Name</strong></td>
<td><input type="text" name="fathername"></td>
</tr>
<tr>
<td><strong>Age</strong></td>
<td><input type="number" name="age"></td>
</tr>
<tr>
<td><strong>Sex</strong</td>
<td><input type="text" name="sex"></td>
</tr>
<td><strong>Date of Death:</strong></td>
<td><input type="text" name="dateofdeath"></td>
</tr>
<tr>
<td><strong>Place of Death</strong></td>
<td><input type="text" name="placeofdeath"></td>
</tr>
<tr>
<td><strong>Permanent Address</strong></td>
<td><input type="text" name="permanentaddress1"></td>
</tr>
<tr><td></td>
<td><input type="text"  name="permanentaddress2"></td>
</tr>
<tr><td></td>
<td><input type="text"  name="permanentaddress3"></td>
</tr>
<tr>
<td><strong>Register Number</strong></td>
<td><input type="number" name="regno"></td>
</tr>
<tr>
<td><strong>Date of Registration</strong></td>
<td><input type="date" name="dateofreg">
</tr>
<tr>
<td><strong>Date</strong></td>
<td><input type="text" name="date"></td>
</tr>
<tr>
  <td><input type="submit" value="submit" name="submit"></td>
  </tr>
</table>
   <tr>
<td><form><a href="email/index.php"><input type="button"  value="MAIL" style="position:absolute;font-size:15pt;color:white;background-color:green;border:2px solid #336600;margin-top:-20px;margin-left:1150px"></a></form></td>
</tr>
</form>
</body>
</html>