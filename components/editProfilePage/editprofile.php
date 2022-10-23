<?php
    session_start();
    function get_data($dataSessionVariable){
        if( $_SESSION['logado'] == true ){
            $logged_data = $_SESSION[$dataSessionVariable];
            return "$logged_data";
        }
        else{
            return 'ERRO';
        }
    }
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="editprofile.css">
    <title>Edição de Perfil</title>
</head>
<body>
    <form method= 'POST' id= 'change_form' action= 'exe/editprofile_exe.php' enctype='multipart/form-data'>
        <div id= 'esquerda_div'>
            <div id= 'esquerda_div_topo'>
                <!-- COMANDO IMPORTANTÍSSIMO PARA TRAZER IMAGENS EM BLOB PARA O SITE DO BANCO DE DADOS! -->
                <?php echo "<img id='profile_img' src='data:image;base64,".base64_encode($_SESSION['imagem'])."' alt= 'Foto do usuário'>"; ?>
            </div>
            <div id= 'esquerda_div_base'>
                <input name= 'change_image_input' type= 'file'>
            </div>
        </div>
        <div id='direita_div'>

            <div id= 'direita_div_topo'>
                <h1>Edição de Perfil</h1>
            </div>
            <div id= 'direita_div_base'>
                <?php echo"<h1 class= 'exibindo'>" . get_data('nome') . "</h1>" ?>
                <label class= 'label'>Trocar Nome:</label>
                <input class= 'input' name= 'change_name_input' type= 'text'>

                <?php echo"<h1 class= 'exibindo'>" . get_data('bio') . "</h1>" ?>
                <label class= 'label'>Trocar bio:</label>
                <input class= 'input' name= 'change_bio_input' type= 'text'>
                <br>
                <a onclick='alerta()'>Desativar minha conta</a>
                <?php
                    $erro = isset($_GET["erro"]);
                    if($erro == 1){
                        echo "<p style='color:red';>Erro ao desativar sua conta.</p>";
                    }
                ?>
                <br>
                <input id= 'update' name= 'update' value= 'Update' type= 'submit'>
            </div>

        </div>
    </form>
<script src='../deletarPage/js/script.js'></script>
</body>
</html>