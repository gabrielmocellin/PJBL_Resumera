<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="midia/R.png" type="image/x-icon">
    <link rel="stylesheet" href="../home/style.css">
    <title>Pagina Inicial | Resumera</title>
</head>
<body>
<header>
        <div class="container">
            <h1 class="logo">Resumera</h1>
            <form name="form_search" id="form_search" action="../pesquisarPage/pesquisa.php" method="GET">
                <input type="search" name="pesquisar" id="pesquisar" placeholder="Pesquisar..." autocomplete="off">
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

    <main>
        <table>
            <?php
                require "../bd/connection.php";

                function mostrarUsuarios($nome, $n){  //template para printar as linhas da table
                    echo "<tr>";
                        echo "<td>" . $n. "</td>";
                        echo "<td>" . $nome. "</td>";
                    echo "</tr>";
                }

                $search = $_GET['pesquisar'];

                $sql = "SELECT nome FROM cadastros WHERE nome LIKE '$search%'";
                /*$sql = "SELECT nome FROM cadastros AS C WHERE C.nome = ALL 
                        (
                            SELECT C.nome
                            FROM cadastros AS C
                            WHERE C.nome LIKE '$search%'
                        )";*/
                $result = $conn->query($sql);

                if($result->num_rows > 0){
                    echo "<tr>
                            <td><b>Num</b></td>
                            <td><b>Nome</b></td>
                        </tr>";
                    $i = 1;
                    while($row = $result->fetch_assoc()){
                        mostrarUsuarios($row['nome'], $i);
                        $i += 1;
                    }
                }
                else{
                    echo "Nenhum usuário encontrado.";
                }

                $conn->close();
            ?>
        </table>
    </main>
    <footer>

    </footer>
</body>
</html>