<?php
if(isset($_POST['couleur']))
{
$color = $_POST['couleur'];
$themes = array("Sea" => "sea.jpg", "Night" => "night.jpg", "Sand" => "sand.jpg");
$urlImage =$themes[$color];
echo '<body style="background-image:url('.$urlImage.');">';
}
else
{
echo '<body style="background-color: #81d4fa">';
}
?>