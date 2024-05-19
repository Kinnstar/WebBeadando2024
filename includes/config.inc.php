<?php
$ablakcim = array(
    'cim' => 'TelóBirodalom',
);

$fejlec = array(
	'cim' => 'TelóBirodalom',
	'cim2' => 'Termékek',
    'cim3' => 'Kapcsolat',
    'cim4' => 'Panaszok'
);

$lablec = array(
    'copyright' => 'Copyright '.date("Y").'.',
    'ceg' => 'TelóBirodalom'
);

$oldalak = array(
    '/' => array('fajl' => 'cimlap', 'szoveg' => '', 'menun' => array(1,1)),
    'uzenetek' => array('fajl' => 'uzenetek', 'szoveg' => '', 'menun' => array(1,1)),
    'kapcsolat' => array('fajl' => 'kapcsolat', 'szoveg' => '', 'menun' => array(1,0)),
    'termekek' => array('fajl' => 'termekek', 'szoveg' => '', 'menun' => array(1,0)),
    'belepes' => array('fajl' => 'belepes', 'szoveg' => '', 'menun' => array(1,0)),
    'kilepes' => array('fajl' => 'kilepes', 'szoveg' => 'Kilépés', 'menun' => array(0,1)),
    'belep' => array('fajl' => 'belep', 'szoveg' => '', 'menun' => array(0,0)),
    'regisztral' => array('fajl' => 'regisztral', 'szoveg' => '', 'menun' => array(0,0))
);

$hiba_oldal = array ('fajl' => '404', 'szoveg' => 'A keresett oldal nem található!');
?>