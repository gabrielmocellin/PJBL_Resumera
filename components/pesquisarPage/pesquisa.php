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
    <?php require "../navHeader/header.php" ?>

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

                $sql = "SELECT nome FROM cadastros WHERE nome LIKE '$search%'"; //seleciona apenas os usuários que estão de acordo com o nome digitado na barra de p
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