<?php

$fileName = "testfile.txt";

if(unlink(delete($fileName))) {
    echo "File $fileName was deleted!";
} else {
    echo "Error on file deletion!!";
}


?>