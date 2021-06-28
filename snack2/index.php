<?php 
    /* SNACK 2
    Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”*/




    if(empty($_GET["name"]) || empty($_GET["mail"]) || empty($_GET["age"])) {
        echo "<h1>Provide your name, email and age</h1>";

    } else {
        $name=$_GET["name"]; 
        $mail=$_GET["mail"];
        $age=$_GET["age"];

        if(strlen($name)>3 && strpos($mail, ".") &&strpos($mail, "@") && is_numeric($age)){
            echo "<h2>Acesso riuscito</h2>";
        } else{
            echo "<h2>Acesso negato</h2>";
        }

    }


?>
