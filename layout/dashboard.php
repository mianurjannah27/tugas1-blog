
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="<?php echo ASSET; ?>css/style.css">
</head>
<body>
	<div class="container">
		<div>
			<h3>Selamat Datang</h3>
		</div>
		<div class="menu-wrap">
			<a href="dashboard.php">Dashboard</a>
			<a href="dashboard.php?page=kategori_tampil">Category</a>
			<a href="dashboard.php?page=post_tampil">Post</a>
			<a href="dashboard.php?page=photo_tampil">Photo</a>
			<a href="dashboard.php?page=album_tampil">Album</a>
			<a href="dashboard.php?page=user_tampil">User</a>
			<a href="user_logout.php">Logout</a></li>
			
		</div>

		<div class="main">
			
			<?php 

			if (isset($_GET['page'])) {
				include $_GET['page'] . ".php";
			} else {
				include "dashboard_main.php";
			}

			?>

		</div>

		<div class="footer">
			Copyright 2020.
		</div>
	</div>
</body>
</html>