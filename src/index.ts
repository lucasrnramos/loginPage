function passwordValidate(password:string | number, repeat_password:string | number)
{
    let firstPassword = (<HTMLInputElement>document.getElementById('password')).value;
    let repeatPassword = (<HTMLInputElement>document.getElementById('repeat_password')).value;

    if (firstPassword != "" && repeatPassword != "" && firstPassword === repeatPassword)
    {
    	window.alert('Senha iguais!');
    } else {
      	window.alert('Senhas diferentes!');
    }
}