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
    <form id= 'change_form' action= 'exe/editprofile_exe.php'>
        <div id= 'esquerda_div'>
            <img id= 'profile_img' src=''>
            <input name= 'change_image_input' type= 'file'>
        </div>
        <div id='direita_div'>
            <label>Trocar Nome:</label>
            <input name= 'change_name_input' type= 'text'>

            <input type= 'submit'>
        </div>
    </form>
    
</body>
</html>