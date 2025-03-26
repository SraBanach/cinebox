<!-- Filme lista sempre coloco filme _ o que aquele include esta fazendo, para facilitar na organização. 
filme lista nesse caso serve para listar os cards que estao no banco;  -->


<section id="filmes_recomendados">
    <h2 class="titulo"> Filmes </h2>
    <main class="container">
        <div class="row">
            <!-- Col - 3 é para ocupar 3 colunas  -->

        <!-- //for é um laço repetição 
        //foreach para passar de linha a  linha  
        // for ($i=0; $i < 8 ; $i++)  -->
            <!-- dadosFilmes esta no index, foi criado la -->
            <?php foreach ($dadosFilmes as $value) {  
            include './includes/filme_card.php';
        } ?>
        </div>
    </main>
</section>