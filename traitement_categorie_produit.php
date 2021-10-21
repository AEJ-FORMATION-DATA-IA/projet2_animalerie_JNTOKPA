<?php
$message = "";
    if(isset($_POST['creer_cate_produit'])){
        if(!empty($_POST['libelle'])){
            $libelle = htmlspecialchars($_POST['libelle']);
            $libelle_exist->execute(array($libelle));
            $nbre_lib = $libelle_exist->rowCount();
            if($nbre_lib != 0){
                 $message = "Cette categorie existe deja";
            }else{
                $ajout_categorie_produit->execute(array($libelle));
                $message = "Categorie enregistrée avec succès";
                header('Location: page_categorie_produit.php');
            }
        }else{
            $message = "Remplir tous les champs";
        }
        
    }
    
?>   