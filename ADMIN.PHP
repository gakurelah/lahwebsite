<?php
 include('CONN.PHP');
if (isset($_POST['submit'])) 
{
   
    $Email=$_POST['Email'];
    $password =$_POST['Password'];
    $confpassword=$_POST['confpassword'];
    $Fname=$_POST['First_Name'];
    $Lname=$_POST['Last_Name'];
    $user_count='';
   $pattern ='/^([a-zA-Z0-9\.]+@+[a-zA-Z]+(\.)+[a-zA-Z]{2,3})$/';
   if(preg_match($pattern, $Email))
   {
    
    $select=mysqli_query($con,"SELECT * FROM admin where Email='$Email'");
        if (mysqli_num_rows($select) > 0)
         {
            echo"Entered Email was taken, please try another";
        }
        elseif (empty($Email) OR empty($password) OR empty($confpassword))
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
        
           $insert="INSERT INTO admin(Admin_Id,First_Name,Last_Name,Email,Password) 
           values('','$Fname','$Lname','$Email','$confpassword')";

        if (mysqli_query($con, $insert)) {
            echo "Account created successfully";
        }else {
            die("Inserting query error");
        }
    }
    }
    else
    {
        $message=" incorrect  Email  Please enter real Email";
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
      
       <link rel="stylesheet" type="text/css" href="Adminstyle.css">
   </head>
   <body>
   <nav>
    <input type="checkbox"id="check">
    <label for="check" class="checkbtn">
       <i class="fas fa-bars">
        
    </i>
    </label>
       <label class="logo">
           Gakure
       </label>
       <ul>
           <li><a class="active" href="index.php">Home</a></li>
           
         
       </ul>
   </nav>
   </body>
   </html>

<!DOCTYPE html>
<html>
<head>
    <style type="text/css">
        span
        {
            color: green;
        }
        h3
        {
            font-size: 30px;
        }
        

    </style>
</head>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin</title>
<link rel="stylesheet" type="text/css" href="formstyle.css">

<style type="text/css">
    .clogin
         {
            width: 320px;
            height: 320px;
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
        <h3>Admin SignUp</h3>
        
	
<form method="post">

    <table>
	<tr>
        <td>
            <label>First Name</label>
	<input type="text" name="First_Name" placeholder="enter First Name">
</td></tr>
	<tr>
        <td>
            <label>Last Name</label>
	<input type="text" name="Last_Name" placeholder="enter Last Name">
</td></tr>
	
	<tr>
        <td>
            <label>Email</label> 
	<input type="text" name="Email" placeholder="enter your Email"></td>
</tr>
	
	<tr><td>
        <label>Password</label>
	<input type="password" name="Password" placeholder="Enter  Password" >
</td></tr>
	
	<tr><td><label>Confirm Password</label>
    <input type="password" name="confpassword" placeholder="confirm Password" ></td></tr>
    
    
	<tr><td><input type="submit" name="submit" value="submit"></td></tr>
	</table>
</form>
Already have an account? <a href="ADMINLOGIN.PHP"><span>Login</span></a><br>

</div>
</form>

</body>
</html>

