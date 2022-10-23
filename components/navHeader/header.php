<?php 
    session_start();
?>
<header>
        <div class="container">
            <h1 class="logo">Resumera</h1>
            <input type="search" name="pesquisar" id="pesquisar" placeholder="Pesquisar...">
            <nav class="container-cabecalho">
                <a class="container-link" href="#">Home</a>
                <a class="container-link" href="#">Matérias</a>
                <a class="container-link" href="#">Ranking Mensal</a>
                <a class="container-link" href="#">Postar</a>
                
            </nav>
            <!-- COMANDO IMPORTANTÍSSIMO PARA TRAZER IMAGENS EM BLOB PARA O SITE DO BANCO DE DADOS! -->
            <?php echo "<img onclick='trocarDePagina(" . '"../profilePage/profile.php"' . ")' id='profile_img' src='data:image;base64,".base64_encode($_SESSION['imagem'])."' alt= 'Foto do usuário'>"; ?>
        </div>
</header>