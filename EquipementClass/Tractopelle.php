<?php

include_once 'Equipement.php';

class Tractopelle extends Equipement
{
    function __construct()
    {
        echo "Tractopelle créé\n";
    }

    function __toString()
    {
        return "Tractopelle";
    }
}
