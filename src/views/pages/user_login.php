<?php $render('header') ?>

<form action="<?= $base; ?>/entrar" method="POST">
    <label for="email">Email:</label>
    <input type="email" name="email" id="email">
    <br>
    <br>
    <label for="password">Senha:</label>
    <input type="password" name="password" id="password">
    <br>
    <br>
    <input type="submit" name="submit" value="Logar">
</form>

<?php $render('footer') ?>