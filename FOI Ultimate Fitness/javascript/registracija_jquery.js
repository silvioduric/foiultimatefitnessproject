
   $(document).ready(function() {
    var x_timer;    
    $("#korisnicko").keyup(function (e){
        clearTimeout(x_timer);
        var korisnicko_ime = $(this).val();
        x_timer = setTimeout(function(){
            provjeri_korisnicko_ime_ajax(korisnicko_ime);
        }, 1000);
    }); 

function provjeri_korisnicko_ime_ajax(korisnickoIme){
    $("#user-result").html('<img src="slike/ajax-loader.gif" />');
    $.post('provjera_korisnika_registracija.php', {'korisnickoIme':korisnickoIme}, function(data) {
      $("#user-result").html(data);
    });
}
}); 
