<center>
	<h2>DATA ALBUM</h2>
	<a href="dashboard.php?page=Album_input" class="btn">Tambah</a>
</center>
<?php

	$album = new App\Album();
	$rows = $album->tampil();
 ?>


<table>
	<tr>
		<th>No.</th>
		<th>Nama Album</th>
		<th>Deskripsi</th>
		<th>Judul Photo</th>
		<th>Action</th>
	</tr>

	<?php $no=0; foreach ($rows as $row) { $no++;?>

	<tr>
			<td><?php echo $row['album_id']; ?></td>
			<td><?php echo $row['album_name']; ?></td>
			<td><?php echo $row['album_text']; ?></td>
			<td><?php echo $row['Photo']; ?></td>
			<td><a href="dashboard.php?page=album_edit&id=<?php echo $row['album_id']; ?>" class="btn">Edit</a>
	 			
	 		</td>
	</tr>
	<?php } ?>
</table>