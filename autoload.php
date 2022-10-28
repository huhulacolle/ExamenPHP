<?php 

function inclusionAuto($nomDeClasse) {
    require_once($nomDeClasse.'.php');
} 

// s'execute à chaque instancation de class et récupère son nom
spl_autoload_register("inclusionAuto");