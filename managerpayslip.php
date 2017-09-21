<?php 
session_start();
$con=mysql_connect ("127.0.0.1","root","");
// Check connection
if (!$con) {
    die("Connection failed: " . mysql_error);
} 
	 mysql_select_db("php",$con);
	 $a=$_SESSION['id'];
	 $b=$_POST['month'];
	 $c=$_POST['year'];
	 $n=$b;
	 $n=$b.$c;
	 $sql="select * from $n where empid='{$_SESSION['id']}';";
	 $result=mysql_query($sql,$con);
	 $count = mysql_num_rows($result);
	 if ($count==0)
     {
		echo '<script type="text/javascript">'; 
		echo 'alert("Record Does not Exists");'; 
		echo 'window.location.href = "managerhome.php";';
		echo '</script>'; 
	}	
else
	{
		while($row = mysql_fetch_array($result, MYSQL_ASSOC))
		{
		$_SESSION['id']=$row["empid"];
		$_SESSION['basic']=$row["basic"];
		$_SESSION['hra']=$row["hra"];
		$_SESSION['da']=$row["da"];
		$_SESSION['ma']=$row["ma"];
		$_SESSION['bonus']=$row["bonus"];
		$_SESSION['eld']=$row["eldeductions"];
		$_SESSION['pf']=$row["pf"];
		$_SESSION['tax']=$row["tax"];
		$_SESSION['totearn']=$_SESSION['basic']+$_SESSION['hra']+$_SESSION['da']+$_SESSION['ma']+$_SESSION['bonus'];
		$_SESSION['totded']=$_SESSION['eld']+$_SESSION['pf']+$_SESSION['tax'];
		$_SESSION['netsal']=$_SESSION['totearn']-$_SESSION['totded'];
		$_SESSION['duration']=$n;
		$_SESSION['month']=$b;
		$_SESSION['year']=$c;
		}
	}
?>
<html>
<head>
<title>PaySlip</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<style>
legend.sub {
font-size:12px;
font-weight:bold;}
</style>
</head>
<body style="background-color:white;">
	<div class="logo"><image src="logo.jpg" width="100%" height="15%"></div>
	<div class="logout" style="float:right;position:relative;margin-right:1%" >
	<a href="login.html"><i class="glyphicon glyphicon-log-out" width="25%" height="25%" ></i><label >LOG OUT </label></a></div>	
<ul style="float:left">
    <li><a href="managerhome.php">Home</a></li>
  <li><a class="active"  href="managerpaymonth.html">PaySlip</a></li>
  <li><a href="managerleave.html">Leave</a></li>
  <li><a href="#">Employee Records</a></li>
  <li><a href="manageremployeelist.php">Department Details </a></li>
</ul>
<div style="margin:2%;margin-left:25%;margin-right:10%;padding:10px 25px;height:auto;overflow:auto;outline:solid;outline-width:1px;">
<a href="javascript: w=window.open('printpayslip.php');"><div style="text-align:right;height:2%"><i class="glyphicon glyphicon-print">Print</i></div></a>
<center>
<div class="info" style="text-align:center;">
<form action="managerpayslip.html" method="POST">
<fieldset>
<legend> EMPLOYEE DETAILS</legend><center>
<table width="80%">
<tr><td class="left"> Employee Name </td>
<td class="mid">:</td>
<td class="right"> <?php echo $_SESSION['name'];?></td>
</tr>
<tr>
<td class="left">Employee Id </td>
<td class="mid">: </td>
<td class="right"><?php echo $_SESSION['id'];?></td>
</tr>
<tr>
<td class="left"> Department </td>
<td class="mid"> : </td>
<td class="right"><?php echo $_SESSION['dept'];?></td>
</tr>
<tr>
<td class="left"> Bank A/C No. </td>
<td class="mid"> : </td>
<td class="right"><?php echo $_SESSION['acno'];?> </td>
</tr>
<tr>
<td class="left">PAN No. </td>
<td class="mid"> : </td>
<td class="right"><?php echo $_SESSION['pan'];?></td>
</tr>
<tr>
<td class="left">Job Title</td>
<td class="mid">: </td>
<td class="right"><?php echo $_SESSION['title']?></td>
</tr>
<tr>
<td class="left">Month</td>
<td class="mid"> : </td>
<td class="right"> <?php echo $_SESSION['month'];?> </td>
</tr>
<tr>
<td class="left">Year</td>
<td class="mid"> : </td>
<td class="right"> <?php echo $_SESSION['year'];?> </td>
</tr>
</table>
</fieldset>
<br><br>
<fieldset>
<legend> SALARY DETAILS </legend>
<div class="info" style="text-align:center;margin-left:10%;margin-right:10%">
<div style="float:left; width:50%">
<legend class="sub">EARNINGS </legend>
<table width="100%">
<tr>
<td class="left"> Basic Pay</td>
<td class="mid"> : </td>
<td class="right">&#8377 <?php echo $_SESSION['basic']?></td>
</tr>
<tr> 
<td class="left"> HRA </td>
<td class="mid"> : </td>
<td class="right">&#8377 <?php echo $_SESSION['hra']?> </td>
</tr>
<tr>
<td class="left">DA </td>
<td class="mid"> : </td>
<td class="right"> &#8377 <?php echo $_SESSION['da']?></td>
<tr>
<td class="left"> Medical Allowance </td>
<td class="mid"> : </td>
<td class="right"> &#8377 <?php echo $_SESSION['ma']?></td>
</tr>
<tr>
<td class="left"> Bonus </td>
<td class="mid"> : </td>
<td class="right"> &#8377 <?php echo $_SESSION['bonus']?></td>
</tr>
</table>
</div>
<div style="float:right;width:50%">
<legend class="sub"> DEDUCTIONS </legend>
<table width="100%">
<tr>
<td class="left"> EL Deductions </td>
<td class="mid">: </td>
<td class="right"> &#8377 <?php echo $_SESSION['eld']?></td>
</tr>
<tr>
<td class="left">PF </td>
<td class="mid"> : </td>
<td class="right">&#8377 <?php echo $_SESSION['pf']?></td>
</tr>
<tr>
<td class="left"> Tax </td>
<td class="mid"> : </td>
<td class="right">&#8377 <?php echo $_SESSION['tax']?></td>
</tr>
</table>
</div></div><br></fieldset>
<div ><br>
<fieldset>
<center><table width="80%">
<tr><br></tr>
<tr>
<td class="left"> Total Earnings </td>
<td class="mid">: </td>
<td class="right">&#8377  <?php echo $_SESSION['totearn']?></td>
</tr>
<tr>
<td class="left"> Total Deductions </td>
<td class="mid"> : </td>
<td class="right">&#8377  <?php echo $_SESSION['totded']?></td>
</tr>
<tr>
<td class="left"> Net Pay </td>
<td class="mid"> : </td>
<td class="right">&#8377  <?php echo $_SESSION['netsal']?></td>
</tr> 
</table><br><br><br>
<div style="float:right;text-align:right;margin-right:10%"><img src="sign.jpeg" width="35%" height="10%"/><br><b>Employer's Signature</b> </div>
</div>
<form>
</div>
</body>
</html>