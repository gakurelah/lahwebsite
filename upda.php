<?php
 include('CONN.PHP');

$id =$_GET['id'];
$result="select * from img where id='$id'";
$data=mysqli_query($con,$result);
echo"<center>";
echo"<h1><u><b>Editing Car</b></u></h1>";
while ($row=mysqli_fetch_array($data)) 
{	?>
	
	<form action="upda2.php"method="POST">
	<table cellpadding="5" cellspacing="5">
	<tr>
		
		<td><label>No</label><input type="text" name="id" value="<?php echo $row['id'];?>"></td>
	</tr>
	<tr>
		
		<td><label>Image:</label><input type="file" name="image" value="<?php echo $row['image'];?>">
<td><button type="submit" name="Upload" >Upload</button></td>
		</td>
	</tr>
	</table>	
	</form>
	<a href="VIEWIMAGE.PHP">View</a>
	<?php

}


?>
