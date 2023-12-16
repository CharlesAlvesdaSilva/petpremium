<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Premium</title>
    <link rel="stylesheet" href="Agendamento.css">
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
        <img src="img\banho2.svg" id="logo">
    </header>



        <div class="form">
        <form action="sistema.php" method="POST">
                <div class="form-header">
                    <div class="title">
                        <h1>Agendamento</h1>
                    </div>
                </div>
            <div class="input-group">
                <div class="input-box">
                    <label for="firstname">Nome do cachorro(a)</label>
                    <input id="firstname" type="text" name="firstname" placeholder="Digite o nome do cachorro(a)" required>
                </div>
    
                <div class="raca-options">
                    <div class="raca-title">
                        <h5>Raça</h5>
                    </div>

                    <div class="raca-group">
                        <select id="raca-option" class="raca-option" required> 
                            <label for="york" id="york">
                                <option value="york">Yorkshire</option>
                            </label>

                            <label for="shih-tsu" id="shih-tsu">
                                <option value="shih-tsu">Shih-tsu</option>
                            </label>

                            <label for="beagle" id="beagle">
                                <option value="beagle">Beagle</option>
                            </label>

                            <label for="Boston" id="Boston">
                                <option value="Boston">Boston Terrier</option>
                            </label>

                            <label for="buldogue" id="buldogue">
                                <option value="buldogue">Buldogue</option>
                            </label>

                            <label for="chihuahua" id="chihuahua">
                                <option value="chihuahua">Chihuahua</option>
                            </label>

                            <label for="dachshund" id="dachshund">
                                <option value="dachshund">Dachshund</option>
                            </label>

                            <label for="lhasa" id="lhasa">
                                <option value="lhasa">Lhasa Apso</option>
                            </label>

                            <label for="lulu" id="lulu">
                                <option value="lulu">Lulu da Pomerânia</option>
                            </label>

                            <label for="maltres" id="maltres">
                                <option value="maltres">Maltês</option>
                            </label>

                            <label for="pequines" id="pequines">
                                <option value="pequines">Pequinês</option>
                            </label>

                            <label for="pinscher" id="pinscher">
                                <option value="pinscher">Pinscher</option>
                            </label>

                            <label for="poodle" id="poodle">
                                <option value="poodle">Poodle</option>
                            </label>

                            <label for="pug" id="pug">
                                <option value="pug">Pug</option>
                            </label>

                            <label for="schnauzer" id="schnauzer">
                                <option value="schnauzer">Schnauzer Miniatura</option>
                            </label>

                            <label for="shiba" id="shiba">
                                <option value="shiba">Shiba Inu</option>
                            </label>
                            
                        </select>
                    </div>
                </div>

                <div class="tosa-options">
                    <div class="tosa-title">
                        <h5>Banho e Tosa</h5>
                    </div>

                <div class="tosa-group">
                    <select id="tos-option" class="tosa-option" required> 
                        <label for="bb" id="bb">
                            <option value="bb">Tosa bebê  R$130,00</option>
                        </label>

                        <label for="Maquina" id="Maquina">
                            <option value="Maquina">Tosa na maquininha  R$100,00</option>
                        </label>

                        <label for="higienica" id="higienica">
                            <option value="higienica">Tosa Higiênica  R$75,00</option>
                        </label>

                        <label for="banho" id="banho">
                            <option value="banho">Banho  R$60,00</option>
                        </label>
                    </select>
                </div>
                </div>
            

                <div class="cad-button">
                    <button><a href="Agendamento2.php" class="cad-link">Continuar</a></button>
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