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
        <h1 style="text-align: center;">KATEGORIJE LOJALNOSTI</h1>
            <form class="form" id="skupljeniForma" method="post" action="{$smarty.server.PHP_SELF}?idVrste=1">
                 <input type="submit" class="submitSkupljeniKorisnik" id="submitSkupljeniKorisnik" name="submitSkupljeniKorisnik" value="KORISNIK - SKUPLJENI BODOVI (NAJVECI - NAJMANJI)">
           </form>
        </div>  
        <div class="reg">
            <form class="form" id="skupljeniForma" method="post" action="{$smarty.server.PHP_SELF}?idVrste=2">
                 <input type="submit" class="submitSkupljeniKorisnik" id="submitSkupljeniKorisnik" name="submitSkupljeniKorisnik" value="KORISNIK - SKUPLJENI BODOVI (NAJMANJI - NAJVECI)">
           </form>
        </div>  
       <div class="reg">
            <form class="form" id="potroseniForma" method="post" action="{$smarty.server.PHP_SELF}?idVrste=3">
                 <input type="submit" class="submitPotroseniKorisnik" id="submitPotroseniKorisnik" name="submitPotroseniKorisnik" value="KORISNIK - POTROSENI BODOVI (NAJVECI - NAJMANJI)">
           </form>
        </div>  
         <div class="reg">
            <form class="form" id="potroseniForma" method="post" action="{$smarty.server.PHP_SELF}?idVrste=4">
                 <input type="submit" class="submitPotroseniKorisnik" id="submitPotroseniKorisnik" name="submitPotroseniKorisnik" value="KORISNIK - POTROSENI BODOVI (NAJMANJI - NAJVECI)">
           </form>
        </div>  
         <div class="reg">
            <form class="form" id="potroseniForma" method="post" action="{$smarty.server.PHP_SELF}?idVrste=5">
                 <input type="submit" class="submitPotroseniKorisnik" id="submitPotroseniKorisnik" name="submitSkupljeniKorisnik" value="KORISNIK - SKUPLJENI BODOVI AKCIJA (NAJVECI - NAJMANJI)">
           </form>
        </div>  
           <div class="reg">
            <form class="form" id="potroseniForma" method="post" action="{$smarty.server.PHP_SELF}?idVrste=6">
                 <input type="submit" class="submitPotroseniKorisnik" id="submitPotroseniKorisnik" name="submitSkupljeniKorisnik" value="KORISNIK - SKUPLJENI BODOVI AKCIJA (NAJMANJI - NAJVECI)">
           </form>
        </div>  
        {if {$zastavica} == 1}
        <table>
            <tr>
                <th>IME</th>
                <th>PREZIME</th>
                <th>BROJ SKUPLJENIH BODOVA</th>
            </tr>
       {foreach from=$korisnikBodovi item=kb}
            <tr>
                <td>{$kb.ime}</td>
                 <td>{$kb.prezime}</td>
                  <td>{$kb.broj_skupljenih_bodova}</td>
            </tr>
        {/foreach}
        </table>    
        {elseif {$zastavica == 2}}
            <table>
            <tr>
                <th>IME</th>
                <th>PREZIME</th>
                <th>BROJ POTROSENIH BODOVA</th>
            </tr>
       {foreach from=$korisnikBodovi item=kb}
            <tr>
                <td>{$kb.ime}</td>
                 <td>{$kb.prezime}</td>
                  <td>{$kb.broj_potrosenih_bodova}</td>
            </tr>
        {/foreach}
        </table>   
         {elseif {$zastavica == 3}}
            <table>
            <tr>
                <th>IME</th>
                <th>PREZIME</th>
                <th>AKCIJA</th>
                <th>BROJ SKUPLJENIH BODOVA</th>
            </tr>
       {foreach from=$korisnikBodovi item=kb}
            <tr>
                <td>{$kb.ime}</td>
                 <td>{$kb.prezime}</td>
                 <td>{$kb.naziv_akcije}</td>
                  <td>{$kb.skupljeno_bodova}</td>
            </tr>
        {/foreach}
        </table>   
        {elseif {$zastavica == 0}}
            
        {/if}
     
 </body>