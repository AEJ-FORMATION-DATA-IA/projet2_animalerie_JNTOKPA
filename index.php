<?php
session_start();
include_once 'connexion.php';
include_once 'traitement_login.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Jnt - ANIMAGEST</title>

  <!-- Favicons -->
  <!--link href="img/favicon.png" rel="icon"-->
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap core CSS -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!--external css-->
  <link href="lib/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

</head>

<body>
  <div id="login-page">
    <div class="container">
      <form class="form-login" action="" method="POST">
        <h2 class="form-login-heading">CONNECTEZ-VOUS</h2>
        <div class="login-wrap">
          <?php echo $message; ?>
          <input type="text" class="form-control" name="login" placeholder="Login" autofocus>
          <br>
          <input type="password" class="form-control" name='pass' placeholder="Password">
          <br>
          <button class="btn btn-theme btn-block" type="submit" name="connexion"><i class="fa fa-lock"></i> CONNEXION</button>
          <hr>
          <div class="registration">
            Vous n'avez pas encore de compte?<br />
            <a class="" href="page_creation_compte.php">
              Creer un compte
            </a>
          </div>
        </div>
      </form>
    </div>
  </div>

  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>

  <script type="text/javascript" src="lib/jquery.backstretch.min.js"></script>
  <script>
    $.backstretch("img/b.jpg", {
      speed: 500
    });
  </script>
</body>

</html>