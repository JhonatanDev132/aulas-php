<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções no PHP</title>
</head>
<body>
    <h1>Criando e usando funções</h1>
    <hr>

    <h2>Funções como procedimento ou sub-rotina</h2>

    <?php
    function dadosAutor(){
        echo "<div>";
        echo "<p>Jhonatan V. de Sousa Oliveira</p>";
        echo "<p><a href=''>email@aa.com</a></p>";
        echo "</div>";
    }
    ?>

    <section>
        <h3>Chamada de sub-rotina</h3>
        <?=dadosAutor()?>
        <article>
            <h4>Outrachamda </h4>
            <?=dadosAutor()?>
        </article>
    </section>

    <h2>Função com retorno de dados</h2>
    <?php
    function dadosCurso(){
        return "Encher o saco no wpp";
    }
    ?>
    <p>Estamos no curso de <b><?=dadosCurso()?></b></p>
    <p><?=dadosCurso()?> é ministrado no Senac Penha</p>

    <h2>Função com parâmetros (ou argumentos)</h2>
    <?php
    function soma($valor1, $valor2, $valor3){
        $total = $valor1 + $valor2 + $valor3;
        return $total;
    }
    ?>
<!-- Chamando e exibindo diretamente o retorno -->
    <p>Resultado 1: <?=soma(10, 20, 5)?></p>
    <p>Resultado 2: <?=soma(23, 84, 1000.75)?></p>
    <?php
    // Chamando e guardando o retorno
    $resultado3 = soma(500, 480, 700);
    ?>
    <p>Resultado 3: <?=$resultado3?></p>
    <?php if($resultado3 > 100) { ?>
    <p>Vinicius foi demitido!</p>
    <?php } ?>

    <h2>0</h2>
<!-- Usando uma função como parte de uma condição -->
    <?php if(soma(2, 3, 10) >= 10 ){ ?>
        <p>Kaue reprovado!!!</p>
    <?php
        }
    ?>

    <?php
    function saudacao($mensagem, $pessoa = "Fulano(a)"){
        return "Olá, $mensagem $pessoa";
    }
    ?>
    <p><?=saudacao("bom-dia", "Melissa")?></p>
    <p><?=saudacao("boa noite", "Tanaka")?></p>
    <p><?=saudacao("boa tarde")?></p>

    <h2>Indução de tipos de dados</h2>

    <?php
    // Tipos de dados mais comuns
    // string -> caracteres em geral
    // int -> números inteiros
    // float -> números com casas decimais
    // array -> vetor

    function verificaNegativo($valor){
        if($valor < 0 ){
            return "é negativo";
        } else {
            return "não é negativo";

        }
    }
    ?>

    <p>Número 10: <?=verificaNegativo(10)?></p>
    <p>Número -10: <?=verificaNegativo(-10)?></p>
    <p>Número 50: <?=verificaNegativo("TEXTO")?></p>

    <h2>Função anônima (ou closure, lambda)</h2>

    <?php
    $formataPreco = function(float $valor){
        // R$ 1.000,00
        $precoFormatado = "R$ ".number_format($valor, 2, ",", ";");
        return $precoFormatado; 
    };
    ?>
    <p>1000 formatado dica: <?=$formataPreco(1000)?></p>
</body>
</html>