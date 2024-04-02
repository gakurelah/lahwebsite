<?PHP
include('CONN.PHP');

  $id=$_GET['id'];
  $del="delete from img where id='$id'";
if(mysqli_query($con,$del))
{
 header("location:VIEWIMAGE.PHP");
}

?>