<?php

class ExcluirCompra{
    public function retornar(){
      $sucesso = (new CompraBanco())->excluirCompra($_GET['id']);       

    }
}