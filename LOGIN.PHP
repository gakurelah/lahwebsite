<?php
echo"<center>";
session_start();
if (isset($_POST['LOGIN'])) {
    $USERNAME=$_POST['USERNAME'];
    $PASSWORD=$_POST['PASSWORD'];
    $con=mysqli_connect("localhost","root","","homework")or die("Error in database connection");

    $select=mysqli_query($con,"SELECT * FROM users where USERNAME='$USERNAME' and PASSWORD='$PASSWORD'");

    if (empty($USERNAME) OR empty($PASSWORD)) {

        echo"All fields are required";

    }elseif (mysqli_num_rows($select) > 0) {
       
        while (mysqli_fetch_assoc($select)) {

            $_SESSION['session']=$_POST['USERNAME'];

    header("location:WELCOME.PHP");
        }
    }else {
        echo"Entered credentials are incorrect!";
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
        <div class="clogin">
        <form action="" method="post">
            <h1>Login!</h1>

            <table>
           <tr><td><label>User Name</label> 
    <input type="text" name="USERNAME" placeholder="enter User Name"></td></tr>
    
    <tr>
        <td><label>Password</label>
   <input type="password" name="PASSWORD" placeholder="Enter  Password" >
    <br><br>
            <input type="submit" value="Login" name="LOGIN">
</td></tr>
        </table>
         
            Do not have an account? <a href="SIGNUP.PHP"><span>Create account</span></a><br>
<a href="FORGETPASSWORD.PHP"><span>Forget</span></a><br>
        </form>
    </center>
</div>

</body>
</html>

