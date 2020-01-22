<!-- Passare come parametri GET “name”, “mail” e “age” e verificare (cercando i
metodi che non conosciamo nella documentazione) che:
● “name” sia più lungo di 3 caratteri;
● “mail” contenga un punto e una chiocciola;
● “age” sia un numero.
Se tutto è ok, stampare “Accesso riuscito”, altrimenti “Accesso negato” -->
<?php
    $name = $_GET["name"];
    $mail = $_GET["mail"];
    $age = $_GET["age"];

    $lunghezza_nome = strlen($name);
    $presenza_chiocciola = strpos($mail, "@");
    $presenza_punto = strpos( $mail, ".");

    if ($lunghezza_nome > 3 &&
        $presenza_chiocciola != false &&
        $presenza_punto != false  &&
        is_numeric($age) != false ) {

        echo "Accesso riuscito";
    } else {
        echo "Accesso negato";
    };

 ?>
