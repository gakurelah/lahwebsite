<?php
session_start();
if (!isset($_SESSION['session'])) 
{
    header("location: LOGIN.PHP");
}
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="PP.CSS">
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
/>

</head>    
<body  >

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css.css">
<style type="text/css">
    .car
    {
        color: red;
        cursor: pointer;
    }
    .intro:hover .car
    {
        background: green;
    }
</style>
</head>
<body>

<div class="container">

    <div class="card">
        <img src="images/yusuf.jpg"alt="Cheetah">
        <div class="intro">
            <h1> <a class="login" href="LOGOUT.PHP">Logout</a></h1><h4><a class="login"href="CUSTOMERS.PHP">About</a></h4>
                    <p>Lah@
                    <span>Please click above
                    
                    </span>Our Satisfied Customers </p>
                    </div>
                    </div>
                    </div>
        
<div class="container">
    <div class="card">
        <img src="images/listing_img2.jpg"alt="Cheetah">
        <div class="intro">
            <h1 class="car"><a href="CUSTVIEW.php">MORE CAR </a></h1>
            <p>Lah@<span>
                
                Mercedes-Benz
                  </span> is a German luxury and commercial vehicle automotive brand established in 1926</p>
            
        </div>

    </div>
</div>
<div class="container">
    <div class="card">
        <img src="images/bg1.png"alt="Cheetah">
        <div class="intro">
            <h1>EcoCAR</h1>
            <p>Lah@<span>
                EcoCAR 
            </span
            >EcoCAR seeks to advance the level of vehicle technology capable of reducing petroleum consumption and greenhouse gas (GHG) emissions while demonstrating</p>
        </div>
    </div>
</div>

</body>
</html>
    </body>
</html>
 <a href="VIEWIMAGE.PHP">View New Car</a>