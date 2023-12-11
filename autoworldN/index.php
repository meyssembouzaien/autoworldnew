 <?php include('header.php'); ?>
  
    <section class="categorie-vehicule">
       <div class="categorie-titre">
        <h1>Nos categories de véhicules </h1>
        <video autoplay muted loop
        >
          <source src="1.mp4" type="video/mp4">
        </video>
        <div class="categorie-boite">
        <div class="categorie_unique">
        <img src="image/audi.jpg" alt=""/>
        <div classs="text_hover"></div>
        <div>
          <h3>vehicule disponible pour vous</h3>
          <hr/>
          <p> Si vous desirez acheter ou louer un vehicule sans permis,
            Autoworld  se tient pret por vous accompagner. Nous vous 
            prposons differents modeles pour vous aider a faire le meilleur
            choix. 
          </p>
          <a href="location.php"> RESERVER</a>
        </div>
        </div>
        <div class="categorie_unique">
        <img src="image/bm4.jpg" alt=""/>
        <div classs="text_hover"></div>
        <div>
          <h3>vehicule disponible pour vous</h3>
          <hr/>
          <p> Si vous desirez acheter ou louer un vehicule sans permis,
            Autoworld  se tient pret por vous accompagner. Nous vous 
            prposons differents modeles pour vous aider a faire le meilleur
            choix. 
          </p>
          <a href="location.php"> RESERVER</a>
        </div>
        </div>
       <div class="categorie_unique">
        <img src="vol.jpg" alt=""/>
        <div classs="text_hover"></div>
        <div>
          <h3>vehicule disponible pour vous</h3>
          <hr/>
          <p> Si vous desirez acheter ou louer un vehicule sans permis,
            Autoworld  se tient pret por vous accompagner. Nous vous 
            prposons differents modeles pour vous aider a faire le meilleur
            choix. 
          </p>
          <a href="location.php"> RESERVER</a>
        </div>
        </div>
        </div> 
      </section>
      <br>
      <br>
      <section id="temoignages">
           <h2>Ce que disent nos clients</h2>
            <div class="temoignage">
             <img src="image/hom.jpg" alt="Photo du client 1">
          <blockquote>
           <p>"J'ai loué une voiture chez eux pour mes vacances et j'ai été très satisfait du service. La voiture était en parfait état et le personnel était très aimable. Je recommande vivement."</p>
           <cite>John Doe</cite>
          </blockquote>
          </div>
        <div class="temoignage">
         <img src="image/hom1.jpg" alt="Photo du client 2">
        <blockquote>
        <p>"Je suis un client fidèle de cette entreprise depuis plusieurs années et je n'ai jamais été déçu. Les voitures sont toujours en bon état et le service est excellent."</p>
        <cite>Jane Smith</cite>
       </blockquote>
        </div>
        <div class="temoignage">
        <img src="image/hom2.jpg" alt="Photo du client 3">
        <blockquote>
           <p>"J'ai loué une voiture pour un voyage d'affaires et j'ai été impressionné par la qualité du service. La voiture était prête à mon arrivée et le personnel m'a aidé à charger mes bagages. Je recommande cette entreprise sans hésiter."</p>
          <cite>Robert Johnson</cite>
        </blockquote>
        </div>
     </section>

<script>
  // Code JS pour faire défiler les témoignages
  const temoignages = document.querySelectorAll('.temoignage');
  let indexTemoignage = 0;
  
  function afficherTemoignage() {
    temoignages.forEach((temoignage) => {
      temoignage.style.display = 'none';
    });
    temoignages[indexTemoignage].style.display = 'block';
    indexTemoignage++;
    if (indexTemoignage >= temoignages.length) {
      indexTemoignage = 0;
    }
    setTimeout(afficherTemoignage, 5000); // Changement toutes les 5 secondes
  }
  
  afficherTemoignage();
</script>

      
    
      
      <?php include('footer.php'); ?>
      
      
        
       
      

        
        

    
