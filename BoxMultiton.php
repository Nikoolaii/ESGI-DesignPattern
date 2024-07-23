<?php

class BoxMultiton
{
    private static $instances = [];
    private $equipements = [];
    private $id;

    private function __construct($id)
    {
        $this->id = $id;
    }

    public static function getInstances()
    {
        return self::$instances;
    }

    public static function getInstance($id)
    {
        if (!isset(self::$instances[$id])) {
            self::$instances[$id] = new BoxMultiton($id);
        }
        return self::$instances[$id];
    }

    public function addEquipment(Equipement $equipement)
    {
        $typeAvailable = self::checkIfBoxHaveAllTypes($this->equipements);
        if (count($typeAvailable) < 8 - count($this->equipements) || in_array(get_class($equipement), $typeAvailable)) {
            $this->equipements[] = $equipement;
        } else {
            $nextBox = self::getInstance($this->id + 1);
            $nextBox->addEquipment($equipement);
        }
    }

    public static function checkIfBoxHaveAllTypes($box)
    {
        $types = ['Pelleteuse', 'Tractopelle', 'Nacelle', 'Bulldozer', 'Rouleau_compresseur'];
        foreach ($types as $type) {
            foreach ($box as $equipement) {
                if ($equipement instanceof $type) {
                    $types = array_diff($types, [$type]);
                }
            }
        }
        return $types;
    }

    public function __toString()
    {
        $str = "Box n°" . $this->id . " : \n";
        foreach ($this->equipements as $equipement) {
            $str .= $equipement . "\n";
        }
        return $str;
    }
}
