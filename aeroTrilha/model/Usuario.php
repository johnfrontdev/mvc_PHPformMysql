<?php
require_once "model/Conexao.php";

class Usuario {

    private $nomeUsuario;
    private $email;
    private $dtaNasc;
    private $sexo;
    private $paisNasc;
    private $numTel;
    private $cpf;
    private $senha;
    private $idUsuario;


    public function cadastraUsuario() {
        try{
            $conn = Conexao::conectar();
            $sql = $conn->prepare("insert into rotaairlines.tabelausuario (nomeUsuario, email, dtaNasc, paisNasc, numTel, cpf, senha, sexo) values (:nome, :emailUsuario, :nascUsuario, :paisNascUsuario, :numTelUsuario, :cpfUsuario, :senhaUsuario, :sexoUsuario)");
    
            $nomeUsuario = $this->nomeUsuario;
            $email = $this->email;
            $dtaNasc = $this->dtaNasc;
            $paisNasc = $this->paisNasc;
            $numTel = $this->numTel;
            $cpf = $this->cpf;
            $senha = $this->senha;
            $sexo = $this->sexo;
    
            $sql->bindParam(":nome", $nomeUsuario);
            $sql->bindParam(":emailUsuario", $email);
            $sql->bindParam(":nascUsuario", $dtaNasc);
            $sql->bindParam(":paisNascUsuario", $paisNasc);
            $sql->bindParam(":numTelUsuario", $numTel);
            $sql->bindParam(":cpfUsuario", $cpf);
            $sql->bindParam(":senhaUsuario", $senha);
            $sql->bindParam(":sexoUsuario", $sexo);
            
            $sql->execute();
    
        } catch(PDOException $e) {
            echo "Conexão Falhou!". $e->getMessage();
        }
    }
    
    

	/**
	 * @return mixed
	 */
	public function getNomeUsuario() {
		return $this->nomeUsuario;
	}
	
	/**
	 * @param mixed $nomeUsuario 
	 * @return self
	 */
	public function setNomeUsuario($nomeUsuario): self {
		$this->nomeUsuario = $nomeUsuario;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getEmail() {
		return $this->email;
	}
	
	/**
	 * @param mixed $email 
	 * @return self
	 */
	public function setEmail($email): self {
		$this->email = $email;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getDtaNasc() {
		return $this->dtaNasc;
	}
	
	/**
	 * @param mixed $dtaNasc 
	 * @return self
	 */
	public function setDtaNasc($dtaNasc): self {
		$this->dtaNasc = $dtaNasc;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getSexo() {
		return $this->sexo;
	}
	
	/**
	 * @param mixed $sexo 
	 * @return self
	 */
	public function setSexo($sexo): self {
		$this->sexo = $sexo;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getPaisNasc() {
		return $this->paisNasc;
	}
	
	/**
	 * @param mixed $paisNasc 
	 * @return self
	 */
	public function setPaisNasc($paisNasc): self {
		$this->paisNasc = $paisNasc;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getNumTel() {
		return $this->numTel;
	}
	
	/**
	 * @param mixed $numTel 
	 * @return self
	 */
	public function setNumTel($numTel): self {
		$this->numTel = $numTel;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getCpf() {
		return $this->cpf;
	}
	
	/**
	 * @param mixed $cpf 
	 * @return self
	 */
	public function setCpf($cpf): self {
		$this->cpf = $cpf;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getSenha() {
		return $this->senha;
	}
	
	/**
	 * @param mixed $senha 
	 * @return self
	 */
	public function setSenha($senha): self {
		$this->senha = $senha;
		return $this;
	}

	/**
	 * @return mixed
	 */
	public function getIdUsuario() {
		return $this->idUsuario;
	}
	
	/**
	 * @param mixed $idUsuario 
	 * @return self
	 */
	public function setIdUsuario($idUsuario): self {
		$this->idUsuario = $idUsuario;
		return $this;
	}
}

?>