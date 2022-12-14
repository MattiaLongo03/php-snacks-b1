<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    <?php 
        $partite= [
            [
                $casa1 =[
                    'nome' => 'Casa1',
                    'punti' => 55
                ],
                $ospite1 =[
                    'nome' => 'Ospite1',
                    'punti' => 60
                    ]
            ],
            [
                $casa2 =[
                    'nome' => 'Casa2',
                    'punti' => 65
                ],
                $ospite2 =[
                    'nome' => 'Ospite2',
                    'punti' => 40
                    ]
            ],
            [
                $casa3 =[
                    'nome' => 'Casa3',
                    'punti' => 88
                ],
                $ospite3 =[
                    'nome' => 'Ospite3',
                    'punti' => 88
                    ]
            ]
        ];
    ?>
    <h1>Partita 1</h1>
    <?= $casa1['nome']?> -
    <?= $ospite1['nome']?> |
    <?= $casa1['punti']?> -
    <?= $ospite1['punti']?>

    <h1>Partita 2</h1>
    <?= $casa2['nome']?> -
    <?= $ospite2['nome']?> |
    <?= $casa2['punti']?> -
    <?= $ospite2['punti']?>

    <h1>Partita 3</h1>
    <?= $casa3['nome']?> -
    <?= $ospite3['nome']?> |
    <?= $casa3['punti']?> -
    <?= $ospite3['punti']?>
</body>
</html>