<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
</head>

<body>

    <form action="<?= $base; ?>/login" method="POST">
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

</body>

</html>