<?php

include_once 'Equipement.php';

class Rouleau_compresseur extends Equipement
{
    function __construct()
    {
        echo "Rouleau compresseur créé\n";
    }

    function __toString()
    {
        return "Rouleau compresseur";
    }
}
