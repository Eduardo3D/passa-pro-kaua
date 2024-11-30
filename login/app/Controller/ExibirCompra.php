<?php

class ExibirCompra{
    public function retornar(){
      $sucesso = (new CompraBanco())->listarCompra();       
     
      require __DIR__."/../../exibir-compra.php";
    }
}