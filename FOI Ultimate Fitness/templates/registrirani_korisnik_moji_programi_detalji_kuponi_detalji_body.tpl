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
tr:nth-child(odd) td { background: #EEE; }



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
    <th><h1></h1></th>
    <br>
       {foreach from=$podaci item=p}
      <tr>
         <td><a style="color: #000; font-size: 24px; font-weight: bold;">{$p.naziv_kupona}</a></td>
         <br><br><br>
    </tr>
     <tr>
         <td><img width="400" height="200" src="./upload/slike/{$p.slika}"></td>
         <br>
         <td><input type="submit" value="Dodaj u kosaricu" onclick="window.location='registrirani_korisnik_kosarica.php?idKupon={$kupon}&idProgram={$program}'"/></td>
         <br><br>
    </tr>
    <tr>
         <td><a target="_blank" style="color: #000; font-size: 18px;" href="http://barka.foi.hr/WebDiP/2016_projekti/WebDiP2016x034/upload/pdf/{$p.pdf}">Opis kupona (PDF)</a></td>
         <br>
    </tr>
        {/foreach}
          
</table>
    <a href="http://www.facebook.com/sharer.php?u=http://barka.foi.hr/WebDiP/2016_projekti/WebDiP2016x034/upload/pdf/{$p.pdf}" target="_blank">
        <img src="https://simplesharebuttons.com/images/somacro/facebook.png" alt="Facebook" />
    </a>
</body>