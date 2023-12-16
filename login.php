<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Login Pet Premium</title>
    <link rel="stylesheet" href="assets\css\js\css\Login.css">
</head>
<body>
<style>
    :root {
        --color-neutral-10: #dbdfdf;
        --color-neutral-20: #40E0D0;
        --color-neutral-30: #14897d;
        --color-neutral-40: #30363d;
        --color-neutral-50: #8b949e;
        --color-neutral-60: #000000;
        --color-neutral-70: #ffffff;
        --color-link: #58a6ff;
    }

    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');

    * {
        font-size: 18px;
        margin: 0;
        padding: 0;
        line-height: 1.5;
        font-family: 'Open Sans', sans-serif;
    }

    a {
        text-decoration: none;
        font-size: 12px;
        color: var(--color-link);
    }

    a:hover {
        text-decoration: underline;
    }

    body {
        background-color: rgb(240, 230, 215);
        color: var(--color-neutral-60);
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    header {
        padding: 32px 0px 24px 0px;
    }

    #logo {
        width: 350px;
        height: 80px;
    }

    #container {
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    #title {
        font-size: 24px;
        font-weight: 300;
        letter-spacing: -0.5px;
        text-align: center;
    }

    form {
        display: flex;
        flex-direction: column;
        gap: 20px;
        background-color: var(--color-neutral-20);
        border-radius: 10px;
        padding: 50px;
        border: 1px solid var(--color-neutral-30);
    }

    .input-field {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .input-field div {
        display: flex;
        justify-content: space-between;
    }

    .input-field label {
        font-weight: 400;
    }

    #forgot_password {
        text-decoration: none;
    }

    .form-control {
        all: unset;
        padding: 5px 12px;
        line-height: 20px;
        color: var(--color-neutral-60);
        border: 1px solid var(--color-neutral-30);
        border-radius: 6px;
    }

    .form-control:focus-visible {
        border-color: var(--color-link);
    }

    .form-control:webkit-autofill {
        box-shadow: inset 0 0 0 32px var(--color-neutral-10) !important;
        -webkit-text-fill-color: var(--color-neutral-60);
    }

    #submit_button {
        background-color: #000000;
        color: var(--color-neutral-10);
        border: 1px solid rgb(240, 246, 252, 0.1);
        display: inline-block;
        padding: 5px 16px;
        font-weight: 500;
        line-height: 20px;
        cursor: pointer;
        border-radius: 6px;
        transition: background-color 80ms;
    }

    #submit_button:hover {
        background-color: #0c625a;
    }

    #login_collout {
        padding: 16px 44px;
        border: 1px solid var(--color-neutral-40);
        border-radius: 6px;
    }

    #login_callout a {
        font-size: 14px;
    }

    footer {
        padding: 80px;
    }

    footer ul {
        display: flex;
        gap: 16px;
        list-style: none;
    }

    footer ul li:last-child a {
        color: var(--color-neutral-50);
    }

    footer ul li:last-child a:hover {
        color: var(--color-link);
    }

    .log {
        position: fixed;
        bottom: 10px;
        right: 0px;
        z-index: 9999;
        list-style: none;
    }

    .log button {
        border: none;
        cursor: pointer;
    }

    .log ul {
        list-style: none;
    }
</style>
    <header>
        <img src="img/Pet Premium (1).png" id="logo">
    </header>
    <main id="container">
        <h1 id="title">
            Login
        </h1>
        <form action="Agendamento.php" method="POST">
            <div class="input-field">
                <label for="user">
                    CPF
                </label>
                <input type="text" name="cpf" id="cpf" class="form-control">
            </div>

            <div class="input-field">
                <div>
                <div class="input-field">
    <div>
        <label for="senha">
            Senha
        </label>
    </div>
    <input type="password" name="senha" id="senha" class="form-control">
</div>
            </div>
           

            <button type="submit" name="submit">
    Entrar
</button>
            </button>

        </form>

       
    </main>

    <footer>
        <ul>
            <li>
                <a href="#">Terms</a>
            </li>
            <li>
                <a href="#">Privacy</a>
            </li>
            <li>
                <a href="#">Secury</a>
            </li>
        </ul>
    </footer>

    <div class="log">
        <ul>
            <li class="nav-item"><a href="https://www.facebook.com/giovanna.monteiro.7165?mibextid=ZbWKwL" class="nav-link"><img src="img/Logo_Face.png" width="50" height="50"/></a></li>
            <li class="nav-item"><a href="https://instagram.com/gihh.monteito?igshid=NzZlODBkYWE4Ng==" class="nav-link"><img src="img/Logo_Insta.png" width="50" height="50"/></a></li>
            <li class="nav-item"><a href="https://wa.me/qr/YIUWF3HNUVLRH1" class="nav-link"><img src="img/Logo_Whats.png" width="50" height="50"/></a></li>
        </ul>
    </div>
</body>
</html>