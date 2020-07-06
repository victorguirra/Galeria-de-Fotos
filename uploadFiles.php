<?php

include_once 'db_connect.php';

if(isset($_POST['buttonSendFiles'])){
    $allowedFormat = ['jpg', 'jpeg', 'png',];
    $extension = pathinfo($_FILES['selectFilesInput']['name'], PATHINFO_EXTENSION);

    $imageTitle = $_POST['imageTitle'];

    if(in_array($extension, $allowedFormat)){
        
        $newName = uniqid().".".$extension;
        $directory = "../Images/";
        
        move_uploaded_file($_FILES['selectFilesInput']['tmp_name'], $directory.$newName,);

        $sql = "INSERT INTO photos (`id`, `titlePhoto`, `namePhoto`) VALUES (NULL, '$imageTitle', '$newName')";

        if(mysqli_query($connect, $sql)){
            echo "Arquivo Enviado Com Sucesso!";
        }else{
            echo "Falha ao Enviar o Arquivo!";
        }

    }else{
        echo "Formato Inválido";
    }
}