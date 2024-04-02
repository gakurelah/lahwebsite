<?php
session_start();
    session_destroy();
    header("location:LOGIN.PHP");

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
           <li><a class="active" href="#">Home</a></li>
           <li><a href="#">About</a></li>
           <li><a href="#">Services</a></li>
           <li><a href="#">Contact</a></li>
           <li><a href="WELCOME.PHP">Home</a></li>
       </ul>
   </nav>
 <selection>
     
 </selection>
 
   </body>
   </html>