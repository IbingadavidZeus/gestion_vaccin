<?php
    include('connexion.php');

if (isset($_POST['Soumettre']))
    {
        $nom_utilisateurs=strip_tags($_POST['nom_utilisateurs']);
        $fonction_utilisateurs=strip_tags($_POST['fonction_utlisateurs']);
        $email=strip_tags($_POST['email']);


        $sqlate = "INSERT INTO utilisateur (nom_utilisateurs, fonction_utilisateurs, email) VALUES (:nom_utilisateurs, :fonction_utilisateurs, :email)";
        $stmt = $connexion->prepare($sqlate);
        $stmt->execute
        (
            array
            (
                ':nom_utilisateurs'=>$nom_utilisateurs,
                'fonction_utilisateurs'=>$fonction_utilisateurs,
                'email'=>$email
            )
        );
        echo'Utilisateur enregistré avec succès';
        header('location:insription_utilisateur.php');
    }
    else
    {
        echo 'erreur enregistrement!';
    }
?>