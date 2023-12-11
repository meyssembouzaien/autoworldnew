<?php include('header.php'); ?>
   <section>
      
	       <h2>location</h2>
         <form action="location_get.php" method="POST">
          <label for="nom">Nom :</label>
          <input type="text" id="nom" name="nom" required><br><br>
      
          <label for="prenom">Prénom :</label>
          <input type="text" id="prenom" name="prenom" required><br><br>
      
          <label for="email">Email :</label>
          <input type="email" id="email" name="email" required><br><br>
      
          <label for="tel">Téléphone :</label>
          <input type="tel" id="tel" name="tel" required pattern="[0-9]{10}"><br><br>
      
          <label for="modele">Modele :</label>
          <input type="text" id="modele" name="modele" required><br><br>
      
          <br><br>
      
          
      
          <input name="sub" type="submit" value="Envoyer">
        </form>
      </section>
      <script src="js..js"></script>

<?php include('footer.php'); ?>