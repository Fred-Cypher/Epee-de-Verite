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

    if(isset($_POST['validerPerso'])){
        $sql = "INSERT INTO personnage (pseudoUser,nom,prenom,statut,filiation,pays,tome,biographie) VALUES (?,?,?,?,?,?,?,?)";
        $rs_insert = $cnx->prepare($sql);
        
        $var_nom        = htmlspecialchars($_POST['nom']);
        $var_prenom     = htmlspecialchars($_POST['prenom']);
        $var_statut     = htmlspecialchars($_POST['statut']);
        $var_filiation  = htmlspecialchars($_POST['filiation']);
        $var_pays       = htmlspecialchars($_POST['pays']);
        $var_tome       = $_POST['tome'];
        $var_biographie = htmlspecialchars($_POST['biographie']);
        
        $var_biographie = nl2br($var_biographie); // On crée des <br /> pour conserver les retours à la ligne
        
        // Modification des balises pour l'enregistrement en BDD
        $var_biographie = preg_replace('#\[b\](.+)\[/b\]#isU', '<strong>$1</strong>', $var_biographie);
        $var_biographie = preg_replace('#\[i\](.+)\[/i\]#isU', '<em>$1</em>', $var_biographie);
        $var_biographie = preg_replace('#\[color=(red|green|blue|yellow|purple|olive)\](.+)\[/color\]#isU', '<span style="color:$1">$2</span>', $var_biographie);
        $var_biographie = preg_replace('#http://[a-z0-9._/-]+#i', '<a href="$0">$0</a>', $var_biographie);
    
        $reponse = $cnx->query('SELECT COUNT(prenom) AS verif_prenom FROM personnage WHERE prenom= '.$cnx->quote($_POST['prenom'])); /*query : exécute une requête, quote : protège une chaîne pour l'utiliser dans une requête*/
        $donnee = $reponse->fetch();
        if($donnee['verif_prenom']>0){
            $message = '<script>alert("Ce personnage est déjà enregistré")</script>';
        } else {
            $rs_insert->bindValue(1,$pseudo,PDO::PARAM_STR);
            $rs_insert->bindValue(2,$var_nom,PDO::PARAM_STR); /*Associe une valeur à un paramètre*/
            $rs_insert->bindValue(3,$var_prenom,PDO::PARAM_STR);
            $rs_insert->bindValue(4,$var_statut,PDO::PARAM_STR);
            $rs_insert->bindValue(5,$var_filiation,PDO::PARAM_STR);
            $rs_insert->bindValue(6,$var_pays,PDO::PARAM_STR);
            $rs_insert->bindValue(7,$var_tome,PDO::PARAM_INT);
            $rs_insert->bindValue(8,$var_biographie,PDO::PARAM_STR);
            $rs_insert->execute();
            
            $message = '<script>alert("Personnage créé");</script>';
        }
    }

    $id_session = session_id();
?>

<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="utf-8">
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
        <?php include ('headerUser.php'); ?>

        <main>

            <?php
                if(isset($message)){
                    echo ''.$message.'';
                }
            ?>
            
            <div class="container">
                <div class="row">
                    <div class="milieu">
                        <div class="row enregistrement mt-2 col-12 col-sm-11 col-md-9 col-lg-7 p-2 mt-5 mb-5">                        
                            <h3 class="h5">Enregistrement d'un personnage</h3>
                            <span class="text-start mt-2 balise">Balises autorisées : [b], [i] et [alinea].</span>
                            <form action="" method="post">
                                <div class="text-start mt-2">
                                    <label for="nom" class="form-label"> Nom :</label>
                                    <input type="text" name="nom" class="form-control" id="nom" />
                                </div>
                                <div class="text-start mt-2">
                                    <label for="prenom" class="form-label"> Prénom :</label>
                                    <input type="text" name="prenom" class="form-control" id="prenom" placeholder="Prénom du personnage ou nom simple de la créature" required/>
                                </div>
                                <div class="text-start mt-2">
                                    <label for="statut" class="form-label">Statut :</label>
                                    <input type="text" name="statut" class="form-control" id="statut" placeholder="Ex : Sorcier, Mord-Sith, créature..." required />
                                </div>
                                <div class="text-start mt-2">
                                    <label for="filiation" class="form-label">Filiation :</label>
                                    <input type="text" name="filiation" class="form-control" id="filiation" placeholder="Ex : fils de... " />
                                </div>
                                <div class="text-start mt-2">
                                    <label for="pays" class="form-label">Pays d'origine :</label>
                                    <input type="text" name="pays" class="form-control" id="pays" />
                                </div>
                                <div class="text-start mt-2">
                                    <label for="tome" class="form-label">Tome d'apparition :</label>
                                    <input type="number" name="tome" class="form-control" id="tome" placeholder="Mettre 0 pour la Préquelle" required />
                                </div>
                                <div class="text-start mt-2">
                                    <label for="biographie" class="form-label">Biographie rapide du personnage :</label>
                                    <textarea class="biographie" class="form-control" name="biographie" id="biographie" rows="10"></textarea>
                                </div>
                                <button name="validerPerso" type="submit" class="btn button mt-3 mb-2">Enregistrer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main> 

        <?php include ('footer.php'); ?>

    </body>
</html>