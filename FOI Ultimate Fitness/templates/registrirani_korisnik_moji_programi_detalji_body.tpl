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
    <th><h1>DOLASCI</h1></th>
  <tr>
    <th>Datum dolaska</th>
    <th>Opis napredovanja</th>
  </tr>

       {foreach from=$podaciDolasci item=p}
  <tr>
      <td><a>{$p.datum_dolaska}</a></td>
      <td><a>{$p.opis_napredovanja}</a></td>
  </tr>
  {/foreach}
</table>
<table>
    <th><h1>NEDOLASCI</h1></th>
  <tr>
    <th>Datum nedolaska</th>
    <th>Razlog nedolaska</th>
  </tr>

       {foreach from=$podaciNedolasci item=p}
  <tr>
      <td><a>{$p.datum_nedolaska}</a></td>
      <td><a>{$p.opis_napredovanja}</a></td>
  </tr>
  {/foreach}
   <tr>
       <td><input type="submit" value="Kuponi" onclick="window.location='registrirani_korisnik_moji_programi_detalji_kuponi.php?idProgram={$program}'"/></td>
  </tr>
</table>
</body>