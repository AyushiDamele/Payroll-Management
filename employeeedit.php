<?php
session_start();
?>
<html>
<head>
<title> EDIT DETAILS </title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body style="background-color:white;">
	<div class="logo"><image src="logo.jpg" width="100%" height="15%"/>
	<a href="login.html">
	<div class="logout" style="float:right;position:relative;margin-right:1%" >
	<i class="glyphicon glyphicon-log-out" width="25%" height="25%" ></i><b>LOG OUT </b></div></a>	
<ul style="float:left">
    <li><a class="active" href="employeehome.php">Home</a></li>
  <li><a  href="employeepaymonth.html">PaySlip</a></li>
  <li><a href="employeeleave.html">Leave</a></li>
</ul>
<div style="margin:2%;margin-left:25%;margin-right:10%;padding:10px 25px;height:auto;overflow:auto;outline:solid;outline-width:1px;">

<form action="employeeupdatedetails.php" method="POST"> 
<center><h5><b>Fields marked with <font style="color:red">#</font> cannot be altered </b></h5>
<h5><b>Field marked with <font style="color:red">*</font> cannot be left blank </b></h5></center><br>
<fieldset>
<legend> PERSONAL DETAILS </legend>
<center>
<table width="80%">
<tr >
<td class="left">Employee Id <font style="color:red">#</font></td>
<td class="mid"> : </td>
<td class="right"><input type="text" style="background-color:lightyellow;" value="<?php echo $_SESSION['id'];?>" disabled>
</tr>
<tr>
<td class="left">Employee Name <font style="color:red">*</font></td>
<td class="mid"> : </td>
<td class="right">
<input type="text" name="ename" REQUIRED placeholder="Enter Your Name" pattern="[a-zA-Z]{1,}" value="<?php echo $_SESSION['name']?>"  title="Valid Name Consistings of a-z or A-Z only" />
</td>
</tr>
<td class="left"> Email-ID <font style="color:red">*</font></td>
<td class="mid"> : </td>
<td class="right">
<input type="email" name="eemail" REQUIRED placeholder="Enter A Valid Email-Id " value="<?php echo $_SESSION['email']?>"  pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0.-]+\.[a-zA-Z]{2,3}$" title="Enter A Valid Email-Id user@domain.com or user@domain.in" required/>
</td>
</tr>
<td class="left">Contact Number <font style="color:red">*</font></td>
<td class="mid"> : </td>
<td class="right">
<input type="text" name="empphone" REQUIRED pattern="^[789]\d{9}$"  placeholder="Enter A valid 10-digit Mobile No." value="<?php echo $_SESSION['mob']?>" title="Valid Mobile Number of 10digits starting with 7,8 or 9"/>
</td>
</tr>
<tr>
<td class="left">Gender <font style="color:red">*</font> </td>
<td class="mid">:</td>
<td class="right">
<input class="gen" type="radio" name="gender" value="M" <?php if($_SESSION['gen'] == 'M') echo 'checked=checked'; ?> >Male</input>
<input class="gen" type="radio" name="gender" value="F" <?php if($_SESSION['gen'] == 'F') echo 'checked=checked'; ?> >Female</input></td>
</tr>
</table>
</center>
</fieldset><br>
<fieldset>
<legend> PROFESSIONAL DETAILS</legend>
<center>
<table width="80%">
<tr>
<td class="left">Job Title <font style="color:red">#</font></td>
<td class="mid"> : </td>
<td class="right"><input type="text" value="<?php echo $_SESSION['title']?>" disabled /></td>
</tr>
<tr>
<td class="left">Role <font style="color:red">#</font></td>
<td class="mid"> : </td>
<td class="right"><input type="text" value="<?php echo $_SESSION['role']?>" disabled /></td>
</tr>
<tr>
<td class="left">Account Number <font style="color:red">*</font></td>
<td class="mid">:</td>
<td class="right">
<input type="text" name="acno" REQUIRED placeholder="Enter A Valid 10-Digit A/C No." pattern="[0-9]{10}" title="Please Enter A valid 10digit account Number" value="<?php echo $_SESSION['acno']?>"/>
</td>
</tr>
<tr>
<td class="left">PAN Card Number <font style="color:red">*</font></td>
<td class="mid">:</td>
<td class="right">
<input type="text" name="panno" REQUIRED placeholder="Enter Your PAN Card Number" pattern="[a-zA-Z0-9]{10}" title="Enter A valid PAN Card Number" value="<?php echo $_SESSION['pan']?>"/>
</td>
</tr>
</table>
</center>
</fieldset><br><br>
<fieldset>
<legend> LOGIN CREDENTIALS </legend>
<center>
<table width="80%">
<tr>
<td class="left">New Password (by default old is here)<font style="color:red">*</font></td>
<td class="mid"> : </td>
<td class="right">
<input type="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" REQUIRED name="newpass" value="<?php echo $_SESSION['pass']?>" placeholder="Enter Your New Password Here "  title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" />
</td>
</tr>
</table>
</center>
</fieldset><br>
<center>
<input class="button" type="submit" value="UPDATE"/>
</center>
</form>

</div>
</body>
</html>