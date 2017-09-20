/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function imeProvjera() {
    var ime = document.getElementById("ime").value;
    if (ime.length === 0) {
        document.getElementById("imeError").innerHTML = "*Polje ime nesmije biti prazno";
        document.getElementById("imeError2").innerHTML = "";
        document.getElementById("imeError3").innerHTML = "";
        return false;
    } else {
        document.getElementById("imeError").innerHTML = "";
        var znakovi = new RegExp(/\"|\(|\)|\/|{|}|\'|\#|\\|\!/);

        if (znakovi.test(ime)) {
            document.getElementById("imeError2").innerHTML = "*Ime sadrzi nedopusten znak!";
            return false;
        } else {
            document.getElementById("imeError2").innerHTML = "";
        }

        if (ime[0].toUpperCase() !== ime[0]) {
            document.getElementById("imeError3").innerHTML = "*Ime mora pocinjati velikim slovom!";
            return false;
        } else {
            document.getElementById("imeError3").innerHTML = "";
        }
    }
}

function prezimeProvjera() {
    var prezime = document.getElementById("prezime").value;
    if (prezime.length === 0) {
        document.getElementById("prezimeError").innerHTML = "*Polje prezime nesmije biti prazno";
        document.getElementById("prezimeError2").innerHTML = "";
        document.getElementById("prezimeError3").innerHTML = "";
        return false;
    } else {
        document.getElementById("prezimeError").innerHTML = "";
        var znakovi = new RegExp(/\"|\(|\)|\/|{|}|\'|\#|\\|\!/);

        if (znakovi.test(prezime)) {
            document.getElementById("prezimeError2").innerHTML = "*Prezime sadrzi nedopusten znak!";
            return false;
        } else {
            document.getElementById("prezimeError2").innerHTML = "";
        }

        if (prezime[0].toUpperCase() !== prezime[0]) {
            document.getElementById("prezimeError3").innerHTML = "*Prezime mora pocinjati velikim slovom!";
            return false;
        } else {
            document.getElementById("prezimeimeError3").innerHTML = "";
        }
    }
}

function lozinkaProvjera() {
    var lozinka = document.getElementById("lozinka").value;
    var ponovljena = document.getElementById("ponovljena").value;
    document.getElementById("ponovljena").disabled = false;
    var lozinkaZnakovi = new RegExp(/^(?=(?:.*[A-Z]){2,})(?=(?:.*[a-z]){2,})(?=(?:.*[0-9]){1,})\S{5,15}$/);

    if (lozinka.length === 0) {
        document.getElementById("lozinkaError").innerHTML = "*Polje lozinka nesmije biti prazno";
        document.getElementById("lozinkaError2").innerHTML = "";
        document.getElementById("lozinkaError3").innerHTML = "";
        document.getElementById("ponovljena").disabled = true;
    } else {
        document.getElementById("lozinkaError").innerHTML = "";
        if (!lozinkaZnakovi.test(lozinka)) {
            document.getElementById("lozinkaError2").innerHTML = "*Lozinka mora sadrzavati barem dva velika slova, dva broja i biti dugacka 5-15 znakova!";
            document.getElementById("ponovljena").disabled = false;
        } else {
            document.getElementById("lozinkaError2").innerHTML = "";
            document.getElementById("ponovljena").disabled = false;
            if (lozinka !== ponovljena) {
                document.getElementById("lozinkaError3").innerHTML = "*Lozinka i potvrda lozinke nisu iste!";
            } else {
                document.getElementById("lozinkaError3").innerHTML = "";
            }
        }
    }
}

function emailProvjera() {
    var email = document.getElementById("email").value;
    var struktura = new RegExp(/\S+@\S+\.\S+/);
    
    if (email.length === 0) {
        document.getElementById("emailError2").innerHTML = "*Polje email nesmije biti prazno!";
        document.getElementById("emailError").innerHTML = "";
    } else {
        document.getElementById("emailError2").innerHTML = "";
        if (struktura.test(email)) {
            document.getElementById("emailError").innerHTML = "";
        } else {
            document.getElementById("emailError").innerHTML = "*Email nije pravilnog oblika (primjer@primjer.primjer)!";
        }
    }
}

document.addEventListener('DOMContentLoaded', function () {
    document.getElementById("regForma").addEventListener("click", function () {
        emailProvjera();
    }, false);

    document.getElementById("regForma").addEventListener("click", function () {
        imeProvjera();
    }, false);

    document.getElementById("regForma").addEventListener("click", function () {
        prezimeProvjera();
    }, false);

    document.getElementById("regForma").addEventListener("click", function () {
        lozinkaProvjera();
    }, false);


});


