<?php
include_once('config.php');

if (isset($_POST['submit'])) {
    $nome = $_POST['nome'];
    $tel = $_POST['tel'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $senha = $_POST['senha_hash'];
    $confirsenha = $_POST['confirsenha'];
    
    // Verifique se as senhas coincidem
    if ($senha !== $confirsenha) {
        echo '<script>alert("As senhas não coincidem.");</script>';
        // Adicione qualquer lógica adicional ou redirecionamento aqui
        exit();
    }
    
    // Crie o hash da senha
    $senha_hash = password_hash($senha, PASSWORD_DEFAULT);

    $result = mysqli_query($conexao, "INSERT INTO usuarios (nome, tel, email, cpf, senha_hash) 
    VALUES ('$nome','$tel','$email','$cpf','$senha_hash')");

if ($result) {
    echo '<script>alert("Cadastro realizado com sucesso!");</script>';
    // Redirecionar para uma página de confirmação ou fazer algo mais
} else {
    echo '<script>alert("Erro ao cadastrar. ' . mysqli_error($conexao) . '");</script>';
}

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/js/css/teste.css">
    <script src="cadastrocliente.js" defer></script>
    <title>Cadastro</title>
    <style>
        :root{
    --color-neutral-10:#dbdfdf;
    --color-neutral-20:#40E0D0;
    --color-neutral-30:#14897d;
    --color-neutral-40:#30363d;
    --color-neutral-50:#8b949e;
    --color-neutral-60:#000000;
    --color-neutral-70:#ffffff;

    --color-link:#58a6ff;
}

@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');
*{
    padding: 0;
    margin:0;
    font-family: 'Open Sans', sans-serif;
}

body{
    background-color: rgb(240, 230, 215);
}

header{
    padding: 32px 0px 24px 0px;
}

#logo{
    width: 400px;
    height: 90px;
}

.container{
    display: flex;
    justify-content: center;
    width: 100%;
    margin-top: 0;
}

.card{
    background-color: var(--color-neutral-20);
    padding: 50px;
    border-radius: 3%;
    box-shadow: 3px 3px 1px 0px #00000060;
    border: 1px solid var(--color-neutral-30);
    width: 300px;
}

h1{
    text-align: center;
    margin-top: 20px;
    color: var(--color-neutral-60);
}

.list input{
    width: 80%;
    padding: 5px 25px;
    display: inline-block;
    border: none;
    border-bottom: 1px solid var(--color-neutral-30);
    background-color: transparent;
    outline: none;
    min-width: 180px;
    font-size: 16px;
    transition: 3s;
    border-radius: 0;
}

.list{
    position: relative;
    padding-top: 13px;
    margin-top: 5%;
    margin-bottom: 5%;
}

.list label{
    color: var(--color-neutral-40);
    pointer-events: none;
    position: absolute;
    top: 0;
    left: 0;
    margin-top: 13px;
    transition: 0.5s;
}

.list input:focus{
    border-bottom: 2px solid var(--color-neutral-70);
}

.list label{
    color: var(--color-neutral-40);
    pointer-events: none;
    position: absolute;
    top: 0;
    left: 0;

}

.list input:focus + label,
.list input:valid + label{
    font-size: 13px;
    margin-top: 0;
    color: var(--color-neutral-30);
}

button{
    background-color: var(--color-neutral-60);
    color: #fff;
    border: 1px solid rgb(240, 246, 252, 0.1);
    display: inline-block;
    padding: 8px 90px;
    font-weight: 500;
    line-height: 20px;
    cursor: pointer;
    border-radius: 10px;
    transition: background-color 80ms;
    font-size: 17px;
    
}

button:houver{
    background-color: #272262;
    color: #fff;
}

.justify-center{
    display: flex;
    justify-content: center;
}

.log{
    position: fixed;
    bottom: 10px;
    right: 0px;
    z-index: 9999;
    list-style: none;
}

.log button{
    border: none;
    cursor: pointer;
}

.log ul{
    list-style: none;
}

.fa-eye{
    position: absolute;
    top: 15px;
    right: 10px;
    cursor: pointer;
    color: var(--color-neutral-40);
}

.error-message {
    color: red;
    font-size: 12px;
    margin-top: 5px;
}

.acerto-message {
    color: green;
    font-size: 12px;
    margin-top: 5px;
}
    </style>
</head>
<body>
    <form action="CadastroCliente.php" method="POST">
        <header>
            <img src="img/Pet Premium (1).png" id="logo">
        </header>

        <div class="container">
            <div class="card">
                <h1>Cadastrar</h1>
                <div id="mserror" class="error-message"></div>
                <div id="msacerto" class="acerto-message"></div>

                <div class="list">
                    <input type="text" id="nome" name="nome" placeholder='' required><label id="Labelnome" for="nome">Nome Completo</label>
                </div>

                <div class="list">
                    <input type="text" autocomplete="off" maxlength="11" id="cpf" name="cpf" placeholder="" required><label id="Labelcpf" for="usuario">CPF</label>
                    <div id="cpfError" class="error-message"></div>
                </div>

                <div class="list">
                    <input type="text" id="tel" name="tel" maxlength="11" placeholder="" required><label id="Labeltel" for="usuario">Telefone</label>
                </div>

                <div class="list">
                    <input type="text" id="email" name="email" placeholder="" required><label id="Labelemail" for="usuario">E-mail</label>
                </div>

                <div class="list">
                    <input type="password" id="senha_hash" name="senha_hash" maxlength="8" placeholder="" required><label id="Labelsenha" for="senha_hash">Senha</label>
                    <div id="senhaError" class="error-message"></div> 
                </div>

                <div class="list">
                    <input type="password" id="confirsenha" name="confirsenha" maxlength="8" placeholder="" required><label id="Labelconfirsenha" for="senha">Confirmar Senha</label>
                    <div id="confirsenhaError" class="error-message"></div>
                </div>

                <div class="justify-center">
                <button type="submit" name="submit">Cadastrar</button>

                </div>
            </div>
        </div>
    </form>

    <div class="log">
        <ul>
            <li class="nav-item"><a href="https://www.facebook.com/giovanna.monteiro.7165?mibextid=ZbWKwL" class="nav-link"><img src="img/Logo_Face.png" width="50" height="50"/></a></li>
            <li class="nav-item"><a href="https://instagram.com/gihh.monteito?igshid=NzZlODBkYWE4Ng==" class="nav-link"><img src="img/Logo_Insta.png" width="50" height="50"/></a></li>
            <li class="nav-item"><a href="https://wa.me/qr/YIUWF3HNUVLRH1" class="nav-link"><img src="img/Logo_Whats.png" width="50" height="50"/></a></li>
        </ul>
    </div>
</body>
</html>
