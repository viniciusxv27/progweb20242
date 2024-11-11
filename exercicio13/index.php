<?php
    $array = [
        array('codigo' => 1, 'nome' => 'Alberto Silva'),
        array('codigo' => 2, 'nome' => 'Bianca Duarte'),
        array('codigo' => 3, 'nome' => 'João Almeida'),
        array('codigo' => 4, 'nome' => 'Valéria Souza'),
        array('codigo' => 5, 'nome' => 'Augusto Silva')
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisar pelo codigo</title>
</head>
<body>
    <h1>Resultado Relatório de Clientes:</h1>

    <table border='1'>
        <tr>
            <th>Código</th>
            <th>Nome</th>
        </tr>
        <?php
            foreach($array as $item){ ?>
                <tr>
                    <td><?php echo $item['codigo']; ?></td>
                    <td><?php echo $item['nome']; ?></td>
                </tr>
        <?php } ?>
    </table>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</body>
</html>