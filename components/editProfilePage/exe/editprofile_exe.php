<?php
    require "../../bd/connection.php";


    session_start();
    //trazendo o email que está logado no momento (desde o login.php)
    $email = $_SESSION['email'];

    /*caso o usuário tenha clicado no botão "update" no editprofile.php, será enviado para essa página o ($_POST['update'])
    essa verificação apenas serve para ver se o usuário realmente veio da edição de perfil.*/
    if( isset($_POST['update']) ){
        /*confesso que eu não sei muito bem como funciona esse comando, mas quando da um input de imagem é criado
        pelo php o $_FILES com o nome do input usado*/
        $file = addslashes(file_get_contents($_FILES['change_image_input']['tmp_name']));
        /* Atualização da nova imagem no banco de dados da conta logada */
        $sql = "UPDATE cadastros SET imagem = '$file' WHERE email = '$email'";
        $result = $conn->query($sql);
        // Puxando o novo valor da imagem relacionada à pessoa logada
        $sql = "SELECT imagem FROM cadastros WHERE email = '$email'";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
        // Atualizando na SESSION a nova imagem
        $_SESSION['imagem'] = $row['imagem'];

        header('location: ../editprofile.php');
    }
    else{
        echo"ERRO GIGANTESCO";
    }
?>