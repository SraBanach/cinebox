
<div class="col-lg-<?= isset($qntd) ? $qntd : 3 ?> col-md6 col-sm-12">
    <a href="./includes/filmes_detalhe.php"> 
    <figure>
                        <!-- se começa primeiro a tag  figure para prossegir com o figcapture  -->
        <img src="./assets/img/poster/<?php echo $value['poster'] ?>"
                            alt="Poster do filme Avatar o caminho da agua" class="foto-produto">
            <figcaption>
                            <!-- conteudo do card colocar o que esta logo abaixo da foto; -->
                            <!-- abre a tag php e trazer o valor de nome que foi guardado ali no nome filmes -->
                <h4><?php echo $value['nome'] ?></h4>
                            <!-- o span é o elemento de linha, adequado para aplicar estilos aocontrario da div que é um elemento em bloco  -->
                <span class="preco"><?php echo $value['valor_ingresso'] ?></span>
                <p class="descricao"><?php echo $value['descricao'] ?></p>
            </figcaption>
            <span class="genero">
                <?php foreach ($generosFilmes as $value2) { ?>

                <label style="background-color: #<?= $value2['cor']?> ;"> <?= $value2['nome']?> </label>

                <?php } ?>
            </span>
    </figure>
    </a>
</div>
