<?php

if (isset($_POST['submit'])){
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed  = array('mp4','avi', 'mkv');

    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize <  1000000){
                $fileNameNew - uniqid('',true).".".$fileActualExt;
                $fileDestination = 'Site 2\videos' .$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);
                header("Location: uploader.php");
            }else{
                echo "Arquivo excede os limites de tamanho!";
            }

        }else{
        echo "Ocorreu um erro durante o envio!";
        }
    }else{
        echo "Você não pode fazer upload desse tipo de arquivo!";
    }
}
?>