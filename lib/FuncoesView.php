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

function MontaBotoes($acao) {

    switch ($acao) {
        case 'consulta':

            break;

        case 'alteracao':
            
            break;

        case 'cadastro':

            break;
    }
}