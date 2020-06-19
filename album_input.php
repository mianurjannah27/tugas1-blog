<?php
	
	$Alb = new App\Album();
	$lst = $Alb->listPhoto();
 ?>
<center><h3>Tambah Album</h3></center>
<form method="POST" action="album_proses.php">
	<table align="center">
		<tr>
			<td>Name</td>
			<td><input type="text" name="album_name"></td>
		</tr>
		<tr>
			<td>Text</td>
			<td><input type="text" name="album_text"></td>
		</tr>
		<tr>
			<td>Photo</td>
			<td>
				<select name="album_photo_id">
					<option disabled selected>--Pilih Photo--</option>
					<?php foreach ($lst as $ls) { ?>
					<option value="<?php echo $ls['photo_id']; ?>"><?php echo $ls['photo_title']; ?></option>
					<?php } ?>
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn-simpan" value="Simpan"></td>
		</tr>
	</table>
</form>