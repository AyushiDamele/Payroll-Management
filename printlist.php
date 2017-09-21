<?php 
session_start();
$con=mysql_connect ("127.0.0.1","root","");
// Check connection
if (!$con) {
    die("Connection failed: " . mysql_error);
} 
	 mysql_select_db("php",$con);
	 $sql="select * from record where DEPARTMENT='{$_SESSION['dept']}' and EMPID !='{$_SESSION['id']}';";
	 $result=mysql_query($sql,$con);
	 $count = mysql_num_rows($result);
	 $k=0;
		while($row = mysql_fetch_array($result, MYSQL_ASSOC))
		{
		$c[$k][0]=$k+1;
		$c[$k][1]=$row["EMPID"];
		$c[$k][2]=$row["EMPNAME"];
		$k++;
		}
	
?>
<html>
<head>
<title>DEPARTMENT DETAILS</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<style>
.1{
	border-style:solid;
width:5%;}
.2{border-style:solid;
width:40%;}
.3{border-style:solid;
width:55%;}

tr,th{
	border-style:solid;
	border-width:1px;
text-align:center;
padding:5px;
margin:5px;
}
th{
background-color:black;
color:white;
}</style>
</head>
<body style="background-color:white;" onload="print()">
<center><h2><u> DEPARTMENT DETAILS </u><h2></center>
<div style="margin:2%;margin-left:25%;margin-right:25%;padding:10px 25px;height:auto;overflow:auto;outline:solid;outline-width:0.5px;">
<div class="info" style="text-align:center">
<center>
<h4>DEPARTMENT DETAILS</h4>
<table width="100%">
<tr>
<td class="left"> Department Name </td>
<td class="mid">: </td>
<td class="right"><?php echo $_SESSION['dept'];?></td>
</tr>
<tr>
<td class="left"> Manager Name </td>
<td class="mid"> : </td>
<td class="right"><?php echo $_SESSION['name'];?></tr>
<td class="left"> Manager Employee Id </td>
<td class="mid"> : </td>
<td class="right"><?php echo $_SESSION['id'];?></tr>
<tr>
<td class="left"> No. Of Employees </td>
<td class="mid"> : </td>
<td class="right"><?php echo $k;?></tr>
</table>
<br><br>
<h4>LIST OF EMPLOYEES </h4>
<?php if($k==0)
	echo "<center><p style=\"background-color:lightgrey;\">No Employee is in this Department</p></center>";
	if ($k!=0) echo "<table width=\"100%\"><tr><th class=\"1\">S.No. </th><th class=\"2\">Employee No. </th><th class=\"3\">Employee Name </th></tr>";
 $i ; for ($i=0;$i<$k && $k!=0 ;$i++)
	echo "<tr><td class=\"1\">".$c[$i][0]."</td><td class=\"2\">".$c[$i][1]."</td><td class=\"3\">".$c[$i][2]." </td></tr>";?>
</center>
</div>
</div>
</body></html>