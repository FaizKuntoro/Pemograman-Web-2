<?php

$nama = $_GET['customer'];
$jumlah = $_GET['jumlah'];

if($_GET['produk'] == 'tv'  ){
    $harga = 4200000;
} elseif($_GET['produk'] == 'kulkas') {
    $harga = 3100000;
} elseif($_GET['produk'] == 'mesin') {
    $harga = 3800000;
}

if($_GET['produk'] == 'tv'  ){
    $pesanan = 'TV';
} elseif($_GET['produk'] == 'kulkas') {
    $pesanan = 'KULKAS';
} elseif($_GET['produk'] == 'mesin') {
    $pesanan = 'MESIN CUCI';
}

$total = $jumlah * $harga

?>