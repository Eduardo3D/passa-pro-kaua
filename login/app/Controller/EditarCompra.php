<?php

class EditarCompra
{
    public function retornar()
    {
        $sucesso = (new CompraBanco)->buscarPorCompra($_GET['id']);
        require __DIR__."/../../editar-compra.php";
       
        }
}