<?php
get_head('Disciplina');
$DisciplinaAdo = new DisciplinaAdo();
?>

    <h1>Disciplina</h1>

    <br>
    <p>Escolha uma opção abaixo: </p>
    <br>
    <form action="" method="POST" enctype="multipart/form-data">
        <select class="form-control" name="disc_id">
            <?php
            $Lista = $DisciplinaAdo->ListaDisciplina();

            echo "<option value''> Selecione uma opção abaixo.. </option>";
            foreach ($Lista as $disciplinas) {
                echo "<option value='{$disciplinas->disc_id}'> $disciplinas->disc_nome </option>";
            }
            ?>
        </select>

        <br>

        <?= MontaBotoes($acao) ?>
    </form>
<?php
get_footer();
