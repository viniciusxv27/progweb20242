<?php

if (!isset($_POST['nome']) || !isset($_POST['email']) || !isset($_POST['cpf'])) {
    echo "<h1>Todos os dados devem ser informados!</h1>";
    exit;
}

$nome = $_POST['nome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];

if(strlen($cpf) != 11) {
    echo '<h1>Informe CPF válido!</h1>';
    exit;
}

$horaCadastro = date('d/m/Y H:i:s');

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Dados Cadastrados!</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h1>Dados Cadastrados!</h1>
        <p>Dados do cliente</p>
        <div class="card">
            <p>Nome: <?php echo $nome; ?></p>
            <p>Email: <?php echo $email; ?></p>
            <p>CPF: <?php echo $cpf; ?></p>
            <p>Horário do cadastro: <?php echo $horaCadastro; ?></p>
        </div>
    </div>
    
</body>
</html>