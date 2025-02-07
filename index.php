<!-- alt + shift + f: para organizar o codigo;  -->
<!-- não consigo adicionar conteudo php dentro de html, porem dentro de arquivo php posso adicionar html; -->
<!-- uma tag com uma linha só não precisa do ;  -->
<!-- isset  = é um tipo de validação = se isso existe; é uma função -->
<?php 
$titulo = 'Cinebox-Inicio';
include'./includes/header.php';
include'./includes/banner.php';
?>

<section id="filmes_recomendados">
    <h2 class="titulo"> Filmes </h2>
    <main class="container">
        <div class="row">
            <!-- Col - 3 é para ocupar 3 colunas  -->
        <?php  for ($i=0; $i < 8 ; $i++) {?>        
            <div class="col col-3">
                <figure>
                    <!-- comeca com figure e logo depois coloca a imagem utilizada e depois comenta em figcapition -->
                    <img src="./assets/img/poster/avatar-o-caminho-da-agua.png"
                        alt="Poster do filme Avatar o caminho da agua" class="foto-produto">
                    <figcaption>
                        <!-- conteudo do card colocar o que esta logo abaixo da foto; -->
                        <h4>Avatar o caminho da agua</h4>
                        <!-- Span é algo generico para textos como se fosse uma div  -->
                        <span class="preco">R$15,90</span>
                        <p class="descricao">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                            aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                            pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                            deserunt mollit anim id est laborum."</p>
                    </figcaption>
                    <span class="genero">
                        <label style="background-color: #070373;">Fantasia</label>
                        <label style="background-color: #580259;">Drama</label>
                        <label style="background-color: #D966BA;">Ficção</label>
                    </span>
                </figure>
            </div>
            <?php } ?>
        </div>
    </main>
</section>
<?php 
$titulo = 'Cinebox-Inicio';
include'./includes/footer.php' 
?>