<body>
   <div class="reg">
    <span style="color: red; margin: 0 auto;" id="korisnickoImeError">{$error}</span>
    <br>
    <span style="color: green; margin: 0 auto;" id="korisnickoImeError">{$succes}</span>
    <br>
    <h3 style="text-align: center; color: white;">Unesite email s kojim ste registrirali vas korisnicki racun</h3>
    <form class="form" id="logForma" method="post" action="{$smarty.server.PHP_SELF}">
    <input type="email" class="name" name="email" id="email">
    <br><br>
    <input type="submit" class="submit" id="zaboravljenaSubmit" name="zaboravljenaSubmit" value="Posalji">
    </form>
   </div>
</body>