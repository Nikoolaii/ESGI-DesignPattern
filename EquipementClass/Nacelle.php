<?php

include_once 'Equipement.php';

class Nacelle extends Equipement
{
    function __construct()
    {
        echo "Nacelle créée\n";
    }

    function __toString()
    {
        return "Nacelle";
    }
}
