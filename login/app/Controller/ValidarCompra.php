<?php

class ValidarCompra
{
    public function retornar()
    {

        if ($_POST['id_username'] == "") {
            $mensagem = '
        <div class="notification is-danger">
            <button class="delete"></button>
                Usuário vazio
        </div>';
            die($mensagem);
        }
        if ($_POST['cpf'] == "") {
            $mensagem = '
        <div class="notification is-danger">
            <button class="delete"></button>
                Senha vazia
        </div>';
            die($mensagem);
        }


        $compraExiste = (new CompraBanco())->verificarSeRealizou($_POST['id_username'], $_POST['cpf']);

        if (empty($compraExiste)) {
            die("Este usuário não existe!");
        }

        $mensagem = '
    <div class="notification is-success">
        <button class="delete"></button>
            Usuário logado
    </div>';
        echo $mensagem;
    }
}
