<?php

    require_once 'Clases/Television.php';
    require_once 'Clases/SmartTv.php';
    require_once 'Clases/Listador.php';

    $Tvs = [];

    $tv         = new Television("Samsung", 36);
    $tv2        = new Television("Xiaomi", 32);
    $smartTv    = new SmartTv("Smart AOC", 64, "Windows XP");

    //$Tvs[] = $tv;
    //$Tvs[] = $smartTv;

    $Tvs = [$tv, $smartTv, $tv2, "200"];

    Listador::listar($Tvs);

?>