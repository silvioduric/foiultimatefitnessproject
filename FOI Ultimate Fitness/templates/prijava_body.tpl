<body>
    <script src="javascript/prijava_jquery.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    
   <div class="reg">
    <span style="color: red; margin: 0 auto;" id="korisnickoImeError">{$error}</span>
    <br>
    <h1 style="text-align: center;">Prijava</h1>
    <form class="form" id="logForma" method="post" action="{$smarty.server.PHP_SELF}">
    <input type="text" class="name" name="korisnicko" id="korisnicko" placeholder="Korisnicko ime"><span id="user-result"></span>
    <input type="password" class="email" name="lozinka" id="lozinka" placeholder="Lozinka">
    <a style="color: white; font-size: 12px;" href="zaboravljena_lozinka.php">Zaboravljena lozinka?</a>
    <br><br>
    <input type="submit" class="submit" id="logSubmit" name="logSubmit" value="Prijavi me">
    </form>
   </div>
</body>