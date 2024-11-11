<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Cadastrar Cliente</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">

        <h1>Cadastro de Cliente</h1>
        <form action="dadosform.php" method="post">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome</label>
                <input required type="text" class="form-control" id="nome" name="nome" placeholder="Seu nome">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input required type="email" class="form-control" id="email" name="email" placeholder="nome@exemplo.com">
            </div>
            <div class="mb-3">
                <label for="cpf" class="form-label">CPF</label>
                <input required type="number" class="form-control" name="cpf" id="cpf" placeholder="000.000.000-00">
            </div>
            <input class="btn btn-primary" type="submit" name="enviar" id="enviar" value="Cadastrar">
        </form>
    </div>
</body>

</html>