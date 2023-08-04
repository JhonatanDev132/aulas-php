<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções e Nativas</title>
</head>
<body>
    <h1>Exemplos de funções nativas</h1>
    <hr>

    <h2>Strings</h2>
    <h3>trim()</h3>

<?php
$nome = "    Vinicius me deve 80 paçocas    ";
$nomeSemEspaço = trim($nome);
?>
<pre> <?=var_dump($nome)?></pre>
<pre> <?=var_dump($nomeSemEspaço)?></pre>

    <h3>str_replace()</h3>
    <?php
    /* Função que permite substituição
    de strings/caracteres. */
    $fraseFeia = "<p>Fulano é um bobão</p>";
    $fraseBunitinha = str_replace(
        ["xarope","bobão"],
        "******",
        $fraseFeia);
    ?>
    <h2>Númericas</h2>

    <h2>Arrays</h2>

    <h2>Filtros</h2>
    
</body>
</html>