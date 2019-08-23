<?php
session_start();
$_SESSION['prenom'] = 'felix';
$_SESSION['nom'] = 'chat';
$_SESSION['couleur'] = 'noir';
$_SESSION['nombre'] = 0;

?>
<!DOCTYPE html>
  <html>
    <head>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- For the modal -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>           
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
      <!-- Browser website is optimized for mobile-->
      <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>
    <body>
<!-- Formulaire Connexion -->
<?php if (!isset($_POST["newform"])) { ?>
<!--  -->
<form method="post" action="index.php" onsubmit="getParameters()">
<fieldset>
        <legend>Connexion</legend>
<label>Nom</label><br><input type="text" name="prenom" /><br>
<label>Prénom</label><br><input type="text" name="nom" /><br>
<div class="input-field col s12">
        <select name="couleur">
            <option value="black">Noir</option>
            <option value="red">Rouge</option>
            <option value="blue">Bleu</option>
        </select>
        <label>Choix du design</label>
</div>
<label>Nombre d'articles</label><br><input type="number" name="nombre" min="3" max="8" step="1"/><br>
<br>
<input type="submit" name="newform" value="Se Connecter" id="formulaire">
</fieldset>
</form>
<!--  -->
<?php } ?>

<!-- Méthode pour récupérer un flux rss-->
<?php
function getRSS($url)
{
$url1 = "https://www.01net.com/rss/actualites/science-recherche/"; /* insérer ici l'adresse du flux RSS de votre choix */
$url;
$rss = simplexml_load_file($url);
echo '<ul class = "collection with-header">';
foreach ($rss->channel->item as $item)
{
 $datetime = date_create($item->pubDate);
 $date = date_format($datetime, 'd M Y, H\hi');
 $img = $item->enclosure['url'];
 $des = strval($item->description);
 echo '<li><img src="'.$img.'" class="pics" width="40" height="30"/></li>';
 echo '<li>'.$item->title.'</li>';
 echo '<li>'.$date.'</li>';
 echo '<li value="'.$item->link.'"><a href="'.$item->link.'">'.'Aller vers Article'.'</a></li>';
 // Modal Trigger
 echo '<a class="waves-effect waves-light btn blue lighten-1 modal-trigger" href="#modes" value="'.$des.'">'."Ouvrir description de l'Article".'</a>';
 echo '<li id="1">'.$des.'</li>';
}
echo '</ul>';
}
?>
<!-- Fin Méthode-->
<?php
$color = $_POST['couleur'];
var_dump($color);
?>


<?php if (isset($_POST["newform"])) { ?>
  <div id="colorD"><?=$_POST['couleur']?></div>
    <div class="row">
    <div class="col s8 m8 l8 offset-s2 offset-m2 offset-l2 blue lighten-1"><p class="center">Super Rss Reader</p></div>
    </div>
 <!-- Navbar -->
 <nav>
     <div class="nav-wrapper">
     <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li><a href="sass.html">Culture & Médias</a></li>
        <li><a href="badges.html">Technologies</a></li>
        <li><a href="collapsible.html">Science & Recherhe</a></li>
      </ul>
       <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li><a href="sass.html"><?=$_SESSION['prenom']?> <?=$_SESSION['nom']?></a></li>
        <li><a href="badges.html">Paramètres</a></li>
        <li><a href="badges.html">Déconnexion</a></li>
      </ul>
    </div>
  </nav>
  <!-- fin de la Navbar -->
    <div class="row">
    <div class="col s4 m4 l4"><p>Culture & Médias</p>
    <?php getRSS("https://www.01net.com/rss/actualites/culture-medias/")?>
      </ul>
    </div>
    <div class="col s4 m4 l4"><p>Technologies</p>
    <?php getRSS("https://www.01net.com/rss/actualites/technos/")?>
       </div>
    <div class="col s4 m4 l4"><p>Science & Recherhe</p>
    <?php getRSS("https://www.01net.com/rss/actualites/science-recherche/")?>
    </div>
  </div>
   <!-- Modal Structure -->
  <div id="modes" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Description de l'article</h4>
      <p id="modisp">test :
      <?php
      echo $des;
      ?>
      </p>      
    </div>
    <div class="modal-footer">
      <a href="toto" class="modal-action modal-close btn teal lighten-1" id="urlA">Aller vers l'article</a>
      <a href="index.php" class="modal-action modal-close btn teal darken-2">Fermer</a>
    </div>
  </div>
</div>
<?php } ?>
<!-- Script pour ouvrir modal -->
<script>
$(document).ready(function () {
      $('select').formSelect();
    });

$(document).ready(function(){
  $('a').click(function(){
  var dis = $(this).attr('value');
  var url = $(this).prev('li').attr('value');
  $('#modisp').text(dis);
  $('#urlA').attr('href',url);
  $('.modal').modal();
   });
});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script>
$(document).ready(function getParameters()
{
    var newColor = $('#colorD').text();
    alert(newColor); 
    $(body).css('background-color',newColor);
    alert($(body).css('background-color').val());
}
});
</script>
<!-- Fin du script pour la modal -->
</body>
</html>

