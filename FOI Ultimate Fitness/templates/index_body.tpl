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
        <h1 style="text-align: center;">VRSTE PROGRAMA</h1>
        {foreach from=$vrste item=v}
            <form class="form" id="programForma" method="post" action="{$smarty.server.PHP_SELF}?idVrste={$v.id_vrste_programa}">
                 <input type="submit" class="submitProgram" id="submitProgram" name="submitProgram" value="{$v.opis_vrste_programa}">
           </form>
        {/foreach}
        </div>  
        {if {$zastavica} == 1}
        <table>
            <th><h1>MJESECNI PROGRAMI VJEZBANJA</h1></th>
            <br>
       {foreach from=$topTri item=t}
            <tr>
                <td>{$t.naziv_programa}</td>
                </tr>
        {/foreach}
        </table>
        {elseif {$zastavica == 0}}
            
        {/if}
     
 </body>