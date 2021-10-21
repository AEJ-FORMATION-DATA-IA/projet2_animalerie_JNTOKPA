<?php 
$message = "";
    if(isset($_POST['creer_animal'])){
        if(!empty($_POST['nom']) AND !empty($_POST['race']) AND !empty($_POST['poids']) AND !empty($_POST['age']) AND !empty($_POST['prix']) AND !empty($_POST['categorie_a'])){
            $nom = htmlspecialchars($_POST['nom']);
            $race = htmlspecialchars($_POST['race']);
            $poids = htmlspecialchars($_POST['poids']);
            $age = htmlspecialchars($_POST['age']);
            $prix = htmlspecialchars($_POST['prix']);
            $categorie_a = htmlspecialchars($_POST['categorie_a']);
            $animal_exist ->execute(array($nom, $race, $poids, $age, $prix, $categorie_a));
            $nbre_animal = $animal_exist->rowCount();
            if($nbre_animal ==1){
                $message = "Cet animal existe deja.";
            }else{
                $creer_animal->execute(array($nom, $race, $poids, $age, $prix, $categorie_a));
                header('Location: page_animale.php');
                $message = "Animal enregistré avec succes";
            }
        }else{
            $message = "Veuillez remplir tous les champs";
        }
    }

?>