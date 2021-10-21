<?php 
$message = "";
    if(isset($_POST['creation'])){
        if(!empty($_POST['login']) AND !empty($_POST['pass']) AND !empty($_POST['mail'])){
            $login = htmlspecialchars($_POST['login']);
            $pass = sha1($_POST['pass']);
            $mail = htmlspecialchars($_POST['mail']);
            $select_user ->execute(array($login, $pass, $mail));
            $nbre_user = $select_user->rowCount();
            if($nbre_user ==1){
                $message = "Ce compte existe deja.";
            }else{
                $login_exist->execute(array($login));
                $nbre_login = $login_exist->rowCount();
                if($nbre_login == 1){
                    $message = "Ce login est deja utilisé";
                }else{
                    $mail_exist->execute(array($mail));
                    $nbre_mail = $mail_exist->rowCount();
                    if($nbre_mail == 1){
                        $message = "Ce mail est deja utilisé";
                    }else{
                        $creer_compte->execute(array($login, $pass, $mail));
                        header('Location: index.php');
                    }
                }
            }
        }else{
            $message = "Veuillez remplir tous les champs";
        }
    }

?>