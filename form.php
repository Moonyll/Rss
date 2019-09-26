<?php if (!isset($_POST["newform"])) { ?>
<div class="title">Bienvenue sur la page Super Rss Reader !</div>
<form id="newfr" method="post" action="index.php">
<fieldset>
        <legend>Connexion</legend>
<label class="labels"><i class="material-icons left">account_circle</i>Nom</label><br><input type="text" name="prenom" /><br>
<label class="labels"><i class="material-icons left">account_circle</i>Prénom</label><br><input type="text" name="nom" /><br>
<div class="col s12 labels">
<label class="labels"><i class="material-icons left">brush</i>Choix du theme</label>        
        <select class=labels id="colorChoice" name="couleur">
            <option class="labels" value="Sea">Sea</option>
            <option class="labels" value="Night">Night</option>
            <option class="labels" value="Sand">Sand</option>
        </select>
        <label class="labels">Choix du theme</label>
</div>
<label class="labels"><i class="material-icons left">library_books</i>Nombre d'articles</label><br><input type="number" name="nombre" min="3" max="8" step="1" value="3"/><br>
<br>
<input type="submit" name="newform" value="Se Connecter" id="formulaire">
</fieldset>
</form>
<?php } ?>