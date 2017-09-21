<html>
<?php
session_start();
$con=mysql_connect ("127.0.0.1","root","");
  if ($con==false)
  {
		echo '<script type="text/javascript">'; 
		echo 'alert("Failed To Connect To database. Try Again.");'; 
		echo 'window.location.href = "employeehome.php";';
		echo '</script>';
  }
  else
	{
		$_SESSION['name']=$_POST['ename'];
		$_SESSION['email']=$_POST['eemail'];
		$_SESSION['mob']=$_POST['empphone'];
		$_SESSION['gen']=$_POST['gender'];
		$_SESSION['pan']=$_POST['panno'];
		$_SESSION['acno']=$_POST['acno'];
		$_SESSION['pass']=$_POST['newpass'];
		mysql_select_db("php",$con);
		$in="UPDATE record SET EMPNAME='{$_SESSION['name']}',EMPEMAIL='{$_SESSION['email']}',MOBILE='{$_SESSION['mob']}',GENDER='{$_SESSION['gen']}',PASSWORD='{$_SESSION['pass']}',ACNO='{$_SESSION['acno']}',PANNO='{$_SESSION['pan']}' WHERE EMPID='{$_SESSION['id']}' ";
		$res1=mysql_query($in,$con);
		if ($res1){
			echo '<script type="text/javascript">'; 
				echo 'alert("Update Successful");'; 
				echo 'window.location.href = "employeehome.php";';
				echo '</script>';
		}
		else 
			{
				echo '<script type="text/javascript">'; 
				echo 'alert("Failed To Update. Try Again.");'; 
				echo 'window.location.href = "employeehome.php";';
				echo '</script>';
			}
	}
?>
 </html>