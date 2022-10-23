function trocarDePagina(link){
    document.location.href = link;
}

function alerta(){
    let resposta = confirm("Você deseja mesmo deletar sua conta?");
    
    if(resposta == true){
        trocarDePagina("../deletarPage/delete.php");
    }
    else{
        return;    
    }
}