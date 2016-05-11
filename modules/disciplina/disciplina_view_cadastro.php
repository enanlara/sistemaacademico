<?php
get_head('Disciplinas');
?>

    <hr>
    <h1>Disciplinas</h1>
    <br><br>

<?php
$ArrayCampos[] = array("name" => "disc_id", "type" => "hidden", "label" => "");
$ArrayCampos[] = array("name" => "disc_nome", "type" => "text", "label" => "Nome do Disciplina");
$ArrayCampos[] = array("name" => "disc_ementa", "type" => "text", "label" => "Ementa da Disciplina");
?>

    <form action="" method="POST" enctype="multipart/form-data">

        <?= MontaFormulario($ArrayCampos, $Model) ?>

        <?= MontaBotoes($acao) ?>

    </form>

<?php
get_footer();
