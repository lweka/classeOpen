<?php
    require 'functions/databaseConnect.php' ;

    $pages = scandir("pages/");

    if(isset($_GET['page']) && !empty($_GET['page'])) {
        if (in_array($_GET['page'].'.php',$pages)) {
            $page = $_GET['page'];
        } else {
            $page = 'error';
        }
    } else {
        $page = 'home';
    }

    $pages_functions = scandir("functions/");
    if(in_array($page.'.func.php',$pages_functions)) {
        include 'functions/'. $page. '.func.php';
    }
?>


<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

    <!-- Site Metas -->
    <title>adiol site web complet</title>
    <meta name="keywords" content="adiol plateforme de la meilleur chant">
    <meta name="description" content="adiol, blog professionnel, controle d'equipement">
    <meta name="author" content="adiol site web complet">

    <!-- Site css -->
   

   

</head>

<body>
    <?php 
       require 'body/topbar.php'; 
    ?>

    <div class="container">
        <?php include 'pages/'. $page. '.php'; ?>
    </div>







   
    
</body>

</html>