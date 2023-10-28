<?php

// - Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere


//     $users = [ 
//       ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'], 
//     ];


// - Pushate su Github chiamando la repository php_02_nome_cognome. Integra anche gli altri esercizi e poi pusha tutto

$users = [ 
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'M'], 
    ['name' => 'Mario', 'surname' => 'Rossi', 'gender' => 'NB'],
    ['name' => 'Maria', 'surname' => 'Rossi', 'gender' => 'F'],
];

foreach ($users as $user) {
    $saluto = 'Buongiorno';

    if ($user['gender'] == 'M') {
        $saluto .= ' Sig.';
    } elseif ($user['gender'] == 'F') {
        $saluto .= ' Sig.ra';
    } elseif ($user['gender'] == 'NB') {
        $saluto .= ' ';
    }

    $saluto .= ' ' . $user['name'] . ' ' . $user['surname'];
    echo $saluto . "\n"; 
}


// Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array

    $Array = [4, 15, 2, 17, 8, 11];

    print_r($Array);

    $media = 0;
    $somma = 0;
    $contatore = 0;  

    foreach ($Array as $numero) {
        if ($numero % 2 === 0) {
            $somma += $numero;
            $contatore++;
        }
    }

    if ($contatore > 0) {  
        $media = $somma / $contatore;
    } else {  
        $media = 0;
    }

    var_dump($media);


