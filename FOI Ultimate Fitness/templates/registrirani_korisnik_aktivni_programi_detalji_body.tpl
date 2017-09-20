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
    </style>
<table>
  <tr>
    <th>Naziv programa</th>
    <th>Dan u tjednu</th>
    <th>Mjesec</th>
    <th>Vrijeme</th>
    <th>Broj polaznika</th>
  </tr>
  {foreach from=$podaci item=p}
  <tr>
      <td><a>{$p.naziv_programa}</a></td>
      <td><a>{$p.dan_u_tjednu}</a></td>
      <td><a>{$p.mjesec}</a></td>
      <td><a>{$p.vrijeme}</a></td>
      <td><a>{$brojZauzatih}/{$p.broj_polaznika}</a></td>
  </tr>
   {if {$brojZauzatih} < {$p.broj_polaznika}}
       {if {$prijavljen} == 0}
        <td><input type="submit" value="Prijavi se" onclick="window.location='registrirani_korisnik_program_prijava.php?idProgram={$p.id_program}'"/></td>
       {/if}
   {/if}
   
  {/foreach}
</table>
</body>