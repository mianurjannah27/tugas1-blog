<?php 

namespace App;

	class Album extends Controller {

		public function __construct(){
			parent::__construct();
		}

		public function tampil()
		{
			

			$sql = "SELECT tb_album.*, tb_photos.photo_title as Photo 
				FROM tb_album, tb_photos
				WHERE tb_album.album_photo_id=tb_photos.photo_id ORDER BY tb_album.album_id";
			$stmt = $this->db->prepare($sql);
			$stmt->execute();

			$data = [];

			while($row = $stmt->fetch()){
				$data[] = $row;
			}

			return $data;
		}
		public function input()
		{

			$name = $_POST['album_name'];
			$text = $_POST['album_text'];
			$photoid = $_POST['album_photo_id'];
			$sql = "INSERT INTO tb_album(album_name,album_text,album_photo_id) VALUES (
										   :album_name,:album_text,:album_photo_id)";

			$stmt = $this->db->prepare($sql);
			$stmt->bindParam(":album_name",$name);
			$stmt->bindParam(":album_text",$text);
			$stmt->bindParam(":album_photo_id",$photoid);
			$stmt->execute();

			return false;
		}
		public function listPhoto()
		{
			$sql = "SELECT * FROM tb_photos";
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
			$sql = "SELECT * FROM tb_album WHERE album_id=:album_id";
			$stmt = $this->db->prepare($sql);
			$stmt->bindParam(":album_id", $id);
			$stmt->execute();

			$row = $stmt->fetch();

			return $row;
		}
		public function delete($id)
		{
			$sql = "DELETE FROM tb_album WHERE album_id=:album_id";
			$stmt = $this->db->prepare($sql);
			$stmt->bindParam(":album_id",$id);
			$stmt->execute();

			return false;
		}
		public function update()
		{

			$name = $_POST['album_name'];
			$text = $_POST['album_text'];
			$photoid = $_POST['album_photo_id'];
			$id = $_POST['album_id'];

			$sql = "UPDATE tb_album SET album_name=:album_name, album_text=:album_text, album_photo_id=:album_photo_id WHERE album_id=:album_id";
			$stmt = $this->db->prepare($sql);
			$stmt->bindParam(":album_name",$name);
			$stmt->bindParam(":album_text",$text);
			$stmt->bindParam(":album_photo_id",$photoid);
			$stmt->bindParam(":album_id", $id);

			$stmt->execute();

			return false;
		}
		
}
?>