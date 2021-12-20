<?php
require 'class/Personnage.php';
require 'class/Archer.php';

$merlin =  new Personnage('Merlin');
$harry =  new Personnage('Harry');
$legolas =  new Archer('Legolas');

$legolas->attaque($harry);

var_dump($merlin, $harry, $legolas);