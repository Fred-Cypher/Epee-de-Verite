<?php
    require_once('cnx.php'); 
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
    <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>L'Épée de Vérité - Tomes</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=Finger+Paint" rel="stylesheet">
        <link rel="shortcut icon"  type="image/x-icon" href="images/epee.ico" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" media="screen" href="normalize.css">
        <link rel="stylesheet" type="text/css" media="screen" href="style.css">
    </head>
    <body>

        <?php include ('header.php'); ?>
        
        <main class="mb-3">
            <div class="container">
                <div class="row">
                    <div class="milieu">
                        <div class="row messageInfo mt-3 mb-1 p-2">
                            <h2 class="h6">Survolez le titre pour faire apparaître un résumé du tome</h2>
                            <span class="bragelonne">N.B. : Les images de couverture et les résumés proviennent du site de <a href="https://www.bragelonne.fr/catalogue/series/lepee-de-verite/" alt="Lien vers le site des Editions Bragelonne" target=_blank>Bragelonne</a></span>
                        </div>
                        <div class="livre row mt-3"> <!-- Rangée de 4 livres 1-->
                            <section class="description col-sm-6 col-md-3"> <!-- Ensemble image couverture et titre tome -->
                                <img class ="couverture" src="images/prequelle.jpg" alt="Couverture de la préquelle"/>
                                <!-- Infobulle qui apparaît au passage de la souris -->
                                <div class="titreTome m-2 p-1"> <!-- Renseignement rapide : titre -->
                                    <div class="tome">
                                        <i>Préquelle : Dette d'Os</i>
                                        <div class="info">
                                            <strong>Dette d'os</strong> : <br>
                                            Il y a très longtemps, avant la création de la Frontière, la guerre faisait rage entre D'Hara et les Contrées du Milieu.
                                            Dans ce climat inquiétant, une jeune femme se rendit dans la cité d'Aydindril pour obtenir une audience avec le Premier Sorcier. 
                                            Elle s'appelait Abby et venait lui demander de sauver les habitants de son village. 
                                            Il s'appelait Zeddicus Zu'l Zorander et sa lutte contre la dangereuse magie de Panis Rahl allait prendre un nouveau tournant…
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="description col-sm-6 col-md-3"> <!-- Ensemble image couverture et titre tome -->
                                <img class ="couverture" src="images/tome1.jpg" alt="Couverture du tome 1"/>
                                <!-- Infobulle qui apparaît au passage de la souris -->
                                <div class="titreTome m-2 p-1"> <!-- Renseignement rapide : titre -->
                                    <div class="tome">
                                        <i>1 - La Première Leçon du Sorcier</i>
                                        <div class="info">
                                            <strong>La première leçon du Sorcier</strong> : <br>
                                            Richard Cypher vivait paisiblement dans la forêt de Hartland jusqu'à ce qu'il sauve cette belle inconnue des griffes de ses poursuivants. 
                                            Elle ne consent à lui dire que son nom, Kahlan, mais dès le premier regard il sait qu'il ne pourra plus jamais la quitter. 
                                            Il la conduit à son ami Zedd sans se douter que celui-ci est le grand sorcier que cherchait la jeune femme. 
                                            Car un tyran sanguinaire du nom de Darken Rahl s'est emparé des Contrées du Milieu. 
                                            L'heure est venue pour Richard de recevoir la légendaire Épée de Vérité qui lui donne le terrible pouvoir de rendre justice...
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="description col-sm-6 col-md-3"> <!-- Ensemble image couverture et titre tome -->
                                <img class ="couverture" src="images/tome2.jpg" alt="Couverture du tome 2"/>
                                <!-- Infobulle qui apparaît au passage de la souris -->
                                <div class="titreTome m-2 p-1"> <!-- Renseignement rapide : titre -->
                                    <div class="tome">
                                        <i>2 - La Pierre des Larmes</i>
                                        <div class="info">
                                            <strong>La Pierre des Larmes</strong> : <br>
                                            La victoire de Richard, Zedd et Kahlan sur le tyran Darken Rahl a déchiré le voile qui sépare le monde des vivants et le royaume des morts. 
                                            Le terrible Gardien sera bientôt en mesure de le traverser. Ses serviteurs rôdent déjà et nul ne peut leur échapper. 
                                            Pour Zedd le sorcier,l'unique espoir réside en une certaine pierre, la petite fille qui la porte… et le Sourcier de Vérité. 
                                            Mais Richard est face à son destin. S'il n'apprend pas la magie, il mourra. Les Sœurs de la Lumière ne la lui enseigneront qu'à condition qu'il se soumette. 
                                            Or pour rien au monde Richard ne veut redevenir esclave...
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="description col-sm-6 col-md-3"> <!-- Ensemble image couverture et titre tome -->
                                <img class ="couverture" src="images/tome3.jpg" alt="Couverture du tome 3"/>
                                <!-- Infobulle qui apparaît au passage de la souris -->
                                <div class="titreTome m-2 p-1"> <!-- Renseignement rapide : titre -->
                                    <div class="tome">
                                        <i>3 - Le Sang de la déchirure</i>
                                        <div class="info">
                                            <strong>Le Sang de la déchirure</strong> : <br>
                                            La barrière qui séparait l'Ancien et le Nouveau Monde a été brisée. 
                                            Des forces anciennes et terrifiantes viennent assiéger les Contrées du Milieu. 
                                            Par le passé, elles n'ont pu être repoussées qu'en murant l'Ancien Monde à l'aide d'une barrière magique. 
                                            Mais à présent celle-ci n'est plus. Richard et Kahlan sont les seuls à pouvoir faire face. 
                                            Mais Kahlan est obligée de se cacher loin de son bien-aimé, traquée par des fanatiques qui ont entrepris d'assassiner tous les possesseurs de magie...
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>

                        <div class="livre row"> <!-- Rangée de 4 livres 2 -->
                            <section class="description col-sm-6 col-md-3"> <!-- Ensemble image couverture et titre tome -->
                                <img class ="couverture" src="images/tome4.jpg" alt="Couverture du tome 4"/>
                                <!-- Infobulle qui apparaît au passage de la souris -->
                                <div class="titreTome m-2 p-1"> <!-- Renseignement rapide : titre -->
                                    <div class="tome">
                                        <i>4 - Le Temple des Vents </i>
                                        <div class="info">
                                            <strong>Le Temple des Vents</strong> : <br>
                                            « L'INCENDIE VIENDRA AVEC LA LUNE ROUGE. CELUI QUI EST LIÉ À L'ÉPÉE VERRA MOURIR LES SIENS. » ? 
                                            L'épée de Vérité en main, Richard a combattu la mort et secouru le peuple de D'Hara. 
                                            Mais l'empereur Jagang, puissant jusqu'à la démence, lui oppose un ennemi insaisissable, une horrible maladie qui frappe des milliers d'innocents. 
                                            Richard cherche un remède mais il est pris entre deux feux, car selon la prophétie, il devra perdre la femme qu'il aime ou sa propre vie. 
                                            Richard et Kahlan vont tout risquer pour mettre au jour la source du fléau : une magie enfermée depuis trois mille ans...
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="description col-sm-6 col-md-3"> <!-- Ensemble image couverture et titre tome -->
                                <img class ="couverture" src="images/tome5.jpg" alt="Couverture du tome 5"/>
                                <!-- Infobulle qui apparaît au passage de la souris -->
                                <div class="titreTome m-2 p-1"> <!-- Renseignement rapide : titre -->
                                    <div class="tome">
                                        <i>5 - L'Âme du feu</i>
                                        <div class="info">
                                            <strong>L'Âme du feu</strong> : <br>
                                            Pour arracher à la mort l'homme qu'elle aime, la mère inquisitrice a prononcé le nom des trois carillons. 
                                            Sans le vouloir, elle a ainsi invoqué des êtres de l'au-delà et libéré une puissance destometrice inimaginable. 
                                            On raconte que les trois Carillons volent les âmes des vivants et absorbent la magie du monde ! 
                                            Richard, Kahlan et Zedd vont se lancer dans une quête effrayante. S'ils perdaient leurs pouvoirs magiques, comment pourraient-ils s'opposer aux hordes du terrible empereur Jagang ?
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="description col-sm-6 col-md-3"> <!-- Ensemble image couverture et titre tome -->
                                <img class ="couverture" src="images/tome6.jpg" alt="Couverture du tome 6"/>
                                <!-- Infobulle qui apparaît au passage de la souris -->
                                <div class="titreTome m-2 p-1"> <!-- Renseignement rapide : titre -->
                                    <div class="tome">
                                        <i>6 - La Foi des réprouvés</i>
                                        <div class="info">
                                            <strong>La Foi des réprouvés</strong> : <br>
                                            Kahlan est aux portes de la mort. 
                                            Richard, qui se méfie des prophéties plus que quiconque, a soudain une vision : il doit emmener sa femme loin de l'armée qui les protège et livrer son peuple à son funeste destin. 
                                            Kahlan refuse cependant d'abandonner la cause des Contrées du Milieu. 
                                            Rompant le dernier serment fait à son mari, la Mère Inquisitrice se retrouvera face à l'architecte de la terreur qui balaie le pays : l'empereur fou, Jagang, celui qui marche dans les rêves, a juré de déverser sa rage sur le Nouveau Monde…
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="description col-sm-6 col-md-3"> <!-- Ensemble image couverture et titre tome -->
                                <img class ="couverture" src="images/tome7.jpg" alt="Couverture du tome 7"/>
                                <!-- Infobulle qui apparaît au passage de la souris -->
                                <div class="titreTome m-2 p-1"> <!-- Renseignement rapide : titre -->
                                    <div class="tome">
                                        <i>7 - Les Piliers de la création</i>
                                        <div class="info">
                                            <strong>Les Piliers de la création</strong> : <br>
                                            La jeune Jennsen, harcelée depuis sa plus tendre enfance par ses démons intérieurs, a trouvé le moyen de les réduire au silence. 
                                            Mais la fin de son épreuve est le début d'un calvaire pour le reste du monde : impliquée contre son gré dans un combat dont l'enjeu est la vengeance et la conquête, Jennsen tombe sous la domination de forces obscures plus atroces que tout ce qu'elle aurait pu imaginer. 
                                            Et si les voix de ses démons avaient toujours été réelles ?
                                            Pendant ce temps, Richard et Kahlan doivent toujours compter avec la menace des troupes de l'Ordre Impérial.
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>

                        <div class="livre row"> <!-- Rangée de 4 livres 3 -->
                            <section class="description col-sm-6 col-md-3"> <!-- Ensemble image couverture et titre tome -->
                                <img class ="couverture" src="images/tome8.jpg" alt="Couverture du tome 8"/>
                                <!-- Infobulle qui apparaît au passage de la souris -->
                                <div class="titreTome m-2 p-1"> <!-- Renseignement rapide : titre -->
                                    <div class="tome">
                                        <i>8 - L'Empire des vaincus</i>
                                        <div class="info">
                                            <strong>L'Empire des vaincus</strong> : <br>
                                            Inspiré par la révolution qui a tout changé à Altur'Rang, Richard imaginé un plan pour miner de l'intérieur le pouvoir de Jagang, l'homme qui rêve de conquérir et d'écraser le Nouveau Monde. 
                                            Mais au nord, la catastrophe se précise. 
                                            Alors qu'Aydindril est tombée depuis longtemps, Zedd et Adie, uniques défenseurs de la Forteresse du Sorcier, sont prisonniers d'une Soeur de l'Obscurité décidée à leur arracher tous leurs secrets.
                                            En chemin, Richard et ses compagnons rencontrent Owen, un voyageur solitaire qui cherche le seigneur Rahl pour lui demander d'aider un étrange empire à repousser l'Ordre Impérial.
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="description col-sm-6 col-md-3"> <!-- Ensemble image couverture et titre tome -->
                                <img class ="couverture" src="images/tome9.jpg" alt="Couverture du tome 9"/>
                                <!-- Infobulle qui apparaît au passage de la souris -->
                                <div class="titreTome m-2 p-1"> <!-- Renseignement rapide : titre -->
                                    <div class="tome">
                                        <i>9 - La Chaîne des flammes</i>
                                        <div class="info">
                                            <strong>La Chaîne des flammes</strong> : <br>
                                            Grièvement blessé lors d'un combat contre les soudards de l'Ordre Impérial, Richard serait sans doute mort sans l'intervention de Nicci. 
                                            Un sauvetage miraculeux qui laisse le Sourcier très faible, désorienté... et peut-être victime d'une formidable hallucination. 
                                            En effet, quand il s'enquiert du sort de Kahlan... il découvre que personne, parmi ses compagnons, ne semble la connaître. 
                                            Même Cara, sa fidèle garde du corps, ne se souvient pas qu'il ait un jour été marié à la Mère Inquisitrice. 
                                            Alors que la guerre contre Jagang continue de faire rage, Richard part en quête de son passé et de sa mémoire...
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="description col-sm-6 col-md-3"> <!-- Ensemble image couverture et titre tome -->
                                <img class ="couverture" src="images/tome10.jpg" alt="Couverture du tome 10"/>
                                <!-- Infobulle qui apparaît au passage de la souris -->
                                <div class="titreTome m-2 p-1"> <!-- Renseignement rapide : titre -->
                                    <div class="tome">
                                        <i>10 - Le Fantôme du Souvenir</i>
                                        <div class="info">
                                            <strong>Le Fantôme du Souvenir</strong> : <br>
                                            Depuis qu'elle a tout oublié de sa vie et de son identité, Kahlan est potentiellement la femme la plus dangereuse de l'univers. 
                                            Et pour tous ceux qui ne se souviennent plus d'elle, la fin du monde a déjà commencé, même s'ils ne s'en doutent pas… 
                                            Seul contre tous, Richard garde en mémoire l'image de la femme qu'il aime. 
                                            Refusant de capituler face à une extraordinaire machination, il a réussi à convaincre ses plus fidèles amis que sa quête n'est pas une pure folie. 
                                            Mais les choses se compliquent encore...
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="description col-sm-6 col-md-3"> <!-- Ensemble image couverture et titre tome -->
                                <img class ="couverture" src="images/tome11.jpg" alt="Couverture du tome 11"/>
                                <!-- Infobulle qui apparaît au passage de la souris -->
                                <div class="titreTome m-2 p-1"> <!-- Renseignement rapide : titre -->
                                    <div class="tome">
                                        <i>11 - L'Ombre d'une Inquisitrice</i>
                                        <div class="info">
                                            <strong>L'Ombre d'une Inquisitrice</strong> : <br>
                                            Les hommes et les femmes libres sombrent peu à peu dans les ténèbres. 
                                            Presque submergés par les forces de la destometion, ils ne sont plus assez forts pour empêcher l'avènement d'un nouveau monde de cruauté. 
                                            Bien qu'il soit à la tête des forces de la liberté, Richard sait qu'il ne doit pas empêcher le destin de s'accomplir. 
                                            Après un très long périple commencé sous l'étendard de la Première Leçon du Sorcier, il est sur le point de découvrir la Onzième, celle qui, depuis l'aube des temps, ne fut jamais écrite ni prononcée à haute voix. 
                                            Celle qui changera à jamais le monde…
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>

                        <div class="livre row mb-4"> <!-- Rangée de 4 livres 4 -->
                            <section class="description col-sm-6 col-md-3"> <!-- Ensemble image couverture et titre tome -->
                                <img class ="couverture" src="images/tome12.jpg" alt="Couverture du tome 12"/>
                                <!-- Infobulle qui apparaît au passage de la souris -->
                                <div class="titreTome m-2 p-1"> <!-- Renseignement rapide : titre -->
                                    <div class="tome">
                                        <i>12 - La Machine à présage</i>
                                        <div class="info">
                                            <strong>La Machine à présage</strong> : <br>
                                            Alors que le Palais du Peuple célèbre les noces de Cara et Benjamin, Richard et Kahlan se réjouissent du retour de la paix, après de longues années de guerre contre Jagang et ses hordes. 
                                            Mais le destin n'en a pas fini avec eux, et il ne tarde pas à le leur faire savoir. 
                                            D'étranges rencontres, des événements troublants, puis des drames de plus en plus terribles arrachent les deux époux à leur quiétude. 
                                            Cette fois, la menace ne vient plus de l'extérieur…
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="description col-sm-6 col-md-3"> <!-- Ensemble image couverture et titre tome -->
                                <img class ="couverture" src="images/tome13.jpg" alt="Couverture du tome 13"/>
                                <!-- Infobulle qui apparaît au passage de la souris -->
                                <div class="titreTome m-2 p-1"> <!-- Renseignement rapide : titre -->
                                    <div class="tome">
                                        <i>13 - Le Troisième royaume</i>
                                        <div class="info">
                                            <strong>Le Troisième royaume</strong> : <br>
                                            Après leur combat victorieux contre la Pythie-Silence, Richard et Kahlan, contaminés par une mortelle souillure, sont tous deux plongés dans une inconscience proche du coma. 
                                            Par bonheur, Zedd, Nicci et leurs compagnons arrivent à temps pour sortir leurs amis de la tanière de Jit. 
                                            À présent, il faut les ramener le plus vite possible au Palais du Peuple, où Zedd et Nicci pourront mobiliser leur magie afin de les arracher à la mort…
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="description col-sm-6 col-md-3"> <!-- Ensemble image couverture et titre tome -->
                                <img class ="couverture" src="images/tome14.jpg" alt="Couverture du tome 14"/>
                                <!-- Infobulle qui apparaît au passage de la souris -->
                                <div class="titreTome m-2 pt-1 pb-1"> <!-- Renseignement rapide : titre -->
                                    <div class="tome">
                                        <i>14 - Le Crépuscule des Prophéties</i>
                                        <div class="info">
                                            <strong>Le Crépuscule des Prophéties</strong> : <br>
                                            La course contre la mort continue pour Richard et Kahlan. 
                                            Contaminés par la souillure de Jit, ils doivent rallier au plus vite le Palais du Peuple, où Zedd et Nicci les guériront à l'abri d'un champ de protection. 
                                            Mais alors que les demi-humains lancés à leurs trousses sont résolus à les arrêter, Hannis Arc et l'empereur Sulachan marchent eux aussi vers le palais, avec l'intention de le rayer de la carte.
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section class="description col-sm-6 col-md-3"> <!-- Ensemble image couverture et titre tome -->
                                <img class ="couverture" src="images/tome15.jpg" alt="Couverture du tome 15"/>
                                <!-- Infobulle qui apparaît au passage de la souris -->
                                <div class="titreTome m-2 p-1"> <!-- Renseignement rapide : titre -->
                                    <div class="tome">
                                        <i>15 - Le Cœur de la guerre</i>
                                        <div class="info">
                                            <strong>Le Cœur de la guerre</strong> : <br>
                                            Un héros vient de mourir et l'horizon s'assombrit pour ceux qu'il laisse derrière lui.  
                                            À Saavedra, dans la citadelle, le bûcher funéraire est sur le point d'être embrasé. 
                                            Lorsque ses flammes cesseront de crépiter, tout espoir s'éteindra. 
                                            Au loin, dans les plaines d'Azrith, les hordes de demi-humains et de morts ranimés se préparent à attaquer le Palais du Peuple. 
                                            Le dernier rempart avant une victoire totale.  
                                            Tant d'obscurité et si peu d'espoir…
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        
        <?php include ('footer.php'); ?>
        
    </body>
</html>