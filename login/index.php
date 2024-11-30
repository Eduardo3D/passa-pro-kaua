<?php
require __DIR__ . "/app/Model/CompraBanco.php";
require __DIR__ . "/app/Model/Compra.php";
require __DIR__ . "/app/Controller/ValidarCompra.php";
require __DIR__ . "/app/Controller/CadastrarCompra.php";
require __DIR__ . "/app/Controller/ExibirCompra.php";
require __DIR__ . "/app/Controller/EditarCompra.php";
require __DIR__ . "/app/Controller/AtualizarCompra.php";
require __DIR__ . "/app/Controller/ExcluirCompra.php";

require __DIR__ . "/header.php";



if (isset($_GET['acao'])) {

    // Ação para validar uma compra
    if ($_GET['acao'] == "validar") {
        (new ValidarCompra)->retornar();
    }

    // Ação para cadastrar uma compra
    if ($_GET['acao'] == "cadastrar") {
        echo (new CadastrarCompra)->retornar();
    }

    // Ação para exibir todas as compras
    if ($_GET['acao'] == "consultar") {
        echo (new ExibirCompra)->retornar();
    }

    // Ação para editar uma compra
    if ($_GET['acao'] == "editar") {
        echo (new EditarCompra)->retornar();
    }

    // Ação para atualizar os dados da compra
    if ($_GET['acao'] == "atualizar") {
        echo (new AtualizarCompra)->retornar();
    }

    // Ação para excluir uma compra
    if ($_GET['acao'] == "excluir") {
        (new ExcluirCompra)->retornar();
    }

    require "./menu.php";  // Menu a ser exibido após as ações

}

require __DIR__ . "/footer.php";  // Footer da página
