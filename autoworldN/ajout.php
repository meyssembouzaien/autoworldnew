<?php include('header.php'); ?>
<form action="submit.php" method="post">
  <label for="marque">Marque :</label>
  <input type="text" id="marque" name="marque" required>
  
  <label for="modele">Modèle :</label>
  <input type="text" id="modele" name="modele" required>
  
  <label for="annee">Année :</label>
  <input type="number" id="annee" name="annee" required>
  
  <label for="couleur">Couleur :</label>
  <input type="text" id="couleur" name="couleur" required>
  
  <label for="immatriculation">Immatriculation :</label>
  <input type="text" id="immatriculation" name="immatriculation" required>
  
  <input type="submit" value="Ajouter le véhicule">
</form>
<?php include('footer.php'); ?>
