<?php

/**
 * 1. Générez un nombre aléatoire compris entre 0 et 50, affichez le avec echo dans un nouveau <div>.
 */

// TODO Votre code ici.
$random1 = rand(0,50);
echo "<div>".$random1."</div>";

/**
 * 2. Générez un nombre aléatoire compris entre 50 et getrandmax, affichez le résultat dans un nouveau <p>
 */

// TODO Votre code ici.
$random2 = rand(50, getrandmax());
echo "<p>".$random2."</p>";

/**
 * 3. Générez un nombre aléatoire compris entre 0 et 100
 * ==> si le nombre est inférieur ou égal à 50, affichez : vous avez gagné ( dans un nouveau <p> )
 * ==> si ce n'est pas le cas, affichez : vous avez perdu ( dans un nouveau <p> )
 */

// TODO Votre code ici.
$random3 = rand(0, 100);
echo $random3;

if($random3 < 50){
    echo "<p>vous avez gagné</p>";
}
else {
    echo "<p>vous avez perdu</p>";
}

/**
 * 4. Créez une fonction qui génère un nombre aléatoire compris entre $max et $min ( paramètres ).
 * ==> Si le nombre est compris entre $max et $max -100, regénérez un nouveau nombre avec un appel récursif.
 * ==> Si ce n'est pas le cas, retournez tout simplement le nombre généré.
 */

// TODO Votre code ici.
function alea($max, $min) {
    $test = rand($min,$max);

    if($test > $max - 100){

        alea($max,$min);
    }
    else{

        return $test;
    }
};

alea(200, 0);
