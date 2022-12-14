<?php

namespace iutnc\NetVOD\html;

class Header
{

    public function execute(): string
    {
        $deconnexion = '';
        $gestion = '';
        $accueil ='';
        $research = '';

        // Affichage des boutons si l'utilisateur est connecté
        if (isset($_SESSION['id'])) {
            $accueil = '<a href="?action=accueil" class="accueil">Retour à l’accueil</a>';
            $deconnexion = '<a href="?action=deconnexion" class="deconnexion">Déconnexion</a>';
            $gestion = '<a class="gestionCompte" href="?action=gestionCompte">Gestion du compte</a></li>';
            $research = '<a class="research" href="?action=research">Recherche</a></li>';
        }

        // Affichage du header
        $html = <<<END
        <header>
            <div class="logo">
                <a href="?action=accueil" style="text-decoration: none;
                                    font-size: 5em">NetVOD</a>
            </div>
            <ul class="Menu">
            <li id="m">$accueil &nbsp</li>
            <li id="m">$gestion &nbsp</li>
            <li id="m">$research &nbsp</li>
            <li id="m">$deconnexion &nbsp</li>
            </ul>
        </header>
        END;
        return $html;
    }
}