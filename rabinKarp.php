<?php

/*
 * Jonnyalexbh
 * @Descripcion: rabin_karp
 */

function hash_string($str, $len) {
    $hash = '';

    $hash_table = array(
        'h' => 1,
        'e' => 2,
        'l' => 3,
        'o' => 4,
        'w' => 5,
        'r' => 6,
        'd' => 7,
    );

    for ($i = 0; $i < $len; $i++) {
        $hash .= $hash_table[$str{$i}];
    }

    return (int) $hash;
}

/*
 * Algoritmo de busqueda Rabin-Karp 
 */

function rabin_karp($texto, $buscar) {
    $logText = strlen($texto);    // obtenemos la longitud del string $texto
    $longBus = strlen($buscar);   // obtenemos la longitud del string $buscar

    $text_hash = hash_string(substr($texto, 0, $longBus), $longBus);    // substr devuelve parte de una cadena
    $buscar_hash = hash_string($buscar, $longBus);

    for ($i = 0; $i < $logText - $longBus + 1; $i++) {
        if ($text_hash == $buscar_hash) {               // si has son != comparamos desde la siguiente posicion
            return $i;
        }
        $text_hash = hash_string(substr($texto, $i, $longBus), $longBus);
    }

    return -1;
}

echo rabin_karp('hello world', 'ello');
