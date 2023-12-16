<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Premium</title>
    <link rel="stylesheet" href="Agendamento2.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body>
    <header class="inicio">
        <nav class="nav-bar">
            <div class="logo">
                <h1><img src="img\Pet Premium (1).png" width="400" height="80"/></h1>
            </div>
    </header>
    <nav class="container">
    <header class="form-img">
        <img src="img\Agenda.jpg" id="logo">
    </header>



        <div class="form">
            <form action="#">
                <div class="form-header">
                    <div class="title">
                        <h1>Serviços Adicionais</h1>
                    </div>
                </div>
            <div class="input-box" required>
                <div class="Serviços">
                    <h5>Hidratação</h5>
                </div>
                <input type="checkbox" id="Add">
                <label for="add">Hidratação de Argan R$25,00</label></br>
                <input type="checkbox" id="Add2">
                <label for="add2">Hidratação LISS R$20,00</label></br>
                <input type="checkbox" id="Add3">
                <label for="add3">Hidratação de Luxo R$30,00</label></br>
                <input type="checkbox" id="Add4">
                <label for="add4">Nenhum</label>
            </div>

            <div class="input-box" required>
                <div class="outros">
                    <h5>Outros</h5>
                </div>
                <input type="checkbox" id="Add">
                <label for="add">Cortar Unhas R$5,00</label></br>
                <input type="checkbox" id="Add1">
                <label for="ad1d">Escovar dentes R$8,00</label></br>
                <input type="checkbox" id="Add5">
                <label for="add5">Nenhum</label>
                
            </div>

                <div class="cad-button">
                    <button><a href="#" class="cad-link">Continuar</a></button>
                </div>
            </form>
        </div>
    </nav>
<nav class="menu-lateral">
    <div class="btn-expandir">
        <i class="bi bi-list"></i>
    </div>

    <ul>
        <li class="item-menu">
            <a href="Cadastrofuncionarios.php">
                <span class="icon"><i class="bi bi-clipboard2-data"></i></span>
                <span class="txt">Cadastro Úsuario</span>
            </a>
        </li>
        <li class="item-menu">
            <a href="Agendamento.php">
                <span class="icon"><i class="bi bi-shop"></i></span>
                <span class="txt">Agendamento</span>
            </a>
        </li>
        <li class="item-menu">
            <a href="sistema.php">
                <span class="icon"><i class="bi bi-dropbox"></i></span>
                <span class="txt">Banco</span>
            </a>
        </li>
        <li class="item-menu">
            <a href="#">
                <span class="icon"><i class="bi bi-calendar-date"></i></span>
                <span class="txt">Agenda</span>
            </a>
        </li>
    </ul>
</nav>


</body>
</html>