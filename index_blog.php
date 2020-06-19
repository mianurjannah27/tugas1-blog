<h2>DAFTAR ALBUM</h2>

<?php 

$ind = new App\Index();
$rows = $ind->album();

?>

<table>
	<tr>
		<th>Judul Blog</th>
		<th>Photo</th>
		<th>Isi Blog</th>
	</tr>
	<?php $no=0; foreach ($rows as $row) { $no++;?>
		<tr>
			<td><?php echo $row['post_title']; ?></td>
			
			<td>
				<?php if (!empty($row['photo_text'])) { ?>
					<center><img width="200px" height="130x "src="layout/assets/uploads/<?php echo $row['photo_text']; ?>"></center>				
				<?php } ?>
			</td>
			<td><?php echo $row['post_text']; ?></td>
			</tr>
		<?php } ?>
	</table>