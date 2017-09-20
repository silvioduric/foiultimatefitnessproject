<?php /* Smarty version Smarty-3.1.21-dev, created on 2017-06-28 00:03:55
         compiled from "templates/dokumentacija_body.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6530633225952d64b8c1dd0-86758667%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82a154a3b243ea808f979237243f12527f580afb' => 
    array (
      0 => 'templates/dokumentacija_body.tpl',
      1 => 1497445073,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6530633225952d64b8c1dd0-86758667',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5952d64b911f36_88487247',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5952d64b911f36_88487247')) {function content_5952d64b911f36_88487247($_smarty_tpl) {?><style>
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

ul {
    list-style-type: disc;
    margin: 0;
    padding: 15px,5px;
    overflow: hidden;
}
</style>
<body>
    <div style="margin: 0 auto; width: 800px; text-align: left; color: white;">
        <h1 style="font-weight: bold; text-align: center;">Opis projektnog zadatka</h1>
        <br><br>
         <a>
        Projektni zadatak “Teretana” zasniva se na zamisli aplikacije koja će korisniku omogućiti prijavu u sustav te funkcionalno korištenje tog sustava. Sustav bi registriranom korisniku trebo pruziti mogucnost pregleda vrsta programa vjezbanja kao i prijavu u određeni mjesečni program vježbanja. Također sustav korisniku pruža mogućnost skupljanja bodova te potrošnju tih bodova na kupnju kupona popusta. S druge strane podršku registriranom korisniku pružaju administratorsko te moderatorsko sučelje koji su “mozak” kreiranja i uređivanja “user interface-a”. Administrator osim svih svojih definiranih mogućnosti mora imati mogućnost pristupa u obliku registriranog korisnika i moderatora. Moderator također ima definirane mogućnosti s kojima manipulira u svome pregledu te ima sve mogućnosti koje ima registrirani korisnik. Na kraju je još potrebno spomenuti neregistriranog korisnika koji će imati mogućnost pregleda top tri najposjećenjija programa vježbanja iz određene vrste programa.
        </a>
        <br><br><br>
        <h2 style="font-weight: bold; text-align: center;">Administrator</h2>
        <ul>
            <li>- Kreira vrste program vježbanja (individualni, grupni, ...) i dodjeljuje moderatore.</li>
            <br><br>
            <li>- Kreira kupone popusta (min 3) na koje se mogu trošiti bodovi. Prilikom kreiranja kupona mora definirati naziv, pdf dokument sa opisom i slika, a opcionalno može dodati video.</li>
            <br><br><br>
            <li>- Administrator vidi statistike lojalnosti korisnika. Prva statistika prikazuje broj skupljenih ili potrošenih bodova po korisniku ili po vrsti akcije. Moguće je filtrirati podatke po datumu i vremenu (od-do). Također je moguće sortirati podatke po broju bodova.</li>
        </ul>
        <br><br><br>
        <h2 style="font-weight: bold; text-align: center;">Moderator</h2>
      <ul>
            <li>- Kreira jednomjesečni program (snaga, izdržljivost, ...) za vrstu definirajući termin vježbe (dan u tjednu, koji mjesec, vrijeme i broj polaznika). Ne smije se desiti da u jednom danu postoje dvije vježbe u isto vrijeme unutar istog programa.</li>
            <br><br><br>
            <li>- Može otkazati termin programa, u tom slučaju termin se oslobađa, a moderator mora definirati zamjenski termin. Korisnici se mailom automatski obavještavaju o promjeni.</li>
            <br><br><br>
            <li>- Vodi evidenciju dolazaka i daje opis napredovanja korisnika za određeni dolazak i može zabraniti pristup nekom korisniku (npr. kada uoči da ne izvršava svoje obaveze).</li>
            <br><br><br>
            <li>- Moderator bira kupon i definira koliko bodova je potrebno za pojedini kupon za njegov program. Prilikom odabira kupona mora definirati od kada do kada je kupon aktivan. Ako nije aktivan kupon mora biti sakriven korisnicima u tom programu.</li>
            <br><br><br>
            <li>- Može unijeti kod za kupon i dobiva potvrdu da li takav kod postoji ili je lažan.</li>
            <br><br>
            <li>- Moderator može promijeniti izgled stranice (min 3 osobine – npr. drugačija boja, drugačiji font, ...) za vrstu programa kojima je moderator te se taj izgled primjenjuje na tom dijelu.</li>
        </ul>
        <br><br><br>
        <h2 style="font-weight: bold; text-align: center;">Registrirani korisnik</h2>
        <ul>
            <li>- Može pregledavati programe te vidi broj slobodnih mjesta. Ukoliko mjesta ima može se prijaviti. Jednom prijavljen ne može se više ispisati.</li>
            <br><br><br>
            <li>- Nakon što je prijavljen može pregledavati evidencije dolazaka i opise napredovanja za svaki dolazak na kojem je bio prisutan.</li>
            <br><br><br>
            <li>- Vidi stranicu sa informacijom o broju skupljenih bodova. Dobiva bodove za korištenje određenih dijelova web aplikacije za minimalno pet akcija (po želji).</li>
            <br><br><br>
            <li>- Vidi popis aktivnih kupona u obliku galerije slika za koje ima dovoljno bodova grupirano po programu. Odabirom kupona može vidjeti dokument, sliku i video.</li>
            <br><br><br>
            <li>- Može dodati kupon u košaricu. Kada je zadovoljan, može potrošiti bodove za kupnju kupona u košarici. Kupljeni kuponi dobivaju generiran kod koji se može ispisati (engl. printati).</li>
            <br><br><br>
            <li>- Korisnik može dijeliti (eng. share) neke sadržaje (minimalno jedan) na društvenu mrežu po želji uz pomoć API-a odabranog sustava. (Opcionalno za dodatne bodove)</li>
        </ul>
        <br><br><br>
        <h2 style="font-weight: bold; text-align: center;">Neregistrirani korisnik</h2>
        <ul>
            <li>- <li>- Vidi popis vrste programa i odabirom vrste vidi tri programa sa ukupno najviše dolazaka.</li></li>
        </ul>
         <br><br><br>
        <h1 style="font-weight: bold; text-align: center;">Opis projektnog rješenja</h1>
        <br><br>
        <a>
            Rješenje ovog projektnog zadatka napravljeno je uz pomoć php, smarty, javascript, jquery, captcha , html i css tehnologija/programskih jezika. Sama realizacija projekta je napravljena prema zahtjevima koji su definirani u općim uputama te specifičnim uputama za projekt “Teretana”. Gotovo cijeli projekt realiziran je uz pomoć tabličnih prikaza koji nam omogućavaju jasan uvid u podatke koje povlačimo iz baze podataka. S obzirom da je rješenje projektnog zadatka rađeno sa “Smarty templateing engineom” cijeli projekt se sastoji od php “file-ova” koji prilikom njihovog poziva korisničko sučelje prikazuju uz pomoć tpl “file-ova”. Kao što je u uputama definirano korisnik s ulogom administratora ima pristup svim dijelovima aplikacije te ih može mijenjati/uređivati uz pomoć CRUD kontrola.
        </a>
        <br><br><br>
        <h1 style="font-weight: bold; text-align: center;" onclick="">Era model</h1>
        <section>
            <figure>
                <a href="slike/Era_model.png" target="_blank"> <img src="slike/Era_model.png" width="750"  height="500" alt="era" id="dokuSlika"></a>
            </figure>
       </section>
        <br><br><br>
        <h1 style="font-weight: bold; text-align: center;" onclick="">Popis i opis koristenih skripti</h1>
        <br><br>
        <ul>
            <li>- admin_brisanje_vrste_programa.php - skripta koja omogucuje adminu brisanje odredjene vrste programa</li>
            <li>- admin_dnevnik.php - skripta za prikaz podataka iz dnevnika</li>
            <li>- admin_izmjena_vrste_programa.php - izmjena termina na odredjenoj vrsti programa</li>
            <li>- admin_konfiguracija_sustava. - administratorova stranica konfiguracije</li>
            <li>- admin_kuponi_upload.php - stranica za upload kupona</li>
            <li>- admin_kuponi_upload_dodaj_kupon.php - skripta koja obavlja upload kupona</li>
            <li>- admin_statistika_lojalnosti.php - stranica statitike lojalnosti korisnika</li>
            <li>- admin_virtualno_redirect.php - redirect skripta prilikom postavljanja virtualnog vremena</li>
            <li>- aktivacija.php - skripta koja aktivira korisnicki racun</li>
            <li>- baza.class.php - skripta za povezivanje na bazu te obavljanje crud operacija nad bazom</li>
            <li>- brisanje_moderatora.php - skripta koja brise moderatorsko pravo korisniku</li>
            <li>- dodavanje_moderatora.php - skripta koja dodaje pravo moderatora korisniku</li>           
            <li>- dokumentacija.php - stranica dokumentacije</li>           
            <li>- index.php - pocetna stranica za neregistriraniog korisnka</li>            
            <li>- index_admin.php - pocetna stranica za administratora</li>          
            <li>- index_registrirani_korisnik.php - pocetna stranica za registriranog korisnika</li>            
            <li>- korisnici.php - popis registriranih korisnika</li>  
            <li>- moderator_detalji_mjesecnog_programa.php - detalji mjesecnih programa za odredjenog administratora</li>           
            <li>- moderator_evidencija_korisnika.php - popis svih korisnika te mogucnost evidencije</li>        
            <li>- moderator_evidencija_korisnika_dodaj_dolazak.php - skripta koja omogucava dodavanje dolaska korisniku</li>           
            <li>- moderator_evidencija_korisnika_dodaj_nedolazak.php - skripta koja omogucava dodavanje nedolaska korisniku</li>       
            <li>- moderator_evidencija_korisnika_dopuštanje_pristupa.php - skripta koja omogucava davanje pristupa korisniku da vidi odredjeni program</li>           
            <li>- moderator_evidencija_korisnika_zabrana_pristupa.php - skripta koja omogucava zabranu pristupa odredjenom korisniku</li>           
            <li>- moderator_kuponi.php - skripta koja prikazuje popis dostupnih kupona</li>            
            <li>- moderator_kuponi_dodaj_kupon.php - skripta koja omogucava dodavanje kupna</li>           
            <li>- moderator_kuponi_dodaj_kupon_odabir.php - skripta koja potvrdjuje odabir kupona</li>           
            <li>- moderator_mjesecni_program.php - popis mjesecnih programa koji su dostupni moderatoru</li>           
            <li>- moderator_programi.php - prikaz svih mjesecnih programa</li>         
            <li>- moderator_promjena_termina_programa.php - skripta koja omogucava promjenu termina odredjenog programa</li>
            <li>- moderator_provjera_kupona.php - stranica/skripta koja omogucava provjeru postojanja kupona</li>
            <li>- moderatori.php - skrupta koja vrsi provjeru moderatora iz baze za autocomplete</li>
            <li>- odjava.php - skripta koja odjevljuje korisnika sa sustava</li>
            <li>- otključavanje_korisnika.php - skripta koja otkljucava korisnika</li>
            <li>- prijava.php - skripta za prijavu korisnika</li>
            <li>- prijava_drugi_korak.php - skripta za prijavu korisnika kroz dva koraka</li> 
            <li>- provjera_korisnika_prijava.php - skripta koja vrsi provjeru korisnika prilikom prijave</li>           
            <li>- provjera_korisnika_registracija.php - provjera postojanja istog korisnika u bazi</li>           
            <li>- recaptchalib.php - skripta za recaptchu</li>            
            <li>- registracija.php - skripta za registraciju korisnika</li>          
            <li>- registrirani_korisnik_aktivni_programi.php - skripta koja omogucava uvid registriranom korisniku u sve aktivne programe</li>         
            <li>- registrirani_korisnik_aktivni_programi_detalji.php - detalji odredjenog aktivnog programa</li>           
            <li>- registrirani_korisnik_bodovi.php - uvid u bodove registriranog korisnika</li>          
            <li>- registrirani_korisnik_ispis_kodova.php - ispis kodova kupona koje posjeduje korisnik</li>          
            <li>- registrirani_korisnik_kosarica.php - skripta koja realizira dodavanje proizvoda u kosaricu</li>          
            <li>- registrirani_korisnik_kosarica_lista.php - skripta koja omogucava uvid u popis proizvoda koji su u kosarici</li>           
            <li>- registrirani_korisnik_kosarica_lista_checkout.php - skripta za potvrdu kupovine</li>           
            <li>- registrirani_korisnik_kosarica_lista_obriši.php - skripta koja brise odredjeni kupon iz kosarice</li>          
            <li>- registrirani_korisnik_moji_programi.php - skripta koja prikazuje programe u koje je registriran odredjeni korisnik</li>         
            <li>- registrirani_korisnik_moji_programi_detalji.php - uvid u detalje odredjenog programa</li>           
            <li>- registrirani_korisnik_moji_programi_detalji_kuponi.php - uvid u kupone koje nudi odredjeni program</li>           
            <li>- registrirani_korisnik_moji_programi_detalji_kuponi_detalji.php - detalji kupona odredjenog programa</li>           
            <li>- registrirani_korisnik_program_prijava.php - skripta koja omogucava prijavu odredjenog korisnika u program</li>           
            <li>- sesija.class.php - skripta za kreiranje i unistavanje sesija</li>          
            <li>- smartyHeader.php - skritpa koja omogucava rad sa smarty templateing engineom</li>           
            <li>- vrste_programa_vjezbanja.php - vrste programa vjezbanja</li>
            <li>- zaboravljena_lozinka.php - skripta za realizaciju dobavljanja nove lozinke</li>
            <li>- zaključavanje_korisnika.php - skripta koja omogucava administratoru zakljucavanje odredjenog korisnika</li>
        </ul>
        <br><br><br>
        <h1 style="font-weight: bold; text-align: center;" onclick="">Navigacijski diagram</h1>
        <section>
            <figure>
                 <a href="slike/Navigacijski.png" target="_blank"> <img src="slike/Navigacijski.png" width="750"  height="500" alt="era"></a>
            </figure>
       </section>
         <br><br><br>
        <h1 style="font-weight: bold; text-align: center;" onclick="">Slucaj koristanja - Administrator</h1>
        <section>
            <figure>
                 <a href="slike/Administrator_slucaj_koristenja.png" target="_blank"> <img src="slike/Administrator_slucaj_koristenja.png" width="750"  height="500" alt="era"></a>
            </figure>
       </section>
         <br><br><br>
        <h1 style="font-weight: bold; text-align: center;" onclick="">Slucaj koristanja - Moderator</h1>
        <section>
            <figure>
                 <a href="slike/Moderator_slucaj_koristanja.png" target="_blank"> <img src="slike/Moderator_slucaj_koristanja.png" width="750"  height="500" alt="era"></a>
            </figure>
       </section>
         <br><br><br>
        <h1 style="font-weight: bold; text-align: center;" onclick="">Slucaj koristanja - Registrirani korisnik</h1>
        <section>
            <figure>
                 <a href="slike/Registrirani_korisnik_slucaj_koristanja.png" target="_blank"> <img src="slike/Registrirani_korisnik_slucaj_koristanja.png" width="750"  height="500" alt="era"></a>
            </figure>
       </section>
        <br><br><br>
        <h1 style="font-weight: bold; text-align: center;" onclick="">Slucaj koristanja - Neregistrirani korisnik</h1>
        <section>
            <figure>
                 <a href="slike/Neregistrirani_korisnik_slucaj_koristenja.png" target="_blank"> <img src="slike/Neregistrirani_korisnik_slucaj_koristenja.png" width="750"  height="500" alt="era"></a>
            </figure>
       </section>
        <br><br><br>
        <h1 style="font-weight: bold; text-align: center;" onclick="">Popis koristenih alata</h1>
        <br><br>
        <ul>
            <li>- NetBeans IDE - alat koji je koristen za svrhu programiranja i veci dio izrade projekta</li>
            <br><br><br>
            <li>- Google Chrome - primarni preglednih u kojemu se testralo web mjest</li>
            <br><br><br>
            <li>- MYSQL Workbench - alat koristen za konacni prikaz era modela</li>
            <br><br><br>
            <li>- Photoshop - alat koristen za izradu loga</li>
            <br><br><br>
            <li>- Safari - drugi preglednik koji je koristen za testiranje stranice</li>
            <br><br><br>
            <li>- Filezilla - alat koristen za povremeni prijenos datoteka</li>
            <br><br><br>
            <li>- Virtualbox - cijeli sustav u kojemu se programiralo se "vrtio" uz pomoc ovoga alata</li>
        </ul>
        <br><br><br>
        <h1 style="font-weight: bold; text-align: center;" onclick="">Opis zavrsenosti projekta</h1>
        <br><br>
        <ul>
            <li>- Projekt je realiziran gotovo u cijelosti iako postoji nekoliko funkcionalnosti koje nisu u potpunosti realizirane. Npr. nije koristen Ajax preko cijeloga projekta te odredjene tablice nemaju sve sortove i sva moguca pretrazivanja iako su realizirane originalnim rjesenjem bez DataTablesa</li>
        </ul>
        <br><br><br>
        <h1 style="font-weight: bold; text-align: center;" onclick="">Problemi u radu aplikacije</h1>
        <br><br>
        <ul>
            <li>- Problemi u radu nisu uoceni prilikom brojnih testiranja iako nikada nije garantirano da se nece naci nekakav scenarij koji ce uzrokovati pad odnosno nepravilni rad aplikacije.</li>
        </ul>
    </div>
</body><?php }} ?>
