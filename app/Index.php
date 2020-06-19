<?php

namespace App;

class Index extends Controller {

	public function __construct() {
		parent::__construct();
	}
		public function post()
			{
		$sql = "SELECT tb_post.post_title,tb_post.post_text,tb_photos.photo_text
				FROM tb_post INNER JOIN tb_photos ON tb_post.post_id = tb_photos.photo_post_id";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		$data = [];
		while ($row = $stmt->fetch()) {
			$data[] = $row;
		}

		return $data;

		}
		public function album()
		{
		$sql = "SELECT tb_post.post_title,tb_post.post_text,tb_photos.photo_text
				FROM tb_post INNER JOIN tb_photos ON tb_post.post_id = tb_photos.photo_post_id";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		$data = [];
		while ($row = $stmt->fetch()) {
			$data[] = $row;
		}

		return $data;
		}
	
	public function login()
	{

		$user_name = $_POST['user_name'];
		$user_password = $_POST['user_password'];

		$stmt = $this->db->prepare("SELECT * FROM tb_users WHERE user_name=:user_name");
		$stmt->bindParam(":user_name", $user_name);
		$stmt->execute();

		$row = $stmt->fetch();

		if (!empty($row) AND password_verify($user_password, $row['user_password'])) {

			$_SESSION['login']  = true;
			$_SESSION['user_id']  = $row['user_id'];
			$_SESSION['user_name']  = $row['user_name'];
			$_SESSION['user_role'] = $row['user_role'];
		} else {
			$_SESSION['login_error'] = "Login tidak ditemukan!";
		}

		return false;
	}
}