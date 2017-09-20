<body>    
   <div class="reg">
    <h1 style="text-align: center;">Dodavanje kupona</h1>
    <form enctype="multipart/form-data" class="form" id="regForma" method="post" action="kuponi_upload.php">
    <input type="text" class="name" name="nazivKupona" id="nazivKupona" placeholder="Naziv kupona">
    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
    Dodaj PDF: <input type="file" />
    <input type="submit" class="submit" id="kuponSubmit" name="kuponSubmit" value="Kreiraj">
    </form>
   </div>
</body>