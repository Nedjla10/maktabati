<?php

if( isset($_POST['email']) && isset($_POST['mdp'])){
    $email=$_POST['email'];
    $mdp=$_POST['mdp'];
    $nom_serveur = "localhost";
    $utilisateur = "root";
    $mot_de_passe = "";
    $nom_base_données = "form";
    $con = mysqli_connect($nom_serveur , $utilisateur , $mot_de_passe , $nom_base_données);
    $req = mysqli_query($con , "SELECT * FROM inscreption WHERE  email='$email' AND mdp='$mdp'");
    $num_ligne =mysqli_num_rows($req);
    if($num_ligne >0){
        header("location: bienvenu.php");
    }else{
        echo"il y a un erreur !";
    }
}
?>