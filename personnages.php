<?php
    session_start();

    require_once('cnx.php'); 
    $message = '';

    $_SESSION['pseudo']='';
    $pseudo = '';

    echo $_SESSION['pseudo'];
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>L'Épée de Vérité - Personnages</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Finger+Paint" rel="stylesheet">
        <link rel="shortcut icon"  type="image/x-icon" href="images/epee.ico" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" media="screen" href="normalize.css">
        <link rel="stylesheet" type="text/css" media="screen" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js%22%3E"></script>
    </head>
    <body>

        <?php include ('header.php'); ?>

        <main>
            <div class="container">
                <div class="row">
                    <div class="milieu">
                        <div class="row resultatRecherche col-12 col-sm-11 col-md-8 col-lg-7 p-2 mt-5 mb-5">
                            <div>
                                <img class="caution" src="images/caution.svg" alt="icone danger" />
                            </div>    
                            <div class="alerte mt-3">
                                <h3 class=" text-start h5">
                                    Attention avant de cliquer sur un personnage, les fiches contiennent des spoilers. <br> 
                                    Gardez-le en tête avant d'aller consulter une fiche. 
                                </h3>
                            </div>
                            <div class="boutonRecherche text-start mt-3 mb-3">
                                <details>
                                    <summary id="afficher">Afficher les personnages</summary>
                                    <div class="scrollmenu mt-2">
                                        <?php
                                            $reponse = $cnx->query('SELECT * FROM personnage ORDER BY prenom ASC'); // Récupération des champs de la table "personnage" classés par ordre alphabétique
                                            while($donnees = $reponse->fetch()) {
                                        ?>
                                            <!-- Liste des personnages par ordre alphabétique des prénoms, liens sur chaque personnage vers sa fiche détaillée -->
                                            <a class="lienPerso" href="liste.php?id=<?= $donnees['id_personnage'];?>" style="text-decoration:none" target=_blank>
                                            <option class="mt-2 ms-4" value="<?php $donnees['prenom']; ?>"> 
                                            <?php echo $donnees['prenom']?> &nbsp <?php echo $donnees['nom']; ?></option></a>
                                        <?php
                                            }
                                        ?>
                                    </div>
                                </details>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
        <?php include ('footer.php'); ?>
        
    </body>
</html>