<aside>
  <div id="sidebar" class="nav-collapse ">
    <!-- sidebar menu start-->
    <ul class="sidebar-menu" id="nav-accordion">
      <!--p class="centered"><a href="profile.html"><img src="img/ui-sam.jpg" class="img-circle" width="80"></a></p-->
      <h5 class="centered"><i class="fa fa-user"></i> Compte de <?php echo $_SESSION['login']; ?></h5>
      <li class="mt">
        <a class="" href="#">
          <i class="fa fa-dashboard"></i>
          <span>ACCUEIL</span>
        </a>
        </li-->
      <li class="sub-menu">
        <a href="javascript:;">
          <i class="fa fa-desktop"></i>
          <span>ANIMAUX</span>
        </a>
        <ul class="sub">
          <li><a href="page_animale.php">Enregistrer un animal</a></li>
          <li><a href="page_animale.php">Liste des animaux</a></li>
          <li><a href="#">Supprimer un animal</a></li>
        </ul>
      </li>
      <li class="sub-menu">
        <a href="javascript:;">
          <i class="fa fa-desktop"></i>
          <span>OISEAUX</span>
        </a>
        <ul class="sub">
          <li><a href="page_oiseau.php">Enregistrer un oiseau</a></li>
          <li><a href="page_oiseau.php">Liste des oiseaux</a></li>
          <li><a href="page_sup_oiseau.php">Supprimer un oiseau</a></li>
        </ul>
      </li>
      <li class="sub-menu">
        <a href="javascript:;">
          <i class="fa fa-desktop"></i>
          <span>PRODUIT</span>
        </a>
        <ul class="sub">
          <li><a href="#">Enregistrer un produit</a></li>
          <li><a href="#">Liste des produits</a></li>
          <li><a href="#">Supprimer un produit</a></li>
        </ul>
      </li>
      <li class="sub-menu">
        <a href="javascript:;">
          <i class="fa fa-user"></i>
          <span>CATEGORIE</span>
        </a>
        <ul class="sub">
          <li><a href="page_categorie_produit.php">Categorie Produit </a></li>
          <li><a href="page_categorie_animale.php">Categorie Animal</a></li>
        </ul>
      </li>
      <li class="sub-menu">
        <a href="javascript:;">
          <i class="fa fa-user"></i>
          <span>CLIENT</span>
        </a>
        <ul class="sub">
          <li><a href="##">Enregistrer un client</a></li>
          <li><a href="##">Liste des clients</a></li>
          <li><a href="##">Supprimer un client</a></li>
        </ul>
      </li>
      <li class="sub-menu">
        <a href="javascript:;">
          <i class="fa fa-money"></i>
          <span>VENTE</span>
        </a>
        <ul class="sub">
          <li><a href="#">Enregistrer une vente</a></li>
          <li><a href="#">Liste des ventes</a></li>
          <li><a href="#">Supprimer une vente</a></li>
        </ul>
      </li>
  </div>
</aside>