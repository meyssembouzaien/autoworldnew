<?php
var_dump( $_GET); 
$db_name = 'mysql:host=localhost;dbname=projetdevweb';
$user_name = 'root';
$user_password = '';

$conn = new PDO($db_name, $user_name, $user_password);




if(isset($_POST['sub_log'])){
    $username=$_POST['username'];
    $password_user=$_POST['password_user'];
    

$req = "SELECT * FROM `utilisateurs` WHERE 'username=$username' AND 'password=$password_user'";

if($conn->query($req)){
    echo "New record created successfully";
};


}
?>






?>
      