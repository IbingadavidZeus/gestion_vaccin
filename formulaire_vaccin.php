<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_vaccin.css">
    <title>insription Vaccin</title>
</head>
<body>
    <header class="header">
        <nav class="nav">
            <a href="#"> Acceuil </a>
            <a href="#"> Liste des Vaccins</a>
            <a href="#"> Enregistrement Parent</a>
            <a href="#"> Enregistrement Enfant</a>
        </nav>
        <div class="search">
            <input type="text" placeholder="Recherche...">
        </div>
    </header>
                <div class="save">
                    <form action="inscription_vaccins.php" method="post">
                        <div class="sign-up">
                            <h2>Formaulaire Vaccin</h2>
                        </div>
                        <div class="input">
                            <input type="text" name="nom_vaccin" id="nom_vaccin" required>
                            <label for="input"> Nom Vaccin </label>
                        </div>
                        <div class="input">
                            <input type="date" name="periode_vaccination" id="periode_vaccination" required>
                            <label for="input"> Periode de Vaccination </label>
                        </div>
                        <div class="button">
                            <input type="submit" value="Soumettre" name="Soumettre">
                        </div>
                    </form>
                </div>
</body>
</html>