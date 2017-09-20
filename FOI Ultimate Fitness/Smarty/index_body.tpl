 <body>
      <script src="javascript/index_jquery.js" type="text/javascript"></script>
      <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
      <script type="text/javascript" charset="UTF-8" src="http://chs03.cookie-script.com/s/64c88ae3e6e5b135da1d3cef175ab922.js"></script>
    
    {foreach from=$podaci item=p}
        <input type="submit" id="showmenu">{$p.opis_vrste_programa}</div>
    <div class="menu" style="display: none;">
        <ul>
            <li>{$p.naziv_programa}</li>
            <li>{$p.broj_polaznika}</li>
        </ul>
    </div>
    {/foreach}
 </body>