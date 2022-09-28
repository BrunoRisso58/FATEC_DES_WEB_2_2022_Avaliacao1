<?php 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    if($_POST['username'] == 'fatec' and $_POST['password'] == 'araras'){
        $_SESSION['loggedin'] = TRUE;
        $_SESSION["username"] = 'fatec';
        header("location: cadastro.php");
    } else {
        $_SESSION['loggedin'] = FALSE;
        header("location: error.php");
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Sistema de cadastros</title>
</head>
<body>
    <h1 class="page-title">Login</h1>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <div class="field">
            <input type="text" class="input" name="username" placeholder="Usuário">
        </div>
        <div class="field">
            <input type="password" class="input" name="password" placeholder="Senha">
        </div>
        <div class="field">
            <input type="submit" value="Login">
        </div>
    </form>
</body>
</html>
