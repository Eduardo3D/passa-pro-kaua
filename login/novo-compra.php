<?php require __DIR__."/header.php"; ?>

<section class="section">
    <div class="container">
        <h1 class="title">Nova Compra</h1>
        <form action="./index.php?acao=cadastrar" method="POST">
            <div class="field">
                <label class="label">ID Usuário</label>
                <div class="control">
                    <input class="input" type="number" name="id_usuario" placeholder="Digite o ID do usuário" required>
                </div>
            </div>

            <div class="field">
                <label class="label">Preço</label>
                <div class="control">
                    <input class="input" type="text" name="preco" placeholder="Digite o preço" required>
                </div>
            </div>

            <div class="field">
                <label class="label">CPF</label>
                <div class="control">
                    <input class="input" type="text" name="cpf" placeholder="Digite o CPF" required>
                </div>
            </div>

            <div class="field">
                <div class="control">
                    <button class="button is-primary">Cadastrar Compra</button>
                </div>
            </div>
        </form>
    </div>

    <?php require __DIR__ . "/footer.php"; ?>
</section>
