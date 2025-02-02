<?php
class Image {
    private $pdo;
    public string $path;
    public string $name;

    public function __construct() {
        require_once 'connection.php';
		$con = new Connection();
		$this->pdo = $con->connect("bd_rgpainter","localhost","root","");
    }

    public function insert(){
        $cmd = $this->pdo->prepare('SELECT id FROM rgp_tb_image WHERE name = :name');
		$cmd->bindparam(":name", $this->name);
		$cmd->execute();
		$cmd->fetch(PDO::FETCH_ASSOC);
		if ($cmd->rowCount() > 0){
			return false;
		}
		else{
			$cmd = $this->pdo->prepare('INSERT INTO rgp_tb_image (imgpath, name) VALUES (:path, :name)');
			$cmd->bindValue(":name", $this->name);
			$cmd->bindValue(":path", $this->path);
			$cmd->execute();
			return true;
		}
    }
    public function select(){
        $images = array();
		$cmd = $this->pdo->query("SELECT * FROM rgp_tb_image ORDER BY id ASC");
		$images = $cmd->fetchAll(PDO::FETCH_ASSOC);
		return $images;
    }
    public function update($id, $name, $path){
		$cmd = $this->pdo->prepare("UPDATE rgp_tb_image SET name = :name, imgpath = :path WHERE id = :id");
		$cmd->bindValue(":name", $name);
		$cmd->bindValue(":path", $path);
		$cmd->bindValue(":id", $id);
		$cmd->execute();
	}
    public function delete($id){
		$cmd = $this->pdo->prepare("DELETE FROM rgp_tb_images WHERE id = :id");
		$cmd->bindValue(":id", $id);
		$cmd->execute();
	}
}
?>