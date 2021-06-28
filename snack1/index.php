<?php 
    /* SNACK 1
    Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
    Olimpia Milano - Cantù | 55-60*/

$basket = [
    [
        'teamHome'=>'Lakers',
        'teamGuest'=>'Suns',
        'scoreHome'=>100,
        'scoreGuest'=>113
    ],
    [
        'teamHome'=>'Mavericks',
        'teamGuest'=>'Clippers',
        'scoreHome'=>97,
        'scoreGuest'=>104
    ],
    [
        'teamHome'=>'Nets',
        'teamGuest'=>'Bucks',
        'scoreHome'=>115,
        'scoreGuest'=>107  
    ],
    [
        'teamHome'=>'Sixers',
        'teamGuest'=>'Hawks',
        'scoreHome'=>118,
        'scoreGuest'=>102 
    ]
]; 

echo "<ul>";
    for($i=0; $i<count($basket); $i++) {
        
        echo "<li>"
        .$basket[$i]["teamHome"]." "."-"." ".$basket[$i]["teamGuest"]." "."|"." ".$basket[$i]["scoreHome"]."-".$basket[$i]["scoreGuest"].
        "</li>";
        
    };
echo "</ul>";
    
?>
