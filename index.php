<?php include('sesssion.php');?>
<!DOCTYPE html>
  <html>
    <head>
    <!-- Meta -->
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- *** -->
    <!-- Main CSS -->
<link rel="stylesheet" type="text/css" href="styles.css">
<!-- Materialize Min CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
<!-- Fonts -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">   
<!-- Materialize Min Js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<!-- JQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>    
<script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>
    </head>
<body>
<!-- Start Region - Formulaire Connexion -->
<?php include('form.php');?>
<!-- End Region -->
<!-- Start Region - Changement de la couleur du document-->
<?php include('color.php');?>
<!-- End Region -->
<!-- Start Region - Methode pour récupérer les flux rss -->
<?php include('method.php');?>
<!-- End Region -->
<?php if (isset($_POST["newform"]) && !empty($_POST["nom"]) && !empty($_POST["prenom"]) ) { ?>
    <div class="row">
    <h3 class="col s8 m8 l8 offset-s2 offset-m2 offset-l2 blue teal lighten-3"><p class="center">Super Rss Reader</p></h1>
    </div>
<!-- Start Region - Navbar-->
<?php include('nav.php');?>
<!-- End Region -->
<!-- Start Region - Rss-->
<?php include('rss.php');?>
<!-- End Region -->
<!-- Start Region - Modale -->
<?php include('modal.php');?>
<!-- End Region -->
<!-- Start Region - Page 404 -->
<?php } elseif (isset($_POST["newform"])) {include('404.php');}?>
<!-- End Region -->
<!-- Start Region - Scripts Personnels -->
<?php include('script.php');?>
<!-- End Region -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>
</html>