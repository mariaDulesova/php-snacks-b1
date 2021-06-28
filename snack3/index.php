<?php 
    /*SNACK3
    Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta*/

    $arrayRandom = []; 
    while(count($arrayRandom) < 15) {
        $randomNumber = rand(1,100);
        if(!in_array($randomNumber, $arrayRandom)){
            array_push($arrayRandom, $randomNumber);
        };
    };
    echo "<ul>";
        for($i=0; $i<count($arrayRandom); $i++) {
            echo "<li>".$arrayRandom[$i]."</li>";
        };
    echo "</ul>";

    var_dump($arrayRandom);
 
?>

