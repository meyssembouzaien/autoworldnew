<?php include('header.php'); ?>
<section class="contact-section">
        <h2>CONTACT</h2>
        <form action="contact_get.php" method="POST">
		    <label for="username">Nom d'utilisateur:</label>
		    <input type="text" id="username" name="username"><br><br>

		   <label for="password_user">Mot de passe:</label>
		  <input type="password" id="password_user" name="password_user"><br><br>

		 <button name="sub_log" type="submit" >Se connecter</button>
		 <br>
		 <br>
		 <a href="signup.php"><button  type="button" >S'inscrire</button></a>
	    </form>

	 
</section>
      <br>
      <br>
      <?php include('footer.php'); ?>