<?php
    require "../../bd/connection.php";

    if( isset($_POST['input_email']) && isset($_POST['input_senha'] )){
        
        $email = $_POST['input_email'];
        $senha = $_POST['input_senha'];

        $sql = "SELECT email, senha FROM cadastros WHERE email = '$email'";

        $result = $conn->query($sql);
        $row = $result->fetch_assoc();

        print_r($row);

        if($row['email'] == $email && $row['senha'] == $senha){

            $sql = "SELECT nome, email, senha, imagem, profissao FROM cadastros WHERE email = '$email'";
            
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            
            session_start();

            $_SESSION['nome'] = $row['nome'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['imagem'] = $row['imagem'];
            $_SESSION['profissao'] = $row['profissao'];
            $_SESSION['logado'] = true;

            header('location: ../../profilePage/profile.php');
        }

        else{
            header('location: ../login.php');
        }
    }
    else{
        header('location: ../login.php');
    }
?>