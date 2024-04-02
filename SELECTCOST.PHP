
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style type="text/css">
        table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
    box-shadow: 0 2px 15px rgba(64, 64, 64, .7);
    border-radius: 12px 12px 0 0;
    margin-bottom: 50px;
  }

  td,
  th {
    padding: 10px 16px;
    text-align: center;
  }

  th {
    background-color: #584e46;
    color: #fafafa;
    font-family: 'Open Sans', Sans-serif;
    font-weight: bold;
  }

  tr {
    width: 100%;
    background-color: #fafafa;
    font-family: 'Montserrat', sans-serif;
  }

  tr:nth-child(even) {
    background-color: #eeeeee;
  }

    </style>
</head>
<body>

</body>
</html><?PHP
$conn=mysqli_connect("localhost","root","","homework");

if(!$conn)
{
    die("could not CONNECT".mysqli_connect_error());  
}
else
{
    $SELEC ="SELECT *FROM users";
    $que=mysqli_query($conn,$SELEC);
    echo"<center>";
    
    echo"<table border='1'cellspacing=10cellpadding=10>";
    echo"<tr>
    <th>No</th>
    <th>First Name</th>
    <th>Last Name</th>
     <th>User Name</th>
    
   
    
    </tr>";

    while($row=mysqli_fetch_array($que))
    {
        echo"<tr>";

        echo"<td>".$row['ID']."</td>";

        echo"<td>".$row['Firstname']."</td>";

        echo"<td>".$row['Lastname']."</td>";

          echo"<td>".$row['USERNAME']."</td>";
        echo"</tr>";
    }
    echo"<table>";

      
    }

?>

<a href="AdminWELCOME.php">Back</a>