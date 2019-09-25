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