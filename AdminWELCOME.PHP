<?php
session_start();
if (!isset($_SESSION['session'])) 
{
    header("location: ADMINLOGIN.PHP");
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
           <li><a href="Uploadimage.php">Add Car</a></li>
           <li><a href="VIEWIMAGE.PHP">View Car</a></li>
           <li><a href="SELECTCOST.php">List Customer</a></li>
           <li><a href="ADMINLOGOUT.PHP">Logout</a></li>
       </ul>
   </nav>
 <selection>
     
 </selection>
 
   </body>
   </html>