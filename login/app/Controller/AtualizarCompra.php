<?php

class AtualizarCompra{
    public function retornar(){
      $sucesso = (new CompraBanco())->atualizarCompra($_POST['id_usuario'],$_POST['preco'],$_POST['cpf']);
      if($sucesso){
        return "Usuario atualizado! 😍";
      };
      return "Usuario não atulizado! 😒";
    }
}