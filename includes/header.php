<?php session_start ();?>



<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="pt-br">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php
        // funcao para verificar se existe e se esta vazio; 
        // ! empty = diferente de vazio;
        // como se lê? existe uma variavel chamada titulo? && essa variavel titulo esta vazia? 
        // caso não existe ou estiver vazia, escreva Cinebox;

        if (isset($titulo) && !empty($titulo)){
            echo $titulo;
        } else { 
            echo 'Cinebox';
        }
        
        ?>

    </title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="./assets/css/style.css">
    <link rel="stylesheet" href="./assets/css/carrossel.css">
    <link rel="stylesheet" href="./assets/css/filmes.css">
    <link rel="stylesheet" href="./assets/css/usuario.css">
    <link rel="stylesheet" href="./assets/css/login.css">
    <link rel="stylesheet" href="./assets/css/detalhes.css">
    <link rel="stylesheet" href="./assets/css/filtro.css">

</head>

<body>
    <header>
        <nav class="menu-perfil">
            <a href="#" class="logo">
                <h1>Cine box</h1>
            </a>
            <ul class="menu">
                <li><a href="./index.php">Inicio</a></li>
                <li><a href="./listarfilmes.php">filmes</a></li>
                <li><a href="./sobre.php">Sobre</a></li>
            </ul>

            <ul class="menu-icones">
                <li><a href="#"><i class="bi bi-search"></i></a></li>
                <li><a href="#"><i class="bi bi-heart"></i></a></li>
                <li><a href="#"><i class="bi bi-cart"></i></a></li>
                <li><a href="./usuario.php"><i class="bi bi-person-circle"></i></a></li>
            </ul>
            <!-- menu suspenso que vai ficar invisivel;  -->
            <!-- o botao ficou de fora pq ele sempre vai ficar aparecendo -->
            <!-- onclick = quando eu clicar no botao, elevai chamar a funcao de abrir  -->
            <button class="menu-oculto" onclick="javascript:abrirNav()">
                <i class="bi bi-list"></i>
            </button>
            <!-- a div vai ser todo o menu escondido -->
            <div id="offcanvas" class="menu-oculto">
                <!-- //onclick significa quando eu clicar ele vai chamar a minha funcao de fechar; -->
                <button class="fechar" onclick="javascript:fecharNav()">
                    <i class="bi bi-x"></i>
                </button>

                <a href="index.php">Inicio</a>
                <a href="listarfilmes.php">Filmes</a>
                <a href="sobre.php">Sobre</a>
            </div>
        </nav>
    </header>