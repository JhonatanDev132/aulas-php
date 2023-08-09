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

$nome = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_SPECIAL_CHARS);

$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

$idade = filter_input(INPUT_POST, "idade", FILTER_SANITIZE_NUMBER_INT);

$interesses = filter_var_array( $_POST["interesses"] ?? ["nenhum interesse selecionado"], FILTER_SANITIZE_SPECIAL_CHARS);

$mensagem = filter_input(INPUT_POST, "mensagem", FILTER_SANITIZE_SPECIAL_CHARS);
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