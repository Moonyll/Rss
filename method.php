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
  echo '<ul class="collec">';
  $counter = (int)0;
  $nbArticles = (int)$_POST['nombre'];
  foreach ($rss->channel->item as $item)
  { 
  $datetime = date_create($item->pubDate);
  $date = date_format($datetime, 'd M Y, H\hi');
  $img = $item->enclosure['url'];
  $des = strval($item->description);
  echo '<li>'.$date.'</li>';
  echo '<li><img src="'.$img.'" class="pics" width="40" height="30"/></li>';
  echo '<li>'.$item->title.'</li>';
  // Modal Trigger
  echo '<a class="waves-effect waves-light btn blue lighten-1 modal-trigger" href="#modes" value="'.$des.'">'.'Description Article'.'</a>';
  echo '<li><br></li>';
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