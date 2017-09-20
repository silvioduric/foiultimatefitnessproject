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
<div class="reg">
    <span style="color: red; margin: 0 auto;" id="korisnickoImeError">{$nema}</span>
    <br>
    <span style="color: green; margin: 0 auto; font-size: 20px; font-weight: bold;" id="korisnickoImeError">{$dobar}</span>
    <br>
</div>
    <table>
    
    <th><h1>POPIS KUPONA</h1></th>
    <br>
       {foreach from=$podaci item=p}
      <tr>
         <td><a style="color: #000; font-size: 24px; font-weight: bold;">{$p.naziv_kupona}</a></td>
         <br><br><br>
    </tr>
     <tr>
         <td><img width="400" height="200" src="./upload/slike/{$p.slika}"></td>
         <br>
         <td><input id="obrisi" name="obrisi" type="submit" value="Obrisi" onclick="window.location='registrirani_korisnik_kosarica_lista_obrisi.php?idKupon={$p.id_kupona}&idKorisnik={$korisnik}.php'"/></td>
    </tr>
        {/foreach}
        <tr>
            <td><input id="checkout" name="checkout" type="submit" value="Kupi" onclick="window.location='registrirani_korisnik_kosarica_lista_checkout.php'"/></td>
         <br><br>
        </tr>
</table>
</body>