<?php

function MontaFormulario($ArrayCampos, $Model)
{

    $html = '';
    foreach ($ArrayCampos as $campo) {

        switch ($campo['type']) {
            case 'text':
            case 'hidden':
                $html .= "
                            <label>{$campo['label']}</label>
                            <input type='{$campo['type']}' name='{$campo['name']}' value='{$Model->$campo['name']}' class='form-control'>";

                break;
        }

    }

    $html .= "<br>";

    return $html;
}

function MontaBotoes($acao)
{
var_dump($acao);
    switch ($acao) {
        case 'consulta':

            $botao = "<button type=\"submit\" class=\"btn btn-primary\" value=\"consulta\" name=\"acao\"> Consultar </button>";

            break;

        case 'alteracao':
            $botao = "
                        <button type=\"button\" onclick=\"window.history.back();\" class=\"btn btn-default\"> Voltar</button>
                        <button type=\"submit\" name=\"acao\" value=\"excluir\" class=\"btn btn-danger\"> Excluir </button>
                        <button type=\"submit\" name=\"acao\" value=\"alterar\" class=\"btn btn-primary\"> Salvar </button>
                    ";

            break;

        case 'cadastro':

            $botao = "
                        <button type=\"button\" onclick=\"window.history.back();\" class=\"btn btn-default\"> Voltar</button>
                        <button type=\"submit\" name=\"acao\" value=\"salvar\" class=\"btn btn-primary\"> Salvar </button>
                    ";

            break;
    }

    return $botao;
}