function exibir_categoria(categoria){
    let elementos = document.getElementsByClassName('box_produtos');
    console.log(elementos);
    for(let i = 0; i < elementos.length; i++){
        console.log(elementos[i].id);
        if (categoria == elementos[i].id){
            elementos[i].style = "display:inline-block";
        }else{
            elementos[i].style = "display:none";
        }
    }
}

let exibir_todos = () => {
    let elementos = document.getElementsByClassName('box_produtos');
    
    for(let i = 0; i < elementos.length; i++){
        elementos[i].style = "display:inline-block";
    }
};

let destaque = (imagem) => {
    console.log(imagem);
    if(imagem.width == 240){
        imagem.width = 120;
    }else{
        imagem.width = 240;
    }
};

function lojas(){
    let clique = document.getElementsByClassName('loja');
    confirm("Você deseja iniciar o GPS para ir a esta loja?")
}


function enviar(){
    var nome = document.getElementById("nome");
    if(nome.value != ""){
        alert("Obrigado sr(a) " + nome.value + " seus dados foram encaminhados com sucesso!" );
        nome.value = "";
        mensagem.value = "";
    } else {
        alert("Prencha todos os campos para enviar.")
    }

}
