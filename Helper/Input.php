<?php 

function input(string $info): string
{
    # code...
    echo "$info :";
    $result = fgets(STDIN);
    return trim($result);



}

?>