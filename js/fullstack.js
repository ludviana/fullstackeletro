function exibir_categoria(categoria){
    let elementos = document.getElementsByClassName("box_produto");
    console.log(elementos);
    
    for(let i=0; i<elementos.length ;i++){
        console.log(elementos[i].id);
        if(categoria == elementos[i].id){
            elementos[i].style = "display:block";
        } else{
            elementos[i].style = "display:none";
        }
    }
};

let exibir_todos = () => {
    let elementos = document.getElementsByClassName("box_produto");

    for(var i=0; i<elementos.length; i++){
        elementos[i].style = "display:block";
    }
};


let destaque = (imagem) =>{
    console.log(imagem);
    if(imagem.style.width == "130px"){
        imagem.style.width="260px"
        imagem.style.height = "260px";
    } else {
       imagem.style.width = "130px"
       imagem.style.height = "130px";
       
    }
};

function verifica(){
    let nome = window.document.getElementById('nome').value;
    let ende = window.document.getElementById('ende').value;
    let telef = window.document.getElementById('telef').value;

    let botao = window.document.getElementById('sucesso');

    if(nome.length > 0 && ende.length > 0 && telef.length > 0 ){
        botao.style.visibility = "visible";
        
    }
}