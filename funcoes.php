<?php

/*
 * Funções gerais do sistema
 * Neste arquivo devem ser incluídas todas as funções
 * que serão usadas no escopo geral do sistema
 */

function checa_array($index, $chave) {
    if (isset($index[$chave]) && !empty($index[$chave])) {
        // Retorna o valor da chave
        return $index[$chave];
    }
    
    return null;
}

//checa_array