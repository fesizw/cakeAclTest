<?php

function mask($value, $mascara) {
    $mascarado = '';
    $char = 0;
    for ($i = 0; $i <= strlen($mascara) - 1; $i++) {
        if ($mascara[$i] == '#') {
            if (isset($value[$char]))
                $mascarado .= $value[$char++];
        } else {
            if (isset($mascara[$i]))
                $mascarado .= $mascara[$i];
        }
    }
    return $mascarado;
}
