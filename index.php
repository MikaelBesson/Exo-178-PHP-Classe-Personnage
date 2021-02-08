<?php

include "classes/Personnage.php";

// Creation d'une instance de la classe personnage
$perso = new personnage();

echo $perso->getNom()."<br><br>";


$perso->walkRight()."<br>";
$perso->walkLeft()."<br>";
$perso->walkTop()."<br>";
$perso->walkBottom()."<br>";

echo"<br><br>";

$perso2 = new personnage();
$perso2->setNom("Robert");
$perso2->setId("420");


echo $perso2->getNom()." : ";
echo $perso2->getId()."<br><br>";


$perso2->walkRight()."<br>";
$perso2->walkLeft()."<br>";
$perso2->walkTop()."<br>";
$perso2->walkBottom()."<br>";
