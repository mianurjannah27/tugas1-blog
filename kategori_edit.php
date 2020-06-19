<?php
	include"app/Controller.php";
	include"app/Kategori.php";
	$id=$_GET['id'];
	$kat = new App\Kategori();
	$rows = $kat->edit($id);
 ?>
 <!DOCTYPE html>
<html>

<h3 align="center">Edit Kategori</h3>
<form method="POST" action="kategori_proses.php">
	<input type="hidden" name="cat_id" value="<?php echo $id; ?>">
	<table align="center"  width="500px">
		<tr>
			<td>Nama</td>
			<td><input type="text" name="cat_name" value="<?php echo $rows['cat_name']; ?>"></td>
		</tr>
		<tr>
			<td>Keterangan</td>
			<td><textarea name="cat_text"><?php echo $rows['cat_text']; ?></textarea></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn-edit" value="Update"></td>
		</tr>
	</table>
</form>
</html>