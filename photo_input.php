<?php
	$pho = new App\Photo();
	$lst = $pho->listPost();
 ?>
<h3 align="center">Tambah Photo</h3>
<form method="POST" action="photo_proses.php">
	<table align="center">
		<tr>
			<td>Tanggal</td>
			<td><input type="date" name="photo_date"></td>
		</tr>
		<tr>
			<td>Judul Photo</td>
			<td><input type="text" name="photo_title"></td>
		</tr>
		<tr>
			<td>File Photo</td>
			<td><input type="file" name="photo_text"></td>
		</tr>
		<tr>
			<td>Post</td>
			<td>
				<select name="photo_post_id">
					<option disabled selected>--Pilih Post--</option>
					<?php foreach ($lst as $ls) { ?>
					<option value="<?php echo $ls['post_id']; ?>"><?php echo $ls['post_title']; ?></option>
					<?php } ?>
					
				</select>
			</td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn-simpan" value="Save"></td>
		</tr>
	</table>
</form>