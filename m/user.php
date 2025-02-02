<?php
class User
{
	private $pdo;
    public string $username;
    public string $password;

    public function __construct(){
        require_once './connection.php';
        $con = new Connection();
        $this->pdo = $con->connect("bd_rgpainter","localhost","root","");
    }

	public function insert(){
		$cmd = $this->pdo->prepare('SELECT id FROM rgp_tb_user WHERE username = :user');
		$cmd->bindparam(":user", $this->username);
		$cmd->execute();
		$cmd->fetch(PDO::FETCH_ASSOC);
		if ($cmd->rowCount() > 0) {
			return false;
		}
		else{
			$cmd = $this->pdo->prepare('INSERT INTO rgp_tb_user (username, password) VALUES (:user, :pw)');
			$cmd->bindValue(":username", $this->username);
			$cmd->bindValue(":pw", $this->password);
			$cmd->execute();
			return true;
		}
	}

    public function selectAll($type){
        $dados = array();
        $cmd = $this->pdo->prepare("SELECT * FROM rgp_tb_user ORDER BY :type");
        $cmd->bindValue(":type", $type);
        $cmd->execute();
        $dados = $cmd->fetchAll(PDO::FETCH_ASSOC);
        return $dados;
        /*
            ou $select->fetch(); para so um registro
            print_r($select); mostrar estrutura do array
        */
    }

    public function delete($id){
        $cmd = $this->pdo->prepare("DELETE FROM rgp_tb_user WHERE id = :id");
        $cmd->bindValue(":id", $id);
        $cmd->execute();
    }

    public function getSpecificUser($id){
        $dados = array();
        $cmd = $this->pdo->prepare('SELECT username FROM rgp_tb_user WHERE id = :id');
        $cmd->bindValue(":id", $id);
        $cmd->execute();
        $dados = $cmd->fetch(PDO::FETCH_ASSOC);
        return $dados;
    }

    public function update($id){
        $cmd = $this->pdo->prepare("UPDATE rgp_tb_user SET username = :user, password = :pw WHERE id = :id");
        $cmd->bindValue(":user", $this->username);
        $cmd->bindValue(":pw", $this->password);
        $cmd->bindValue(":id", $id);
        $cmd->execute();
    }

    public function login(){
        $cmd = $this->pdo->prepare('SELECT id, username FROM rgp_tb_user WHERE username = :user AND password = :pw');
		$cmd->bindparam(":user", $this->username);
        $cmd->bindparam(":pw", $this->password);
		$cmd->execute();
		$data = $cmd->fetch(PDO::FETCH_ASSOC);

		if ($cmd->rowCount() < 0) {
			return false;
		} else {
            if (!isset($_SESSION)) {
                session_start();
            }
            $_SESSION['id'] = $data['id'];
            $_SESSION['user'] = $data['username'];
            return true;
        }
    }
}
?>