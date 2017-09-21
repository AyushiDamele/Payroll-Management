<?php
session_start();
?>
<html>
<head>
<title> Sign Up! </title>
<link rel="stylesheet" href="signupstyle.css">
</head>
<body style="background-color:white;">
<a href="login.html"><div class="logo"><image src="logo.jpg" width="100%" height="15%"/></div></a>
<center>
<h2>Fill the details below and click SIGNUP button </h2></center>
<div class="container">
<form action="signup.php" method="POST"> 

<fieldset>
<legend> PERSONAL DETAILS </legend>
<label><b> Employee Id </b></label>
<input type="text" name="empid" REQUIREDpattern="[0-9]{3}" placeholder="Enter Your 3-digit Employee ID" value="<?php echo $_SESSION['a']?>" title="Valid Empid between 101 to 999" required></input>
<br>
<label><b> Employee Name </b></label>
<input type="text" name="ename" REQUIRED placeholder="Enter Your Name" value="<?php echo $_SESSION['b']?>" pattern="[a-zA-Z]{0,400}" title="Valid Name Consistings of a-z or A-Z only" required/>
<br>
<label><b> Email-ID </b></label>
<input type="email" name="eemail" REQUIRED placeholder="Enter A Valid Email Id" value="<?php echo $_SESSION['c']?>"  pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z.-]+\.[a-zA-Z]{2,3}$" title="Enter A Valid Email-Id user@domain.com or user@domain.in" required/>
<br>
<label> <b>Mobile Number </b></label>
<input type="text" name="empphone" REQUIRED pattern="^[789]\d{9}$"  placeholder="Enter a valid 10-digit Mobile No" value="<?php echo $_SESSION['d']?>" title="Valid Mobile Number of 10digits Starting with 7,8 or 9"/>
<br>
<label><b>Gender </b></label>
<input class="gen" type="radio" name="gender" value="M" <?php if($_SESSION['e'] == 'M') echo 'checked=checked'; ?> >Male</input>
<input class="gen" type="radio" name="gender" value="F" <?php if($_SESSION['e'] == 'F') echo 'checked=checked'; ?> >Female</input>
</fieldset><br><br>
<fieldset>
<legend> PROFESSIONAL DETAILS</legend>
<label><b>Job Title </b></label>
<select name="title"  REQUIRED >
<option disabled selected value> -- Select Your Job Title -- </option> 
<option value="Programmer" <?php if($_SESSION['f'] == "Programmer") echo 'selected'; ?>> Programmer </option>
<option value="Project Leader" <?php if($_SESSION['f'] == "Project Leader") echo 'selected'; ?> > Project Leader </option>
<option value="Management Associate" <?php if($_SESSION['f'] == "Management Associate") echo 'selected'; ?> > Management Associate </option>
<option value="Analyst" <?php if($_SESSION['f'] == "Analyst") echo 'selected'; ?>>Analyst </option>
<option value="Accountant" <?php if($_SESSION['f'] == "Accountant") echo 'selected'; ?>>Accountant </option>
<option value="Assistant" <?php if($_SESSION['f'] == "Assistant") echo 'selected'; ?>> Assistant </option>
<option value="Clerk" <?php if($_SESSION['f'] == "Clerk") echo 'selected'; ?>> Clerk </option>
<option value="Secretary" <?php if($_SESSION['f'] == "Secretary") echo 'selected'; ?>> Secretary</option>
</select>
<br>
<label><b> Role </b></label>
<select name="role" required>
<option disabled selected value> -- Select Your Role -- </option> 
<option value="Employee" <?php if($_SESSION['g'] == "Employee") echo 'selected'; ?>> Employee </option>
<option value="Manager" <?php if($_SESSION['g'] == "Manager") echo 'selected'; ?>> Manager </option></select>
<br>
<label><b>Department </b></label>
<select name="dept" required >
<option disabled selected value> -- Select Your Department -- </option> 
<option value="CS" <?php if($_SESSION['h']=="CS") echo 'selected';?>> Computer Section </option>
<option value="IT" <?php if($_SESSION['h']=="IT") echo 'selected';?>> Information Technology </option>
<option value="HR" <?php if($_SESSION['h']=="HR") echo 'selected';?>>Human Resource</option>
<option value="ACCOUNTS" <?php if($_SESSION['h']=="ACCOUNTS") echo 'selected';?>> Accounts </option>
<option value="ACADEMIC" <?php if($_SESSION['h']=="ACADEMIC") echo 'selected';?> >Academic </option>
</select>
<br>
<label><b>Account Number</b> </label>
<input type="text" name="acno" REQUIRED pattern="[0-9]{10}" placeholder="Enter A Valid 10-Digit A/C No" title="Please Enter A valid 10digit account Number" value="<?php echo $_SESSION['i']?>"/>
<br>
<label><b>PAN Card Number </b></label>
<input type="text" name="panno"  REQUIRED  placeholder="Enter Your PAN Card Number" pattern="[a-zA-Z0-9]{10}" title="Enter A valid PAN Card Number" value="<?php echo $_SESSION['j']?>"/>
</fieldset><br><br>
<fieldset>
<legend> LOGIN CREDETIALS </legend>
<label> <b>Password</b></label>
<input type="password" name="pass" placeholder="Enter Your Password Here" REQUIRED pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/>
<br>
<label><b> Re-Enter Password </b></label>
<input type="password" name="repass" placeholder="Re-Enter Your Password Here " required/>
<br>
</fieldset>
<center>
<input class="button" type="submit" value="SIGNUP"/>
<input class="button" type="reset" value="RESET" />
</center>
</form>

<div style="outline-style:dotted;outline-width:0.2px"><center><h2 style="font-family:courier;"> <a href="login.html">Click Here To Go To Login Page</a> </h2></div>
</div>
</body>
</html>