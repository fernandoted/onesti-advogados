//collapse
function toggle_block(id) {
   var e = document.getElementById(id);
   if (e.style.display == 'block')
      e.style.display = 'none';
   else
      e.style.display = 'block';
}
// praticamos section
$(document).ready(function() {
   $("#ambiental").hide();
   $(".ambiental").click(function(){
      // $(".port").addClass("select");
      // $(".esp").removeClass("select");
      $("#ambiental").show();
      $('#bono').hide();
      $('#diversidade').hide();
      $('#carreira').hide();
   });
   $(".bono").click(function(){
      $("#ambiental").hide();
      $('#bono').show();
      $('#diversidade').hide();
      $('#carreira').hide();
   });
   $(".diversidade").click(function(){
      $("#ambiental").hide();
      $('#bono').hide();
      $('#diversidade').show();
      $('#carreira').hide();
   });
   $(".carreira").click(function(){
      $("#ambiental").hide();
      $('#bono').hide();
      $('#diversidade').hide();
      $('#carreira').show();
   });
});

// temos section
$(document).ready(function() {
   $("#profissional").hide();
   $(".profissional").click(function(){
      $("#profissional").show();
      $('#parceiros').hide();
      $('#tecnologia').hide();
   });
   $(".parceiros").click(function(){
      $("#profissional").hide();
      $('#parceiros').show();
      $('#tecnologia').hide();
   });
   $(".tecnologia").click(function(){
      $("#profissional").hide();
      $('#parceiros').hide();
      $('#tecnologia').show();
   });
});