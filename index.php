<!DOCTYPE html>
  <html>
    <head>
    <!-- Materialize.css-->
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>

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
 echo '<li><a href="'.$item->link.'">'.'Aller vers Article'.'</a></li>';
 echo '<a class="waves-effect waves-light btn blue lighten-1 modal-trigger" href="#demo-modal-fixed-footer">Ouvrir description de l\'Article</a>';
 echo '<li><br>';
 var_dump($des);
}
echo '</ul>';
}

?>
<!-- Fin Méthode-->
					
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
        <li><a href="sass.html">Nom Prénom</a></li>
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

  <h3>Modal</h3>
<!-- Modal Trigger -->
  <a class="waves-effect waves-light btn blue lighten-1 modal-trigger" href="#demo-modal-fixed-footer">Ouvrir description de l'Article</a>

  <!-- Modal Structure -->
  <div id="demo-modal-fixed-footer" class="modal modal-fixed-footer">
    <div class="modal-content">
      <h4>Modal with Fixed Footer</h4>
      <p><?=$des?></p>      
      
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-action modal-close btn teal lighten-1">Aller vers l'article</a>
      <a href="#!" class="modal-action modal-close btn teal darken-2">Fermer</a>
    </div>
  </div>
</div>
<script>
$(document).ready(function(){
    $('.modal').modal();
  })
</script>
   </body>
  </html>

