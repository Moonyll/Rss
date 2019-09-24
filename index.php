<?php
session_start();
if (isset($_POST['newform']))
{
$_SESSION['prenom'] = $_POST['prenom'];
$_SESSION['nom'] = $_POST['nom'];
$_SESSION['couleur'] = $_POST['couleur'];
$_SESSION['nombre'] = $_POST['nombre'];
}
?>
<!DOCTYPE html>
  <html>
    <head>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
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
<form id="newfr" method="post" action="index.php">
<fieldset>
        <legend>Connexion</legend>
<label>Nom</label><br><input type="text" name="prenom" /><br>
<label>Prénom</label><br><input type="text" name="nom" /><br>
<div class="input-field col s12">
        <select id="colorChoice" name="couleur">
            <option value="#b3f0ff">Bleu</option>
            <option value="#d6d6c2">Gris</option>
            <option value="#ffe082">Ambre</option>
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
<!--Changement de la couleur du document-->
<?php
if(isset($_POST['couleur']))
{
$color = $_POST['couleur'];
echo '<body style="background-color: '.$color.'">';
}
?>
<!-- Méthode pour récupérer un flux rss-->
<?php
// Gestion du nombre d'articles
if(isset($_POST['nombre']))
{
  function getRSS($url)
  {
  $url1 = "https://www.01net.com/rss/actualites/science-recherche/"; /* insérer ici l'adresse du flux RSS de votre choix */
  $url;
  $rss = simplexml_load_file($url);
  echo '<ul class = "collection with-header">';
  $counter = (int)0;
  $nbArticles = (int)$_POST['nombre'];
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
  echo '<a class="waves-effect waves-light btn blue lighten-1 modal-trigger" href="#modes" value="'.$des.'">'.'Description de l\'Article'.'</a>';
  echo '<li id="1">'.$des.'</li>';
  $counter++;
  if ($counter === $nbArticles)
    {
    break;
    }
  }
}
echo '</ul>';
}
?>
<!-- Fin Méthode-->
<?php if (isset($_POST["newform"])) { ?>
    <div class="row">
    <div class="col s8 m8 l8 offset-s2 offset-m2 offset-l2 blue lighten-1"><p class="center">Super Rss Reader</p></div>
    </div>
 <!-- Navbar -->
 <nav>
     <div class="nav-wrapper indigo darken-4 text-lime accent-2">
     <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li class="indigo lighten-4"><a href="#"><i class="material-icons right">local_library</i>Culture</a></li>
        <li class="indigo lighten-3"><a href="#"><i class="material-icons right">toys</i>Technologies</a></li>
        <li class="indigo lighten-2"><a href="#"><i class="material-icons right">nature_people</i>Sciences</a></li>
      </ul>
       <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li class="indigo lighten-1"><a href="#"><i class="material-icons left">tag_faces</i> Bienvenue <?=$_SESSION['prenom']?> <?=$_SESSION['nom']?> !</a></li>
        <li>
        <ul id="dropdown2" class="dropdown-content">
          <li><a href="#" value="#b3f0ff">Bleu</a></li>
          <li><a href="#" value="#d6d6c2">Gris</a></li>
          <li><a href="#" value="#ffe082">Ambre</a></li>
        </ul>
        <a class="btn dropdown-trigger" href="#!" data-target="dropdown2">Paramètres<i class="material-icons right">settings</i></a>      
        </li>
        <li class="light-blue darken-1"><a href="index.php">Déconnexion<i class="material-icons right">transfer_within_a_station</i></a></li>
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
      <a href="#" class="modal-action modal-close btn teal lighten-1" id="urlA">Aller vers l'article</a>
      <a href="#" class="modal-action modal-close btn teal darken-2">Fermer</a>
    </div>
  </div>
</div>
<?php } ?>
<!-- Script pour ouvrir modal -->
<script>
// Liste & dropdown
$(document).ready(function () {
      $('select').formSelect();
      $('.dropdown-trigger').dropdown();
    });
// Modal
$(document).ready(function(){
  $('a').click(function(){
  var dis = $(this).attr('value');
  var url = $(this).prev('li').attr('value');
  $('#modisp').text(dis);
  $('#urlA').attr('href',url);
  $('.modal').modal();
   });
});
// Couleurs
$(document).ready(function() {
  $('a').click(function() {
    var choice = $(this).attr('value');
    $('body').css('background-color', choice);
  });
});

</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<!-- Fin du script pour la modal -->
</body>
</html>

