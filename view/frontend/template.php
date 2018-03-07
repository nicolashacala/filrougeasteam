<!DOCTYPE html>

<html lang="fr">

<head>
    <title>Le syndicat des locataires</title>
    <meta name = "Description" content = "Auteur: G de Wolf, 
    Longueur: 1 page ">
    <meta name="theme-color" content="#272E39"/>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!--[if lte IE 8]><script src="public/js/ie/html5shiv.js"></script><![endif]-->
    <link rel="stylesheet" href="public/css/main.css" />
    <!--[if lte IE 8]><link rel="stylesheet" href="public/css/ie8.css" /><![endif]-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css">
</head>
    <body>
        <?php 
            if(isset($_SESSION["connexionAdmin"])){
                if($_SESSION["connexionAdmin"] == true){
                    include('disconnectionButton.php');
                }
            }
            else {
                include('connectionButton.php');
            }
        ?>
        <?= $content ?>

        <?php 
            if(isset($_GET['action'])){
                if($_GET['action'] == 'filter'){
                    include ('sidebar.php'); 
                }
            }
            else{
                include ('sidebar.php');
            }
        ?>
        <?php include('connectionModal.php'); ?>

        <script src="public/js/jquery.min.js"></script>
        <script src="public/js/skel.min.js"></script>
        <script src="public/js/util.js"></script>
        <!--[if lte IE 8]><script src="public/js/ie/respond.min.js"></script><![endif]-->
        <script src="public/js/main.js"></script>
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    </body>
</html>