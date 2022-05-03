<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de vídeo</title>
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
            <li><a href="Uploader.html">Upload</a></li>
            <li><a href="logout.php">Sair</a></li>
        </ul>
    </nav>
    <nav id="Envio">
        <ul>
            <h1>Envio de Vídeos</h1>
        <form action="upload.php" method="POST" accept="multipart/form-data">
            <input type="file" name="file" />
            <button type="submit" value="submit">Enviar</button>
        </form>
        </ul>
    </nav>
    


</body>
</html>