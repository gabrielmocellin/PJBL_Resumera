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
    <main>

    </main>
    <footer>

    </footer>
</body>
</html>