<?php
session_start();
include_once("config.php");
print_r($_SESSION);



$sql = "SELECT * FROM usuarios ORDER BY id DESC";
$result = $conexao->query($sql);

print_r($result);
?>

<div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">nome</th>
                <th scope="col">tel</th>
                <th scope="col">email</th>
                <th scope="col">cpf</th>
                <th scope="col">senha</th>
                <th scope="col">confirsenha</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($user_data = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $user_data['id'] . "</td>";
                echo "<td>" . $user_data['nome'] . "</td>";
                echo "<td>" . $user_data['tel'] . "</td>";

                echo "<td>" . $user_data['email'] . "</td>";

                echo "<td>" . $user_data['cpf'] . "</td>";

                echo "<td>" . $user_data['senha_hash'] . "</td>";

                echo "<td>" . $user_data['confirsenha'] . "</td>";


                // Adicione as outras colunas conforme necessário
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>
