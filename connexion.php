<?php
    session_start();

    require_once('cnx.php'); 
    $message = '';

    $_SESSION['pseudo']='';
    $pseudo = '';

    echo $_SESSION['pseudo'];

    $err_connexion = array();
    if(isset($_POST['boutonConnexion'])){
        if( !empty($_POST['pseudo']) && !empty($_POST['mdpasseConnexion'])){
            // requete : username existe ?
            $sql = $cnx->prepare("SELECT pseudo, mdpasse FROM user WHERE pseudo = :pseudo");
            $sql->bindvalue(':pseudo', $_POST['pseudo'], PDO::PARAM_STR);
            $sql->execute();
            if($sql->rowCount()>0){ // username OK
                $row = $sql->fetch();
                // on compare le mot de passe entré avec celui enregistré en bdd
                if( password_verify($_POST['mdpasseConnexion'], $row['mdpasse']) ) // pwd OK
                {
                    // Mise en SESSION
                    $_SESSION['islogged'] = true;
                    $_SESSION['pseudo'] = $row['pseudo'];
                    // ATTENTION ! ON NE MET JAMAIS LE MOT DE PASSE EN SESSION !!
                    // on redirige vers l'espace membre
                    header('location:enregistrement.php');
                    exit();
                } else {
                    $err_connexion[] = 'erreur : mot de passe : '.$_POST['mdpasseConnexion'];
                    $message = '<script>alert("Identifiant et/ou mot de passe incorrect.")</script>';
                }
            } else {
                $err_connexion[] = 'rowCount : '.$sql->rowCount();
                $err_connexion[] = 'erreur Identifiant : '.$_POST['pseudo'];
                $message = '<script>alert("Identifiant et/ou mot de passe incorrect.")</script>';
            }
        } else {
            $message = '<script>alert("Veuillez remplir tous les champs.")</script>';
        }
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
            <?php
                if(isset($message)) {
                    echo $message;
                }
            ?>

            <div class="container">
                <div class="row">
                    <div class="milieu">
                        <div class="row cadreConnexion mt-2 col-12 col-sm-11 col-md-8 col-lg-7 p-2 mt-5 mb-5">
                            <h3 class="mt-2">Connexion</h3>
                            <form action="" method="post" id="connexion">
                                <div class="text-start mt-2">
                                    <label for="pseudo" class="form-label">Pseudo : </label>
                                    <input type="text" class="form-control" name="pseudo" id="pseudo" required>
                                </div>
                                <div class="text-start mt-2">
                                    <label for="pass" class="form-label">Mot de passe : </label>
                                    <input type="password" class="form-control" name="mdpasseConnexion" id="pass" required>
                                </div>
                                <button type="submit" name="boutonConnexion" class="btn button mt-3 mb-2">Valider</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
        <?php include ('footer.php'); ?>
        
    </body>
</html>