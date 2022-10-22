<?php  
    require "../bd/connection.php";

    function mostrarUsuarios($nome, $email){
        echo "<tr>";
            echo "<td>" . $nome . "</td>";
            echo "<td>" . $email . "</td>";
        echo "</tr>";
    }

    $sql = "SELECT email, nome FROM cadastros";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $i = 1;
        while($row = $result->fetch_assoc()){
            mostrarUsuarios($row['nome'], $row['email']);
            $i += 1;
        }
    }
    else{
        echo "Nenhum usuário cadastrado.";
    }

    $conn->close();
?>