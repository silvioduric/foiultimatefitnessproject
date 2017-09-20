<body>
    <div class="reg">
        <span style="color: red; margin: 0 auto; font-weight: bold; font-size: 18px;" id="korisnickoImeError">{$error}</span>
        <br>
        <span style="color: green; margin: 0 auto; font-weight: bold; font-size: 18px;" id="korisnickoImeError">{$dobar}</span>
        <br>
        <h1 style="text-align: center;">Unesite kod kupona</h1>
     <form class="form" id="logForma" method="post" action="{$smarty.server.PHP_SELF}">
         <input type="text" class="name" name="kod" id="kod">
         <br>
        <input type="submit" class="submit" id="kodSubmit" name="kodSubmit" value="Provjeri">
     </form>
</div>
</body>