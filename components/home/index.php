<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="midia/R.png" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <title>Pagina Inicial | Resumera</title>
</head>
<body>
    <header>
        <div class="container">
            <h1 class="logo">Resumera</h1>
            <form name="form_search" id="form_search" action="../pesquisarPage/pesquisa.php" method="GET">
                <input type="search" name="pesquisar" id="pesquisar" placeholder="Pesquisar...">
                <button type="submit"><img src="assets/search.svg" alt="Clique aqui para Pesquisar"></button>
            </form>
            <nav class="container-cabecalho">
                <a class="container-link" href="#">Home</a>
                <a class="container-link" href="#">Matérias</a>
                <a class="container-link" href="#">Ranking Mensal</a>
                <a class="container-link" href="#">Postar</a>
                
            </nav>
            <!-- COMANDO IMPORTANTÍSSIMO PARA TRAZER IMAGENS EM BLOB PARA O SITE DO BANCO DE DADOS! -->
            <!-- <?php echo "<img onclick='trocarDePagina(" . '"../profilePage/profile.php"' . ")' id='profile_img' src='data:image;base64,".base64_encode($_SESSION['imagem'])."' alt= 'Foto do usuário'>"; ?> -->

            <script src="../.js/script.js"></script>
        </div>
    </header>

    <main class="main">
        <!-- FORMULÁRIO PARA POSTAR -->
        <div class="novoPost">
            <div class="infoUser">
                <div class="imgUser"></div>
                <strong>Diogo Bonet</strong>
            </div>
            <form action="" class="formPost">

                <textarea name="textarea" id="textarea" placeholder="Escreva seu resumo..."></textarea>

                <div class="Button">

                    <div class="icones">
                        <button class="btnFileForm"><img src="assets/image.svg" alt="Adicionar uma imagem"></button>
                        <button class="btnFileForm"><img src="assets/pdf.svg" alt="Adicionar um arquivo PDF"></button>
                    </div>

                <button type="submit" class="btnSubmitForm">Postar</button>
                </div>
            </form>
            
        </div>
        <ul class="post">

        </ul>
    </main>


</body>
</html>