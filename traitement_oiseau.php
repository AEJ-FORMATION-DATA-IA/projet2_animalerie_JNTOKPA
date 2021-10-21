<?php 
$message = "";
    if(isset($_POST['creer_oiseau'])){
        if(!empty($_POST['nom']) AND !empty($_POST['prix']) AND !empty($_POST['bruit']) AND !empty($_POST['categorie_a'])){
            $nom = htmlspecialchars($_POST['nom']);
            $prix = htmlspecialchars($_POST['prix']);
            $bruit = htmlspecialchars($_POST['bruit']);
            $categorie_a = htmlspecialchars($_POST['categorie_a']);
            $oiseau_exist ->execute(array($nom, $prix, $bruit, $categorie_a));
            $nbre_oiseau = $oiseau_exist->rowCount();
            if($nbre_animal ==1){
                $message = "Cet oiseau existe deja.";
            }else{
                $creer_oiseau->execute(array($nom, $prix, $bruit, $categorie_a));
                header('Location: page_oiseau.php');
                $message = "Oiseau enregistré avec succes";
            }
        }else{
            $message = "Veuillez remplir tous les champs";
        }
    }

?>