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


