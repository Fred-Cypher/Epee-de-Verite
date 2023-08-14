<?php
    session_start();

    require_once('cnx.php');
    $message = '';
    
    $_SESSION['pseudo']='';
    $pseudo = '';
    
    echo $_SESSION['pseudo'];
    
    if(isset($_POST['validerInscription'])) {
        if((empty($_POST['pseudo']))||(empty($_POST['mdpasse']))||(empty($_POST['mdpasse2']))||(empty($_POST['mail']))){
            $message = '<script>alert("Veuillez remplir tous les champs !")</script>';
        } elseif(($_POST['mdpasse']) != ($_POST['mdpasse2'])) {
            $message = '<script>alert("Mots de passe différents, réessayez")</script>';
        } else {
            $sql = "INSERT INTO user (pseudo, mdpasse, mail) VALUES (?,?,?)";
            $rs_insert = $cnx->prepare($sql); 
    
            $var_pseudo  = htmlspecialchars($_POST['pseudo']); 
            $var_mdpasse = password_hash(($_POST['mdpasse']), PASSWORD_BCRYPT); 
            $var_mail    = htmlspecialchars($_POST['mail']);
    
            $reponse = $cnx->query('SELECT COUNT(pseudo) AS verif_pseudo FROM user WHERE pseudo= '.$cnx->quote($_POST['pseudo'])); 
            $donnee = $reponse->fetch();
            if($donnee['verif_pseudo']>0){
                $message = '<script>alert("Ce pseudo est déjà utilisé")</script>';
            } else {
                $rs_insert->bindValue(1,$var_pseudo,PDO::PARAM_STR); 
                $rs_insert->bindValue(2,$var_mdpasse,PDO::PARAM_STR);
                $rs_insert->bindValue(3,$var_mail,PDO::PARAM_STR);
                $rs_insert->execute();
    
                // Mise en SESSION
                $_SESSION['islogged'] = true;
                $_SESSION['pseudo'] = $_POST['pseudo'];
    
                $message = '<script>alert("Inscription validée ! Connectez-vous pour continuer");
                window.location="connexion.php";
                </script>';
                
                header('location:connexion.php');
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>L'Épée de Vérité - Inscription</title>
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
            <?php
                if(isset($message)){
                    echo ''.$message.'';
                }
            ?>

            <div class="container">
                <div class="row">
                    <div class="milieu">
                        <div class="row cadreInscription mt-2 col-12 col-sm-11 col-md-8 col-lg-7 p-2 mb-3">
                            <h3>Inscription</h3>
                            <form action="" method="POST" class="col-12 col-md-10">
                                <div class="text-start mt-1">
                                    <label for="pseudo" class="form-label">Pseudo : </label>
                                    <input type="text" class="form-control" name="pseudo" id="pseudo" required>
                                </div>
                                <div class="text-start mt-1">
                                    <label for="mdpasse" class="form-label">Mot de passe : </label>
                                    <input type="password" class="form-control" name="mdpasse" id="mdpasse" required>
                                </div>
                                <div class="text-start mt-1">
                                    <label for="mdpasse2" class="form-label">Confirmation du mot de passe : </label>
                                    <input type="password" class="form-control" name="mdpasse2" id="mdpasse2" required>
                                </div>
                                <div class="text-start mt-1">
                                    <label for="mail" class="form-label">Adresse mail : </label>
                                    <input type="email" class="form-control" name="mail" id="mail" required>
                                </div>
                                <button type="submit" name="validerInscription" class="btn button mt-2">Valider</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
        <?php include ('footer.php'); ?>
        
    </body>
</html>