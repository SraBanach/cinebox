<!-- Filme lista sempre coloco filme _ o que aquele include esta fazendo, para facilitar na organização. 
filme lista nesse caso serve para listar os cards que estao no banco;  -->


<section id="filmes_recomendados">
    <h2 class="titulo"> Filmes </h2>
    <main class="container">
        <div class="row">
            <!-- Col - 3 é para ocupar 3 colunas  -->
        <?php  for ($i=0; $i < 8 ; $i++) {        
            include './includes/filme_card.php';
        }?>
        </div>
    </main>
</section>