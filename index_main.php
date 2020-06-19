
<?php 

$ind = new App\Index();
$rows = $ind->post();

?>
<h3>Selamat Membaca</h3>

<div class="grid-post">
	<?php foreach ($rows as $row) { ?>
		<?php if (!empty($row['photo_text'])) { ?>

			<div>
				<p><img width="200px" height="130x "src="layout/assets/uploads/<?php echo $row['photo_text']; ?>"></p>
				<p><b><?php echo $row['post_title']; ?></b></p>
				</div>

			<?php } ?>
		<?php } ?>
	</div>
