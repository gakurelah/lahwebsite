<?php
echo"<center>";
include('CONN.PHP');

if(isset($_POST['submit']))
{
	$OUSERNAME =$_POST['OUSERNAME'];
	$NewUSERNAME =$_POST['NewUSERNAME'];
	$CUSERNAME =$_POST['CUSERNAME'];

if(!empty($OUSERNAME) && !empty($NewUSERNAME) && !empty($CUSERNAME))
{
	$SQL=mysqli_query($con,"SELECT * FROM users WHERE USERNAME='$OUSERNAME'");

	if(mysqli_num_rows($SQL)>0)
	{
		$ROW=mysqli_fetch_array($SQL);
	
		$username =$ROW['USERNAME'];
		if($NewUSERNAME==$CUSERNAME)
		{
			$TRUE =mysqli_query($con,"UPDATE users set USERNAME='$NewUSERNAME' WHERE USERNAME='$username'");

			if ($TRUE) {
					 echo "<script>confirm('are you sure you want to change UserName')</script>";
				}	
		}
			
			
		}
		
	}
}


?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>User Name</title>
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
<div class="clogin">
<h1>change User Name</h1>
<table>
	<form method="post">
		<tr>
			<td><label>Older User Name</label></td>
			<td><input type="text" name="OUSERNAME" placeholder="Enter OlderUserName"></td>
		</tr>
		<tr>

			<td><label>New UserName</label></td>
			<td><input type="text" name="NewUSERNAME" placeholder="Enter New UserName"></td>
		</tr>
		<tr>
			<td><label>confirm User Name</label></td>
			<td><input type="text" name="CUSERNAME" placeholder="Enter Confirm UserName"></td>
		</tr>
		<tr>
			<td><input type="submit" name="submit" value="Change"></td>
			<td><a href="LOGIN.PHP">Login</a></td>
		</tr>
	</form>
</table>
</body>
</html>