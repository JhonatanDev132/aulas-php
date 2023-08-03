<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio função</title>
    <style>
        .aprovado{
            color: green;
            font-weight: bold;
            background-color: greenyellow;
        }
        .reprovado{
            color: brown;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Exercício 5</h1>

    <?php
    $alunos = [
        ["Jhonatan", 10, 5],
        [""]
    ];
    function calcularMedia($nota1, $nota2){
        $media = ($nota1 + $nota2) / 2;
        return $media;
    };

    $nota1 = 8;
    $nota2 = 8;

    $media = calcularMedia($nota1, $nota2);
    ?>
    <?php
    function situacao($media){
        if($media < 6){
    ?>
            <span class="reprovado">
    <?php
            return "Reprovado";
    ?>
            </span>
    <?php
        } else {
    ?>
            <span class="aprovado">
    <?php
            return "Aprovado";
    ?>
            </span>
    <?php
        }
    };
    ?>

    <p>Média das notas: <?=$media?></p>
    <p>E você está: <?=situacao($media)?></p>
</body>
</html>