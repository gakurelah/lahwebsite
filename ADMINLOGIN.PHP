<?php
echo"<center>";
session_start();
if (isset($_POST['LOGIN'])) {
    $Email=$_POST['Email'];
    $password=$_POST['Password'];
    $con=mysqli_connect("localhost","root","","homework")or die("Error in database connection");

    $select=mysqli_query($con,"SELECT * FROM admin where Email='$Email' and Password='$password'");

    if (empty($Email) OR empty($password)) {

        echo"All fields are required";

    }elseif (mysqli_num_rows($select) > 0) {
       
        while (mysqli_fetch_assoc($select)) {

            $_SESSION['session']=$_POST['Email'];

    header("location:AdminWELCOME.PHP");
        }
    }else {
        echo"Entered credentials are incorrect!";
}
}
?>
<html>
 <head>
     <style type="text/css">
         span
         {
            color: green;
            font-size: 30px;
         }
       </style>
     <title>GAKURE</title>

     <style type="text/css">
         input[type=text],input[type=submit],input[type=password]
{
    width:50%;
    border:2px solid #aaa;
    border-radius:4px;
    outline:none;
    padding:8px;
    box-sizing:border-box;
    transition: 3e;
}
input[type=text]:focus{
    border-color:dodgerBlue;
    box-shodow:0 0 8px 0 dodgerBlue;
}
body{
    background: url("images/aboutus-page-header-img.jpg") no-repeat;
}
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
        <marquee direction="down" behavior="alternate" height="300px" width="1200px" >
      <marquee scrollamount="10" direction="right"> <img src="GIF/giphy (4).gif"><img src="GIF/giphy (2).gif"><img src="GIF/giphy (1).gif"></marquee></marquee>
        <center>
            <div class="clogin">
        <form action="" method="post">
            <h1>Admin Login form</h1>
            <table>
           <tr><td><label>Email</label> 
    <input type="text" name="Email" placeholder="enter your Email"></td></tr>
    
    <tr>
        <td><label>Password</label>
   <input type="password" name="Password" placeholder="Enter  Password" >
    
            <input type="submit" value="Login" name="LOGIN">
</td></tr>
        </table>
         <a href="FORGETPASSWORDADMIN.PHP"><span>Forget</span></a><br>
            Do not have an account? <a href="ADMIN.PHP"><span>Create account</span></a>

        </form>
        
        
        </div>
        </center>
    </body>
</html>