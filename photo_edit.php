<?php
	include"app/Controller.php";
	include"app/Photo.php";
	$id=$_GET['id'];
	$photo = new App\Photo();
	$rows = $photo->edit($id);
 ?>
 <!DOCTYPE html>
<html>
<h3 align="center">Edit Photo</h3>
<form method="POST" action="photo_proses.php">
	<input type="hidden" name="photo_id" value="<?php echo $id; ?>">
	<table align="center"  width="500px">
		<tr>
			<td>Date</td>
			<td><input type="date" name="photo_date" value="<?php echo $rows['photo_date']; ?>"></td>
		</tr>
		<tr>
			<td>Title</td>
			<td><input type="text" name="photo_title" value="<?php echo $rows['photo_title']; ?>"></td>
		</tr>
		<tr>
			<td>Photo</td>
			<td><input type="file" name="photo_text" value="<?php echo $row['photo_text']; ?>"></td>
		</tr>
		<tr>
			<td>Post ID</td>
			<td><input type="text" name="photo_post_id" value="<?php echo $rows['photo_post_id']; ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn-edit" value="Update"></td>
		</tr>
	</table>
</form>
</html>