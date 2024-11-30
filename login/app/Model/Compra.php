<?php

class Compra{

	private string $id_username;

	private string $nome; private string $preco;
    private string $username;     private string $cpf;
  
	public function getCpf()
	{
		return $this->cpf;
	}

	public function setCpf($cpf)
	{
		$this->cpf = $cpf;
	}

public function getId_username()
{
	return $this->id_username;
}

public function setId_username($id_username)
{
	$this->id_username = $id_username;
}

public function getPreco(){
	return $this->preco;
}

public function setPreco($preco){
	$this->preco = $preco;
}
}