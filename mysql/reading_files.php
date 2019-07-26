<?php

$fileName = "example.txt";


if($handleError = fopen($fileName, 'r')) {
    echo $content = fread($handleError,filesize($fileName));
} else {
    echo "The files could not be written!";
}



fclose($handleError);


?>