<body>     
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
    <th>Korisnicko ime</th>
    <th>Prezime</th>
    <th>Ime</th>
    <th>Email</th>
    <th>Lozinka</th>
    <th>Tip korisnika</th>
  </tr>
  {foreach from=$podaci item=p}

  <tr>
    <td>{$p.korisnicko_ime}</td>
    <td>{$p.prezime}</td>
    <td>{$p.ime}</td>
    <td>{$p.email}</td>
    <td>{$p.lozinka}</td>
    <td>{$p.naziv_tipa}</td>
    <td>{if $p.zakljucan == 1}
        <input type="submit" value="Otkljucaj" onclick="window.location='otkljucavanje_korisnika.php?korisnicko_ime={$p.korisnicko_ime}'"/>    
    {elseif $p.zakljucan == 0}
    <input type="submit" value="Zakljucaj" onclick="window.location='zakljucavanje_korisnika.php?korisnicko_ime={$p.korisnicko_ime}'"/> 
    {/if}</td>
    <td>{if $p.naziv_tipa === "Moderator"}
        <input type="submit" value="Obrisi moderatora" onclick="window.location='brisanje_moderatora.php?korisnicko_ime={$p.korisnicko_ime}'"/>    
    {elseif $p.naziv_tipa === "Obični korisnik"}
    <input type="submit" value="Dodaj moderatora" onclick="window.location='dodavanje_moderatora.php?korisnicko_ime={$p.korisnicko_ime}'"/>
    {/if}</td>
  </tr>
  {/foreach}
</table>  
</body>