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


#moderator, #program{
  width:80%;
  padding:15px;
  border-radius:5px;
  color: #FFF;
  font:14px Oswald;
  text-transform:uppercase;
  border:1px solid #000;
}
    </style>
<table>
  <tr>
    <th>Naziv vrste</th>
    <th>Prezime i ime moderatora</th>
  </tr>
  {foreach from=$podaci item=p}
  <tr>
    <td>{$p.opis_vrste_programa}</td>
    <td>{$p.prezime} {$p.ime}</td>
    <td><input type="submit" value="Obrisi" onclick="window.location='admin_brisanje_vrste_programa.php?idProgram={$p.id_vrste_programa}'"/> </td>
    <td><input type="submit" value="Izmjeni" onclick="window.location='admin_izmjena_vrste_programa.php?idProgram={$p.id_vrste_programa}'"/> </td>
  </tr>
  {/foreach}
  <tr>
      <td>
          <form class="form" id="logForma" method="post" action="{$smarty.server.PHP_SELF}">
              <span style="color: red; margin: 0 auto;" id="korisnickoImeError">{$error}</span>
              <br>
              <input style="color: #000" class="" name="program" id="program" placeholder="Naziv programa">
              <input style="color: #000"  class="" name="moderator" id="moderator" placeholder="Korisnicko ime moderatora">
              <input type="submit" class="submit" id="programSubmit" name="programSubmit" value="Kreiraj">
          </form>
      </td>
  </tr>
</table>
</body>