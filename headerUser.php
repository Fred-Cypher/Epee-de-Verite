<?php
    $jour = date('d');
    $mois = date('m');
    $annee = date('Y');

    $heure = date('H');
    $heureF = $heure + 2; // Modification l'heure pour la France si l'hébergeur est réglé sur un autre créneau horaire, ici 2 heures de décalage
    $minute = date('i');

?>

<header class="row"> <!-- Bandeau haut de page  -->
    <div class="logo col-md-2">
        <img id="epee" src="images/epee2.png" alt="logo du site, épée" />
        <p>Compte : <?= $pseudo ?></p>
    </div>
    <div class="col-md-10 bandeau">
        <div class="text-end date pe-2 pt-1 pb-1">
            <?= ' ' . $jour . '/' . $mois . '/' . $annee . ', ' . $heureF. ' : ' . $minute; ?>
        </div>
        <div class="titrePage text-center pt-3 pb-3">
            <h1>L'Épée de Vérité</h1>
            <h2>Les personnages</h2>
        </div>
        <div>
            <nav class="pt-2 pb-2">
                <ul class="navbar-nav links">
                    <li class="nav-item">
                        <a href="deconnexion.php" title="Déconnexion à l'espace membre">Déconnexion</a>
                    </li>
                    <li class="nav-item">
                        <a href="enregistrement.php" title="Enregistrer une fiche personnage">Enregistrer un personnage</a>
                    </li>
                    <li class="nav-item">
                        <a href="modifierFiche.php" title="Modifier une fiche personnage">Modifier un personnage</a>
                    </li>
                    <li class="nav-item">
                        <a href="http://sites.byethost4.com/epeeverite/" target=_blank>Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="http://lepeedeverite.e-monsite.com/" target=_blank>Forum</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
