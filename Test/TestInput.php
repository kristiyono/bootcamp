<?php 

    require_once "../Helper/Input.php";

    $name = input("nama");
    echo "Hello $name" . PHP_EOL;

    $channel = input("Bagian");
    echo "$channel Software" . PHP_EOL;

?>