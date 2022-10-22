<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylePadrao.css">
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
                <table>
                    <tr>
                        <td><b>Número</b></td>
                        <td><b>Nome</b></td>
                        <td><b>Email</b></td>
                    </tr>
                    <?php  //vai criar as outras linhas da tabela automaticamente
                        require "../bd/connection.php";
            
                        function mostrarUsuarios($nome, $email, $n){  //template para printar as linhas da table
                            echo "<tr>";
                                echo "<td>" . $n. "</td>";
                                echo "<td>" . $nome. "</td>";
                                echo "<td>" . $email. "</td>";
                            echo "</tr>";
                        }
            
                        $sql = "SELECT email, nome FROM cadastros";
                        $result = $conn->query($sql);
            
                        if($result->num_rows > 0){
                            $i = 1;
                            while($row = $result->fetch_assoc()){
                                mostrarUsuarios($row['nome'], $row['email'], $i);
                                $i += 1;
                            }
                        }
                        else{
                            echo "Nenhum usuário cadastrado.";
                        }
            
                        $conn->close();
                    ?>
                </table>
            </div>
        </section>
    </main>
</body>
</html>