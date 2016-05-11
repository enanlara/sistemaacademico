<?php
get_head('Professores');
?>

    <hr>
    <h1>Professores</h1>
    <br><br>

<?php
$ArrayCampos[] = array("name" => "prof_id", "type" => "hidden", "label" => "");
$ArrayCampos[] = array("name" => "prof_nome", "type" => "text", "label" => "Nome do Professor");
?>

    <form action="" method="POST" enctype="multipart/form-data">

        <?= MontaFormulario($ArrayCampos, $Model) ?>

        <?= MontaBotoes($acao) ?>

    </form>

<?php
get_footer();
