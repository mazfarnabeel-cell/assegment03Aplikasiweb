<?php

// ==========================
// RUMUS BANGUN DATAR
// ==========================

function luasPersegi($sisi)
{
    return $sisi * $sisi;
}

function luasPersegiPanjang($panjang, $lebar)
{
    return $panjang * $lebar;
}

function luasSegitiga($alas, $tinggi)
{
    return 0.5 * $alas * $tinggi;
}


// ==========================
// RUMUS BANGUN RUANG
// ==========================

function volumeKubus($sisi)
{
    return $sisi * $sisi * $sisi;
}

function volumeBalok($panjang, $lebar, $tinggi)
{
    return $panjang * $lebar * $tinggi;
}

function volumeTabung($jari, $tinggi)
{
    return pi() * $jari * $jari * $tinggi;
}

?>

