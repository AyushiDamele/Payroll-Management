
<?php
session_destroy();
$con=mysql_connect ("127.0.0.1","root","");
$a=$_POST['id'];
$b=$_POST ['pass'];
$c=$_POST['role'];
 mysql_select_db("php",$con);
 $sq="select * from record where empid='$a' and (password='$b' and role='$c'); ";
 $res1=mysql_query($sq,$con); 
 $count = mysql_num_rows($res1); 
 if ($count==1)
 {	session_start();	
	$_SESSION['empid']=$a;
	if ($c=="Employee")
    header ("location: employeehome.php");
	else {
		if ($c=="Manager")
		header ("location:managerhome.php");
	else 
		header ("location:adminhome.html");
	}
 }
 else
	 echo '<script type="text/javascript">'; 
echo 'alert("Invalid Credetials");'; 
echo 'window.location.href = "login.html";';
echo '</script>';
 ?>
