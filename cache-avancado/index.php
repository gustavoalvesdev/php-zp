<?php

function is_valido($cache) {
    // Data de modificação do arquivo em timestamp
    $ultima_modificacao = filemtime($cache);
    // Quantidade de segundos desde que o cache foi altterado
    $c = time() - $ultima_modificacao;

    // 10 segundos
    if ($c > 10) {
        return false;
    }

    return true;
}

$p = 'pagina';

if (isset($_GET['p']) && !empty($_GET['p']) && file_exists('paginas/' . $_GET['p'] . '.php')) {
    $p = $_GET['p'];
}

if (file_exists('caches/' . $p . '.cache') && is_valido('caches/' . $p . '.cache')) {
    require 'caches/' . $p . '.cache';
} else {
    ob_start();

    require  'paginas/' . $p . '.php';

    $html = ob_get_contents();

    ob_end_clean();

    file_put_contents('caches/' . $p . '.cache', $html);

    echo $html;
}
