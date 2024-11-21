// sempre quando abrir um novo arquivo js lembrar de colocar no html na ultima linha o endereçamento; 

function abrirNav(){
    // seleciona o elemento atraves do id nesse caso entao nao precisa do #; 
    const menu = document.getElementById("offcanvas");
    
    menu.style.width = "250px"

}


function fecharNav(){

    const menu = document.getElementById("offcanvas");
    
    menu.style.width = "0"


}

