"use strict";
function passwordValidate(password, repeat_password) {
    let firstPassword = document.getElementById('password').value;
    let repeatPassword = document.getElementById('repeat_password').value;
    if (firstPassword != "" && repeatPassword != "" && firstPassword === repeatPassword) {
        window.alert('Senha iguais!');
    }
    else {
        window.alert('Senhas diferentes!');
    }
}
