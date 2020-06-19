<?php
	include"app/Controller.php";
	include"app/Album.php";
	$id=$_GET['id'];
	$album = new App\Album();
	$rows = $album->edit($id);
 ?>
 <!DOCTYPE html>
<html>
<h3 align="center">Edit Album</h3>
<form method="POST" action="album_proses.php">
	<input type="hidden" name="album_id" value="<?php echo $id; ?>">
	<table align="center"  width="500px">
		<tr>
			<td>Nama Album</td>
			<td><input type="text" name="album_name" value="<?php echo $rows['album_name']; ?>"></td>
		</tr>
		<tr>
			<td>Keterangan</td>
			<td><input type="text" name="album_text" value="<?php echo $rows['album_text']; ?>"></td>
		</tr>
		<tr>
			<td>Judul Photo</td>
			<td><input type="text" name="album_photo_id" value="<?php echo $rows['album_photo_id']; ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn-edit" value="Update"></td>
		</tr>
	</table>
</form>
</html>