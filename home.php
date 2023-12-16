<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Premium</title>
    <script src="Home.js" defer></script>
</head>
<body>
    <div class="slider-container">
        <div class="logo">
            <h1><img src="img/Pet Premium (1).png" width="300" height="70"/></h1>
        </div>

        <div class="login-container">
            <div class="login-button">
                <img src="img/login.png" width="40" height="40"/>
                <button><a href="login.php">Entrar</a></button>
                <img src="img/cadastro.png" width="40" height="40"/>
                <button><a href="CadastroCliente.php">Cadastrar-se</a></button>
            </div>
        </div>

        <div class="slider">
            <div class="slides">
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                
                <div class="slide first">
                    <img src="img/mikey.jpeg" alt="slide1" />
                </div>

                <div class="slide">
                    <img src="img/Lunna.jpeg" alt="slide2" />
                </div>

                <div class="slide">
                    <img src="img/aleatorio.jpeg" alt="slide3" />
                </div>

                <div class="nav-auto">
                    <div class="auto-bnt1"></div>
                    <div class="auto-bnt2"></div>
                    <div class="auto-bnt3"></div>
                </div>

            </div>
        </div>
    </div>
</body>
</html>

<style>
 

@import url('https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap');
*{
    padding: 0;
    margin:0;
    font-family: 'Open Sans', sans-serif;
}



.logo{
    display: flex;
    align-items: center; 
    position: relative;
 }

.img{
    position: absolute;
    top: 10px; /* Ajuste conforme necessário */
    left: 78%;
    z-index: 2; /* Certifique-se de que os botões estejam acima do carrossel */
    justify-content: space-between;
    align-items: center;
    display: flex;
}

.login-container {
    position: relative;
    
}

.login-button {
    position: absolute;
    top: 10px; /* Ajuste conforme necessário */
    left: 78%;
    z-index: 2; /* Certifique-se de que os botões estejam acima do carrossel */
    justify-content: space-between;
    align-items: center;
    display: flex;
}

.login-button button {
    border: none;
    background-color: #24252a;
    padding: 10px 15px;
    border-radius: 5px;
}

.login-button button a {
    text-decoration: none;
    color: #fff;
    font-weight: 1.1rem;
    font-weight: bold;
}

.login-button img {
    padding: 0 0.5rem;
}

.slider {
    margin: 0 auto;
    width: 100%;
    height: auto;
    overflow: hidden;
    position: relative;
}

.slider{
    margin: 0 auto;
    width: 100%;
    height: auto;
   
    overflow: hidden;
}

.slides{
    width: 400%;
    height: auto;
    display: flex;
}

.slides input{
    display: none;
}

.slide{
    width: 25%;
    
    position: relative;
   
    transition: 5s;
}

.slide img{
    width: 100%;
}

#radio1:checked ~ .first{
    margin-left: 0;
}

#radio2:checked ~ .first{
    margin-left: -25%;
}

#radio3:checked ~ .first{
    margin-left: -50%;
}

.nav-auto {
    position: absolute;
    width: 100%;
    margin-top: 35%;
    display: flex;
    justify-content: center;
}

.nav-auto div:not(:last-child){
    margin-right: 10px;
}

.slider-container {
    position: relative;
}

.logo {
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 20px;
    position: absolute;
    top: 700px;
    left: 13%;
    transform: translateX(-50%);
    z-index: 2;
}

</style>
