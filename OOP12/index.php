<?php

    declare(strict_types=1);

    require_once "OOP12.php";
    require_once "ListenList.php";

    $kees = new ListenList();

    $music1 = new Music('Bach', 'Klassiek', 3);
    $music2 = new Music('ABC', 'House', 2);
    $music3 = new Music('AC DC', 'Rock', 300);

    $kees->addMusic($music1);
    $kees->addMusic($music2);
    $kees->addMusic($music3);

    var_dump($kees);

    echo "<br>";
    echo $music1->getName($music1);
    echo "<br>";
    echo $music2->getName($music2);
    echo "<br>";
    echo $music3->getName($music3);

?>