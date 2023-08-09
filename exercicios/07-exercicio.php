<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 7 | Formulário</title>
</head>
<body>

<?php
$fabricantes = ["HP", "Intel", "Samsung", "Alienware"];
if( isset($_POST["enviar"])){
    $nomeProduto = $_POST["nomeProduto"];
    $fabricante = $_POST["fabricante"];
    $preco = $_POST["preco"];
    
    // $preco = function(float $preco){
    //     $precoFormatado = "R$ ".number_format($preco, 2, ",", ";");
    //     return $precoFormatado;
    // };
?>
    <h2>Dados processados:</h2>
    <p>Nome do produto: <?=$nomeProduto?></p>
    <p>Fabricante: <?=$fabricante?></p>
    <p>Preço do produto: <?=$preco?></p>

<?php } else {?>


<form action="" method="post">
        <p>
            <label for="nomeProduto">Nome do produto:</label>
            <input required type="text" name="nome" id="nome">
        </p>
        
    <div>
        <label >Fabricante:</label><br>
        <Select>
        <option >Selecione</option>

<!-- Loop for each para a array do fabricantes -->
<?php foreach($fabricantes as $fabricante){ ?>
        <option id="fabricante"><?=$fabricante?></option>
<?php } ?>
        
        </Select>
    </div>

        <label for="preco">Preço do produto:</label>
        <input type="number" required min="100" max="10000" step=".01" name="preco" id="preco">
    
    <div>
        <label>Disponibilidade</label>
        
            <input name="selecao" type="radio">
            <label for="sim">Sim</label>
        
            <input name="selecao" type="radio">
            <label for="">Não</label>
       
    </div>

    <p>
    <label for="descricao">Descrição do produto:</label> <br>
    <textarea name="descricao" id="descricao" cols="30" rows="10"></textarea>
    </p>
    
    <button>Finalizar</button>
</form>
<?php } ?>
    

</body>
</html>