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

.button {
    width: 15px;
    height: 5px;
    background: white;
    padding: 10px;
    text-align: center;
    border-radius: 10px;
    color: white;
    font-weight: bold;
    text-decoration: none;
}
</style>
<div class="reg">
    <form action="{$smarty.server.PHP_SELF}" id="novi" class="novi_proizvod" method='post'>
             <input type="text" name="moderator" id="moderator" placeholder="Naziv korisnika"/>
                <input id="submitPretraga" class="submitPretraga" type="submit" name="submitPretraga" value="Trazi"/><br><br>
    </form>
</div>
<table>
  <tr>
    <th>Korisnicko ime</th>
    <th>Opis akcije</th>
    <th>Vrijeme</th>
  </tr>
  {foreach from=$podaci item=p}
  <tr>
      <td><a>{$p.naziv_korisnik}</a></td>
      <td><a>{$p.opis_promjene}</a></td>
      <td><a>{$p.vrijeme_dogadjaja}</a></td>
  </tr>
  {/foreach}
</table>
<br><br>
<div class="reg">
     {for $foo=1 to $broj}
         <a class="button" href="admin_dnevnik.php?page={$foo}" style="color: #000; " >{$foo}</a>
    {/for} 
  </div>
</body>