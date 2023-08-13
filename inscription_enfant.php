<?php
    include('connexion.php');

    if (isset($_POST['Soumettre']))
    {
        $nom_enfant=strip_tags($_POST['nom_enfant']);
        $prenom_enfant=strip_tags($_POST['prenom_enfant']);
        $date_naissance=$_POST['date_naissance'];
        $lieu_naissance=$_POST['lieu_naissance'];
        $nom_parent=strip_tags($_POST['nom_parent']);


        $sqlate = "INSERT INTO enfant (nom_enfant, prenom_enfant, date_naissance, lieu_naissance, nom_parent) VALUES (:nom_enfant, :prenom_enfant, :date_naissance, :lieu_naissance, :nom_parent)";
        $stmt = $connexion->prepare($sqlate);
        $stmt->execute
        (
            array
            (
                ':nom_enfant'=>$nom_enfant,
                ':prenom_enfant'=>$prenom_enfant,
                ':date_naissance'=>$date_naissance,
                ':lieu_naissance'=>$lieu_naissance,
                ':nom_parent'=>$nom_parent
            )
        );
        echo'enfant enregistré avec succès';
        header('location:insription_enfant.php');
    }
    else
    {
        echo 'erreur enregistrement!';
    }
?>