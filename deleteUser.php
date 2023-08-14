<?php
    session_start();

    require_once('cnx.php'); 
    $message = '';
    
    if(isset($_SESSION['pseudo'])){
        $pseudo = $_SESSION['pseudo'];
    } else {
        header('location:connexion.php');
    }

    if(isset($_GET['id'])){
        $sql = "DELETE FROM user
                WHERE id_user = ?";
    
        $rs_sup = $cnx->prepare($sql);
        $var_id_user = $_GET['id'];
    
        $rs_sup->execute(array($var_id_user));
    
        $message = '<p>Compte supprimé</p>';
    } else {
        $message = '<p>Une erreur est survenue !</p>';
    }
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Suppression du compte</title>
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
            <section id="cadreSupprim"> 
                <div id="messageSupprim">
                    <?= $message; ?>
                </div>
            </section>
        </main>
        <?php include ('footer.php'); ?>
    </body>
</html>