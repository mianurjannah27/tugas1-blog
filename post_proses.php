 <?php 
 	include"app/Controller.php";
	include"app/Post.php";
	$post = new App\Post();

	if ($_POST['btn-simpan']){
	$post->input();
	header("location:dashboard.php?page=post_tampil");
}
	if ($_POST['btn-edit']){
	$post->update();
	header("location:dashboard.php?page=post_tampil");
}

	if ($_GET['delete-id']){
	$post->delete($_GET['delete-id']);
	header("location:dashboard.php?page=post_tampil");
	}
 ?>

