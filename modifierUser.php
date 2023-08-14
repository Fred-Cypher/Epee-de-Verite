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

    if($pseudo = $_SESSION['pseudo']){ // Récupère et affiche les données de l'utilisateur de la base de données
        $sql = "SELECT * FROM user
                WHERE pseudo = ?";

        $rs_select = $cnx->prepare($sql);

        $rs_select->bindValue(1,$pseudo,PDO::PARAM_STR);
        $rs_select->execute();

        $donnees = $rs_select->fetch(PDO::FETCH_ASSOC);
        $var_mdpasse = $donnees['mdpasse']; 
        $var_mail    = $donnees['mail'];
    } 

    if(isset($_POST['validerModification'])){ // Modifie les données de la table "user" 
        if(($_POST['mdpasse']) != ($_POST['mdpasse2'])){
            $message = '<script>alert("Mots de passe différents, réessayez")</script>';
        }else{
            $sql2 = "UPDATE user 
                    SET mdpasse = ?, email = ?
                    WHERE pseudo = $pseudo";
            $rs_modif = $cnx->prepare($sql2);

            $var_mdpasse = password_hash(($_POST['mdpasse']), PASSWORD_BCRYPT);
            $var_mail    = htmlspecialchars($_POST['mail']);

            $rs_modif->bindValue(1,$var_mdpasse,PDO::PARAM_STR);
            $rs_modif->bindValue(2,$var_mail,PDO::PARAM_STR);

            $rs_modif->execute();

            $message = '<p></p>';
            $message = '<script>alert("Profil modifié");
                    window.location="enregistrement.php";
                    </script>';
        }
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
                        <div class="row cadreInscription mt-2 col-12 col-sm-11 col-md-9 col-lg-7 p-2 mt-2 mb-5">
                            <h3 class="h5">Modification du profil</h3>
                            <form action="" method="POST" class="col-12 col-md-10">
                                <div class="text-start mt-1">
                                    <label for="mdpasse" class="form-label">Mot de passe modifié : </label>
                                    <input type="password" class="form-control" name="mdpasse" id="mdpasse" required>
                                </div>
                                <div class="text-start mt-1">
                                    <label for="mdpasse2" class="form-label">Confirmation du mot de passe modifié : </label>
                                    <input type="password" class="form-control" name="mdpasse2" id="mdpasse2" required>
                                </div>
                                <div class="text-start mt-1">
                                    <label for="mail" class="form-label">Adresse mail modifiée : </label>
                                    <input type="email" class="form-control" name="mail" id="mail" required>
                                </div>
                                <button type="submit" name="validerModification" class="btn button mt-2">Valider</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
        <?php include ('footer.php'); ?>

    </body>
</html>