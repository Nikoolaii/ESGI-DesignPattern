<?php

include_once 'Equipement.php';

class Pelleteuse extends Equipement
{
    function __construct()
    {
        echo "Pelleteuse créée\n";
    }

    function __toString()
    {
        return "Pelleteuse";
    }
}
