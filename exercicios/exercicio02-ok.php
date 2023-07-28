<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02 - Arrays (OK)</title>
    <style>
        .exercicio {
            display: flex;
            justify-content: space-evenly;
        }

        section {
            border: solid 1px;
        }
    </style>
</head>
<body>
    <h1>Exercício 02 - Arrays (OK)</h1>
    <hr>
<?php
$zimbo = ["zimbo.asebastiao", "zimbo@gmail.com", "feminino", 25, "São Paulo", "senhaQualquer123"];

$zimboEx2 = [
    "usuario" => "zimbo.asebastiao",
    "email" => "zimbo@gmail.com",
    "sexo" => "feminino",
    "idade" => 25,
    "cidade" => "São Paulo",
    "senha" => "senhaQualquer123"
];

$vitor = ["vitor.gama", "vitor@hotmail.com", "masculino", 66, "Guarulhos", "marianuncadorme"];
?>
<div class="exercicio">
    <section>
        <h2><?=$zimbo[0]?></h2>
        <ul>
            <li>E-mail: <?=$zimbo[1]?></li>
            <li>Idade: <?=$zimbo[3]?></li>
            <li>Sexo: <?=$zimbo[2]?></li>
        </ul>
    </section>

    <section>
        <h2><?=$zimboEx2["usuario"]?></h2>
        <ul>
            <li>E-mail: <?=$zimboEx2["email"]?></li>
            <li>Idade: <?=$zimboEx2["idade"]?></li>
            <li>Sexo: <?=$zimboEx2["sexo"]?></li>
        </ul>
    </section>

    <section>
        <h2><?=$vitor[0]?></h2>
        <ul>
            <li>E-mail: <?=$vitor[1]?></li>
            <li>Idade: <?=$vitor[3]?></li>
            <li>Sexo: <?=$vitor[2]?></li>
        </ul>
    </section>
</div>


</body>
</html>