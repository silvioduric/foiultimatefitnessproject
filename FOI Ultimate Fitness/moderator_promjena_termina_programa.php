<?php

include './smartyHeader.php';
include("./sesija.class.php");
require './baza.class.php';

if (Sesija::dajKorisnika() != NULL) {
    if ($_SESSION["uloga"] == "Obični korisnik") {
        header("Location: index_registrirani_korisnik.php");
    } else {
        $program = $_GET["idProgram"];
        $vrsta = $_GET["idVrsta"];
        if (isset($_POST["terminSubmit"])) {
            if ($_POST["vrijeme"] != "" && $_POST["danUtjednu"] != "") {
                $program = $_GET["idProgram"];
                $vrsta = $_GET["idVrsta"];

                $bp = new Baza();
                $bp->spojiDB();

                if ($bp->pogreskaDB()) {
                    echo "Problem kod upita na bazu!";
                    exit;
                }

                $upitProvjeraDan = "SELECT dan_u_tjednu FROM " .
                        " programi_vjezbanja p, vrsta_programa_program vp WHERE " .
                        " vp.id_vrste = '" . $vrsta . "' AND " .
                        " p.dan_u_tjednu = '" . $_POST["danUtjednu"] . "'";

                $rsProvjeraDan = $bp->selectDB($upitProvjeraDan);

                $upitProvjera = "SELECT vrijeme FROM " .
                        " programi_vjezbanja p, vrsta_programa_program vp WHERE " .
                        " vp.id_vrste = '" . $vrsta . "' AND " .
                        " p.vrijeme = '" . $_POST["vrijeme"] . "'";

                $rsProvjera = $bp->selectDB($upitProvjera);

                if (mysqli_num_rows($rsProvjeraDan) > 0 && mysqli_num_rows($rsProvjera) > 0) {
                    $smarty->assign('id', $program);
                    $smarty->assign('vrsta', $vrsta);
                    $smarty->assign('error', '<a>*Vec postoji definiran termin u ovo vrijeme</a>');
                    $smarty->display('templates/moderator_promjena_termina_header.tpl');
                    $smarty->display('templates/moderator_promjena_termina_body.tpl');
                    $smarty->display('templates/_footer.tpl');
                } else {
                    $insertNovo = "UPDATE programi_vjezbanja SET vrijeme = '" . $_POST["vrijeme"] . "', dan_u_tjednu = '" . $_POST["danUtjednu"] . "' WHERE id_program = '" . $program . "'";
                    $bp->updateDB($insertNovo);

                    $selectKorisnik = "SELECT * FROM korisnici WHERE korisnicko_ime = '" . $_SESSION['korisnik'] . "'";
                    $rsKorisnik = $bp->selectDB($selectKorisnik);

                    while ($row = $rsKorisnik->fetch_assoc()) {
                        $id2 = $row["id_korisnik"];
                        $kIme = $row["korisnicko_ime"];
                    }

                    $selectVirtualno = "SELECT * FROM virtualno_vrijeme";
                    $rsVirtualno = $bp->selectDB($selectVirtualno);

                    while ($row = $rsVirtualno->fetch_assoc()) {
                        $pomak = $row['vrijeme'];
                    }

                    $vrijemeS = date('Y-m-d H:i:s', time() + ($pomak * 60 * 60));

                    $upitDnevnik = "INSERT INTO dnevnik " .
                            " (id_dogadjaja, id_korisnik, naziv_korisnik, opis_promjene, vrijeme_dogadjaja) " .
                            " VALUES (default, '" . $id2 . "' , '" . $kIme . "' , 'Promjena termina mjesecnog programa vjezbanja.', '" . $vrijemeS . "')";
                    $bp->updateDB($upitDnevnik);

                    $upitKorisnici = "SELECT * FROM korisnici k, korisnik_program_vjezbanja kpv WHERE " .
                            " kpv.id_program_vjezbanja = '" . $program . "' AND " .
                            " kpv.id_korisnik = k.id_korisnik";
                    $rs = $bp->selectDB($upitKorisnici);

                    $podaci = array();

                    while (($row = mysqli_fetch_assoc($rs))) {
                        $podaci[] = $row['email'];
                    }


                    $programKorisnik = "SELECT * FROM programi_vjezbanja WHERE id_program = '" . $program . "'";
                    $rsProgram = $bp->selectDB($programKorisnik);


                    while ($row = $rsProgram->fetch_assoc()) {
                        $nazivPrograma = $row["naziv_programa"];
                    }

                    for ($i = 0; $i < sizeof($podaci); $i++) {
                        $mail_to = $podaci[$i];
                        $mail_from = "From: WebDiP_2017@foi.hr";
                        $mail_subject = "Promjena termina vjezbe";
                        $mail_body = "Termin programa '" . $nazivPrograma . "' je promjenjen na '" . $_POST["danUtjednu"] . "' '" . $_POST["vrijeme"] . "'";

                        mail($mail_to, $mail_subject, $mail_body, $mail_from);
                    }




                    header("Location: moderator_mjesecni_program.php?idVrsta=0");
                }
            } else {
                $smarty->assign('id', $program);
                $smarty->assign('vrsta', $vrsta);
                $smarty->assign('error', '<a>*Nisu unesene sve vrijednosti</a>');
                $smarty->display('templates/moderator_promjena_termina_header.tpl');
                $smarty->display('templates/moderator_promjena_termina_body.tpl');
                $smarty->display('templates/_footer.tpl');
            }
        } else {
            $smarty->assign('id', $program);
            $smarty->assign('vrsta', $vrsta);
            $smarty->assign('error', '<a></a>');
            $smarty->display('templates/moderator_promjena_termina_header.tpl');
            $smarty->display('templates/moderator_promjena_termina_body.tpl');
            $smarty->display('templates/_footer.tpl');
        }
    }
} else {
    header("Location: prijava.php");
}
?>
