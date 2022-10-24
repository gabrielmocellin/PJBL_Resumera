<?php
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
    <link rel="stylesheet" href="../navHeader/styleHeader.css">
    <title>Edição de Perfil</title>
</head>
<body>
    <?php require '../navHeader/header.php';?>

    <div id= 'body_form_div'>
        <form method= 'POST' id= 'change_form' action= 'exe/editprofile_exe.php' enctype='multipart/form-data'>
            <div id= 'esquerda_div'>
                <div id= 'esquerda_div_topo'>
                    <!-- COMANDO IMPORTANTÍSSIMO PARA TRAZER IMAGENS EM BLOB PARA O SITE DO BANCO DE DADOS! -->
                    <?php echo "<img id='profile_img' src='data:image;base64,".base64_encode($_SESSION['imagem'])."' alt= 'Foto do usuário'>"; ?>
                </div>
                <div id= 'esquerda_div_base'>
                    <input name= 'change_image_input' type= 'file'>
                    <a onclick='trocarDePagina("../profilePage/profile.php")'>Voltar</a>
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
                    <input id='desativarButton' type='button' value='Desativar a minha conta'  onclick='confirm_delete()'>
                    <?php
                        $erro = isset($_GET["erro"]);
                        if($erro == 1){
                            echo "<p style='color:red';>Erro ao desativar sua conta.</p>";
                        }
                    ?>
                    <input id= 'update' name= 'update' value= 'Update' type= 'submit'>
                </div>
            </div>
        </form>
    </div>

    <script src='../.js/script.js'></script>
</body>
</html>