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

    if(isset($_GET['id'])){ // Récupère et affiche les données des personnages de la base de données
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

    if(isset($_POST['modif'])){ // Modifie les données de la table "personnage" 
        $sql2 = "UPDATE personnage 
                SET nom = ?, prenom = ?, statut = ?, filiation = ?, pays = ?, tome = ?, biographie = ?
                WHERE id_personnage = ?";
        $rs_modif = $cnx->prepare($sql2);

        $var_nom        = htmlspecialchars($_POST['nom']);
        $var_prenom     = htmlspecialchars($_POST['prenom']);
        $var_statut     = htmlspecialchars($_POST['statut']);
        $var_filiation  = htmlspecialchars($_POST['filiation']);
        $var_pays       = htmlspecialchars($_POST['pays']);
        $var_tome       = $_POST['tome'];
        $var_biographie = htmlspecialchars($_POST['biographie']);
        $var_id_personnage = $_POST['id_personnage'];

        $var_biographie = nl2br($var_biographie); // On crée des <br /> pour conserver les retours à la ligne   
        
        // Modification des balises pour l'enregistrement en BDD
        $var_biographie = preg_replace('#\[b\](.+)\[/b\]#isU', '<strong>$1</strong>', $var_biographie);
        $var_biographie = preg_replace('#\[i\](.+)\[/i\]#isU', '<em>$1</em>', $var_biographie);
        $var_biographie = preg_replace('#\[color=(red|green|blue|yellow|purple|olive)\](.+)\[/color\]#isU', '<span style="color:$1">$2</span>', $var_biographie);
        $var_biographie = preg_replace('#http://[a-z0-9._/-]+#i', '<a href="$0">$0</a>', $var_biographie);

        $rs_modif->bindValue(1,$var_nom,PDO::PARAM_STR);
        $rs_modif->bindValue(2,$var_prenom,PDO::PARAM_STR);
        $rs_modif->bindValue(3,$var_statut,PDO::PARAM_STR);
        $rs_modif->bindValue(4,$var_filiation,PDO::PARAM_STR);
        $rs_modif->bindValue(5,$var_pays,PDO::PARAM_STR);
        $rs_modif->bindValue(6,$var_tome,PDO::PARAM_INT);
        $rs_modif->bindValue(7,$var_biographie,PDO::PARAM_STR);
        $rs_modif->bindValue(8,$var_id_personnage,PDO::PARAM_INT);

        $rs_modif->execute();

        $message = '<p></p>';
        $message = '<script>alert("Fiche personnage modifiée !");
                window.location="modifierFiche.php";
                </script>';
    }

    if(isset($_GET['id'])){ // Récupère et affiche les données modifiées 
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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>L'Épée de Vérité - Enregistrement</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Finger+Paint" rel="stylesheet">
        <link rel="shortcut icon"  type="image/x-icon" href="images/epee.ico" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" media="screen" href="normalize.css">
        <link rel="stylesheet" type="text/css" media="screen" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js%22%3E"></script>
    </head>
    <body>
        <?php include('headerUser.php'); ?>
        <main>
            <div class="container">
                <div class="row">
                    <div class="milieu">
                            <?php
                                if(isset($message)){
                                    echo ''.$message.'';
                                }
                            ?>
                        
                        <div class="row ficheModif mt-2 col-12 col-sm-11 col-md-9 col-lg-7 p-2 mt-2 mb-5">
                            <h3 class="h5">Modifier une fiche personnage</h3>
                            <span class="text-start mt-2">ATTENTION ! Ne pas oublier de modifier les balises pour que l'enregistrement se fasse de façon correcte</span>
                            <form action="" method="post">
                                <div class="text-start mt-2">
                                    <label for="nom" class="form-label"> Nom :</label>
                                    <input type="text" name="nom" class="form-control" id="nom" value="<?= $nom; ?>"/>
                                </div>
                                <div class="text-start mt-2">
                                    <label for="prenom" class="form-label"> Prénom :</label>
                                    <input type="text" name="prenom" class="form-control" id="prenom" value="<?= $prenom; ?>" />
                                </div>
                                <div class="text-start mt-2">
                                    <label for="statut" class="form-label">Statut :</label>
                                    <input type="text" name="statut" class="form-control" id="statut" value="<?= $statut; ?>" />
                                </div>
                                <div class="text-start mt-2">
                                    <label for="filiation" class="form-label">Filiation :</label>
                                    <input type="text" name="filiation" class="form-control" id="filiation" value="<?= $filiation; ?>" />
                                </div>
                                <div class="text-start mt-2">
                                    <label for="pays" class="form-label">Pays d'origine :</label>
                                    <input type="text" name="pays" class="form-control" id="pays" value="<?= $pays; ?>" />
                                </div>
                                <div class="text-start mt-2">
                                    <label for="tome" class="form-label">Tome d'apparition :</label>
                                    <input type="number" name="tome" class="form-control" id="tome" value="<?= $tome; ?>"/>
                                </div>
                                <div class="text-start mt-2">
                                    <label for="biographie" class="form-label">Biographie rapide du personnage :</label>
                                    <textarea class="biographie" class="form-control" name="biographie" id="biographie" rows="10"><?php echo $biographie ?></textarea>
                                </div>
                                <input type="hidden" name="id_personnage" value="<?= $_GET['id']; ?>"/>
                                <button name="modif" type="submit" class="btn button mt-3 mb-2">Modifier</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
        <?php include ('footer.php'); ?>

    </body>
</html>