<?php

//session_start(); //inicia a sessão

require_once('conectadb.php');

//$usuario = $_POST['loginUsername'];
//$senha = $_POST['loginPassword'];
/**
 * 
 */
class LoginUsuario
{
	private $usuario;
	private $senha;
	private $conexao;

	public function __construct(){
		session_start();
	}

	public function setUsuario($usuario){
		$this->usuario = $usuario;
	}

	public function getUsuario(){
		return $this->usuario;
	}

	public function setSenha($senha){
		$this->senha = $senha;
	}

	public function getSenha(){
		return $this->senha;
	}

	public function testeLogin($usuario, $senha){
		$this->conexao = new ConectaDb();
		$this->conexao->conecta();

			$query = "select * from login_teste where login='{$usuario}' and senha='{$senha}';";
			$result = pg_query($query);
			//echo $query;

			if($consulta = pg_fetch_array($result)){
				$_SESSION['login'] = $consulta['login'] ;
				$_SESSION['senha'] = $consulta['senha'] ;
				$_SESSION['nome'] = $consulta['nome'] ;
				$_SESSION['funcao'] = $consulta['funcao'] ;
				header('location:../admin.php');
			}else{
				$erro = "erro_login";
				header('location:../login.php?login='.$erro);
			}

		$this->conexao->fechaConexao();
		unset($_POST);
	}
}

$login = new LoginUsuario();
$login->testeLogin($_POST['loginUsername'], $_POST['loginPassword']);
//while ($consulta = pg_fetch_array($result)) {
//echo "Login: ".$consulta['login']." | Nome: ".$consulta['nome'];
//}