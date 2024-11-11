<?php

$datetime = new DateTime( "now", new DateTimeZone( "America/Sao_Paulo" ) );
$hora = $datetime->format( "H" );

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 12</title>
</head>
<body>
    <?php if($hora >= 0 && $hora <= 12){
        echo "<h1>Bom dia!</h1>";
        echo '<img width="100%" src="https://media.istockphoto.com/id/491701259/pt/foto/c%C3%A9u-azul-com-sol.jpg?s=612x612&w=0&k=20&c=RCRVeEg12zAf5zt_-gIjjJyiadxuP0-ulBEMT3ggaxM=" alt="Imagem de Bom Dia">';
    } elseif($hora > 12 && $hora <= 18){
        echo "<h1>Boa tarde!</h1>";
        echo '<img width="100%" src="https://cdn.pixabay.com/photo/2023/04/04/00/51/sunset-7898136_640.jpg" alt="Imagem de Boa tarde">';
    } else {
        echo "<h1>Boa noite!</h1>";
        echo '<img width="100%" src="https://static.vecteezy.com/ti/fotos-gratis/t2/8440112-paisagem-noite-em-fprest-com-lua-cheia-e-nuvens-foto.jpg" alt="Imagem de Boa noite">';
    } ?>
    
</body>
</html>