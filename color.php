<?php
if(isset($_POST['couleur']))
{
$color = $_POST['couleur'];
echo '<body style="background-image:none; background-color: '.$color.'">';
}
else
{
echo '<body style="background-color: #81d4fa">';
}
?>