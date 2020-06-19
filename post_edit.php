<?php
	include"app/Controller.php";
	include"app/Post.php";
	$id=$_GET['id'];
	$post = new App\Post();
	$rows = $post->edit($id);
 ?>
 <!DOCTYPE html>
<html>



<h3 align="center">Edit Post</h3>
<form method="POST" action="post_proses.php">
	<input type="hidden" name="post_id" value="<?php echo $id; ?>">
	<table align="center"  width="500px">
		<tr>
			<td>Tanggal</td>
			<td><input type="date" name="post_date" value="<?php echo $rows['post_date']; ?>"></td>
		</tr>
		<tr>
			<td>Slug</td>
			<td><input type="text" name="post_slug" value="<?php echo $rows['post_slug']; ?>"></td>
		</tr>
		<tr>
			<td>Judul Blog</td>
			<td><input type="text" name="post_title" value="<?php echo $rows['post_title']; ?>"></td>
		</tr>
		<tr>
			<td>Isi Blog</td>
			<td><textarea name="post_text" rows="15" cols="100"><?php echo $rows['post_text']; ?></textarea></td>
			
		</tr>
		<tr>
			<td>Kategori</td>
			<td><input type="text" name="post_cat_id" value="<?php echo $rows['post_cat_id']; ?>"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="btn-edit" value="Update"></td>
		</tr>
	</table>
</form>
