<?php
    include('connexion.php');


    if (isset($_POST['Soumettre']))
    {
        $nom_parent=strip_tags($_POST['nom_parent']);
        $prenom_parent=strip_tags($_POST['prenom_parent']);
        $nombre_enfant=$_POST['nombre_enfant'];
        $telephone=$_POST['telephone'];
        $email=strip_tags($_POST['email']);
        $lieu_habitat=$_POST['lieu_habitat'];


        $sqlate = "INSERT INTO parent (nom_parent, prenom_parent, nombre_enfant, telephone, email, lieu_habitat) VALUES (:nom_utilisateurs, :prenom_parent, :nombre_enfant, :telephone, :email, :lieu_habitat)";
        $stmt = $connexion->prepare($sqlate);
        $stmt->execute
        (
            array
            (
                ':nom_utilisateurs'=>$nom_utilisateurs,
                ':prenom_parent'=>$prenom_parent,
                ':nombre_enfant'=>$nombre_enfant,
                ':telephone'=>$telephone,
                ':email'=>$email,
                ':lieu_habitat'=>$lieu_habitat
            )
        );
        echo'parent enregistré avec succès';
        header('location:inscription_parent.php');
    }
    else
    {
        echo 'erreur enregistrement!';
    }
?>