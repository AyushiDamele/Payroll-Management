<?php 
session_start();	
$con=mysql_connect ("127.0.0.1","root","");
// Check connection
if (!$con) {
    die("Connection failed: " . mysql_error);
} 
 mysql_select_db("php",$con);
$a=$_SESSION['empid'];
 $sql="select * from record where empid='$a';";
  $result=mysql_query($sql,$con);
  if (!($result))
  {echo '<script type="text/javascript">'; 
		echo 'alert("Database Error");'; 
		echo 'window.location.href = "login.php";';
		echo '</script>'; 
  }
  else{
 while($row = mysql_fetch_array($result, MYSQL_ASSOC)){
   $_SESSION['id']=$row["EMPID"];
		$_SESSION['name']=$row["EMPNAME"];
		$_SESSION['email']=$row["EMPEMAIL"];
		$_SESSION['mob']=$row["MOBILE"];
		$_SESSION['gen']=$row["GENDER"];
		$_SESSION['role']=$row["ROLE"];
		$_SESSION['title']=$row["TITLE"];
		$_SESSION['pan']=$row["PANNO"];
		$_SESSION['acno']=$row["ACNO"];
 $_SESSION['dept']=$row["DEPARTMENT"];
  $_SESSION['pass']=$row["PASSWORD"];}}
		
	?>
<html>
<head>
<title>HOME</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
</head>
<body style="background-color:white;">
	<div class="logo"><image src="logo.jpg" width="100%" height="15%"/>
	<div class="logout" style="float:right;position:relative;margin-right:1%" >
	<a href="login.html"><i class="glyphicon glyphicon-log-out" width="25%" height="25%" ></i><label >LOG OUT </label></a></div>	
<ul style="float:left">
    <li><a class="active" href="managerhome.php">Home</a></li>
  <li><a href="managerpaymonth.html">PaySlip</a></li>
  <li><a href="managerleave.html">Leave</a></li>
  <li><a href="#">Employee Records</a></li>
  <li><a href="manageremployeelist.php">Department Details </a></li>
</ul>
<div style="margin:2%;margin-left:25%;margin-right:25%;padding:10px 25px;height:auto;overflow:auto;outline:solid;outline-width:1px;">
 
<a href="manageredit.php"><div style="text-align:right;height:2%;width:100%"><i class="glyphicon glyphicon-edit">Edit </i></div></a><br>
<div class="info" style="text-align:center">
<form action="payslip.php" method="POST">
<center>
<fieldset>
<legend> PERSONAL INFORMATION</legend>
<table width="80%">
<tr>
<td class="left">Employee Id </td>
<td class="mid">: </td>
<td class="right"><?php echo $_SESSION['id'] ; ?></td>
</tr>
<tr>
<td class="left"> Employee Name </td>
<td class="mid">:</td>
<td class="right"> <?php echo $_SESSION['name'];?></td>
</tr>
<tr>
<td class="left"> Email Id </td>
<td class="mid">: </td>
<td class="right"><?php echo $_SESSION['email'] ;?> </td>
</tr>
<tr>
<td class="left"> Contact No. </td>
<td class="mid"> : </td>
<td class="right"><?php echo $_SESSION['mob'] ; ?></td>
</tr>
<tr>
<td class="left"> Gender </td>
<td class="mid"> :</td>
<td class="right"><?php echo $_SESSION['gen'];?> </td>
</tr>
</table>
</fieldset><br><br>
<fieldset>
<table width="80%">
<legend> PROFESSIONAL DETAILS </legend>

<tr>
<td class="left"> Job Title </td>
<td class="mid">:</td>
<td class="right"><?php echo $_SESSION['title'];?> </td>
</tr>
<tr>
<td class="left"> Role </td>
<td class="mid"> : </td>
<td class="right"><?php echo $_SESSION['role']; ?></td>
</tr>
<tr>
<td class="left">Department</td>
<td class="mid">: </td>
<td class="right"><?php echo $_SESSION['dept']; ?></td>
</tr>
<tr>
<td class="left">A/C No.</td>
<td class="mid">: </td>
<td class="right"><?php echo $_SESSION['acno']; ?></td>
</tr>
<tr>
<td class="left">PAN No.</td>
<td class="mid">: </td>
<td class="right"><?php echo $_SESSION['pan']; ?></td>
</tr>
</table>
</table>
</fieldset>
