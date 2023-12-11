<?php
var_dump( $_GET); 
$db_name = 'mysql:host=localhost;dbname=projetdevweb';
$user_name = 'root';
$user_password = '';
$conn = new PDO($db_name, $user_name, $user_password);



if(isset($_POST['sub'])){
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $modele=$_POST['modele'];
    $tel=$_POST['tel'];

$req = "INSERT INTO `vehicules` (nom, prenom,modele,tel)
VALUES ('$nom','$prenom','$modele','$tel')";

if($conn->query($req)){
    
    header('Location: index.php');
};


}
?>



