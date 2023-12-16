<?php
session_start();

// Verifica se o formulário foi enviado
if (isset($_POST['submit']) && !empty($_POST['cpf']) && !empty($_POST['senha'])) {
    // Inclui o arquivo de configuração
    include_once('config.php');

    // Obtém os valores do formulário
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha'];

    // Exibe os valores (apenas para teste)
    echo 'cpf: ' . $cpf . '<br>';
    echo 'senha: ' . $senha;

    // Consulta SQL
    $sql = "SELECT * FROM usuarios WHERE cpf = '$cpf' AND senha = '$senha'";
    
    // Executa a consulta
    $result = $conexao->query($sql);

    // Verifica se a consulta foi bem-sucedida
    //if ($result) {
        // Processa os resultados aqui
        // ...
       // print_r($result);
        // print_r($sql);

        if(mysqli_num_rows($result) < 1)
        {
            unset($cpf);
            unset($senha);
            header('Location: login.php');
        }
        else
        {
            $_SESSION['cpf'] = $cpf;
            $_SESSION['senha'] = $senha;

            header('location: sistema.php');
        }
    //} else {
        // Trate os erros na consulta
        // echo 'Erro na consulta SQL: ' . $conexao->error;
    //}
} else {
    // Redireciona para a página de login se o formulário não foi submetido corretamente
    header('Location: login.php');
}
?>
