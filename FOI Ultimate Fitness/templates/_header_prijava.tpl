<html>

<!-- HEAD -->
 
<head>
    <title>{$title}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="naslov" content="Stranica za prijavu" />
    <meta name="kljucne_rijeci" content="zadaca 1, prijava" />
    <meta name="datum_izrade" content="17.03.17" />
    <meta name="autor" content="Silvio Đurić" />
    <link rel="stylesheet" type="text/css" href="css/sildjuric.css">
    <style type="text/css">
        .footerDesignPrijava {
            margin-top: 80%;
            width: 100%;
            border-top: 3px solid lightcoral;
            position: absolute;
            text-align: center;
            background-color: white;
            color: black;
        }
        
        .footerDesignPrijava figure {
            margin-top: 40px;
        }

    </style>
</head>

<!-- BODY -->

<body class="bodyObrazaZaPrijavu" onload="kreirajDogadaj();">
    <header>
        <figure class="figureObrazacZaPrijavu01">
            <figcaption class="naslov">{$naslov}</figcaption>
            <img src="Slike/logo.png" width="400" height="120" alt="Logo" usemap="#mapa1" />
            <map name="mapa1">
                    <area href="index.html" 
                          alt="pravokutnik" 
                          shape="rect" 
                          coords="0,0,200,200" 
                          target="a" />
                    <area href="#footer" 
                          alt="pravokutnik" 
                          shape="rect" 
                          coords="200,0,400,200" />
                </map>
        </figure>

        <!-- NAVIGACIJA -->

        <nav>
            <ul>
                    <li>
                        <a href="novi_proizvod.php">{$noviProizvod}</a>
                    </li>
                    <li>
                        <a href="otkljucavanje_korisnika.php">{$otkljucavanjeKorisnika}</a>
                    </li>
                    <li style="float: right">
                        <a href="prijava.php" class="active">{$prijava}</a>
                    </li>
                    
                    <li style="float: right">
                        <a href="registracija.php">{$registracija}</a>
                    </li>
            </ul>
        </nav>
    </header>

    <!-- FORMA ZA PRIJAVU -->
    <section>
        