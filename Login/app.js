let senha = document.getElementById("senha")
let btnEntrar = document.querySelector("#btnEntrar")

senha.addEventListener('blur', habilitarBotao)

function habilitarBotao()
{
    btnEntrar.disabled = false;
    btnEntrar.style.backgroundColor = "red";
}