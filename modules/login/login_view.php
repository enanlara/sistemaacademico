<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <script src="/assets/libs/jquery/jquery-1.11.3.min.js"></script>

        <link rel="stylesheet" href="/assets/libs/bootstrap/css/bootstrap.min.css">
        <script src="/assets/libs/bootstrap/js/bootstrap.min.js"></script>


        <link rel="stylesheet" href="/assets/css/login.css">
    </head>
    <body>
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <center>
                <img src="/assets/img/SistemaAcademico.png">
                <br>
                <h4>Para acessar, efetue seu login abaixo: </h4>
            </center>

            <div class="container-fluid" style="margin-top: 100px">
                <form action="?acao=login" method="POST" enctype="multpart/formdata">
                    <div class="form-group">
                        <label for="email">Email: </label>
                        <input type="email" name="email" class="form-control" autofocus="" placeholder="email@email.com">
                    </div>
                    <div class="form-group">
                        <label for="senha">Senha: </label>
                        <input type="password" name="senha" class="form-control" placeholder="****">
                    </div>
                    <br>
                    <center>
                        <input type="submit" class="btn btn-primary" value="Entrar" style="width: 100px">
                    </center>
                </form>
            </div>
        </div>
        <div class="col-lg-4"></div>

    </body>
</html>
