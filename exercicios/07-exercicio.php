<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7 | Formulário</title>

    <style>
        body {
            padding: 0;
            margin: 0;
        }

        form{
            text-align: center;
        }

        p, h1{}
    </style>
</head>

<body>

    <?php


    $fabricantes = ["HP", "Intel", "Samsung", "Alienware"];
    if (isset($_POST["enviar"])) {
        $nomeProduto = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);
        $fabricante =  filter_input(INPUT_POST, "fabricante", FILTER_SANITIZE_SPECIAL_CHARS);
        $preco = filter_input(INPUT_POST, "preco", FILTER_SANITIZE_NUMBER_INT);
        $disponibilidade = filter_input(INPUT_POST, "selecao", FILTER_SANITIZE_SPECIAL_CHARS);
        $descricao = filter_input(INPUT_POST, "descricao", FILTER_SANITIZE_SPECIAL_CHARS);

        

        if (empty($_POST["nome"]) || empty($_POST["preco"])) {
    ?>
            <p>Você deve preencher nome e preço</p>
            <a href="07-exercicio.php">voltar</a>
        <?php
        } else {
        ?>

        <h2>Dados processados:</h2>
        <p>Nome do produto: <?= $nomeProduto ?></p>
        <p>Fabricante: <?= $fabricante ?></p>
        <p>Preço do produto: R$<?= number_format($preco, 2, ",", ".") ?></p>
        <p>Disponibilidade: <?= $disponibilidade ?></p>

        <p>Descrição: <?= $descricao ?></p>

    <?php

    }} else { ?>


        <form action="" method="post">
            <p>
                <label for="nomeProduto">Nome do Produto:</label> <br>
                <input required type="text" name="nome" id="nome">
            </p>

            <div>
                <label>Fabricante:</label><br>
                <select name="fabricante">
                    <option>Selecione</option>

                    <!-- Loop for each para a array do fabricantes -->
                    <?php foreach ($fabricantes as $fabricante) { ?>
                        <option><?= $fabricante ?></option>
                    <?php } ?>

                </select>
            </div>
            <div>
            <label for="preco">Preço do produto:</label>
            <input type="number" required min="100" max="10000" step=".01" name="preco" id="preco">
            </div>
            <div>
                <label>Disponibilidade</label>

                <input name="selecao" id="sim" value="Sim" type="radio">
                <label for="selecao">Sim</label>

                <input name="selecao" id="nao" value="Não" type="radio">
                <label for="selecao">Não</label>

            </div>

            <p>
                <label for="descricao">Descrição do produto:</label> <br>
                <textarea name="descricao" id="descricao" cols="30" rows="10"></textarea>
            </p>

            <button type="submit" id="enviar" name="enviar">Finalizar</button>
        </form>
    <?php } ?>


</body>

</html>