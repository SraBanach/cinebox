<?php
require './classes/Filmes.php';


include './includes/header.php';


if (isset($_GET['id']) && !empty($_GET['id'])) {
    
    include './includes/filmes_detalhe.php';
} else {
    header('location:index.php');
}

$genero = new Generos(); 
//pessoa sua tarefa é preparar todos os pedidos e colocar na janela
//ele ja esta esperando os dados generos que ja esta dentro de filmes_filtro
$dadosGeneros = $genero->consultarListaGeneros();

include_once './includes/footer.php'

?>