<?php
if (!empty($_POST)) {


    function validateDate($dat, $format = 'Y-m-d H:i:s')
    {
        $date = DateTime::createFromFormat($format, $dat);
        return $date && $date->format($format) == $dat;
    }



    $power = $_POST['puissance_voiture'];
    $start = $_POST['date_depart'];
    $distance = $_POST['distance'];
    $date = validateDate($_post['date_depart']);

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
}
