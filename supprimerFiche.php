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

    if(isset($_GET['id'])){
        $sql = "DELETE FROM personnage
                WHERE id_personnage = ?";

        $rs_sup = $cnx->prepare($sql);
        $var_id_personnage = $_GET['id'];

        $rs_sup->execute(array($var_id_personnage));

        $message = '<p>Personnage supprimé</p>';
    } else {
        $message = '<p>Une erreur est survenue !</p>';
    }
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Finger+Paint" rel="stylesheet">
        <link rel="shortcut icon"  type="image/x-icon" href="images/epee.ico" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" media="screen" href="normalize.css">
        <link rel="stylesheet" type="text/css" media="screen" href="style.css">
    </head>
    <body>

        <?php include('headerUser.php'); ?>

        <main>
            <div class="container">
                <div class="row">
                    <div class="milieu">
                        <div class="row suppression col-12 col-sm-11 col-md-8 col-lg-7 p-2 mt-5 mb-5">
                            <div class="mt-5 mb-3 h4">
                                <?= $message; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <?php include ('footer.php'); ?>
        
    </body>
</html>