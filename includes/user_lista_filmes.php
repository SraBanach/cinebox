<!-- 

//Parametros
////as vezes precisa de parametro para funcionar a extensao php debug mostra o que falta se passar mouse em cima; 
// codigo...$dsn = 'mysql:dbname=db_cinebox;host=127.0.0.1';
// codigo...$user = 'root';
// codigo...$password = '';

//no php tem uma biblioteca no padrao de uma classe; semore que tiver a palavra new é pq estou fazendo uma conexao; 
//quando tivet type null não é obrigatorio ; 
//variavel banco recebe conexao com o banco ( as informacoes estao la; )
// codigo...$banco = new PDO($dsn, $user, $password);

//variavel sempre tem $ 
//variavel select, o que eu quero que liste  
// codigo... $select = 'SELECT * FROM tb_filmes';

//comando para executar, para rodar; 
//varivel resultado com a junção de banco com select; 
//fetchAll para buscar todas as informaçoes; 
// codigo... $resultado = $banco->query($select)->fetchAll();

//para organizar o arquivo abaixo, sempre colocar antes do var_dump;
//somente para eu ver, nao no projeto; 
//echo '<pre>';

//comando echo apenas exibe o resultado de tudo; 
//var_dump ele faz um debug da variavel, lembrar de colocar (), mostra tipo de elemento; mas aparece tudo sem organizar, tudo confuso; 
//var_dump($resultado); -->

<!-- //nao preciso conectar com o banco nessa pagina, porque ele ja esta sendo conectado no resultadoConsultaFilmes : que tem o exibirListaFilmes funcao na classe filmes que conecta com o banco;  -->

<?php foreach ($resultadoConsultaFilmes as $value) { ?>
    <div class="row desc-filme">

        <div class="col-12 col-lg-2 col-sm-12 col-md-12 text-center">
            <img src="./assets/img/poster/<?= $value['poster']?>" alt="poster" class="desc-foto">
        </div>

        <div class="col-12 col-lg-8 col-sm-12 col-md-12 mt-3">
            <h3 class="title"><?= $value['nome'] ?></h3>
            <p class="desc-descricao">
            <?= $value['descricao'] ?>
        </div>

        <div class="col-12 col-lg-2 col-sm-12 col-md-12 desc-btn p-3">
            <a href="#" class="btn btn-primary">
                <i class="bi bi-pencil-square"></i>
                Editar
            </a>
            <a href="#" class="btn btn-danger">
                <i class="bi bi-trash-fill"></i>
                Excluir
            </a>
        </div>

    </div>
<?php } ?>