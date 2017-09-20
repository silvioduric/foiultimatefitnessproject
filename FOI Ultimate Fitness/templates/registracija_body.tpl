<body>
    <link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <script src="javascript/registracija.js" type="text/javascript"></script>
    <script src="javascript/registracija_jquery.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <script src='https://www.google.com/recaptcha/api.js?hl=hr'></script>
    <div>
        <a style="text-align: center;">{$poruka}</a>
        <a style="text-align: center;">{$poruka2}</a>
    </div>
    
<div class="reg">
  <span style="color: red; margin-left: 100px;" id="imeError"></span>
  <br>
  <span style="color: red; margin-left: 100px;" id="imeError2"></span>
  <br>
  <span style="color: red; margin-left: 100px;" id="imeError3"></span>
  <br>
  <span style="color: red; margin-left: 100px;" id="prezimeError"></span>
  <br>
  <span style="color: red; margin-left: 100px;" id="prezimeError2"></span>
  <br>
  <span style="color: red; margin-left: 100px;" id="prezimeError3"></span>
  <br>
  <span style="color: red; margin-left: 100px;" id="lozinkaError"></span>
  <br>
  <span style="color: red; margin-left: 100px;" id="lozinkaError2"></span>
  <br>
  <span style="color: red; margin-left: 100px;" id="lozinkaError3"></span>
  <br>
  <span style="color: red; margin-left: 100px;" id="emailError2"></span>
  <br>
  <span style="color: red; margin-left: 100px;" id="emailError"></span>
  <br>
  <h1>Registracija novog korisnickog racuna</h1>
  <form class="form" id="regForma" method="post" action="{$smarty.server.PHP_SELF}">
    <input type="text" class="name" name="ime" id="ime" placeholder="Ime">
    <input type="text" class="name" name="prezime" id="prezime" placeholder="Prezime">
    <input type="text" class="name" name="korisnicko" id="korisnicko" placeholder="Korisnicko ime"><span id="user-result"></span>
    <input type="email" class="email" name="email" id="email" placeholder="Email">
    <input type="password" class="email" name="lozinka" id="lozinka" placeholder="Lozinka">
    <input type="password" class="email" name="ponovljena" id="ponovljena" placeholder="Ponovite lozinku">
    <br><br>
    <input  id="broj_koraka" type="radio" name="broj_koraka" value="1" checked="checked"><a style="color: white;">Prijava 1 korak</a>
    <br>
    <input  id="broj_koraka" type="radio" name="broj_koraka" value="2"><a style="color: white;">Prijava 2 koraka</a>
    <br><br>
    <div class="g-recaptcha" data-sitekey="6LdPdCMUAAAAABOxt5MYVmtFOYuJgA5iH9VRlaEs"></div> 
    <br><br>
    <input type="submit" class="submit" id="regSubmit" name="regSubmit" value="Registriraj me">
  </form>
</div>
</body>
