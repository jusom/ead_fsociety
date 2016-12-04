<?php

/*
 * Funções gerais do sistema
 * Neste arquivo devem ser incluídas todas as funções
 * que serão usadas no escopo geral do sistema
 */

function checa_array($array, $indice) {
    if (isset($array[$indice]) && !empty($array[$indice])) {
        // Retorna o valor da chave
        return $array[$indice];
    }
    
    return null;
}//checa_array
