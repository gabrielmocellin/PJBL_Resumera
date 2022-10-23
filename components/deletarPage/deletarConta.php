<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../consulta_BD_Page/stylePadrao.css">
    <title>Usuários</title>
</head>
<body>
    <header>
        <div class="container">
            <h1 class="logo">Resumera</h1>
            <!-- <input type="text" name="" id="" class="container-input"> -->
            <nav class="container-cabecalho">
                <a class="container-link" href="#">Home</a>
                <a class="container-link" href="#">Matérias</a>
                <a class="container-link" href="#">Ranking Mensal</a>
                <a class="container-link" href="#">Postar</a>
            </nav>
        </div>
    </header>
    <main>
        <section class="section-principal">
            <div class="content-principal">
                <a href="confirmacao.html">Deletar minha conta</a>
                <?php
                    $erro = isset($_GET["erro"]);
                    if($erro == 1){
                        echo "<p style='color:red';>Erro ao desativar sua conta.</p>";
                    }
                ?>
            </div>
        </section>
    </main>
</body>
</html>