<?php
    require './classes/Filmes.php';
    include './includes/header.php';
    // verificação se ele esta ou nao logado; 
    // se o meu server esta com o metodo get e diferente vazio e o que esta dentro dele igual a true ele vai sair da sessao e me mandar para o index; 
    if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET) && $_GET['sair'] == 'true') { 
        session_destroy();
        header('location:index.php');
    }
    // se ele NAO existe e se ele esta vazio ou seja se a pessoa sair ele me manda para a pagina login novamente; 
    if ( !isset($_SESSION['id_pessoa']) && empty($_SESSION )) { 
        header ('location:usuario-login.php');
    }

    $filme = new Filmes();
    //aqui pode ser qualquer nome de variavel o importante é que ela recebe filme e a funcao exibirListaFilmes colocar dentro de user_lista_filmes.php;
    $resultadoConsultaFilmes = $filme->exibirListaFilmes();



?>
<section id="usuario-principal">
    <main class="container usuario-principal">
        <?php
        include_once './includes/user_header.php';
        include_once './includes/user_lista_filmes.php';

        ?>
    </main>
</section>



<?php

include './includes/footer.php';
