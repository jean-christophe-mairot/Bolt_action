<?php

// ********************************un petit jeu******************
// faire un jet de dés nombre de réussite 3+
// nombre de touche pour le nombre de dés de dommage = dés depassant le 3+ 
// fait un jet en fonction du niv de l'adversaire
// nombre dégats à soustraire des point de vie
// test si pv =<0 le personnage est mort
// **************************************************************

// jet de d6
// $d6 = rand (1, 6);
echo '<br>';

// var_dump($d6);

// nombre de dés 
$nbrD6=5;
// pour conter le nombre de dés ok
$counterD6Hit=0;
//tableau difficulté pour les touches dégats
$experience=[
    'bleu'=> [2],
    'regulier'=>[3],
    'experimenter'=> [4],
    'elite'=>[5]
];
//boucle lancé de dés
for ($i=0; $i <$nbrD6 ; $i++) { 
   //si jet sup à 3+
   $d6 = rand (1, 6);
    if ($d6>3){
    echo 'une touche ok'. $d6 . '<br>'; 
    $counterD6Hit++ ;
    }
}
echo '<pre>';
var_dump($counterD6Hit);
echo '<pre>';
var_dump($experience);


// boucle lancé de dés pour le nombre de dégats
// pour l'instant c callé sur 3 mais par la suite le faire sur le niveau d'experience de l'unité
for ($i=0; $i <$counterD6Hit ; $i++) { 
    $d6 = rand (1, 6);
    if ($d6>3){
        echo 'une touche ok'. $d6 . '<br>'; 
        $counterD6Hit++ ;
        }
}