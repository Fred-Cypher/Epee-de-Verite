<?php
    session_start();

    require_once('cnx.php'); 
    $message = '';

    $_SESSION['pseudo']='';
    $pseudo = '';

    echo $_SESSION['pseudo'];


    if(isset($_GET['id'])){ //Récupère les données dans la table "personnage"
        $sql = "SELECT * FROM personnage
                WHERE id_personnage = ?";

        $rs_select = $cnx->prepare($sql);

        $var_id_personnage = $_GET['id'];
        $rs_select->bindValue(1,$var_id_personnage,PDO::PARAM_INT);
        $rs_select->execute();

        $donnees = $rs_select->fetch(PDO::FETCH_ASSOC);
        $nom = $donnees['nom'];
        $prenom = $donnees['prenom'];
        $statut = $donnees['statut'];
        $filiation = $donnees['filiation'];
        $pays = $donnees['pays'];
        $tome = $donnees['tome'];
        $biographie = $donnees['biographie'];
    }

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>L'Épée de Vérité - Connexion</title>
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
                        <div class="row listeAffich mt-2 col-12 col-sm-11 col-md-10 col-lg-8 p-2 mt-5 mb-5">
                            <h3 class="mt-2">Fiche personnage</h3> <!-- Affiche la fiche d'un personnage -->
                            <div class="text-start mt-2"> <!-- Affiche le champ "prenom" de la table "personnage" de la base de données -->
                                <strong>Prénom :</strong> <?= $prenom; ?> 
                            </div>
                            <div class="text-start mt-2"> <!-- Affiche le champ "nom" de la table "personnage" de la base de données -->
                                <strong>Nom :</strong> <?= $nom; ?>
                            </div>
                            <div class="text-start mt-2"> <!-- Affiche le champ "statut" de la table "personnage" de la base de données" -->
                                <strong>Statut :</strong> <?= $statut; ?>
                            </div>
                            <div class="text-start mt-2"> <!-- Affiche le champ "filiation" de la table "personnage" de la base de données" -->
                                <strong>Filiation :</strong> <?= $filiation; ?>
                            </div>
                            <div class="text-start mt-2"> <!-- Affiche le champ "pays" de la table "personnage" de la base de données" -->
                                <strong>Pays d'origine :</strong> <?= $pays; ?>
                            </div>
                            <div class="text-start mt-2"> <!-- Affiche le champ "tome" de la table "personnage" de la base de données" -->
                                <strong>Tome d'apparition :</strong> <?= $tome; ?>
                            </div>
                            <div class="text-start mt-2"> <!-- Affiche le champ "biographie" de la table "personnage" de la base de données" -->
                                <strong>Biographie :</strong> <br> <?= $biographie; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
        <?php include ('footer.php'); ?>
        
    </body>
</html>