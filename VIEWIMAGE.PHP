
   
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
    width: 50%;
    background: grey;
    text-align: center;
    color: green;
  }
  .Delete:hover button
  {
background: #fc5d08;
cursor: pointer;
color: blue;
  }
  button{
    color: #fc5d08;
    font-size: 30px;
    text-decoration: none;
  }
  button,a{
    text-decoration: none;
  }
  button:hover a{
    background: #ff3333;
    cursor: pointer;
  }
</style>
</head>
<body>

<button><a href="Uploadimage.php">Back to Add Car</a></button>
<button><a href="AdminWELCOME.PHP">Go Home</a></button>
<center><h2>The Right Vehicle For You </h2>
  <table >
    <thead>
      <tr>
        
        <th class="text-center">Id Image</th>
        <th class="text-center">Product Image </th>

           <th class="text-center" colspan="2">Action</th>
      </tr>
    </thead>
    <?php
      include('CONN.PHP');
     
      $sql="SELECT * from img";
      $result=$con-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$count?></td>
      <td><img class='img-thumbnail' alt='Cinque Terre' height='600px'width='600px' src='<?=$row["image"]?>'></td>
      <?php
       echo"<td> 
        <a href='upda.php?id=$row[id]'
        onclick=\"return confirm('are you sure want to update this record')\">";
      ?>
    <div class="Delete">
   <button>Edit</button> 
  </div>

    <?php
    echo"</a>";

    echo"<td><a href='DELETE.PHP?id=$row[id]'
    onclick=\"return confirm('are you sure want to Delete this record')\">";?>
     <div class="Delete">
   <button>Delete</button> 
  </div>
    <?php
    echo"</a></td>";
        echo"</tr>";
        ?>
      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>
