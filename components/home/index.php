<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../navHeader/styleHeader.css">
    <link rel="stylesheet" href="style.css">
    <title>Pagina Inicial | Resumera</title>
</head>
<body>
    <?php require "../navHeader/header.php"?>

    <main class="main">
        <!-- FORMULÁRIO PARA POSTAR -->
        <div class="novoPost">
            <div class="infoUser">
                <?php $nome = $_SESSION['nome']; $imagem = $_SESSION['imagem']; 
                // COMANDO IMPORTANTÍSSIMO PARA TRAZER IMAGENS EM BLOB PARA O SITE DO BANCO DE DADOS!
                // echo "<img class='imgUser' src='data:image;base64,".base64_encode($imagem)."' alt= 'Foto do usuário'>";
                echo "<strong>$nome</strong>"; ?>
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
            <li class="post">
                <div class="infoUser">
                    <div class="imgUserPost">
                        <div class="nameAndHour">
                            <strong>Diogo</strong>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </main>


</body>
</html>