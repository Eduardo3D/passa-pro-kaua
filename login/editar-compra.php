<section class="section">
    <div class="container">
        <h1 class="title">Editar Compra</h1>
        <form action="./index.php?acao=atualizar" method="POST">
            <div class="field">
                <label class="label">ID Usuário</label>
                <div class="control">
                    <input class="input" type="number" name="id_usuario" placeholder="Digite o ID do usuário"
                           value="<?= !empty($compra) ? $compra[0]->getId_usuario() : '' ?>" required>
                </div>
            </div>

            <div class="field">
                <label class="label">Preço</label>
                <div class="control">
                    <input class="input" type="text" name="preco" placeholder="Digite o preço"
                           value="<?= !empty($compra) ? $compra[0]->getPreco() : '' ?>" required>
                </div>
            </div>

            <div class="field">
                <label class="label">CPF</label>
                <div class="control">
                    <input class="input" type="text" name="cpf" placeholder="Digite o CPF"
                           value="<?= !empty($compra) ? $compra[0]->getCpf() : '' ?>" required>
                </div>
            </div>

            <div class="field">
                <div class="control">
                    <button class="button is-primary">Atualizar Compra</button>
                </div>
            </div>
        </form>
    </div>

    <?php require __DIR__ . "/footer.php"; ?>
</section>
