<?php 
    session_start();
?>

<header class="container">
    <h1 class="logo">Resumera</h1>
    <input type="search" name="pesquisar" id="pesquisar" placeholder="Pesquisar...">
    <nav id= "navHeader" class="container-cabecalho">
        <a class="container-link" href="#">Home</a>
        <a class="container-link" href="#">Matérias</a>
        <a class="container-link" href="#">Ranking Mensal</a>
        <a class="container-link" href="#">Postar</a>
        
    </nav>
    <div id= 'div_profile_img'>
        <!-- COMANDO IMPORTANTÍSSIMO PARA TRAZER IMAGENS EM BLOB PARA O SITE DO BANCO DE DADOS! -->
        <?php echo "<img onclick='trocarDePagina(" . '"../profilePage/profile.php"' . ")' id='header_profile_img' src='data:image;base64,".base64_encode($_SESSION['imagem'])."' alt= 'Foto do usuário'>"; ?>
    </div>
</header>