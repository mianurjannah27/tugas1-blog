<?php 
$post = new App\Post();
$lst = $post->listKategori();
?>
<h3 align="center">Tambah Post</h3>
<form method="POST" action="post_proses.php">
	<table align="center">
		<tr>
			<td>Date</td>
			<td><input type="date" name="post_date"></td>
		</tr>
		<tr>
			<td>Slug</td>
			<td><input type="text" name="post_slug"></td>
		</tr>
		<tr>
			<td>Judul Blog</td>
			<td><input type="text" name="post_title"></td>
		</tr>
		<tr>
			<td>Isi Blog</td>
			<td>
				<textarea  name="post_text" rows="15" cols="100"></textarea>
			</td>
		</tr>
		<tr>
			<td>Kategori</td>
			<td>
				<select name="post_cat_id">
					<option disabled selected>--Pilih Kategori--</option>
					<?php foreach ($lst as $ls) { ?>
					<option value="<?php echo $ls['cat_id']; ?>"><?php echo $ls['cat_name']; ?></option>
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