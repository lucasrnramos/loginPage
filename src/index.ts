function passwordValidate(password:any, repeat_password:any)
{
    let firstPassword = (<HTMLInputElement>document.getElementById('password')).value;
    let repeatPassword = (<HTMLInputElement>document.getElementById('repeat_password')).value;
    if (firstPassword != "" && repeatPassword != "" && firstPassword === repeatPassword)
    {
    	window.alert('Senha iguais!');
    }
    else
    {
      	window.alert('Senhas diferentes!');
    }
}