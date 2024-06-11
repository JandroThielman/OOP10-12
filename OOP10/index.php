<?php

    declare(strict_types=1);

    require_once "OOP10.php";

    $music1 = new Music('Salsa', 'Klassiek', 3);
    $music2 = new Music('Bach', 'Oud', 3);

    echo $music1->getName();
    echo "<br>";
    echo $music2->getName();
    echo "<br>";

    var_dump($music1);
    echo "<br>";
    var_dump($music2);

?>