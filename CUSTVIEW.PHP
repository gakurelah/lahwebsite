
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link rel="stylesheet" type="text/css" href="CUSTVIEW.css">
  <style type="text/css">
    .logoutt
    {
      font-size: 20px;
      color: green;
    }
  </style>
</head>

<body>


<div class="container">

  <div class="card">
    <img src="images/our_team_1.jpg"alt="Cheetah">
    <div class="intro">
      <h1><a class="login"href="LOGOUT.PHP">Logout</a></h1>
      <h1><a class="login"href="WELCOME.PHP">About</a></h1>
              <p>
            <span>
         Please click above 
              </span>Gakure offers thousand of vehicles for you to choose.</p>
                    </div>
                  </div>
                    </div>


</body>
</html>  
<!DOCTYPE html>

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  
	<title></title>
<link rel="stylesheet" type="text/css" href="formstyle.css">
<style type="text/css">
  .text-center
  {
    height: 50px;
    width: 40%;
    background: grey;
    text-align: center;
    color: green;
  }
</style>


</head>
<body>


<h2>The Right Vehicle For You </h2>
  <table >
    <thead>
      <tr>
        
        <th class="text-center">No</th>
        <th class="text-center">Product Image </th>
      </tr>
    </thead>
    <?php
      include('CONN.PHP');
     $contact="It usually has four wheels and an internal combustion engine fueled most often by gasoline, a liquid petroleum product. Known more commonly as a car, formerly as a motorcar, it is one of the most universal of modern technologies, manufactured by one of the world's largest industries.";
      $sql="SELECT * from img";
      $result=$con-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$count?></td>
      <td><img class='img-thumbnail' alt='Cinque Terre' height='600px'width='600px' src='<?=$row["image"]?>'></td>
    
       <td><?php echo $contact ?></td>
      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>
