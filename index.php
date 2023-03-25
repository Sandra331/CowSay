<?php
require 'vendor/autoload.php';

use CowSay\Cow;

$bessie = new  Cow('Hello, Farm!');

// stocke la sortie dans une variable
//$output = $bessie->say('Hello, Farm!');
//echo $sortie;

// ou juste faire écho à l'objet pour une sortie directe
echo $bessie;
