<!-- // $titulo = 'Cinebox-filmes';
// detalhes: 
//se tiver somente codigos php eu não preciso fechar ele;
//se tiver outras coisas (html) precisa fecgar a tag;
//pasta includes tudo que consigo reutilizar
//  isset  = é um tipo de validação = se isso existe; é uma função
        // funcao para verificar se existe e se esta vazio; 
        // ! empty = diferente de vazio;
        // como se lê? existe uma variavel chamada titulo? && essa variavel titulo esta vazia? 
        // caso não existe ou estiver vazia, escreva Cinebox;
        // se eu nao sei quantas vezes vai ser eu uso o while, se não eu uso o for;  
        //pagina com o looping de filmes -->

<?php      
require './classes/Filmes.php';


include'./includes/header.php';

// dados filmes recebe o exibir lista filmes que esta no index; 
$filme = new Filmes();
$dadosFilmes = $filme->exibirlistaFilmes();


include'./includes/filme_lista.php';
include'./includes/footer.php';
