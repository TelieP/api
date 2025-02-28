<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Calcul des indemnités kilométriques</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <h1>CALCUL DES INDEMNITES KILOMETRIQUES</h1>
  <section class=" container">

    <form method="GET" action="traitement.php" size="50" id="formulaire">
      <div>
        <label for="Puissance voiture"><strong>Puissance de votre voiture</strong></label>
        <input type="number" value="" class="power" name="puissance_voiture" placeholder="veuillez saisir la puissance fiscale de votre voiture" required />
      </div>
      <br /><br />
      <div>
        <label for="date_depart" id="date">
          <strong>Date_depart </strong>
        </label>
        <input type="date" value="" class="start" name="date_depart" placeholder="veuillez saisir votre date de départ" required />
      </div>
      <br /><br />
      <div>
        <label for="distance" id="distance"><strong>Distance</strong></label>
        <input type="number" value="" class="distance" name="distance" placeholder="veuillez saisir la distance" required />
      </div>
      <br /><br />


      <div class="btn_control">
        <button type="submit"><strong>Calculer</strong></button>
        <button type="button" class="rafraichir" id="rafraichir"><strong>Rafraichir</strong></button>
      </div>
    </form>
  </section>



  <script src="script.js"></script>
</body>

</html>

<?php
echo "Février 2025";
?>