<!-- alt + shift + f: para organizar o codigo;  -->
<!-- não consigo adicionar conteudo php dentro de html, porem dentro de arquivo php posso adicionar html; -->
<!-- uma tag com uma linha só não precisa do ;  -->
<!-- isset  = é um tipo de validação = se isso existe; é uma função -->
<!-- classes e funcao sao obrigatorios, eles sao importantes;
Arquivos require, ficam em primeiro lugar; -->

<!-- porque a CLASSE é importante: quando tem a mesma linha de codigo no projeto, podendo ser ultilizado a classe; 
como por exemplo a conexao com o banco, ele padroniza e deixa tudo em um arquivo só; 
deixando funçoes ali dentro, agrupar tudo e deixa funcional -->
<?php

require './classes/Filmes.php';
$titulo = 'Cinebox-Inicio';

include'./includes/header.php';
include'./includes/banner.php';


//a variavel é o nome da classe mas comeca com letra minuscula;
// variavel filmes que recebe a classe Filmes;
$filmes = new Filmes();

//variavel dados, recebe a variavel filmes, que esta dentro de listarFilmesBanco;
$dadosFilmes = $filmes->exibirListaFilmes(8);


include'./includes/filme_lista.php';

include'./includes/footer.php' 
?>