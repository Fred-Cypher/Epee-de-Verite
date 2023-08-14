<?php
    require_once('cnx.php'); 
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Mentions légales</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Finger+Paint" rel="stylesheet">
        <link rel="shortcut icon"  type="image/x-icon" href="images/epee.ico" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" media="screen" href="normalize.css">
        <link rel="stylesheet" type="text/css" media="screen" href="style.css">
    </head>
    <body>
        <?php include ('header.php'); ?>
        
        <main>
            <div class="container">
                <div class="row">
                    <div class="milieu">
                        <div class="row mentions mt-4 col-12 col-sm-11 col-md-8 col-lg-7 p-3 mb-3">
                            <div class="text-start descSite mt-3">
                                Ce site portant sur les personnages de la série de Fantasy "L'Épée de Vérité", de Terry Goodkind est un site personnel, collaboratif et bénévole. <br/>
                            </div>
                            <div class="text-start editSite mt-3">
                                Le site est édité par :<br>
                                Richard Cypher<br>
                                Forteresse des Sorciers<br>
                                Aydindril<br>
                                Téléphone : 00-00-00-00-00<br>
                                Mail : richardcypher@dhara.dh
                            </div>
                            <div class="text-start hebergementSite mt-3">
                                Le site est hébergé par byethost.com
                            </div>
                            <div class="text-start cnil mt-3">
                                Numéro de déclaration à la CNIL : ******* <br/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
        <?php include ('footer.php'); ?>
        
    </body>
</html>