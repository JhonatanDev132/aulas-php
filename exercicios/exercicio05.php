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
            color: red;
            font-weight: bold;
            background-color: darkred;
        }
        table{
            border: solid 3px;
            margin: auto;
            text-align: center;
        }
        th{
            border: solid 1px;
            padding: 10px;
            width: 30%;
            color: gray;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
    </style>
</head>
<body>
    <h1>Exercício 5</h1>
    
    <?php
    function calcularMedia(float $nota1,float $nota2):float{
        return ($nota1 + $nota2) / 2;
    };
    
    function verificarSituacao(float $media): string{
        if($media < 6){
            return "<span class ='reprovado'>Reprovado</span>";
        }
        return "<span class ='aprovado'>Aprovado</span>";
    }


    $alunos = [
        ["nomeAluno" => "Jhonatan", "nota1" => 10, "nota2" => 9],
        ["nomeAluno" => "Victor", "nota1" => 8, "nota2" => 9],
        ["nomeAluno" => "Phelipe", "nota1" => 4, "nota2" => 6],
        ["nomeAluno" => "Tanaka", "nota1" => 7, "nota2" => 7],
        ["nomeAluno" => "Eliel", "nota1" => 5, "nota2" => 5]
    ];
    ?>
    <table>
        <tr>
            <td>Alunos</td>
            <td>Média</td>
            <td>Situação</td>
        </tr>
    <?php
    
    foreach($alunos as $aluno){
    ?>
    <?php
        $media = calcularMedia($aluno["nota1"], $aluno["nota2"]);
        $situacao = verificarSituacao($media);
        ?>     
        <tr>
            <th><?=$aluno["nomeAluno"]?></th>
            <th><?=$media?></th>
            <th> <?=$situacao?></th>
        </tr>
    <?php
}
    ?>
    </table>

</body>
</html>