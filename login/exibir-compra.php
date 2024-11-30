<section class="section">
    <div class="container">
        <h1 class="title">Listagem de Compras</h1>
        <table class="table is-fullwidth is-striped">
            <thead>
                <tr>
                    <th>ID Usuário</th>
                    <th>Preço</th>
                    <th>CPF</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php if (isset($compras) && count($compras) > 0): ?>
                    <?php foreach ($compras as $compra): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($compra->getId_usuario()); ?></td>
                            <td><?php echo htmlspecialchars($compra->getPreco()); ?></td>
                            <td><?php echo htmlspecialchars($compra->getCpf()); ?></td>
                            <td>
                                <a class="button is-small is-info" href="/index.php?acao=editar&id=<?=$compra->getId_usuario()?>">Editar</a>
                                <a class="button is-small is-danger" href="/index.php?acao=excluir&id=<?=$compra->getId_usuario()?>">Excluir</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="4" class="has-text-centered"><strong>Base de dados vazia!</strong></td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <?php require __DIR__ . "/footer.php"; ?>
</section>
