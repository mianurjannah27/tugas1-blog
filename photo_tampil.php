<center>
	<h3>DATA PHOTO</h3>
	<a href="dashboard.php?page=photo_input" class="btn">Tambah</a>
</center>
<?php

	$photo = new App\Photo();
	$rows = $photo->tampil();
 ?>


<table align="center" width="700px">
	<tr>
		<th>No.</th>
		<th>Tanggal</th>
		<th>Judul Photo</th>
		<th>Photo</th>
		<th>Judul Postingan</th>
		<th>Action</th>
		
	</tr>

	<?php $no=0; foreach ($rows as $row) { $no++;?>

	<tr>
			<td><?php echo $row['photo_id']; ?></td>
			<td><?php echo $row['photo_date']; ?></td>
			<td><?php echo $row['photo_title']; ?></td>
			<td><center><img width="200px" height="130x "src="layout/assets/uploads/<?php echo $row['photo_text']; ?>"></center></td>
			<td><?php echo $row['Post']; ?></td>
			<td><a href="dashboard.php?page=photo_edit&id=<?php echo $row['photo_id']; ?>" class="btn">Edit</a>
	 			</td>
	</tr>
	<?php } ?>
</table>