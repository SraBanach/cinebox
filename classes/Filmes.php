<?php
// porque a CLASSE é importante: quando tem a mesma linha de codigo no projeto, podendo ser ultilizado a classe; 
//como por exemplo a conexao com o banco, ele padroniza e deixa tudo em um arquivo só; 
//deixando funçoes ali dentro, agrupar tudo e deixa funcional 
// uma classe para cada tabela do nosso banco 
// classe é um conjunto de funçoes 
//responsavel que controla tudo sobre o assunto que aqui no caso é filmes;
// a classe sempre comeca com letra maiuscula para saber que é uma classe; 
class Filmes{
//função para listar os filmes, ser declarado sempre dentro das chaves; 
//imagine classe como gavetas e a function são os itens dentro da gaveta ex: garfo, faca, colher.. dentro de uma mesma gaveta;
//como ultiliza: 
//index: sempre deixo antes do include que vai precisar dele; 
// chamar a classe: 
//nomedocomponente

//quando tem parametro sem valor ele é obrigatorio, mas se tem valor vazio ai sim pode ser opcional; 
//aqio no caso entao $limite não é obrigatorio, assim funciona mesmo sem parametros;
//posso passar parametros diferentes em paginas diferentes; 

    public function exibirListaFilmes ($limite ='') { 
        $dsn = 'mysql:dbname=db_cinebox;host=127.0.0.1';
        $user = 'root';
        $password = '';
        //auxilio para a minha condição do if
        $auxScript = '';

        $banco = new PDO($dsn, $user, $password);

        //criar as regas sempre entre o banco e o script

        //se estiver diferente de vazio ele segue essa regra aqui...
        if (!empty($limite)){ 
            //complementar o script abaixo... 
            //order by rand é para ficar de forma aleatoria as fotos
            $auxScript = " ORDER BY RAND() LIMIT {$limite}";
        }

        //. para contatenar
        $script = 'SELECT* FROM tb_filmes' .$auxScript;

        return $banco->query($script)-> fetchAll();
    }
    
    
}
