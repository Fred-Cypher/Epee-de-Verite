<?php
    session_start();

    require_once('cnx.php'); 
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>L'Épée de Vérité - Accueil</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Finger+Paint" rel="stylesheet">
        <link rel="shortcut icon"  type="image/x-icon" href="images/epee.ico" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" media="screen" href="normalize.css">
        <link rel="stylesheet" type="text/css" media="screen" href="style.css">
    </head>
    <body>
        <?php include('header.php'); ?>
        
        <main>
            <div class="container">
                <div class="row">
                    <div class="milieu">
                        <div class="row accroche col-sm-11 col-md-8 col-lg-5 mt-4"> <!-- Encadré milieu page -->
                            <p class="pt-4 pb-4">
                                Découvrez les personnages <br>
                                de la saga  <br>
                                <span>"L'Épée de Vérité"</span>  <br>
                                de Terry Goodkind.
                            </p>
                        </div>
                        
                        <div class="explication col-sm-11 col-md-8 col-lg-5 mt-4 p-2">
                            Inscription obligatoire pour enregistrer un nouveau personnage ou pour apporter des précisions à une fiche
                        </div>
                        <!-- Bouton qui envoie vers la page de recherche de personnage -->
                        <div class="col-md-6 mt-4 mb-5">
                            <a class="btn button" href="personnages.php" title="Oh c'est par ici qu'on en saura plus sur les personnages !" target=_blank>Chercher un personnage</a> 
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <?php include('footer.php'); ?>

    </body>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</html>