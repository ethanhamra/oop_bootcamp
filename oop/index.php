<?php
require('animal.php');
require('frog.php');
require('ape.php');

$sheep = new Animal("shaun");
    echo $sheep->name;


echo "<br>";
$kodok = new Frog("buduk");
$kodok->jump() ; // "hop hop"
echo "<br>";
echo $kodok->name;
echo "<br>";
$sungokong = new Ape("kera sakti");
$sungokong->yell() // "Auooo"

?>