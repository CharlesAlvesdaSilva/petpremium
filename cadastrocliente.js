let nome = document.querySelector('#nome')
let Labelnome = document.querySelector('#Labelnome')
let validnome = false

let cpf = document.querySelector('#cpf')
let Labelcpf = document.querySelector('#Labelcpf')
let cpfError = document.querySelector('#cpfError')
let validcpf = false

let tel = document.querySelector('#tel')
let Labeltel = document.querySelector('#Labeltel')
let validtel = false

let email = document.querySelector('#email')
let Labelemail = document.querySelector('#Labelemail')
let validemail = false

let senha = document.querySelector('#senha')
let Labelsenha = document.querySelector('#Labelsenha')
let senhaError = document.querySelector('#senhaError')
let validsenha = false

let confirsenha = document.querySelector('#confirsenha')
let Labelconfirsenha = document.querySelector('#Labelconfirsenha')
let confirsenhaError = document.querySelector('#confirsenhaError')
let validconfirsenha = false

nome.addEventListener('keyup', () => {
    if(nome.value.length <= 2){         
        Labelnome.style.color = 'red';
        Labelnome.innerHTML = 'Nome * Insira no mínimo 3 caracteres';
        nome.style.borderColor = 'red';
        validnome = false;
    } else {
        Labelnome.style.color = '#14897d';
        Labelnome.innerHTML = 'Nome';
        nome.style.borderColor = '#14897d';
        validnome = true;
    }
});




function validarTEL(tel) {
    tel = tel.replace(/[^\d]+/g,'');
    if(tel == '') return false;
    if (tel.length != 11 ||
        tel == "00000000000" ||
        tel == "11111111111" ||
        tel == "22222222222" ||
        tel == "33333333333" ||
        tel == "44444444444" ||
        tel == "55555555555" ||
        tel == "66666666666" ||
        tel == "77777777777" ||
        tel == "88888888888" ||
        tel == "99999999999"){
            return false;
        }
    return true;
}

tel.addEventListener('keyup', () => {
    let telValue = tel.value.replace(/[^\d]+/g,'');
    if(validarTEL(telValue)){
        Labeltel.style.color = '#14897d';
        Labeltel.innerHTML = 'Celular';
        tel.style.borderColor = '#14897d';
        validtel = true;
    } else {
        Labeltel.style.color = 'red';
        Labeltel.innerHTML = 'Celular * DD';
        tel.style.borderColor = 'red';
        validtel = false;
    }
});

function validarCPF(cpf) {
    cpf = cpf.replace(/[^\d]+/g,'');
    if(cpf == '') return false;
    if (cpf.length != 11 ||
        cpf == "00000000000" ||
        cpf == "11111111111" ||
        cpf == "22222222222" ||
        cpf == "33333333333" ||
        cpf == "44444444444" ||
        cpf == "55555555555" ||
        cpf == "66666666666" ||
        cpf == "77777777777" ||
        cpf == "88888888888" ||
        cpf == "99999999999"){
            return false;
        }
    let add = 0;
    for (let i = 0; i < 9; i++)
        add += parseInt(cpf.charAt(i)) * (10 - i);
    let rev = 11 - (add % 11);
    if (rev == 10 || rev == 11)
        rev = 0;
    if (rev != parseInt(cpf.charAt(9)))
        return false;                                   
    add = 0;
    for (let i = 0; i < 10; i++)
        add += parseInt(cpf.charAt(i)) * (11 - i);
    rev = 11 - (add % 11);
    if (rev == 10 || rev == 11)
        rev = 0;
    if (rev != parseInt(cpf.charAt(10)))
        return false;
    return true;
}

cpf.addEventListener('keyup', () => {
    let cpfValue = cpf.value.replace(/[^\d]+/g,'');
    if(validarCPF(cpfValue)){
        Labelcpf.style.color = '#14897d';
        cpfError.textContent = ''; 
        cpf.style.borderColor = ''; 
        validcpf = true;
    } else {
        Labelcpf.style.color = 'red';
        cpfError.textContent = 'CPF inválido'; 
        cpf.style.borderColor = 'red'; 
        validcpf = false;
    }
});

email.addEventListener('keyup', () => {
    if(email.value.length <= 2){         
        Labelemail.style.color = 'red';
        Labelemail.innerHTML = 'E-mail * Insira no mínimo 3 caracteres';
        email.style.borderColor = 'red';
        validemail = false;
    } else {
        Labelemail.style.color = '#14897d';
        Labelemail.innerHTML = 'E-mail';
        email.style.borderColor = '#14897d';
        validemail = true;
    }
});

function validarSenha(senha) {
    let regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%?&])[A-Za-z\d@$!%?&]{8,}$/;
    return regex.test(senha);
}

senha.addEventListener('input', () => {
    let senhaValue = senha.value;

    if (validarSenha(senhaValue)) {
        Labelsenha.style.color = '#14897d';
        senhaError.textContent = '';
        senha.style.borderColor = ''; 
        validsenha = true;
    } else {
        Labelsenha.style.color = 'red';
        senhaError.textContent = 'A senha deve conter pelo menos 8 caracteres, incluindo pelo menos uma letra maiúscula, uma letra minúscula, um número e um caractere especial.';
        senha.style.borderColor = 'red'; 
        validsenha = false;
    }
});

confirsenha.addEventListener('keyup', () => {
    let senhaValue = senha.value;
    let confirsenhaValue = confirsenha.value;

    if(senhaValue === confirsenhaValue){
        Labelconfirsenha.style.color = '#14897d';
        confirsenhaError.textContent = ''; 
        confirsenha.style.borderColor = ''; 
        validconfirsenha = true;
    } else {
        Labelconfirsenha.style.color = 'red';
        confirsenhaError.textContent = 'Senhas diferentes'; 
        confirsenha.style.borderColor = 'red'; 
        validconfirsenha = false;
    }
});

function cadastrar() {
    if (validemail && validtel && validconfirsenha && validcpf && validnome && validsenha) {
        alert('Tudo preenchido corretamente');
    } else {
        alert('Preencha todos os campos corretamente');
    }

}