<?php
get_head('Cursos');
?>

    <h1>Cursos</h1>
    <hr>
    <br><br>

<?php
echo $acao;
$ArrayCampos[] = array("name" => "curs_id", "type" => "hidden", "label" => "");
$ArrayCampos[] = array("name" => "curs_nome", "type" => "text", "label" => "Nome do curso");
?>

    <form action="" method="POST" enctype="multipart/form-data">

        <?= MontaFormulario($ArrayCampos, $Model) ?>

        <?= MontaBotoes($acao) ?>
        
    </form>

<?php
get_footer();
