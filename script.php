<!-- Scripts -->
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