<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../navHeader/styleHeader.css">
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="midia/R.png" type="image/x-icon">
    <title>Pagina Inicial | Resumera</title>
</head>
<body>
    <?php require "../navHeader/header.php"?>

    <main class="main">
        <!-- FORMULÁRIO PARA POSTAR -->
        <div class="novoPost">
            <div class="infoUser">
                <div id='imgUser_div'>
                    <?php $nome = $_SESSION['nome']; $imagem = $_SESSION['imagem']; ?>
                    <!-- COMANDO IMPORTANTÍSSIMO PARA TRAZER IMAGENS EM BLOB PARA O SITE DO BANCO DE DADOS! -->
                    <?php echo "<img class='imgUser'  src='data:image;base64,".base64_encode($imagem)."' alt= 'Foto do usuário'>"; ?>
                </div>
                <div id='nomeUser_div'>
                    <?php echo "<strong>$nome</strong>"; ?>
                </div>
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

        <ul class="posts">
            <li class="post">
                <div class="infoUser">
                    <div class="imgUserPost"></div>
                        <div class="nameAndHour">
                            <strong>Diogo Bonneto</strong>
                            <p>21hrs</p>
                        </div>
                </div>

                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo est voluptates aliquid, ipsa odit iusto quidem nisi fuga, maxime laudantium esse cupiditate quod praesentium amet reiciendis consequuntur, asperiores itaque omnis? Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit excepturi maxime itaque voluptatum dolor corporis quisquam natus ab obcaecati asperiores ducimus voluptas incidunt dolorum nam modi, ad laboriosam, pariatur dicta. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis quae ipsam consequatur mollitia voluptate beatae quo quam reiciendis eius harum fuga numquam corrupti dignissimos ducimus porro sequi, cum hic unde!
                </p>

                <div class="actionBtnPost">
                    <button type="button" class="filesPost like"><img src="assets/like1.svg" alt="Curtir">Curtir</button>
                    <button type="button" class="filesPost comment"><img src="assets/chat.svg" alt="Curtir">Comentar</button>
                    <button type="button" class="filesPost share"><img src="assets/share.svg" alt="Compartilhar">Compartilhar</button>
                </div>
            </li>
        </ul>
    </main>

</body>
</html>