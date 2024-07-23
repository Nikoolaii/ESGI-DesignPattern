<?php

include_once 'EquipementFactory.php';
include_once 'BoxMultiton.php';

$box1 = BoxMultiton::getInstance(1);

$box1->addEquipment(EquipementFactory::createEquipement('Pelleteuse'));
$box1->addEquipment(EquipementFactory::createEquipement('Tractoupelle'));
$box1->addEquipment(EquipementFactory::createEquipement('Nacelle'));
$box1->addEquipment(EquipementFactory::createEquipement('Bulldozer'));
$box1->addEquipment(EquipementFactory::createEquipement('Rouleau compresseur'));

$box1->addEquipment(EquipementFactory::createEquipement('Pelleteuse'));
$box1->addEquipment(EquipementFactory::createEquipement('Tractoupelle'));
$box1->addEquipment(EquipementFactory::createEquipement('Nacelle'));
$box1->addEquipment(EquipementFactory::createEquipement('Bulldozer'));
$box1->addEquipment(EquipementFactory::createEquipement('Bulldozer'));
$box1->addEquipment(EquipementFactory::createEquipement('Bulldozer'));
$box1->addEquipment(EquipementFactory::createEquipement('Bulldozer'));
$box1->addEquipment(EquipementFactory::createEquipement('Bulldozer'));
$box1->addEquipment(EquipementFactory::createEquipement('Bulldozer'));
$box1->addEquipment(EquipementFactory::createEquipement('Bulldozer'));
$box1->addEquipment(EquipementFactory::createEquipement('Bulldozer'));
$box1->addEquipment(EquipementFactory::createEquipement('Bulldozer'));
$box1->addEquipment(EquipementFactory::createEquipement('Pelleteuse'));

echo "\n";

foreach (BoxMultiton::getInstances() as $box) {
    echo $box;
    echo "\n";
}
