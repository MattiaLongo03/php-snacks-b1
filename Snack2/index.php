<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
<?php 
    $name = isset($_GET['name']) ? $_GET['name'] : '';
    $mail = isset($_GET['mail']) ? $_GET['mail'] : '';
    $age = isset($_GET['age']) ? $_GET['age'] : '';

    $pre = strpos($mail, '@');
    $post = strpos($mail, '.', $pre);

    if (strlen(trim($name)) > 3 && $pre && $post && is_numeric($age)) {
        $accesso = 'Accesso riuscito';
    } 
    else {
        $accesso = 'Accesso negato';
    }
    ?>

    <form action="" method="get">
            <label for="name">Nome</label>
            <input type="text" name="name" id="name">

            <label for="mail">Email</label>
            <input type="mail" name="mail" id="mail">

            <label for="age">Età</label>
            <input type="text" name="age" id="age">

            <button>Controlla</button>
        </form>
    <h2><?= $accesso ?></h2>
</body>
</html>