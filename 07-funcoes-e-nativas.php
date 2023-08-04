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

<hr>
    <h3>str_replace()</h3>
    <?php
    /* Função que permite substituição
    de strings/caracteres. */
    $fraseFeia = "<p>Fulano é um bobão e xarope</p>";
    $fraseBunitinha = str_replace(
        ["xarope","bobão"],
        "******",
        $fraseFeia);
    ?>
    <p><?=$fraseFeia?></p>
    <p><?=$fraseBunitinha?></p>
<hr>

    <h3>Explode</h3>
<?php
/* Função que transforma uma string em um array */
$linguagens = "HTML - CSS - JS - PHP";
$arrayLinguagens = explode(" - ", $linguagens);
?>
<pre><?=var_dump($linguagens)?></pre>
<pre><?=var_dump($arrayLinguagens)?></pre>

<hr>

    <h2>Númericas</h2>
    <h3>min, max</h3>
<?php
$valores = [10, 5, 50, 1000, 275];
$valorQualquer = 1259.75;
?>
<p>Menor valor: <?=min($valores)?></p>
<p>Maior valor: <?=max($valores)?></p>
<p>Arredondamento: <?=round($valorQualquer)?></p>
<hr>

    <h2>Arrays</h2>
    <h3>implode()</h3>
<?php
/* Função que transforma array em string */
$bandas = ["Rush", "Slayer", "Dio"];
$textoBandas = implode(" - ", $bandas);
?>

<pre><?=var_dump($bandas)?></pre>
<pre><?=var_dump($textoBandas)?></pre>

<hr>

<h3>extract()</h3>
<?php
/* Função que extrai chaves associativas para variáveis */
$aluno = [
    "id" => 1,
    "nome" => "Chaves do 8",
    "idade" => 25
];
extract($aluno)
?>
<ul>
    <li>ID: <?=$id?></li>
    <li>Nome: <?=$nome?></li>
    <li>Idade: <?=$idade?></li>
</ul>

<hr>

<h3>array_sum()</h3>
<?php
/* Função para somar os valores de um array */
$total = array_sum($valores);
?>

<p>Soma dos valores: <?=$total?></p>
<hr>

<h3>array_unique()</h3>
<?=
/* Função que retorna retorna um novo array com dados únicos. */
$produtos = [
    "TV", "Notebook", "TV",
    "Geladeira", "Monitor", "Notebook",
    "Teclado", "Mouse"
];

$produtosUnicos = array_unique($produtos);
?>

    <h2>Filtros</h2>
    
</body>
</html>