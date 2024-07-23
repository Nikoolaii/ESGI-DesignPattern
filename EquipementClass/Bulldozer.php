<?php

include_once 'Equipement.php';

class Bulldozer extends Equipement
{
    function __construct()
    {
        echo "Bulldozer créé\n";
    }

    function __toString()
    {
        return "Bulldozer";
    }
}
