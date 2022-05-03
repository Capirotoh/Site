<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="css/style.css">
    <script language = "php">
        ("protect.php");
    </script> 
</head>
<body>
<nav id="menu-h">
        <ul >
            <li><a href="Menu.php">Menu</a></li>
            <li><a href="#">Vídeos</a></li>
            <li><a href="Uploader.php">Upload</a></li>
            <li><a href="cadastro.php">Cadastro</a></li>
            <li><a href="logout.php">Sair</a></li>
        </ul>
    </nav>
    <h1>Cadastro</h1>
    <?php
        if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
        }
    ?>
    <form method="POST" action="processa.php">
        <label>Nome: </label>
        <input type="text" name="nome" placeholder="Digite o nome"><br><br>
        <label>Nome: </label>
        <input type="email" name="e-mail" placeholder="Digite o e-mail"><br><br>
        <label>Nome: </label>
        <input type="password" name="senha" placeholder="Digite a senha (máx. 8)"><br><br>
        
        <input type="submit" value="Cadastrar">
    
    </form>
</body>
</html>