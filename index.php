<?php

require_once 'Magicien.php';
require_once 'RoiSorcier.php';
require_once 'Combat.php';

$gandalf = new Magicien("Gandalf", 20);
$sauron = new RoiSorcier("Sauron", 30);

$combat = new Combat();
$combat->demarrer_combat($gandalf, $sauron);
