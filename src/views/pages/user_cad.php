<?php $render('header') ?>

<form action="<?= $base; ?>/cadastrar" method="post" class="p-10">
    <div class="mb-3">
        <label for="name">Nome:</label>
        <input type="name" name="name" id="name">
    </div>
    <div class="mb-3">
        <label for="password">Senha:</label>
        <input type="password" name="password" id="password">
    </div>
    <div class="mb-3">
        <label for="repeat_password">Repita a senha:</label>
        <input type="password" name="repeat_password" id="repeat_password">
    </div>
    <div class="mb-3">
        <label for="email">E-mail:</label>
        <input type="email" name="email" id="email">
    </div>
    <div class="mb-3">
        <label for="cpf">CPF:</label>
        <input type="text" name="cpf" id="cpf">
    </div>
    <div class="mb-3">
        <label for="phone">Telefone:</label>
        <input type="text" name="phone" id="phone">
    </div>
    <div class="mb-3 p-10">
        <input type="submit" name="submit" id="cadastrar">
    </div>
</form>

<?php $render('footer') ?>

<style>
    label {
        display: block;
        margin-bottom: 5px;
    }

    .p-10 {
        padding: 10px;
    }
</style>