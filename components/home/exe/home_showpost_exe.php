<?php
require "../bd/connection.php";

#Estrutura utilizado para mostrar cada postagem já feita no site.
function showPosts($post_name, $post_text, $post_user_image, $post_data){
    echo "<ul class='posts'>";
    echo "<li class='post'>";
    echo "<div class='infoUser'>";
    echo "<div class='imgUserPost'><img class='imgUser'  src='data:image;base64,".base64_encode($post_user_image)."' alt= 'Foto do usuário'></div>";
    echo "<div class='nameAndHour'>";
    echo "<strong>" . $post_name . "</strong>";
    echo "<p>$post_data</p>";
    echo "</div>";
    echo "</div>";
    echo "<p class='post_text'>" . $post_text . "</p>";

    echo "<div class='actionBtnPost'>";
    echo "<button type='button' class='filesPost like'><img src='assets/like1.svg' alt='Curtir'>Curtir</button>";
    echo "<button type='button' class='filesPost comment'><img src='assets/chat.svg' alt='Curtir'>Comentar</button>";
    echo "<button type='button' class='filesPost share'><img src='assets/share.svg' alt='Compartilhar'>Compartilhar</button>";
    echo "</div>";
    echo "</li>";
    echo "</ul>";
}

$sql = "SELECT resumo, nome, imagem, post_data FROM `postagem`, `cadastros` WHERE FK_email = email ORDER BY id DESC;";
$query = $conn->query($sql);

    if($query->num_rows > 0){
        while($result = $query->fetch_assoc()){
            showPosts($result['nome'], $result['resumo'], $result['imagem'], $result['post_data']);
        }
    }else{
        echo "<h1>Nenhum resumo postado até agora!</h1>";
    }



?>