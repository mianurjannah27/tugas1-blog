<center>
	<h3>DATA POST</h3>
	<a href="dashboard.php?page=post_input" class="btn">Tambah</a>
</center>
<?php

	$post = new App\Post();
	$rows = $post->tampil();
 ?>


<table>
	<tr>
		<th>No</th>
		<th>Tanggal</th>
		<th>Slug</th>
		<th>Judul Blog</th>
		<th>Isi Blog</th>
		<th>Kategori</th>
		<th>Action</th>
		
	</tr>

	<?php $no=0; foreach ($rows as $row) { $no++;?>

	<tr>
			<td><?php echo $row['post_id']; ?></td>
			<td><?php echo $row['post_date']; ?></td>
			<td><?php echo $row['post_slug']; ?></td>
			<td><?php echo $row['post_title']; ?></td>
			<td><?php echo $row['post_text']; ?></td>
			<td><?php echo $row['Cat']; ?></td>
			<td><a href="dashboard.php?page=post_edit&id=<?php echo $row['post_id']; ?>" class="btn">Edit</a>
	 			</td>
	</tr>
	<?php } ?>
</table>