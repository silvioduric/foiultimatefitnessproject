<body>    
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
        <script src="javascript/vrste_programa_jquery.js" type="text/javascript"></script>
    <style>
        table { 
  color: #333;
  font-family: Helvetica, Arial, sans-serif;
  width: 640px;
  border-collapse: collapse; border-spacing: 0; 
  margin: 0 auto;
}
		
td, th {  border: 0 none; height: 30px; }
			
th {
	background: linear-gradient(#333 0%,#444 100%);
	color: #FFF; font-weight: bold;
	height: 40px;
}
		
td { background: #FAFAFA; text-align: center; }

		
tr:nth-child(even) td { background: #EEE; } 
tr:nth-child(odd) td { background: #FDFDFD; }



/* Add border-radius to specific cells! */
tr:first-child th:nth-child(2) { 
  border-radius: 5px 0 0 0; 
} 

tr:first-child th:last-child { 
  border-radius: 0 5px 0 0; 
}

#moderator, #nazivPrograma, #danUtjednu, #mjesec, #vrijeme, #brojPolaznika, #program{
  width:80%;
  padding:15px;
  border-radius:5px;
  color: #333;
  font:14px Oswald;
  text-transform:uppercase;
  border:1px solid #000;
}
    </style>
<table>
  <tr>
    <th>Ime</th>
    <th>Prezime</th>
    <th>Email</th>
  </tr>

       {foreach from=$podaci item=p}
  <tr>
      <td><a>{$p.ime}</a></td>
      <td><a>{$p.prezime}</a></td>
      <td><a>{$p.email}</a></td>
      <td><input type="submit" value="Evidencija" onclick="window.location='moderator_evidencija_korisnika.php?idKorisnik={$p.email}&idProgram={$program}'"/></td>
      <td><input type="submit" value="Dopusti pristup" onclick="window.location='moderator_evidencija_korisnika_dopustenje_pristupa.php?idKorisnik={$p.email}&idProgram={$program}'"/></td>
      <td><input type="submit" value="Zabrani pristup" onclick="window.location='moderator_evidencija_korisnika_zabrana_pristupa.php?idKorisnik={$p.email}&idProgram={$program}'"/></td>
  </tr>
  {/foreach}
  <tr>
      <td><input type="submit" value="Promjena termina" onclick="window.location='moderator_promjena_termina_programa.php?idVrsta={$vrsta}&idProgram={$program}'"/></td>
  </tr>
  <tr>
      <td><input type="submit" value="Kuponi" onclick="window.location='moderator_kuponi.php?idVrsta={$vrsta}&idProgram={$program}'"/></td>
  </tr>
</table>
</body>