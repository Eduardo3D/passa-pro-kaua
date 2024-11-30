<?php

class CadastrarCompra{
    public function retornar(){
      $sucesso = (new CompraBanco())->cadastrarCompra($_POST['id_username'],$_POST['preco'],$_POST['cpf']);
      if($sucesso){
        return "Usuario cadastrado!";
      };
      return "Usuario não cadastrado!";
    }
}