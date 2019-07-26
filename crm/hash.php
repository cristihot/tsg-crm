<?php

$str = 'Parola123'; 
$parolaCriptata = password_hash($str, PASSWORD_DEFAULT);

echo "Parola originala: $str <br>";
echo "Parola criptata : $parolaCriptata <br>";

$verificareParola = password_verify('Parola123', $parolaCriptata);

if ($verificareParola == 1) {
    echo "Parola este corecta";
} else {
    echo "Parola incorecta!";
}



?>