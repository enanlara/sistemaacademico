<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title> <?= $Title ?> </title>

    <!-- Jquery -->
    <script src="/assets/libs/jquery/jquery-1.11.3.min.js"></script>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="/assets/libs/bootstrap/css/bootstrap.min.css">
    <script src="/assets/libs/bootstrap/js/bootstrap.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="/assets/fonts/font-awesome-4.6.1/css/font-awesome.min.css">

    <!-- CSS Librarys and misc -->
    <link rel="stylesheet" href="/assets/css/animate.css">
    <link rel="stylesheet" href="/assets/css/menu.css">
    <link rel="stylesheet" href="/assets/css/style.css">

    <!-- JS -->
    <script src="/assets/js/script.js"></script>
</head>
<body>

<div id="wrapper" class="toggled">

    <div class="nav-side-menu" id="sidebar-wrapper">
        <div class="brand">Sistema Academico</div>
        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

        <div class="menu-list">

            <ul id="menu-content" class="menu-content collapse in">
                <li>
                    <a href="/modules/home/home.php">
                        <i class="fa fa-home fa-lg"></i> Inicio
                    </a>
                </li>

                <li data-toggle="collapse" data-target="#estudante" class="collapsed active">
                    <a href="#"><i class="fa fa-gift fa-lg"></i> Estudantes <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="estudante">
                    <li class="active"><a href="#">Consultar</a></li>
                    <li><a href="#">Cadastrar Novo</a></li>
                    <li><a href="#">Opcoes</a></li>
                </ul>

                <li data-toggle="collapse" data-target="#professor" class="collapsed active">
                    <a href="#"><i class="fa fa-gift fa-lg"></i> Professor <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="professor">
                    <li class="active"> <a href="/modules/professor/professor.php?modo=consulta"> Consultar </a></li>
                    <li><a href="/modules/professor/professor.php?modo=cadastro">Cadastrar Novo</a></li>
                </ul>

                <li data-toggle="collapse" data-target="#cursos" class="collapsed active">
                    <a href="#"><i class="fa fa-gift fa-lg"></i> Cursos <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="cursos">
                    <li class="active"><a href="/modules/cursos/cursos.php?modo=consulta">Consultar</a></li>
                    <li><a href="/modules/cursos/cursos.php?modo=cadastro">Cadastrar novo</a></li>
                </ul>
                <li data-toggle="collapse" data-target="#disciplina" class="collapsed active">
                    <a href="#"><i class="fa fa-gift fa-lg"></i> Disciplinas <span class="arrow"></span></a>
                </li>
                <ul class="sub-menu collapse" id="disciplina">
                    <li class="active"><a href="/modules/disciplina/disciplina.php?modo=consulta">Consultar</a></li>
                    <li><a href="/modules/disciplina/disciplina.php?modo=cadastro">Cadastrar novo</a></li>
                </ul>

                <li>
                    <a href="#">
                        <i class="fa fa-user fa-lg"></i> Perfil
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-sign-out fa-lg"></i> Sair
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div id="page-wrapper">

        <div class="container-fluid">
            <div class="row">
                <div id="botao_menu"></div>
            </div>
