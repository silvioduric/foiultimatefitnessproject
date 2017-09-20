<?php

include './smartyHeader.php';
include("./sesija.class.php");
require './baza.class.php';

if (Sesija::dajKorisnika() != NULL) {
    if ($_SESSION["uloga"] == "Obični korisnik") {
        header("Location: index_registrirani_korisnik.php");
    } else {
        $vrsta = $_GET['idVrsta'];
        if ($vrsta == 0) {
            $vrsta = $_GET['idVrsta'];
            $smarty->assign('idVrste', $vrsta);
            $bp = new Baza();
            $bp->spojiDB();

            if ($bp->pogreskaDB()) {
                echo "Problem kod upita na bazu!";
                exit;
            }

            $upitUlogiran = "SELECT * FROM korisnici WHERE korisnicko_ime = '" . $_SESSION['korisnik'] . "'";
            $rs1 = $bp->selectDB($upitUlogiran);

            while ($row = $rs1->fetch_assoc()) {
                $id = $row["id_korisnik"];
            }

            $upitProgrami = "SELECT id_vrste_programa, opis_vrste_programa, id_program, naziv_programa, dan_u_tjednu, mjesec, vrijeme, broj_polaznika " .
                    "FROM vrste_programa v, vrsta_programa_program vp, programi_vjezbanja p, moderator_vrsta_programa mv " .
                    " WHERE '" . $id . "' = mv.id_moderatora AND " .
                    " mv.id_vrste = v.id_vrste_programa AND " .
                    " v.id_vrste_programa = vp.id_vrste AND " .
                    " vp.id_programa = p.id_program";

            $rs = $bp->selectDB($upitProgrami);
            $podaci = array();

            while (($row = mysqli_fetch_array($rs, MYSQLI_ASSOC)) != false) {
                $podaci[] = $row;
            }

            $smarty->assign('podaci', $podaci);
            $smarty->assign('vrsta', $vrsta);
            $smarty->assign('error', "<a></a>");
            $smarty->display('templates/moderator_mjesecni_program_header.tpl');
            $smarty->display('templates/moderator_mjesecni_program_body.tpl');
            $smarty->display('templates/_footer.tpl');

            unset($podaci);

            $bp->zatvoriDB();
        } else {
            if (isset($_POST["programSubmit"])) {
                if ($_POST["nazivPrograma"] != "" && $_POST["danUtjednu"] != "" && $_POST["mjesec"] != "" && $_POST["vrijeme"] != "" && $_POST["brojPolaznika"] != "") {
                    $bp = new Baza();
                    $bp->spojiDB();

                    if ($bp->pogreskaDB()) {
                        echo "Problem kod upita na bazu!";
                        exit;
                    }
                    $vrsta = $_GET['idVrsta'];
                    $upitProvjeraDan = "SELECT dan_u_tjednu FROM " .
                            " programi_vjezbanja p, vrsta_programa_program vp WHERE " .
                            " p.id_program = vp.id_programa AND " .
                            " vp.id_vrste = '" . $vrsta . "' AND " .
                            " p.dan_u_tjednu = '" . $_POST["danUtjednu"] . "'";
                    $rsProvjeraDan = $bp->selectDB($upitProvjeraDan);

                    $upitProvjera = "SELECT vrijeme FROM " .
                            " programi_vjezbanja p, vrsta_programa_program vp WHERE " .
                            " p.id_program = vp.id_programa AND " .
                            " vp.id_vrste = '" . $vrsta . "' AND " .
                            " p.vrijeme = '" . $_POST["vrijeme"] . "'";
                    $rsProvjera = $bp->selectDB($upitProvjera);

                    if (mysqli_num_rows($rsProvjeraDan) > 0 && mysqli_num_rows($rsProvjera) > 0) {
                        $vrsta = $_GET['idVrsta'];
                        $smarty->assign('idVrste', $vrsta);
                        $upitUlogiran = "SELECT * FROM korisnici WHERE korisnicko_ime = '" . $_SESSION['korisnik'] . "'";
                        $rs1 = $bp->selectDB($upitUlogiran);



                        while ($row = $rs1->fetch_assoc()) {
                            $id = $row["id_korisnik"];
                        }

                        $upitVrsta33 = "SELECT * FROM vrste_programa WHERE id_vrste_programa = '" . $vrsta . "'";
                        $rsVrsta = $bp->selectDB($upitVrsta33);

                        while ($row = $rsVrsta->fetch_assoc()) {
                            $idVrste = $row["id_vrste_programa"];
                            $opisVrste = $row["opis_vrste_programa"];
                        }

                        $upitProgrami = "SELECT id_vrste_programa, opis_vrste_programa, naziv_programa, dan_u_tjednu, mjesec, vrijeme, broj_polaznika " .
                                "FROM vrste_programa v, vrsta_programa_program vp, programi_vjezbanja p, moderator_vrsta_programa mv " .
                                " WHERE '" . $id . "' = mv.id_moderatora AND " .
                                " mv.id_vrste = v.id_vrste_programa AND " .
                                " v.id_vrste_programa = vp.id_vrste AND " .
                                " vp.id_programa = p.id_program";

                        $rs = $bp->selectDB($upitProgrami);
                        $podaci = array();

                        while (($row = mysqli_fetch_array($rs, MYSQLI_ASSOC)) != false) {
                            $podaci[] = $row;
                        }

                        $smarty->assign('podaci', $podaci);
                        $smarty->assign('opisVrste', $opisVrste);
                        $smarty->assign('vrsta', $vrsta);
                        $smarty->assign('error', "<a>*Vjezba se ne moze kreirati jer za definirani dan postoji vjezba u isto vrijeme!</a>");
                        $smarty->display('templates/moderator_mjesecni_program_header.tpl');
                        $smarty->display('templates/moderator_mjesecni_program_body.tpl');
                        $smarty->display('templates/_footer.tpl');

                        unset($podaci);

                        $bp->zatvoriDB();
                    } else {
                        $vrsta = $_GET['idVrsta'];
                        $smarty->assign('idVrste', $vrsta);
                        $upitInsert = "INSERT INTO programi_vjezbanja (id_program, naziv_programa, dan_u_tjednu, mjesec, vrijeme, broj_polaznika) " .
                                " VALUES (default, '" . $_POST["nazivPrograma"] . "', '" . $_POST["danUtjednu"] . "' ,'" . $_POST["mjesec"] . "','" . $_POST["vrijeme"] . "','" . $_POST["brojPolaznika"] . "')";
                        $bp->updateDB($upitInsert);

                        $upitSelect = "SELECT * FROM programi_vjezbanja WHERE naziv_programa = '" . $_POST["nazivPrograma"] . "'";
                        $rsSelect = $bp->selectDB($upitSelect);

                        while ($row = $rsSelect->fetch_assoc()) {
                            $idProgram = $row["id_program"];
                        }

                        $upitVrsta33 = "SELECT * FROM vrste_programa WHERE id_vrste_programa = '" . $vrsta . "'";
                        $rsVrsta = $bp->selectDB($upitVrsta33);

                        while ($row = $rsVrsta->fetch_assoc()) {
                            $idVrste = $row["id_vrste_programa"];
                            $opisVrste = $row["opis_vrste_programa"];
                        }

                        $upitInsert2 = "INSERT INTO vrsta_programa_program (id_vrste, id_programa) " .
                                " VALUES ('" . $idVrste . "', '" . $idProgram . "')";
                        $bp->updateDB($upitInsert2);

                        $upitUlogiran = "SELECT * FROM korisnici WHERE korisnicko_ime = '" . $_SESSION['korisnik'] . "'";
                        $rs1 = $bp->selectDB($upitUlogiran);

                        while ($row = $rs1->fetch_assoc()) {
                            $id = $row["id_korisnik"];
                            $kIme = $row["korisnicko_ime"];
                        }

                        $upitProgrami = "SELECT id_vrste_programa, opis_vrste_programa, naziv_programa, dan_u_tjednu, mjesec, vrijeme, broj_polaznika " .
                                "FROM vrste_programa v, vrsta_programa_program vp, programi_vjezbanja p, moderator_vrsta_programa mv " .
                                " WHERE '" . $id . "' = mv.id_moderatora AND " .
                                " mv.id_vrste = v.id_vrste_programa AND " .
                                " v.id_vrste_programa = vp.id_vrste AND " .
                                " vp.id_programa = p.id_program";

                        $rs = $bp->selectDB($upitProgrami);
                        $podaci = array();

                        while (($row = mysqli_fetch_array($rs, MYSQLI_ASSOC)) != false) {
                            $podaci[] = $row;
                        }

                        $selectVirtualno = "SELECT * FROM virtualno_vrijeme";
                        $rsVirtualno = $bp->selectDB($selectVirtualno);

                        while ($row = $rsVirtualno->fetch_assoc()) {
                            $pomak = $row['vrijeme'];
                        }

                        $vrijemeS = date('Y-m-d H:i:s', time() + ($pomak * 60 * 60));

                        $upitDnevnik = "INSERT INTO dnevnik " .
                                " (id_dogadjaja, id_korisnik, naziv_korisnik, opis_promjene, vrijeme_dogadjaja) " .
                                " VALUES (default, '" . $id . "' , '" . $kIme . "' , 'Kreiran novi mjesecni program.', '" . $vrijemeS . "')";
                        $bp->updateDB($upitDnevnik);

                        $smarty->assign('podaci', $podaci);
                        $smarty->assign('opisVrste', $opisVrste);
                        $smarty->assign('error', "<a></a>");
                        $smarty->assign('vrsta', $vrsta);
                        $smarty->display('templates/moderator_mjesecni_program_header.tpl');
                        $smarty->display('templates/moderator_mjesecni_program_body.tpl');
                        $smarty->display('templates/_footer.tpl');

                        unset($podaci);

                        $bp->zatvoriDB();
                    }
                } else {
                    $vrsta = $_GET['idVrsta'];
                    $smarty->assign('idVrste', $vrsta);
                    $bp = new Baza();
                    $bp->spojiDB();

                    if ($bp->pogreskaDB()) {
                        echo "Problem kod upita na bazu!";
                        exit;
                    }

                    $upitUlogiran = "SELECT * FROM korisnici WHERE korisnicko_ime = '" . $_SESSION['korisnik'] . "'";
                    $rs1 = $bp->selectDB($upitUlogiran);

                    while ($row = $rs1->fetch_assoc()) {
                        $id = $row["id_korisnik"];
                    }

                    $upitProgrami = "SELECT id_vrste_programa, opis_vrste_programa, naziv_programa, dan_u_tjednu, mjesec, vrijeme, broj_polaznika " .
                            "FROM vrste_programa v, vrsta_programa_program vp, programi_vjezbanja p, moderator_vrsta_programa mv " .
                            " WHERE '" . $id . "' = mv.id_moderatora AND " .
                            " mv.id_vrste = v.id_vrste_programa AND " .
                            " v.id_vrste_programa = vp.id_vrste AND " .
                            " vp.id_programa = p.id_program";

                    $rs = $bp->selectDB($upitProgrami);
                    $podaci = array();

                    while (($row = mysqli_fetch_array($rs, MYSQLI_ASSOC)) != false) {
                        $podaci[] = $row;
                    }

                    $upitVrsta3 = "SELECT * FROM vrste_programa WHERE id_vrste_programa = '" . $vrsta . "'";
                    $rsVrsta = $bp->selectDB($upitVrsta3);

                    while ($row = $rsVrsta->fetch_assoc()) {
                        $opisVrste = $row["opis_vrste_programa"];
                        $idVrste = $row["id_vrste_programa"];
                    }

                    $smarty->assign('podaci', $podaci);
                    $smarty->assign('opisVrste', $opisVrste);
                    $smarty->assign('vrsta', $vrsta);
                    $smarty->assign('error', "<a>*Potrebno je popuniti sve inpute s podacima!</a>");
                    $smarty->display('templates/moderator_mjesecni_program_header.tpl');
                    $smarty->display('templates/moderator_mjesecni_program_body.tpl');
                    $smarty->display('templates/_footer.tpl');

                    unset($podaci);

                    $bp->zatvoriDB();
                }
            } else {
                $smarty->assign('idVrste', $vrsta);
                $bp = new Baza();
                $bp->spojiDB();

                if ($bp->pogreskaDB()) {
                    echo "Problem kod upita na bazu!";
                    exit;
                }

                $upitUlogiran = "SELECT * FROM korisnici WHERE korisnicko_ime = '" . $_SESSION['korisnik'] . "'";
                $rs1 = $bp->selectDB($upitUlogiran);

                while ($row = $rs1->fetch_assoc()) {
                    $id = $row["id_korisnik"];
                }

                $upitProgrami = "SELECT id_vrste_programa, opis_vrste_programa, naziv_programa, dan_u_tjednu, mjesec, vrijeme, broj_polaznika " .
                        "FROM vrste_programa v, vrsta_programa_program vp, programi_vjezbanja p, moderator_vrsta_programa mv " .
                        " WHERE '" . $id . "' = mv.id_moderatora AND " .
                        " mv.id_vrste = v.id_vrste_programa AND " .
                        " v.id_vrste_programa = vp.id_vrste AND " .
                        " vp.id_programa = p.id_program";

                $rs = $bp->selectDB($upitProgrami);
                $podaci = array();

                while (($row = mysqli_fetch_array($rs, MYSQLI_ASSOC)) != false) {
                    $podaci[] = $row;
                }

                $upitVrsta3 = "SELECT * FROM vrste_programa WHERE id_vrste_programa = '" . $vrsta . "'";
                $rsVrsta = $bp->selectDB($upitVrsta3);

                while ($row = $rsVrsta->fetch_assoc()) {
                    $opisVrste = $row["opis_vrste_programa"];
                    $idVrste = $row["id_vrste_programa"];
                }

                $smarty->assign('podaci', $podaci);
                $smarty->assign('opisVrste', $opisVrste);
                $smarty->assign('error', "<a></a>");
                $smarty->assign('vrsta', $vrsta);
                $smarty->display('templates/moderator_mjesecni_program_header.tpl');
                $smarty->display('templates/moderator_mjesecni_program_body.tpl');
                $smarty->display('templates/_footer.tpl');

                unset($podaci);

                $bp->zatvoriDB();
            }
        }
    }
} else {
    header("Location: prijava.php");
}
?>
