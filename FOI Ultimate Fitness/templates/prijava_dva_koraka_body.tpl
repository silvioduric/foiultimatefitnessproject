<body>
   <div class="reg">
    <span style="color: red; margin: 0 auto;">{$error}</span>
    <br>
    <h1 style="text-align: center;">Potvrda prijave</h1>
    <h3 style="text-align: center; color: white;">Unesite kod koji vam je poslan na email</h3>
    <form class="form" id="logForma" method="post" action="{$smarty.server.PHP_SELF}">
    <input type="text" class="name" name="potvrda" id="potvrda">
    <br><br>
    <input type="submit" class="submit" id="potvrdaSubmit" name="potvrdaSubmit" value="Potvrdi">
    </form>
   </div>
</body>