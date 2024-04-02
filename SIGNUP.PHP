<?php
if (isset($_POST['submit'])) 
{
    $con=mysqli_connect("localhost","root","","homework")or die("Error in database connection");

    $username=$_POST['USERNAME'];
    $password=$_POST['PASSWORD'];
    $confpassword=$_POST['confpassword'];
    $Fname=$_POST['Firstname'];
    $Lname=$_POST['Lastname'];
    $user_count='';
   $pattern ='/^([a-z\.]+)$/';
   if(preg_match($pattern, $username))
   {
    
    $select=mysqli_query($con,"SELECT * FROM users where username='$username'");
        if (mysqli_num_rows($select) > 0)
         {
            echo"Entered username was taken, please try another";
        }
        elseif (empty($username) OR empty($password) OR empty($confpassword))
         {
            echo"All fields are required";
        }
        elseif (strlen($password) <8) 
        {
            echo"You have to use strong password with 8 or more characters!";
        }
        elseif ($password != $confpassword) {
            echo"Entered two passwords does not matches";
        }
        else {
        
           $insert="INSERT INTO users(USERNAME,Firstname,Lastname,PASSWORD) 
           values('$username','$Fname','$Lname','$confpassword')";

        if (mysqli_query($con, $insert)) {
            echo "Account created successfully";
        }else {
            die("Inserting query error");
        }
    }
    }
    else
    {
        $message="User Name should be contian  lowercase letter Please";
        echo $message;
    }
}

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
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
        <h1>SignUp Castomer</h1>
        <div class="clogin">
	<table>
<form action="#" method="post">
	<tr><td><label>User Name</label>
	<input type="text" name="USERNAME" placeholder="enter User Name"></td></tr>
	<tr><td><label>First Name</label>
	<input type="text" name="Firstname" placeholder="enter First Name"></td></tr>
	<tr><td><label>Last Name</label>
	<input type="text" name="Lastname" placeholder="enter Last Name"></td></tr>
	
	<tr><td><label>Password</label> 
	<input type="password" name="PASSWORD" placeholder="enter Password"></td></tr>
	
	<tr><td><label>Confirm Password</label>
	<input type="password" name="confpassword" placeholder="confirm Password" ></td></tr>
	
	
	<tr><td><input type="submit" name="submit" value="submit"></td></tr>
	
	
	</table></form>
</form>
</body>
</html>
Already have an account? <a href="LOGIN.PHP"><span>Login</span></a><br>

