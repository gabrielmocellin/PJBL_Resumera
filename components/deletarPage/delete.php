<?php
    require "../bd/connection.php";

    session_start();
    $email = $_SESSION['email'];

    $sql = "DELETE FROM cadastros WHERE email = '$email'";
    
    if($conn->query($sql) === true){
        header ("Location: ../landingPage/index.html");
    }
    else{
        header ("Location: deletarConta.php?erro=1");
    }
?>