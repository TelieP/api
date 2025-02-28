<?php

$message_erreur = "Format de la date non valide , Vueillez saisir au format : YYYY-MM-JJ";
if (!empty($_GET)) {


    // fonction qui permet de verifier le format de la date 
    function validateDate($dat, $format = 'Y-m-d') // la date doit etre au format Anneé- Mois-Jour 
    {
        $d = DateTime::createFromFormat($format, $dat);
        return $d && $d->format($format) == $dat;
    }

    $power = $_GET['puissance_voiture'];
    $start = $_GET['date_depart'];
    $distance = $_GET['distance'];
    $date = validateDate($_GET['date_depart']);


    // var_dump($date);
    // die;

    if ($date === true) {


        $resultat = [
            "puissance fiscale" => $power,
            "Date" => $start,
            "currency" => "Euros",
            "distance" => $distance
        ];


        if ($resultat["distance"] >= 0) {
            switch ($power) {

                case $power == 3;
                    $resultat["ik"] = ($distance * 0.529);
                    $resultat["MD"] = "Methode calcul: (distance * 0.529)";
                    echo json_encode($resultat);
                    break;

                case $power == 4;
                    $resultat["ik"] =  ($distance * 0.606);
                    $resultat["MD"] = "Methode calcul: (distance * 0.0340)";
                    echo json_encode($resultat);
                    break;

                case $power == 5;
                    $resultat["ik"] = ($distance * 0.636);
                    $resultat["MD"] = "Methode calcul: (distance * 0.0637) ";
                    echo json_encode($resultat);
                    break;

                case $power == 6;
                    $resultat["ik"] =  ($distance * 0.665);
                    $resultat["MD"] = "Methode calcul: (distance * 0.0374)";
                    echo json_encode($resultat);
                    break;

                case $power >= 7;
                    $resultat["ik"] =  ($distance * 0.197);
                    $resultat["MD"] = "Methode calcul: (distance * 0.197)";
                    echo json_encode($resultat);
                    break;

                default:
                    echo "PUISSANCE FISCALE INVALIDE !!!";
            }
        } else {
            echo "LA DISTANCE DOIT ETRE SUPERIEURE A  0 ";
        }
    } else {
        echo json_encode($message_erreur);
    }
}
