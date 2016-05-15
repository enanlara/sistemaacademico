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
            <option value''> Selecione um professor.. </option>
            <?php
            $Lista = $ProfessorAdo->ListaProfessor();

            foreach ($Lista as $professores) {
                echo "<option value='{$professores->prof_id}'> $professores->prof_nome </option>";
            }
            ?>
        </select>

        <br>

        <button type="button" onclick="window.history.back();" class="btn btn-default"> Voltar</button>
        <button type="submit" name="acao" value="editar" class="btn btn-primary"> Editar </button>
        <button type="submit" name="acao" value="adicionar_disc" class="btn btn-primary"> Adicionar disciplinas </button>

    </form>
<?php
get_footer();
