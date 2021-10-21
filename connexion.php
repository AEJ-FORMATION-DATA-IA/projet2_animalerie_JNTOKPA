<?php
try {
  $bdd = new PDO('mysql:host=localhost;dbname=animalerie;charset=utf8', 'root', '');
} catch (Exception $e) {
  die('Erreur : ' . $e->getMessage());
}

//USER
$select_user = $bdd->prepare('SELECT * FROM user WHERE login=? AND pass=? AND mail=?');
$select_user_connexion = $bdd->prepare('SELECT * FROM user WHERE login=? AND pass=?');
$login_exist = $bdd->prepare('SELECT * FROM user WHERE login=?');
$mail_exist = $bdd->prepare('SELECT * FROM user WHERE mail=?');
$creer_compte = $bdd->prepare('INSERT INTO user (login, pass, mail) VALUES (?, ?, ?)');

//CATEGORIE
$libelle_exist = $bdd->prepare('SELECT * FROM categorie_produit WHERE libelle_categorie_p=?');
$ajout_categorie_produit = $bdd->prepare('INSERT INTO categorie_produit (libelle_categorie_p) VALUES (?)');
$select_all_categorie_produit = $bdd->prepare('SELECT * FROM categorie_produit ORDER BY libelle_categorie_p ASC');

$libelle_a_exist = $bdd->prepare('SELECT * FROM categorie_animale WHERE libelle_categorie_a=?');
$ajout_categorie_animale = $bdd->prepare('INSERT INTO categorie_animale (libelle_categorie_a) VALUES (?)');
$select_all_categorie_animale = $bdd->prepare('SELECT * FROM categorie_animale ORDER BY libelle_categorie_a ASC');

//ANIMAUX
$animal_exist = $bdd->prepare('SELECT * FROM animaux WHERE nom_animaux=? AND race_animaux=? AND poids_animaux=? AND age_animaux=? AND prix_animaux=? AND categorie_animaux=?');
$creer_animal = $bdd->prepare('INSERT INTO animaux (nom_animaux, race_animaux, poids_animaux, age_animaux, prix_animaux, categorie_animaux) VALUES (?,?,?,?,?,?)');
$select_all_animaux = $bdd->prepare('SELECT * FROM animaux ORDER BY nom_animaux ASC');

//OISEAUX
$oiseau_exist = $bdd->prepare('SELECT * FROM oiseaux WHERE nom_oiseaux=? AND prix_oiseaux=? AND bruit_oiseaux=? AND categorie_oiseaux=?');
$creer_oiseau = $bdd->prepare('INSERT INTO oiseaux (nom_oiseaux, prix_oiseaux, bruit_oiseaux, categorie_oiseaux) VALUES (?,?,?,?)');
$select_all_oiseaux = $bdd->prepare('SELECT * FROM oiseaux ORDER BY nom_oiseaux ASC');

//PRODUIT
$produit_exist = $bdd->prepare('SELECT * FROM produit WHERE libelle_produit=? AND prix_produit=? AND qtt_min=? AND qtt_stock=? AND categorie_p=?');
$creer_produit = $bdd->prepare('INSERT INTO produit (libelle_produit, prix_produit, qtt_min, qtt_stock, categorie_p) VALUES (?,?,?,?,?)');
$select_all_produit = $bdd->prepare('SELECT * FROM produit ORDER BY nom_produit ASC');

$selectCat = $bdd->prepare('SELECT * FROM animaux LEFT JOIN categorie_animale ON id.animaux = id.categorie_a ORDER BY libelle_categorie_a.categorie_animale');
