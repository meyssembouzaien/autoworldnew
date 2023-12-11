<?php include('header.php'); ?>
<section class="contact-section">
        <h2>Signup</h2>
        <form action="contact_post.php" method="POST">
		    <label for="username">Nom d'utilisateur:</label>
		    <input type="text" id="username" name="username"><br><br>

		   <label for="password_user">Mot de passe:</label>
		  <input type="password" id="password_user" name="password_user"><br><br>

		 <button name="sub_log" type="submit" >S'inscrire</button>
	    </form>

	 
</section>
      <br>
      <br>
      <?php include('footer.php'); ?>