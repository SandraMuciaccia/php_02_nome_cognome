<?
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

    


        
    
