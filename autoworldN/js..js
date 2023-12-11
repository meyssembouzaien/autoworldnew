function validateForm() {
    var nom = document.getElementById("nom").value;
    var prenom = document.getElementById("prenom").value;
    var tel = document.getElementById("tel").value;
    var modele = document.getElementById("modele").value;
    

    // Vérification du nom et du prénom (doivent contenir uniquement des lettres)
    var nomRegEx = /^[a-zA-Z]+$/;
    if (!nomRegEx.test(nom) || !nomRegEx.test(prenom)) {
        alert("Le nom et le prénom doivent contenir uniquement des lettres.");
        return;
    }
    
    // Vérification du numéro de téléphone (doit contenir uniquement des chiffres)
    var telRegEx = /^[0-9]+$/;
    if (!telRegEx.test(tel)) {
        alert("Le numéro de téléphone doit contenir uniquement des chiffres.");
        return;
    }
    
    // Si toutes les vérifications sont passées, le formulaire est valide
    alert("Le formulaire est valide !");
   
}







