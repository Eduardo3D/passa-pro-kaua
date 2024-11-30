<?php
class CompraBanco {
    private $pdo;

    public function __construct() {
        require __DIR__ . "/../Database/Conectar.php";
        $this->pdo = $banco;
    }

    public function cadastrarCompra($id_username, $preco, $cpf) {
        $sql = "INSERT INTO Compra (id_username, preco, cpf) VALUES (:i, :p, :c)";
        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("i", $id_username);
        $comando->bindValue("p", $preco);
        $comando->bindValue("c", $cpf);
        return $comando->execute();
    }

    public function editarCompra($id_username, $preco, $cpf) {
        $sql = "UPDATE Compra SET preco = :p, cpf = :c WHERE id_usuario = :i";
        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("i", $id_username);
        $comando->bindValue("p", $preco);
        $comando->bindValue("c", $cpf);
        return $comando->execute();
    }

    public function buscarPorCompra($id_username) {
        $sql = "SELECT * FROM Compra WHERE id_username = :i";
        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("i", $id_username);
        $comando->execute();
        return $comando->fetchAll(PDO::FETCH_ASSOC);
    }

    public function atualizarCompra($id_username, $preco, $cpf) {
        $sql = "UPDATE Compra SET preco = :p, cpf = :c WHERE id_username = :i";
        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("i", $id_username);
        $comando->bindValue("p", $preco);
        $comando->bindValue("c", $cpf);
        return $comando->execute();
    }

    public function excluirCompra($id_username) {
        $sql = "DELETE FROM Compra WHERE id_username = :i";
        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("i", $id_username);
        return $comando->execute();
    }

    public function verificarSeRealizou($id_username, $cpf) {
        $sql = "SELECT COUNT(*) FROM Compra WHERE id_username = :i AND cpf = :c";
        $comando = $this->pdo->prepare($sql);
        $comando->bindValue("i", $id_username);
        $comando->bindValue("c", $cpf);
        $comando->execute();
        return $comando->fetchColumn() > 0;
    }

    public function listarCompra() {
        $sql = "SELECT * FROM Compra";
        $comando = $this->pdo->prepare($sql);
        $comando->execute();
        return $comando->fetchAll(PDO::FETCH_ASSOC);
    }

    public function hidratar($array) {
        $objetos = [];
    
        foreach ($array as $dado) {
            $objeto = new Compra(); // Cria uma instância da classe Compra
            $objeto->setId_username($dado['id_username']);
            $objeto->setPreco($dado['preco']);
            $objeto->setCpf($dado['cpf']);
            $objetos[] = $objeto; // Adiciona o objeto ao array
        }
    
        return $objetos; // Retorna o array de objetos
    }
}
