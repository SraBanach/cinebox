let indexSlide = 1;

function showSlide (index){ 
    // cont documento que nao pode ser alterado, é prioritario
    const carrossel = document.querySelector ('.carrossel')
    // length conta quantas imagens tem ali dentro 
    const totalSlides = document.querySelectorAll('.carrossel img').length

if (index >= totalSlides){ 
    indexSlide = 0
} 
else if (index < 0) {
    indexSlide = totalSlides -1
}
else { 
    indexSlide = index
}

        // offset = local onde eu estou
    const offset = -indexSlide*100
    carrossel.style.transform = `translateX(${offset}%)`
}


function nextSlide(){
    indexSlide = indexSlide + 1 
    showSlide(indexSlide)
}

function prevSlide(){
    indexSlide = indexSlide - 1 
    showSlide(indexSlide)
}


// funcao anonima, para chamar outra funcao; O set interval pede para ser uma funcao 
setInterval(()=>{
    nextSlide()
},2000)


