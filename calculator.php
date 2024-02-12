<?php 

echo "Plus of min? (+, -)\n";

$pm = readline();

if ($pm == '-') { 
    echo "Min dus, eerste getal?\n";
    $eerstegetal = readline();

    echo "Oke, je eerste getal is " . $eerstegetal . ", wat is je tweede getal?\n";
    $tweedegetal = readline();

    $antwoord = $eerstegetal - $tweedegetal;
    echo $eerstegetal . " - " . $tweedegetal . " = " . $antwoord;
} elseif ($pm == '+') { 
    echo "Plus dus, eerste getal?\n";
    $eerstegetal = readline();

    echo "Oke, je eerste getal is " . $eerstegetal . ", wat is je tweede getal?\n";
    $tweedegetal = readline();

    $antwoord = $eerstegetal + $tweedegetal;
    echo $eerstegetal . " + " . $tweedegetal . " = " . $antwoord;
} else {
    echo "Dat is geen plus of min ";
}

?> 