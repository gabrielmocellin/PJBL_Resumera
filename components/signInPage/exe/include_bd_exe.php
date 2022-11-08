<?php
    require "../../bd/connection.php";

    session_start();

    //Verificação de existência de todas as variáveis necessárias para o cadastro
    if( isset($_SESSION['nome']) && isset($_SESSION['email']) 
    && isset($_SESSION['senha']) && isset($_POST['input-telefone']) 
    && isset($_POST['input-profissao'])){

        $sqlContas = "SELECT email FROM cadastros";

        $contas = $conn->query($sqlContas);

        $contas = $contas->fetch_assoc();

        print_r($contas);

        //Trazendo os valores da session (cadastro.php) e $_POST's do (cadastro2.php)
        $save_name = $_SESSION['nome'];
        $save_email = $_SESSION['email'];
        $save_password = $_SESSION['senha'];
        $save_number = $_POST['input-telefone'];
        $save_profession = $_POST['input-profissao'];
        
        /*Confesso que eu não sei muito bem como funciona esse comando, mas quando da um input de imagem é criado
        pelo php o $_FILES com o nome do input usado*/
        if(file_exists($_FILES['change_image_input']['tmp_name'])){
            $file = addslashes(file_get_contents($_FILES['input-defaultimg']['tmp_name']));
        }
        else{
            $file = NULL;
        }

        //Salvando no banco de dados todos os dados informados pelo usuário
        $sql = "INSERT INTO cadastros (nome, email, senha, telefone, profissao, imagem)
         VALUES ('$save_name', '$save_email', '$save_password', '$save_number', '$save_profession', '$file')";

        $result = $conn->query($sql);

        header('location: ../../loginPage/login.php');
    }
    else{
        //Caso esteja em falta alguma das variáveis necessárias
        echo"<h1 style='color:red'>Alguma variável não foi inicializada!</h1>";
    }
?>