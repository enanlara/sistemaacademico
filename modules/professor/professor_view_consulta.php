<?php
get_head('Professor');
$ProfessorAdo = new ProfessorAdo();
?>

    <h1>Professor</h1>

    <br>
    <p>Escolha uma opção abaixo: </p>
    <br>
    <form action="" method="POST" enctype="multipart/form-data">
        <select class="form-control" name="prof_id">
            <?php
            $Lista = $ProfessorAdo->ListaProfessor();

            echo "<option value''> Selecione uma opção abaixo.. </option>";
            foreach ($Lista as $professores) {
                echo "<option value='{$professores->prof_id}'> $professores->prof_nome </option>";
            }
            ?>
        </select>

        <br>

        <?= MontaBotoes($acao) ?>
    </form>
<?php
get_footer();
