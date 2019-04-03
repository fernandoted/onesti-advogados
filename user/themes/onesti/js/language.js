$(document).ready(function() {
     $(".language[lang='esp']").hide();
     $(".port").click(function(){
           $(".port").addClass("select");
           $(".esp").removeClass("select");
           $(".language[lang=pt-br]").show();
           $('.language[lang=esp]').hide();
        });
        $(".spanish").click(function(){
           $(".spanish").addClass("select");
           $(".port").removeClass("select");
           $(".language[lang=esp]").show();
           $(".language[lang=pt-br]").hide();
    });
});