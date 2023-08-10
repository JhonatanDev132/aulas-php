<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7 | Formulário</title>

    <style>
        *{
            padding: 0px;
            margin: 0px;
            box-sizing: border-box;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            
        }

        form{
            
            background-color: whitesmoke;
            border: solid 2px black ;
            height: 50vh;
            padding: 20px;
        }
        button{
            margin: 20px;
            border-radius: 5px;
            color: white;
            font-size: 17px;
            font-weight: bold;
            background-color: orange;
            padding: 3px;
        }

        div{
            padding: 5px;
        }

        .dados-processados{
            
            background-color: whitesmoke;
            border: solid 2px black ;
            height: 30vh;
            padding: 10px;
        }

        p{
            padding: 5px;
        }


        header{
            background-color: #1650A8;
            height: 70px;
            
        }

        h1{
            color: #F2BB4E;
            padding: 10px;
        }

        .barraDeResposta{
            width: 100%;
        }
    </style>
</head>

<body>
    <header>
<h1>Exercício Formulário</h1>
    </header>
    <main>
    
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
        <div class="dados-processados">
        <h2>Dados processados:</h2>
        <p>Nome do produto: <b><?= $nomeProduto ?></b></p>
        <p>Fabricante: <b><?= $fabricante ?></b></p>
        <p>Preço do produto: R$<b><?= number_format($preco, 2, ",", ".") ?></b></p>
        <p>Disponibilidade: <b><?= $disponibilidade ?></b></p>

        <p>Descrição: <b><?= $descricao ?></b></p>
        </div>

    <?php

    }} else { ?>

        

        <form action="" method="post">
            <div>
                <label for="nomeProduto">Nome do Produto:</label> <br>
                <input class="barraDeResposta" required type="text" name="nome" id="nome">
                </div>

            <div>
                <label>Fabricante:</label><br>
                <select class="barraDeResposta" name="fabricante">
                    <option>Selecione</option>

                    <!-- Loop for each para a array do fabricantes -->
                    <?php foreach ($fabricantes as $fabricante) { ?>
                        <option><?= $fabricante ?></option>
                    <?php } ?>

                </select>
            </div>

            <div>
            <label for="preco">Preço do produto:</label> <br>

            <input class="barraDeResposta" type="number" required min="100" max="10000" step=".01" name="preco" id="preco" %>
            </div>

            <div>
                <label>Disponibilidade</label>

                <input name="selecao" id="sim" value="Sim" type="radio">
                <label for="selecao">Sim</label>

                <input name="selecao" id="nao" value="Não" type="radio">
                <label for="selecao">Não</label>

            </div>

            <div>
                <label for="descricao">Descrição do produto:</label> <br>
                <textarea name="descricao" id="descricao" cols="100" rows="10"></textarea>
            </div>

            <button type="submit" id="enviar" name="enviar">Finalizar</button>
        </form>
    <?php } ?>
    </main>


</body>

</html>