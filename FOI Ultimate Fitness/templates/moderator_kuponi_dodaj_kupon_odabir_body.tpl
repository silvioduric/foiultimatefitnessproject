<body>
     <div class="reg">
        <span style="color: red; margin: 0 auto;" id="korisnickoImeError">{$error}</span>
        <br>
        <form class="form" id="logForma" method="post" action="{$smarty.server.PHP_SELF}?idKupon={$kupon}&idProgram={$program}">
            <label style="color: white" for="datumOd"><a>Vrijedi od: </a></label>
            <input type="date"  class="" name="datumOd" id="datumOd">
            <label style="color: white" for="datumDo"><a>Vrijedi do: </a></label>
            <input type="date"  class="" name="datumDo" id="datumDo">
            <br><br>
            <input type="text" class="" name="brojBodova" id="brojBodova" placeholder="Broj bodova">
            <input type="submit" class="kuponSubmit" id="kuponSubmit" name="kuponSubmit" value="Kreiraj">
          </form>
    </div>
</body>