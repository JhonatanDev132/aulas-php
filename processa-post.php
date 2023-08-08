<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Processamento POST</title>
</head>
<body>
    <h1>Exemplo usando Post</h1>
    <hr>

    <p>Receber e processar dados via <b>POST</b></p>
<?php
/* Se os campos nome e e-mail estão vazios */
if( empty($_POST["nome"]) || empty($_POST["email"])){
?>
  <p>Você deve preencher nome e e-mail</p>
  <a href="10-formulario.html"></a>
<?php
} else {

$nome = $_POST["nome"];
$email = $_POST["email"];
$idade = $_POST["idade"];
$interesses = $_POST["interesses"];
$mensagem = $_POST["mensagem"];
?>
<pre> <?=var_dump($_POST)?></pre>
<h2>Dados:</h2>
<ul>
    <li>Nome: <?=$nome?></li>
    <li>E-mail: <?=$email?></li>
    <li>Idade: <?=$idade?></li>
    <li>Interesses: <?= implode(", ", $interesses) ?> </li>
    
    <?php if(!empty($mensagem)){?>
        <li>Mensagem: <?=$mensagem?></li>
    <?php } ?>

</ul>
<?php
}    
?>
    
</body>
</html>