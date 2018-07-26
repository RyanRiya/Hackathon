<?php
$ser="localhost";
$usern="id5086052_backend";
$pass="backend";
$db="id5086052_backend";

// Create connection
$conn = new mysqli($ser, $usern, $pass, $db);

if(!empty($_POST['register']))
{
$f_name=$_POST['user'];
require("fpdf/fpdf.php");
$pdf=new FPDF();
$pdf->AddPage();
$pdf->SetFont("Arial","B",16);
$pdf->Cell(10,10,'welcome',0,0,'C');
$pdffile=$pdf->output();
$sql="insert into pdf (id,pdf) values ('1',$pdffile)";
echo "<script>alert('saved');</script>";
window.location.href (admin/ahm/panel);

}
?>