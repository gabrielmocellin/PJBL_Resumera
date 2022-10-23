function trocarDePagina(link){
    document.location.href = link;
}

function confirm_delete(){
    let resposta = confirm("Você deseja mesmo deletar sua conta?");
    
    if(resposta == true){
        trocarDePagina("../deletarPage/delete_exe.php");
    }
    else{
        return;    
    }
}

function logar() {

    var login = document.getElementById('email').value;
    var senha = document.getElementById('senha').value;

}