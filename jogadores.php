<?php

session_start();

if ($_SESSION['loggedin'] == FALSE) {
    header("location: index.php");
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Jogadores</title>
</head>
<body>
    <h1 class="page-title">Jogadores</h1>
</body>
</html>

<?php

if (file_exists("jogadores.txt")) {
    echo file_get_contents("jogadores.txt");
}

?>

<br>
<a href="cadastro.php" class="link">Cadastrar</a>
<a href="logout.php" class="link">Fazer logout</a>