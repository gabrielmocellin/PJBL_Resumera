<?php
    session_start();
    $email = $_SESSION['email'];

    if( isset($_POST['update']) ){
        $file = addslashes(file_get_contents($_FILES['change_image_input']['tmp_name']));
        $sql = "UPDATE cadastros SET imagem = '$file' WHERE email = '$email'";
    }
    else{
        echo"ERRO GIGANTESCO";
    }
?>