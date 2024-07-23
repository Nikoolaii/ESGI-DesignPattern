<?php

include_once 'EquipementClass/Pelleteuse.php';
include_once 'EquipementClass/Tractopelle.php';
include_once 'EquipementClass/Nacelle.php';
include_once 'EquipementClass/Bulldozer.php';
include_once 'EquipementClass/Rouleau_compresseur.php';

class EquipementFactory
{
    public static function createEquipement(string $type): Equipement
    {
        switch ($type) {
            case 'Pelleteuse':
                return new Pelleteuse();
            case 'Tractoupelle':
                return new Tractopelle();
            case 'Nacelle':
                return new Nacelle();
            case 'Bulldozer':
                return new Bulldozer();
            case 'Rouleau compresseur':
                return new Rouleau_compresseur();
            default:
                throw new Exception('Equipement inconnu');
        }
    }
}
