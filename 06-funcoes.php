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
</body>
</html>