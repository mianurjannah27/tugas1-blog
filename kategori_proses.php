 <?php 
 	include"app/Controller.php";
	include"app/Kategori.php";
	$kat = new App\Kategori();

	if ($_POST['btn-simpan']){
	$kat->input();
	header("location:dashboard.php?page=kategori_tampil");
}
	if ($_POST['btn-edit']){
	$kat->update();
	header("location:dashboard.php?page=kategori_tampil");
}

	if ($_GET['delete-id']){
	$kat->delete($_GET['delete-id']);
	header("location:dashboard.php?page=kategori_tampil");
	}
 ?>

