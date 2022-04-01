<?php

function loadClass($classe) {
  require_once __DIR__.'/../Classes/'.
  $classe . '.php'; 
}

spl_autoload_register('loadClass'); 
// Autoload pour qu'elle soit appelée dès qu'on instancie une classe non déclarée.