<?php
get_head('Cursos');
$CursosAdo = new CursosAdo();
?>

    <h1>Cursos</h1>

    <br>
    <p>Escolha uma opção abaixo: </p>
    <br>
    <form action="" method="POST" enctype="multipart/form-data">
        <select class="form-control" name="curs_id">
            <?php
            $Lista = $CursosAdo->ListaCursos();

            echo "<option value''> Selecione uma opção abaixo.. </option>";
            foreach ($Lista as $cursos) {
                echo "<option value='{$cursos->curs_id}'> $cursos->curs_nome </option>";
            }
            ?>
        </select>

        <br>
        <input type="hidden" class="btn btn-primary" value="consulta" name="acao">
        <input type="submit" class="btn btn-primary" value="Consultar" name="consulta">
    </form>
<?php
get_footer();
