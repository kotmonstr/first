<?php

echo "Show export xml as getlist:";

if (file_exists('import.xml')) {
    $xml = simplexml_load_file('import.xml');
 
    foreach($xml as $ObjectImport){
        echo$xml->Классификатор ->Ид.'<br>';
   }
} else {
    exit('Failed to open import.xml');
    
    
}


