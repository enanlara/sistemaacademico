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

        <?= MontaBotoes($acao) ?>
        <button type="button" onclick="window.history.back();" class="btn btn-default"> Voltar</button>
        <button type="submit" name="acao" value="Salvar" class="btn btn-primary"> Salvar </button>
    </form>

<?php
get_footer();
