<?php
    include('connexion.php');

    if (isset($_POST['Soumettre']))
    {
        $nom_vaccin=strip_tags($_POST['nom_vaccin']);
        $periode_vaccination=strip_tags($_POST['periode_vaccination']);
        


        $sqlate = "INSERT INTO vaccin (nom_vaccin, periode_vaccination) VALUES (:nom_vaccin, :periode_vaccination)";
        $stmt = $connexion->prepare($sqlate);
        $stmt->execute
        (
            array
            (
                ':nom_vaccin'=>$nom_vaccin,
                ':periode_vaccination'=>$periode_vaccination
            )
        );
        echo'vaccin enregistré avec succès';
        header('location:inscription_vaccins.php');
    }
    else
    {
        echo 'erreur enregistrement!';
    }



    




?>