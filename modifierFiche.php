<?php
    session_start();

    require_once('cnx.php'); 
    $message = '';
    
    if(isset($_SESSION['pseudo'])){
        $pseudo = $_SESSION['pseudo'];
    } else {
        header('location:connexion.php');
    }

    setcookie('pseudo', $_SESSION['pseudo'] , time() + 30*24*3600, null, null, false, true);

    // Afficher seulement les fiches enregistrées par l'utilisateur connecté
    // Comparer l'utilisateur connecté et l'utilisateur enregistré (via l'id_utilisateur de la table des personnages et l'utilisateur)

    //Va récupérer les fiches personnage et les classer par ordre alphabétique du prénom

    $sql = "SELECT * FROM user
        INNER JOIN personnage ON user.pseudo = personnage.pseudoUser 
        WHERE pseudo = '$pseudo'
        ORDER BY prenom ASC";

    $rs_select = $cnx->prepare($sql);

    $rs_select->execute();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>L'Épée de Vérité - Modifier un personnage</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Finger+Paint" rel="stylesheet">
        <link rel="shortcut icon"  type="image/x-icon" href="images/epee.ico" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" media="screen" href="normalize.css">
        <link rel="stylesheet" type="text/css" media="screen" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js%22%3E"></script>
    </head>
    
    <body>
        
        <?php include ('headerUSer.php'); ?>

        <main class="pb-4">
            <div class="container">
                <div class="row">
                    <div class="milieu">
                        <div class="row listeModif mt-2 col-12 col-sm-11 col-md-8 col-lg-7 p-2 mb-4">
                            <div>
                                <h3 class="h5 mt-2">Liste des personnages à modifier ou supprimer</h3>
                                <h4 class="h6 mt-2">Cliquez sur un nom pour modifier le personnage</h4>
                                <div class="m-3 avertissement p-2">
                                    <img class="cautionFiche me-3" src="images/caution.svg" alt="icone danger" />
                                    Vous ne pouvez modifier ou supprimer que les fiches que vous avez vous-même enregistrées.
                                </div>
                            </div>
                            <div class="scrollmenu mt-3">
                                <?php
                                    while($donnees = $rs_select->fetch(PDO::FETCH_ASSOC)){ 
                                ?>
                                <div class="persoAModif mt-1"><!--Liens pour modifier ou supprimer un personnage, affichage du prénom, du nom et du lien de suppression autant de lignes que de personnages-->
                                    <a class="lienModif" href="ficheModif.php?id=<?= $donnees['id_personnage'];?>"><?= $donnees['prenom']; ?> &nbsp <?= $donnees['nom']; ?> &nbsp</a>
                                    [<a class="lienModif" href="supprimerFiche.php?id=<?= $donnees['id_personnage'];?>">Supprimer le personnage</a>]
                                </div>
                                <?php
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
        <?php include ('footer.php'); ?>

    </body>
</html>