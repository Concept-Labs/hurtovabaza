<?php
Class Controller_Delivery Extends Controller_Base 
{
    protected function _initTemplate($title)
    {
        
        return parent::_initTemplate($title);
      
	}

    public function index() 
    {
     	
		$template = $this->_initTemplate('Доставка');
        
        $template->setFile('templates/delivery.phtml');

        $db = $this->_registry->get('db');

        $errorsl = array();
        
        if (isset($_POST['log'])) {    !        
            $login = htmlspecialchars(stripslashes(trim($_POST['login'])));
            $password = htmlspecialchars(stripslashes(md5($_POST['password'])));

            $result = mysqli_query($db, "SELECT * FROM users_delivery WHERE login='$login'");
            $row = mysqli_fetch_array($result);

            if (empty(trim($_POST['login']))) {
                $errorsl = 'Введіть login!';
            }
            elseif (empty($row['id'])) {
                $errorsl = 'Невірний login!';
            } 
            elseif (empty($_POST['password'])) {
                $errorsl = 'Введіть пароль!';
            } 
            elseif (empty($row['password'] == $password)) {
                $errorsl = 'Невірний пароль!';
            }

            if (empty($errorsl)) {
                
                $_SESSION['login_delivery'] = $row['login'];


                //setcookie('login_delivery', $row['login'], time() + (3600 * 12));
            }

        }
        
        if (isset($_POST['save_dostavka'])) {
            $banan = $_POST['banan'];
            $apelsin = $_POST['apelsin'];
            $limon = $_POST['limon'];
            $laim = $_POST['laim'];
            $greypfruit = $_POST['greypfruit'];
            $kivi = $_POST['kivi'];
            $ananas_big = $_POST['ananas_big'];
            $ananas_small = $_POST['ananas_small'];
            $granat = $_POST['granat'];
            $grusha = $_POST['grusha'];
            $persik_red = $_POST['persik_red'];
            $persik_princ = $_POST['persik_princ'];
            $persik_ingir = $_POST['persik_ingir'];
            $nektarin_white = $_POST['nektarin_white'];
            $nektarin_black = $_POST['nektarin_black'];
            $abrikos = $_POST['abrikos'];
            $sliva = $_POST['sliva'];
            $vinograd_kish = $_POST['vinograd_kish'];
            $vinograd_myskat = $_POST['vinograd_myskat'];
            $vinograd_arkadiya = $_POST['vinograd_arkadiya'];
            $vinograd_kardinal = $_POST['vinograd_kardinal'];
            $vinograd_preob = $_POST['vinograd_preob'];
            $vinograd_moldova = $_POST['vinograd_moldova'];
            $yabluko_golden = $_POST['yabluko_golden'];
            $izym = $_POST['izym'];
            $chornosliv_vyal = $_POST['chornosliv_vyal'];
            $kuraga = $_POST['kuraga'];
            $finiki = $_POST['finiki'];
            $ingir = $_POST['ingir'];
            $cukaty = $_POST['cukaty'];
            $sushka = $_POST['sushka'];
            $grib = $_POST['grib'];
            $imbir = $_POST['imbir'];
            $ogirok_kornishok = $_POST['ogirok_kornishok'];
            $krip = $_POST['krip'];
            $petrushka = $_POST['petrushka'];
            $salat_green = $_POST['salat_green'];
            $avokado = $_POST['avokado'];
            $ayzberg = $_POST['ayzberg'];
            $rukola = $_POST['rukola'];
            $pomidor_krug = $_POST['pomidor_krug'];
            $pomidor_sliva = $_POST['pomidor_sliva'];
            $pomidor_yellow = $_POST['pomidor_yellow'];
            $pomidor_red = $_POST['pomidor_red'];
            $pomidor_blackprinc = $_POST['pomidor_blackprinc'];
            $pomidor_sokal = $_POST['pomidor_sokal'];
            $pomidor_zorya = $_POST['pomidor_zorya'];
            $pomidor_cheri = $_POST['pomidor_cheri'];
            $pomidor_kokteyl = $_POST['pomidor_kokteyl'];
            $baklazhan = $_POST['baklazhan'];
            $perec_herson = $_POST['perec_herson'];
            $perec_red = $_POST['perec_red'];
            $perec_yellow = $_POST['perec_yellow'];
            $chasnik = $_POST['chasnik'];
            $kapusta_bilock = $_POST['kapusta_bilock'];
            $kapusta_cvitna = $_POST['kapusta_cvitna'];
            $kapusta_pekinska = $_POST['kapusta_pekinska'];
            $kapusta_brokoli = $_POST['kapusta_brokoli'];
            $morkva = $_POST['morkva'];
            $kartoplya = $_POST['kartoplya'];
            $buryak = $_POST['buryak'];
            $cibulya = $_POST['cibulya'];
            $perec_chili = $_POST['perec_chili'];
            $cibulya_yalta = $_POST['cibulya_yalta'];
            $cibulya_white = $_POST['cibulya_white'];
            $soyuzna = $_POST['soyuzna'];
            $originalna = $_POST['originalna'];
            $minska = $_POST['minska'];
            $ryadyanska = $_POST['ryadyanska'];
            $ekstra = $_POST['ekstra'];
            $olive = $_POST['olive'];
            $molochna_gocha = $_POST['molochna_gocha'];
            $posolska_gocha = $_POST['posolska_gocha'];
            $serdelka_ukr = $_POST['serdelka_ukr'];
            $serdelka_tovstunchik = $_POST['serdelka_tovstunchik'];
            $serdelka_shkilna = $_POST['serdelka_shkilna'];
            $serdelka_mocarela = $_POST['serdelka_mocarela'];
            $sosiska_lasunya = $_POST['sosiska_lasunya'];
            $sosiska_lakomka = $_POST['sosiska_lakomka'];
            $krakivska_brashno = $_POST['krakivska_brashno'];
            $shpikachka = $_POST['shpikachka'];
            $dovbushska_brashno = $_POST['dovbushska_brashno'];
            $furshetna_gayar = $_POST['furshetna_gayar'];
            $furshetna_brashno = $_POST['furshetna_brashno'];
            $servilat = $_POST['servilat'];
            $posolska_stema = $_POST['posolska_stema'];
            $firmova_stema = $_POST['firmova_stema'];
            $salyami_italy = $_POST['salyami_italy'];
            $svyatkova_stema = $_POST['svyatkova_stema'];
            $balikova = $_POST['balikova'];
            $mislivski = $_POST['mislivski'];
            $domnadrovah = $_POST['domnadrovah'];
            $moskovska_gorodok = $_POST['moskovska_gorodok'];
            $moskovska_stema = $_POST['moskovska_stema'];
            $moskovska_dstu = $_POST['moskovska_dstu'];
            $zamkova = $_POST['zamkova'];
            $staroslovyanska = $_POST['staroslovyanska'];
            $uzhgorodska = $_POST['uzhgorodska'];
            $avstraliyska = $_POST['avstraliyska'];
            $bochok_polsha = $_POST['bochok_polsha'];
            $mahan = $_POST['mahan'];
            $macik = $_POST['macik'];
            $sloyka = $_POST['sloyka'];
            $sneki = $_POST['sneki'];
            $myunhenski_white = $_POST['myunhenski_white'];
            $furshetna_stasyuk = $_POST['furshetna_stasyuk'];
            $drogobicka_stasyuk = $_POST['drogobicka_stasyuk'];
            $guculska_stasyuk = $_POST['guculska_stasyuk'];
            $domnadrovah_stasyuk = $_POST['domnadrovah_stasyuk'];
            $moskovska_stasyuk = $_POST['moskovska_stasyuk'];
            $mislivski_stasyuk = $_POST['mislivski_stasyuk'];
            $muskatna_stasyuk = $_POST['muskatna_stasyuk'];
            $shashlichni_stasyuk = $_POST['shashlichni_stasyuk'];
            $sir_serenada = $_POST['sir_serenada'];
            $sir_yellow = $_POST['sir_yellow'];
            $mocarela_black = $_POST['mocarela_black'];
            $mocarela_green = $_POST['mocarela_green'];
            $mocarela_long = $_POST['mocarela_long'];
            $sir_king = $_POST['sir_king'];
            $sir_favita = $_POST['sir_favita'];
            $sir_slayen = $_POST['sir_slayen'];
            $sir_topleniy = $_POST['sir_topleniy'];
            $sirki_timosha = $_POST['sirki_timosha'];
            $maslo_minske = $_POST['maslo_minske'];
            $oseledec_ss = $_POST['oseledec_ss'];
            $skumbriya_ss = $_POST['skumbriya_ss'];
            $fileoseledcya_ss = $_POST['fileoseledcya_ss'];
            $tornado_skumbriya = $_POST['tornado_skumbriya'];
            $tyulka_oil = $_POST['tyulka_oil'];
            $tyulka_baltiyska = $_POST['tyulka_baltiyska'];
            $oseledec_goroh = $_POST['oseledec_goroh'];
            $salaka_oil = $_POST['salaka_oil'];
            $shproty_oil = $_POST['shproty_oil'];
            $gorbusha = $_POST['gorbusha'];
            $midiya = $_POST['midiya'];
            $skumbriya_oil = $_POST['skumbriya_oil'];
            $morkva_king = $_POST['morkva_king'];
            $salat_shanhai = $_POST['salat_shanhai'];
            $salat_babinelito = $_POST['salat_babinelito'];
            $morska_cibulya = $_POST['morska_cibulya'];
            $morska_morkva = $_POST['morska_morkva'];
            $skumbriya_hk = $_POST['skumbriya_hk'];
            $skumbriya_gk = $_POST['skumbriya_gk'];
            $fileskumbr_hk = $_POST['fileskumbr_hk'];
            $fileoseled_hk = $_POST['fileoseled_hk'];
            $sayra_hk = $_POST['sayra_hk'];
            $moyva_hk = $_POST['moyva_hk'];
            $salaka_hk = $_POST['salaka_hk'];
            $dunayka = $_POST['dunayka'];
            $vomer = $_POST['vomer'];
            $tushka_bichka = $_POST['tushka_bichka'];
            $hrebetlos_hk = $_POST['hrebetlos_hk'];
            $hrebetlos_gk = $_POST['hrebetlos_gk'];
            $vugor_hk = $_POST['vugor_hk'];
            $lyach_vyaleniy = $_POST['lyach_vyaleniy'];
            $okun_vyaleniy = $_POST['okun_vyaleniy'];
            $chuka_vyalena = $_POST['chuka_vyalena'];
            $chehon_vyalena = $_POST['chehon_vyalena'];
            $plotva_vyalena = $_POST['plotva_vyalena'];
            $oseledec_sm = $_POST['oseledec_sm'];
            $skumbriya_sm = $_POST['skumbriya_sm'];
            $hek_sm = $_POST['hek_sm'];
            $salaka_sm = $_POST['salaka_sm'];
            $krevetka = $_POST['krevetka'];
            $steyk_mas = $_POST['steyk_mas'];
            $steyk_los = $_POST['steyk_los'];
            $krevetka_king = $_POST['krevetka_king'];
            $file_panhasiusa = $_POST['file_panhasiusa'];
            $nototeniya = $_POST['nototeniya'];
            $krupa_yachna = $_POST['krupa_yachna'];
            $krupa_pshenichna = $_POST['krupa_pshenichna'];
            $krupa_kukurudzyana = $_POST['krupa_kukurudzyana'];
            $grechka = $_POST['grechka'];
            $grechaniy_prodil = $_POST['grechaniy_prodil'];
            $perlovka = $_POST['perlovka'];
            $ris_long = $_POST['ris_long'];
            $ris_circle = $_POST['ris_circle'];
            $ris_pareniy = $_POST['ris_pareniy'];
            $ris_sichka = $_POST['ris_sichka'];
            $pshono = $_POST['pshono'];
            $manka = $_POST['manka'];
            $goroh = $_POST['goroh'];
            $arnautka = $_POST['arnautka'];
            $sil_kam = $_POST['sil_kam'];
            $sil_briket = $_POST['sil_briket'];
            $krohmal = $_POST['krohmal'];
            $soda_harchova = $_POST['soda_harchova'];
            $ocet_lviv = $_POST['ocet_lviv'];
            $cukor = $_POST['cukor'];
            $kilka_darinka = $_POST['kilka_darinka'];
            $kukurudza_koncerv = $_POST['kukurudza_koncerv'];
            $vermishel_gorodok_3kg = $_POST['vermishel_gorodok_3kg'];
            $vermishel_gorodok_1kg = $_POST['vermishel_gorodok_1kg'];
            $zernyatko_raf5l = $_POST['zernyatko_raf5l'];
            $zernyatko_neraf5l = $_POST['zernyatko_neraf5l'];
            $zernyatko_raf2l = $_POST['zernyatko_raf2l'];
            $zernyatko_raf3l = $_POST['zernyatko_raf3l'];
            $zernyatko_raf1l = $_POST['zernyatko_raf1l'];
            $zernyatko_neraf1l = $_POST['zernyatko_neraf1l'];
            $oil_polsha1l = $_POST['oil_polsha1l'];
            $oil_polsha5l = $_POST['oil_polsha5l'];
            $date = $_POST['date'];


            $query = mysqli_query($db, "INSERT INTO `delivery`(`id`, `banan`, `apelsin`, `limon`, `laim`, `greypfruit`, `kivi`, `ananas_big`, `ananas_small`, `granat`, `grusha`, `persik_red`, `persik_princ`, `persik_ingir`, `nektarin_white`, `nektarin_black`, `abrikos`, `sliva`, `vinograd_kish`, `vinograd_myskat`, `vinograd_arkadiya`, `vinograd_kardinal`, `vinograd_preob`, `vinograd_moldova`, `yabluko_golden`, `izym`, `chornosliv_vyal`, `kuraga`, `finiki`, `ingir`, `cukaty`, `sushka`, `grib`, `imbir`, `ogirok_kornishok`, `krip`, `petrushka`, `salat_green`, `avokado`, `ayzberg`, `rukola`, `pomidor_krug`, `pomidor_sliva`, `pomidor_yellow`, `pomidor_red`, `pomidor_blackprinc`, `pomidor_sokal`, `pomidor_zorya`, `pomidor_cheri`, `pomidor_kokteyl`, `baklazhan`, `perec_herson`, `perec_red`, `perec_yellow`, `chasnik`, `kapusta_bilock`, `kapusta_cvitna`, `kapusta_pekinska`, `kapusta_brokoli`, `morkva`, `kartoplya`, `buryak`, `cibulya`, `perec_chili`, `cibulya_yalta`, `cibulya_white`, `soyuzna`, `originalna`, `minska`, `ryadyanska`, `ekstra`, `olive`, `molochna_gocha`, `posolska_gocha`, `serdelka_ukr`, `serdelka_tovstunchik`, `serdelka_shkilna`, `serdelka_mocarela`, `sosiska_lasunya`, `sosiska_lakomka`, `krakivska_brashno`, `shpikachka`, `dovbushska_brashno`, `furshetna_gayar`, `furshetna_brashno`, `servilat`, `posolska_stema`, `firmova_stema`, `salyami_italy`, `svyatkova_stema`, `balikova`, `mislivski`, `domnadrovah`, `moskovska_gorodok`, `moskovska_stema`, `moskovska_dstu`, `zamkova`, `staroslovyanska`, `uzhgorodska`, `avstraliyska`, `bochok_polsha`, `mahan`, `macik`, `sloyka`, `sneki`, `myunhenski_white`, `furshetna_stasyuk`, `drogobicka_stasyuk`, `guculska_stasyuk`, `domnadrovah_stasyuk`, `moskovska_stasyuk`, `mislivski_stasyuk`, `muskatna_stasyuk`, `shashlichni_stasyuk`, `sir_serenada`, `sir_yellow`, `mocarela_black`, `mocarela_green`, `mocarela_long`, `sir_king`, `sir_favita`, `sir_slayen`, `sir_topleniy`, `sirki_timosha`, `maslo_minske`, `oseledec_ss`, `skumbriya_ss`, `fileoseledcya_ss`, `tornado_skumbriya`, `tyulka_oil`, `tyulka_baltiyska`, `oseledec_goroh`, `salaka_oil`, `shproty_oil`, `gorbusha`, `midiya`, `skumbriya_oil`, `morkva_king`, `salat_shanhai`, `salat_babinelito`, `morska_cibulya`, `morska_morkva`, `skumbriya_hk`, `skumbriya_gk`, `fileskumbr_hk`, `fileoseled_hk`, `sayra_hk`, `moyva_hk`, `salaka_hk`, `dunayka`, `vomer`, `tushka_bichka`, `hrebetlos_hk`, `hrebetlos_gk`, `vugor_hk`, `lyach_vyaleniy`, `okun_vyaleniy`, `chuka_vyalena`, `chehon_vyalena`, `plotva_vyalena`, `oseledec_sm`, `skumbriya_sm`, `hek_sm`, `salaka_sm`, `krevetka`, `steyk_mas`, `steyk_los`, `krevetka_king`, `file_panhasiusa`, `nototeniya`, `krupa_yachna`, `krupa_pshenichna`, `krupa_kukurudzyana`, `grechka`, `grechaniy_prodil`, `perlovka`, `ris_long`, `ris_circle`, `ris_pareniy`, `ris_sichka`, `pshono`, `manka`, `goroh`, `arnautka`, `sil_kam`, `sil_briket`, `krohmal`, `soda_harchova`, `ocet_lviv`, `cukor`, `kilka_darinka`, `kukurudza_koncerv`, `vermishel_gorodok_3kg`, `vermishel_gorodok_1kg`, `zernyatko_raf5l`, `zernyatko_neraf5l`, `zernyatko_raf2l`, `zernyatko_raf3l`, `zernyatko_raf1l`, `zernyatko_neraf1l`, `oil_polsha1l`, `oil_polsha5l`, `date`) VALUES (null, '$banan', '$apelsin', '$limon', '$laim', '$greypfruit', '$kivi', '$ananas_big', '$ananas_small', '$granat', '$grusha', '$persik_red', '$persik_princ', '$persik_ingir', '$nektarin_white', '$nektarin_black', '$abrikos', '$sliva', '$vinograd_kish', '$vinograd_myskat', '$vinograd_arkadiya', '$vinograd_kardinal', '$vinograd_preob', '$vinograd_moldova', '$yabluko_golden', '$izym', '$chornosliv_vyal', '$kuraga', '$finiki', '$ingir', '$cukaty', '$sushka', '$grib', '$imbir', '$ogirok_kornishok', '$krip', '$petrushka', '$salat_green', '$avokado', '$ayzberg', '$rukola', '$pomidor_krug', '$pomidor_sliva', '$pomidor_yellow', '$pomidor_red', '$pomidor_blackprinc', '$pomidor_sokal', '$pomidor_zorya', '$pomidor_cheri', '$pomidor_kokteyl', '$baklazhan', '$perec_herson', '$perec_red', '$perec_yellow', '$chasnik', '$kapusta_bilock', '$kapusta_cvitna', '$kapusta_pekinska', '$kapusta_brokoli', '$morkva', '$kartoplya', '$buryak', '$cibulya', '$perec_chili', '$cibulya_yalta', '$cibulya_white', '$soyuzna', '$originalna', '$minska', '$ryadyanska', '$ekstra', '$olive', '$molochna_gocha', '$posolska_gocha', '$serdelka_ukr', '$serdelka_tovstunchik', '$serdelka_shkilna', '$serdelka_mocarela', '$sosiska_lasunya', '$sosiska_lakomka', '$krakivska_brashno', '$shpikachka', '$dovbushska_brashno', '$furshetna_gayar', '$furshetna_brashno', '$servilat', '$posolska_stema', '$firmova_stema', '$salyami_italy', '$svyatkova_stema', '$balikova', '$mislivski', '$domnadrovah', '$moskovska_gorodok', '$moskovska_stema', '$moskovska_dstu', '$zamkova', '$staroslovyanska', '$uzhgorodska', '$avstraliyska', '$bochok_polsha', '$mahan', '$macik', '$sloyka', '$sneki', '$myunhenski_white', '$furshetna_stasyuk', '$drogobicka_stasyuk', '$guculska_stasyuk', '$domnadrovah_stasyuk', '$moskovska_stasyuk', '$mislivski_stasyuk', '$muskatna_stasyuk', '$shashlichni_stasyuk', '$sir_serenada', '$sir_yellow', '$mocarela_black', '$mocarela_green', '$mocarela_long', '$sir_king', '$sir_favita', '$sir_slayen', '$sir_topleniy', '$sirki_timosha', '$maslo_minske', '$oseledec_ss', '$skumbriya_ss', '$fileoseledcya_ss', '$tornado_skumbriya', '$tyulka_oil', '$tyulka_baltiyska', '$oseledec_goroh', '$salaka_oil', '$shproty_oil', '$gorbusha', '$midiya', '$skumbriya_oil', '$morkva_king', '$salat_shanhai', '$salat_babinelito', '$morska_cibulya', '$morska_morkva', '$skumbriya_hk', '$skumbriya_gk', '$fileskumbr_hk', '$fileoseled_hk', '$sayra_hk', '$moyva_hk', '$salaka_hk', '$dunayka', '$vomer', '$tushka_bichka', '$hrebetlos_hk', '$hrebetlos_gk', '$vugor_hk', '$lyach_vyaleniy', '$okun_vyaleniy', '$chuka_vyalena', '$chehon_vyalena', '$plotva_vyalena', '$oseledec_sm', '$skumbriya_sm', '$hek_sm', '$salaka_sm', '$krevetka', '$steyk_mas', '$steyk_los', '$krevetka_king', '$file_panhasiusa', '$nototeniya', '$krupa_yachna', '$krupa_pshenichna', '$krupa_kukurudzyana', '$grechka', '$grechaniy_prodil', '$perlovka', '$ris_long', '$ris_circle', '$ris_pareniy', '$ris_sichka', '$pshono', '$manka', '$goroh', '$arnautka', '$sil_kam', '$sil_briket', '$krohmal', '$soda_harchova', '$ocet_lviv', '$cukor', '$kilka_darinka', '$kukurudza_koncerv', '$vermishel_gorodok_3kg', '$vermishel_gorodok_1kg', '$zernyatko_raf5l', '$zernyatko_neraf5l', '$zernyatko_raf2l', '$zernyatko_raf3l', '$zernyatko_raf1l', '$zernyatko_neraf1l', '$oil_polsha1l', '$oil_polsha5l', '$date')");
            echo $banan ." " .$apelsin;
            print_r($query);
        }
        $template->set('errorsl', $errorsl);
        mysqli_close($db);
        
        $this->_renderLayout($template);
    }

    public function logout() 
    {
        
        $template = $this->_initTemplate('Вихід');
        
        $template->setFile('templates/delivery/logout.phtml');
        
        $this->_renderLayout($template);
    }
}