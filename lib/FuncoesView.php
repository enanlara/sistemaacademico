<?php

function MontaFormulario($ArrayCampos, $Model = null)
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

function MontaBotoes($modo)
{
    switch ($modo) {
        case 'consulta':

            $botao = "
        <button type=\"submit\" name=\"acao\" value=\"excluir\" id=\"BtnExcluir\" class=\"btn btn-danger\"> Excluir </button>       
        <button type=\"submit\" name=\"acao\" value=\"editar\" id=\"BtnEditar\" class=\"btn btn-primary\"> Editar </button>
        <a href='?modo=form' id='BtnNovo' class=\"btn btn-primary\"> Novo</a>
        ";

            break;

        case 'alteracao':
            $botao = "
                        <button type=\"button\" onclick=\"window.history.back();\" class=\"btn btn-default\"> Voltar</button>
                        <button type=\"submit\" name=\"acao\" value=\"excluir\" class=\"btn btn-danger\"> Excluir </button>
                        <button type=\"submit\" name=\"acao\" value=\"alterar\" class=\"btn btn-primary\"> Salvar </button>
                    ";

            break;

        case 'form':

            $botao = "
                        <button type=\"button\" onclick=\"window.history.back();\" class=\"btn btn-default\"> Voltar</button>
                        <button type=\"submit\" name=\"acao\" value=\"salvar\" class=\"btn btn-primary\"> Salvar </button>
                    ";

            break;
    }

    return $botao;
}