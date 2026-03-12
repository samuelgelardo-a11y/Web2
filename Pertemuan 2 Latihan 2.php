<?php

// nama peralatan
$brg1 = "Buku";
$brg2 = "Mouse";
$brg3 = "FlashDisk";
$brg4 = "Pulpen";

// harga
$harga1 = 17500;
$harga2 = 30000;
$harga3 = 70000;
$harga4 = 22300;

// jumlah
$jml1 = 2;
$jml2 = 5;
$jml3 = 1;
$jml4 = 3;

// total per barang
$th1 = $harga1 * $jml1;
$th2 = $harga2 * $jml2;
$th3 = $harga3 * $jml3;
$th4 = $harga4 * $jml4;

// total semua
$total = $th1 + $th2 + $th3 + $th4;

// diskon
$diskon = 5;
$potongan = $total * $diskon / 100;

// bayar
$bayar = $total - $potongan;

echo "DAFTAR PEMESANAN PERALATAN KANTOR\n\n";

echo "Buku      : $jml1 x $harga1 = $th1\n";
echo "Mouse     : $jml2 x $harga2 = $th2\n";
echo "FlashDisk : $jml3 x $harga3 = $th3\n";
echo "Pulpen    : $jml4 x $harga4 = $th4\n";

echo "\nTotal Harga : $total";
echo "\nDiskon 5%   : $potongan";
echo "\nHarus Bayar : $bayar";

?>
