<?php 
	namespace App;


	class Post extends Controller {

		public function __construct(){
			parent::__construct();
		}

	

		public function tampil()
			{
		$sql = "SELECT tb_post.*, tb_category.cat_name as Cat 
				FROM tb_post, tb_category
				WHERE tb_post.post_cat_id=tb_category.cat_id ORDER BY tb_post.post_id";
				$stmt = $this->db->prepare($sql);
				$stmt->execute();

				$data = [];
				while ($row = $stmt->fetch()) {
					$data[] = $row;
				}

				return $data;
			}


		public function input(){

			$date = $_POST['post_date'];
			$slug = $_POST['post_slug'];
			$title = $_POST['post_title'];
			$text = $_POST['post_text'];
			$catid = $_POST['post_cat_id'];
			$sql = "INSERT INTO tb_post(post_date,post_slug,post_title,post_text,post_cat_id) VALUES (
										   :post_date,:post_slug,:post_title,:post_text,:post_cat_id)";

			$stmt = $this->db->prepare($sql);
			$stmt->bindParam(":post_date",$date);
			$stmt->bindParam(":post_slug",$slug);
			$stmt->bindParam(":post_title",$title);
			$stmt->bindParam(":post_text",$text);
			$stmt->bindParam(":post_cat_id",$catid);
			$stmt->execute();

			return false;
		}

		public function listKategori()
		{
			$sql = "SELECT * FROM tb_category";
			$stmt = $this->db->prepare($sql);
			$stmt->execute();

			$data = [];
			while ($row = $stmt->fetch()) {
				$data[] = $row;
			}

			return $data;
		}		
		public function edit($id)
		{
			$sql = "SELECT * FROM tb_post WHERE post_id=:post_id";
			$stmt = $this->db->prepare($sql);
			$stmt->bindParam(":post_id", $id);
			$stmt->execute();

			$row = $stmt->fetch();

			return $row;
		}

		public function update()
		{

			$date = $_POST['post_date'];
			$slug = $_POST['post_slug'];
			$title = $_POST['post_title'];
			$text = $_POST['post_text'];
			$catid = $_POST['post_cat_id'];
			$id = $_POST['post_id'];

			$sql = "UPDATE tb_post SET post_date=:post_date, post_slug=:post_slug, post_title=:post_title, post_text=:post_text, post_cat_id=:post_cat_id WHERE post_id=:post_id";
			$stmt = $this->db->prepare($sql);
			$stmt->bindParam(":post_date",$date);
			$stmt->bindParam(":post_slug",$slug);
			$stmt->bindParam(":post_title",$title);
			$stmt->bindParam(":post_text",$text);
			$stmt->bindParam(":post_cat_id",$catid);
			$stmt->bindParam(":post_id", $id);

			$stmt->execute();

			return false;
		}

		public function delete($id)
		{
			$sql = "DELETE FROM tb_post WHERE post_id=:post_id";
			$stmt = $this->db->prepare($sql);
			$stmt->bindParam(":post_id",$id);
			$stmt->execute();

			return false;
		}
}
