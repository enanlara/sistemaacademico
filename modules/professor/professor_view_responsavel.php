<?php
get_head('Professores');
?>

    <hr>
    <h1>Professores</h1>
    <br><br>
    <?= $Model->prof_nome ?>

<?php

$ArrayCampos[] = array("name" => "prof_id", "type" => "hidden", "label" => "");
$ArrayCampos[] = array("name" => "prof_disc", "type" => "checkbox", "label" => "Nome do Professor");
?>

    <form action="" method="POST" enctype="multipart/form-data">

        <?= MontaFormulario($ArrayCampos, $Model) ?>


        <div class="checkbox">
            <label><input type="checkbox" value="" name="prof_disc[]" value="matematica ">Matematica</label>
        </div>

        <button type="submit" name="acao" value="adicionar_disc" class="btn btn-primary"> Adicionar </button>

    </form>

<?php
get_footer();
