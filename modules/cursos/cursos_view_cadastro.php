<?php
get_head('Cursos');
?>

    <h1>Cursos</h1>
    <hr>
    <br><br>

<?php
$ArrayCampos[] = array("name" => "curs_nome", "type" => "text", "label" => "Nome do curso");
$ArrayCampos[] = array("name" => "curs_id", "type" => "hidden", "label" => "");
?>

    <form action="" method="POST" enctype="multipart/form-data">

        <?= MontaFormulario($ArrayCampos, $Model) ?>

        <input type="hidden" class="btn btn-primary" value="cadastrar" name="acao">

        <button type="button" onclick="window.history.back();" class="btn btn-default"> Voltar</button>
        <input type="submit" name="btnSalvar" value="Salvar" class="btn btn-primary">
    </form>

<?php
get_footer();
