<?php 
    $message = "";
    if(isset($_POST['connexion'])){
        if(!empty($_POST['login']) AND !empty($_POST['pass'])){
            $login = htmlspecialchars($_POST['login']);
            $pass = sha1($_POST['pass']);
            $select_user_connexion->execute(array($login, $pass));
            $user_exist = $select_user_connexion->rowCount();
            if($user_exist != 1){
                $message = "Erreur sur les parametres de connexion, reessayez!";
            }else{
                $info_user = $select_user_connexion->fetch();
                $_SESSION['login'] = $info_user['login'];
                $_SESSION['connect'] = true;
                header('Location: page_acc.php?login='.$_SESSION['login']);
            }
        }else{
            $message = "Remplir les champs obligatoires";
        }
        
    }
    
?>