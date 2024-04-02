
<?php
echo"<center>";
include('CONN.PHP');

if(isset($_POST['submit']))
{
	$Opassword =$_POST['OPASSWORD'];
	$Npassword =$_POST['NewPASSWORD'];
	$Confpassword =$_POST['CPASSWORD'];

if(!empty($Opassword) && !empty($Npassword) && !empty($Confpassword))
{
	$SQL=mysqli_query($con,"SELECT * FROM users WHERE PASSWORD='$Opassword'");

	if(mysqli_num_rows($SQL)>0)
	{
		$ROW=mysqli_fetch_array($SQL);
	
		$pass =$ROW['PASSWORD'];
		if($Npassword==$Confpassword)
		{
			$TRUE =mysqli_query($con,"UPDATE users set PASSWORD='$Npassword' WHERE PASSWORD='$pass'");

			if ($TRUE) {
					 echo "<script>confirm('are you sure you want to change password')</script>";
				}	
		}
			
			
		}
		
	}
}


?>


<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Forget password</title>
	<link rel="stylesheet" type="text/css" href="formstyle.css">
     <style type="text/css">
         .clogin
         {
            width: 400px;
            height: 400px;
                background: rgb(27,27,27,.5);
                border: 1px solid green;
         }
         span
         {
            color: green;
            font-size: 30px;
         }
     </style>
</head>
<body>
	<center>

<div class="clogin">
	<form method="post">
<h2>Change Password ! fill here </h2>
		<table><tr>
			<td><label>Older Password</label></td>
			<td><input type="password" name="OPASSWORD" placeholder="Enter Olderpassword">
		
		</td></tr>
		<br><tr>
			<td><label>New Password</label></td>
			<td><input type="password" name="NewPASSWORD" placeholder="Enter New password">
		
		<br></td>
	</tr>
	<tr>
			<td><label>confirm Password</label></td>
			<td><input type="password" name="CPASSWORD" placeholder="Enter Confirm password">
		</td></tr>
		<tr>
		<td>
		
			<input type="submit" name="submit" value="Change"></td></tr>

			
			
		</table><br><br>
	</form><a href="LOGIN.PHP"><span>Login</span></a>
	

        <a href="CUSTOMERS.PHP"><span><pre>Home</pre></span></a>

</body>
</html>