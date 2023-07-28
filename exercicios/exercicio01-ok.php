<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Exercício 01 (resolvido)</title>

<style>
    <?php $cor = "pink"; ?>

    body { background-color: <?=$cor?>; }

    li { color: purple; }
    .teste { text-transform: uppercase; }
</style>

</head>
<body>
<h1>Exercício 01 (resolvido)</h1>
<hr>

<?php
// $data = "18/07/2023";

// Definindo fuso horário (timezone)
date_default_timezone_set("America/Sao_Paulo");

$data = date("d/m/Y");
$hora = date("H:i:s");
echo "Data: $data";
echo "<br>";
echo "Hora: $hora";
echo "<br><br>";

// const DATA = date("d/m/Y"); // erro!
define("DATA", date("d/m/Y")); // ok!
echo DATA;


const NOME = "Ozzy";
define("CURSO", "Gastronomia");
$cargaHoraria = 1000;
$limite = $cargaHoraria / 4; 

// Saída completa
echo "<ul>";
echo "<li>Data: $data</li>";
echo "<li style='font-weight:bold'>Aluno: ".NOME."</li>";
echo "<li>Curso: <span class=\"teste\">".CURSO."</span></li>";
echo "<li>Limite de faltas: $limite horas</li>";
echo "</ul>";
?>
<!-- Saída simplificada -->
<ul>
    <li>Data: <?=$data?></li>
    <li style="font-weight:bold">Aluno: <?=NOME?></li>
    <li>Curso: <span class="teste"> <?=CURSO?> </span></li>
    <li>Limite de faltas: 
    <?=$limite?> horas.</li>
</ul>



</body>
</html>