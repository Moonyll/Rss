<!-- Materialize Min Js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
<!-- JQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>    
<script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script type = "text/javascript" src = "https://code.jquery.com/jquery-2.1.1.min.js"></script>
<!-- Scripts Personnels -->
<!-- Duos Script To Enable Modal -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
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
    $('body').css('background-image','none');
  });
});
</script>