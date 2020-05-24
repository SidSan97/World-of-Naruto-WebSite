//Script que torna inputs de senha da página de cadastro avermelhados em caso de senha incompativeis
const fieldMessage = document.querySelector("#senha");
const fieldMessage2 = document.querySelector("#senha2");

if(fieldMessage !== fieldMessage2) 
{
    fieldMessage.classList.add("alert-input");
    fieldMessage2.classList.add("alert-input");
}  