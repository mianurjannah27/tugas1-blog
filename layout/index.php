 
<!DOCTYPE html>
<html>
<head>
	<title>
		Sistem Informasi Album Photo
	</title>
	<link rel="stylesheet" type="text/css" href="<?php echo ASSET;?>css/style.css">
</head>


<body>
	<div class="container">
		<div class="header">
			<img src="<?php echo ASSET; ?>images/header.jpg">
		</div>

			<a href="index.php">Home</a>
			<a href="index.php?page=index_blog">Blog</a>
			<a href="index.php?page=index_login">Login</a>

		<div class="main">
			
			<?php 

			if (isset($_GET['page'])) {
				include $_GET['page'] . ".php";
			} else {
				include "index_main.php";
			}

			?>

		</div>

		<div class="footer">
			Copyright 2020.
		</div>
	</div>
</body>
</html>