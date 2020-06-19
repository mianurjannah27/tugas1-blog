<center>
	<h3>DATA KATEGORI</h3>
	<a href="dashboard.php?page=kategori_input" class="btn">Tambah</a>
</center>
<?php

	$kat = new App\Kategori();
	$rows = $kat->tampil();
 ?>


<table>
	<tr>
		<th>No.</th>
		<th>Nama Kategori</th>
		<th>Deskripsi</th>
		<th>Action</th>
		
	</tr>

	<?php foreach ($rows as $row) { ?>

	<tr>
			<td><?php echo $row['cat_id']; ?></td>
			<td><?php echo $row['cat_name']; ?></td>
			<td><?php echo $row['cat_text']; ?></td>
			<td><a href="dashboard.php?page=kategori_edit&id=<?php echo $row['cat_id']; ?>" class="btn">Edit</a>
	 		</td>
	</tr>
	<?php } ?>
</table>