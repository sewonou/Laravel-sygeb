<?php
/**
 * Created by PhpStorm.
 * User: Emmanuel
 * Date: 15/09/2018
 * Time: 18:34
 */
?>
<aside class="seipkon-main-sidebar">
    <nav id="sidebar">
        <!-- Sidebar Profile Start -->
        <div class="sidebar-profile clearfix">
            <div class="profile-avatar">
                <img src="{{asset('assets/img/avatar.jpg')}}" alt="profile" />
            </div>
            <div class="profile-info">
                <h3>Jhon Doe</h3>
                <p>Welcome Admin !</p>
            </div>
        </div>
        <!-- Sidebar Profile End -->

        <!-- Menu Section Start -->
        <div class="menu-section">
            <h3>General</h3>
            <ul class="list-unstyled components">
                <li class="active">
                    <a href="#">
                        <i class="fa fa-dashboard"></i>
                        Tableau de bord
                    </a>
                </li>

                <li>
                    <a href="#apps" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-th"></i>
                        Ressources humaines
                    </a>
                    <ul class="collapse list-unstyled" id="apps">
                        <li><a href="#">Liste du personnel</a></li>
                        <li><a href="#">Liste des services</a></li>
                        <li><a href="#">~~~~~~</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#mail" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-envelope"></i>
                        Paramètres
                    </a>
                    <ul class="collapse list-unstyled" id="mail">
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </li>

            </ul>
        </div>
        <!-- Menu Section End -->

        <!-- Menu Section Start -->
        <div class="menu-section">
            <h3>Stock</h3>
            <ul class="list-unstyled components">
                <li>
                    <a href="#stock" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-shopping-cart"></i>
                        Fiche Stock
                    </a>
                    <ul class="collapse list-unstyled" id="stock">
                        <li><a href="#">Liste du stock</a></li>
                        <li><a href="#">Ajouter article</a></li>
                        <li><a href="#">Statistiques</a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </li>
                <li>
                    <a href="#achat" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-shopping-cart"></i>
                        Fiche d'entrée
                    </a>
                    <ul class="collapse list-unstyled" id="achat">
                        <li><a href="#">Liste du stock</a></li>
                        <li><a href="#">Ajouter article</a></li>
                        <li><a href="#">Statistiques</a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </li>
                <li>
                    <a href="#sortie" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-shopping-cart"></i>
                        Fiche de retour
                    </a>
                    <ul class="collapse list-unstyled" id="sortie">
                        <li><a href="#">Liste du stock</a></li>
                        <li><a href="#">Ajouter article</a></li>
                        <li><a href="#">Statistiques</a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </li>
                <li>
                    <a href="#transfert" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-shopping-cart"></i>
                        Fiche de transfert
                    </a>
                    <ul class="collapse list-unstyled" id="transfert">
                        <li><a href="#">Liste du stock</a></li>
                        <li><a href="#">Ajouter article</a></li>
                        <li><a href="#">Statistiques</a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </li>
                <li>
                    <a href="#retour" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-shopping-cart"></i>
                        Fiche de sortie
                    </a>
                    <ul class="collapse list-unstyled" id="retour">
                        <li><a href="#">Liste du stock</a></li>
                        <li><a href="#">Ajouter article</a></li>
                        <li><a href="#">Statistiques</a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </li>
                <li>
                    <a href="#mobilier" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-file-text-o"></i>
                        Affectation Mobilier
                    </a>
                    <ul class="collapse list-unstyled" id="mobilier">
                        <li><a href="#">Liste des mobiliers</a></li>
                        <li><a href="#">Ajouter un mobilier</a></li>

                    </ul>
                </li>
            </ul>
        </div>
        <!-- Menu Section End -->

        <!-- Menu Section Start -->
        <div class="menu-section">
            <h3>Gestion budgétaire</h3>
            <ul class="list-unstyled components">
                <li>
                    <a href="#ex_error" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-exclamation-circle"></i>
                        Budget
                    </a>
                    <ul class="collapse list-unstyled" id="ex_error">
                        <li><a href="#">Ajouter Exercice</a></li>
                        <li><a href="#">Ajouter Budget</a></li>
                        <li><a href="#">Détails budget</a></li>
                        <li><a href="#">Statistiques</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#ex_components" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-book"></i>
                        Dépenses
                    </a>
                    <ul class="collapse list-unstyled" id="ex_components">
                        <li><a href="#">Bon de livraison</a></li>
                        <li><a href="#">Bon de formation</a></li>
                        <li><a href="#">Bon salarial</a></li>
                        <li><a href="#">Gestion des fournisseurs</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#ex_authentication" data-toggle="collapse" aria-expanded="false">
                        <i class="fa fa-unlock-alt"></i>
                        Demande de formation
                    </a>
                    <ul class="collapse list-unstyled" id="ex_authentication">
                        <li><a href="#">Ajouter</a></li>
                        <li><a href="#">Liste des formations</a></li>
                        <li><a href="#">Statistiques</a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </li>


            </ul>
        </div>
        <!-- Menu Section End -->

    </nav>
</aside>
