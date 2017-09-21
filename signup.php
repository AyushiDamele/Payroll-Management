<html>
<?php
session_start();
$_SESSION['a']=$_POST['empid'];
$_SESSION['b']=$_POST ['ename'];
$_SESSION['c']=$_POST['eemail'];
$_SESSION['d']=$_POST['empphone'];
$_SESSION['e']=$_POST['gender'];
$_SESSION['f']=$_POST['title'];
$_SESSION['g']=$_POST['role'];
$_SESSION['k']=$_POST['pass'];
$_SESSION['l']=$_POST['repass'];
$_SESSION['h']=$_POST['dept'];
$_SESSION['i']=$_POST['acno'];
$_SESSION['j']=$_POST['panno'];
if ($_SESSION['k'] != $_SESSION['l'])
{
	 echo '<script type="text/javascript">'; 
echo 'alert("Password Mismatch");'; 
echo 'window.location.href="signupform.php";';
echo '</script>';
}
if ($_SESSION['k']==$_SESSION['l']){
$con=mysql_connect ("127.0.0.1","root","");
  if ($con==false)
  {
		echo '<script type="text/javascript">'; 
		echo 'alert("Failed To Connect To database. Try Again.");'; 
		echo 'window.location.href = "signupform.php";';
		echo '</script>';
  }
  else
  {
	mysql_select_db("php",$con);
	$sq="select * from record where empid='{$_SESSION['a']}' ; ";
	$res1=mysql_query($sq,$con); 
	$count = mysql_num_rows($res1); 
		$sq2="select * from record where department='{$_SESSION['h']}' and role='{$_SESSION['g']}'  ; ";
		$res3=mysql_query ($sq2,$con);
		$cnt=mysql_num_rows($res3);
	if ($count>0)
	{
	
		echo '<script type="text/javascript">'; 
		echo 'alert("Employee Id Already Exists");'; 
		echo 'window.location.href = "signup.html";';
		echo '</script>'; 
	}
	if ($_SESSION['g']=="Manager" && $cnt>=1)
	{
	
		echo '<script type="text/javascript">'; 
		echo 'alert("A Department Can Not Have More Than 1 Manager");'; 
		echo 'window.location.href = "signupform.php";';
		echo '</script>'; 
		}
		
		else
		{
		$in="insert into record Values ('{$_SESSION['a']}','{$_SESSION['b']}','{$_SESSION['c']}','{$_SESSION['d']}','{$_SESSION['e']}','{$_SESSION['f']}','{$_SESSION['g']}','{$_SESSION['h']}','{$_SESSION['i']}','{$_SESSION['j']}','{$_SESSION['k']}')";
		$res1=mysql_query($in,$con);
		if ($res1 )
		{
			echo '<script type="text/javascript">'; 
			echo 'alert("Sign Up Successful !");'; 
			echo 'window.location.href = "login.html";';
			echo '</script>';
			session_destroy();
		}
		else 
		{
			echo '<script type="text/javascript">'; 
			echo 'alert("Failed To Sign Up. Try Again.");'; 
			echo 'window.location.href = "signupform.php";';
			echo '</script>';
		}
	}
	}
	}

 ?>
 </html>