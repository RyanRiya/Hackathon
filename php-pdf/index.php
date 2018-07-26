<?php
include("config.php");
?>
<html>
<head>
<title>How Genrate PDF From MYSQL Usig PHP</title>
</head>
<body>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- textaddneww -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:15px"
     data-ad-client="ca-pub-8906663933481361"
     data-ad-slot="3318815534"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<p><a href="genratepdf.php" target="_blank">Generate PDF</a></p>
<table border="1">
<tr>
<td style="font-weight:bold;">EmpId</td>
<td style="font-weight:bold;">EmpName</td>
<td style="font-weight:bold;">EmpDepartment</td>
<td style="font-weight:bold;">EmpRegDate</td>
</tr>
<?php 
$sql = "SELECT * from  tblemployee";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row) 
	{ ?>

<tr>
<td><?php echo htmlentities($row->EmpId);?></td>
<td><?php echo htmlentities($row->EmpName);?></td>
<td><?php echo htmlentities($row->EmpDepartment);?></td>
<td><?php echo htmlentities($row->EmpRegDate);?></td>
</tr>

<?php } }
?>
</table>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- horizental ad -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-8906663933481361"
     data-ad-slot="6662734336"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</body>
</html>