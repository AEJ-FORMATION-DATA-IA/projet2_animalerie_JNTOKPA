<?php
session_start();
include_once 'connexion.php';
include_once 'traitement_animal.php';
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
  <link href="lib/advanced-datatable/css/demo_page.css" rel="stylesheet" />
  <link href="lib/advanced-datatable/css/demo_table.css" rel="stylesheet" />
  <link rel="stylesheet" href="lib/advanced-datatable/css/DT_bootstrap.css" />
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet">

</head>

<body>
  <section id="container">

    <?php
    include_once 'header.php';
    include_once 'menu.php';
    ?>
    <section id="main-content">

      <?php include_once 'form_animal.php'; ?>

    </section>


    <section id="main-content">

      <?php include_once 'table_animal.php'; ?>

    </section>

    <?php include_once 'footer.php'; ?>

  </section>

  <?php include_once 'script.php'; ?>
</body>

</html>