<?php

$fileName = "example.txt";


if($handleError = fopen($fileName, 'w')) {
    fwrite($handleError, "This is from PHP");
} else {
    echo "The files could not be written!";
}



fclose($handleError);


?>