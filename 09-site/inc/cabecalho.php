<?php
$arquivos = basename($_SERVER["PHP_SELF"]);

switch($arquivos) {
    case 'index.php':
        $titulo = 'Home';
        break;
    case 'duvidas.php':
        $titulo = 'Duvidas';
        break;
    case 'cursos.php':
        $titulo = 'Cursos';
        break;
    case 'contato.php':
        $titulo = 'Contato';
        break;

}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$titulo?> - Site PHP</title>
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body>
    <header>
        <h1><?=$titulo?></h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="cursos.php">Cursos</a>
            <a href="duvidas.php">Dúvidas</a>
            <a href="contato.php">Contato</a>
        </nav>
    </header>

    <main>
    
</body>
</html>