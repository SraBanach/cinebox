<?php 
//primeiro passo é sempre informar que é uma classe, o nome na maioria das vezes é o mesmo nome do arquivo; 
//depois ja crio as funçoes; 
//lembrar de colocar o require onde esta chamando esse arquivo e tambem atribuicao de classes 
//Atribuindo funcao para funcionarios...
//atribuição de classe: 
//$variavel = new NomeClasse (); 
//



class Generos { 
    //variavel usar sempre que precisa; 
    public $conexaoBanco;


    //toda vez que eu chamar qualquer funcao abaixo, ele vai fazer o construct
    //construi para o site todo.
    //criar uma variavel global e posso ultilizar ela durante todo o meu site. 
    public function __construct(){

        $dsn = 'mysql:dbname=db_cinebox;host=127.0.0.1';
        $user = 'root';
        $password = '';

        //conexao com o banco, se estiver como variavel ele cria um novo por estar dentro de uma funcao.
        //então para conectar a variavel public acima ele precisa do this; 
        // this para avisar de onde esta vindo a conexao com o banco
        $this->conexaoBanco = new PDO($dsn, $user, $password);
    }

    //vai consultar todos os generos
    public function consultarListaGeneros(){ 
        //script que é que vai fazer
        $script = 'SELECT * FROM tb_generos';

        //estou consultando no banco e o resultado ele esta me retornando; 
        //lembrar de sempre ler de tars pra frente é mais facil; 
        return $this->conexaoBanco->query($script)->fetchAll();
    }


    //vai consultar genero a partir do id, aqui ja precisa de um id
    public function consultarGeneroByIdFilme($id_filme){

        $script = "SELECT * FROM tb_generos 
                    INNER JOIN tb_filme_genero
                    
                    ON  tb_filme_genero.genero_id = tb_generos.id
                    -- explicando WHERE = onde na tabela filme genero, tem que ser igual ao id filme where é para selecionar o filme que eu quero; 
                    WHERE tb_filme_genero.filme_id = {$id_filme}";

        //estou consultando no banco e o resultado ele esta me retornando; 
        //lembrar de sempre ler de tars pra frente é mais facil;
        return $this->conexaoBanco->query($script)->fetchAll();

    }
}