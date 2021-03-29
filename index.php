<?php

    require 'Voiture.php';

    $br = "</br >";
    $car = new Voiture(4, 'blue', 'gasoil', 5);

echo $car->forward();
echo $br;
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $br;
echo $car->brake();
echo $br;
echo '<br> Vitesse de la voiture : ' . $car->getCurrentSpeed() . ' km/h' . '<br>';
echo $br;
echo $car->brake();
echo $br;
