<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usando arrays</title>
    <style>
        ul li:nth-child(odd) { color: blue; }
        ul li:nth-child(even) { color: red; }
    </style>
</head>
<body>
    <h1>Trabalhando com arrays
    (vetores e matrizes)</h1>
    <hr>

    <h2>Arrays com índice
    numérico</h2>

<?php
// Sintaxe com colchetes
$bandas = ["Savatage", "Dio", "Rush"];

// Sintaxe com função array()
$cursos = array("HTML", "Node", "PHP");

// Sintaxe de atribuição manual
$buteco[0] = "Bolinho de bacalhau";
$buteco[1] = "Pastel";
$buteco[2] = "Esfiha";

// Constantes de array (PHP 7+)
define("UNIDADES", ["Penha", "Tatuapé"]);
const FRUTAS = ["Morango", "Abacaxi"];
?>

<h3>Acessando os dados</h3>
<ol>
    <li>Banda que mais gosto: 
    <?=$bandas[2]?></li>
    <li>Curso básico de: <?=$cursos[0]?>
    </li>
    <li>Quero comer: <?=$buteco[1]?></li>
    <li>Estamos no Senac <?=UNIDADES[0]?></li>
    <li>Fruta boa pra caipirinha/vitamina: 
    <?=FRUTAS[0]?></li>
</ol>

<hr>

<h2>Array associativo</h2>

<?php
$curso = [
    // Chave associativa:
    // identificador => valor
    "titulo" => "Gastronomia",
    "carga_horaria" => 150,
    "descritivo" => "Aprenda a ferver água"
];
?>
<h3>Acessando os dados (array associativo)</h3>
<p>Nome do curso: <?=$curso["titulo"]?> </p>
<p>Carga horária: 
<?=$curso["carga_horaria"]?> horas.</p>
<p>Descritivo: <?=$curso["descritivo"]?></p>

<hr>

<h2>Matriz (array dentro de array)</h2>

<?php
$planoDeEstudos = [
    ["JS Avançado", "Node.js", "React"],
    ["PHP", "POO", "MySQL", "Python"],
    ["Teoria das Cores", "Photoshop", "UX/UI"]
];

//echo $planoDeEstudos[0][1];
?>

<ul>
    <li><?=$planoDeEstudos[0][2]?></li>
    <li><?=$planoDeEstudos[1][2]?></li>
    <li><?=$planoDeEstudos[2][1]?></li>
    <li><?=$planoDeEstudos[2][0]?></li>
</ul>

<hr>

<h2>Funções de análise de estruturas de dados (debug/depuração)</h2>

<h3>print_r()</h3>
<pre>
<?=print_r($bandas)?>
</pre>

<h3>var_dump()</h3>
<pre>
<?=var_dump($bandas)?>
</pre>

<pre>
<?=var_dump($planoDeEstudos)?>
</pre>



</body>
</html>