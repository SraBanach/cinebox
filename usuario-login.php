<?php

include './includes/header.php';

// ja que aqui chama o user_login o que eu faço aqui, vai para 
//não preciso criar o o aux login
// echo '<prev>' para melhorar a leitura do var dump
//$_server para pegar informacoes do servidor; 

// validação melhor se ele realmente esta sendo metodo post 
//echo '<pre>';
//var_dump($_SERVER);

// melhorando auxlogin do projeto vingadores; 
//se o request methdo no servidor e post nao estiver vazio faça isso:
if ($_SERVER["REQUEST_METHOD"] == 'POST' && !empty($_POST)) { 

    $usuarioForm = $_POST['usuario'];
    $senhaForm = $_POST ['senha'];

////as vezes precisa de parametro para funcionar a extensao php debug mostra o que falta se passar mouse em cima; 
    $dsn = 'mysql:dbname=db_cinebox;host=127.0.0.1';
    $user = 'root';
    $password = '';

//no php tem uma biblioteca no padrao de uma classe; semore que tiver a palavra new é pq estou fazendo uma conexao; 
//quando tivet type null não é obrigatorio ; 
//variavel banco recebe conexao com o banco ( as informacoes estao la; )
    $banco = new PDO($dsn, $user, $password);

// quando for procurar algo no banco a palavra precisa estar dentro de aspas""
// quando tem aspas duplas ele esta esperando um comando, caracteres especiais como/n 
// usamos aspas duplas para formatar texto;, ele interpreta 
// quando se usa aspas e chaves ele execulta a minha variavel
    $script = "SELECT * FROM tb_usuario WHERE usuario = '{$usuarioForm}' and senha = '{$senhaForm}'";

    $resultado = $banco->query($script)->fetch();


    // se o resultado for diferente de vazio e diferente de falso ele vai me mandar pra a pagina usuario.php senao ele vai aparecer usuario e senha nao encontrados e me enviar
    //OBS: sempre lembrar de validar duas coisas, para garantir que ele achou um usuario ali; 
    if(!empty($resultado) && $resultado != false){ 

        $selectUsuario = "SELECT * FROM tb_pessoa WHERE id = {$resultado['id_pessoa']}";
        //ler sempre a query de tras pra frente == leia esse query no meu banco 
        $dadosUsuario = $banco->query($selectUsuario)->fetch();

        //$_SESSION variavel global posso usar em quaquer lugar
        //informaçoes importantes para salvar temporariamente como uma lista compras carrinho, agendamentos; 
        //não estou consultando estou adicionando informaçoes, como se fosse no post porem ao contrario; 
        session_start(); //inicie uma sessao; 

        $_SESSION['id'] = $dadosUsuario['id_pessoa'];
        $_SESSION['nome'] = $dadosUsuario['nome'];
        $_SESSION['ano_nascimento'] = $dadosUsuario['ano_nascimento'];
        $_SESSION['telefone_1'] = $dadosUsuario['telefone_1'];

        header('location:usuario.php');

    } else { 
        echo '<script>
        alert("Usuario ou Senha não encontrados")
        window.location.replace("./usuario-login.php")
        </script>';
    }

    // variavel  globalassociativa section




}

include './includes/user_login.html';

include_once './includes/footer.php';
