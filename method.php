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
  echo '<li><br></li>';
  echo '<li class="blue-text text-light-blue darken-3 item">'.$date.'</li>';
  echo '<li><br></li>';
  echo '<li class="item"><img src="'.$img.'" class="pics" width="40" height="30"/></li>';
  echo '<li class="item desc">'.$item->title.'</li>';
  echo '<li><br></li>';
  // Modal Trigger
  echo '<li hidden id="lk" value="'.$item->link.'"><a href="'.$item->link.'">'.'Aller vers Article'.'</a></li>';
  echo '<li class="item" value="'.$item->link.'"><a class="btn-small blue darken-4 modal-trigger" href="#modes" value="'.$des.'">'.' Description Article <"'.'</a></li>';
  echo '<li class="brd"><br></li>';
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