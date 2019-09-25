<!-- Navbar -->
<nav>
     <div class="nav-wrapper indigo darken-4">
     <ul id="nav-mobile" class="left hide-on-med-and-down">
        <li class="indigo lighten-4"><a href="#"><i class="material-icons right">local_library</i>Culture</a></li>
        <li class="indigo lighten-3"><a href="#"><i class="material-icons right">toys</i>Technologies</a></li>
        <li class="indigo lighten-2"><a href="#"><i class="material-icons right">nature_people</i>Sciences</a></li>
      </ul>
       <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li class="indigo lighten-1"><a href="#"><i class="material-icons left">tag_faces</i> Bienvenue <?=$_SESSION['prenom']?> <?=$_SESSION['nom']?> !</a></li>
        <li>
        <ul id="dropdown2" class="dropdown-content text-blue-grey darken-4">
          <li class="blue lighten-5"><a href="#" value="#b3f0ff">Bleu<i class="material-icons right">stars</i></a></li>
          <li class="grey lighten-2"><a href="#" value="#d6d6c2">Gris<i class="material-icons right">stars</i></a></li>
          <li class="amber lighten-3"><a href="#" value="#ffe082">Ambre<i class="material-icons right">stars</i></a></li>
        </ul>
        <a class="btn dropdown-trigger" href="#!" data-target="dropdown2">Paramètres<i class="material-icons right">settings</i></a>      
        </li>
        <li class="light-blue darken-1"><a href="index.php">Déconnexion<i class="material-icons right">transfer_within_a_station</i></a></li>
      </ul>
    </div>
  </nav>
  <!-- fin de la Navbar -->