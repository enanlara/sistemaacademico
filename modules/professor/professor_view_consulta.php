<?php
get_head('Professor');
$ProfessorAdo = new ProfessorAdo();
?>
    <script>
        $(document).ready(function () {
            $("#responsavel").click(function () {
                var id = $("select").val();

                if (id == '') {
                    alert("Escolha um professor.");
                    return;
                }

                $("form").attr("action", "?modo=responsavel&id=" + id);
            })
        })

    </script>

    <h1>Professor</h1>

    <br>
    <p>Escolha uma opção abaixo: </p>
    <br>
    <form action="" method="POST" enctype="multipart/form-data">
        <select class="form-control" name="prof_id">
            <option value
            ''> Selecione um professor.. </option>
            <?php
            $Lista = $ProfessorAdo->ListaProfessor();

            foreach ($Lista as $professores) {
                echo "<option value='{$professores->prof_id}'> $professores->prof_nome </option>";
            }
            ?>
        </select>

        <br>

        <?= MontaBotoes($modo) ?>
        <button type="submit" name="acao" value="adicionar_disc" id="responsavel" class="btn btn-primary"> Adicionar
            disciplinas
        </button>

    </form>
<?php
get_footer();
