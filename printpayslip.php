<?php 
session_start();	
?>
<html>
<head>
<title>PaySlip</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
<style type="text/css" media="print">
  @page { size: landscape; }
</style>
<style>
legend.sub {
font-size:15px;
font-weight:bold;}
</style>
</head>
<body style="background-color:white;" onload="window.print()">
<div style="margin:2%;margin-left:10%;margin-right:10%;padding:10px 25px;height:auto;overflow:auto;outline:solid;outline-width:1px;">
<center>
<legend> PAYSLIP FOR THE MONTH <?php echo " ".$_SESSION['month']." ".$_SESSION['year']?></legend>
<div class="info" style="text-align:center;">
<form action="payslip.html" method="POST">
<fieldset>
<center>
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